<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel= "stylesheet" href="registration.css">
	<link rel= "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
</head>
<body>
	<div id="body">
		<div id="logo"> 
		
		
		<hr/>
		</div>
		
		<br/>
	<br/>
<div id="form">
	<h2 style=" float: left; color: #800000; margin-top: 20px; text-align: center; margin-left: 200px;">Search Movie by Actor, Actress name</h2>
			
			<br/><br/>
		
			
		     <table style="margin-left: 80px;  " >
		     	<form id="frm-mobile-verification" name="booking" method="POST" action="Search.php" enctype="multipart/form-data" style="align-items: center;" ><hr>
		     		<br/>
		     	
		<tr>
			<td>
				<label>Actor or Actress's Name</label>
			</td>
		</tr>
			
		<tr>
				<td colspan="3">
		      
		      <div class="form-group">
		        <input type="text"  name="ActorName" class="input1"  title="Invalid Email Id"  style="width:350px;" placeholder="Actor's or Actress Name"  required >
			  </div>
			   
			</td>
		</tr>
			
		<tr>
			<td ><input type="submit" class="btnSubmit btn-success" value="Search" name="submit"style="height: 35px; width: 150px; border-radius: 10px; float: left; margin-left: 20px;" > 			
			 
			</td></form>
			<td>
				<a href="ViewMoviesdetails.php"><button style="height: 35px; width: 150px; border-radius: 10px; float: left; margin-left: 20px; background-color :darkblue; color: white; " class="btnCancel btn-cancel">View All Movies</button></a>
			</td>
			
		</tr>

</table>
<br/>
				
		
		
      </div><!-- end of form-->
  
	<br/>
	<br/>
</div><!-- end of body-->
</body>
</html>