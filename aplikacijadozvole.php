<?php 
session_start();
include('header.php');
if (isset($_SESSION['valid_user']))
{ 
$godina = new DateTime(date("Y-m-d",strtotime("now")));
  $datum_datum=date_format($godina, 'Y');
  $prosla = new DateTime(date("Y-m-d",strtotime("-1 year")));
  $prosla_prosla=date_format($prosla, 'Y');
  $predprosla = new DateTime(date("Y-m-d",strtotime("-2 year")));
  $predprosla_predprosla=date_format($predprosla, 'Y');
  $unazadtreca = new DateTime(date("Y-m-d",strtotime("-3 year")));
  $unazadtreca_unazadtreca=date_format($unazadtreca, 'Y');
  $unazadcetvrta = new DateTime(date("Y-m-d",strtotime("-4 year")));
  $unazadcetvrta_unazadcetvrta=date_format($unazadcetvrta, 'Y');
  $unazadpeta = new DateTime(date("Y-m-d",strtotime("-5 year")));
  $unazadpeta_unazadpeta=date_format($unazadpeta, 'Y');
  $unazadsesta = new DateTime(date("Y-m-d",strtotime("-6 year")));
  $unazadsesta_unazadsesta=date_format($unazadsesta, 'Y');
  $unazadsedma = new DateTime(date("Y-m-d",strtotime("-7 year")));
  $unazadsedma_unazadsedma=date_format($unazadsedma, 'Y');
  $unazadosma = new DateTime(date("Y-m-d",strtotime("-8 year")));
  $unazadosma_unazadosma=date_format($unazadosma, 'Y');
  $unazaddeveta = new DateTime(date("Y-m-d",strtotime("-9 year")));
  $unazaddeveta_unazaddeveta=date_format($unazaddeveta, 'Y');
  $unazaddeseta = new DateTime(date("Y-m-d",strtotime("-10 year")));
  $unazaddeseta_unazaddeseta=date_format($unazaddeseta, 'Y');
  $unazadjedanaesta = new DateTime(date("Y-m-d",strtotime("-11 year")));
  $unazadjedanaesta_unazadjedanaesta=date_format($unazadjedanaesta, 'Y');
  $unazaddvanesta = new DateTime(date("Y-m-d",strtotime("-12 year")));
  $unazaddvanesta_unazaddvanesta=date_format($unazaddvanesta, 'Y');
  $unazadtrinesta = new DateTime(date("Y-m-d",strtotime("-13 year")));
  $unazadtrinesta_unazadtrinesta=date_format($unazadtrinesta, 'Y');
  $unazadcetrnesta = new DateTime(date("Y-m-d",strtotime("-14 year")));
  $unazadcetrnesta_unazadcetrnesta=date_format($unazadcetrnesta, 'Y');
  $unazadpetnesta = new DateTime(date("Y-m-d",strtotime("-15 year")));
  $unazadpetnesta_unazadpetnesta=date_format($unazadpetnesta, 'Y');
  $unazadsestnesta = new DateTime(date("Y-m-d",strtotime("-16 year")));
  $unazadsestnesta_unazadsestnesta=date_format($unazadsestnesta, 'Y');
  $unazadsedamnesta = new DateTime(date("Y-m-d",strtotime("-17 year")));
  $unazadsedamnesta_unazadsedamnesta=date_format($unazadsedamnesta, 'Y');
  
if(isset($_POST['userid']) && isset($_POST['password'])) 
{
    //ako je korisnik upravo pokusao da se prijavi
   
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    include('db.php');
    $query = 'SELECT * from user '." where uname = '$userid'"."and password='$password'";
   
    $result = $db->query($query);
    //$result->execute();
    //$result->bind_result($id_user,$name_user,$uname_user,$pasword_user,$level_user);
    if($result->num_rows)
    {
        //ako je korisnik pronadjen u bazi podataka registrujemo njegov indetifikator u sesiji
        $_SESSION['valid_user'] = $userid;
    }
    $db->close();
}
if (isset($_SESSION['valid_user']))
{
  //if($userid !=='kresimir' && $password !=='1kresimir2'){ 
    $ajdijezika=($_POST['flexRadioDefault']);
  //echo $userid;
  include('db.php');
  $upit = "SELECT jezici.id,jezici.dugme1,jezici.dugme2,jezici.dugme3,jezici.dugme4,jezici.dugme5,jezici.dugme6,jezici.dugme7,jezici.dugme8,jezici.dugme9,jezici.dugme10
  ,jezici.dugme11,jezici.dugme13,jezici.dugme14,jezici.dugme15,jezici.dugme16,jezici.dugme17,jezici.dugme26,jezici.dugme19,jezici.dugme20,jezici.dugme21,jezici.dugme22,jezici.dugme23,jezici.dugme24,jezici.dugme25,jezici.dugme34,jezici.dugme32,jezici.dugme36,jezici.dugme37,jezici.dugme38,jezici.dugme39,jezici.dugme40,jezici.dugme41,jezici.dugme42,jezici.dugme43,jezici.dugme44,jezici.dugme45,jezici.dugme46,jezici.dugme47,jezici.dugme48,jezici.dugme49,jezici.dugme50,jezici.dugme51,jezici.dugme52,jezici.dugme53,jezici.dugme54,jezici.dugme55,jezici.dugme56,jezici.dugme57,jezici.dugme58,jezici.dugme33,jezici.dugme12,jezici.dugme63,jezici.dugme64,jezici.dugme65 FROM jezici WHERE jezici.id=$ajdijezika" ;
  
   $izjava = $db->prepare($upit) ;
   $izjava->execute();
   $izjava->store_result();
  $izjava->bind_result($ajdjezika,$dugme1,$dugme2,$dugme3,$dugme4,$dugme5,$dugme6,$dugme7,$dugme8,$dugme9,$dugme10,$dugme11,$dugme13,$dugme14,$dugme15,$dugme16,$dugme17,$dugme26,$dugme19,$dugme20,$dugme21,$dugme22,$dugme23,$dugme24,$dugme25,$dugme34,$dugme32,$dugme36,$dugme37,$dugme38,$dugme39,$dugme40,$dugme41,$dugme42,$dugme43,$dugme44,$dugme45,$dugme46,$dugme47,$dugme48,$dugme49,$dugme50,$dugme51,$dugme52,$dugme53,$dugme54,$dugme55,$dugme56,$dugme57,$dugme58,$dugme33,$dugme12,$dugme63,$dugme64,$dugme65);
  while($izjava->fetch()){ }
        $upit = "SELECT * FROM gradovi";
    $izjava = $db->prepare($upit) ;
    $izjava->execute();
    $izjava->store_result();
   $izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
   while($izjava->fetch()){ 
    //echo '.$name.'</a>'; 
 echo '  <header class="navbar navbar-dark sticky-top bg-btn '.$boja.' flex-md-nowrap p-0 shadow">';
}
  //$upit = "SELECT * FROM promtrac WHERE uname='marko' " ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $upit = 'SELECT * from user '." where uname = '$userid'"."and password='$password'";
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($id,$name,$uname,$password,$level,$podrucje);
while($izjava->fetch()){ 

    echo '<input type="hidden" name="korisnik" id="korisnik" value="'.$uname.'"/>
    <input type="hidden" name="password" id="password" value="'.$password.'"/>
    <input type="hidden" name="level" id="level" value="'.$level.'"/>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" style="font-family:Times New Roman;">';
    $upit = "SELECT * FROM gradovi";
    $izjava = $db->prepare($upit) ;
    $izjava->execute();
    $izjava->store_result();
   $izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
   while($izjava->fetch()){ 
    //echo '.$name.'</a>'; 
 echo '<img src="'.$logo.'" class="img img-responsive" style="width:35px;height:20px;"/> '.$name.'</a>';
}
}
  ?>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <form action="pretragadozvole.php" method="POST" class="form-control form-control-dark w-100">
  <?php

  echo '<input type="hidden" value="'.$_SESSION['valid_user'].'" id="sesija" name="sesija">';
  
  echo'
  <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
  <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
  <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
  <input type="hidden" value="'.$level.'" id="level" name="level">
  <input type="hidden" value="'.$name.'" id="ime" name="ime">
  <input type="hidden" value="'.$userid.'" id="userid" name="userid">
  <input type="hidden" value="'.$password.'" id="password" name="password">
  <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
  <input type="hidden" value="" id="tip" name="tip">
  <select type="text"  name="searchtype" autocomplete="off" placeholder="Uposlenik" class="form form-control" style="width:40%;">
  <option value="1">'.$dugme19.'</option>
  <option value="2">'.$dugme20.'</option>
  <option value="3">'.$dugme23.'</option>
  <option value="4">'.$dugme24.'</option>
  <option value="5">'.$dugme25.'</option>
  <option value="6">'.$dugme33.'</option>
  </select>
  <input  type="text" placeholder="'.$dugme2.'" aria-label="Search" style="width:28%;" class="form form-control" name="searchterm" autocomplete="off">
  <button type="submit" class="btn btn-secondary" style="margin-bottom:3px;">'.$dugme3.'</button>
  </form>';
  ?>

</header>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvorii"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dugme36;?></h4>
      </div>
      <div class="modal-body">
      
     <div id="tekst2"></div>
      </div>
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
        <button type="button" class="btn btn-default" data-dismiss="modal" id="stornire" ><?php echo $dugme63;?></button>
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="<?php echo $dugme57;?>" id="ponesi" name="ponesi"/>
       
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvori"><span aria-hidden="true">&times;</span></button>
        <h><?php echo $dugme65;?></h> 
      </div>
      <div class="modal-body">
     <div id="tekst1"></div>
      </div>
      <div class="modal-footer" >
      <button class="btn btn-danger"  data-bs-target="#myModal2" data-bs-toggle="modal"><?php echo $dugme64;?></button>
        <button class="btn btn-secondary" id="azurirati" name="azurirati"><?php echo $dugme65;?></button>
        
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvor"><span aria-hidden="true">&times;</span></button>
        <h><?php echo $dugme64;?></h> 
      </div>
      <div class="modal-body">
     <p style="color:red;"><?php echo $dugme64.'?';?></p>
      </div>
      <div class="modal-footer" >
      <button class="btn btn-danger" id="izbrisati" name="izbrisati" ><?php echo $dugme64;?></button>
        <button class="btn btn-secondary" id="odustati" name="odustati"><?php echo $dugme63;?></button>
        
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="qui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme37;?></h4>
        </div>
        <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">'
        <div class="modal-body" id="test">
        
        <input class="form form-control" id="uploadImage" type="file"  name="image" value="'+ value['file_name'] +'" class="form form-control"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" id="quit"><?php echo $dugme63;?></button>
          <input class="btn btn-success" type="submit" id="submit" value="<?php echo $dugme37;?>">
          </form>
        </div>
      </div>
      
    </div>
  </div>

<div class="container-fluid" >
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" >
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
 
          <?php
     echo '
          <form action="aplikacijadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/dashboard.svg" style="width:25px;"></span>'.' '.$dugme26.'</button>
              </a>
          </li></form>
          <form action="stranicadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$prosla_prosla.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$prosla_prosla.'</button>
            </a>
          </li></form>
          <form action="stranicadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$predprosla_predprosla.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$predprosla_predprosla.'</button>
            </a>
          </li></form>
          <form action="stranicadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadtreca_unazadtreca.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
              
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadtreca_unazadtreca.'</button>
            </a>
          </li></form>
          <form action="stranicadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadcetvrta_unazadcetvrta.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadcetvrta_unazadcetvrta.'</button>
            </a>
          </li></form>
          <form action="stranicadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadpeta_unazadpeta.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadpeta_unazadpeta.'</button>
            </a>
          </li></form>
          <form action="stranicadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadsesta_unazadsesta.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsesta_unazadsesta.'</button>
            </a>
          </li></form>
         ';
          echo '<li class="nav-item dropup">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          '.$dugme34.'
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="stranicadozvole.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadsedma_unazadsedma.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsedma_unazadsedma.'</button>
                 </a>
               </li></form>
               <form action="stranicadozvole.php" method="post">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadosma_unazadosma.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadosma_unazadosma.'</button>
                 </a>
               </li></form>
               <form action="stranicadozvole.php" method="post">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$level.'" id="level" name="level">
               <input type="hidden" value="'.$name.'" id="ime" name="ime">
               <input type="hidden" value="'.$unazaddeveta_unazaddeveta.'" id="slika" name="slika">
               <input type="hidden" value="'.$userid.'" id="userid" name="userid">
               <input type="hidden" value="'.$password.'" id="password" name="password">
               <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
               <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                    <li class="nav-item">
                      <a class="nav-link">
                      <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddeveta_unazaddeveta.'</button>
                      </a>
                    </li></form>
                    <form action="stranicadozvole.php" method="post">
                    <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                    <input type="hidden" value="'.$level.'" id="level" name="level">
                    <input type="hidden" value="'.$name.'" id="ime" name="ime">
                    <input type="hidden" value="'.$unazaddeseta_unazaddeseta.'" id="slika" name="slika">
                    <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                    <input type="hidden" value="'.$password.'" id="password" name="password">
                    <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                    <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                         <li class="nav-item">
                           <a class="nav-link">
                           <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddeseta_unazaddeseta.'</button>
                           </a>
                         </li></form>
                         <form action="stranicadozvole.php" method="post">
                         <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                         <input type="hidden" value="'.$level.'" id="level" name="level">
                         <input type="hidden" value="'.$name.'" id="ime" name="ime">
                         <input type="hidden" value="'.$unazadjedanaesta_unazadjedanaesta.'" id="slika" name="slika">
                         <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                         <input type="hidden" value="'.$password.'" id="password" name="password">
                         <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                         <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                              <li class="nav-item">
                                <a class="nav-link">
                                <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadjedanaesta_unazadjedanaesta.'</button>
                                </a>
                              </li></form>
                              <form action="stranicadozvole.php" method="post">
                              <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                              <input type="hidden" value="'.$level.'" id="level" name="level">
                              <input type="hidden" value="'.$name.'" id="ime" name="ime">
                              <input type="hidden" value="'.$unazaddvanesta_unazaddvanesta.'" id="slika" name="slika">
                              <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                              <input type="hidden" value="'.$password.'" id="password" name="password">
                              <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                              <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                   <li class="nav-item">
                                     <a class="nav-link">
                                     <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddvanesta_unazaddvanesta.'</button>
                                     </a>
                                   </li></form>
                                   <form action="stranicadozvole.php" method="post">
                                   <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                   <input type="hidden" value="'.$level.'" id="level" name="level">
                                   <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                   <input type="hidden" value="'.$unazadtrinesta_unazadtrinesta.'" id="slika" name="slika">
                                   <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                   <input type="hidden" value="'.$password.'" id="password" name="password">
                                   <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                                   <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                        <li class="nav-item">
                                          <a class="nav-link">
                                          <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadtrinesta_unazadtrinesta.'</button>
                                          </a>
                                        </li></form>
                                        <form action="stranicadozvole.php" method="post">
                                        <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                        <input type="hidden" value="'.$level.'" id="level" name="level">
                                        <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                        <input type="hidden" value="'.$unazadcetrnesta_unazadcetrnesta.'" id="slika" name="slika">
                                        <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                        <input type="hidden" value="'.$password.'" id="password" name="password">
                                        <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                                        <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                             <li class="nav-item">
                                               <a class="nav-link">
                                               <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadcetrnesta_unazadcetrnesta.'</button>
                                               </a>
                                             </li></form>
                                             <form action="stranicadozvole.php" method="post">
                                             <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                             <input type="hidden" value="'.$level.'" id="level" name="level">
                                             <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                             <input type="hidden" value="'.$unazadpetnesta_unazadpetnesta.'" id="slika" name="slika">
                                             <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                             <input type="hidden" value="'.$password.'" id="password" name="password">
                                             <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                                             <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                                  <li class="nav-item">
                                                    <a class="nav-link">
                                                    <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadpetnesta_unazadpetnesta.'</button>
                                                    </a>
                                                  </li></form>
                                                  <form action="stranicadozvole.php" method="post">
                                                  <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                                  <input type="hidden" value="'.$level.'" id="level" name="level">
                                                  <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                                  <input type="hidden" value="'.$unazadsestnesta_unazadsestnesta.'" id="slika" name="slika">
                                                  <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                                  <input type="hidden" value="'.$password.'" id="password" name="password">
                                                  <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                                                  <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                                       <li class="nav-item">
                                                         <a class="nav-link">
                                                         <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsestnesta_unazadsestnesta.'</button>
                                                         </a>
                                                       </li></form>
                                                       <form action="stranicadozvole.php" method="post">
                                                       <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                                       <input type="hidden" value="'.$level.'" id="level" name="level">
                                                       <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                                       <input type="hidden" value="'.$unazadsedamnesta_unazadsedamnesta.'" id="slika" name="slika">
                                                       <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                                       <input type="hidden" value="'.$password.'" id="password" name="password">
                                                       <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
                                                       <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                                            <li class="nav-item">
                                                              <a class="nav-link">
                                                              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsedamnesta_unazadsedamnesta.'</button>
                                                              </a>
                                                            </li></form>
                                                       
               </ul></li>';
          echo '<form action="tcpdf/examples/adminizvjesce.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span>'.' '.$dugme10.'</button>
            </a>
          </li></form>
       
          <form action="tcpdf/examples/adminmoje.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$id.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span>'.' '.$dugme38.'</button>
            </a>
          </li></form>
        </ul>
          <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../gradovi/gradovi.php"><img src="images/izlaz1.svg" class="img img-responsive" style="width:35px;"/></a>
    </li>
  </ul>
</div></nav>';
      include('db.php');
      $upit = "SELECT * FROM mz WHERE id=$level" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($idd,$naziv,$adresa,$telefon,$email,$ured,$podrucjeid);
while($izjava->fetch()){ 
         echo '<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           <h1 class="h2">'.$naziv.'</h1>
           <div class="btn-toolbar mb-2 mb-md-0">
           <div class="btn-group me-2">
           <form action="aplikacija.php" method="POST">
           <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
           <input type="hidden" value="'.$userid.'" id="userid" name="userid">
           <input type="hidden" value="'.$password.'" id="password" name="password">
           <button type="submit" class="btn btn-sm btn-outline-secondary" id="dozvole" name="dozvole">'.$dugme4.'</button>
           </form>
       
               <button type="button" class="btn btn-sm btn-outline-secondary" id="unosno" name="unosno" >'.$dugme36.'</button>
               <button type="button" class="btn btn-sm btn-outline-secondary" id="izvjesno" name="izvjesno">'.$dugme37.'</button>
             </div>
           
        
             
            
           </div>
         </div>
   '; 
  }


$upit = "SELECT * FROM dozvole WHERE datum LIKE '2021%' AND mz=$level ORDER BY datum DESC" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($id,$osoba,$firma,$datum,$dokument,$opis,$idkorisnika,$datumunosa,$idpodrucja,$protokol,$mz);
//echo '<input type="text" value="'.$_SESSION['valid_user'].'" id="sesija">';
echo    '<div class="table-responsive">
        <table class="table table-sm table-bordered col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <thead class="alert alert-info">
            <tr>
            <th></th>
            <th><span><img src="images/man.svg" style="width:15px;">'.$dugme12.'</span></th>
            <th><span><img src="images/checklist.svg" style="width:15px;">'.$dugme33.'</span></th>
            <th><span><img src="images/calendarr.svg" style="width:15px;">'.$dugme23.'</span></th>
              
            </tr>
          </thead>';
while($izjava->fetch()){  

     echo '<tbody>';
     echo   '<tr id="'.$id.'" >';
             
     echo '<td ><span class="badge rounded-pill bg-primary"><img src="images/permission.svg"  style="width:15px;"></span></td>';
              echo '<td>'.$osoba.'</td>';  
             echo '<td>'.$protokol.'</td>
              <td>'.$datum.'</td>';
              
       
}
echo    '</tr>
       
</tbody>
</table>
</div>
</main>
</div>
</div>';


//echo '<a href="aplikacija.php">ODJAVI SE</a>';


}else

{
    if (isset($userid))
    {
        //ako se pokusaj prijavljivanja zavrsio neuspehom
        echo '<div id="status" class="breadcrumb col-lg-12 col-md-12 col-xs-12 col-sm-12" style="margin-top:15px;">Ne može te se prijaviti na taj način!</div>';
    }
    else
    {
        //korisnik se jos nije prijavio ili se odjavio
        //echo '<div  class="breadcrumb" >Niste prijavljeni!</div>' ;
    }
    //generisemo obrazac za prijavljivanje
    

  echo '<main class="form-signin">
  <form method="POST" action="aplikacija.php">
    <img class="mb-4" src="images/logo22.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal"></h1>
    <label for="userid" class="visually-hidden">Korisničko ime</label>
    <input type="text" id="userid" class="form-control" placeholder="Korisničko ime" name="userid" autocomplete="off">
    <label for="password" class="visually-hidden">Lozinka</label>
    <input type="password" id="password" class="form-control" placeholder="Lozinka" required name="password" autocomplete="off">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Zapamti me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Prijavi se</button>
    <p class="mt-5 mb-3 text-muted">&copy; Grad Mostar 2021</p>
  </form>
</main>';
    
}
}else{echo '<div class="alert alert-danger">Nemate dozvolu za korištenje! <a  href="aplikacija.php"> Prijavi se</a></div>';} 
?>
      <style>
body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

/* .navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
} */

 .form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
  display:inline-block;
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
.form-control {

  display:inline-block;
}
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.dropdown-menu{
  
  height: 250px;
        overflow-y: scroll; 
        cursor:pointer;
}
#sidebarMenu{


overflow-y: scroll; 

}
/* #disabledTextInput{
display: block;
width: 100%;
padding: .375rem .75rem;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #212529;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ced4da;
} */
#dokument{
cursor:pointer;
}
.table{
  cursor:pointer;
}
</style>
<script>
$(document).on('ready',function(){
  var htmll='';
  var html='';

$("table tr").on('click',function(){

var id=$(this).attr('id');      
$('#myModal1').modal('show');
$('#myModal1').on('shown.bs.modal', function () {
  //$('#myInput').trigger('focus');
console.log(id);
     
$.ajax('test.php?dobavidozvolu',{
 'method':'POST',
 'data':{'id':id},
 'success':function(data,textStatus,jqXHR){console.log(data);
 },
 'error':function(jqXHR,textStatus,errorThrown){
   
   
 }
 
}).done(function(odgovor){

console.log(odgovor);

var response = JSON.parse(odgovor);

console.log(response);

$.each(response, function(index, value){

html +='<div class="bd-example">' ;
html +='<ul class="list-group" style="text-align:LEFT;">' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary" style="text-align:center">'+'<?php echo $dugme19;?>'+'</label>';
html +='<input value="'+ value['osoba']+'" name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme20;?>'+'</label>';
html +='<input value="'+ value['firma']+'" name="firma" id="firma" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme23;?>'+'</label>';
html +='<input type="date" value="'+ value['datum']+'" name="datum" id="datum" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme24;?>'+'</label>';
html +='<input type="text" value="'+ value['dokument']+'" name="slikaa" id="slikaa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme25;?>'+'</label>';
html +='<textarea type="text"  name="opis" id="opis" class="form form-control" >'+value['opis']+'</textarea>' ;
html +='</li>' ;
//html +='<li class="list-group-item" aria-current="true">' ;
html +='<input type="hidden" value="'+ value['idkorisnika']+'" name="idkorisnika" id="idkorisnika" class="form form-control"/>' ;
//html +='</li>' ;
//html +='<li class="list-group-item" aria-current="true">' ;
html +='<input type="hidden" value="'+ value['datumunosa']+'" name="datumunosa" id="datumunosa" class="form form-control"/>' ;
//html +='</li>' ;
//html +='<li class="list-group-item" aria-current="true">' ;
html +='<input type="hidden" value="'+ value['idpodrucja']+'" name="idpodrucja" id="idpodrucja" class="form form-control"/>' ;
//html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme33;?>'+'</label>';
html +='<input type="text" value="'+ value['protokol']+'" name="protokol" id="protokol" class="form form-control"/>' ;
html +='</li>' ;

html +='<input type="hidden" value="'+ value['mz']+'" name="mz" id="mz" class="form form-control"/>' ;




html +='</ul>' ;

html +='</div>' ;

});
$("#tekst1").append(html);

$("#zatvori").click(function(){
    $("#tekst").remove();
    location.reload();
});
$("#odustati").click(function(){
    $("#tekst").remove();
    location.reload();
});
$("#zatvor").click(function(){
    $("#tekst").remove();
    location.reload();
}); 
$("#izbrisati").click(function(){

   
    $.ajax('test.php?izbrisatidozvolu',{
         'method':'POST',
         'data':{
           'id':id},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 });
 $("#tekst").remove();
    location.reload();
});   
$("#azurirati").click(function(){
    
    //var id=$("table tr").attr('id');
    var osoba=$("#osoba").val();
    var firma=$("#firma").val();
    var datum=$("#datum").val();
    var protokol=$("#protokol").val();
    var dokument=$("#slikaa").val();
    var opis=$("#opis").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#podrucje").val();
    var mz=$("#mz").val();

    console.log(id);
    console.log(osoba);
    console.log(firma);
    console.log(datum);
    console.log(protokol);
    console.log(dokument);
    console.log(opis);
    console.log(idkorisnika);
    console.log(podrucje);

         $.ajax('test.php?azurirajdozvolu',{
          'method':'POST',
          'data':{
            'id':id,'osoba':osoba,'firma':firma,'datum':datum,'protokol':protokol,'dokument':dokument,'opis':opis,'idkorisnika':idkorisnika,'podrucje':podrucje,'mz':mz},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
          'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
  });
 $("#tekst").remove();
          location.reload();
});

});

}) 


 // $(this).addClass('alert alert-success');
  //   $.ajax('test.php?glaso',{
 // 'method':'POST',
 // 'data':{
 //   'id':id},
 // 'success':function(data,textStatus,jqXHR){console.log(data);
 // },
 // 'error':function(jqXHR,textStatus,errorThrown){
    
    
 // }
  
//})
  });
  $("#unosno").click(function(){
    //console.log('unosno');
    $('#myModal').modal('show');
$('#myModal').on('shown.bs.modal', function () {
    //$("#tekst").remove();
    //location.reload();
    var idpodrucja=$("#podrucje").val();
    var idkorisnika=$("#idkorisnika").val();
    var level=$("#level").val();
    htmll +='<div class="bd-example">' ;
htmll +='<ul class="list-group" style="text-align:LEFT;">' ;
htmll +='</ul>' ;
// htmll +='<li class="list-group-item  bg-secondary" aria-current="true">' ;
// htmll +='<select class="form form-control" name="eko" id="eko">' ;
// htmll +='<option value="1"  class="alert alert-primary">PRIHOD</option>' ;
// htmll +='<option value="0"  class="alert alert-danger">RASHOD</option>' ;
// htmll +='</select>' ;
// htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" style="text-align:center">'+'<?php echo $dugme19;?>'+'</label>';
htmll +='<input  name="osoba" id="osoba" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" >'+'<?php echo $dugme20;?>'+'</label>';
htmll +='<input  name="firma" id="firma" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
// htmll +='<li class="list-group-item" aria-current="true">' ;
// htmll +='<label class="badge rounded-pill bg-secondary">VRSTA UPLATE</label>';
// htmll +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" autocomplete="off"></textarea>' ;
// htmll +='</li>' ;
// htmll +='<li class="list-group-item" aria-current="true">' ;
// htmll +='<label class="badge rounded-pill bg-secondary">IZNOS UPLATE</label>';
// htmll +='<input type="number"  name="cijena" id="cijena" class="form form-control" autocomplete="off"/>' ;
// htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme23;?>'+'</label>';
htmll +='<input type="date"  name="datum" id="datum" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme33;?>'+'</label>';
htmll +='<input type="text"  name="protokol" id="protokol" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme24;?>'+'</label>';
htmll +='<input type="text"  name="slikaa" id="slikaa" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme25;?>'+'</label>';
htmll +='<textarea type="text"  name="opis" id="opis" class="form form-control" autocomplete="off"></textarea>' ;
htmll +='</li>' ;
//htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<input type="hidden" value="'+idpodrucja+'" name="idpodrucja" id="idpodrucja" class="form form-control" autocomplete="off"/>' ;
//htmll +='</li>' ;
//htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<input type="hidden" value="'+idkorisnika+'" name="idkorisnika" id="idkorisnika" class="form form-control" autocomplete="off"/>' ;
htmll +='<input type="hidden" value="'+level+'" name="mz" id="mz" class="form form-control" autocomplete="off"/>' ;
//htmll +='</li>' ;
htmll +='</div>' ;
$("#tekst2").append(htmll);
$("#ponesi").click(function(){
    
    var osoba=$("#osoba").val();
    var firma=$("#firma").val();
    var datum=$("#datum").val();
    var protokol=$("#protokol").val();
    var dokument=$("#slikaa").val();
    var opis=$("#opis").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#idpodrucja").val();
    var mz=$("#mz").val();
    
    console.log(osoba);
    console.log(firma);
    console.log(datum);
    console.log(protokol);
    console.log(dokument);
    console.log(opis);
    console.log(idkorisnika);
    console.log(podrucje);

     $.ajax('test.php?unesidozvolu',{
          'method':'POST',
          'data':{
            'osoba':osoba,'firma':firma,'datum':datum,'protokol':protokol,'dokument':dokument,'opis':opis,'idkorisnika':idkorisnika,'podrucje':podrucje,'mz':mz},
          'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
          }
 }); 
 $("#tekst2").remove();
    location.reload();
});
 $("#zatvorii").click(function(){
     $("#tekst2").remove();
     location.reload();
 });
 $("#stornire").click(function(){
     $("#tekst2").remove();
     location.reload();
 });


  });
  
})
$("#izvjesno").click(function(){
  console.log("upload dokumentaaa");
   var naziv=$("#uploadImage").val();
   console.log(naziv);
  $("#myModal3").modal('show');
  $("#myModal3").on('shown.bs.modal',function(){
    $("#quit").on('click',function(){
location.reload();
});
$("#qui").on('click',function(){
location.reload();
});
  });
//treba mi na klik upload pokupiti naziv dokumenta  var naziv=$("#uploadImage").val();
// $("#submit").click(function(){
//   var naziv=$("file_name").val();
//    console.log(naziv);
// })

});
$("#form").on('submit',(function(e) {
  var uploadImage=$('#uploadImage')[0].files[0];
  console.log(uploadImage);
  e.preventDefault();
  $.ajax({
         url: "ajaxupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 })); 
      
    });
</script>



