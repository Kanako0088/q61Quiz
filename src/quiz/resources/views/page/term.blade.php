@extends('layouts.app')

@section('content')
<div id="term">
  <div class="title">
      <h1>QUIZ</h1>
  </div>
  <ul>
    @foreach($terms as $key => $term)
      <li><a class="level" href='{{ route("quiz", ["term_id"=>"$term"]) }}' link="">No.{{ $term - 1 }}1 ~ {{ $term }}0<span id="term0{{ $key }}" class="percent">0%</span></a></li>
    @endforeach
  </ul>
  <div>
    <a href="{{ url()->previous() }}">◀︎ home</a>
  </div>
</div>
@endsection
