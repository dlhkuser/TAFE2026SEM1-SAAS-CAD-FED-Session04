<?php

namespace App\Http\Controllers\StaticPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('static_pages.index');
    }

    public function thankYou()
    {
        return view('static_pages.thankyou');
    }
}
