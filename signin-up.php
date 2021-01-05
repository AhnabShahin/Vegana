<?php ob_start() ; ?>
<?php session_start() ; ?>
<?php require_once("./includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--=====================================
                    META TAG PART START
        =======================================-->
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- AUTHOR META -->
    <meta name="author" content="mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">

    <!-- TEMPLATE META -->
    <meta name="name" content="vegana">
    <meta name="title" content="vegana - vegan food ecommerce html template">
    <meta name="keywords"
        content="vegana, vegan, food, ecommerce, store, html, template, bootstrap, vegetarian, organic, vegetables, greengrocery, fruit, healthy, shop">
    <!--=====================================
                    META-TAG PART END
        =======================================-->

    <!-- FOR WEBPAGE TITLE -->
    <title>Vegana - Login or Register</title>

    <!--=====================================
                    CSS LINK PART START
        =======================================-->
    <!-- FOR FAVICON -->
    <link rel="icon" href="images/favicon.png">

    <!-- FOR FLATICON -->
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css">

    <!-- FOR FONT AWESOME -->
    <link rel="stylesheet" href="fonts/font-awesome/fontawesome.css">

    <!-- FOR BOOTSTRAP -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">

    <!-- FOR COMMON STYLE -->
    <link rel="stylesheet" href="css/custom/main.css">

    <!-- FOR SIGNIN-UP PAGE -->
    <link rel="stylesheet" href="css/custom/signin-up.css">
    <!--=====================================
                    CSS LINK PART END
        =======================================-->
</head>

<body>
    <!--=====================================
                    SIGNIN-UP PART START
        =======================================-->
 
    <section class="sign-part">
        <div class="sign-content">
            <div class="content-cover">
                <a href="#"><img src="images/logo.png" alt="logo"></a>
                <h1>Biggest online vegan food ecommerce store in worldwide.</h1>
            </div>
        </div>
        <div class="sign-form">
            <div class="back-arrow">
                <a href="#"><img src="images/logo.png" alt="logo"></a>
                <a href="index.html"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="sign-cate">
                <ul class="nav nav-tabs">
                    <li><a href="#signin" class="nav-link active" data-toggle="tab">sign in</a></li>
                    <li><a href="#signup" class="nav-link" data-toggle="tab">sign up</a></li>
                </ul>
            </div>

            <!-- SIGN IN TAB CONTENT -->
            <?php 
            date_default_timezone_set('Asia/Dhaka');
             
            if(isset($_POST['submit1'])){
               
                $email=trim($_POST['signupemail']);
                $sql1="SELECT * FROM users WHERE email = :email";
                $stmt1=$pdo->prepare($sql1);
                $stmt1->execute([
                    ':email'=> $email,

                ]);
                $countemail=$stmt1->rowCount();

                $password=trim($_POST['signuppass']);
                $confirm_password=trim($_POST['signupconpass']);
                if($password != $confirm_password){
                    $password_not_match_error="Password does't match";
                }else{
                    if($countemail!= 0){
                        $error_email_exist="Email Already Exist !";
                    }else{
                    $hash=password_hash($password,PASSWORD_BCRYPT,['cost'=>10]);
                    $sql="INSERT INTO `users` (`user_id`, `email`, `password`, `signup_on`) VALUES (NULL, :email, :password, :signup_on)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        ':email'=>$email,
                        ':password'=>$hash,
                        ':signup_on'=> date('d-M-Y').' at '.date("h:i A")
                    ]);
                    $success='true';
                    }

                }
            }


             ?>
            <?php           
                if(isset($_POST['submit'])){
                    
               
                    $email=trim($_POST['signinemail']);
                    $password=trim($_POST['signinpassword']);
                    $sql2="SELECT * FROM users WHERE email = :email";
                    $stmt2=$pdo->prepare($sql2);
                    $stmt2->execute([
                        ':email'=> $email,

                    ]);
                    $count = $stmt2->rowCount();
                    if($count != 1){
                        
                        $error = "Wrong Credentials";
                       
                    }else if($count == 1){
                        $user=$stmt2->fetch(PDO::FETCH_ASSOC);
                        $user_password_hash=$user['password'];
                        if(password_verify($password,$user_password_hash)){
                            $Sign_in_success="Sign In Succeccful";
                            $_SESSION['email']=$email;
                            $_SESSION['login']= 'success';
                            header("Refresh:2;url=./index.php");
                        }else{
                            $wrong_pasword=" Wrong Password";
                        }
                    }
                }
                ?> 
            <div class="tab-pane active" id="signin">
                <div class="sign-heading">
                    <h2>Login</h2>
                    <p>Use credentials to access your account.</p>
                    
                    <?php  
                    if(isset($error)) {
                        echo "<p class='alert alert-danger'>{$error}</p>";
                    }
                    else if(isset($error_email_exist)){
                        echo "<p class='alert alert-danger'>{$error_email_exist}</p>";
                    }
                    else if(isset($password_not_match_error)){
                        echo "<p class='alert alert-danger'>{$password_not_match_error}</p>";
                    } else if(isset($success)) {
                        echo "<p class='alert alert-success'>Account Created Successfully. Sign in Now</p>";
                    } else if(isset($wrong_pasword)){
                        echo "<p class='alert alert-danger'>{$wrong_pasword}</p>";
                    } else if(isset($Sign_in_success)){
                        echo "<p class='alert alert-success'>{$Sign_in_success}</p>";
                    } 
                    
                    ?>
  
                </div>
                <form class="form" method="POST" action="signin-up.php">
                    <label class="form-label">
                        <input type="email" placeholder="Email" id="email" name="signinemail">
                        <small>Please follow this example - mironcoder@gmail.com</small>
                    </label>
                    <label class="form-label">
                        <input type="password" id="pass" placeholder="Password" name="signinpassword">
                        <button type="button"><i class="eye fas fa-eye"></i></button>
                        <small>Password must be 6 characters</small>
                    </label>
                    <label class="form-link">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="signin-check">
                            <label class="custom-control-label" for="signin-check">Remember me</label>
                        </div>
                        <a href="#">Forgot password?</a>
                    </label>
                    <label class="form-btn">
                        <button type="submit" name="submit" class="btn btn-outline">sign in now</button>
                    </label>
                </form>
                <div class="form-bottom">
                    <p>Don't have an account? click on the <span>( sign up )</span> button above.</p>
                </div>
            </div>

            
                

            <!-- SIGN UP TAB CONTENT -->
            <div class="tab-pane" id="signup">
                <div class="sign-heading">
                    <h2>Register</h2>
                    <p>Setup a new account in a minute. </p>

                </div>
                <ul class="form-option">
                    <li><a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>facebook</span>
                        </a></li>
                    <li><a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>twitter</span>
                        </a></li>
                    <li><a href="#">
                            <i class="fab fa-google"></i>
                            <span>google</span>
                        </a></li>
                </ul>
                <div class="or-text">
                    <p>or</p>
                </div>
                <form class="form" method="POST" action="signin-up.php">
                    <label class="form-label">
                        <input type="email" placeholder="Email Address" name="signupemail">
                        <small>Please follow this example - mironcoder@gmail.com</small>
                    </label>
                    <label class="form-label">
                        <input type="password" id="pass" placeholder="Password" name="signuppass">
                        <button type="button"><i class="eye fas fa-eye"></i></button>
                        <small>Password must be 6 characters</small>
                    </label>
                    <label class="form-label">
                        <input type="password" id="pass" placeholder="Repeat Password" name="signupconpass">
                        <button type="button"><i class="eye fas fa-eye"></i></button>
                        <small>Password must be 6 characters</small>
                    </label>
                    <div class="form-link">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-check">
                            <label class="custom-control-label" for="signup-check">I agree to the all <a href="#">terms
                                    & consitions</a> of bebostha.</label>
                        </div>
                    </div>
                    <div class="form-btn">
                        <button type="submit1" name="submit1" class="btn btn-outline">sign up free</button>
                    </div>
                </form>
                <div class="form-bottom">
                    <p>Already have an account? click on the <span>( sign in )</span> button above.</p>
                </div>
            </div>
            

        </div>
    </section>
    <!--=====================================
                    SIGNIN-UP PART END
        =======================================-->


    <!--=====================================
                    JS LINK PART START
        =======================================-->
    <!-- FOR BOOTSTRAP -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!-- FOR COMMON SCRIPT -->
    <script src="js/custom/main.js"></script>
    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>

</html>