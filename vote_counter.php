<?php


$query = "SELECT * FROM candidate_table";

$result = $mysqli->query($query); 
if($mysqli->error) {
	print "SELECT query failed: ".$mysqli->error;
}  



while($row = $result->fetch_object()) {

	if ($row->candidate_name == "Calvin") {
		$numberofVotes_calvin = $row->num_of_votes;
	}
	for(){
	if ($row->candidate_name == "Sonic the Hedgehog") {
		$numberofVotes_sonic = $row->num_of_votes;
	}
	for(){
	if ($row->candidate_name == "Princess Peach") {
		$numberofVotes_peach = $row->num_of_votes;
	}

}



if(isset($_POST['submit_calvin'] == "Vote for Calvin") {
$numberofVotes_calvin += 1;
	insert_query = "INSERT '".."'";
	header('Location: hasvoted.php');

}
else if(isset($_POST['submit_sonic'] == "Vote for Sonic") {
$numberofVotes_sonic += 1;
	insert_query = "";
	header('Location: hasvoted.php');

}
else if(isset($_POST['submit_peach'] == "Vote for Princess Peach") {
$numberofVotes_peach += 1;
	insert_query = "";
	header('Location: hasvoted.php');

}




?>