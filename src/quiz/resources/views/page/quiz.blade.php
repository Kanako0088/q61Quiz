@extends('layouts.app')

@section('content')
<div id="roop">
  <div class="title">
      <p id="text_n">Q[今いるクイズの番号]/10</p>
  </div>
  <div id="js-question" class="sentence">
    <div id="text_q"></div>
  </div>
  <div id="hint"></div>
  <button class="hintbtn"  style=" margin-bottom: 10px;">!</button>
  <div id="text_s" class="flex js-answer"></div>
  <div id="text_a" style="display: none;"></div>
  <div class="correct">
      <p>正解</p>
  </div>
  <div class="incorrect">
      <p>不正解</p>
  </div>
</div>
@endsection

@section('javascript')
<script>
  const quizzes = <?= $quizzes ?>;
  // console.log(quizzes);
</script>
@endsection
