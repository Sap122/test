<html>
<head>

</head>
<body>
<h1> Hello</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="number" name="value">
<button name="submit">OK</button>
</form>
</body>
</html>
<?php
$name = "";


if(isset($_POST['submit'])){
  $name = $_POST["value"];
 

}
echo $name;

$host = "localhost";
$user = "root";
$pass = "";

$db = "sample";
$conn = mysqli_connect($host,$user,$pass,$db);
if($conn === false){
    die(" not connected");
}
else{
    echo("connected");
}


$insertRecordQuery = "INSERT INTO sam (value) VALUES($name)";

if(mysqli_query($conn, $insertRecordQuery)){
   echo "succesfully";
     // setcookie('name',"$name",time()+3600*24
}
?>