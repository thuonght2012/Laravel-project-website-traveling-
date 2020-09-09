<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_controller extends Controller
{
    public function getIndex(){
    	return view('Page.trangchu');
    }
    public function getAbout(){
    	return view('Page.about');
    }
    public function getContact(){
    	return view('Page.contact');
    }
    public function getDestination(){
    	return view('Page.destination');
    }
    public function getDiscount(){
    	return view('Page.discount');
    }
    public function getBooking(){
    	return view('Page.booking');
    }
    public function getBlog(){
    	return view('Page.blog');
    }
}
