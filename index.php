<!DOCTYPE html>
<html lang="en">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo("Cau 1: ");
		$random = rand(1, 100);
		echo(" Con so ramdom : {$random} <br>");
		for ($i = 0; $i <= $random; $i++) {
			if ($i %2== 0) {
				echo("$i   ");
			}
		}
		echo("<br>");
	?>
<table>
		<tr>
			<?php 
				for($i = 1; $i <= 10; $i++){
					echo "<th>Chương $i</th>";
				}
			?>
		</tr>
		<tr>
			<?php
				for($i =1; $i<=10;$i++){
                    for($j = 1; $j <= 10; $j++){
                        echo "<td>$i x $j = " . ($i * $j) . "</td>";
                    }
                    echo "</tr><tr>";
                } 
			 ?>
		</tr>
	</table>

	<?php
		echo("Cau 3 - Con so ramdom la : ");
		$n = 25; //rand(-100, 100);
		echo("$n");
		if($n>0){
			echo("<br>N la so duong <br>");
			echo("Uoc cua N : ");
			for($i = 1; $i<=$n; $i++){
				if($n%$i == 0){
					echo("$i  ");
				}
			}
			echo("<br>Nó có phải số nguyên tố không? : ");
			for($i = 2; $i<$n; $i++){
				if($n%$i == 0){
					echo("Không");
					break;
				}	
			}
			echo("<br>Tính tổng số nguyên tố? : ");
			$tong = 0;
			for($i = 2; $i<$n; $i++){
				$laSNT = true;
				for($j = 2; $j<$i; $j++){
					if($i%$j == 0){
						$laSNT = false;
						break;
					}
				}
				if ($laSNT) {
        			$tong += $i;
    			}
			}
			echo "$tong";
			echo("<br>N có phải số chính phương không? : ");
			if(sqrt($n)==(int)sqrt($n))
                echo " $n là số chính phương";

		}
	?>
</body>
</html>