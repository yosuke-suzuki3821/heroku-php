<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, viewport-fit=cover">

  <title>会員登録（確認）</title>
  <meta name="description" content="さんぷるさんぷるさんぷるさんぷる">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://www.actus-renovation.com/packageplan/" >
  <meta property="og:title" content="さんぷるさんぷるさんぷるさんぷる">
  <meta property="og:site_name" content="さんぷるさんぷるさんぷるさんぷる">
  <meta property="og:description" content="さんぷるさんぷるさんぷるさんぷる">
  <meta property="og:image" content="https://www.actus-renovation.com/packageplan/assets/images/ogp.jpg">
  <meta property="og:locale" content="ja_JP">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="さんぷるさんぷるさんぷるさんぷる">
  <meta name="twitter:description" content="さんぷるさんぷるさんぷるさんぷる">
  <meta name="twitter:image:src" content="https://www.actus-renovation.com/packageplan/assets/images/ogp.jpg">
  <meta name="twitter:domain" content="www.actus-renovation.com">

	<link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
  <link rel="shortcut icon" href="/icon/favicon.ico">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">

  <link rel="stylesheet" type="text/css" href="./css/style.css" >
	<link rel="stylesheet" type="text/css" href="./css/sp.css" >
	<link rel="stylesheet" type="text/css" href="./css/registration.css" >
</head>

<body id="under">
  <div id="wrapper">
		<!-- ヘッダー -->
    <?php include('./header.php'); ?>
		<!-- /ヘッダー -->

		<!-- 会員登録 -->
		<section id="registration">
			<div class="container">
				<h2>会員登録</h2>
				<div class="breadcrumb">
					<a href="index.php">TOP</a><i class="fa-solid fa-angle-right"></i><a href="./main-registration-form.php">会員登録（入力）</a><i class="fa-solid fa-angle-right"></i><span>会員登録（確認）</span>
				</div>


				<div class="container-box">
					<h3>会員情報入力内容のご確認</h3>
					<p>
						内容をご確認の上、よろしければ画面下の「送信する」ボタンをクリックしてください。<br>
						入力内容に誤りがある場合は「訂正する」ボタンをクリックし、内容を訂正してください。
					</p>
					<form class="txt-left fnt-bold">
						<dl>
							<dt>お名前：</dt>
							<dd>さんぷるさんぷるさんぷる</dd>
						</dl>
						<dl>
							<dt>生年月日：</dt>
							<dd>2000年12月25日</dd>
						</dl>
						<dl>
							<dt>性別：</dt>
							<dd>女性</dd>
						</dl>
						<dl>
							<dt>メールアドレス：</dt>
							<dd>sample@gmail.com</dd>
						</dl>
						<dl>
							<dt>メールアドレス（確認）：</dt>
							<dd>sample@gmail.com</dd>
						</dl>
						<dl>
							<dt>パスワード：</dt>
							<dd>2QwNmWSeFqGR</dd>
						</dl>
						<dl>
							<dt>パスワード（確認）：</dt>
							<dd>2QwNmWSeFqGR</dd>
						</dl>

						<div class="flex-center">
							<button type="button" onclick="history.back()" class="btn-blk">訂正する</button>
							<button type="submit" id="submit" class="btn-blk">送信する</button>
						</div>


					</form>




				</div>

			</div>
		</section>
		<!-- 	/会員登録 -->

		<!-- フッター -->
		<?php include('./footer.php'); ?>
		<!-- /フッター -->
  </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>
