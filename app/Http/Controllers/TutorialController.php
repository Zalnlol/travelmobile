<?php

namespace App\Http\Controllers;

class TutorialController extends Controller
{
    public function tutorial1()
    {
        return view("Tutorial-tutorial1");
    }

    public function traveler()
    {
return view("Tutorial-traveler");
    }

    public function owner()
    {
return view("Tutorial-owner");
    }

    public function tutorial2()
    {
        return view("Tutorial-tutorial2");
    }

    public function tutorial3()
    {
        return view("Tutorial-tutorial3");
    }

    public function tutorial4()
    {
        return view("Tutorial-tutorial4");
    }

    public function PolicieRegulation()
    {
        return view("PolicieRegulation");
    }

    public function AboutUs()
    {
        return view("AboutUs");
    }
}
