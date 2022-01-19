<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SewikaController extends Controller
{
    public function dataWifi()
    {
        $response = Http::get('http://127.0.0.1:8181/api/data-wifi');
        $data = $response->json();



        return view('sewika',compact('data'));
    }

    public function filterData()
    {
        $response = Http::get('http://127.0.0.1:8181/api/data-wifi');
        $data = $response->json();

        return view('sewika',compact('data'));
    }
}
