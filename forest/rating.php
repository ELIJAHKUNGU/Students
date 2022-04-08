<?php
session_start();
require_once 'config.php';
include 'sidebar.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);







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
                    h1{
                        padding: 100px;
                        font-size: 15rem;
                    }
                </style>
                <div class="col-sm-9">
                   <div class="d-flex mt-5 justify-content-center">
                   <a href="./quiz.php">
                    <button class="btn btn-outline-primary">QUIZS</button>
                    </a>
                   </div>

                <div class="d-flex justify-content-center">
                    <div class="mt-5">
                        <div class="pt-5">
                            <div class="shadow">
                            <?php

                            
                                
                                
                                $user_id =  $user_details ['user_id'];
                                $total = 0;

                                 require 'db.php';
                                $sql="SELECT * FROM `quiz` WHERE   user_id= $user_id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);

                                if ($row > 0){
                                    extract($row);
                                    $skidders = $row['skidders'];
                                    $tractors = $row['tractors'];
                                   # $tractors_no = $row['tractors_no'];
                                    $chain_saw = $row['chain_saw'];
                                    $trucks = $row['trucks'];
                                    $trucks1 = $row['trucks1'];
                                    $trucks2 = $row['trucks2'];
                                    $drying_kiln = $row['drying_kiln'];
                                    $drying_air = $row['drying_air'];
                                    $debarker = $row['debarker'];
                                    $hand_saw = $row['hand_saw'];
                                    $band_saw = $row['band_saw'];
                                    $amount1 = $row['amount1'];
    
                                    $total = $skidders +$tractors + $chain_saw +$trucks + $trucks1 + $trucks2 + $drying_kiln + $drying_air + $debarker + $hand_saw + $band_saw + $amount1;

                                }else{
                                    echo 'KINDLY WORK DO THE QUIZS';

                                }
                               
                                

                                // `quiz`(`quiz_id`, `skidders`, `tractors`, `tractors_no`, `chain_saw`, `trucks`, `trucks1`, `trucks2`, 
                                // `drying_kiln`, `drying_air`, `debarker`, `hand_saw`, `band_saw`, `amount1

                              


                            
                          
                                ?>
                                <h1>
                                    <?php 
                                    echo $total /2 . "%" ?>
                                </h1>
                            </div>
                        </div>
                    </div>
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