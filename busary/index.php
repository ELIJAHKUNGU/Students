<?php
include 'sidebar.php';

?>
                <div class="row">
                    <div class="col-sm-4 Home shadow">
                        <div class="p-5">
                        <a class="nav-link active" aria-current="page" href="index.php">

                            <div class="d-flex justify-content-center ">

                                <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                <h4 class="ml-4 mt-3 pl-5">Home</h4>

                            </div>
                            </a>
                            <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#exampleModal">
                                View Available E-BURSARY 
                              </button>
                        
                        </div>

                    </div>
                    <div class="col-sm-4 Application shadow">
                        <div class="p-5">
                        <a class="nav-link active" aria-current="page" href="uploadID.php">
                            <div class="d-flex justify-content-center ">
                                <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                <h4 class="ml-4 mt-3 pl-5">Make Application</h4>
                            </div>
                        </div>
                        </a>

                    </div>
                    <div class="col-sm-4 MY shadow">
                        <div class="p-5">
                            
                        <a class="nav-link active" aria-current="page" href="myapplications.php">
                            <div class="d-flex justify-content-center ">
                                <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                <h4 class="ml-4 mt-3 pl-5">MY Applications</h4>
                            </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-sm-4 Profile shadow">
                        <div class="p-5">
                        <a class="nav-link active" aria-current="page" href="apply.php">
                            <div class="d-flex justify-content-center ">
                                <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                <h4 class="ml-4 mt-3 pl-5">Profile </h4>
                            </div>
                        </div>
                        </a>

                    </div>
                    <div class="col-sm-4 Reports shadow">
                        <div class="p-5">
                        <a class="nav-link active" aria-current="page" href="reports.php">
                            <div class="d-flex justify-content-center ">
                                <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                <h4 class="ml-4 mt-3 pl-5">Reports</h4>
                            </div>
                        </div>
                        </a>

                    </div>

                </div>
            </div>


            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Available E-BURSARY</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li>CDF</li>
                                <li>CDF</li>
                                <li>CDF</li>
                                <li>CDF</li>
                                <li>CDF</li>
                            </ol>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <?php
include 'footer.php';

?>