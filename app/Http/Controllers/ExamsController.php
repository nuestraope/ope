<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Exam $exam)
    {
        return view('exams',  ['exams' => $exam->take(5)->inRandomOrder()->get()]);
    }
}
