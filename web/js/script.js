//ヘッダーの高さ分だけコンテンツを下げる
$(function() {
    var height=$("#header-container").height();
    $("#eyecath").css("margin-top", height);
})


jQuery(function($) {
	$(window).on('resize',function(){
		if($('#menu-btn').hasClass('open')){
			$( 'html,body' ).css( {
				overflow: 'auto'
			});
			$('#menu-btn').removeClass('open');
		}
	});

	//ページ内リンクスムーススクロール
	$(document).on('click', 'a[href*="#"]', function() {
		let time = 400;
		let target = $(this.hash);
		if (!target.length) return;

		let targetY = target.offset().top;
		$('html,body').animate({scrollTop: targetY}, time, 'swing');
		return false;
	});
});


jQuery(function($) {
	//メニュー表示
	$('#menu-btn').on('click',function(){
		$( 'html,body' ).css( {
			overflow: 'auto'
		} );
		$('#menu-btn').toggleClass('open');
		if($('#menu-btn').hasClass('open')){
				$( 'html,body' ).css( {
					overflow: 'hidden'
				} );
		}
	});
	$('#menu-btn.open , #nav-container a').on('click',function(){
		$( 'html,body' ).css( {
			overflow: 'auto'
		});
		$('#menu-btn').removeClass('open');
	});
});


$(function(){
	$(window).on('load scroll',function (){
		$('.animation').each(function(){
			//ターゲットの位置を取得
			var target = $(this).offset().top;
			//スクロール量を取得
			var scroll = $(window).scrollTop();
			//ウィンドウの高さを取得
			var height = $(window).height();
			//ターゲットまでスクロールするとフェードインする
			if (scroll > target - height){
				//クラスを付与
				$(this).addClass('active');
			}
		});
	});
});


//スクロールした際のページトップの動き
function PageTopAnime() {

		var scroll = $(window).scrollTop(); //スクロール値を取得
		if (scroll >= 200){//200pxスクロールしたら
			$('#page-top').removeClass('DownMove');		// DownMoveというクラス名を除去して
			$('#page-top').addClass('UpMove');			// UpMoveというクラス名を追加して出現
		}else{//それ以外は
			if($('#page-top').hasClass('UpMove')){//UpMoveというクラス名が既に付与されていたら
				$('#page-top').removeClass('UpMove');	//  UpMoveというクラス名を除去し
				$('#page-top').addClass('DownMove');	// DownMoveというクラス名を追加して非表示
			}
		}

		var wH = window.innerHeight; //画面の高さを取得
		var footerPos =  $('footer').offset().top; //footerの位置を取得
		if(scroll+wH >= (footerPos+20)) {
			var pos = (scroll+wH) - footerPos+20 //スクロールの値＋画面の高さからfooterの位置＋20pxを引いた場所を取得し
			$('#page-top').css('bottom',pos);	//#page-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
		}else{//それ以外は
			if($('#page-top').hasClass('UpMove')){//UpMoveというクラス名がついていたら
				$('#page-top').css('bottom','20px');// 下から20pxの位置にページリンクを指定
			}
		}
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// #page-topをクリックした際の設定
$('#page-top').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});


// グローバルナビ ドロップダウンの動き
var parent = document.querySelectorAll(".has-sub");
var node = Array.prototype.slice.call(parent, 0);

node.forEach(function (element) {
  element.addEventListener(
    "mouseover",
    function () {
      element.querySelector(".sub").classList.add("active");
    },
    false
  );
  element.addEventListener(
    "mouseout",
    function () {
      element.querySelector(".sub").classList.remove("active");
    },
    false
  );
});


// 生年月日
$(function() {
    // 現在の年月日を取得
    var time = new Date();
    var year = time.getFullYear();
    var month = time.getMonth() + 1;
    var date = time.getDate();

    // 選択された年月日を取得
    var selected_year = document.getElementById("year").value;
    var selected_month = document.getElementById("month").value;

    // 年(初期): 1900〜現在の年 の値を設定
    var start_year = 1900;
    for (var i = year; i >= start_year ; i--) {
        $('#year').append('<option value="' + i + '">' + i + '</option>');
    }

    // 月(初期): 1~12 の値を設定
    var last_month = 12;
    for (var j = 1; j <= last_month; j++) {
        $('#month').append('<option value="' + j + '">' + j + '</option>');
    }

    // 日(初期): 1~31 の値を設定
    var last_date = 31;
    for (var k = 1; k <= last_date; k++) {
        $('#date').append('<option value="' + k + '">' + k + '</option>');
    }

    // 月(変更)：選択された年に合わせて、適した月の値を選択肢にセットする
    $('#year').change(function() {
        selected_year = $('#year').val();

        // 現在の年が選択された場合、月の選択肢は 1~現在の月 に設定
        // それ以外の場合、1~12 に設定
        last_month = 12;
        if (selected_year == year) {
            last_month = month;
        }
        $('#month').children('option').remove();
        $('#month').append('<option value="' + 0 + '">--</option>');
        for (var n = 1; n <= last_month; n++) {
            $('#month').append('<option value="' + n + '">' + n + '</option>');
        }
    });

    // 日(変更)：選択された年・月に合わせて、適した日の値を選択肢にセットする
    $('#year,#month').change(function() {
        selected_year = $('#year').val();
        selected_month = $('#month').val();

        // 現在の年・月が選択された場合、日の選択肢は 1~現在の日付 に設定
        // それ以外の場合、各月ごとの最終日を判定し、1~最終日 に設定
        if (selected_year == year && selected_month == month ) {
            last_date = date;
        }else{
            // 2月：日の選択肢は1~28日に設定
            // ※ ただし、閏年の場合は29日に設定
            if (selected_month == 2) {
                if((Math.floor(selected_year%4 == 0)) && (Math.floor(selected_year%100 != 0)) || (Math.floor(selected_year%400 == 0))){
                    last_date = 29;
                }else{
                    last_date = 28;
                }

            // 4, 6, 9, 11月：日の選択肢は1~30日に設定
            }else if(selected_month == 4 || selected_month == 6 || selected_month == 9 || selected_month == 11 ){
                last_date = 30;

            // 1, 3, 5, 7, 8, 10, 12月：日の選択肢は1~31日に設定
            }else{
                last_date = 31;
            }
        }

        $('#date').children('option').remove();
        $('#date').append('<option value="' + 0 + '">--</option>');
        for (var m = 1; m <= last_date; m++) {
            $('#date').append('<option value="' + m + '">' + m + '</option>');
        }
    });

});
