<?php

namespace App\Http\Controllers\API;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class CredentialController
{

	public function registerUser(Request $request, UserAndTokenRegistrar $registrar)
	{
		$this->validate($request, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6',
			]);

		return $this->successResponse('Success', $registrar->createUserAndAuthTokenFromRequest($request));
	}

	public function login(Request $request)
	{
		dd('hello');

		if(!$auth->once(['email' => $request->email, 'password' => $request->password]))
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

	public function logout(Request $request, AuthenticationManger $auth)
	{
		$user = $request->user();
		$repository->deleteAuthToken($user->getAuthToken());
		return $this->successResponse();
	}
}
