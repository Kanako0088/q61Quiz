@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('update') }}" id="form">
    @csrf
      <div id="roop">
        <div class="title">
            <p id="text_n">Q数字/10</p>
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
      <input id="result" type="hidden" name="result" value="1">
      <input id="result" type="hidden" name="term_id" value="{{ $term_id }}">
      <input type="submit" value="タームに戻る">
  </form>
@endsection

@section('javascript')
<script>
  const quizzes = <?= $quizzes ?>;
  console.log(quizzes);

</script>
<!-- <script src="{{ asset('/js/connect.js') }}"></script> -->
@endsection
