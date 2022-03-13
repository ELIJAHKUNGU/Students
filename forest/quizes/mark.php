<?php 
include 'examclass.php';
$db = new Exam();
$mark = 0;
foreach($_POST as $k=>$v)
{
	$solution = $db->solution($k);
	if($solution[0][2] == $v) { // choice is correct
		$mark++;
	}
}
$mark = $mark	/ 4 *100;
if($mark < 50)
{
	echo '<h2>Good Luck, You required to mark at least 50% to pass the exam.</h2>';
}
else {
	echo '<h2>You have passed the exam and markd '.$mark.'%.</h2>';
}
?>