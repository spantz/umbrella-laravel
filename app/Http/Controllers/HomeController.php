<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Repository\LinkRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        dd('home');

        return view('welcome');
    }
}