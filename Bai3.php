<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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