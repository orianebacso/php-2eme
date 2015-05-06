<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>
		<?php
			$base = $_POST['chiffre'];  // Récupération de la saisie
			
			$tobase = "";
			echo "Voici la table de multiplication " . $base;
			echo "<table border='2'>";
			echo "<tr><th>X</th>";
			for( $i=0; $i<$base; $i++ ) {
				echo "<th>$i</th>";	// Ligne d'entête
			}
				
			for( $j=0; $j<$base; $j++ ) {
				echo "<tr><th>$j</th>";
				for( $k=0; $k<$base; $k++) {					
					echo "<td>" . base_convert($j*$k, 10, $base) . "</td>";
				}	
				echo "</tr>";
			}
			echo "</table>";
			echo "<br>";					
			echo "Voici la table d'addition " . $base;
			echo "<table border='2'>";
			echo "<tr><th>+</th>";
			for( $i=0; $i<$base; $i++ ) {
				echo "<th>$i</th>";	// Ligne d'entête
			}
				
			for( $j=0; $j<$base; $j++ ) {
				echo "<tr><th>$j</th>";
				for( $k=0; $k<$base; $k++) {					
					echo "<td>" . base_convert($j+$k, 10, $base) . "</td>";
				}	
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>
