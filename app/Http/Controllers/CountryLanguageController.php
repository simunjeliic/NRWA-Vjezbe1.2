<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryLanguage;

class CountryLanguageController extends Controller
{
    public function index()
    {
        $countrylanguage = CountryLanguage::orderBy('CountryCode','desc')->paginate(10);
        return view('countrylanguage.index', compact('countrylanguage'));
    }
}