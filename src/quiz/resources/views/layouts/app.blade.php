<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/term.css') }}">
  <title>Quizapp</title>
</head>
<body>
  @yield('content')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @yield('javascript')
  <script src="{{ asset('js/config.js') }}"></script>
  <script src="{{ asset('js/quiz.js') }}"></script>
</body>
</html>
