<?php
include 'class.php';
$nim=$_GET['nim'];
$result=$kalkulator->vew_data($nim);
$row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
	<form action="" method="POST">
	
	Nama : <input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
	Nim : <input type="text" name="nim" value="<?php echo $row['nim'];?>"><br>	
	Tgl_lahir : <input type="text" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"><br>
		
	</form>
</body>
</html>
