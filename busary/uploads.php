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
                  $sqli = "INSERT INTO `tblfiles` (`FileName`, `Location`) VALUES ('{$filename}','{$location}')";
                  $result = mysqli_query($con,$sqli);
                  if ($result) {
                  echo "File has been uploaded";
              };
          }
    ?>