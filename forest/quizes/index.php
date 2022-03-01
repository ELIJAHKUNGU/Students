<html>
<head>
<title>PHP Multiple Choice Questions and Answers</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php
	include 'quizclass.php';
	$db = new Quiz();
	$quesions = $db->get_questions();

?>
<div class="container">
<h1>Multiple Choice Questions Answers</h1>
<p>Please fill the details and answers the all questions-</p>
<div class="form-group">
<form action="score.php" method="post">
<?php
foreach($quesions as $ques) {
$options = $db->quiz_options($ques[0]);
}
?>
<h4><?php echo $ques[1]; ?></h4>
<div class="input-group-text" style="text-align: left; font-size: 18px;"> 
<ol>
<?php
foreach($options as $option) { 
 echo "<li><input type='radio' name='".$option[2]."' value='".$option[1]."' required/> ".$option[3]."</li>";
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