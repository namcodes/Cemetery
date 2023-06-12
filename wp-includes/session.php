
<?php 
session_start();
include_once("config.php");
if(isset($_SESSION['user_id'])){
    $user = $_SESSION['user_id'];
    $user_query = $conn->query("SELECT * FROM tbl_users WHERE user_id = '{$user}' LIMIT 1");
    if($user_query->num_rows > 0){
        $user_row = $user_query->fetch_assoc();
        $first_name = $user_row['fname'];
        $last_name = $user_row['lname'];
        $email = $user_row['email'];
        $avatar = $user_row['avatar'];
        $user = $user_row['user_id'];
    }else{
        header("Location: ../dashboard");   
    }
}else{
     header("Location: ../");
}

?>