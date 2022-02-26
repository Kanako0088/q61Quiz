

// 背景
var bg = document.getElementById('loader-bg');
bg.classList.add('is-hide');
//ボタンクリック
var button = document.getElementById('yes');
button.addEventListener('click', buttonClick);

//スピーカークリック
var audio = document.getElementById('speaker');

//動画後半再生
const introStart = () => {
    var video = document.createElement('video');
    video.controls = false;
    video.autoplay = true;
    video.loop = false;
    video.muted = true;
    video.oncontextmenu = function(){
        return false;
        }
    //video.setAttribute('type', 'video/mp4');
    video.setAttribute('controlsList', 'nodownload');
    video.setAttribute('playsinline', '');
    video.src = short02;
    document.getElementById('mv').appendChild(video);
    $('#loader-bg').css({ 'z-index': '50' });
    audio.classList.remove('is-hide');
    video.addEventListener("ended", function(){
    video.remove();
    setTimeout(function() {
        location.href=route_home;
    }, 1500);
    });
    }

//ロード画面を非表示にする
function buttonClick(){
    introStart();
    bg.classList.remove('is-hide');
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
    break;
    case "on":
    onoff = "off";
    $(this).attr('src',offimg);
    bgm.muted = true;
    break;
}
});
