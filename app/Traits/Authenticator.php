<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;
use Gate;

trait Authenticator {

	/**
	 * Auth the user by permission
	 * 
	 * @param $permission - The permission 
	 */
	public function can($permission){

		abort_if(Gate::denies($permission), Response::HTTP_FORBIDDEN, '403 Forbidden');
	}
}