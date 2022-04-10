//読み込み完了
// window.addEventListener('load', stopload);

//term正解率80以上でアンロック
//一回だけ表示したい
//ロード画面を非表示にする

$(function(){
  $('li:not(:first-of-type) .level').addClass('gray');
  var score_array = [];
  $('.term_list li').each(function(i){
    text = $(this).text() + (i + 1);
    var sucore = $(this).find('.percent').text().replace(/[^0-9]/g, '');
    score_array.push(sucore);
  });

// $(document).ready(function(){
//     var unlock_alert = [];
//     $.each(score_array, function(index, value) {
//       if( value >= 20 ){
//         var remove_class = '#term' + Number(index + 2) + ' .level';
//         unlock_alert.push('term' + Number(index + 2) + 'がアンロックされました' + '\r\n');
//         $(remove_class).removeClass("gray");
//       };
//     })
//     alert(unlock_alert);
//   });
// });


// 背景
var bg = document.getElementById('loader-bg');
bg.classList.add('fadeout-bg');
