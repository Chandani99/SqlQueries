<!DOCTYPE html>
<html>
<head>



	<link rel= "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>search result</title>

<style type="text/css">

	#header{
	height: 0px;
	width: inherit;
	background-color: #00ff77;
	float: left;
	margin-top: 20px;

}

#table1{

float: left;
margin-top: 20px;
height: auto;
width: inherit;
margin-left: 300px;
}
td{
	background-color: #FFFACD;
}
#data{
	color: blue;
}
	</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>



	<div id="header">
	<?php
	

	?>
	
</div>

<br/>
<div id="table1">

<table border="none" class="table table-striped  table-hover" cellspacing="5px">
	<tr style=" color: #ff5500;">
		<th  >ID</th>
		<th >Movie Name</th>
		<th >ReleasYear</th>
		<th >Director</th>
		<th>Lead Actor</th>
		<th>Lead Actress</th>
        
	</tr>
	<?php
$conn = new mysqli("localhost","root","","Movies");



$sql="select * from moviedetails ";
		$query3=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($query3)){
		
?>
	<tr id="data">
		<td ><?php echo $row['Sr. No'] ?></td>
		<td ><?php echo $row['Name'] ?></td>
        <td ><?php echo $row['YearOfRelease'] ?></td>
		<td ><?php echo $row['DirectorName'] ?></td>
		<td ><?php echo $row['LeadActor'] ?></td>
		
		<td ><?php echo $row['LeadActress'] ?></td>
		
	</tr>

	
		
<?php	


}
?>
<tr>
	<td colspan="6">
		<a href="index.php"><button style="height: 35px; width: 150px; border-radius: 10px; float: right; margin-left: 20px; " class="btnCancel btn-cancel">Back</button></a>
	</td>	

</tr>
</table></div>





</body>
</html>

