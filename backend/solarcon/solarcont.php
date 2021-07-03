<?php
$localhost ="localhost";
$username ="root";
$password ="";
$dbname = "solar";

//database connection
$connect = new mysqli($localhost,$username,$password,$dbname);

// check connection
if($connect->connect_error){
    die("Connection Failed : " . $connect->connect_error);
}else{
  //echo "Successfully connected" ;
} 
if($_POST){
    
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['message'];


    $sql = $connect -> query ("INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', '$message');");
    if($sql===true){
    
    echo '<script>alert("Submitted")</script>';
    }else{
        echo '<script>alert("Something Wrong. Please try again")</script>';
    }

    echo '<script>window.location="../../custom/solarcontact.php"</script>';
    

}
?>
