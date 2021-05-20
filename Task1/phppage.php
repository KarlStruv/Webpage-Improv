<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server, $username, $password, $dbname);

$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$copattern = '/^[^ ]+@[^ ]+\.co$/';

if(isset($_POST['submit'])){


    if(!empty($_POST['email'])){
        $email = $_POST['email'];
        if(!preg_match($pattern, $email)){

            echo "<p10> Please provide a valid e-mail address </p10>";
        }

        else{
            if(!preg_match($copattern, $email)){
                
                if(isset($_POST['checkbox'])){

                    $query = "insert into email(email) values('$email')";
                    $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
            
                    if($run){
                    header("Location: ../task1/index-success.html");
                    }
                }
                else{
                    echo "<p11> You must accept the terms and conditions </p11>";
                }    
            }

            else{
                echo "<p12> We are not accepting subscriptions from Colombia emails </p12>"; 
            }
        }
        
        
    }
    else{
        echo "<p13> Email address is required </p13>";
    }
}

?>