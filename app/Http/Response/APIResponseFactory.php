<?php

namespace App\Http\Response;

use Illuminate\Http\Response;

class APIResponseFactory
{
	public function make($status = 'success', $message = 'Success', $data = [], $httpStatus = 200, $headers = [])
	{
		return (new APIResponse($status, $message, $data, $httpStatus, $headers))->toResponse();
	}
}