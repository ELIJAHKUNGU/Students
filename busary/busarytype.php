<?php
    include 'sidebar.php';
?>
                <div class=" shadow mt-5 pt-4 pb-4">
                    <div class="text-center">
                        <span class="bg-success text-white">
                        <span class="bg-success text-white">4</span>
                        </span>
                    </div>
                    <div class="p-5">
                           
                        <form class="form" method="post" action="busartsubmit.php" enctype="multipart/form-data">
                            


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