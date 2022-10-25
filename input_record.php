<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SignUp</title>
<style>

.field {
  display: flex;
  flex-direction: column;
  margin-bottom: 10px;
}
input[type="submit"]{
  min-width: 150px;
  min-height: 50px;
  margin: 20px 0;
}

</style>Yisunsin
	
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
			<label>순서</label>
			<input type="int" name="number" placeholder="number">
		</div>
		<div class="field">
			<label>아이디</label>
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="field">
			<label>비밀번호</label>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="field">
			<label>이메일</label>
			<input type="email" name="email" placeholder="Email">
		</div>
		<div class="field">
			<label>나를 소개하는 말</label>
			<textarea name="introduce" placeholder="About Me"></textarea>
		</div>
		<div class="field">
			<label>내가 만든 웹사이트 </label>
			<input type="text" name="site" placeholder="Your website">
		</div>
		<div class="field">
			<label>직업</label>
			<select name="field" required>
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
