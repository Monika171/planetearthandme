<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome Creatures!!';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'SERVICES',
            'services' => ['union of thoughts', 'union of theories', 'union of lost history']
        );
        return view('pages.services')->with($data);
    }
}
