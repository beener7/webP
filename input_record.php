<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SignUp</title>

	<link rel="stylesheet" href="./style.css" type="text/css">
</head>

<body>
	<h1>Project: FourB</h1>
	<h2>SignUp Test Page</h2>

	<form method="post" action="add_user.php">
	
		<div class="field">
			<label>Avatar</label>
			<input type="file" name="avatar" enctype="multipart/form-data">
		</div>
		<div class="field">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="field">
			<label>Password</label>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="field">
			<label>Email</label>
			<input type="email" name="email" placeholder="Email">
		</div>
		<div class="field">
			<label>About Me</label>
			<textarea name="introduce" placeholder="About Me"></textarea>
		</div>
		<div class="field">
			<label>Website</label>
			<input type="text" name="site" placeholder="Your website">
		</div>
		<div class="field">
			<label>Field</label>
			<select name="field">
				<option value="developer">Developer</option>
				<option value="design">Design</option>
				<option value="artist">Artist</option>
				<option value="photographer">Photographer</option>
				<option value="musician">Musician</option>
				<option value="etc">Etc</option>
			</select>
		</div>

		<input type="submit" value="SignUp">
	</form>
</body>
</html>

