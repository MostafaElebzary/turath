<?php

use App\Models\User;
use App\Notifications\CompanyNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Notification;

//use Kreait\Firebase\Factory;

// Status Codes
function success()
{
    return 200;
}

function error()
{
    return 401;
}


function token_expired()
{
    return 403;
}

function not_active()
{
    return 405;
}
function not_found()
{
    return 404;
}


function nearest_radius()
{
    return 50000000000; // 30km
}

function google_api_key()
{
    return "AIzaSyAGlTpZIZ49RVV5VX8KhzafRqjzaTRbnn0";
}

function verification_code()
{
//    $code = mt_rand(1000, 9999);
    $code = 1111;
    return $code;
}

function send_to_user($tokens, $msg,$ad_id = "")
{
    send($tokens, $msg, $ad_id);
}

function send_to_company($company, $msg)
{
    Notification::send($company, new CompanyNotification($msg));
}

function send_to_driver($tokens, $msg ,$ad_id = "")
{
    send($tokens, $msg, $ad_id);
}

function send($tokens, $msg,$ad_id)
{
    $api_key = getServerKey();
    $fields = array
    (
        "registration_ids" => $tokens,
        "priority" => 10,
        'data' => [
            'title' => $msg->translate('ar')->title,
            'sound' => 'default',
            'message' => $msg->translate('ar')->body,
            'ad_id' => $ad_id,
        ],
        'notification' => [
            'title' => $msg->translate('ar')->title,
            'sound' => 'default',
            'body' => $msg->translate('ar')->body,
            'ad_id' => $ad_id,
        ],
        'vibrate' => 1,
        'sound' => 1
    );
    $headers = array
    (
        'accept: application/json',
        'Content-Type: application/json',
        'Authorization: key=' . $api_key
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    //  var_dump($result);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }
    curl_close($ch);

    return $result;
}

function getServerKey()
{
    return 'AAAAJXeoeJk:APA91bE0KB96ZoBV_zmFzkNWylCFYafJCKfS3jdrXBcF1Dm4qifwLfeoIvChK8zYQhIGOdgU3pbAtM0U7Nu5agXAtiM1O89qKWMo8mRk7HWKy_Xzt7uuuK_krxxtpp6l4dTiOl9BBxI4';
}

function callback_data($status, $key, $data = null, $token = "")
{
    $language = request()->header('lang');
    $response = [
        'status' => $status,
        'msg' => isset($language) ? Config::get('response.' . $key . '.' . request()->header('lang')) : Config::get('response.' . $key),
        'data' => $data,
    ];
    $token ? $response['token'] = $token : '';
    return response()->json($response);
}

function distance($lat1, $lon1, $lat2, $lon2, $unit = 'K')
{
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
        return ($miles * 1.609344);
    } else if ($unit == "N") {
        return ($miles * 0.8684);
    } else {
        return $miles;
    }

}

function upload($file, $dir)
{

    $image = time() . uniqid() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('uploads' . '/' . $dir), $image);
    return $image;
}

function unlinkFile($image, $path)
{
    if ($image != null) {
        if (!strpos($image, 'https')) {
            if (file_exists(public_path("uploads/$path/") . $image)) {
                unlink(public_path("uploads/$path/") . $image);
            }
        }
    }
    return true;
}


function unlinkImage($image)
{
    if ($image != null) {
        if (!strpos($image, 'https')) {
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }
    return true;
}
// Firebase Connect

function firebase_connect()
{
    $firebase = (new Factory)
        ->withServiceAccount(app_path('handtohandapp-c0717-firebase-adminsdk-xktcv-b3dcd0eddc.json'))
        ->withDatabaseUri('https://handtohandapp-c0717-default-rtdb.firebaseio.com/')
        ->createDatabase();
    return $firebase;
}

function driverChangeOrderStatus($status, $order_type)
{
    if ($order_type == 'Magic') {
        return [
            'AcceptedDelivery' => 'GoToStore',
            'GoToStore' => 'ArriveToStore', // 3
            'ArriveToStore' => 'SendPriceList', // 4
            'AcceptedList' => 'OnWay', // 6
            'OnWay' => 'Arrived',
            'Arrived' => 'Completed',
        ][$status];
    }
    // subscribed
    return [
        'AcceptedDelivery' => 'GoToStore',
        'GoToStore' => 'ArriveToStore', // 3
        'ArriveToStore' => 'OnWay', // 6
        'OnWay' => 'Arrived',
        'Arrived' => 'Completed',
    ][$status];
}

// Admin Helper Functions

if (!function_exists('company_parent')) {
    function company_parent()
    {
        if (Auth::guard('companies')->user()->type == 'Admin') {
            return Auth::guard('companies')->user()->id;
        }else{
            return Auth::guard('companies')->user()->company_id;
        }
    }
}

if (!function_exists('admin_url')) {
    function admin_url($url = null)
    {
        return url('admin/' . $url);
    }
}



if (!function_exists('company_url')) {
    function company_url($url = null)
    {
        return url('company/' . $url);
    }
}
if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admins');
    }
}
if (!function_exists('company')) {
    function company()
    {
        return auth()->guard('companies');
    }
}


