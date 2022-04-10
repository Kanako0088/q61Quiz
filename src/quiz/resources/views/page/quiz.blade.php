@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('update') }}" id="form">
    @csrf
      <div id="roop">
        <div class="title_q">
            <div class="title_bg">
              <p id="text_n">Q数字/10</p>
            </div>
            <div id="header_area">
              <div class="head_score"><img src="{{ asset('images/quiz/score.png') }}" class="score_icon"></div>
              <a href="/QuizAppJs/index.html"><img src="{{ asset('images/quiz/home_icon.png') }}" class="header_home_icon" alt="次へ"></a>
            </div>
        </div>
        <div id="js-question" class="sentence">
          <div id="text_q"></div>
        </div>
        <div class="content">
        <a class="js-modal-open hintbtn" href="">&nbsp;</a>
        </div>
        <div class="modal js-modal">
            <div class="modal__bg js-modal-close"></div>
            <div class="modal__content">
              <h3>HINT!</h3>
            <p id="hint"></p>
                <!-- <a class="js-modal-close" href="">閉じる</a> -->
            </div>
        </div>
        <div id="text_s" class="flex js-answer"></div>
        <div id="text_a" style="display: none;"></div>
        <div class="correct">
            <p>正解</p>
        </div>
        <div class="incorrect">
            <p>不正解</p>
        </div>
        <div class="advertise_bg">
          <p class="advertise">広告エリア</p>
        </div>
      </div>
      <input id="result" type="hidden" name="result" value="1">
      <input id="result" type="hidden" name="term_id" value="{{ $term_id }}">
      <!-- <input type="submit" value="タームに戻る"> -->
  </form>
@endsection

@section('javascript')
<script>
  const quizzes = <?= $quizzes ?>;
  console.log(quizzes);

</script>
<!-- <script src="{{ asset('/js/connect.js') }}"></script> -->
@endsection
