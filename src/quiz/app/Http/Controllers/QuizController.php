<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\Quiz;

class QuizController extends Controller
{
  public function term()
  {
    // $quizzes = Quiz::get(['term'])->toJson(JSON_UNESCAPED_UNICODE);
    $quizzes = [
      1 => 1,
      2 => 1,
      3 => 2,
      4 => 1,
      5 => 3
    ];
    $terms = array_unique($quizzes);

    return view('page.term', compact('terms'));
  }

  public function quiz(int $term_id)
  {
    $quizzes = Quiz::all()->toJson(JSON_UNESCAPED_UNICODE);

    return view('page.quiz', compact('quizzes', ['id'=> $term_id]));
  }
}
