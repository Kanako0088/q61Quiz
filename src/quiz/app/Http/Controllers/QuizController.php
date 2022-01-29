<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\Quiz;

class QuizController extends Controller
{
  public function term()
  {
    $quizzes = Quiz::groupBy('term')->get(['term']);
    $terms = array();
    foreach ($quizzes as $quiz) {
      $terms[] = $quiz->term;
    }
    return view('page.term', compact('terms'));
  }

  public function quiz(int $term_id)
  {
    $term_url = url()->full();
    $term_id = substr($term_url, -1, 1);
    $quizzes = Quiz::where('term', $term_id)
                ->get()
                ->toJson(JSON_UNESCAPED_UNICODE);

    return view('page.quiz', compact('quizzes'));
  }
}
