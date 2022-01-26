@extends('layouts.app')

@section('content')
  <div class="main top">
    <div class="title">
      <img class="titleinner"
        src="{{ asset('images/top/title-31e4ec923f218b7edd6344b6aa0df32291adc8b7a00970505977da39631cceab.svg') }}" />
    </div>
    <div class="move">
      <img class="eye" src="{{ asset('images/top/eye_01-6d6c1e87bb153a3ba5720ab41c152cc560b37fa4c597d16dfb719bea5d4044a0.gif') }}"
        width="65" height="65" />
      <img class="hand" src="{{ asset('images/top/hand-885d6a081bd31753ce94204e89866679ab619a4e61207704e26a10c01b7b9dfd.svg') }}"
        width="32" height="25" />
    </div>
    <div class="btnarea">
      <a class="btn" href="{{ route('term') }}">START</a>
    </div>
  </div>

  <div class="option">
    <img class="gear" src="{{ asset('images/top/option-981820cdcd0260e37f790ae7e631cbe1f6a88e21ae261e735b68f76ad0e721b1.svg') }}" />
    <div class="option_inner">
      <div class="file">
        <div class="beco"></div>
        <div class="batsu"></div>
        <div class="audio">
          <div class="flex bgm">
            <p>BGM</p>
          </div>
          <div class="flex sound">
            <p>効果音</p>
          </div>
        </div>
        <div class="border"><span></span></div>
        <div class="inquiry">
          <p>お問い合わせ</p>
          <div class="flex">
            <a class="mail">
              <img
                src="{{ asset('images/top/mail-7c1f14ca2a6fa52df34532467cfbcd8b05190db2c84bdcfa7fe81db6381739fd.svg') }}"
                width="24" height="24" /></a>
            <a class="twitter">
              <img
                src="{{ asset('images/top/twitter-2604cab1b87fca576315c42dd339a23275c86e50b1bca8fe8a245d4f7963bcef.svg') }}"
                width="24" height="24" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
