<?php

$genre = "Hack And Slash";
$message = '';

switch ($genre) {
	case 'RPG':
		$message = 'Ys Games';
		break;
	case 'Hack And Slash':
		$message = 'Castlevania Games';
		break;
	case 'FBS':
		$message = 'Uncharted Games';
		break;
	case 'Platform':
		$message = 'Megaman Games';
		break;
    case 'Puzzle' :
        $message = 'Megaman Games' ;
        break;
	default:
		$message = 'Shadow Of Mordor And Shadow Of War';
}

echo "I Recommend $message";
?>
