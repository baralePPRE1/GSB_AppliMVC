<?php
/*Vue generale pour le bootstrap
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./styles/bootstrap/bootstrap.css" rel="stylesheet">
<link href="./styles/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
<?php
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);
if ($estConnecte) {
}
    ?>