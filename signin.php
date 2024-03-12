<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To OneBook - Sign up, Log in, Chat </title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
		<link rel="stylesheet" href="image/logo.png">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
			<table>
				<div class="arrow"></div>
				<a href="index.php" class="back" >&larr; back</a>
			<h1> Welcome to OneBook</h1>
			
	<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<tr>
					<td></td>
					<td><input type="email" name="email" placeholder="Email" class="form-2" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="password" name="password" placeholder="Password" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		</div>
	</div>

</body>

</html>