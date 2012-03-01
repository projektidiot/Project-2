<?php
$host="localhost"; // Host name 
$username="am315171"; // Mysql username 
$password="beisler"; // Mysql password 
$db_name="am315171"; // Database name 
$tbl_name="voters"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$myvoterid=mysql_real_escape_string($_POST['voterID']);
 
$sql="SELECT * FROM $tbl_name WHERE voter_id='$myvoterid'";
$result=mysql_query($sql);

// Replace counting function based on database.
$count=mysql_num_rows($result);

if($count==1){
  // Register $voterid and redirect to vote page.
  $_SESSION["myvoterid"];
  header("location:vote.html");
} 
else {
  echo "Sorry, your voter ID does not exist.";
}
?>