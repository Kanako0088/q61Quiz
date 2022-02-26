@extends('layouts.app')

@section('content')
<div id="loader-bg"></div>
    <div id="speaker" class="is-hide">
      <img id="onoff-btn"
      src="{{ asset('images/top/audio_off.png') }}" style="width: 30px;">
    </div>
    <div class="main top">
      <audio id="bgm" muted autoplay src="{{ asset('images/media/SIKAMO_audio.mp3') }}" type="audio/mp3" ></audio>
    <div class="box">
      <div id="mv">
            </div>
          </div>
        <div class="title">
          <h1 style="color: #000;">注意事項</h1>
        </div>
        <div>
          <p style="color: #000;">今から私たちの間に起こる事柄は他言無用です。<br>くれぐれも人目につかない場所で行うように願います。
          </p>
        </div>
        <div>
          <ul>
            <li><input type="button" value="わかりました" id="yes"></li>
            <li><a href="{{ route('attention') }}"><input type="button" value="いいえ" id="no"></a></li>
          </ul>
        </div>
      </div>
@endsection

@section('javascript')
<script src="{{ asset('js/attention.js') }}"></script>
<script>
  var route_home = "{{ route('home') }}";
  var short01 = "{{ asset('images/media/SIKAMO-short01.mp4')}}";
  var short02 = "{{ asset('images/media/SIKAMO-short02.mp4')}}";
  var onimg = "{{ asset('images/top/audio_on.png')}}";
  var offimg = "{{ asset('images/top/audio_off.png')}}";
</script>
@endsection
