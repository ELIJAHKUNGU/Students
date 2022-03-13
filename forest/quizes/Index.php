<html>
<head>
<title>PHP Multiple Choice quiz_ques and solutions</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php
	include 'examclass.php';
	$db = new Exam();
	$quesions = $db->get_quiz_ques();

?>
<div class="container">
<h1>Multiple Choice quiz_ques solutions</h1>
<p>Please fill the details and solutions the all quiz_ques-</p>
<div class="form-group">
<form action="mark.php" method="post">
<?php
foreach($quesions as $ques) {
$choices = $db->exam_choices($ques[0]);
}
?>
<h4><?php echo $ques[1]; ?></h4>
<div class="input-group-text" style="text-align: left; font-size: 18px;"> 
<ol>
<?php
foreach($choices as $choice) { 
 echo "<li><input type='radio' name='".$choice[2]."' value='".$choice[1]."' required/> ".$choice[3]."</li>";
}
?>
</ol>
</div>

</div>
<div class="form-group">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</div>
</form>
</div>
</body>
</html>