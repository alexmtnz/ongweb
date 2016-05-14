<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>">

    <?php  foreach($css as $cssfile){   ?>
        <link rel="stylesheet" type="text/css" href="<?=$cssfile?>">
    <?php } ?>

    <?php  foreach($js as $jsfile){   ?>
        <script src="<?=$jsfile?>"></script>
    <?php } ?>

</head>

<body>
<a>IM A HEADER</a>
<a>variable hola en welcome: <?php if (isset($variable_hola))echo $variable_hola ?></a>

<!-- no borrar content, acaba en el footer,-->
<div class="content">
