<?
    include("db_connect.php");
    
    $id = $_POST['voterID'];
    $query = "SELECT * FROM voters WHERE voter = '$id'";
    $result = $mysqli->query($query);
    if($mysqli->error) {
        print "Whoops. Query Failure: ".$mysqli->error;
    }
    
    session_start();
    $_SESSION=array_merge($_SESSION,$_POST);
    
    if(!empty($_POST['voterID']) && (preg_match("/^1234|10[0-4][1-9]|1010|1020|1030|1040$/", $_POST['voterID'])) &&
    (isset($_POST['submit']))) {
        while($row = $result->fetch_object()) {
            if($row->voted=='no') {
                header('Location: hasntvoted.php');
            }
            else {
                header('Location: home.php');
            }
        }
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>DIG4104c - Project 2</title>
        
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>

    <body>
        <div class="container">
            <div class="transbox">
                <div class="header">
                    <h1>Toon Town Election</h1>
                    <h3>Vote for your favorite candidate today!</h3>
                </div><!--header-->
                
                <div class="loginbox">
                    <form name="loginForm" method="post" action="home.php">
                        <fieldset>
                            <input name="voterID" type="text" id="voterID" 
                                   value="<? if(isset($_POST['voterID'])) {print $_POST['voterID'];} else {print 'Enter ID';}?>"
                                   onfocus="if(this.value=='Enter ID') {this.value=''}"
                                   onblur="if(this.value=='') {this.value='Enter ID'}" />
                            
                            <!--Incorrect Entry Span-->       
                            <? if(empty($_POST['voterID']) && (isset($_POST['submit']))) {print '<span class="missing">Empty!</span>';}
                               if(!empty($_POST['voterID']) && (!preg_match("/^1234|10[0-4][1-9]|1010|1020|1030|1040$/", $_POST['voterID'])) && (isset($_POST['submit']))) {print '<span class="missing">Invalid Entry!</span>';}?>
                            <!--end Incorrect Entry Span-->
                            
                            <input name="submit" type="submit" id="submit" value="Login" />
                        </fieldset>
                    </form>
                </div><!--loginbox-->
            </div><!--transbox-->
        </div><!--container-->
    </body>
</html>