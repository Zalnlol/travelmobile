<?php

namespace App\Http\Controllers;

class TutorialController extends Controller
{
    //Tutorial
    public function tutorial1()
    {
        return view("Tutorial.tutorial1");
    }

    

    public function tutorial2()
    {
        return view("Tutorial.tutorial2");
    }

    public function tutorial3()
    {
        return view("Tutorial.tutorial3");
    }

    public function tutorial4()
    {
        return view("Tutorial.tutorial4");
    }

    //Terms
    public function PolicieRegulation()
    {
        return view("Terms.PolicieRegulation");
    }

    public function Term()
    {
        return view("Terms.Term");
    }

    public function Regu()
    {
        return view("Terms.Regu");
    }

    public function Personalinfo()
    {
        return view("Terms.Personalinfo");
    }

    public function Resolveconflic()
    {
        return view("Terms.Resolveconflic");
    }

    //AboutUs
    public function Procedure1()
    {
        return view("AboutUs.Procedure1");
    }

    public function Procedure2()
    {
        return view("AboutUs.Procedure2");
    }

    public function AboutUs()
    {
        return view("AboutUs.AboutUs");
    }

    public function Features()
    {
        return view("AboutUs.Features");
    }

    public function Renterbenef()
    {
        return view("AboutUs.Renterbenef");
    }

    public function Ownerbenef()
    {
        return view("AboutUs.Ownerbenef");
    }

    public function Carregishowto()
    {
        return view("AboutUs.Carregishowto");
    }

    
}
