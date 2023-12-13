<?php 
extract($_POST);
include("../class/users.php");
$quiz=new users;
$ques=htmlentities($question);
$choice_1=htmlentities($cho_1);
$choice_2=htmlentities($cho_2);
$choice_3=htmlentities($cho_3);
$choice_4=htmlentities($cho_4);


$array=[$choice_1,$choice_2,$choice_3,$choice_4];
$matchedanswer=array_search($answer,$array);
$query="insert into data values('','$ques','$choice_1','$choice_2','$choice_3','$choice_4','$answer')"; //$cat value comes from select name attribute

if ($quiz->add_quize($query)) 
{
	header("location:index.php?run=success");
}

 ?>