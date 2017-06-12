<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<form method="POST">
<label>
Email:
<input type="email" name="email" value="<=? (isset($email)) ? $email : ""?>/>
</label>

<label>
Password:
<input type="password" name="password" />
</label>

<input type="submit" value="login" />

</form>
</body>
</html>