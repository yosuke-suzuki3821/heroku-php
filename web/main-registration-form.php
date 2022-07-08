<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, viewport-fit=cover">

  <title>会員登録（入力）</title>
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
					<a href="index.php">TOP</a><i class="fa-solid fa-angle-right"></i><span>会員登録（入力）</span>
				</div>
				<div class="container-box">
					<h3>会員情報のご入力</h3>
					<p>
						MEDpremium membershipに会員登録をいただくには、下記フォームに情報のご入力をお願いいたします。
					</p>
					<h4>会員情報をご入力ください。</h4>
					<form>
						<dl>
							<dt>お名前：</dt>
							<dd><input type="text" name="name" class="name"></dd>
						</dl>
						<dl class="select-inner">
							<dt>生年月日：</dt>
							<dd class="birth">
								<select id="year">
									<option value="0">----</option>
								</select><span>年</span>
							</dd>
							<dd class="birth">
								<select id="month">
									<option value="0">--</option>
								</select><span>月</span>
							</dd>
							<dd class="birth">
								<select id="date">
									<option value="0">--</option>
								</select><span>日</span>
							</dd>
						</dl>
						<dl>
							<dt>性別：</dt>
							<dd class="gender">
								<select name="gender">
									<option value="unknown">----</option>
									<option value="male">男性</option>
									<option value="female">女性</option>
								</select>
							</dd>
						</dl>
						<dl>
							<dt>メールアドレス：</dt>
							<dd><input type="email" name="email1" class="email1"></dd>
						</dl>
						<dl>
							<dt>メールアドレス（確認）：</dt>
							<dd><input type="email" name="email2" class="email2"></dd>
						</dl>
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
