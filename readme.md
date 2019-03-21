Příklad funkcionalit
==================

Soubor FormHandler.php a validation.js můžete okopírovat.
Poté je jen nalinkujte do svého index.php souboru pomocí 
```php
<?php
require 'FormHandler.php';
?>
```
a 
```javascript
<script src="validation.js"></script>
```
Soubor FormHandler.php uchová poslední odeslaný požadavek z formuláře.
Výpis provedete pomocí kódu:
```php
<?php if (isset($name) && isset($mark) && isset($comment)): ?>
<?= $name ?>
<?= $mark ?>
<?= $comment ?>
<?php endif; ?>
```

oba soubory pracují s následujícím formulářem:
```html
<form method="POST" id="form">
    <input type="text" name="name" />
    <input type="number" name="mark" id="mark" />
    <textarea name="comment"></textarea>
    <input type="submit">
</form>
```
jinak si to nastylujte jak chcete, ale name & id musí být stejné!!!
