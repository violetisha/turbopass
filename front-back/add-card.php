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
        <h2>Add Card</h2>
      </div>
    </div>
    <div class="container add-card-screen">
      <div class="card"><img src="img/card-01.png" alt="New Card">
        <p class="balance">$0.00</p>
      </div>
      <form id="" method="post" action="add-card.php">
          <label>Country
            <input type="text" name="pais" required>
          </label>
          <label>State
            <input type="text" name="estado" required>
          </label>
          <label>Kind of card
            <input type="text" name="tipo" required>
          </label>
          <label>Card number
            <input type="number" name="numero" required>
          </label>
          <label>Starting amount
            <input type="text" name="monto" required>
          </label>
        <div class="master-card-button">
          <!-- Aquí debería ir el botón del pago, que abre el lightbox-->
          <button type="submit">Add Card</button>
        </div>
        <?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
        
      echo '<button
		data-sc-key="sbpb_YWQ5MTRiN2MtYzAxZi00YzIzLTk5ZDEtYzU1NTYwNWYxZjcz"
        data-name="Primer pago"
        data-reference="99999"
        data-amount="'.$_POST['monto'].'"
        data-color="#09095E"
        class="button-add">
        Pay Starting amount
	</button>';        
	?>
      </form>

    </div>
    
    <?php 

$pais=$_POST['pais'];
$estado=$_POST['estado'];
$tipo=$_POST['tipo'];
$numero=$_POST['numero'];
$monto=$_POST['monto'];
$usuario_id=1;



	require 'back/bd/config.php';
$sql ="INSERT INTO tarjeta(img,pais,estado,tipo,numero,monto,usuario_id)
 VALUES ('card-02.png','$pais','$estado','$tipo','$numero','$monto','$usuario_id')";
$result=mysql_query($sql) or die ("error base de datos:".mysql_error()."<meta http-equiv='REFRESH' content='0,url=index.html'>");

?>
    
    <footer>
      <p>Handcrafted with love at #MastersOfCode, Mexico City.</p>
      <p> <span>Ramón Pazos</span><span>Jasiel Jimenez</span><span>Violeta Rosales</span></p>
    </footer>
  </body>
</html>