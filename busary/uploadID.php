<?php
session_start();
include 'sidebar.php';
include 'config.php';

$user_id =  $user_details ['user_id'];


?>
                <div class=" shadow mt-5 pt-4 pb-4">
                    <div class="text-center">
                        <span class="bg-success text-white">
                        <span class="bg-success text-white">1</span>
                        </span>
                    </div>
                    <div class="p-5">
                            <?php
                                $con = mysqli_connect("localhost","root","","bursary");
                                if (mysqli_connect_errno()) {
                                    echo "Unable to connect to MySQL! ". mysqli_connect_error();
                                }
                                if (isset($_POST['save'])) {
                                    $target_dir = "uploads/";
                                    $target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
                                    $uploadOk = 1;
                                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                                    if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "gif" ) {
                                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                                            $files = date("dmYhis") . basename($_FILES["file"]["name"]);
                                            }else{
                                                echo "Error Uploading File";
                                                exit;
                                            }
                                            }else{
                                                echo "File Not Supported";
                                                exit;
                                        }
                                        $filename = $_POST['filename'];
                                        $location = "uploads/" . $files;
                                       
                                                                                

                                       
                                   
                                       
                
                                        $sqli = "INSERT INTO `tblfiles` (`file_id`,`FileName`, `Location` , `user_id`) VALUES (null,'{$filename}','{$location}','{$user_id}' )";
                                        $result = mysqli_query($con,$sqli);
                                        if ($result) {
                                           echo ' <script>window.location.replace("feestructure.php");</script>';
                                            #header("location:feestructure.php?success=Your ID Copy have been uploaded ");
                                        }
                                    };
                                
                            ?>
                        <form class="form" method="post" action="" enctype="multipart/form-data">
                        <?php
                            // session_start();


                            // if(!isset($_SESSION['info']) ){
                            //     header("location:login.php");
                            // }else{
                            //     $info = $_SESSION["info"];
                            
                            // }
                            // $user_id =  $info ['user_data_id'];
                            // echo $user_id;
                            ?>
                            <div class="form-group ml-4 mt-3">
                               

                                
                                <label class="text-center" for="">School ID</label>
                                <input type="text" name="filename" class="form-control" required placeholder="patriciaID">
                            </div>


                            <div class="form-group ml-4 mt-3">
                                <label class="text-center" for="">Upload ID</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <button name="save" class="btn mt-3 btn-dark text-white">Submit</button>
                        </form>

                    </div>





                </div>
            <?php
            include 'footer.php';
            ?>