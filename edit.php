<html>
<body>

<?php
$con=mysqli_connect("localhost","root","","cilvia_simpleblog");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
							
$pid = $_GET['id'];

$Judul = mysqli_real_escape_string($con,$_POST["Judul"]);							
$Tanggal = mysqli_real_escape_string($con,$_POST["Tanggal"]);
$Konten = mysqli_real_escape_string($con,$_POST["Konten"]);

$sql = "UPDATE list_post
		SET judul='$Judul', tanggal='$Tanggal', konten='$Konten'
		WHERE PostID=$pid";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
header("location:index.php");
?>

</body>
</html>