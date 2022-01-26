<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('quizzes')->insert([
      'id' => 2,
      'question' => '次のうち、1gあたりの熱量（カロリー）が最も大きいのは？',
      'choice' => [1=> '脂質', 2=> 'タンパク質', 3=> '糖質', 4=> 'ししっ'],
      'answer' => 1,
      'type' => 2,
      'term' => 1,
      'hint' => 'あぶら〜'
    ]);
  }
}
