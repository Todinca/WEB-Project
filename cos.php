<?php
  include "function/infoAboutProdus.php";

  $user=$_SESSION['username'];
  if(!isset($_SESSION[$user]['cntCos'])){
    $_SESSION[$user]['cntCos']=0;
    $_SESSION[$user]['listaProduse']=array();
  }else{
    if(isset($_GET['produs']) && $_GET['produs']!=''){
        echo $_GET['produs'];
            $_SESSION[$user]['cntCos']++;
            $_SESSION[$user]['listaProduse']=$_GET['produs'];
    }
  }

?>

<head>
<title >Cos</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
</head>

<boqy>
<div id="navigareCos">
    <h5><a href="home.php">Acasa</a></h5>
</div>

<div id="meniuCos">
    <div id="leftSide">
        <h2>Cosul Meu</h3>
        <input type="hidden" id="runPhp"/>
        <div id="emptyCos"></div>
        <?php 
          $totalPret=0;
          for($i=0;$i<=$_SESSION[$user]['cntCos'];$i++){
                echo '
                <div class="itemCos" id="idItem'.$i.'">
                    <img src="img/produse/'.$_SESSION['img'][$_SESSION[$user]['listaProduse']].'"/>
                    <div class="numeItem">'.$_SESSION[$user]['listaProduse'].'</div>
                    <div class="pretItem">'.$_SESSION['pret'][$_SESSION[$user]['listaProduse']].'</div>
                    <div class="deleteItem" onclick="deteteProdus('.$i.','.intval($_SESSION['pret'][$_SESSION[$user]['listaProduse']]).')"><i class="far fa-trash-alt"></i> Sterge</div>
                </div>';
            $totalPret=$totalPret+intval($_SESSION['pret'][$_SESSION[$user]['listaProduse']]);
          }
         ?>
    </div>
    <div id="rightSide">
       <h3>Sumar comanda</h3>
       <div class="itemPret"><p>Cost Produse</p><span><?php echo $totalPret;?> lei</span></div>
       <div class="itemPret"><P>Cost Livrare</p><span>15lei</span></div>
       <div id="itemPretTotal">    
            <hr>
            <br>
            <h1>Total
                <h5 id="PretTotalComanda"><?php echo $totalPret+15;?>lei</h5>
            </h1>
            <button onclick="showPopUp(4)" id="finalizeazaComanda">Finalizare</button>
        </div>
    </div>


    <div  class="box" id="CosPopUp">
      <div id="headCos">
          <h2>Adresa livrare</h2>
          <div onclick="closePopUP(4)"id="closePopUpCos">X</div>
      </div>
      <form autocomplete="off">
      <div class="inputBox">
            <input type="text" id="judet" name="judet" require />
            <label>Judet</label>
        </div>
        <br>
        <div class="inputBox">
            <input type="text" id="oras" name="oras" require/>
            <label>Oras</label>
        </div>
        <br>
        <div class="inputBox">
            <input type="text" id="strada" name="strada" require />
            <label>Strada</label>
        </div>
        <br>
        <div class="inputBox">
            <input type="text" id="numar" name="numar" require/>
            <label>Numar</label>
        </div> 
        <input type="submit" name="submitFinalizareComanda" value="Submit"> 
        </form>   
  </div>
</div>
<script src="js/app.js"></script>
</body>
