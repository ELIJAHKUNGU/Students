<?php
    include 'sidebar.php';
?>
                <div class=" shadow mt-5 pt-4 pb-4">
                    <div class="text-center">
                        <span class="bg-success text-white">
                        <span class="bg-success text-white">2</span>
                        </span>
                    </div>
                    <div class="pl-5">
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
                                        $user_id = '1';
                                        $sqli = "INSERT INTO `Fees_structure` (`file_id`,`FileName`, `Location` , `user_id`) VALUES (null,'{$filename}','{$location}','{$user_id}' )";
                                        $result = mysqli_query($con,$sqli);
                                        if ($result) {
                                           echo ' <script>window.location.replace("feestatement.php");</script>';
                                            #header("location:feestructure.php?success=Your ID Copy have been uploaded ");
                                        
                                    };
                                }
                            ?>
                        <form class="form" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group ml-4 mt-3">
                                <label class="text-center" for="">Fees Structure:</label>
                                <input type="text" name="filename" class="form-control" placeholder="Fees structure JKUAT">
                            </div>


                            <div class="form-group ml-4 mt-3">
                                <label class="text-center" for="">Upload ID</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <button name="save" class="btn mt-3 btn-dark text-white">Submit</button>
                        </form>

                    </div>





                </div>
            <?php
            include 'footer.php';
            ?>