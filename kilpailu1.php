<html>
<head><meta http-equiv="Content-Type" content="text/html;charset=utf-8"></head>
<body>
<?php
  if (isset($_POST['submit'])) {
    $vastaus1 = $_POST['fvastaus1'];
    $vastaus2 = $_POST['fvastaus2'];
    echo "<H3> $vastaus1 </H3>";
  }
?>
<form action="<?php print $PHP_SELF?>" method="POST">
Vastaa alla oleviin kysymyksiin <BR>
1. Kuinka monta silmää on ihmisellä: <input type="text" name="vastaus1"><BR>
2. Minkä värinen on punainen nenä: <input type="text" name="vastaus2"> <BR>
<input type="submit" name="submit" value="OK">
</form>
</body>
</html>