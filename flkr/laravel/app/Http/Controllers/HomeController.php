<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flickr;

class HomeController extends Controller
{
    public function index()
    {
    	return redirect('getAllLatestPhotos/25');
    }
}
