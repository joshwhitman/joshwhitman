<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= isset($PageTitle) ? $PageTitle : "joshwhitman.net" ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="/favicons/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="/favicons/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#f6fafc">
		<meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/hexagons.css">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,700' rel='stylesheet' type='text/css'>
		<link href="/joshwhitman/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<?php if (function_exists('customPageHeader')){
			customPageHeader();
		}?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->