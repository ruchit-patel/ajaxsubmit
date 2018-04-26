<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
    echo "Connection Error";
}
if(!mysqli_select_db($con,'awt2'))
{
    echo "database not selected";
}

$fname=$_POST['form-first-name'];
$lname=$_POST['form-last-name'];
$dt=$_POST['dt'];
$add=$_POST['form-address'];
$ays=$_POST['form-about-yourself'];
$email=$_POST['form-email'];
$pass=$_POST['form-password'];
$school=$_POST['school'];
$prg=$_POST['prg'];

$sql=("Insert into regi (fname,lname,bday,adr,ays,email,pass,school,prg) values ('$fname','$lname','$dt','$add','$ays','$email',MD5('$pass'),'$school','$prg')");
if(!mysqli_query($con,$sql))
{
    echo'Error Occured';
}
else{

    echo 'All Good!! Registered!!';
}

?>