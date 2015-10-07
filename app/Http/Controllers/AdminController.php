<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SearchUserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Employee;
use App\Department;
use App\User;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      if(Auth::user()->position == 'Admin')
      {
          return view('home');
      }
      else
      {
          return redirect('user');
      }
    }

    public function users()
    {
      if(Auth::user()->position == 'Admin')
      {
        $users = User::all();

        return view('admin.index', compact('users'));
      }
      else
      {
          return redirect('user');
      }
    }

    public function search()
    {
      if(Auth::user()->position == 'Admin')
      {
        $employee = '';
        return view('admin.user-search', compact('employee'));
      }
      else
      {
          return redirect('user');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SearchUserRequest $request)
    {
        $idno = $request->get('idno');
        $employee = Employee::where('idno', $idno)->first();

        $request->flash();

        if(count($employee) == 1)
        {
          return view('admin.create', compact('employee'));
        }
        else
        {
          return view('admin.user-search')->with('errormsg', 'idno not found');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request, $idno)
    {
        $employee = Employee::where('idno', $idno)->firstOrFail();
        $find_user = User::where('username', $idno)->first();

        if(count($find_user) == 0)
        {
            $user = new User(array(
              'fullName' => $employee->firstName . $employee->lastName,
              'position' => $request->get('position'),
              'username' => $employee->idno,
              'password' => bcrypt($request->get('password')),
              'status' => $request->get('status'),
              'col_id' => $employee->col_id,
              'emp_id' => $employee->idno,
            ));

            $user->save();

            return redirect('/admin/users/'.$idno)->with('status', '1');
        }
        else
        {
            return redirect('/admin/users/'.$idno)->with('status', '0');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idno)
    {
      if(Auth::user()->position == 'Admin')
      {
        $user = User::where('username', $idno)->firstorFail();
        return view('admin.show', compact('user'));
      }
      else
      {
          return redirect('/admin/users/'.$idno)->with('status', '0');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idno)
    {
      if(Auth::user()->position == 'Admin')
      {
        $user = User::where('id', $idno)->first();
        return view('admin.edit', compact('user'));
      }
      else
      {
          return redirect('/admin/users/'.$idno)->with('status', '0');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUserRequest $request, $idno)
    {
        $user = User::where('id', $idno)->firstorFail();

        if($request->get('password') != '')
        {
          $user->password = bcrypt($request->get('password'));
        }
        if($request->get('username') != '')
        {
            $user->username = $request->get('username');
        }
        if($request->get('position') != '')
        {
            $user->position = $request->get('position');
        }
        if($request->get('status') != '')
        {
            $user->status = $request->get('status');
        }

        $user->save();

        return redirect(action('AdminController@edit', $user->id))->with('status', 'User successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
