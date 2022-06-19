<?php

require __DIR__ . '/vendor/autoload.php';


// point to the templates directory
app()->template->config("path", "./");

app()->get("/", function () {

	$greeting = "hello world";

	// render our template
	echo app()->template->render("home", [
		"greeting" => $greeting,
	]);

});

app()->get('/jodi/{market}', function ($market) {
	echo "Jodi => {$market}";
});

app()->get('/panel/{market}', function ($market) {
	echo "Panel => {$market}";
});

app()->get('/starline-chart/{market}', function ($market) {
	echo "Starline Chart => {$market}";
});

app()->get('/guessing-forum', function () {
	echo 'Forum';
});

app()->run();
