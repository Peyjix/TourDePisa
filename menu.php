<html>
<head></head>
<body>
<?php
	$xml = simplexml_load_file('catalogue-pizzas.xml');
	foreach($xml as $pizza){
		echo '<h1>'.$pizza->nom.'</h1>';
		echo '<img src="'.$pizza->image.'" width="160px" height="120px" /><br>';
		echo '<p>'.$pizza->composition.'</p>';
		foreach($pizza->prix->attributes() as $taille => $prix){
			switch($taille){
				case 'taille_l':
					$taille = 'Taille L';
					break;
				case 'taille_xl':
					$taille = 'Taille XL';
					break;
				default:
					$taille = 'Taille XXL';
			};
			echo $taille.' : '.$prix.'<br>';
		}
	}
?>
</body>
</html>
