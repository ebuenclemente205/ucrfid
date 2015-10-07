<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Session;
use App\User;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        if(!Auth::check())
        {
            if (Auth::attempt(['username' => $request['idno'], 'password' => $request['password'], 'status' => '1']))
            {
              $user = User::where('username', $request['idno'])->firstorFail();
              $role = $user->position;

              if($role == 'Admin')
                  return redirect('/admin');
              else
                  return redirect('/user');
            }
            else
            {
                $request->flash();
                Session::flash('flash_message', 'Invalid username or password.');
                return redirect('/');
            }
        }
        else
        {
            return redirect('/admin');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
