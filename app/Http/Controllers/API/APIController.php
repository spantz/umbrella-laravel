<?php

namespace App\Htpp\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

abstract class APIController extends Controller
{
	protected $responseFactory;

	public function __construct(APIResponseFactory $responseFactory)
	{
		$this->responseFactory = $responseFactory;
	}
}