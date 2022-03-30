<?php
require 'security.php';
if (isset($_POST["save"])){
    require 'DB.php';
    extract($_POST);
    //echo "$title $price $quantity $genre";
    $target_dir = "uploads/";
    $unique =rand(1000000,20000000);
    $unique_2 =rand(5000000,10000000);
    $joined = $unique."_".$unique_2;
    $ext = pathinfo(basename($_FILES["cover"]["name"]),4);

    /*if ($ext !=".png" or $ext !=".jpg" or $ext !=".jpeg"){
        echo "Invalid File Type";
        die();
    }*/

    //echo $ext;
    //die();

    $target_file = $target_dir .$joined. $joined.".".$ext;
    if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
        //save to db
        $sql ="INSERT INTO `movies`(`movie_id`, `title`, `genre`, `quantity`, `cover`, `user_id`)
                            VALUES (null, '$title', '$genre', '$quantity',  '$target_file',1)";
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
    }else {
        //error msg
        $message= "Failed To Upload Movie";
    }
//sudo chmod 777 -R uploads/
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Movie</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
include 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-warning"><h2 class="text-white text-center font-weight-bold" style="font-size: 25px">Add A New Movie</h2></div>

                <div class="card-body">


                            <?php
                            if (isset($message))
                                echo "<p class='text-danger'>$message</p>";
                            ?>

                    <form action="save.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Genre</label>
                            <select name="genre" class="form-control">
                                <option value="Horror">Horror</option>
                                <option value="Documentary">Documentary</option>
                                <option value="Action">Action</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Animation">Animation</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Sci-Fi">Sci-fi</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="title">Quantity</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Price</label>
                            <input type="number" step="0.50" class="form-control" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Cover Photo</label>
                            <input type="file" accept="image/jpeg,image/x-png,image/jpg" class="form-control" name="cover" required>
                        </div>

                        <button name="save" class="btn btn-info btn-block">Save Movie</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>