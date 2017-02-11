<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>Contact Us</h1>
  <form method="get" action="<?php $_SERVER['PHP_SELF'];?>">
  	<p>
  		<label><input type="text" name="name" id="name"></input> name</label>
  	</p>

  	<p>
  		<label><input type="email" name="email" id="email"></input> email</label>
  	</p>

  	<p>
  		<label><textarea type="text" name="comment" id="comment"></textarea> comment here</label>
  	</p>

  	<p>
  		<input type="submit" name="send" id="send"></input>
  	</p>

  	

  </form>

  <pre>
  	<?php 
  	if($_GET){
  		print_r($_GET);
  		echo $_GET;
  	}elseif ($_POST){
  		print_r($_P);
  	}

  	//rule: get: search, post: email or insert into database
  	 ?>
  	
  </pre>
</body>
</html>