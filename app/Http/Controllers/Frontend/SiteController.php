<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App;
use App\Models\PersonalInfos;
use App\Models\Skills;
use App\Models\Education;
use Mail;
use App\Mail\DemoMail;

class SiteController extends Controller
{
    public function index() {

        $info = PersonalInfos::first();
        $educations = Education::all();
        $skills = Skills::all();

        return view('frontend.site.index', compact('info', 'skills', 'educations'));
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }

    public function sendMail()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        try {
            Mail::to('turgutsalgin5534@gmail.com')->send(new DemoMail($mailData));
           
            dd("Email is sent successfully.");
        } catch(\Exception $e) {
           
            dd($e);
        }
         

    }
}
