<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, viewport-fit=cover">

  <title>仮会員登録（入力）</title>
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
					<a href="index.php">TOP</a><i class="fa-solid fa-angle-right"></i><span>仮会員登録（入力）</span>
				</div>
				<div class="container-box">
					<h3>会員登録の流れ</h3>
					<p>
						下記フォームにメールアドレスをご入力の上、送信していただくと仮登録が完了いたします。<br>
						ご入力いただいたメールアドレス宛に会員登録用のURLが記載されたメールが届きますので、そちらのURLからMEDpremium membershipの会員登録を行ってください。
					</p>
					<h4>メールアドレスをご入力ください。</h4>
					<form>
						<dl>
							<dt>パスワード：</dt>
							<dd><input type="password" name="password1" class="password1"></dd>
						</dl>
						<dl>
							<dt>パスワード（確認）：</dt>
							<dd><input type="password" name="password2" class="password2"></dd>
						</dl>
						<br>
						<p>
							<a class="link" href="" target="_blank">個人情報保護方針</a><br>
							<span>※仮会員登録前にご一読ください。</span>
						</p>
						<button type="submit" id="submit" class="btn-blk">
							個人情報保護方針に同意して、<br>
							仮会員登録をする
						</button>
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
