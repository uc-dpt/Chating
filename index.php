 <?php

function dispalyTable($i){
	echo "Table of ". $i . " :";
	for($j = 1; $j <= 10; $j++){
		echo $j . " * " . $i . " = ". $j * $i ."<br />";
	}
}
dispalyTable(5);

echo "hello this is added in submodule branch1";
 ?>
