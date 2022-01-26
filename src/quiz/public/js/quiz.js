//問題と解答
qa = new Array();
qa[0] = ["「真っ赤な嘘」の赤とはどういう意味か","全く","良かれ","些細な","軽率な",1,"ヒント1"];
qa[1] = ["カラーコードは全何通りあるか","102,293,847","16777216","331234","20975176",2,"ヒント2"];
qa[2] = ["CMYKとは","光の三原色","色の三原色","世界の三原色","みんなの三原色",2,"ヒント3"];
qa[3] = ["スマートフォンの綴りであっているものを答えよ","smartqhone","smartphone","smartptone","snartphone",1,"ヒント4"];
qa[4] = ["第56代天皇のなまえは？","清和天皇","天武天皇","白河天皇","後醍醐天皇",1,"ヒント5"];
qa[5] = ["NHKはなんの略でしょう","日本放送協会","日本放送協会","日本放送協会","日本放送局",1,"ヒント6"];
qa[6] = ["鏡に写したら消えてしまうのは誰？","母","父","姉","弟",4,"ヒント7"];
qa[7] = ["プリンの作り方で正しいのはどれ？","犬と遊ぶ","魚を釣る","鶏を飼う","猫を撫でる",3,"ヒント8"];
qa[8] = ["チェーン店が1つの地域に集中して出店すること","フランチャイズ","ドミナント戦略","オプトイン","ペルソナ",2,"ヒント9"];
qa[9] = ["銀河鉄道の夜の登場人物の名前として正しくないものは？","ジョバンニ","カムパネルラ","サザンクロス","ザネリ",3,"ヒント10"];



console.log(quizzes);


//初期設定
q_sel = 4; //選択肢の数

setReady();

//初期設定
function setReady() {
	count = 0; //問題番号
	ansers = new Array(); //解答記録
	
	//最初の問題
	quiz();
}

//問題表示
function quiz() {
	var s, n;
	//問題
    document.getElementById("text_n").innerHTML = "Q" + (count + 1) + "/10";
	document.getElementById("text_q").innerHTML = qa[count][0];
	document.getElementById("hint").innerHTML = qa[count][6];
	//選択肢
	s = "";
	for (n=1;n<=q_sel;n++) {
		if (qa[count][n] != "") {
			s += "<a href='javascript:anser(" + n + ")'>" +  qa[count][n] + "</a>";
		}
	}
	document.getElementById("text_s").innerHTML = s;
}
//hint表示
$('.hintbtn').on('click', function (e) {
    $("#hint").toggleClass("active");
});

//正解数カウント
let correctCount = 0;

//解答表示
function anser(num) {
	var s;
	s = (count + 1) + "問目：";
	if(num == qa[count][q_sel + 1]) {

	}
	//答え合わせ
	if (num == qa[count][q_sel + 1]) {
		//正解
		ansers[count] = "○";
		correctCount++;
		$(".correct").animate({ zIndex:1}, 0 ).animate({opacity: 1}, 500 ).animate({opacity: 0, zIndex:-1}, 500);
        $(".incorrect").css({ 'opacity': '0'});
	} else {
		ansers[count] = "×";
		$('.incorrect').animate({ zIndex:1}, 0 ).animate({opacity: 1}, 500 ).animate({opacity: 0, zIndex:-1}, 500);
        $(".correct").css({ 'opacity': '0'});
	}
	s += ansers[count] + qa[count][num];
	document.getElementById("text_a").innerHTML = s;
	//次の問題を表示
	count++;
	if (count < qa.length) {
		quiz();
	} else {
		//終了
		s += "<div id='result'>";
		s = "<h2>結果</h2><ul class='result'>";
		s = "<p id='correctData'>" + "正解数" + correctCount  + "</p>";
		//1行目
		for (n=0;n<qa.length;n++) {
			s += "<li>" + (n+1) + qa[n][0] + "<span>" + ansers[n] + "</span>" + "</li>";
		}
		s += "</ul>";
		$(".hintbtn").css({ 'display': 'none'});
		document.getElementById("text_q").innerHTML = s;
		//次の選択肢
		s = "<a href='javascript:history.back()'>前のページに戻る</a>";
		s += "<a href='javascript:setReady()'>同じ問題を最初から</a>";
		s += "<a href=''>次へ</a>";
		s += "</div>";
		document.getElementById("text_s").innerHTML = s;
//console.log(correctCount);
var a = {};
a.Correctdate = correctCount;
const data = JSON.stringify(a);
console.log(JSON.stringify(a));
}

}

