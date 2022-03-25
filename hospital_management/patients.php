<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/all.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/styles.css" />
    <link rel="stylesheet" href="./DataTables/datatables.min.css">


    <title>Hospital System Dashboard</title>
</head>

<body>
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
    include 'sidebarpanel.php';
    ?>
        <div class="col-sm-9">
            <div class="d-flex">
                <div class="dashboard-text mt-3">
                    <h2>Patients </h2>
                </div>
                <div class="ml-auto">
                    <div class="d-flex">
                        <i class="fas ml-5 mt-4 fa-bars"></i>
                        <i class="fas ml-5 mt-4 fa-bars"></i>
                        <i class="fas ml-5 mt-4 fa-bars"></i>
                        <div class="dashboard-admin ml-5 mt-2">
                            <div class="d-flex">
                                <div class="d-block">
                                    <h5>JOHN DOE</h5>
                                    <h6 class="ml-4">Admin</h6>
                                </div>
                                <div class="user-img ml-4 border">
                                    <img src="./assets/logo.png" class="img-fluid" style="max-height: 50px;" alt="" srcset="">
                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>
            <hr>
            <div class="d-flex mb-5">
                <div class="d-block ml-2">
                    <a href="./patientsdetails.php"><button style="background-color: #5EC961; color: #fff; border-radius: 20px;" class="btn pt-2 pb-2 pl-4 pr-4">Add  Patients</button>
</a>
                </div>

            </div>
            <?php
             if (isset($_GET['error'])) { ?>
                <p class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></p>
                <?php } ?>
        
                <?php if (isset($_GET['success'])) { ?>
                <p class="alert alert-primary" role="alert"><?php echo $_GET['success']; ?></p>
                <?php } ?>

            <table id="patient" class="display  mt-2" style="border: 2px solid gray;">
                <thead>
                    <tr>

                        <th>Patient ID</th>
                        <th>Date Check in</th>
                        <th>Patient Name</th>
                        <th>Patient Age</th>
                        <th>Other Diseases</th>
                        <th>Phone Number</th>
                        <th>Blood Group</th>
                        <th>Book Appointment</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                      require 'db.php';
                      $qry = "SELECT * FROM `patients` order by patient_id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                      
// <!-- patient_id`, `patient_name`, `patient_dr`, `patient_age`, `phoneNumber`, 
// `email`, `other_diseases`, `hiv_level`, `blood_group`, `getDate`, `status -->
              extract($row);
              echo "<tr>
                        <td>#p-00$patient_id</td>
                        <td>$getDate</td>
                        <td>$patient_name</td>
                        <td>$patient_age</td>
                        <td>
                        $other_diseases
                        </td>
                        <td>
                        $phoneNumber
                        </td>
                        <td>$blood_group</td>
                        
                        <td>  <a href='createappointment.php?id=$patient_id'><button>Appointment</button></a>  </td>
                        <td>
                        <a href='delete.php?id=$patient_id'><I class='fas fa-trash'></I></a>
                        <a href='editp.php?id=$patient_id'><I class='fas ml-3 fa-edit'></I></a></td>
                    </tr>";
                      
                    }
                    ?>
                   
                    
                    <!-- <tr>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Alex Samantha</td>
                        <td>Dr Samatham</td>
                        <td>
                            Allergies & Asthma
                        </td>
                        <td>
                            <button class="btn">Send Email</button>
                        </td>
                        <td>A +</td>
                        <td><button class="btn">Appointment</button></td>
                        <td>
                            <I class="fas fa-trash"></I>
                            <I class="fas ml-3 fa-edit"></I>


                        </td>
                    </tr>
                    <tr>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Alex Samantha</td>
                        <td>Dr Samatham</td>
                        <td>
                            Allergies & Asthma
                        </td>
                        <td>
                            <button class="btn">Send Email</button>
                        </td>
                        <td>A +</td>
                        <td><button class="btn">Appointment</button></td>
                        <td>
                            <I class="fas fa-trash"></I>
                            <I class="fas ml-3 fa-edit"></I>


                        </td>
                    </tr>
                    <tr>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Alex Samantha</td>
                        <td>Dr Samatham</td>
                        <td>
                            Allergies & Asthma
                        </td>
                        <td>
                            <button class="btn">Send Email</button>
                        </td>
                        <td>A +</td>
                        <td><button class="btn">Appointment</button></td>
                        <td>
                            <I class="fas fa-trash"></I>
                            <I class="fas ml-3 fa-edit"></I>


                        </td>
                    </tr>
                    <tr>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Alex Samantha</td>
                        <td>Dr Samatham</td>
                        <td>
                            Allergies & Asthma
                        </td>
                        <td>
                            <button class="btn">Send Email</button>
                        </td>
                        <td>A +</td>
                        <td><button class="btn">Appointment</button></td>
                        <td>
                            <I class="fas fa-trash"></I>
                            <I class="fas ml-3 fa-edit"></I>


                        </td>
                    </tr>
                    <tr>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Alex Samantha</td>
                        <td>Dr Samatham</td>
                        <td>
                            Allergies & Asthma
                        </td>
                        <td>
                            <button class="btn">Send Email</button>
                        </td>
                        <td>A +</td>
                        <td><button class="btn">Appointment</button></td>
                        <td>
                            <I class="fas fa-trash"></I>
                            <I class="fas ml-3 fa-edit"></I>


                        </td>
                    </tr> -->









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