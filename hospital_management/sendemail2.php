<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'db.php';
    $sql="SELECT * FROM `patients` WHERE  patient_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}






	
?>

    <style>
        body {
            background-color: #E5E5E5;
        }
        
        .row input {
            height: 45px;
        }
        
        .row select {
            height: 45px;
        }
        
        .btn {
            border-radius: 20px;
        }
        
        .row .shadow {
            border-radius: 20px;
        }
    </style>
 <?php
    include 'sidebarpanel.php';
    ?>

   
            <div class="col-sm-9">
            <div class="d-flex">
                <div class="dashboard-text mt-3">
                    <h2>Upcoming Events</h2>
                </div>
                <div class="ml-auto">
                    <div class="d-flex">
                        <i class="fas ml-5 mt-4 fa-bars"></i>
                        <i class="fas ml-5 mt-4  fa-bell"></i>
                       
                        
                        <div class="dashboard-admin ml-5 mt-2">
                            <div class="d-flex">
                                <div class="d-block bg-primary-color">
                                    <h5>
                                        <?php
                                        // echo $user_id;
                                        require 'db.php';
                                         $sql="SELECT * FROM `users` where user_id = '$user_id'";
                                         $result = mysqli_query($conn, $sql);
                                         $row2 = mysqli_fetch_assoc($result);
                                         $full_name = $row2['full_name'];
                                         echo $full_name;

                                          ?>
                                    </h5>
                                    <h6 class="ml-4">
                                        <?php echo $name = $row2['username']; ?>
                                    </h6>
                                </div>
                                <!-- <div class="user-img ml-4 border">
                                    <img src="./assets/logo.png" class="img-fluid" style="max-height: 50px;" alt="" srcset="">
                                </div> -->
                                <div class="">
                                   <a href="./logout.php" class="mt-1 nav-link">
                                       <button class="btn bg-primary-color">Logout</button>
                                   </a>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>
                <hr>

                <div class="mt-3">
                    <div class="p-2">
                        <div class="d-flex">
                            <h3>Hi ! Let's <span class="text-success">  Send Email</span> </h3>
                            <h5 class="ml-auto">Form / <span class="text-success">Validation</span> </h5>
                        </div>
                        <div class="p-2 shadow mb-5 " style="background-color: white;">
                            <div class="form-valiadtion">
                                <h4 class="ml-5">Form Validation Data</h4>
                                <form action="" method="POST">
                                    <div class="pl-5 pr-5">
                                        <div class="pl-5 pr-5">
                                           
                                            <?php
                                                
                                                
                                                require 'db.php';
                                                $patient_id =$row['patient_id']; 
                                                
                                                $sql="SELECT * FROM `patients` where patient_id = $patient_id ";
                                                $result2 = mysqli_query($conn, $sql);
                                                $row2 = mysqli_fetch_assoc($result2);
                                                $email = $row2['email'];
                                                  


                                                
                                                ?>
                                            <div class="form-group">
                                                <p class="text-success">Kindly note the email will be sent using the email provided for patient</p>
                                                <?php
                                                if(isset($_POST['sendmail'])) {

                                                    require 'credential.php';
                                                
                                                    $mail = new PHPMailer;
                                                
                                                        //$mail->SMTPDebug = 4;                               // Enable verbose debug output
                                                
                                                    $mail->isSMTP();                                      // Set mailer to use SMTP
                                                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                                                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                                    $mail->Username = EMAIL;                 // SMTP username
                                                    $mail->Password = PASS;                           // SMTP password
                                                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                                    $mail->Port = 587;                                    // TCP port to connect to
                                                
                                                    $mail->setFrom(EMAIL, 'APPOINTMENT');
                                                    $mail->addAddress($_POST['email']);     // Add a recipient
                                                
                                                    // $mail->addReplyTo('cursorhub@gmail.com','Inforamtion');
                                                    // $mail -> addCC('cursorhub@gmail.com');
                                                    // $mail -> addBCC('cursorhub@gmail.com');
                                                
                                                
                                                    //attachments
                                                    
                                                    //name
                                                    $mail->isHTML(true);                                  // Set email format to HTML
                                                
                                                    $mail->Subject = 'APPOINTMENT REMINDER';
                                                    $mail->Body    = $_POST['message'];;
                                                    $mail->AltBody = $_POST['message'];
                                                
                                                    if(!$mail->send()) {
                                                        echo 'Message could not be sent.';
                                                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                                                    } else {
                                                        echo '<div class="alert alert-success" role="alert">
                                                        The Email was  have sent Successfully !
                                                        </div>';
                                                    }
                                                }


                                                ?>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="">TO:Patient Email Address</label>
                                                <input type="text" class="form-control"  value="<?= $email#$row2['email']?>" name="email" id="">
                                            </div>
                                            <label for="">Email</label>
                                            <style>
                                                textarea{
                                                    padding-left:0px;
                                                }
                                            </style>
                                            <textarea name="message" class="form-control" id="" cols="30" rows="3">
                                            Hello  <?= $row['patient_name']?> you have an upcoming scheduled at    

                                            </textarea>


                                            
                                            
                                           
                                            </div>
                                        <div class="ml-5 mt-4 d-flex justify-content-center">
                                            <button style="background-color: green; color: #fff; min-width: 260px;" name="sendmail" class="btn  pl-5 pr-5">Send Email</button>
                                        </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


            <script src="./js/jquery.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/bootstrap.js"></script>
    </body>

    </html>