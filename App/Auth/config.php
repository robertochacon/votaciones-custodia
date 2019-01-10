<?php 

return 

array(
	"base_url" => "https://yoprogramo.000webhostapp.com/libreria_login.php",
	"providers" => array(
		"Facebook" =>  array(
				"enabled" => true,
				"keys" => array(
					"id" => "713690622323407",
					"secret" => "89412c4bf46ec64c4ac128b0df699645",
				),
				"scope" => "email"
			),
		"Twitter" =>  array(
			"enabled" => true,
			"keys" => array(
				"key" => "cChZNFj6T5R0TigYB9yd1w",
				"secret" => "http%3A%2F%2Flocalhost%2Fsign-in-with-twitter%2F",
			),
			"includeEmail" => true
			),
		),
);

?>