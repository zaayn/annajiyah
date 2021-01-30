<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile_masjid.index');
    }
    public function about()
    {
        return view('profile_masjid.about');
    }
    public function services()
    {
        return view('profile_masjid.services');
    }
    public function portfolio()
    {
        return view('profile_masjid.portfolio');
    }
    public function team()
    {
        return view('profile_masjid.team');
    }
    public function blog()
    {
        return view('profile_masjid.blog');
    }
}
