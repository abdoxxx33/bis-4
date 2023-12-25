<?php 

$email = $_REQUEST['email'];
$psw = $_REQUEST['psw'];



if(isset($_POST['signup']))
{
    
    $host="localhost";
    $user ="root";
    $password="";
    $db="customers";
    
    @$conn = mysqli_connect($host,$user,$password,$db);


    $insert="insert into emails values('$email','$password')";

    mysqli_query($conn,$insert);

    if($conn)
    {
        echo("<h1 style='color:green;'> Success! </h1>");
    }
    else
    {
        echo("<h1 style='color:red;'> Failed! </h1>");
    }
}

?> 
