<html>
<head>
	<title>Web App Sederhana</title>
</head>
<body>
	<?php
	if(!empty($_POST)) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		
		echo '<h1>Halo, ' . $nama . '!</h1>';
		echo 'Email : ' . $email;
	}
	?>
</body>
</html>