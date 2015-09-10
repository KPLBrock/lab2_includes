<?php

function drawVowel($vowel, $color) {

	$vowel = strtoupper($vowel);

	echo "<table border = 1>";

	for ($i = 0; $i < 8; $i++) {//Controls rows

		echo "<tr>";

		for ($j = 0; $j < 8; $j++) {//Controls columns

			switch($vowel) {

				case "A" :
					if ($i < 2 || $j < 2 || $j > 5 || $i == 4) {
						echo "<td style = 'background-color:$color'>";
						echo "A" . "<br />";
					} else {
						echo "<td><br />";
					}
					break;

				case "E" :
					if ($i < 2 || $j < 2 || ($i != 2 && $i != 5)) {
						echo "<td style = 'background-color:$color'>";
						echo "E" . "<br />";
					} else {
						echo "<td><br />";
					}
					break;

				case "I" :
					if ($i < 1 || $i > 6 || $j == 3 || $j == 4) {
						echo "<td style = 'background-color:$color'>";
						echo "I" . "<br />";
					} else {
						echo "<td><br />";
					}
					break;
					
				case "O" :
					if ($i < 2 || $i > 5 || $j < 2 || $j > 5) {
						echo "<td style = 'background-color:$color'>";
						echo "O" . "<br />";
					} else {
						echo "<td><br />";
					}
					break;
					
				case "U" :
					if ($i > 5 || $j < 2 || $j > 5) {
						echo "<td style = 'background-color:$color'>";
						echo "U" . "<br />";
					} else {
						echo "<td><br />";
					}
					break;
			}  //endSwitch
			echo "</td>";
		} //endFor columns

		echo "</tr>";
	} //endFor rows
	echo "</table>";

}
?>