<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function visionMission()
    {
        return view('pages.vision-mission');
    }

    public function chairmansDesk()
    {
        return view('pages.chairmans-desk');
    }

    public function principalsDesk()
    {
        return view('pages.principals-desk');
    }

    public function ourStaff()
    {
        return view('pages.our-staff');
    }

    public function academics()
    {
        return view('pages.academics');
    }

    public function results()
    {
        return view('pages.results');
    }

    public function admissionInfo()
    {
        return view('pages.admission-info');
    }

    public function feeStructure()
    {
        return view('pages.fee-structure');
    }

    public function facilities()
    {
        return view('pages.facilities');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function mandatoryDisclosure()
    {
        return view('pages.mandatory-disclosure');
    }
}
