<?php

namespace App\Http\Controllers\API;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CredentialController
{

	public function login(Request $request, Authmanager $auth)
	{
		if(!$auth->once['email' => $request->email, 'password' => $request->password]))
		{
			return $this->errorResponse('Error', ['Invalid credentials.']);
		}

		return $this->successResponse(
			'Success',
			$repository->firstOrCreateForUser(
				new AuthTokenFactory(),
					$request->user(),
					$request->ip(),
					$request->header('User-Agent')
					)
				);
	}	
}
