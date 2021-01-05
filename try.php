
<?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

            
                // get value
                $email = $_POST['email'];
                $password = $_POST['pass'];

                //to prevent mysql injection
                //global $g;
                //$email = stripcslashes($email);
                //$password = stripcslashes($password);
                //$email = mysqli_real_escape_string($g, $email);
                //$password = mysqli_real_escape_string($g, $password);

                //Query the database for user
                $result = "select * from login where email='$email' and password='$password'" ;
                    echo " Login faild";
                $s=mysqli_connect("localhost","root","","vegana");
                $k=mysqli_query($s,$result);
                $row = mysqli_fetch_array($k, MYSQLI_ASSOC); 
                if ($row['email']==$email && $row['password']== $password){
                    echo " Login Successful .$email";

                } 
                else{
                    echo " Login faild";
                }
                mysqli_close($s); 
            }
                ?>