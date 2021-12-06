<?php

namespace App\Helpers;

use App\Models\Notification;
use App\Notifications\CompanyNotification;

trait NotificationTrait
{


    public function sendUserNotification($user, $ad, $title_en, $title_ar, $body_en, $body_ar, $type)
    {
        // $lang = request()->header('lang') ?: 'ar';
        if ($type == 'AllUser') {
            $notification = Notification::create([
                'user_id' => null,
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,

            ]);

        } elseif ($type == 'User') {
            $notification = Notification::create([
                'user_id' => $user->id,
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,
            ]);

        } elseif ($type == 'Company') {
            $notification = Notification::create([
                'company_id' => $user->id,
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,

            ]);
        } else {
            $notification = Notification::create([
                'type' => $type,
                'ad_id' => !is_null($ad) ? $ad->id : null,
            ]);
        }

        $notification->translateOrNew('en')->title = $title_en;
        $notification->translateOrNew('ar')->title = $title_ar;
        $notification->translateOrNew('en')->body = $body_en;
        $notification->translateOrNew('ar')->body = $body_ar;
        $notification->save();
        if ($type == 'AllUser') {
            foreach ($user as $user_one) {
                send_to_user([$user_one->device_token], $notification, (!is_null($ad) ? $ad->id : null));
            }
        } elseif ($type == 'User') {
            send_to_user([$user->device_token], $notification, (!is_null($ad) ? $ad->id : null));
        } elseif ($type == 'AllCompanies') {
            foreach ($user as $user_one) {
                send_to_company($user_one, $notification);
            }
        } else {
                 send_to_company($user, $notification);

        }
    }
}
