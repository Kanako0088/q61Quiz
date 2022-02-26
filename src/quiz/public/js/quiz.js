
choices = 4;
setReady();

$('.hintbtn').on('click', function() {
  $("#hint").toggleClass("active");
});

//正解数カウント
let correctquiz_Count = 0;

function setReady() {
  quiz_count = 0;
  answers = new Array();
  quiz();
}

function quiz() {
  var s, n;
  document.getElementById("text_n").innerHTML = "Q" + (quiz_count + 1) + "/10";
  document.getElementById("text_q").innerHTML = quizzes[quiz_count]['question'];
  document.getElementById("hint").innerHTML = quizzes[quiz_count]['type'];
  //選択肢
  s = "";
  for (n = 1; n <= choices; n++) {
      if (quizzes[quiz_count]['choice' + n] != "") {
          s += "<a href='javascript:answer(" + n + ")'>" +  quizzes[quiz_count]['choice' + n] + "</a>";
      }
  }
  document.getElementById("text_s").innerHTML = s;
}

function answer(num) {
  var s;
  s = (quiz_count + 1) + "問目：";
  if(num == quizzes[quiz_count]['answer']) {
  }
  //答え合わせ
  if (num == quizzes[quiz_count]['answer']) {
    //正解
    answers[quiz_count] = "○";
    correctquiz_Count++;
    $(".correct").animate(
                        {zIndex:1}, 0)
                        .animate({opacity: 1}, 500)
                        .animate({opacity: 0, zIndex:-1},
                        500);
    $(".incorrect").css({'opacity': '0'});
  } else {
    answers[quiz_count] = "×";
    $('.incorrect').animate(
                          {zIndex:1}, 0)
                          .animate({opacity: 1}, 500)
                          .animate({opacity: 0, zIndex:-1},
                          500);
    $(".correct").css({'opacity': '0'});
  }

  s += answers[quiz_count] + quizzes[quiz_count][num];
  document.getElementById("text_a").innerHTML = s;
  //次の問題を表示
  quiz_count++;
  if (quiz_count < Object.keys(quizzes).length) {
    quiz();
  } else {
    //終了
    s += "<div id='result'>";
    s = "<h2>結果</h2><ul class='result'>";
    s = "<p id='correctData'>" + "正解数" + correctquiz_Count  + "</p>";
    //1行目
    for (n = 0; n < Object.keys(quizzes).length; n++) {
      s += "<li>" + (n + 1) + quizzes[n]['question'] + "<span>" + answers[n] + "</span>" + "</li>";
    }
    s += "</ul>";
    // $(".hintbtn").css({ 'display': 'none'});

    document.getElementById("text_q").innerHTML = s;
    //次の選択肢
    s = "<a href='javascript:history.back()'>前のページに戻る</a>";
    s += "<a href='javascript:setReady()'>同じ問題を最初から</a>";
    s += "<a href=''>次へ</a>";
    s += "</div>";
    document.getElementById("text_s").innerHTML = s;
    var a = {};
    a.Correctdate = correctquiz_Count;
    const data = JSON.stringify(a);

    var result = document.getElementById('result');
    result.value = correctquiz_Count;
  }
}
