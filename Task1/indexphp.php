<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['email'])){

        $email = $_POST['email'];

        $query = "insert into emaildb(email) value('$email')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
        
        if($run){
            header("Location:index-success.html");
        }
        else{
        }
    }

    else{
        echo "Email required";
    }
}

?>