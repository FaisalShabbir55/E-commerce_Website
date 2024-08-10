<?php 
 echo "<link rel='stylesheet' href='style.css'>";

$con = mysqli_connect("localhost","root","","Project");
if($con)
{
    echo"connected";
}



if(isset($_POST['submitl']))
{
    $lemail = $_POST['lem'];
    $lpassword = $_POST['lpw'];

$q2 = "select * from customers where Email='$lemail' and Pass='$lpassword'";
$fetch = mysqli_query($con,$q2);
$norows = mysqli_num_rows($fetch);


$qp = "select * from customers where Email='$lemail' and Pass!='$lpassword'";
$fetchp = mysqli_query($con,$qp);
$norowsp = mysqli_num_rows($fetchp);

if($norows != 0)
{
    // echo '<h1>Welcome board</h1>';
    // echo '<h1>Login successfully!</h1>';
        header("Location:index.php");
        // $record = mysqli_fetch_assoc($fetch);
        // echo "<table class='ftable' border=1px>";
        // echo "<tr><td><h3> Welcome " . $record['FName'] . "<br></h3></td></tr>";
        // echo "<tr><td><h5> First Name: " . $record['FName'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5> Last Name: " . $record['LName'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5> Email: " . $record['Email'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5> Gender: " . $record['Gender'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5> Interest: " . $record['Interest'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5>Languages: " . $record['Languages'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5>Date of birth: " . $record['DOB'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5>Contact: " . $record['Contact'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5>Address: " . $record['Addrs'] . "<br></h5></td></tr>";
        // echo "<tr><td><h5>Image: " . $record['Image'] . "<br></h5></td></tr>";
        // echo "<tr><td></table> ";
                 
        // // Add more fields as needed
}
else if($norowsp != 0)
{
    echo "<h1>In correct password,try again <a href='Login.php'> Login </a> </h1> <br>";
}
else
{
  
    echo "<h1>You are not registered, please get register yourself first </h1> <br>";
    echo "<h2><a  href='input.php' align='center'>Sign Up</a> here</h2>";
}
}








else if(isset($_POST['check'])&&isset($_POST['submitr']))
{
$name1=$_POST['fname'];
$name2=$_POST['lname'];
$email=$_POST['em'];
$password=$_POST['pw'];
$q3 = "select * from customers where Email='$email'";
$fetch2 = mysqli_query($con,$q3);
$norows2 = mysqli_num_rows($fetch2);
if($norows2 != 0)
{
    header("Location:SIgnup.php");
    exit();
}
else{
$gender=$_POST['gen'];
$interest=$_POST['i'];
$languages=$_POST['l'];
$chk=" ";
foreach($languages as $checks)
{
    $chk = $chk.$checks.",";
}
$birthdate=$_POST['dob'];
$contact=$_POST['con'];
$address=$_POST['add'];
$file = $_FILES['img'];
$checktc=$_POST['check'];
$file_name = $file['name'];
$file_error = $file['error'];
$file_temp = $file['tmp_name'];
$file_ext_stored = array('png','jpg','jpeg');
$file_ext = explode(".",$file_name);
$file_check =end($file_ext);
if(in_array($file_check,$file_ext_stored))
{
    $destination_file = 'image/'.$file_name;
    move_uploaded_file($file_temp,$destination_file);
        
    $query = "insert into customers(Fname,Lname,Email,Pass,Gender,Interest,Languages,DOB,Contact,Addrs,Image,TC) 
                 values('$name1','$name2','$email','$password','$gender','$interest','$chk','$birthdate','$contact','$address','$destination_file','$checktc')";
          
       $throw = mysqli_query($con,$query);
       if($throw)
       {   
          
           echo "<script>alert('New Record Inserted')</script>";
           header("Location:login.php");
       }
        
       else
       {
           echo "error:".mysqli_error($con);
       }  
}
else{
    echo"Please upload file with extensions [jpg,png,jpeg]";
}
}

}

?>
