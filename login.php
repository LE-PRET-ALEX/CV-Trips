<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="login.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d5733abbf.js" crossorigin="anonymous"></script>
   <title>Login page</title>
</head>
<body>
   <div class="content">
       <div class="login_card">
           <div class="login_image">
               <!--<img src="" alt="Imagem background aesthetic">-->
               <!--<img src="" alt="Logo CV TRIPS">-->
           </div>
           <div class="login_form_area">
               <div class="login_form_area_title">
                   <h4>Login</h4>
               </div>
               <div class="login_form">
                   <form action="">
                       <div class="form_username_section">
                           <label for="username_input">Username</label>
                           <input type="text" name="username" id="username_input" placeholder="e.g.  jessica077">
                           <i class="fa-solid fa-user"></i>
                       </div>
                       <div class="form_password_section">
                           <label for="password_input">Password</label>
                           <input type="password" name="password" id="password_input" placeholder="e.g.  pass12$$">
                           <i class="fa-solid fa-lock"></i>
                       </div>
                   </form>
               </div>
               <div class="login_form_buttons">
                   <button id="login_button">Login</button>
                   <button id="create_account_button" href="create_account.php">Create account</button>
                   <a href="index.php">Continue without log</a>
               </div>
           </div>
       </div>
   </div>
</body>
</html>
