
    <style>
        body {
            background-color: #E5E5E5;
        }
        
        .btn {
            background-color: green;
            color: #fff;
            border-radius: 15px;
        }
        
        .btn:hover {
            background-color: rgb(222, 223, 222);
            color: rgb(17, 153, 51);
        }
    </style>
    <?php
    include 'sidebar.php';
    ?>
  
        <div class="col-sm-9">
           
            <hr>
            <

            <table id="patient" class="display  mt-2" style="border: 2px solid gray;">
                <thead>
                    <tr>
                        <th>invoice ID</th>
                        

                        
                        <th>Date Check in</th>
                        <th>Fuel</th>
                        <th>Pick point</th>
                        <th>Destination</th>
                        <th>Amount</th>

                        
                        <th>View invoice</th>

                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>#p-0012</td>
                        
                        <td>26/01/2020</td>
                        <td>Timber</td>
                        <td>Karura Forest</td>
                        <td>Remaken Stores</td>
                        <td>70,000</td>


                        <td><button class="btn">View</button></td>
                        <td>
                          <button>Edit</button>
                          <button>Delete</button>


                        </td>
                    </tr>
                   









                </tbody>
            </table>


        </div>


    </div>



    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#patient').DataTable();
        });
    </script>
</body>

</html>