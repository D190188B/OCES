<?php
$servername = "localhost";//localhost for local PC or use IP address
$username = "root"; //database name
$password = "";//database password
$database = "oncoun";//database name

// Create connection #scawx
$conn = new mysqli($servername, $username, $password,$database);

// Check connection #scawx
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


mysqli_set_charset($conn, 'utf8');

session_start();
function validate_input_text($textValue){
    if (!empty($textValue)){
        $trim_text = trim($textValue);
        // remove illegal character
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}

function validate_input_email($emailValue){
    if (!empty($emailValue)){
        $trim_text = trim($emailValue);
        // remove illegal character
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return '';
}


if(isset($_POST['login'])){
$error = array();

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}


if(empty($error)){
    // sql query
    $sql = "select * from client where email='$email'";//username and password same ？
    $result=$conn->query($sql);
    
   
    if($result->num_rows > 0){ //over 1 database(record) so run
        while($row = $result->fetch_assoc()){
            //display result
        $id=$row['id'];//[] inside is follow database 
        $name=$row['name'];
        $passwordHash=$row['password'];
        }
        if(password_verify($password, $passwordHash)){
            $_SESSION['name']=$name;
            echo '<script>window.alert("Login Successful...!")</script>';
            header('refresh:0.2; url=Home.php');
            exit();
        }
        else{
            echo '<script>window.alert("Unavariable name or password")</script>';
        }
     } echo '<script>window.alert("No account available..!")</script>';
}else{
    echo "Please Fill out email and password to login!";
}
}
?>
<!doctype html>
<html lang="en">
    <?php require_once ("header1.php"); ?>
<header>
    
</header>
<!-- registration area -->
<section id="login-form">
    
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-4">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Login</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Login and enjoy additional features</p>
                <span class="font-ubuntu text-black-50">Create a new <a href="register.php">account</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-4">
                <div class="text-center">
                    <img src="images/profile/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                        <h4>Email</h4>
                            <input type="email" required name="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                        <h4>Password</h4>
                            <input type="password" required name="password" id="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-row my-0">
                        <div class="col">
                            <p>Forget your password? Click here <a href="#">Reset Password</a></p> 
                        </div>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <input type="submit" name="login" value="submit">
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
</html>

