<!DOCTYPE html>
<html> 
  <head>
    <meta charset="utf-8">
    <title>TurboPass</title>
    <meta name="description" content="All your public transport cards in one app: TurboPass">
    <meta name="author" content="Violeta Rosales, Ramon Pazos, Jasiel Jimenez">
    <meta name="robots" content="INDEX, FOLLOW">
    <link type="text/plain" rel="author" href="../humans.txt">
    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
    <!-- Styles-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- Scripts-->
    <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="application/javascript" src="js/scripts.js"></script>
    <!-- Google Analytics-->
    <!-- Open Graph-->
<script type="text/javascript" src="https://www.simplify.com/commerce/simplify.pay.js"></script>    
  </head>
  <body>
    <header class="dark">
      <div class="container"><a href="index.html">
          <h1 class="logo">TurboPass</h1></a>
        <nav><a href="login.html">Log out</a></nav>
      </div>
    </header>
    <div class="title-line">
      <div class="container">
        <h2>My cards</h2>
      </div>
    </div>

    <div class="instructions">
      <div class="container">
        <h4>1. Select the amount to transfer:</h4>
        <form action="my-cards.php" method="post">   
          <button type="submit" class="button">Confirmar</button>
          <select>
            <option value="2000" label="$20.00"></option>
            <option value="3000" label="$30.00"></option>
            <option value="5000" label="$50.00"></option>
            <option value="10000" label="$100.00"></option>
          </select>
        </form>
      </div>
    </div>
    <div class="instructions light">
      <div class="container">
        <h4>2. Select the card and transfer the funds</h4>
      </div>
    </div>

    <div class="container add-founds-screen">
             
    <?php

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$monto=$_POST['monto'];    
    
    
	require 'back/bd/config.php';
	$sql ="SELECT * FROM tarjeta";
	$result=mysql_query($sql) or die ("error en la base de datos:".mysql_error()."<meta http-equiv='REFRESH' content='0,url=index.html'>");
	while ($fila2 = mysql_fetch_row($result,MYSQL_ASSOC)){
    echo'
    	<div class="card">
    <img src="img/'.$fila2['img'].'" alt="New Card">
    <p class="balance">My wallet: $'.$fila2['monto'].'.00</p>';
        

echo'<button
		data-sc-key="sbpb_YWQ5MTRiN2MtYzAxZi00YzIzLTk5ZDEtYzU1NTYwNWYxZjcz"
        data-name="'.$fila2['tipo'].'"
        data-description="Numero de tarjeta:'.$fila2['numero'].'"
        data-reference="99999"
        data-amount="'.$monto.'"
        data-color="#09095E"
        class="button-add">
        Add founds to this card
	</button>
</div> ';
	
	}    

    ?>      
    </div>
    <footer>
      <p>Handcrafted with love at #MastersOfCode, Mexico City.</p>
      <p> <span>Ramón Pazos</span><span>Jasiel Jimenez</span><span>Violeta Rosales</span></p>
    </footer>
  </body>
</html>