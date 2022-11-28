<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

                 $Server="localhost";
		 $username="root";
		 $psrd="";
		 $dbname = "Election";
		 $connection= mysqli_connect($Server,$username,$psrd,$dbname);

         $name     =$_POST['Name'];
         $uname    =$_POST['uName'];
         $Password =$_POST['Pass'];
         $email    =$_POST['email'];
         $phone    =$_POST['Phone'];
         $dob      =$_POST['DOB'];
         $gender   =$_POST['gender'];
         $address  =$_POST['Address'];


         $image = $_FILES['image']['name'];
         $tmp_name = $_FILES['image']['tmp_name']; 

         move_uploaded_file($tmp_name, "uploads/$image");

         $query="insert into Voter(VoterName,VoterUserName,Password,Email,Mobile,DOB,Gender,Address,Photo) values('$name','$uname','$Password','$email','$phone','$dob','$gender','$address','$image')";
         $ret= mysqli_query($connection,$query);
      
        echo '<script language="javascript">';
        echo 'alert("Registration successfully")';
        echo '</script>';
       

?>

</body>
</html>