@extends('layouts.app')

@section('content')
<div id="term">
  <div class="title">
      <h1>QUIZ</h1>
  </div>
  @if (session('flash_message'))
    <div class="flash_message">
        {{ session('flash_message') }}
    </div>
  @endif
  <ul class="term_list">
    @foreach($terms as $key => $term)
      <li id="term{{ $key + 1 }}">
        <a class="level" href='{{ route("quiz", ["term_id"=>"$term"]) }}'
            link="">No.{{ $term - 1 }}1 ~ {{ $term }}0
          <span id="term0{{ $key }}" class="percent">
            <?= $arry_result[$key] ?>0 %
          </span>
        </a>
      </li>
    @endforeach
  </ul>
  <div>
    <a href="{{ route('home') }}">◀︎ home</a>
  </div>
</div>
@endsection

@section('javascript')
  <script src="{{ asset('js/term.js') }}"></script>
@endsection
