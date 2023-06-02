<!-- Jab user sign up kare gah tou is page pa aye gah  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <!-- loginhandel for handeling login -->

    <?php
    $showError = false;
    $wrongentry = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //dbconnection
        require dirname(__DIR__) . "/Partials/_Db-connect.php";
        $email = $_POST['loginemail'];
        $pass = $_POST['loginPassword'];
        // VERIFY EMAIL
        $sql = "SELECT * FROM `users` WHERE `user_email` = '$email'";
        $result = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result);

        if ($numRows == 1) {
            $row = mysqli_fetch_assoc($result);
            if (Password_verify($pass, $row['user_pass'])) {
                //start session here
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $row['sno'];
                $_SESSION['user_email'] = $email;
                // echo "loggedin " . $email;
                $showError = true;

                if ($showError) {
                    echo "
            <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Login Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = 'http://localhost/Forum2/#';
            })
                </script>
                ";
                } else {
                    // $showError="pass not match";
                    $wrongentry = true;
                    if ($wrongentry) {
                        echo
                        "
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Wrong Credentials!',
        showConfirmButton: false,
            timer: 1500
        }).then(()=>{
            window.location.href = 'http://localhost/Forum2/#';
      })

      </script>";
                    }
                }
            }

          
            exit();
        } 
        {
            header("Location:/Forum2/index.php");
        }
    }



    ?>
</body>