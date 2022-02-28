<?php 
include 'quizclass.php';
$db = new Quiz();
$score = 0;
foreach($_POST as $k=>$v)
{
	$answer = $db->answer($k);
	if($answer[0][2] == $v) { // option is correct
		$score++;
	}
}
$score = $score	/ 4 *100;
if($score < 50)
{
	echo '<h2>You need to score at least 50% to pass the exam.</h2>';
}
else {
	echo '<h2>You have passed the exam and scored '.$score.'%.</h2>';
}
?>