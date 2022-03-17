<!-- <!--  
<!-- INSERT INTO `quizs`(`quiz_id`, `skidders`, `tractors`, `tractors_no`, `chain_saw`, `trucks`, `trucks1`, `trucks_no`, `drying_kiln`, `drying_air`, `debarker`, `hand_saw`, `band_saw`, `amount1`) VALUES ('1','1','1','1','1','1','1','1','1','1','1','1','1','1') -->

<?php 
// if (isset($_POST["save"])) {
//     require 'db.php';
//     extract($_POST);

//     $sql = "INSERT INTO `quizs`( `quiz_id`,`skidders`, `tractors`, `tractors_no`, `chain_saw`, `trucks`, `trucks1`, `trucks_no`, `drying_kiln`, `drying_air`, `debarker`, `hand_saw`, `band_saw`, `amount1`)
//     VALUES (null,'$skidders','$tractors','$tractors_no','$chain_saw','$trucks','$trucks1','$trucks_no','$drying_kiln','$drying_air','$debarker','$hand_saw','$band_saw','$amount1')";
//         // $result =  mysqli_query($conn, $sql);
//         if( mysqli_query($conn,$sql) === TRUE){
//             echo '<script>alert("Records added success")</script>';
//          header('location:quiz.php');  
     
     
//         }else{
//             mysqli_error($conn);
//         }
       

  
   


// }


?>



<!-- <form action="" method="post">
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
                <button type="submit" name="save" value="Submit" class="form-control bg-success text-white">Submit</button>
            </div>

        </div>

    </div>
</form> --> 

<html>
<head>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
	$(document).ready(function(){
	
	$('.mutlicheckboxSelect input[type="checkbox"]').on('click', function() {
		 
		var title = $(this).closest('.mutlicheckboxSelect').find('input[type="checkbox"]').val(),
    	title = $(this).val() + ",";
		//alert(title);
		  if ($(this).is(':checked')) {
			 var html = '<span title="' + title + '">' + title + '</span>';
    		$('.result').append(html);
		  } 
		else
			{
				   $('span[title="' + title + '"]').remove();
     
			}
	 
			});
		
		//insert data 
		$('body').on('click','#btn_submit',function(){
			
			 var data = $(".result").html();
			  // alert(data);
			   $.ajax({
                        url: 'process.php',
                        type: 'post',
				         dataType: 'html',
                        data: {
                            "data": data,
                            
                        },
                        success: function(response) {                           
                         $("#result").html(response);
                        }
               });
	 
			 
			
		});
			
	});
	
</script>	
</head>
<body> -->


 
        <div class="mutlicheckboxSelect">
           
                    <input type="checkbox" value="Apple" />Apple 
              
                    <input type="checkbox" value="Blackberry" />Blackberry 
               
                    <input type="checkbox" value="HTC" />HTC 
               
                    <input type="checkbox" value="Sony Ericson" />Sony Ericson 
               
                    <input type="checkbox" value="Motorola" />Motorola 
                
                    <input type="checkbox" value="Nokia" />Nokia 
           <br>
			<button type="button" name="btn_submit" id="btn_submit">Submit Data</button>
			<br>
				 <div class="result"></div>  
        </div>
    </body>
</html>