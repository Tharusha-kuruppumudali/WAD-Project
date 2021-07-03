<?php
include('../core.php');
if($_POST){
    
    $question = $_POST['question'];
    $answer = $_POST['answer'];
   


    $sql = $connect -> query ("INSERT INTO `faq` (`id`, `Question`,`Answer`) VALUES (NULL, '$question', '$answer');");
    if($sql===true){
    
    echo '<script>alert("Submitted")</script>';
    }else{
        echo '<script>alert("Something Wrong. Please try again")</script>';
    }

    echo '<script>window.location="../../masterpage.php"</script>';
    

}