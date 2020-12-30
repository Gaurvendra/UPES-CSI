<?php
require_once('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$sap = $_POST['sap'];
$year = $_POST['year'];
$member = $_POST['member'];
$course = $_POST['course'];
$mode = $_POST['mode'];
$trans = $_POST['transaction'];

$sex = $_POST['sex'];
$dob = $_POST['dob'];



$result = mysql_query("SELECT * FROM `reg` WHERE `email`= '".$email."' OR `sap` = '".$sap."' ") or die("Cannot connect to database!");

$user_count = mysql_num_rows($result);

 $fileName = basename($_FILES["ss"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 

if ($user_count==0) {
   

   if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['ss']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
    $sql = mysql_query("INSERT INTO `reg`(`name`, `email`, `contact`, `sap`, `year`, `member`, `course`, `mode`, `trans`,`sex`,`dob`,`ss`) values('".$name."','".$email."','".$contact."','".$sap."','".$year."','".$member."','".$course."','".$mode."','".$trans."','".$sex."','".$dob."','". $imgContent."')")or die("Cannot connect1 to database!");

   
    if($sql){ 
               
     header('location:Thank.html');
    }
        }else{ 
       echo"<script>alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.');window.location='registration.html';</script>";     
     
        } 
   
   
   
   
   
   
   
   
   
   
   
   
   } 
    
    
    
    
    
    
    else{
    echo"<script>alert('EMAIL ID/SAP ALREADY EXIST!');window.location='registration.html';</script>";
}

?>
