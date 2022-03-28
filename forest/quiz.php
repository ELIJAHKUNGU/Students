<?php
include 'sidebar.php';





if (isset($_POST["save"])) {
    error_reporting(E_ALL);
ini_set('display_errors', 1);
    require 'db.php';
    extract($_POST);

        $sql = "INSERT INTO `quizs`(`quiz_id`, `skidders`, `tractors`, `tractors_no`, `chain_saw`, `trucks`, `trucks1`, `trucks_no`, `drying_kiln`, `drying_air`, `debarker`, `hand_saw`, `band_saw`, `amount1`) 
         VALUES (null,'$skidders','$tractors','$tractors_no','$chain_saw','$trucks','$trucks1','$trucks_no','$drying_kiln','$drying_air','$debarker','$hand_saw','$band_saw','$amount1')";
       
    //    INSERT INTO `quizs`(`quiz_id`, `skidders`, `tractors`, `tractors_no`, `chain_saw`, `trucks`, `trucks1`, `trucks_no`, `drying_kiln`, `drying_air`, `debarker`, `hand_saw`, `band_saw`, `amount1`) 
    //    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')
       $result =  mysqli_query($conn, $sql);
        if ($result){
            header("location:quiz.php?success=Your account has been  successfully created login");
            exit();

        }else{
            header("location:quiz.php?error=Yerroe");
        }
}



?>
                <style>
                    .col-sm-6 {
                        max-width: 500px;
                        margin-left: 15px;
                        padding: 20px;
                        padding-left: 40px;
                    }
                    
                    .row input[type='checkbox'],
                    .row input[type='number']{
                   
                        height: 30px;
                        width: 30px;
                        margin-left: 15px;
                    }
                    
                    .row input[type='number'] {
                        width: 60px;
                        padding: 5px;
                    }
                    .row input[type='radio'] {
                        height: 20px;
                        width: 20px;
                        margin-left: 15px;
                    }
                </style>
                <div class="col-sm-9">
                    <p>Kindly Answer the above</p>
                    <hr>
                   
                        <form action="" method="POST">
                            <div class="row mt-5">
                                <div class="col-sm-6 shadow">
                                    <div class="d-flex ">
                                        <li> <label for="">Skidders</label> </li>
                                        <input type="checkbox" value="1" class="" name="skidders" id="">
                                    </div>
                                    <div class="d-flex">
                                        <li> <label for="">Tractors</label> </li>
                                        <input type="checkbox" value="1" class="mt-2" name="tractors" id="">
                                    </div>
                                    <div class="form-hidden">

                                        <div class="d-flex">
                                            <li> <label for="">If yes how many</label> </li>
                                            <input type="number" name="tractors_no" class="">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <li> <label for="">Chain Saw</label> </li>
                                            <input type="checkbox" value="1" name="chain_saw" id="">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <li> <label for="">Trucks</label> </li>
                                        <input type="checkbox" value="1" name="trucks" id="">
                                    </div>
                                    <div class="pl-5">
                                        <div class="d-flex mt-3">
                                            <label for="">Hired</label>
                                            <input name="trucks1" value="1" type="radio">
                                        </div>
                                    <div class="form-group">
                                    <div class="d-flex mt-3">
                                            <label for="">Owned</label>
                                            <input name="trucks1" value="1" type="radio">
                                        </div>
                                        <div class="d-flex mt-3">
                                            <label for="">Number</label>
                                            <input name="trucks1" type="number" min="0">
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 shadow">
                                    <div class="form-group">
                                        <li> <label for="">Drying</label> </li>
                                        <div class="pl-5">
                                            <div class="d-flex mt-3">
                                                <input type="checkbox" value="1" name="drying_kiln" id="">
                                                <label for="" class="ml-3">Kiln</label>

                                            </div>
                                            <div class="d-flex mt-3">
                                                <input type="checkbox" value="1" name="drying_air" id="">
                                                <label for="" class="ml-3">Air drying</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <li> <label for="">Debarker</label> </li>
                                            <input type="checkbox" value="1" name="debarker" id="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <li> <label for="">Hand Saw</label> </li>
                                            <input name="hand_saw" value="1" type="checkbox">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <li> <label for="">Band Saw</label> </li>
                                            <input name="band_saw" value="1" type="checkbox">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <li> <label for="">Amount handled in the past</label> </li>
                                        <div class="pl-4">
                                            <input type="radio" value="1" name="amount1" id="">
                                            <label for="">Above 1M</label>
                                        </div>
                                        <div class="pl-4">
                                            <input type="radio" value="1" name="amount1" id="">
                                            <label for="">Above 10M</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="save"  class="form-control bg-success text-white">Submit</button>
                                    </div>

                                </div>

                            </div>
                        </form>
                   

                </div>
            </div>
        </div>


        <script src="./js/jquery.min.js "></script>
        <script src="./js/bootstrap.min.js "></script>
        <script src="./js/isotope.js "></script>
        <script src="./owl-carousel/js/owl.carousel.min.js"></script>
        <script src="./js/index.js"></script>

    </body>

    </html>