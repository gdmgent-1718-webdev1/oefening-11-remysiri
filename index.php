<?php 


	$navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oefening 11</title>
</head>
<body>
	
<?php foreach ( $navigation as $page => $detail): ?>
	<ul>
		<li><a href="#<?=$page?>"><?=$detail?></a></li>
	</ul>

<?php endforeach; ?>
</body>
</html>