<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss-forum";

//for generating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {

    // echo "con successful";
} else {
    //  echo "not success"; 
}


$content = $_POST['comments'];
    $userId = $_POST['user_id'];
    $updateid = $_REQUEST['updateid'];


    $sql = "UPDATE `comments`
    SET `comment _by` = '$userId', `Comment_content` = '$content'
    WHERE `comment_id` = '$updateid'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
       $message = "Successfully updated";

       
    } else {
       $message ="Error occured";
    }

    header("location:".$_SERVER["HTTP_REFERER"]."&messageResponse=".$message);exit;
    ?>