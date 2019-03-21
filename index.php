<?php
require 'FormHandler.php';
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST" id="form">
    <input type="text" name="name" />
    <input type="number" name="mark" id="mark" />
    <textarea name="comment"></textarea>
    <input type="submit">
</form>

<h1>Výpis</h1>
<?php if (isset($name) && isset($mark) && isset($comment)): ?>
<?= $name ?>
<?= $mark ?>
<?= $comment ?>
<?php endif; ?>

<script src="validation.js"></script>
</body>
</html>