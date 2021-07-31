<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        if(!$request->has('type')){
            return redirect()->to(($request->has('to')) ? $request->to : '/');
        }

        switch ($request->type) {
            case 'login':
                
                if(!Auth::check()){
                    return route('login');
                }

                return redirect()->to((auth()->user()->is_admin) ? '/staff/dashboard' : '/dashboard');

                break;            
            default:
                
                redirect()->to('/');
                break;
        }
    }
}
