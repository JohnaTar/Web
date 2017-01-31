<?php
include("connect.php");
// Upload and Rename File

if (isset($_POST['Submit']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types))
	{	
		// Rename file
		$newfilename = ($file_basename). $file_ext;
		if (file_exists("fileupload/". $newfilename))
		{
			// file already exists error
	
	echo "<script>alert('You have already uploaded this file.!!')</script>";
     echo "<script>window.history.back()</script>";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "fileupload/" . $newfilename);


			
			$location="fileupload/".$_FILES["file"]["name"];
			$name =$_FILES["file"]["name"];


  $sql = "INSERT INTO `stwFileupload` (`stwFileupload_id`,`stwFileupload_name`, `stwFileupload_path`) VALUES ('','$name','$location')";
  $query =mysqli_query($conn,$sql);
  if ($query) {
  	echo "<script>alert('Success!!')</script>";
     echo "<script>window.history.back()</script>";
  } else {
  echo "<script>alert('Error!!')</script>";
     echo "<script>window.history.back()</script>";
}






			
		}
	
	} 
	
	else
	{
		 echo "<script>alert('File Is Not Support!')</script>";
     echo "<script>window.history.back()</script>";
		 
	}
}

?>