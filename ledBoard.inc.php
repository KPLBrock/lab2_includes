<?php


function drawVowel($vowel, $color) {

	$vowel = strtoupper($vowel);

	echo "<table border = 1>";

	for ($i = 0; $i < 8; $i++) {//Controls rows

		echo "<tr>";

		for ($j = 0; $j < 8; $j++) {//Controls columns
            $colorToDisplay = "white";
		    $vowelToDisplay = "";
			switch($vowel) {

				case "A" :
					if ($i < 2 || $j < 2 || $j > 5 || $i == 4) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
					break;

				case "E" :
					if ($i < 2 || $j < 2 || ($i != 2 && $i != 5)) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
					break;

				case "I" :
					if ($i < 1 || $i > 6 || $j == 3 || $j == 4) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
					break;

				case "O" :
					if ($i < 2 || $i > 5 || $j < 2 || $j > 5) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
					break;

				case "U" :
					if ($i > 5 || $j < 2 || $j > 5) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
					break;
<<<<<<< HEAD


=======
<<<<<<< HEAD
					
				case "S" :
					if ($i < 2 || $i > 5 || ($j < 2 && $i < 5) || ($j > 5 && $i > 3) || ($i > 2 && $i < 5)) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
=======


>>>>>>> 08c67246d0ced9ab5fbed255bd5643c1e417d941
>>>>>>> 81167932690d4e368729268d0553b75deee58351
					break;

			}  //endSwitch

			echo "<td style = 'background-color:$colorToDisplay'>";
			echo $vowelToDisplay;
			echo "</td>";

		} //endFor columns

		echo "</tr>";
	} //endFor rows
	echo "</table>";

}

function drawLetter($letter, $color) {

	$letter = strtoupper($letter);

	echo "<table border = 1>";

	for ($i = 0; $i < 8; $i++) {//Controls rows

		echo "<tr>";

		for ($j = 0; $j < 8; $j++) {//Controls columns
            $colorToDisplay = "white";
		    $letterToDisplay = "";
			switch($letter) {

				case "B" :
					if ( $i == 1 || $i==8 || $j==1 || $j==4 || $j==8) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "C" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "D" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "F" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "G" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "H" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "J" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "K" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 81167932690d4e368729268d0553b75deee58351

						if(($i == 2 && $j == 2) || ($i == 5 && $j == 2)){
							$colorToDisplay = "white";
		   					 $letterToDisplay = "";
						}
>>>>>>> 08c67246d0ced9ab5fbed255bd5643c1e417d941
					}
					break;

				case "L" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "M" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "N" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "P" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "Q" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "R" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "S" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "T" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "V" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "W" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "X" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "Y" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "Z" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;

				case "!" :
					if ($i == 4 && $j != 4 && $j != 5) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
					break;

				case "?" :
					if (1) {
						$colorToDisplay = $color;
						$vowelToDisplay = $vowel;
					}
					break;

			}  //endSwitch
<<<<<<< HEAD

			if(color == "rainbow"){
				$color = "rgb(" . rand(0,255) . "," . rand(0,255) . "," . rand(0,255) .")"; //or can use my radom hex function
			}

=======
<<<<<<< HEAD
			
=======

			if($color=="rainbow"){
				$color ="rgb(".rand(0,225)."," .rand(0,225).",".rand(0,255).")";
			}

			if ($color == "rainbow") {

			$color = "rgb(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) .")";

			}

>>>>>>> 08c67246d0ced9ab5fbed255bd5643c1e417d941
>>>>>>> 81167932690d4e368729268d0553b75deee58351
			echo "<td style = 'background-color:$colorToDisplay'>";
			echo $letterToDisplay;
			echo "</td>";

		} //endFor columns

		echo "</tr>";
	} //endFor rows
	echo "</table>";

}

function drawDigit($digit, $color) {

	echo "<table border = 1>";

	for ($i = 0; $i < 8; $i++) {//Controls rows

		echo "<tr>";

		for ($j = 0; $j < 8; $j++) {//Controls columns
            $colorToDisplay = "white";
		    $digitToDisplay = "";
			switch($digit) {

				case "1" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
<<<<<<< HEAD

						}

=======
<<<<<<< HEAD
					}
=======

						}

>>>>>>> 08c67246d0ced9ab5fbed255bd5643c1e417d941
>>>>>>> 81167932690d4e368729268d0553b75deee58351
					break;

				case "2" :
					if ( $i == 4) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

				case "3" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

				case "4" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

				case "5" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

				case "6" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

				case "7" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

				case "8" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

				case "9" :
					if (1) {
						$colorToDisplay = $color;
						$digitToDisplay = $digit;
					}
					break;

			}  //endSwitch
<<<<<<< HEAD

			echo "<td style = 'background-color:$colorToDisplay'>";
			echo $digitToDisplay;
			echo "</td>"; 

=======
<<<<<<< HEAD
			
			echo "<td style = 'background-color:$colorToDisplay'>";
			echo $digitToDisplay;
			echo "</td>";
			
=======

			if ($color == "rainbow"){
				$color = "rgb(" .rand(0,255) . "," .rand(0,255) . ",".rand(0,255) . ")";
			}
			echo "<td style = 'background-color:$colorToDisplay'>";
			echo $digitToDisplay;
			echo "</td>";

>>>>>>> 08c67246d0ced9ab5fbed255bd5643c1e417d941
>>>>>>> 81167932690d4e368729268d0553b75deee58351
		} //endFor columns

		echo "</tr>";
	} //endFor rows
	echo "</table>";

}
<<<<<<< HEAD
?>
=======

?>
<<<<<<< HEAD
=======
>>>>>>> 08c67246d0ced9ab5fbed255bd5643c1e417d941
>>>>>>> 81167932690d4e368729268d0553b75deee58351
