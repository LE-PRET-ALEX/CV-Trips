<?php

session_start();

include "db.php";

if(isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

$error = "";

if(isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(!empty($email) && !empty($password)){

        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){

            $user = $result->fetch_assoc();

            if(password_verify($password, $user['password'])){

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['nome'];
                $_SESSION['user_email'] = $user['email'];

                header("Location: index.php");
                exit();

            } else {
                $error = "Incorrect password!";
            }

        } else {
            $error = "User not found!";
        }

    } else {
        $error = "Fill all fields!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="login.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

   <script src="https://kit.fontawesome.com/4d5733abbf.js" crossorigin="anonymous"></script>

   <title>Login page</title>
</head>

<body>

   <div class="content">

       <div class="login_card">

           <div class="login_image">
           </div>

           <div class="login_form_area">

               <div class="login_form_area_title">
                   <h4>Login</h4>
               </div>

               <?php if(!empty($error)) { ?>
                    <p style="color:red;"><?php echo $error; ?></p>
               <?php } ?>

               <div class="login_form">

                   <form action="" method="POST">

                       <div class="form_username_section">
                           <label for="email_input">Email</label>

                           <input
                               type="email"
                               name="email"
                               id="email_input"
                               placeholder="e.g. example@gmail.com"
                           >

                           <i class="fa-solid fa-user"></i>
                       </div>

                       <div class="form_password_section">
                           <label for="password_input">Password</label>

                           <input
                               type="password"
                               name="password"
                               id="password_input"
                               placeholder="e.g. pass12$$"
                           >

                           <i class="fa-solid fa-lock"></i>
                       </div>

                       <div class="login_form_buttons">

                           <button id="login_button" type="submit" name="login">
                               Login
                           </button>

                           <a href="create_account.php">
                               <button type="button" id="create_account_button">
                                   Create account
                               </button>
                           </a>

                           <a href="index.php">
                               Continue without log
                           </a>

                       </div>

                   </form>

               </div>

           </div>

       </div>

   </div>

   <script src="login.js"></script>

</body>
</html>