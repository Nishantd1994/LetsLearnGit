
<?php

if(isset($_POST['age_submit']))
{
	$age=$_POST['age'];
	if($age>=18)
	{
		echo 'You can vote';
	}
	else
	{
		echo 'You cannot vote';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Age Module</title>
</head>
<body>

<form action="" method="post">
	<input type="text" name="age" placeholder="Enter Age">
	<input type="submit" name="age_submit" value="Submit">
</form>	

</body>
</html>