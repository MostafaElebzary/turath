<?php

namespace App\Http\Controllers\front;

use App\About;
use App\Contact;
use App\Document;
use App\Donation;
use App\Http\Controllers\Controller;
use App\Knowus;
use App\Metsonomia;
use App\Partner;
use App\Pdf;
use App\Program;
use App\Settings;
use App\Slider;
use App\Vision;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $metsonomias = Metsonomia::all();
        $knowus = Knowus::first();
        $prgrams = Program::limit(3)->get();
        $vision = Vision::first();


        return view('front.index', compact('sliders', 'knowus', 'prgrams', 'vision', 'metsonomias'));
    }

    public function VisionTargets()
    {

        $goals = About::first();


        return view('front.visionmessagegoals', compact('goals'));
    }

    public function Architecuture()
    {

        $arch = Settings::first();


        return view('front.architecuture', compact('arch'));
    }

    public function Management()
    {

        $arch = Settings::first();


        return view('front.management', compact('arch'));
    }

    public function PlansReports()
    {

        $plans = Pdf::where('type', 'Plan')->get();
        $reports = Pdf::where('type', 'Report')->get();


        return view('front.plansreports', compact('plans', 'reports'));
    }

    public function SystemsPolicy()
    {

        $System = Pdf::where('type', 'System')->get();
        $Policy = Pdf::where('type', 'Policy')->get();


        return view('front.systemspolicy', compact('System', 'Policy'));
    }

    public function LecDesicions()
    {

        $Mahder = Pdf::where('type', 'Mahder')->get();
        $Decision = Pdf::where('type', 'Decision')->get();


        return view('front.lecdesicions', compact('Decision', 'Mahder'));
    }


    public function documents(Request $request)
    {
        $data = Document::Query();
        if ($request->search) {
            $data = $data->where('name', 'like', '%' . $request->search . '%');
        }
        $data = $data->orderBy('created_at', 'desc')->get();
        return view('front.documents', compact('data'));
    }

    public function parteners()
    {

        $parteners = Partner::all();

        return view('front.parteners', compact('parteners'));
    }

    public function Donation()
    {

        return view('front.donation');
    }


    public function DoDonation(Request $request)
    {

        $data = $this->validate(\request(),
            [
                'name' => 'required',
                'phone' => 'required',
                'type' => 'required',

            ]);

        Donation::create($data);

        session()->flash('success', trans('admin.editsuccess'));
        return redirect(url('/'));

    }

    public function Contact()
    {

        return view('front.contact');
    }


    public function DoContact(Request $request)
    {

        $data = $this->validate(\request(),
            [
                'subject' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'msg' => 'required',
                'type' => 'required',

            ]);

        Contact::create($data);

        session()->flash('success', trans('admin.editsuccess'));
        return redirect(url('/'));

    }


    public function contactInfo()
    {

        return view('front.contactinfo');
    }

}
