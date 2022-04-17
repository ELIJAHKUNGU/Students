
                <?php
                    include 'sidebar.php';
                   

                ?>
                <div class=" shadow">
                    <div class="pl-5">
                        <div class="p-5">
                            <div class="d-flex justify-content-between">
                                <div class="ml-3">
                                    <h4>Form Data</h4>
                                </div>
                                <!-- <div class="">
                                    <button class="btn btn-outline-primary">Edit</button>
                                </div> -->
                            </div>
                        </div>
                        <form action="userdetails.php" method="POST" class="p-5">
                            <div class="form-group mt-3">
                                <label for="">Student Name</label>
                                <input type="text" class="form-control" name="s_n" placeholder="Patricia Wanjiru">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Name Of Institution</label>
                                <input type="text" class="form-control" name="i_n" placeholder="Jomo Kenyatta University of Agriculture and Technology">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">School Address</label>
                                <input type="text" class="form-control"name="s_a" placeholder=" P.O. Box 62 000 – 00200 NAIROBI, KENYA">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Student Registration Number</label>
                                <input type="text" class="form-control" name="reg" placeholder="Jomo Kenyatta University of Agriculture and Technology">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Gender</label>
                                <select class="form-control" name="sex" id="">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Male</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Course</label>
                                <input type="text" class="form-control" name="course" placeholder="BACHELOR OF BUSINESS INFORMATION TECHNOLOGY">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Level of Study</label>
                                <select class="form-control" name="l_o_s" id="">
                                <option value="">Select Level of Study</option>
                                <option value="High School">High School</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Postgraduate">Postgraduate </option>
                            </select>
                            </div>
                            <div class="d-flex">
                                <div class="form-group  mt-3">
                                    <label class="text-center" name="country" for="">County</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group ml-4 mt-3">
                                    <label class="text-center" name="s_county" for="">Sub County</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group ml-4 mt-3">
                                    <label class="text-center" name="ward" for="">Ward</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group ml-4 mt-3">
                                    <label class="text-center" name="village" for="">Village</label>
                                    <input type="text" class="form-control">
                                </div>

                            </div>
                            <button name="submit" class="btn mt-3 btn-dark text-white">Submit</button>




                        </form>
                    </div>
                </div>

           <?php 
           include 'footer.php';


?>