<!DOCTYPE html>
<html>
<head>
	<title>ログイン</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>ログイン</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>ユーザー名</label>
     	<input type="text" name="uname" placeholder="ユーザー名"><br>

     	<label>パスワード</label>
     	<input type="password" name="password" placeholder="パスワード"><br>

     	<button type="submit">ログイン</button>
     </form>
</body>
</html>