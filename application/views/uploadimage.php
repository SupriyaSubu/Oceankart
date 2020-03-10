<?php
$connect = mysqli_connect("localhost","root","","ocean");
if(isset($_POST['insert'])){
	$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$query="INSERT INTO upimage(image) VALUES ('$file')";
	if(mysqli_query($connect,$query)){
		echo '<script>alert("Image inserted into Database")</script>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
	<h3 align="center">Insert images into Database</h3>		
	<form action="<?php echo base_url();?>CusRegister/goimage" method="POST" enctype="multipart/form-data">
		<input type="file" name="image" id="image"/>
		<br>
		<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info">
		
	</form>
	<?php
		$query="SELECT * FROM upimage ORDER BY id DESC";
		$result=mysqli_query($connect, $query);
		while($row=mysqli_fetch_array($result))
		{
			echo '
				<tr>
					<td>
					<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'">
					</td>
				</tr>
			';
		}
	?>
	</div>

</body>
</html>

<script>
	$(document).ready(function(){
		$('#insert').click(function(){
			var image_name=$('#image').val();
			if(image_name == ''){
				alert("Please Select Image");
				return false;
			}
			else{
				var extension=$('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension),['gif','png','jpg','jpeg'] == -1){
					alert('Invalid Image File');
					$('#image').val();
					return false;

				}
			}
		});
	});
</script>