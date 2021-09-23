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
	<h2 style=" float: left; color: #800000; margin-top: 20px; text-align: center; margin-left: 200px;">Insert Movie Details</h2>
			
			<br/><br/>
		
			
		     <table style="margin-left: 80px;  " >
		     	<form id="frm-mobile-verification" name="booking" method="POST" action="index.php" enctype="multipart/form-data" style="align-items: center;" ><hr>
		     		<br/>
		     	<tr>
		     		<td >
		     			<label> Movie Name:</label>
		     		</td>
		     		<td >
		     			<label> Year of Releasing:</label>
		     		</td>
		     	</tr>
		     	<tr >
		     		<td>
		     		
		     		<div class="form-group">
		                <input  type="text" name="MovieName" class="input1"  title="Invalid User Name" placeholder="Enter Movie's Name" required >
		            </div>
		            </td>
		            <td>
		      
		            <div class="form-group">
		                <input type="text"  name="Year" class="input1"    title="Invalid User Name" placeholder="Enter year" required >
			        </div>
			        </td>
			
		</tr>
		<tr>
			<td>
				<label>Director Name</label>
			</td>
		</tr>
			<tr>
				<td colspan="3">
		      
		      <div class="form-group">
		        <input type="text"  name="DName" class="input1"  title="Invalid Email Id"  style="width:350px;" placeholder="Enter Director's Name"  >
			  </div>
			   
			</td>
		</tr>
		<tr>
			<td >

				<label>Lead Actor:</label>
			
		      <div class="form-group">
		        <input type="text"  name="ActorName" style="width:350px;" class="input1"  placeholder="Actor's Name" required >
		        </div>
		   </td>
		</tr>
		<tr>
			<td>
				<label>Lead Actress:</label>
			</td>
		</tr>
		<tr>
			<td colspan="3">
		      
		      <div class="form-group">
		        <input type="text"  name="ActressName" class="input1" style="width:350px;"  placeholder="Actress's Name" required>
		        </div>
			</td>
		</tr>
		
			
		<tr>
			<td ><input type="submit" class="btnSubmit btn-success" value="Submit" name="submit"style="height: 35px; width: 150px; border-radius: 10px; float: left; margin-left: 20px;" > 			
			 
			</td></form>
			<td>
				<a href="ViewMovies.php"><button style="height: 35px; width: 150px; border-radius: 10px; float: left; margin-left: 20px; background-color :darkblue; color: white; " class="btnCancel btn-cancel">Show Movies</button></a>
			</td>
			
		</tr>

</table>
<br/>
				
		
		
      </div><!-- end of form-->
      <?php
$conn = new mysqli("localhost","root","","Movies");
if(isset($_POST['submit']))
{
	$value1=$_POST['MovieName'];
	$value2=$_POST['Year'];
	$value3=$_POST['DName'];
	$value4=$_POST['ActorName'];
	$value5=$_POST['ActressName'];
	

	$select="select * from moviedetails where Name='$value1'";

$query1=mysqli_query($conn, $select);
if(mysqli_num_rows($query1)==1){
	echo"<script>alert('This record is already in our database , Please try another one')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
else{
	 $sql="insert into moviedetails(Name,LeadActor,LeadActress,YearOfRelease,DirectorName)values('$value1','$value4','$value5','$value2','$value3')";
	 
     $query=mysqli_query($conn,$sql);
     if ($query)
     {
     	echo"<script>alert('Data Saved')</script>";
     }
     
	
}
}
?>
	<br/>
	<br/>
</div><!-- end of body-->
</body>
</html>