<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>DIG4104c - Project 2</title>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>		
	
<!--	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" /> -->

    <link rel="stylesheet" type="text/css" href="css/styles.css" />

<? 
	if(isset('submit')

?>
</head>
<body>

<div class="container">
	 <form method="POST" action="candidates2.php">  
	
	<div id="page1" data-role="page">
		<div>
			<h1>Toon Town Election</h1>
			<h3>Vote for your favorite candidate today!</h3>
		</div>
	
		<div id="candidate1">
			<div class="transbox">
				<h4>Calvin</h4>
				<img src="img/calvin.jpg" alt="Calvin of Calvin and Hobbs" />
				<p>Don&rsquo;t be fooled by his innocent manner, he knows what he&rsquo;s doing.</p>
				<input name="submit" type="submit" id="submit" value="VOTE!" />
				<a href="#page2">To Page 2</a> 
			</div>
		</div> 

			
	</div> <!-- End Page 1 -->
	

	<div id="page2" data-role="page">
		<div>
			<h1>Toon Town Election</h1>
			<h3>Vote for your favorite candidate today!</h3>
		</div>
	
		<div id="candidate2">
			<div class="transbox">
				<h4>Sonic the Hedgehog</h4>
				<img src="img/sonic.jpg" alt="Sonic the Hedgehog" />
				<p>He&rsquo;s running for freedom, and running for all!</p>
				<input name="submit" type="submit" id="submit" value="VOTE!" />
				<a href="#page3">To Page 3</a>
			</div>
		</div>
			
	</div> <!-- End Page 2 -->
	

	<div id="page3" data-role="page">
		<div>
			<h1>Toon Town Election</h1>
			<h3>Vote for your favorite candidate today!</h3>
		</div>
	
		<div id="candidate3">
			<div class="transbox">
				<h4>Princess Peach</h4>
				<img src="img/peach.jpg" alt="Princess Peach" />
				<p>She will clear out the pipes of bureaucracy with her infallible justice.</p>
				<input name="submit" type="submit" id="submit" value="VOTE!" />
				<a href="#page1">To Page 1</a>
			</div>
		</div>

			
	</div> <!-- End Page 3 -->

	</div>
</div>
</body>
</html>