<html>
<head>
    <link href="style2.css" rel="stylesheet">
    <meta charset="utf-8">

</head>	
<body>
    <div class="ylapalkki">
        <div class="container">

Terve <?php echo $_POST["name"]; ?><br>
Haluatteko todella tilata pizzanne osoitteeseen: <?php echo $_POST["osoite"]; ?><br>

<input type="submit" class="OKnappula" value="Tilaa">

<a href="index.html"><button type="submit" class="EInappula" value="Peruuta">Peruuta</button></a>

</div>
</div>
</body>
</html>