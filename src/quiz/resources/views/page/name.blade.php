@extends('layouts.app')

@section('content')

<p>あなたの名前を教えてください。</p>
<form action="{{ route('home') }}" id="form">
  @csrf
  <input type="text" name="name" />
  <input type='submit' value='決定'>
</form>

@endsection

@section('javascript')
<script>
  $("input[type=""]").click(function() {
    $("#jqs-1 p span").text($("#your_name").val());
  });
</script>
@endsection
