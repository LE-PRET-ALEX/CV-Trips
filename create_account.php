<?php

session_start();

include "db.php";

if(isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

$error = "";
$success = "";

if(isset($_POST['register'])){

    $nome = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if(
        !empty($nome) &&
        !empty($email) &&
        !empty($password) &&
        !empty($confirm_password)
    ){

        if($password != $confirm_password){

            $error = "Passwords do not match!";

        } else {

            $check_sql = "SELECT id FROM users WHERE email = ?";

            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("s", $email);
            $check_stmt->execute();

            $check_result = $check_stmt->get_result();

            if($check_result->num_rows > 0){

                $error = "Email already exists!";

            } else {

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users(nome, email, password)
                        VALUES (?, ?, ?)";

                $stmt = $conn->prepare($sql);

                $stmt->bind_param(
                    "sss",
                    $nome,
                    $email,
                    $hashed_password
                );

                if($stmt->execute()){

                    $success = "Account created successfully!";

                } else {

                    $error = "Error creating account!";
                }
            }
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

   <link rel="stylesheet" href="create_account.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">

   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

   <script src="https://kit.fontawesome.com/4d5733abbf.js" crossorigin="anonymous"></script>

   <title>Create Account</title>

</head>

<body>

   <div class="content">

       <div class="register_card">

           <div class="register_image">
           </div>

           <div class="register_form_area">

               <div class="register_form_area_title">
                   <h4>Register</h4>
               </div>

               <?php if(!empty($error)) { ?>
                    <p style="color:red;"><?php echo $error; ?></p>
               <?php } ?>

               <?php if(!empty($success)) { ?>
                    <p style="color:green;"><?php echo $success; ?></p>
               <?php } ?>

               <div class="register_form">

                   <form action="" method="POST">

                       <div class="form_username_section">

                           <label for="username_input">Username</label>

                           <input
                               type="text"
                               name="username"
                               id="username_input"
                               placeholder="e.g. jessica077"
                           >

                           <i class="fa-solid fa-user"></i>

                       </div>

                       <div class="form_username_section">

                           <label for="email_input">Email</label>

                           <input
                               type="email"
                               name="email"
                               id="email_input"
                               placeholder="e.g. example@gmail.com"
                           >

                           <i class="fa-solid fa-envelope"></i>

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

                       <div class="form_password_section">

                           <label for="confirm_password_input">
                               Confirm password
                           </label>

                           <input
                               type="password"
                               name="confirm_password"
                               id="confirm_password_input"
                               placeholder="e.g. pass12$$"
                           >

                           <i class="fa-solid fa-lock"></i>

                           <div class="show_password_section">

                                <input
                                    type="checkbox"
                                    id="show_password_checkbox"
                                >

                                <label for="show_password_checkbox">
                                    Show password
                                </label>

                           </div>

                       </div>

                       <div class="register_form_buttons">

                           <button
                               id="register_button"
                               type="submit"
                               name="register"
                           >
                               Register
                           </button>

                           <a href="index.php">
                               Continue without log
                           </a>

                       </div>

                   </form>

               </div>

           </div>

       </div>

   </div>

   <script>

        const checkbox = document.getElementById("show_password_checkbox");

        const password = document.getElementById("password_input");

        const confirmPassword = document.getElementById("confirm_password_input");

        checkbox.addEventListener("change", () => {

            if(checkbox.checked){

                password.type = "text";
                confirmPassword.type = "text";

            } else {

                password.type = "password";
                confirmPassword.type = "password";
            }

        });

   </script>

</body>
</html>