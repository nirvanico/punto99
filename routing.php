<?php

// Semplice json_encode con stampa ed exit
function doResponse($response)
{
	echo json_encode($response);
	exit;
}

$_pageRequested = $_POST['page']; // Prendo il parametro passato dalla chiamata ajax
$_response = array('message' => '', 'result' => '');
// Questo è il cuore del routing: a seconda della page richiesta, capisco quale template devo andare a caricare
switch($_pageRequested)
{
	case 'home':
		$_template = 'home.html';
		break;

	case 'stampa':
		$_template = 'stampa.html';
		break;

	case 'visual':
		$_template = 'visual.html';
		break;

    case 'adesivi':
		$_template = 'adesivi.html';
		break;

    case 'automezzi':
		$_template = 'automezzi.html';
		break;

    case 'banner':
        $_template = 'banner.html';
        break;

    case 'insegne':
        $_template = 'insegne.html';
        break;

    case 'pannelli':
        $_template = 'pannelli.html';
        break;

    case 'tipografia':
        $_template = 'tipografia.html';
        break;

    case 'abbigliamento':
        $_template = 'abbigliamento.html';
        break;

    case 'contatti':
        $_template = 'contatti.html';
        break;

	default:
		$_template = false;
		break;
}

if(!$_pageRequested || !$_template)
{
	// In questo caso, la page non è stata trovata o la richiesta non era corretta (quindi bot o accesso non consentito)
	$_response['message'] = 'KO';
	doResponse($_response);
} else {
	// Qui invece va tutto bene, vado a leggere il contenuto del file corrispondente alla page richiesta e ritorno il risultato
	// La risposta è il contenuto del file html, che posso quindi iniettare dove mi interessa
	$_content = file_get_contents($_template);
	$_response['message'] = 'OK';
	$_response['result'] = $_content;
	doResponse($_response);
}

