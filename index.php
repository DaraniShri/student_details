<?php
	$my_array=array("menu","cousin","elder","venue","baby","honey","candy","dog");
	$array_count=count($my_array);
	for($i = 0; $i < $array_count; $i++)
	{
		echo $my_array[$i];
		echo "<br>";
	}

	$student[0]="rohita";
	$student[1]="renu";
	$student[2]="mahi";
	$student[3]="veera";
	$student[4]="soora";
	$array_length=count($student);
	for($x = 0; $x < $array_length; $x++)
	{
		echo $student[$x];
		echo "<br>";
	}

	print_r(array_merge($my_array,$student));
	echo "<br>";

	$a=array("a"=>"red","b"=>"green");
	array_unshift($a,"blue");
	print_r($a);
	echo "<br>";
	if (!empty($a)) {
  		echo "array is empty.<br>";
	}
	echo "<br>";

	$b=array("red","green");
	array_push($b,"blue","YELLOW","orange");
	print_r($b);

?>
