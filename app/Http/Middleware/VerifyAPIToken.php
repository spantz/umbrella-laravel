<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthManager;
use App\Models\AuthToken;

class VerifyAPIToken
{
	private $auth;

	public function __construct(AuthManager $auth)
	{
		$this->auth = $auth;
	}
}