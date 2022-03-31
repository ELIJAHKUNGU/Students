<?php
    include 'sidebar.php';
?>
                <div class=" shadow mt-5 pt-4 pb-4">
                    <div class="text-center">
                        <span class="bg-success text-white">
                        <span class="bg-success text-white">4</span>
                        </span>
                    </div>
                    <div class="pl-5">
                            <?php
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                                if (isset($_POST["save"])) {
                                    $conn = mysqli_connect("localhost","root","","bursary");
                                    extract($_POST);
                                    $user_id = '1';
                                    $sql = "INSERT INTO `bursaries`( `b_type`, `user_id`)
                                     VALUES ('$b_type','$user_id')";
                                    if ($conn->query($sql) == TRUE) {
                                        echo ' <script>window.location.replace("myapplications.php");</script>';

                                
                                        // header("location:myapplications.php?success=Your application have been successfully processed ");
                                
                                    } else {
                                        header("location:busarytype.php?error=Your application wasn't processed ");
                                    }
                                
                                    $conn->close();
                                }
                                
                            ?>
                        <form class="form" method="post" action="" enctype="multipart/form-data">
                            


                            <select name="b_type" id="" class="form-control mt-5">
                                <option value="">Select Bursary</option>
                                <option value="CDF">CDF</option>
                                <option value="CDF1">CDF1</option>
                                <option value="CDF2">CDF2</option>
                                <option value="CDF3">CDF3</option>

                            </select>
                            <button name="save" class="btn mt-3 btn-dark text-white">Submit</button>
                        </form>

                    </div>





                </div>
            <?php
            include 'footer.php';
            ?>