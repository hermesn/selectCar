<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select Car - Administrador</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
       <script>
        $(function(){
            $('#div01').css({'float':'left','margin-top':'100px'}).hide();
            $('#img01,#img02,#img03,#img04,#img05,#img06,#img07').css({'cursor':'pointer'});
            $('#img01').click(function(){
                $('#div01').fadeIn('slow');
                $('#div2').fadeOut('slow');
            });
           
        });
     </script>
   
  



 <style type="text/css">
  /*  plano de fundo */
  {box-sizing: border-box;}

    body {  background-image: url(wall1);

    }
      /* primeira div */
div#head2{
      background: #009ACD; /* azul claro */
      height: 70px ;  /* tamanho */
      width: 1000px auto;
      margin: 00px ;
      padding: 01px ; /* posionamento */
      background-position: absolute; 
      top: 40px;
      right: 100px;
    }
div#seach { 

        background: blue; /* azul normal */
      height: 1000px ;
      margin: 5000px ; /* tamanho */
      padding: 10px ;
      background-position: relative;
      padding: 22px 24px 26px 20px; /* posionamento */
        top: 10px;
    }

    /* todos os inputs de texto */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* configura um estilo para todos os botões */
button {
    background-color: blue;
    color: white;
    padding-top: auto;
    margin: 8px 10px;
    border: 6px;
    cursor: pointer;
    width: 100%;
}

/* centraliza a imagem da div1*/
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

/* set tamanho img da div1 */
img.avatar {
    width: 40%;
   
}

/* borda da div1 */
.container {
    padding: 16px;
}
/* deixa a div01 flutuante */
.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left:-10px;
    top:-120px;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    padding-top: 60px;
}
/* deixa a div1 flutuante */
.modal2 {
    display: none; 
    position: fixed;
    z-index: 1; 
    left:870px;
    top:-70px ;
    width: auto ; 
    height: auto; 
    overflow: auto; 
    padding-top: 10px;
}

/* conteiner da div1 */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}
/* botão fechar da div1 (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover;
.close:focus {
    color: red;
    cursor: pointer;
}

/* entrada lenta da div1  */
.animate {
    -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
/* Style the links inside the sidenav */
#mySidenav a {
    position: absolute; /* Position them relative to the browser window */
    left: -80px; /* Position them outside of the screen */
    transition: 0.3s; /* Add transition on hover */
    padding: 15px; /* 15px padding */
    width: 100px; /* Set a specific width */
    text-decoration: none; /* Remove underline */
    font-size: 20px; /* Increase font size */
    color: white; /* White text color */
    border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
    left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#if {
    top: 450px;
    background-color: #4CAF50;
}

#blog {
    top: 490px;
    background-color: #2196F3; /* Blue */
}

#about {
    top: 540px;
    background-color: #f44336; /* Red */
}

#contact {
    top: 590px;
    background-color: #555 /* Light Black */
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 200px;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 400px;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

td { padding:35px }
.tdEspaco { display: table; float:left; margin-left: 410px }
table { border-spacing: 5px; }


</style>

</head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<?php
      if(!isset($_SESSION)){
        session_start();
        if(!isset($_SESSION["email"]) && !isset($_SESSION["senha"])){
          echo "<script>window.location='index.html';</script>";  
        }//else{  echo "Seja bem-vindo: ".$_SESSION["nome"]." Você está logado como ".$_SESSION["email"];}
        
      }

    ?>

<div id="head2" class="head"><div id="borda" style="margin: 10px;">
  <img id="img01" align="left" src="menuc.png" width="40" height="40" title="Menu" style="margin: -05px;">
 <div id="Search" align="center" style="margin: 20px;">
   <label style="color: gray"><b>Select <a href="index.php"><img src="top-car.png" width="70px"></a> Car</b></label>
    <a href="pageAdm.php"><img id="img1" src="adm.png" alt="Menu" width="35" height="35" title="Sair" align="right" style="margin: 4px;"></a>
    </form>

 </div>
       
<div id="mySidenav" class="sidenav">
  <a href="http://www.ifpe.edu.br/campus/jaboatao" id="if">IFPE</a>
  <a href="#" id="blog">locadora</a>
  <a href="pageAdm.php" id="about">Adm</a>
  <a href="#" id="contact">Fale Conosco</a>
</div>

<div class="container">
  <div class="jumbotron">

<table>
<tr>
  <td> <a href="#"><img width="60" height="60" src="user2.png" title="Usuario"><br><b>Usuario</b></a></td>
  <td> <a href="#"><img width="60" height="60" id="img006" src="buscar.png" title="Carro"><br><b>Carro</b></a></td>
  <td> <a href="#"><img width="60" height="60" id="img003" src="loc.png" title="Locadora"><br><b>Locadora</b></a></td>
  <td> <a href="#"><img width="60" height="60" id="img005" src="adm.png"><br><b>Conta</b></a></td>
  <td class="tdEspaco"> <a href="logout.php"><img width="60" height="60" id="img07" src="enter.png" ><br><b> Sair</b></a></td>
 </tr>
</table>
  
  </div>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top" style="width: auto; height: auto;">Subir</button>

           <div id="div1" align="right" class="modal2" style="filter:alpha(opacity=50); opacity:1.5; width: 360px ; height: 570px ;">
      


        
<div id="div01" class="modal" style="width:490px; height:300px; filter:alpha(opacity=50); opacity:0.7;";> 
    <form class="modal-content animate" action="/action_page.php">
   <div class="imgcontainer" style="filter:alpha(opacity=20); opacity:0.7; height:1px; margin: 1px;"> <b>MENU</b>
   <span onclick="document.getElementById('div01').style.display='none'" class="close" title="Fechar">&times;</span>
 
</div>
    
</div>

  </div>

 </div>



</body>
</html>

