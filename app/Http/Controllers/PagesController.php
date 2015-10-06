<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
     public function index()
     {
       return view('index');
     }

    public function home()
    {
        return view('home');
    }

    public function adminCreateUser()
    {
        return view('adminLayouts.admin_createUser');
    }

    public function adminUsersList()
    {
        return view('adminLayouts.admin_usersList');
    }

    public function messageCreate()
    {
        return view('sharedLayouts.messageCreate');
    }

    public function messageListCurrent()
    {
        return view('sharedLayouts.messagesCurrent');
    }

    public function messageListDone()
    {
        return view('sharedLayouts.messagesDone');
    }

    public function reportCSU()
    {
        return view('reports.reportCSU');
    }

    public function reportLibDaily_Form()
    {
        return view('reports.reportLibDaily_Form');
    }

    public function reportLibWeekly_Form()
    {
        return view('reports.reportLibWeekly_Form');
    }

    public function reportLibMonthly_Form()
    {
        return view('reports.reportLibMonthly_Form');
    }

    public function reportLibSemestral_Form()
    {
        return view('reports.reportLibSemestral_Form');
    }

    public function reportLibSchoolYear_Form()
    {
        return view('reports.reportLibSchoolYear_Form');
    }

    public function search()
    {
        return view('sharedLayouts.search');
    }

}
