@extends('layouts.app')

@section('content')
  <div class="main top">
    <p class="name"></p>
    <div class="title">
      <img class="titleinner"
        src="{{ asset('images/top/title-31e4ec923f218b7edd6344b6aa0df32291adc8b7a00970505977da39631cceab.svg') }}" />
    </div>
    <div class="move">
      <div class="move_canvas eye"><img src="{{ asset('images/top/eye_01-6d6c1e87bb153a3ba5720ab41c152cc560b37fa4c597d16dfb719bea5d4044a0.gif') }}" width="65" height="65" /></div>
      <div class="move_canvas hand"><img src="{{ asset('images/top/hand-885d6a081bd31753ce94204e89866679ab619a4e61207704e26a10c01b7b9dfd.svg') }}" width="32" height="25" /></div>
    </div>
    <div class="btnarea">
      <a class="btn" href="{{ route('term') }}">START</a>
    </div>
  </div>
@endsection

@section('javascript')
<script>
  var short01 = "{{ asset('images/media/SIKAMO-short01.mp4')}}";
  var onimg = "{{ asset('images/top/audio_on.png')}}";
  var offimg = "{{ asset('images/top/audio_off.png')}}";
</script>
@endsection
