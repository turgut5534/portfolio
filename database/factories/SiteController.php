<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App;
use App\Models\PersonalInfos;
use App\Models\Skills;
use App\Models\Education;

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
}
