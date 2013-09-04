<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link href="./css/bootstrap.css" rel="stylesheet">
	<link href="./css/login.css" rel="stylesheet">
</head>
<body id="public" class="login" data-twttr-rendered="true">
	<div id="header">
		<div id="hero-container">
			<div id="hero" class="pad">
				<h1>Log In</h1>
			</div>
		</div>
	</div>
	<div id="wrapper">
		<div id="shell" class="container">
			<div id="content" class="pad">
				<form action="" method="POST">
					<p>
						<span class="field big">
							<label for="user_name">ユーザーID</label>
							<input type="text" name="user_name" id="user_name" tabindex="1">
						</span>
					</p>
					<p>
						<span class="field password big">
							<label for="pass">パスワード</label>
							<input type="password" name="pass" id="pass" tabindex="2">
						</span>
					</p>
					<div id="form_submit">
						<input type="submit" value="  login  " tabindex="3" class="submit link green">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
	</div>
</body>
</html>