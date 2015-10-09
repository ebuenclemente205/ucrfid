<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReportDailyRequest;
use App\Http\Requests\ReportWeeklyRequest;
use App\Http\Requests\ReportMonthlyRequest;
use App\Http\Requests\ReportSemestralRequest;
use App\Http\Requests\ReportYearlyRequest;
use App\Gendercoursectr;

class ReportsController extends Controller
{

  //============================================
  //DAILY
  //============================================

  public function reportdaily()
  {
      return view('reports.daily');
  }

  public function storedaily(ReportDailyRequest $request)
  {
      $date = $request->date;
      //echo $date;
      //return $request->all();
      return redirect('/reports/daily/show/'.$date);
  }

  public function showdaily($date)
  {
      $ctrs = Gendercoursectr::where('date', $date)->orderBy('Course')->get();
      //print_r($ctrs);
      return view('reports.showDaily', compact('ctrs'));
  }
  //============================================
  //WEEKLY
  //============================================

  public function reportweekly()
  {
      return view('reports.weekly');
  }

  public function storeweekly(ReportWeeklyRequest $request)
  {
      $startdate = $request->get('startdate');
      $enddate = $request->get('enddate');
      //return $request->all();
      return redirect('/reports/weekly/show/'.$startdate.'/'.$enddate);
  }

  public function showweekly($startdate, $enddate)
  {
      $ctrs = Gendercoursectr::whereBetween('date', [$startdate, $enddate])
                              ->orderBy('date')
                              ->orderBy('Course')
                              ->orderBy('gender')
                              ->get();
      //print_r($ctrs);
      return view('reports.showweekly', compact('ctrs'));
  }

  //============================================
  //MONTHLY
  //============================================

  public function reportmonthly()
  {
      return view('reports.monthly');
  }

  public function storemonthly(ReportMonthlyRequest $request)
  {
      $month = $request->get('month');
      $year = $request->get('year');

      return redirect('/reports/monthly/show/'.$month.'/'.$year);
  }

  public function showmonthly($month, $year)
  {
      // $ctrs = Gendercoursectr::where('MONTH(date)', '=', '$month')->get();
      //$ctrs = Gendercoursectr::where(DB::raw('DATE_FORMAT(date, "%M")'), '$month');
      $ctrs = Gendercoursectr::where(DB::raw('MONTH(date)'), '=', $month)
                              ->where(DB::raw('YEAR(date)'), '=', $year)
                              ->orderBy('date')
                              ->orderBy('Course')
                              ->orderBy('gender')
                              ->get();
    //  print_r($ctrs);
      return view('reports.showMonthly', compact('ctrs'));
  }

  //============================================
  //SEMESTRAL
  //============================================

  public function reportsemestral()
  {
      return view('reports.semestral');
  }

  public function storesemestral(ReportSemestralRequest $request)
  {
      $semester = $request->get('semester');
      $year = $request->get('year');

      return redirect('/reports/semestral/show/'.$semester.'/'.$year);
  }

  public function showsemestral($semester, $year)
  {

      $ctrs = Gendercoursectr::where('semester', '=', $semester)
                              ->where(DB::raw('YEAR(date)'), '=', $year)
                              ->orderBy('date')
                              ->orderBy('Course')
                              ->orderBy('gender')
                              ->get();
    //  print_r($ctrs);
      return view('reports.showsemestral', compact('ctrs'));
  }

  //============================================
  //SY
  //============================================

  public function reportyearly()
  {
      return view('reports.schoolyear');
  }

  public function storeyearly(ReportYearlyRequest $request)
  {
      $year = $request->get('year');

      return redirect('/reports/yearly/show/'.$year);
  }

  public function showyearly($year)
  {
      $ctrs = Gendercoursectr::where(DB::raw('YEAR(date)'), '=', $year)
                              ->orderBy('date')
                              ->orderBy('Course')
                              ->orderBy('gender')
                              ->get();
    //  print_r($ctrs);
      return view('reports.showYearly', compact('ctrs'));
  }

}
