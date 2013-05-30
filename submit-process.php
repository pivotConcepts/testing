<head> 

<style type="text/css">
body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size:62.5%;
}
#thiscontent{
	width:500px;
}
h2 {
	color: #417826;
    font-size: 1.75em;
    font-weight: bold;
    padding: 6px 16px;
}
</style>

</head>

<?php
$email = $_REQUEST['email'] ;
$email = strtolower($email);


$zip = $_REQUEST['zip'] ;
$age = $_REQUEST['age'] ;
$gender = $_REQUEST['gender'] ;
$newsletter = $_REQUEST['newsletter'];



			
				$con = mysql_connect("localhost","pivotco1_me","pass098word");
				if (!$con)
 				 {
				  die('Could not connect: ' . mysql_error());
				  }
				  				  				  
				mysql_select_db("pivotco1_tou", $con);
				$result = mysql_query("SELECT * FROM register WHERE Email = '$email' ");
			
				
				$num_rows = mysql_num_rows($result);
				
												
				if ($num_rows > 0)
				{
				echo('<h2>Thank you for submitting your information.</h2> ') ;	
				
				}
				else 
				{
				mysql_query("INSERT INTO register (Email, Zip, Gender, Age) VALUES ('$email', '$zip' , '$gender' , '$age')");
				
				if ($newsletter == "bxcheck")
				{
				
				$curl_connection =
					  curl_init('https://app.icontact.com/icp/signup.php');
					  curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    					curl_setopt($curl_connection, CURLOPT_USERAGENT,
    					"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
    					curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    					curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);


						
						$post_data['fields_email'] = $email;
						$post_data['listid'] = '101491';
						$post_data['specialid:101491'] = 'GI1S';
						$post_data['clientid'] = '972922';
						$post_data['formid'] = '12273';
						$post_data['reallistid'] = '1';				
						$post_data['doubleopt'] = '0';
						
						foreach ( $post_data as $key => $value)
							{
    							$post_items[] = $key . '=' . $value;
							}
						$post_string = implode ('&', $post_items);
						curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
						$result = curl_exec($curl_connection);
						
					
						curl_close($curl_connection);
						echo('curl went through check both dbs');
						
				}
						


				

						
						
						
										
				
				echo('<h2>Thank you for submitting your information.</h2> ') ;		
				}




mysql_close($con);
		
		
?>
