<?php

namespace App\Htpp\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

abstract class APIController extends Controller
{
	protected $responseFactory;
}