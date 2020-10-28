<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class showbookController extends Controller
{
    //
    public function index(){
        $response = Http::get('http://tv.ebox.live/')->json();

        dd($response);
    }
}
