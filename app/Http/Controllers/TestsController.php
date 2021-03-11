<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestsController extends Controller
{
    //


    public function ReturningTestQuestions() {
     $questions =  DB::table('test')->get();
     return view('tests',['questions'=>$questions]);
    }
}
