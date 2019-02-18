<?php

	$test="I'm a variable";

	$test2="me too";

	$number= 75;

	$a=number;

	echo $$a;


	//this is a comment

	$myArray=array("pizza","chocolate","coffee");

	print_r($myArray);
	
	echo "<br/><br/>";
	
	echo $myArray[1];
	
	$anotherArray[0]="hello";
	$anotherArray[1]="hi";
	
	echo "<br/><br/>";
	
	print_r($anotherArray);
	
	echo "<br/><br/>";
	
	$thirdArray=array(
		
		"france" => "french",
		"usa" => "english"
		
	);
	
	print_r ($thirdArray);
	
	$anotherArray[]="last one";
	
	echo "<br/><br/>";
	
	print_r($anotherArray);
	
	echo "<br/><br/>";
	
	//unset($myArray[1]);

	print_r($myArray);
	
	echo $myArray[1];
	
	//$count=0;
	echo "<br/>";
	
	for ($i=1; $i<=10; $i++){
		echo $i."<br/>";		
	}
	
	echo "<br/><br/>";
	
	$array=array("p","a","b","d");
	foreach($array as $key => $value){
		echo "Key: $key Value: $value <br/>";
	}
	
	echo "<br/><br/>";
	$i=0;
	while($myArray[$i]){
		
		echo $i++;
	}

?>