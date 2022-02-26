<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
  public function update(Request $request)
  {
      $result = $request->result;
      // $users_id = Auth::id();
      $term_id = $request->term_id;
      $result_num = 'result'.$term_id;
      User::where('id', 1)->update([$result_num => $result]);
      return redirect( route('term') )->withInput();
  }
  public function term(Request $request)
  {
    $quizzes = Quiz::groupBy('term')->get(['term']);
    $terms = array();
    foreach ($quizzes as $quiz) {
      $terms[] = $quiz->term;
    }

    $user = User::find(1);
    for($i = 1; $i <= 6; $i++){
      $user_result1 = $user->result1;
      $user_result2 = $user->result2;
      $user_result3 = $user->result3;
      $user_result4 = $user->result4;
      $user_result5 = $user->result5;
      $user_result6 = $user->result6;
    }
    $arry_result = array(
      $user_result1,
      $user_result2,
      $user_result3,
      $user_result4,
      $user_result5,
      $user_result6
    );

    return view('page.term', compact('terms', 'arry_result'));
  }

  public function quiz(Request $request, int $term_id)
  {
    $term_url = url()->full();
    $term_id = substr($term_url, -1, 1);
    $quizzes = Quiz::where('term', $term_id)
                ->get()
                ->toJson(JSON_UNESCAPED_UNICODE);

    $user = User::find(1);
    // $flight->name = $request->name;

    // 選択肢押下でform送信
    // 送られてきた値をカウントし、最後の記録をsaveする。

    return view('page.quiz', compact('quizzes', 'term_id'));
  }
}
