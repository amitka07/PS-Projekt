<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<script>
		function abortion(idek) {
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function() {
				alert("Piesek lata z aniołkami");
			}
			xhttp.open("GET", '{$conf->action_url}DeletePies&DeleteDogVariable=' + idek, true);
			xhttp.send();
		}
	</script>
	<meta charset="utf-8" />
	<title>{$page_title|default:"brak tytułu"}</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
		integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/style.css" />
</head>

<body>
	<div style="margin: 1em;">
		{block name=content} Domyślna treść zawartości .... {/block}
	</div>
</body>

</html>