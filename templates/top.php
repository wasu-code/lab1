<?php require_once dirname(__FILE__) .'/../config.php';
include _ROOT_PATH.'/app/security/check.php'; 
?>
<html>
	<head>
		<title>Kalkulator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php print(_APP_URL) ?>/templates/assets/css/main.css" />
		<link rel="stylesheet" href="<?php print(_APP_URL) ?>/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">Kalkulator Kredytowy</a></h1>

						<div><em>Zalogowano jako: <?php print($role)?></em></div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="<?php print(_APP_ROOT); ?>">Kalkulator</a></li>
								<li><a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php">Inna Strona</a></li>
								<li><a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a></li>
							</ul>
						</nav>

				</div>
				<div id="page-content">








