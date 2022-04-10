// ロード画面
var bg = document.getElementById('loader-bg'),
loader = document.getElementById('loader');
// ロード画面の非表示を解除
loader.classList.remove('is-hide');

//読み込み完了
window.addEventListener('load', stopload);

//スピーカー
var audio = document.getElementById('speaker');

//効果音
var effect = document.getElementById('sound01');

//動画前半再生
const opStart = () => {
  var video = document.createElement('video');
  video.muted = true;
  video.autoplay = true;
  video.src = short01;
  document.getElementById('mv').appendChild(video);
  video.oncontextmenu = function(){
    return false;
    }
  video.setAttribute('controlsList', 'nodownload');
  video.setAttribute('playsinline', '');
  setTimeout(function() {
    $('#loader-bg').css({ 'z-index': '50' });
    audio.classList.remove('is-hide');
  }, 2500);
  video.addEventListener("ended", function(){
  video.remove();
  bg.classList.add('fadeout-bg');
  });
}

//ロード画面を非表示にする
function stopload(){
opStart();
loader.classList.add('fadeout-loader');
}

//BGM
var bgm = document.getElementById('bgm');

var onoff = "off";
// var onimg = "{{ asset('images/top/audio_on.png')}}";
// var offimg = "{{ asset('images/top/audio_off.png')}}";

$('#onoff-btn').click(function() {
  switch (onoff) {
    case "off":
      onoff = "on";
      $(this).attr('src',onimg);
      bgm.muted = false;
      bgm.play();
      break;
    case "on":
      onoff = "off";
      $(this).attr('src',offimg);
      bgm.muted = true;
      break;
}
  });

  document.getElementById("btnarea").onclick = function(){
    effect.play();
  };

//歯車クリックでオプション表示
  $('.gear').on('click', function (e) {
    $(".option_inner").addClass("active");
    $('.gear').css({ 'bottom': '76px', 'box-shadow': '0 0 0 0 rgba(0, 0, 0, 0)' });
  });
  $('.batsu').on('click', function (e) {
    $(".option_inner").removeClass("active");
    $('.gear').css({ 'bottom': '80px', 'box-shadow': '0px 4px 0px 0px rgba(0, 0, 0, 0.15)' });
  });


  /*
module.exports = function (module) {
  if (!module.webpackPolyfill) {
    module.deprecate = function () { };

    module.paths = []; // module.parent = undefined by default

    if (!module.children) module.children = [];
    Object.defineProperty(module, "loaded", {
      enumerable: true,
      get: function get() {
        return module.l;
      }
    });
    Object.defineProperty(module, "id", {
      enumerable: true,
      get: function get() {
        return module.i;
      }
    });
    module.webpackPolyfill = 1;
  }

  return module;
};
*/
