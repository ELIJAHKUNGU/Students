<?php

class Exam {
// Database credentials
private $host     = 'localhost';
private $username = 'root';
private $password = '';
private $database = 'forest';
public  $db;

public function __construct(){
if(!isset($this->db)){
	// Connect to the database    
	try {
	$this->db = new mysqli($this->host, $this->username, $this->password, $this->database);
	}catch (Exception $e){
	$error = $e->getMessage();
	echo $error;
	}
}
}
public function get_quiz_ques(){
 $select = "SELECT * FROM `quiz_ques` where is_active = '1' ";
 $result = mysqli_query($this->db ,$select);
 return mysqli_fetch_all($result);
}
public function exam_choices($exam_qid) {
 $select = "SELECT * FROM `exam_choices` where exam_qid = '$exam_qid' AND is_active = '1'  ";
 $result = mysqli_query($this->db ,$select);
 return mysqli_fetch_all($result);
} 
public function solution($exam_qid) {
 $select = "SELECT * FROM `exam_solution` where exam_qid = '$exam_qid' ";
 $result = mysqli_query($this->db ,$select);
 return mysqli_fetch_all($result);
} 
}
?>