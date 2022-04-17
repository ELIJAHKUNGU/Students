<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



   ?>

   
            <div class="col-sm-9">
           
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
                                                    $mail->AddAttachment($_FILES['file']['tmp_name']); 
                                                
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
                                                <input type="text" class="form-control"  " name="email" id="">
                                                <p><label for="file">File</label> <input type="file" name="file" id="file"></p>

                                            </div>
                                            <label for="">Email</label>
                                            <style>
                                                textarea{
                                                    padding-left:0px;
                                                }
                                            </style>
                                            <textarea name="message" class="form-control" id="" cols="30" rows="3">

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