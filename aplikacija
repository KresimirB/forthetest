<?php 
session_start();
include('header.php');
$godina = new DateTime(date("Y-m-d",strtotime("now")));
$datum_datum=date_format($godina, "Y-m-d");
$prosla = new DateTime(date("Y-m-d",strtotime("+1 day")));
$prosla_prosla=date_format($prosla, "Y-m-d");
$predprosla = new DateTime(date("Y-m-d",strtotime("+2 day")));
$predprosla_predprosla=date_format($predprosla, 'Y-m-d');
$unazadtreca = new DateTime(date("Y-m-d",strtotime("+3 day")));
$unazadtreca_unazadtreca=date_format($unazadtreca, 'Y-m-d');
$unazadcetvrta = new DateTime(date("Y-m-d",strtotime("+4 day")));
$unazadcetvrta_unazadcetvrta=date_format($unazadcetvrta, 'Y-m-d');
$unazadpeta = new DateTime(date("Y-m-d",strtotime("+5 day")));
$unazadpeta_unazadpeta=date_format($unazadpeta, 'Y-m-d');
$unazadsesta = new DateTime(date("Y-m-d",strtotime("+6 day")));
$unazadsesta_unazadsesta=date_format($unazadsesta, 'Y-m-d');
$unazadsedma = new DateTime(date("Y-m-d",strtotime("+7 day")));
$unazadsedma_unazadsedma=date_format($unazadsedma, 'Y-m-d');
$unazadosma = new DateTime(date("Y-m-d",strtotime("+8 day")));
$unazadosma_unazadosma=date_format($unazadosma, 'Y-m-d');
$unazaddeveta = new DateTime(date("Y-m-d",strtotime("+9 day")));
$unazaddeveta_unazaddeveta=date_format($unazaddeveta, 'Y-m-d');
$unazaddeseta = new DateTime(date("Y-m-d",strtotime("+10 day")));
$unazaddeseta_unazaddeseta=date_format($unazaddeseta, 'Y-m-d');
$unazadjedanaesta = new DateTime(date("Y-m-d",strtotime("+11 day")));
$unazadjedanaesta_unazadjedanaesta=date_format($unazadjedanaesta, 'Y-m-d');
$unazaddvanesta = new DateTime(date("Y-m-d",strtotime("+12 day")));
$unazaddvanesta_unazaddvanesta=date_format($unazaddvanesta, 'Y-m-d');
$unazadtrinesta = new DateTime(date("Y-m-d",strtotime("+13 day")));
$unazadtrinesta_unazadtrinesta=date_format($unazadtrinesta, 'Y-m-d');
$unazadcetrnesta = new DateTime(date("Y-m-d",strtotime("+14 day")));
$unazadcetrnesta_unazadcetrnesta=date_format($unazadcetrnesta, 'Y-m-d');
$unazadpetnesta = new DateTime(date("Y-m-d",strtotime("+15 day")));
$unazadpetnesta_unazadpetnesta=date_format($unazadpetnesta, 'Y-m-d');
$unazadsestnesta = new DateTime(date("Y-m-d",strtotime("+16 day")));
$unazadsestnesta_unazadsestnesta=date_format($unazadsestnesta, 'Y-m-d');
$unazadsedamnesta = new DateTime(date("Y-m-d",strtotime("+17 day")));
$unazadsedamnesta_unazadsedamnesta=date_format($unazadsedamnesta, 'Y-m-d');

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
//session_start();

if (isset($_SESSION['valid_user']))
{
  $ajdijezika=($_POST['flexRadioDefault']);
  //echo $ajdijezika;
  include('db.php');
  $upit = "SELECT jezici.id,jezici.dugme1,jezici.dugme2,jezici.dugme3,jezici.dugme4,jezici.dugme5,jezici.dugme6,jezici.dugme7,jezici.dugme8,jezici.dugme9,jezici.dugme10
  ,jezici.dugme11,jezici.dugme13,jezici.dugme14,jezici.dugme15,jezici.dugme16,jezici.dugme17,jezici.dugme26,jezici.dugme19,jezici.dugme20,jezici.dugme21,jezici.dugme22,jezici.dugme23,jezici.dugme24,jezici.dugme25,jezici.dugme34,jezici.dugme32,jezici.dugme36,jezici.dugme37,jezici.dugme38,jezici.dugme39,jezici.dugme40,jezici.dugme41,jezici.dugme42,jezici.dugme43,jezici.dugme44,jezici.dugme45,jezici.dugme46,jezici.dugme47,jezici.dugme48,jezici.dugme49,jezici.dugme50,jezici.dugme51,jezici.dugme52,jezici.dugme53,jezici.dugme54,jezici.dugme55,jezici.dugme56,jezici.dugme57,jezici.dugme58,jezici.dugme60,jezici.dugme66,jezici.dugme67,jezici.dugme65,jezici.dugme63,jezici.dugme64,jezici.dugme28,jezici.dugme29,jezici.dugme27,jezici.dugme68,jezici.dugme69,jezici.dugme76,jezici.dugme12,jezici.dugme77,jezici.dugme78,jezici.dugme79,jezici.dugme18,jezici.dugme73,jezici.dugme31,jezici.dugme83,jezici.dugme84,jezici.dugme85,jezici.dugme88,jezici.dugme89,jezici.dugme80,jezici.dugme81,jezici.dugme82,jezici.dugme87,jezici.dugme86,jezici.dugme90,jezici.dugme91,jezici.dugme92,jezici.dugme93,jezici.dugme94,jezici.dugme95,jezici.dugme96,jezici.dugme97,jezici.dugme98,jezici.dugme99,jezici.dugme100,jezici.dugme101 FROM jezici WHERE jezici.id=$ajdijezika" ;
  
   $izjava = $db->prepare($upit) ;
   $izjava->execute();
   $izjava->store_result();
  $izjava->bind_result($ajdjezika,$dugme1,$dugme2,$dugme3,$dugme4,$dugme5,$dugme6,$dugme7,$dugme8,$dugme9,$dugme10,$dugme11,$dugme13,$dugme14,$dugme15,$dugme16,$dugme17,$dugme26,$dugme19,$dugme20,$dugme21,$dugme22,$dugme23,$dugme24,$dugme25,$dugme34,$dugme32,$dugme36,$dugme37,$dugme38,$dugme39,$dugme40,$dugme41,$dugme42,$dugme43,$dugme44,$dugme45,$dugme46,$dugme47,$dugme48,$dugme49,$dugme50,$dugme51,$dugme52,$dugme53,$dugme54,$dugme55,$dugme56,$dugme57,$dugme58,$dugme60,$dugme66,$dugme67,$dugme65,$dugme63,$dugme64,$dugme28,$dugme29,$dugme27,$dugme68,$dugme69,$dugme76,$dugme12,$dugme77,$dugme78,$dugme79,$dugme18,$dugme73,$dugme31,$dugme83,$dugme84,$dugme85,$dugme88,$dugme89,$dugme80,$dugme81,$dugme82,$dugme87,$dugme86,$dugme90,$dugme91,$dugme92,$dugme93,$dugme94,$dugme95,$dugme96,$dugme97,$dugme98,$dugme99,$dugme100,$dugme101);
  while($izjava->fetch()){ }
  $upit = 'SELECT * from user '." where uname = '$userid'"."and password='$password'";
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($idjezici,$name,$uname,$password,$level,$podrucje);
while($izjava->fetch()){ }
  if($level !==0 && $password !==0){ 
    
  //include('db.php');
   
 
    $upit = "SELECT * FROM gradovi";
    $izjava = $db->prepare($upit) ;
    $izjava->execute();
    $izjava->store_result();
   $izjava->bind_result($idg,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
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
$izjava->bind_result($iddd,$name,$uname,$password,$level,$podrucje);
while($izjava->fetch()){ 

    echo '
    <input type="hidden" name="korisnik" id="korisnik" value="'.$uname.'"/>
    <input type="hidden" name="password" id="password" value="'.$password.'"/>
    <input type="hidden" name="level" id="level" value="'.$level.'"/>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" style="font-family:Times New Roman;">';
    $upit="SELECT * FROM logo WHERE idustanova='$podrucje'";
    
    $stmt = $db->prepare($upit);
    $stmt->execute();
    $stmt->store_result();
    //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
    $stmt->bind_result($idlogo,$nazivlogo,$idustanovac,$logoadmin);
while($stmt->fetch()){ }


    $upit = "SELECT * FROM gradovi";
    $izjava = $db->prepare($upit) ;
    $izjava->execute();
    $izjava->store_result();
   $izjava->bind_result($idg,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
   while($izjava->fetch()){ 
    //echo '.$name.'</a>'; 
 echo '<img src="images/'.$logoadmin.'" class="img img-responsive" style="width:35px;height:20px;"> '.$name.'</a>';
}
}
  ?>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <form action="pretraga.php" method="POST" class="form-control form-control-dark w-100">
  <?php

  echo '<input type="hidden" value="'.$_SESSION['valid_user'].'" id="sesija" name="sesija">';
  $upit = "SELECT * FROM mz WHERE id=$level" ;
     //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($id,$naziv,$adresa,$telefon,$email,$ured,$podrucjeid,$nivoo);
    while($izjava->fetch()){ 
  echo'
  <input type="hidden" value="'.$nivoo.'" id="nivo" name="nivo">
  <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
  <input type="hidden" value="'.$userid.'" id="userid" name="userid">
  <input type="hidden" value="'.$password.'" id="password" name="password">
  <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
  <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
  <input type="hidden" value="'.$level.'" id="level" name="level">
  <input type="hidden" value="'.$name.'" id="ime" name="ime">
  <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
  <input type="hidden" value="" id="tip" name="tip">
  <select type="text"  name="searchtype" autocomplete="off" placeholder="Uposlenik" class="form form-control" style="width:40%;">
  <option value="1">'.$dugme19.'</option>
  <option value="2">'.$dugme20.'</option>
  <option value="3">'.$dugme21.'</option>
  <option value="4">'.$dugme22.'</option>
  <option value="5">'.$dugme23.'</option>
  <option value="6">'.$dugme24.'</option>
  <option value="7">'.$dugme25.'</option>
  <option value="8">'.$dugme68.'</option>
  </select>
  <input  type="text" placeholder="'.$dugme2.'" aria-label="Search" style="width:28%;" class="form form-control" name="searchterm" autocomplete="off">
  <button type="submit" class="btn btn-sm btn-secondary" style="margin-bottom:3px;">'.$dugme3.'</button>
  </form>
  
';
    }
  ?>

</header>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvorii"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dugme57;?></h4>
      </div>
      <div class="modal-body">
      
     <div id="tekst2"></div>
      </div>
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" id="stornire" ><?php echo $dugme63;?></button>
        <input type="submit" class="btn btn-primary btn-sm" data-dismiss="modal" value="<?php echo $dugme57;?>" id="ponesi" name="ponesi"/>
       
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvori"><span aria-hidden="true">&times;</span></button>
        <h><?php echo $dugme65;?></h> 
      </div>
      <div class="modal-body">
     <div id="tekst1"></div>
      </div>
     <!-- <div class="modal-footer" > -->
     <!-- <button class="btn btn-danger"  data-bs-target="#myModal2" data-bs-toggle="modal"><?php echo $dugme64;?></button>-->
        <!--<button class="btn btn-secondary" id="azurirati" name="azurirati"><?php echo $dugme65;?></button>-->
        
        
      <!--</div>-->
    </div>
  </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
     <div >
      <select name="vrjednostpodrucni" id="vrjednostpodrucni">
        <?php
        echo '<option value="0">Izaberi Ustanovu</option>' ;
        $upit="SELECT * FROM podrucni_ured ";
        $stmt = $db->prepare($upit);
        $stmt->execute();
        $stmt->store_result();
        //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
        $stmt->bind_result($idpodrucni,$nazivpodrucni,$adresapodrucni,$telefonpodrucni,$emailpodrucni);
        while($stmt->fetch()){ 
        echo '<option value="'.$idpodrucni.'" class="crno">'.$nazivpodrucni.'</option>';
        echo '<option value="'.$idpodrucni.'" class="crno">'.$idpodrucni.'</option>';
        }
        ?>
        </select>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvor"><span aria-hidden="true">&times;</span></button>
        
        
      </div>
    <div id="podrucjetekst">
    
      </div>
      <div class="modal-footer" >
  
      <select name="hitnauputnica" id="hitnauputnica" >
      <option value="0"><?php echo $dugme78;?></option>
      <option value="1"><?php echo $dugme41.' '.$dugme78;?></option>
      </select>
        <button class="btn btn-secondary btn-sm" id="odustati" name="odustati"><?php echo $dugme63;?></button>
        
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal200" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
     <div >
      
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvor"><span aria-hidden="true">&times;</span></button>
               
      </div>
      <div class="modal-body">
        <div id="tekst44">
        
      </div>
      </div>
      <div class="modal-footer" >
      <select name="hitno" id="hitno" >
      <option value="0"><?php echo $dugme78;?></option>
      <option value="1"><?php echo $dugme101.' '.$dugme78;?></option>
      </select>
          <button class="btn btn-secondary btn-sm" id="odustati" name="odustati"><?php echo $dugme63;?></button>
        
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

      
      <select name="vrjednoststacionar" id="vrjednoststacionar">
        <?php
        echo $level;
        echo '<option value="0">Izaberi odjel</option>' ;
        $upit="SELECT mz.id,mz.naziv FROM mz where mz.ured=$level ";
        $stmt = $db->prepare($upit);
        $stmt->execute();
        $stmt->store_result();
        //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
        $stmt->bind_result($idmzz,$idmzznaziv);
        while($stmt->fetch()){ 
          echo '<option value="'.$idmzz.'" class="crno">'.$level.'</option>';
        echo '<option value="'.$idmzz.'" class="crno">'.$idmzznaziv.'</option>';
        }
        ?>
        </select>
        </div>
    <div id="unesitekststacionar">
    
      </div>
      <div class="modal-footer" >
  
      <select name="hitnauputnica" id="hitnauputnica" >
      <option value="0"><?php echo $dugme78;?></option>
      <option value="1"><?php echo $dugme41.' '.$dugme78;?></option>
      </select>
        <button class="btn btn-secondary btn-sm" id="odustatiti" name="odustatiti"><?php echo $dugme63;?></button>
        
        
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
        
        <input id="uploadImage" type="file"  name="image" value="'+ value['file_name'] +'" class="form form-control"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" id="quit"><?php echo $dugme63;?></button>
          <input class="btn btn-success" type="submit" id="submit" value="<?php echo $dugme37;?>">
          </form>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="tui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme78;?></h4>
        </div>
        <div id="rad_modal">
        <?php
          $upit="SELECT * FROM radiologija";
    
          $stmt = $db->prepare($upit);
          $stmt->execute();
          $stmt->store_result();
          //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
          $stmt->bind_result($idradiologija,$nazivradiologija,$knaziv);
          //echo '<label class="alert alert-warning" style="text-align:center;">Radiologija</label><select class="form form-control" name="radiologijausluga" id="radiologijausluga">';
          echo '<div id="modal_labb">';
          while($stmt->fetch()){ 
          
        echo  '<div class="list-group-item form-check" style="text-align:center;"><input type="checkbox" class="list-group-item" value="'.$nazivradiologija.'" id="radiologijausluga" name="line"/><label class="form-check-label for="lab">'.$nazivradiologija.'</label>';
        echo '</div>';
       }
       echo '</div>';
         // }
          echo '</div>';
          echo '<div class="modal-footer" >
          <button class="btn btn-info btn-sm" data-bs-target="#myModal2"  data-bs-toggle="modal" data-bs-dismiss="modal">'.$dugme31.'</button>
          <input class="btn btn-success btn-sm" type="submit" id="radiologijasubmit" value="'.$dugme79.'"></div>';
          
         

           ?>
    
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static" >
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="mui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme78;?></h4>
        </div>
        
        <?php
         
          
          $upit="SELECT * FROM laboratorij";
    
          $stmt = $db->prepare($upit);
          $stmt->execute();
          $stmt->store_result();
          //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
          $stmt->bind_result($idlaboratorij,$nazivlaboratorij,$knaziv);
          echo '<label class="list-group-item" style="text-align:center;">Laboratorij</label>';
          echo '<div id="modal_lab">';
          while($stmt->fetch()){ 
            //echo '<input type="hidden" id="uputnicanivo" name="uputnicanivo" value="'.$nivo.'"/>';
           //echo '<option value="'.$idmzz.'">'.$nazivmzz.'</option>';
         echo  '<div class="list-group-item form-check" style="text-align:center;"><input type="checkbox" class="list-group-item" value="'.$nazivlaboratorij.'" id="laboratorijusluga" name="line"/><label class="form-check-label for="lab">'.$nazivlaboratorij.'</label>';
         echo '</div>';
        }
        echo '</div>';
        echo '<div class="modal-footer" >
        
        <button class="btn btn-info btn-sm" data-bs-target="#myModal2"  data-bs-toggle="modal" data-bs-dismiss="modal">'.$dugme31.'</button>';
        echo '<input class="btn btn-success btn-sm" type="submit" id="laboratorijsubmit" value="'.$dugme79.'"></div>'; 

           ?>
    
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="aui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme78;?></h4>
        </div>
        
        <?php
         
          
          $upit="SELECT * FROM nuklearna";
    
          $stmt = $db->prepare($upit);
          $stmt->execute();
          $stmt->store_result();
          //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
          $stmt->bind_result($idnuklearna,$nazivnuklearna,$knaziv);
          echo '<label class="list-group-item" style="text-align:center;">Laboratorij</label>';
          echo '<div id="modal_lab">';
          while($stmt->fetch()){ 
            //echo '<input type="hidden" id="uputnicanivo" name="uputnicanivo" value="'.$nivo.'"/>';
           //echo '<option value="'.$idmzz.'">'.$nazivmzz.'</option>';
         echo  '<div class="list-group-item form-check" style="text-align:center;"><input type="checkbox" class="list-group-item" value="'.$nazivnuklearna.'" id="nuklearnausluga" name="line"/><label class="form-check-label for="lab">'.$nazivnuklearna.'</label>';
         echo '</div>';
        }
        echo '</div>';
        echo '<div class="modal-footer" >
        <button class="btn btn-info btn-sm" data-bs-target="#myModal2"  data-bs-toggle="modal" data-bs-dismiss="modal">'.$dugme31.'</button>
        <input class="btn btn-success btn-sm" type="submit" id="nuklearnasubmit" value="'.$dugme79.'"></div>'; 

           ?>
    
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="bui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme78;?></h4>
        </div>
        
        <?php
         
          
          $upit="SELECT * FROM patologija";
    
          $stmt = $db->prepare($upit);
          $stmt->execute();
          $stmt->store_result();
          //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
          $stmt->bind_result($idpatologija,$nazivpatologija,$knaziv);
          echo '<label class="list-group-item" style="text-align:center;">Laboratorij</label>';
          echo '<div id="modal_lab">';
          while($stmt->fetch()){ 
            //echo '<input type="hidden" id="uputnicanivo" name="uputnicanivo" value="'.$nivo.'"/>';
           //echo '<option value="'.$idmzz.'">'.$nazivmzz.'</option>';
         echo  '<div class="list-group-item form-check" style="text-align:center;"><input type="checkbox" class="list-group-item" value="'.$nazivpatologija.'" id="patologijausluga" name="line"/><label class="form-check-label for="lab">'.$nazivpatologija.'</label>';
         echo '</div>';
        }
        echo '</div>';
        echo '<div class="modal-footer" >
        <button class="btn btn-info btn-sm" data-bs-target="#myModal2"  data-bs-toggle="modal" data-bs-dismiss="modal">'.$dugme31.'</button>
        <input class="btn btn-success btn-sm" type="submit" id="patologijasubmit" value="'.$dugme79.'"></div>'; 

           ?>
    
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="cui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme78;?></h4>
        </div>
        
        <?php
         
          
          $upit="SELECT * FROM mikrobiologija";
    
          $stmt = $db->prepare($upit);
          $stmt->execute();
          $stmt->store_result();
          //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
          $stmt->bind_result($idmikrobiologija,$nazivmikrobiologija,$knaziv);
          echo '<label class="list-group-item" style="text-align:center;">Laboratorij</label>';
          echo '<div id="modal_lab">';
          while($stmt->fetch()){ 
            //echo '<input type="hidden" id="uputnicanivo" name="uputnicanivo" value="'.$nivo.'"/>';
           //echo '<option value="'.$idmzz.'">'.$nazivmzz.'</option>';
         echo  '<div class="list-group-item form-check" style="text-align:center;"><input type="checkbox" class="list-group-item" value="'.$nazivmikrobiologija.'" id="mikrobiologijausluga" name="line"/><label class="form-check-label for="lab">'.$nazivmikrobiologija.'</label>';
         echo '</div>';
        }
        echo '</div>';
        echo '<div class="modal-footer" >
        <button class="btn btn-info btn-sm" data-bs-target="#myModal2"  data-bs-toggle="modal" data-bs-dismiss="modal">'.$dugme31.'</button>
        <input class="btn btn-success btn-sm" type="submit" id="mikrobiologijasubmit" value="'.$dugme79.'"></div>'; 

           ?>
    
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="dui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme78;?></h4>
        </div>
        
        <?php
         
          
          $upit="SELECT * FROM transfuzija";
    
          $stmt = $db->prepare($upit);
          $stmt->execute();
          $stmt->store_result();
          //$stmt->bind_result($id,$osoba,$datum,$vrijeme,$opis,$naziv,$mznaziv);
          $stmt->bind_result($idtransfuzija,$nazivtransfuzija,$knaziv);
          echo '<label class="list-group-item" style="text-align:center;">Laboratorij</label>';
          echo '<div id="modal_lab">';
          while($stmt->fetch()){ 
            //echo '<input type="hidden" id="uputnicanivo" name="uputnicanivo" value="'.$nivo.'"/>';
           //echo '<option value="'.$idmzz.'">'.$nazivmzz.'</option>';
         echo  '<div class="list-group-item form-check" style="text-align:center;"><input type="checkbox" class="list-group-item" value="'.$nazivtransfuzija.'" id="transfuzijausluga" name="line"/><label class="form-check-label for="lab">'.$nazivtransfuzija.'</label>';
         echo '</div>';
        }
        echo '</div>';
        echo '<div class="modal-footer" >
        <button class="btn btn-info btn-sm" data-bs-target="#myModal2"  data-bs-toggle="modal" data-bs-dismiss="modal">'.$dugme31.'</button>
        <input class="btn btn-success btn-sm" type="submit" id="transfuzijasubmit" value="'.$dugme79.'"></div>'; 

           ?>
    
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" id="kui">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme36;?></h4>
        </div>
      <div id="unesitekst">  
        </div>
        <button class="btn btn-sm btn-info col-lg-12" id="dugmeunesitekst" name="dugmeunesitekst"><?php echo $dugme57; ?></button>
        
      </div>
     
      
      
    </div>
  </div>
  <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatv"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dugme76;?></h4>
        </div>
     
  <div id="prikaz"></div>
     
      </div>
      <div class="modal-footer" >
      </div>
    </div>
  </div>
</div>




<div class="container-fluid" >
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light  sidebar collapse" >
      <div class="position-sticky pt-3 text-white">
        <ul class="nav flex-column text-white">
 
          <?php
          include('db.php');
          $upit = "SELECT financije.cijena,financije.eko,financije.datum,financije.ured FROM financije WHERE financije.eko=1 AND financije.datum = '$datum_datum' AND financije.ured=$level" ; 
          $izjava = $db->prepare($upit) ;
         $izjava->execute();
         $izjava->store_result();
         $izjava->bind_result($cijena,$eko,$datum,$ured);
         $prihod=0;
         while($izjava->fetch()){
          
        //  $prihod +=$cijena;
         
          }
          
         $upit = "SELECT financije.cijena,financije.eko,financije.datum,financije.ured FROM financije WHERE financije.eko=0 AND financije.datum = '$datum_datum' AND financije.ured=$level" ; 
         $izjava = $db->prepare($upit) ;
         $izjava->execute();
         $izjava->store_result();
         $izjava->bind_result($cijena,$eko,$datum,$ured);
         $rashod=0;
         while($izjava->fetch()){
        
         $rashod +=$cijena;
         
          }
          $bilansa=$prihod-$rashod;
          include('db.php');
$upit = "SELECT * FROM mz WHERE id=$level" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($idd,$naziv,$adresa,$telefon,$email,$ured,$podrucjeid,$nivo);
while($izjava->fetch()){ 
          
          echo '
          
          <form action="aplikacija.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/dashboard.svg" style="width:25px;"></span>'.' '.$dugme26.'</button>
              </a>
          </li></form>
          <form action="stranica.php" method="post">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$prosla_prosla.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$prosla_prosla.'</button> 
            </a>
          </li></form>
          <form action="stranica.php" method="post">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$predprosla_predprosla.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$predprosla_predprosla.'</button>
            </a>
          </li></form>
          <form action="stranica.php" method="post">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadtreca_unazadtreca.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
              
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadtreca_unazadtreca.'</button>
            </a>
          </li></form>
          <form action="stranica.php" method="post">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadcetvrta_unazadcetvrta.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadcetvrta_unazadcetvrta.'</button>
            </a>
          </li></form>
          <form action="stranica.php" method="post">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadpeta_unazadpeta.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadpeta_unazadpeta.'</button>
            </a>
          </li></form>
          <form action="stranica.php" method="post">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadsesta_unazadsesta.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
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
          <form action="stranica.php" method="post">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadsedma_unazadsedma.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsedma_unazadsedma.'</button>
                 </a>
               </li></form>
               <form action="stranica.php" method="post">
               <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$unazadosma_unazadosma.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadosma_unazadosma.'</button>
                 </a>
               </li></form>
               <form action="stranica.php" method="post">
               <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$level.'" id="level" name="level">
               <input type="hidden" value="'.$name.'" id="ime" name="ime">
               <input type="hidden" value="'.$unazaddeveta_unazaddeveta.'" id="slika" name="slika">
               <input type="hidden" value="'.$userid.'" id="userid" name="userid">
               <input type="hidden" value="'.$password.'" id="password" name="password">
               <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
               <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                    <li class="nav-item">
                      <a class="nav-link">
                      <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddeveta_unazaddeveta.'</button>
                      </a>
                    </li></form>
                    <form action="stranica.php" method="post">
                    <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                    <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                    <input type="hidden" value="'.$level.'" id="level" name="level">
                    <input type="hidden" value="'.$name.'" id="ime" name="ime">
                    <input type="hidden" value="'.$unazaddeseta_unazaddeseta.'" id="slika" name="slika">
                    <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                    <input type="hidden" value="'.$password.'" id="password" name="password">
                    <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                    <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                         <li class="nav-item">
                           <a class="nav-link">
                           <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddeseta_unazaddeseta.'</button>
                           </a>
                         </li></form>
                         <form action="stranica.php" method="post">
                         <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                         <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                         <input type="hidden" value="'.$level.'" id="level" name="level">
                         <input type="hidden" value="'.$name.'" id="ime" name="ime">
                         <input type="hidden" value="'.$unazadjedanaesta_unazadjedanaesta.'" id="slika" name="slika">
                         <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                         <input type="hidden" value="'.$password.'" id="password" name="password">
                         <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                         <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                              <li class="nav-item">
                                <a class="nav-link">
                                <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadjedanaesta_unazadjedanaesta.'</button>
                                </a>
                              </li></form>
                              <form action="stranica.php" method="post">
                              <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                              <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                              <input type="hidden" value="'.$level.'" id="level" name="level">
                              <input type="hidden" value="'.$name.'" id="ime" name="ime">
                              <input type="hidden" value="'.$unazaddvanesta_unazaddvanesta.'" id="slika" name="slika">
                              <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                              <input type="hidden" value="'.$password.'" id="password" name="password">
                              <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                              <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                   <li class="nav-item">
                                     <a class="nav-link">
                                     <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddvanesta_unazaddvanesta.'</button>
                                     </a>
                                   </li></form>
                                   <form action="stranica.php" method="post">
                                   <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                                   <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                   <input type="hidden" value="'.$level.'" id="level" name="level">
                                   <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                   <input type="hidden" value="'.$unazadtrinesta_unazadtrinesta.'" id="slika" name="slika">
                                   <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                   <input type="hidden" value="'.$password.'" id="password" name="password">
                                   <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                                   <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                        <li class="nav-item">
                                          <a class="nav-link">
                                          <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadtrinesta_unazadtrinesta.'</button>
                                          </a>
                                        </li></form>
                                        <form action="stranica.php" method="post">
                                        <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                                        <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                        <input type="hidden" value="'.$level.'" id="level" name="level">
                                        <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                        <input type="hidden" value="'.$unazadcetrnesta_unazadcetrnesta.'" id="slika" name="slika">
                                        <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                        <input type="hidden" value="'.$password.'" id="password" name="password">
                                        <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                                        <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                             <li class="nav-item">
                                               <a class="nav-link">
                                               <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadcetrnesta_unazadcetrnesta.'</button>
                                               </a>
                                             </li></form>
                                             <form action="stranica.php" method="post">
                                             <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                                             <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                             <input type="hidden" value="'.$level.'" id="level" name="level">
                                             <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                             <input type="hidden" value="'.$unazadpetnesta_unazadpetnesta.'" id="slika" name="slika">
                                             <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                             <input type="hidden" value="'.$password.'" id="password" name="password">
                                             <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                                             <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                                  <li class="nav-item">
                                                    <a class="nav-link">
                                                    <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadpetnesta_unazadpetnesta.'</button>
                                                    </a>
                                                  </li></form>
                                                  <form action="stranica.php" method="post">
                                                  <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                                                  <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                                  <input type="hidden" value="'.$level.'" id="level" name="level">
                                                  <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                                  <input type="hidden" value="'.$unazadsestnesta_unazadsestnesta.'" id="slika" name="slika">
                                                  <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                                  <input type="hidden" value="'.$password.'" id="password" name="password">
                                                  <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                                                  <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                                       <li class="nav-item">
                                                         <a class="nav-link">
                                                         <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsestnesta_unazadsestnesta.'</button>
                                                         </a>
                                                       </li></form>
                                                       <form action="stranica.php" method="post">
                                                       <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
                                                       <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
                                                       <input type="hidden" value="'.$level.'" id="level" name="level">
                                                       <input type="hidden" value="'.$name.'" id="ime" name="ime">
                                                       <input type="hidden" value="'.$unazadsedamnesta_unazadsedamnesta.'" id="slika" name="slika">
                                                       <input type="hidden" value="'.$userid.'" id="userid" name="userid">
                                                       <input type="hidden" value="'.$password.'" id="password" name="password">
                                                       <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
                                                       <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
                                                            <li class="nav-item">
                                                              <a class="nav-link">
                                                              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsedamnesta_unazadsedamnesta.'</button>
                                                              </a>
                                                            </li></form>
                                                       
               </ul></li>';
          echo '<form action="tcpdf/examples/aplikacijaizvjesce.php" method="post" target="_blank">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span>'.' '.$dugme10.'</button>
            </a>
          </li></form>
       
          <form action="tcpdf/examples/aplikacijamoje.php" method="post" target="_blank">
          <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$level.'" id="level" name="level">
          <input type="hidden" value="'.$name.'" id="ime" name="ime">
          <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
          <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$password.'" id="password" name="password">
          <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
          <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span>'.' '.$dugme38.'</button>
            </a>
          </li></form>
<form action="grafika4.php" method="post" target="_blank">
<input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
<input type="hidden" value="'.$datum_datum.'" name="slika" id="slika"/>
<input type="hidden" value="'.$level.'" name="mjesniid" id="mjesniid"/>    
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span>'.' '.$dugme12.'</button>
              </a>
          </li></form>
          ';?>
          
          <!-- <form action="grafika13.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$datum_datum.'" name="slika" id="slika"/>
    <input type="hidden" value="'.$prihod.'" name="prihod" id="prihod"/>
   <input type="hidden" value="'.$rashod.'" name="rashod" id="rashod"/>
  <input type="hidden" value="'.$level.'" name="mjesniid" id="mjesniid"/>  
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/exchange.svg" style="width:25px;"></span>'.' '.$dugme39.'</button>
            </a>
          </li></form> -->
          
          <?php
        echo '</ul>
          <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="gradovi.php"><img src="images/izlaz1.svg" class="img img-responsive" style="width:35px;"/></a>
    </li>
  </ul>
</div></nav>';


         echo '<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           <h1 class="h2">'.$naziv.'</h1>
           <div class="btn-toolbar mb-2 mb-md-0">
           
           <form action="aplikacijadozvole.php" method="POST">
           <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
           <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
           <input type="hidden" value="'.$userid.'" id="userid" name="userid">
           <input type="hidden" value="'.$password.'" id="password" name="password">
           <div class="btn-group me-2">
           
           </form>
          
               <button type="button" class="btn btn-sm btn-outline-secondary" id="unosno" name="unosno" >'.$dugme36.'</button>
               <button type="button" class="btn btn-sm btn-outline-secondary" id="izvjesno" name="izvjesno">'.$dugme37.'</button>
             </div>
           <div class="btn-group me-2">
           <form action="pretraga.php" method="POST">
           <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
           <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
           <input type="hidden" value="0" id="searchtype" name="searchtype"/>
           <input type="hidden" value="0" id="searchterm" name="searchterm"/>
           <input type="hidden" value="'.$ured.'" id="ured" name="ured"/>
           <input type="hidden" value="1" name="tip" id="tip"/>
           <input type="hidden" value="'.$level.'" id="level" name="level">
           <input type="hidden" value="'.$name.'" id="ime" name="ime">
           <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
           <input type="hidden" value="'.$userid.'" id="userid" name="userid">
           <input type="hidden" value="'.$password.'" id="password" name="password">
           <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
           <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
           <button type="submit" class="btn btn-sm btn-outline-secondary"><span class="badge rounded-pill bg-primary"><img src="images/plus-circle.svg" ></span>
           </button>
           </form>
           <form action="pretraga.php" method="POST">
           <input type="hidden" value="'.$nivo.'" id="nivo" name="nivo">
           <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
           <input type="hidden" value="0" id="searchtype" name="searchtype"/>
           <input type="hidden" value="0" id="searchterm" name="searchterm"/>
           <input type="hidden" value="'.$ured.'" id="ured" name="ured"/>
           <input type="hidden" value="0" name="tip" id="tip"/>
           <input type="hidden" value="'.$level.'" id="level" name="level">
           <input type="hidden" value="'.$name.'" id="ime" name="ime">
           <input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">
           <input type="hidden" value="'.$userid.'" id="userid" name="userid">
           <input type="hidden" value="'.$password.'" id="password" name="password">
           <input type="hidden" value="'.$iddd.'" id="idkorisnika" name="idkorisnika">
           <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje">
           <button type="submit" class="btn btn-sm btn-outline-secondary"><span class="badge rounded-pill bg-danger"><img src="images/dash.svg" ></span></button>
           </form>
            </div> 
          </div>
          
         </div>
         

   ';
   
   
    
  }

if($nivo==0) { 
//$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN uputnica ON uputnica.id_ambulante=financije.ured WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND (financije.ured=$level OR uputnica.id_mz=$level) ORDER BY vrjeme DESC" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id  WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND financije.ured=$level ORDER BY financije.vrjeme DESC" ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
 $izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slikat,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$stacionar,$iddoktor1,$nazivvdoktor,$mznaziv);
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivvdoktor,$mznaziv,$iduputnica,$idpacijenta,$idpodrucja,$idmz,$idambulante,$opis,$status);
echo    '<div class="table-responsive" id="tablicanaruci">
        <table class="table table-sm table-striped table-bordered col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <thead class="alert alert-warning">
            <tr>
            
            <th>'.$dugme32.'</th>
            <th>'.$dugme76.'</th>
       <th><span><img src="images/man.svg" style="width:15px;"> '.$dugme19.'</span></th>
       <th><span><img src="images/calendarr.svg" style="width:15px;"> '.$dugme23.'</span></th>
       <th><span><img src="images/clock.png" style="width:15px;"> '.$dugme27.'</span></th>
       <th><span><img src="images/nodoctor.png" style="width:15px;"> '.$dugme68.'</span></th>
      
              
            </tr>
          </thead>';


  while($izjava->fetch()){  

    echo '<tbody>';
    
    echo   '<tr id="'.$id.'" >';
    
             if($eko==1){
               echo '<td ><span class="badge rounded-pill bg-primary"><img src="images/plus-circle.svg" ></span></td>';
             }else{
               echo '<td><span class="badge rounded-pill bg-danger"><img src="images/dash.svg" ></span></td>';
             }
             echo       '<td>'.$id.'</td>';
             echo '<td>'.$osoba.'</td>';  
            if($datum=='2021-01-01'){
           echo '
      <td>0000-00-00</td>';
      }else{
           echo '
      <td>'.$datum.'</td>';
      }
           echo  '<td>'.$vrijeme.'</td>';
           echo  '<td>'.$nazivvdoktor.'</td>';
      
      
};
echo    '</tr>';
      
echo '</tbody>
</table></div>';  
//$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id  WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND financije.ured=$level ORDER BY vrjeme DESC" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 //$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN uputnica ON financije.id=uputnica.id_pacijenta WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND financije.ured=$level ORDER BY vrjeme DESC" ;
 $upit = "SELECT * FROM uputnica LEFT JOIN financije ON financije.id=id_pacijenta LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN mz ON uputnica.id_ambulante=mz.id WHERE  financije.datum='$datum_datum' AND uputnica.id_mz=$level";
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivdoktor,$devednest,$iduputnica,$idpacijenta,$idpodrucja,$idmz,$idambulante,$opis,$status);
//$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivvdoktor,$mznaziv);
$izjava->bind_result($id,$id_pacijenta,$id_podrucja,$id_mz,$id_ambulante,$opis,$status,$niz,$datumunosa,$datumtermina,$vrjemetermina,$hitno,$zakljucaj,$id_doktor,$idfinancije,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucja,$nazivdoktor,$uputnica,$stacionar,$iddoktor,$nazivvdoktor,$idmzdoktor,$mzid,$mznaziv,$mzadresa,$mztelefon,$mzemail,$mzured,$mzpodrucjeid,$mznivo);
echo    '<div class="table-responsive" id="tablica">
        <div class="caption"><table class="table table-sm  table-bordered col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <thead class="alert alert-info">
            <tr>
            
            <th>'.$dugme32.'</th>
            <th>'.$dugme76.'</th>
       <th><span><img src="images/man.svg" style="width:15px;"> '.$dugme19.'</span></th>
       <th><span><img src="images/calendarr.svg" style="width:15px;"> '.$dugme23.'</span></th>
       <th><span><img src="images/clock.png" style="width:15px;"> '.$dugme27.'</span></th>
       <th><span><img src="images/nodoctor.png" style="width:15px;"> '.$dugme68.'</span></th>
       <th><span><img src="images/clinic.png" style="width:15px;"> '.$dugme7.'</span></th>
         
            </tr>
          </thead>';
while($izjava->fetch()){  

     echo '<tbody>';
     if($hitno==0){
      echo   '<tr id="'.$id.'" >';
     }else{
      echo   '<tr id="'.$id.'" class="alert alert-danger">';
     }
     
     
              if($status==1){
                echo '<td ><span class="badge rounded-pill bg-primary"><img src="images/plus-circle.svg" ></span></td>';
              }else{
                echo '<td><span class="badge rounded-pill bg-danger"><img src="images/dash.svg" ></span></td>';
              }
              echo       '<td>'.$id.'</td>';
              echo '<td>'.$osoba.'</td>';  
             if($datum=='2021-01-01'){
            echo '
       <td>0000-00-00</td>';
       }else{
            echo '
       <td>'.$datum.'</td>';
       }
            echo  '<td>'.$vrijeme.'</td>';
            echo  '<td>'.$nazivvdoktor.'</td>';
            echo  '<td>'.$mznaziv.'</td>';
            
       
};
echo    '</tr>
       
</tbody>
</table>';
echo '</div></div>
</main>
';
}else if($nivo==7){
  //$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id  WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND financije.ured=$level ORDER BY vrjeme DESC" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kososba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 //$upit = "SELECT * FROM uputnica LEFT JOIN financije ON financije.id=id_pacijenta LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN mz ON uputnica.id_mz=mz.id WHERE uputnica.id_ambulante=$level AND (uputnica.datum_termina='$datum_datum' OR uputnica.status=0)";
 //$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN uputnica ON uputnica.id_pacijenta=financije.id WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND (financije.ured=$level OR uputnica.id_ambulante=$level) ORDER BY vrjeme DESC" ;
 $upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN mz ON financije.uputnica=mz.id  WHERE  financije.ured=$level AND financije.stacionar is null ORDER BY financije.vrjeme DESC" ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
 $izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slikat,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$stacionar,$iddoktor1,$nazivvdoktor,$mznaziv,$idmz,$mznaziv1,$mzadresa,$mztelefon,$mzemail,$mzured,$mzpodrucjeid,$mznivo);
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivvdoktor,$mznaziv,$iduputnica,$idpacijenta,$idpodrucja,$idmz,$idambulante,$opis,$status);
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivdoktor,$devednest);
//$izjava->bind_result($id,$id_pacijenta,$id_podrucja,$id_mz,$id_ambulante,$opis,$status,$niz,$datumunosa,$datumtermina,$vrjemetermina,$hitno,$zakljucaj,$id_doktor,$idfinancije,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucja,$nazivdoktor,$uputnica,$iddoktor,$nazivvdoktor,$idmzdoktor,$mzid,$mznaziv,$mzadresa,$mztelefon,$mzemail,$mzured,$mzpodrucjeid,$mznivo);
echo    '<div class="table-responsive" id="tablicastacionar">
        <table class="table table-sm table-striped table-bordered col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <thead class="alert alert-warning">
            <tr >
            
        
       <th><span><img src="images/man.svg" style="width:15px;"> '.$dugme19.'</span></th>
       <th><span><img src="images/calendarr.svg" style="width:15px;"> '.$dugme76.'</span></th>
       <th><span><img src="images/clock.png" style="width:15px;"> '.$dugme28.'</span></th>
       <th><span><img src="images/nodoctor.png" style="width:15px;"> '.$dugme68.'</span></th>
       <th><span><img src="images/clinic.png" style="width:15px;"> '.$dugme18.'</span></th>
            
            </tr>
          </thead>';
          //$brojac=0;
while($izjava->fetch()){  
//$brojac++;
     echo '<tbody><tr id="'.$id.'" name="'.$id.'">';

              //echo       '<td>'.$id.'</td>';
              //echo '<td><input name="'.$id.'" value="'.$dugme57.'"  class="btn btn-sm btn-primary"></td>';
              //echo '<td><input type="hidden" value="'.$id.'" name="stacionarid" id="stacionarid"></td>'; 
              echo '<td>'.$osoba.'</td>'; 
              echo '<td>'.$datum.'</td>';  
     echo '<td>'.$vrijeme.'</td>';
            //echo  '<td>'.$vrijeme.'</td>';
            echo  '<td>'.$nazivvdoktor.'</td>';
            echo  '<td>'.$mznaziv1.'</td>';
            //echo  '<td>'.$id.'</td>';
            
};
echo    '</tr>
       
</tbody>
</table>
</div>
</main>
</div>
</div>';
}else if($nivo==8 || $nivo==9){
  //$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id  WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND financije.ured=$level ORDER BY vrjeme DESC" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kososba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 //$upit = "SELECT * FROM uputnica LEFT JOIN financije ON financije.id=id_pacijenta LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN mz ON uputnica.id_mz=mz.id WHERE uputnica.id_ambulante=$level AND (uputnica.datum_termina='$datum_datum' OR uputnica.status=0)";
 //$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN uputnica ON uputnica.id_pacijenta=financije.id WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND (financije.ured=$level OR uputnica.id_ambulante=$level) ORDER BY vrjeme DESC" ;
 $upit = "SELECT stacionar.id,stacionar.id_pacijenta,stacionar.klinikaid,stacionar.odjelid,stacionar.datumprijema,financije.id,financije.osoba,mz.id,mz.naziv,doktori.id,doktori.doktorr FROM stacionar LEFT JOIN financije ON stacionar.id_pacijenta=financije.id LEFT JOIN mz ON financije.uputnica=mz.id LEFT JOIN doktori ON financije.doktor=doktori.id WHERE  stacionar.odjelid=$level" ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
 $izjava->bind_result($id,$id_pacijenta,$klinikaid,$odjelid,$datumprijema,$financijeid,$financijeosoba,$mzid,$mznaziv,$doktoriid,$doktorinaziv);
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivvdoktor,$mznaziv,$iduputnica,$idpacijenta,$idpodrucja,$idmz,$idambulante,$opis,$status);
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivdoktor,$devednest);
//$izjava->bind_result($id,$id_pacijenta,$id_podrucja,$id_mz,$id_ambulante,$opis,$status,$niz,$datumunosa,$datumtermina,$vrjemetermina,$hitno,$zakljucaj,$id_doktor,$idfinancije,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucja,$nazivdoktor,$uputnica,$iddoktor,$nazivvdoktor,$idmzdoktor,$mzid,$mznaziv,$mzadresa,$mztelefon,$mzemail,$mzured,$mzpodrucjeid,$mznivo);
echo    '<div class="table-responsive" id="tablicastacionar1">
        <table class="table table-sm table-striped table-bordered col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <thead class="alert alert-warning">
            <tr >
            
        <th></th>
       <th><span><img src="images/man.svg" style="width:15px;"> '.$dugme19.'</span></th>
      
       
       <th><span><img src="images/nodoctor.png" style="width:15px;"> '.$dugme68.'</span></th>
       <th><span><img src="images/clinic.png" style="width:15px;"> '.$dugme18.'</span></th>
            
            </tr>
          </thead>';
          $brojac=0;
while($izjava->fetch()){  
$brojac++;
     echo '<tbody><tr id="'.$id_pacijenta.'" name="'.$id.'">';

              echo       '<td>'.$brojac.'</td>';
              //echo '<td><input name="'.$id.'" value="'.$dugme57.'"  class="btn btn-sm btn-primary"></td>';
              //echo '<td><input type="hidden" value="'.$id.'" name="stacionarid" id="stacionarid"></td>'; 
              echo '<td>'.$financijeosoba.'</td>'; 
               
     
            //echo  '<td>'.$vrijeme.'</td>';
            echo  '<td>'.$doktorinaziv.'</td>';
            echo '<td>'.$mznaziv.'</td>';
           // echo  '<td>'.$odjelid.'</td>';
            //echo  '<td>'.$id.'</td>';
            
};
echo    '</tr>
       
</tbody>
</table>';
?>

<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        

      </div>
    <div id="pacijentodjel">
    
 
      </div>
      <div class="modal-footer" >
  
      
        <!-- <button class="btn btn-secondary btn-sm" id="odustatiti" name="odustatiti" data-dismiss="modal" style="float:left;"><?php echo $dugme63;?></button>  -->
        <button class="btn btn-warning btn-sm btn-xs-3" id="konzilijarni" name="konzilijarni" style="float:left;" ><?php echo ' <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje"> '; ?><?php echo $dugme99;?></button>
        <button class="btn btn-primary btn-sm btn-xs-3" id="premjestaj" name="premjestaj"><?php echo ' <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje"> '; ?><?php echo $dugme100;?></button>
        <form action="tcpdf/examples/otpusno.php" method="POST" id="forma_otpusnog" target="_blank" >
          <?php echo ' <input type="hidden" value="'.$podrucje.'" id="podrucje" name="podrucje"> '; ?>
          <?php echo '<input type="hidden" value="'.$datum_datum.'" id="slika" name="slika">'; ?>
          <?php echo '<input type="hidden" value="'.$ured.'" id="ured" name="ured"/>'; ?>
          <?php echo '<input type="hidden" value="'.$level.'" id="level" name="level">'; ?>
          <?php echo '<input type="hidden" value="'.$name.'" id="ime" name="ime">'; ?>
          <?php echo '<input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>'; ?>
          <?php echo '<input type="hidden" value="'.$id.'" name="idstacionar" id="idstacionar" style="float:left;"/>'    ?>
          <input id="otpusnopismo" type="submit"  name="otpusnopismo" value="<?php echo $dugme69;?>" class="btn btn-success btn-sm btn-xs-3"  />
        </form>
         <!-- <input id="otpusnopismo" type="submit"  name="otpusnopismo" value="<?php echo $dugme69;?>" class="btn btn-success btn-sm" /> -->
         <!-- <button class="btn btn-success btn-sm" id="otpusnopismo" name="otpusnopismo"><?php echo $dugme69;?></button>  -->
      
        <button class="btn btn-danger btn-sm" id="azurirajotpusno" name="azurirajotpusno"><?php echo $dugme65;?></button>
        
      
      </div>
    </div>
  </div>
</div>
<?php
$upit = "SELECT * FROM uputnica LEFT JOIN financije ON financije.id=id_pacijenta LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN mz ON uputnica.id_ambulante=mz.id WHERE  financije.datum='$datum_datum' AND uputnica.id_mz=$level";
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivdoktor,$devednest,$iduputnica,$idpacijenta,$idpodrucja,$idmz,$idambulante,$opis,$status);
//$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivvdoktor,$mznaziv);
$izjava->bind_result($id,$id_pacijenta,$id_podrucja,$id_mz,$id_ambulante,$opis,$status,$niz,$datumunosa,$datumtermina,$vrjemetermina,$hitno,$zakljucaj,$id_doktor,$idfinancije,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucja,$nazivdoktor,$uputnica,$stacionar,$iddoktor,$nazivvdoktor,$idmzdoktor,$mzid,$mznaziv,$mzadresa,$mztelefon,$mzemail,$mzured,$mzpodrucjeid,$mznivo);
echo    '<div class="table-responsive" id="tablica">
        <div class="caption"><table class="table table-sm  table-bordered col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <thead class="alert alert-info">
            <tr>
            
            <th>'.$dugme32.'</th>
            <th>'.$dugme76.'</th>
       <th><span><img src="images/man.svg" style="width:15px;"> '.$dugme19.'</span></th>
       <th><span><img src="images/calendarr.svg" style="width:15px;"> '.$dugme23.'</span></th>
       <th><span><img src="images/clock.png" style="width:15px;"> '.$dugme27.'</span></th>
       <th><span><img src="images/nodoctor.png" style="width:15px;"> '.$dugme68.'</span></th>
       <th><span><img src="images/clinic.png" style="width:15px;"> '.$dugme7.'</span></th>
         
            </tr>
          </thead>';
while($izjava->fetch()){  

     echo '<tbody>';
     if($hitno==0){
      echo   '<tr id="'.$id.'" >';
     }else{
      echo   '<tr id="'.$id.'" class="alert alert-danger">';
     }
     
     
              if($status==1){
                echo '<td ><span class="badge rounded-pill bg-primary"><img src="images/plus-circle.svg" ></span></td>';
              }else{
                echo '<td><span class="badge rounded-pill bg-danger"><img src="images/dash.svg" ></span></td>';
              }
              echo       '<td>'.$id.'</td>';
              echo '<td>'.$osoba.'</td>';  
             if($datum=='2021-01-01'){
            echo '
       <td>0000-00-00</td>';
       }else{
            echo '
       <td>'.$datum.'</td>';
       }
            echo  '<td>'.$vrijeme.'</td>';
            echo  '<td>'.$nazivvdoktor.'</td>';
            echo  '<td>'.$mznaziv.'</td>';
            
       
};
echo    '</tr>
       
</tbody>
</table>';
echo '</div></div>
</main>
';
echo'</div>
</main>
</div>
</div>';
}else{
  //$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id  WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND financije.ured=$level ORDER BY vrjeme DESC" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kososba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $upit = "SELECT * FROM uputnica LEFT JOIN financije ON financije.id=id_pacijenta LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN mz ON uputnica.id_mz=mz.id WHERE uputnica.id_ambulante=$level AND (uputnica.datum_termina='$datum_datum' OR uputnica.status=0)";
 //$upit = "SELECT * FROM financije LEFT JOIN doktori ON financije.doktor=doktori.id LEFT JOIN uputnica ON uputnica.id_pacijenta=financije.id WHERE (financije.datum ='$datum_datum' OR datum = '2021-01-01')  AND (financije.ured=$level OR uputnica.id_ambulante=$level) ORDER BY vrjeme DESC" ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivvdoktor,$mznaziv,$iduputnica,$idpacijenta,$idpodrucja,$idmz,$idambulante,$opis,$status);
 //$izjava->bind_result($id,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucje,$doktor1,$uputnica,$iddoktor1,$nazivdoktor,$devednest);
$izjava->bind_result($id,$id_pacijenta,$id_podrucja,$id_mz,$id_ambulante,$opis,$status,$niz,$datumunosa,$datumtermina,$vrjemetermina,$hitno,$zakljucaj,$id_doktor,$idfinancije,$osoba,$firma,$eko,$vrsta,$cijena,$datum,$vrijeme,$slika,$opis,$ured,$idkorisnika,$datumunosa,$idpodrucja,$nazivdoktor,$uputnica,$stacionar,$iddoktor,$nazivvdoktor,$idmzdoktor,$mzid,$mznaziv,$mzadresa,$mztelefon,$mzemail,$mzured,$mzpodrucjeid,$mznivo);
echo    '<div class="table-responsive" id="tablicanaruci">
        <table class="table table-sm table-striped table-bordered col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <thead class="alert alert-warning">
            <tr>
            
            <th>'.$dugme32.'</th>
            <th>'.$dugme20.'</th>
       <th><span><img src="images/man.svg" style="width:15px;"> '.$dugme19.'</span></th>
       <th><span><img src="images/calendarr.svg" style="width:15px;"> '.$dugme76.'</span></th>
       <th><span><img src="images/clock.png" style="width:15px;"> '.$dugme28.'</span></th>
       <th><span><img src="images/nodoctor.png" style="width:15px;"> '.$dugme68.'</span></th>
       <th><span><img src="images/clinic.png" style="width:15px;"> '.$dugme18.'</span></th>
            
            </tr>
          </thead>';
          //$brojac=0;
while($izjava->fetch()){  
//$brojac++;
     echo '<tbody>';
     if($hitno==0){
      echo   '<tr id="'.$id.'" >';
     }else{
      echo   '<tr id="'.$id.'" class="alert alert-danger">';
     }
     
              if($status==1){
                echo '<td ><span class="badge rounded-pill bg-primary"><img src="images/plus-circle.svg" ></span></td>';
              }else{
                echo '<td><span class="badge rounded-pill bg-danger"><img src="images/dash.svg" ></span></td>';
              }
              echo       '<td>'.$id.'</td>';
              echo '<td>'.$osoba.'</td>';
              echo '<td>'.$datumtermina.'</td>';  
     echo '<td>'.$vrjemetermina.'</td>';
            //echo  '<td>'.$vrijeme.'</td>';
            echo  '<td>'.$nazivvdoktor.'</td>';
            echo  '<td>'.$mznaziv.'</td>';
            //echo  '<td>'.$id.'</td>';
            
};
echo    '</tr>
       
</tbody>
</table>
</div>
</main>
</div>
</div>';
}
//echo '<input type="text" value="'.$_SESSION['valid_user'].'" id="sesija">';



//echo '<a href="aplikacija.php">ODJAVI SE</a>';
}else{
  include('db.php');

  $upit = "SELECT * FROM gradovi " ;
  //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
  $izjava = $db->prepare($upit) ;
  $izjava->execute();
  $izjava->store_result();
  // $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
  $izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
  while($izjava->fetch()){
    echo'<header class="navbar navbar-dark sticky-top bg-btn '.$boja.' flex-md-nowrap p-0 shadow">';
   }
?>

<?php echo '<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"><button class="btn-xs btn-warning"  id="unesilogo" name="unesilogo">'.$dugme55.'</button><input type="text"  placeholder="'.$dugme56.'" name="grad" id="grad" class="col-md-5 col-lg-5 " style="width:43%;"/><input  type="submit" class="btn-xs btn-primary" value="'.$dugme57.'" id="ubacigrad" name="ubacigrad"/></a>';?>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

  <form action="pretraga1admin.php" method="POST" class="form-control form-control-dark w-100">
  <?php
  //echo '<input type="hidden" value="'.$sesija.'" id="sesija" name="sesija">';
  
  echo'
  
  <input type="hidden" value="'.$userid.'" id="userid" name="userid">
  <input type="hidden" value="'.$password.'" id="password" name="password">
  <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
  <select type="text"  name="searchtype" autocomplete="on" placeholder="Uposlenik" class="form form-control" style="width:40%;">
  <option value="1">'.$dugme1.'</option>

  </select>
  <input  type="text" placeholder="'.$dugme2.'" aria-label="Search" style="width:28%;" class="form form-control" name="searchterm" autocomplete="off">
  <button type="submit" class="btn btn-secondary" style="margin-bottom:3px;">'.$dugme3.'</button>
  </form>
  <select  name="boja" id="boja">
  <option value="btn-info">'.$dugme40.'</option>
  <option value="btn-danger">'.$dugme41.'</option>
  <option value="btn-success">'.$dugme42.'</option>
  <option value="btn-warning">'.$dugme43.'</option>
  <option value="btn-primary">'.$dugme44.'</option>
  <option value="alert-info">'.$dugme45.'</option>
  <option value="alert-danger">'.$dugme46.'</option>
  <option value="alert-success">'.$dugme47.'</option>
  <option value="alert-warning">'.$dugme48.'</option>
  

  </select><input  type="submit" class="btn-xs btn-primary" value="'.$dugme58.'" id="promjeniboju" name="promjeniboju"/>';
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


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="izlaz1">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme36;?></h4>
        </div>
        <div class="modal-body" id="test11">
        <label for="podrucjenaziv" class="label label-primary"><?php echo $dugme16;?></label>
        <input type="text" class="form form-control" id="podrucjenaziv" name="podrucjenaziv"/>
        <label for="podrucjeadresa" class="label label-primary"><?php echo $dugme66;?></label>
        <input type="text" class="form form-control" id="podrucjeadresa" name="podrucjeadresa"/>
        <label for="podrucjetelefon" class="label label-primary"><?php echo $dugme14;?></label>
        <input type="text" class="form form-control" id="podrucjetelefon" name="podrucjetelefon"/>
        <label for="podrucjeemail" class="label label-primary"><?php echo $dugme67;?></label>
        <input type="text" class="form form-control" id="podrucjeemail" name="podrucjeemail"/>
        
        <input type="hidden" class="form form-control" id="podrucjeured" name="podrucjeured" value="0"/>
        
        
      
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz2" name="izlaz2"><?php echo $dugme63?></button>
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="<?php echo $dugme36?>" id="unesipodrucje" name="unesipodrucje"/>
          </form>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="quii">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme55;?></h4>
        </div>
        <form id="form1" action="ajaxupload1.php" method="post" enctype="multipart/form-data">'
        <div class="modal-body" id="test">
        
        <input id="uploadImage1" type="file"  name="image" value="'+ value['file_name'] +'" class="form form-control"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" id="quitt"><?php echo $dugme63;?></button>
          <input class="btn btn-success" type="submit" id="submitt" value="<?php echo $dugme36;?>">
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="izlaz5"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dugme65;?></h4>
      </div>
      <div class="modal-body">
      
     <div id="tekst5"></div>
      </div>
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
        <input type="submit" class="btn btn-danger" data-dismiss="modal" value="<?php echo $dugme64;?>" id="izbrisipodrucje" name="izbrisipodrucje" style="float:left;"/>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz36" name="izlaz36"><?php echo $dugme63;?></button>
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="<?php echo $dugme65;?>" id="promjenipodrucje" name="promjenipodrucje"/>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="izlaz7"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dugme64;?></h4>
      </div>
      <div class="modal-body">
      
     <p><?php echo $dugme64.'?';?></p>
      </div>
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
        
        <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz8" name="izlaz8"><?php echo $dugme63;?></button>
        <input type="submit" class="btn btn-danger" data-dismiss="modal" value="<?php echo $dugme64;?>" id="izbrisipodrucje1" name="izbrisipodrucje1"/>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="izlaz15"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dugme65;?></h4>
      </div>
      <div class="modal-body">
      
     <div id="tekst7"></div>
      </div>
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
        <input type="submit" class="btn btn-danger" data-dismiss="modal" value="<?php echo $dugme64;?>" id="izbrisitvrtku" name="izbrisitvrtku"/>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz16" name="izlaz16"><?php echo $dugme63;?></button>
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="<?php echo $dugme65;?>" id="promjenimz10" name="promjenimz10"/>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="izlaz11">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $dugme36;?></h4>
        </div>
        <div class="modal-body" id="test11">
        <label for="tvrtkanaziv" class="label label-primary"><?php echo $dugme20;?></label>
        <input type="text" class="form form-control" id="tvrtkanaziv" name="tvrtkanaziv"/>
        <label for="tvrtkaadresa" class="label label-primary"><?php echo $dugme66;?></label>
        <input type="text" class="form form-control" id="tvrtkaadresa" name="tvrtkaadresa"/>
        <label for="tvrtkatelefon" class="label label-primary"><?php echo $dugme14;?></label>
        <input type="text" class="form form-control" id="tvrtkatelefon" name="tvrtkatelefon"/>
        <label for="tvrtkaemail" class="label label-primary"><?php echo $dugme67;?></label>
        <input type="text" class="form form-control" id="tvrtkaemail" name="tvrtkaemail"/>
        
        <input type="hidden" class="form form-control" id="podrucjeured" name="podrucjeured" value="0"/>
        
        
      
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz2" name="izlaz22"><?php echo $dugme63?></button>
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="<?php echo $dugme36?>" id="unesitvrtkicu" name="unesitvrtkicu"/>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="izlaz77"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dugme64;?></h4>
      </div>
      <div class="modal-body">
      
     <p><?php echo $dugme64.'?';?></p>
      </div>
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
        
        <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz88" name="izlaz8"><?php echo $dugme63;?></button>
        <input type="submit" class="btn btn-danger" data-dismiss="modal" value="<?php echo $dugme64;?>" id="izbrisitvrtku1" name="izbrisipodrucje1"/>
       
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" >
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-sidebar collapse" >
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
       
        <?php
          echo '
          
          <form action="aplikacija.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
      <input type="hidden" name="userid" id="userid" value="'.$userid.'"/>
      <input type="hidden" name="password" id="password" value="'.$password.'">
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/money.svg" style="width:25px;"></span>'.' '.$dugme4.'</button>
              </a>
          </li></form>
          <form action="dozvoleadmin.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" name="userid" id="userid" value="'.$userid.'"/>
          <input type="hidden" name="password" id="password" value="'.$password.'"/>
    <input type="hidden" name="level" id="level" value="'.$level.'"/>
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/permission.svg" style="width:25px;"></span>'.' '.$dugme5.'</button>
              </a>
          </li></form>
       
          <form action="grafika2.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span>'.' '.$dugme6.'</button>
              </a>
          </li></form>
          <form action="grafika4.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span>'.' '.$dugme7.'</button>
              </a>
          </li></form>
          <li class="nav-item dropup">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span data-feather="home"><button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span>'.' '.$dugme8.'</button>
      
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>   
               <input type="hidden" value="'.$datum_datum.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$datum_datum.'</button>
                 </a>
               </li></form>
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$prosla_prosla.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$prosla_prosla.'</button>
                 </a>
               </li></form>
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$predprosla_predprosla.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$predprosla_predprosla.'</button>
                 </a>
               </li></form>
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadtreca_unazadtreca.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadtreca_unazadtreca.'</button>
                 </a>
               </li></form>
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadcetvrta_unazadcetvrta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadcetvrta_unazadcetvrta.'</button>
                 </a>
               </li></form>
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
               <input type="hidden" value="'.$unazadpeta_unazadpeta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadpeta_unazadpeta.'</button>
                 </a>
               </li></form>
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsesta_unazadsesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsesta_unazadsesta.'</button>
                 </a>
               </li></form>
          <form action="grafika6.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsedma_unazadsedma.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsedma_unazadsedma.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadosma_unazadosma.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadosma_unazadosma.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddeveta_unazaddeveta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazaddeveta_unazaddeveta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddeseta_unazaddeseta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazaddeseta_unazaddeseta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadjedanaesta_unazadjedanaesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadjedanaesta_unazadjedanaesta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddvanesta_unazaddvanesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazaddvanesta_unazaddvanesta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadtrinesta_unazadtrinesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadtrinesta_unazadtrinesta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadcetrnesta_unazadcetrnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadcetrnesta_unazadcetrnesta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadpetnesta_unazadpetnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadpetnesta_unazadpetnesta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsestnesta_unazadsestnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsestnesta_unazadsestnesta.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsedamnesta_unazadsedamnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsedamnesta_unazadsedamnesta.'</button>
                 </a>
               </li></form>
              
          </ul>
          <li class="nav-item dropup">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span data-feather="home"><button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span>'.' '.$dugme9.'</button>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$datum_datum.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$datum_datum.'</button>
                 </a>
               </li></form>
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$prosla_prosla.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$prosla_prosla.'</button>
                 </a>
               </li></form>
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$predprosla_predprosla.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$predprosla_predprosla.'</button>
                 </a>
               </li></form>
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadtreca_unazadtreca.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadtreca_unazadtreca.'</button>
                 </a>
               </li></form>
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
               <input type="hidden" value="'.$unazadcetvrta_unazadcetvrta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadcetvrta_unazadcetvrta.'</button>
                 </a>
               </li></form>
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadpeta_unazadpeta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadpeta_unazadpeta.'</button>
                 </a>
               </li></form>
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsesta_unazadsesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsesta_unazadsesta.'</button>
                 </a>
               </li></form>
          <form action="grafika5.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsedma_unazadsedma.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsedma_unazadsedma.'</button>
                 </a>
               </li></form>
               <form action="grafika6.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadosma_unazadosma.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadosma_unazadosma.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddeveta_unazaddeveta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazaddeveta_unazaddeveta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddeseta_unazaddeseta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazaddeseta_unazaddeseta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadjedanaesta_unazadjedanaesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadjedanaesta_unazadjedanaesta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddvanesta_unazaddvanesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazaddvanesta_unazaddvanesta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadtrinesta_unazadtrinesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadtrinesta_unazadtrinesta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadcetrnesta_unazadcetrnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadcetrnesta_unazadcetrnesta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadpetnesta_unazadpetnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadpetnesta_unazadpetnesta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsestnesta_unazadsestnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsestnesta_unazadsestnesta.'</button>
                 </a>
               </li></form>
               <form action="grafika5.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsedamnesta_unazadsedamnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/bar-chart.svg" style="width:25px;"></span> '.$unazadsedamnesta_unazadsedamnesta.'</button>
                 </a>
               </li></form>
              
          </ul> 
          <li class="nav-item dropup">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span data-feather="home"><button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span>'.' '.$dugme10.'</button>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$datum_datum.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$datum_datum.'</button>
                 </a>
               </li></form>
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$prosla_prosla.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$prosla_prosla.'</button>
                 </a>
               </li></form>
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$predprosla_predprosla.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$predprosla_predprosla.'</button>
                 </a>
               </li></form>
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadtreca_unazadtreca.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadtreca_unazadtreca.'</button>
                 </a>
               </li></form>
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadcetvrta_unazadcetvrta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadcetvrta_unazadcetvrta.'</button>
                 </a>
               </li></form>
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadpeta_unazadpeta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadpeta_unazadpeta.'</button>
                 </a>
               </li></form>
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsesta_unazadsesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadsesta_unazadsesta.'</button>
                 </a>
               </li></form>
          <form action="tcpdf/examples/sve.php" method="post" target="_blank">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsedma_unazadsedma.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadsedma_unazadsedma.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadosma_unazadosma.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadosma_unazadosma.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddeveta_unazaddeveta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazaddeveta_unazaddeveta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddeseta_unazaddeseta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazaddeseta_unazaddeseta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadjedanaesta_unazadjedanaesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadjedanaesta_unazadjedanaesta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazaddvanesta_unazaddvanesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazaddvanesta_unazaddvanesta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadtrinesta_unazadtrinesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadtrinesta_unazadtrinesta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadcetrnesta_unazadcetrnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadcetrnesta_unazadcetrnesta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadpetnesta_unazadpetnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadpetnesta_unazadpetnesta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsestnesta_unazadsestnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadsestnesta_unazadsestnesta.'</button>
                 </a>
               </li></form>
               <form action="tcpdf/examples/sve.php" method="post" target="_blank">
               <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
               <input type="hidden" value="'.$unazadsedamnesta_unazadsedamnesta.'" name="slika" id="slika"/> 
               <li class="nav-item">
                 <a class="nav-link">
                 <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span> '.$unazadsedamnesta_unazadsedamnesta.'</button>
                 </a>
               </li></form>
             
          </ul>
          
         <form action="korisnici1.php" method="post">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" name="userid" value="'.$userid.'"/>
          <input type="hidden" name="password" value="'.$password.'"/>
                    <input type="hidden" value="'.$datum_datum.'" name="slika" id="slika"/>
                    <input type="hidden" value="'.$id.'" name="mjesniid" id="mjesniid"/>    
                    <li class="nav-item">
                      
                    <a class="nav-link active">
                        <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/administrative.svg" style="width:25px;"></span>'.' '.$dugme60.'</button>
                        </a>
                    </li></form>
   
    <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="gradovi.php"><img src="images/izlaz1.svg" class="img img-responsive" style="width:35px;"/></a>
    </li>
  </ul>
        
      </div>
    </nav>

          ';
       
 
      echo '<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">'.$dugme4.'</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          
            <form action="dozvoleadmin.php" method="POST">
            <input type="hidden" value="'.$userid.'" id="userid" name="userid">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" value="'.$password.'" id="password" name="password">
            
            </form>
            <button type="button" class="btn btn-sm btn-primary" id="noviunos" name="noviunos" >'.$dugme36.'</button>
            
          </div>
       
         
        </div>
      </div>
'; 
include('db.php');
$upit = "SELECT * FROM gradovi" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
    while($izjava->fetch()){
      echo '<div class="thumbnail col-lg-12 col-md-12 col-xs-12 col-sm-12 " ><div class="caption"><table class="table '.$tablica1.' id="table2">
      <thead><select name="tablica1" id="tablica1" >
      <option value="table-bordered table-striped table-sm">'.$dugme49.'</option>
      <option value="table-bordered table-sm">'.$dugme50.'</option>
      <option value="table-striped table-sm">'.$dugme51.'</option>
      <option value="table-bordered table-striped table-md">'.$dugme52.'</option>
      <option value="table-bordered table-md">'.$dugme53.'</option>
      <option value="table-striped table-md">'.$dugme54.'</option>
      
      
      </select><input type="submit" value="'.$dugme58.'" id="promjenitablicu1" name="promjenitablicu1" class="btn-xs btn-primary" /></thead></table>
      <table id="table3" class="table '.$tablica2.'"><thead><th></th><th>'.$dugme13.'</th><th>'.$dugme14.'</th></thead>';
    }
$upit = "SELECT * FROM podrucni_ured " ;
//$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
$izjava = $db->prepare($upit) ;
$izjava->execute();
$izjava->store_result();
// $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
$izjava->bind_result($id,$naziv,$adresa,$telefon,$email);


while($izjava->fetch()){

   echo '<tr>
   <td id="0"><form action="starigradadmin1.php" method="POST"><input type="hidden" name="userid" id="userid" value="'.$userid.'"/>
   <input type="hidden" name="password" id="password" value="'.$password.'"><input type="hidden" value="'.$id.'" name="id" id="id"><input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/><span class="small"><input type="submit" value="'.$dugme15.'" class="btn btn-sm btn-success"></form></span></td>
    <td id="'.$id.'">'.$naziv.'</td>
    <td id="'.$id.'">'.$telefon.'</td>
    </tr>';
  
}
echo  '</table></div></div>';
 

// $upit = "SELECT * FROM mz WHERE ured=0 " ;
// //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
// $izjava = $db->prepare($upit) ;
// $izjava->execute();
// $izjava->store_result();
// // $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
// $izjava->bind_result($idf,$naziv,$adresa,$telefon,$email,$ured,$podrucje);
// echo '<div class="bd-example" id="kartica">
//       <div class="row  row-cols-1 row-cols-md-2 g-4">';
//       while($izjava->fetch()){ 
       
//         echo  '<div class="col">
//             <div class="card">
//               <img src="images/logo-foo.png" width="100%" height="250">
//               <div class="card-body">
//                 <h5 class="card-title">'.$naziv.'</h5>
//                 <p class="card-text">'.$adresa.'</p>
//                 ';
//       echo '<button class="btn btn-secondary" value="'.$idf.'" id="'.$idf.'">'.$idf.'</button>';
//              echo '</div>
//             </div>
//           </div>';
//       } 
//       echo'</div>
//       </div>';    


// $query="SELECT max(id) FROM podrucni_ured";
// $stmt = $db->prepare($query);
// $stmt->execute();
// //$stmt->store_result();
// // $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
// $stmt->bind_result($zadnjiid);
// while($stmt->fetch()){
// echo '<tr><td>'.$zadnjiid.'</td></tr>';
//  }
echo  '</table></div></div></div>'; 
}

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
    

    include('db.php');
    $upit = "SELECT * FROM gradovi" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
    while($izjava->fetch()){  
    
      echo '<main class="form-signin">
      <form method="POST" action="aplikacija.php">
        <img class="mb-4" src="'.$logo.'" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal"></h1>
        <label for="userid" class="visually-hidden">Korisničko ime</label>
        <input type="text" id="userid" class="form-control" placeholder="Korisničko ime" name="userid" autocomplete="off">
        <label for="password" class="visually-hidden">Lozinka</label>
        <input type="password" id="password" class="form-control" placeholder="Lozinka" required name="password" autocomplete="off">
        <label for="password" class="visually">Izaberi jezik</label><select class="form form-control" name="flexRadioDefault">';
        $upit = "SELECT id,naziv FROM jezici" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($ajdjezika,$nazivjezika);
    while($izjava->fetch()){  
        echo '
        <option value="'.$ajdjezika.'">'.$nazivjezika.'</option>
    ';}
      echo  '</select>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Zapamti me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Prijavi se</button>
        <p class="mt-5 mb-3 text-muted">&copy;'.$naziv.' 2021</p>
      </form>
    </main>';
    }  
    
}

    

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
#podrucje{
  background-image:url("http://www.localhost/images/domagoj.jpg;");
  
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
  
  height: 237px;
        overflow-y: scroll; 
        cursor:pointer;
}
#sidebarMenu{


overflow-y: scroll; 

}
#link{


  cursor:pointer; 

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
#dokument label{
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


var nivo=$("#nivo").val();
console.log(nivo);
$("#tablica table tr").on('click',function(){ 
console.log('tablica');
var id=$(this).attr('id');      
$('#myModal12').modal('show');
$('#myModal12').on('shown.bs.modal', function () {
  //$('#myInput').trigger('focus');
  console.log(id);
     
     $.ajax('test.php?dobaviuputnicu1',{
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
     
     
     
     
    
      html +='<div class="list-group">' ;
      if(value['status']==1)
     {
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/plus-circle.svg" width="32" height="32" class="rounded-circle flex-shrink-0 bg-primary">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme32;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+'<?php echo $dugme28;?>'+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+ value['naziv']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
     }else{
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/dash.svg" width="32" height="32" class="rounded-circle flex-shrink-0 bg-danger">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme32;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+'<?php echo $dugme29;?>'+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+ value['naziv']+'</small>';
      html +='</div>' ;
      html +='</a>' ; 
     }
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/man.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme19;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['osoba']+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+'<?php echo $dugme6;?>'+':'+ value['cijena']+'</small>';
      html +='</div>' ;
      html +='</a>' ;

      
     
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/description.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme21;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['slika']+'</p>' ;
      html +='</div>' ;
      //html +='<small class="mb-0 opacity-75">'+ value['doktor']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/planning.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme25.' 1';?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['opis']+'</p>' ;
      html +='</div>' ;
      //html +='<small class="mb-0 opacity-75">'+ value['doktor']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/calendarr.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme73;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['datum_unosa']+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+'<?php echo $datum_datum;?>'+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/calendarr.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme76;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['datum_termina']+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+ value['naziv']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/clock.png" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme28;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['vrjeme_termina']+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+ value['naziv']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/permission.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme78;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['niz']+'</p>' ;
      html +='</div>' ;
      if(value['hitno']==1){ 
      html +='<small class="mb-0 opacity-75 alert alert-danger" >'+'<?php echo $dugme78.' '.$dugme41;?>'+'</small>';
    }else{
      html +='<small class="mb-0 opacity-75">'+'<?php echo $dugme78;?>'+'</small>';
    }
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/planning.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme25.' 2';?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['nalaz']+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+ value['doktor']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      
      
      html +='</div>' ;
     
    
     
     
     //html +='</ul>' ;
     
     //html +='</table>' ;
     
     });
     $("#prikaz").append(html);
     $("#zatvori").click(function(){
         $("#tekst").remove();
         location.reload();
     });
     $("#odustati").click(function(){
         $("#tekst").remove();
         location.reload();
     });
     $("#zatv").click(function(){
         $("#tekst").remove();
         location.reload();
     }); 
       
     
     
     });

});
});
$("#tablicanaruci table tr").on('click',function(){

var id=$(this).attr('id');      
$('#myModal1').modal('show');
$('#myModal1').on('shown.bs.modal', function () {
  //$('#myInput').trigger('focus');
console.log(id);
 if(nivo=='0'){    
$.ajax('test.php?dobavi',{
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

if(value['eko']==1)
{
html +='<li class="list-group-item active" aria-current="true">' ;
html +='<select class="form form-control" name="eko" id="eko">' ;
html +='<option value="'+ value['eko']+'"  class="alert alert-primary">'+'<?php echo $dugme28;?>'+'</option>' ;
html +='<option value="0"  class="alert alert-danger">'+'<?php echo $dugme29;?>'+'</option>' ;
html +='</select>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary" style="text-align:center">'+'<?php echo $dugme19;?>'+'</label>';
html +='<input value="'+ value['osoba']+'" name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;

html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary" style="text-align:center">'+'<?php echo $dugme68;?>'+'</label>';
html +='<select class="form form-control" name="doktor" id="doktor">' ;
html +='<option value="'+value['doktor']+'"  class="alert alert-danger"></option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM doktori where idmz=$level" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddoktor,$doktor,$idmz);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$iddoktor.'">'.$doktor;} ?>' ;
html +='</option>' ;
html +='</select>' ;
//html +='<input  name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;

html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme20;?>'+'</label>';
html +='<input value="'+ value['firma']+'" name="firma" id="firma" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme21;?>'+'</label>';
html +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" >'+value['vrsta']+'</textarea>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme22;?>'+'</label>';
html +='<input type="number" value="'+ value['cijena']+'" name="cijena" id="cijena" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme23;?>'+'</label>';
html +='<input type="date" value="'+ value['datum']+'" name="datum" id="datum" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme27;?>'+'</label>';
html +='<input type="time" value="'+ value['vrjeme']+'" name="vrjeme" id="vrjeme" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true" >' ;
html +='<a href="images/'+value['slika']+'" target="_blank"><label id="link" class="badge rounded-pill bg-primary">'+'<?php echo $dugme24;?>'+'</label></a>';
//html +='<label class="badge rounded-pill bg-primary">DOKUMENT</label>';
html +='<input type="text" value="'+ value['slika']+'" name="slikaa" id="slikaa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme25;?>'+'</label>';
html +='<textarea type="text"  name="opis" id="opis" class="form form-control" rows="14" cols="50">'+value['opis']+'</textarea>' ;
html +='</li>' ;
html +='<div class="modal-footer" >';
html +='<input type="hidden" value="'+ value['id']+'" name="idpacijenta" id="idpacijenta" class="form form-control"/>' ;
html +='<input type="hidden" name="idpodrucja" id="idpodrucja" value="'+value['idpodrucja']+'"/>';
html +='<input type="hidden" name="ured" id="ured" value="'+value['ured']+'"/>';
html +='<button class="btn btn-primary btn-sm" id="uputnica" name="uputnica" data-bs-target="#myModal2"  data-bs-toggle="modal" data-bs-dismiss="modal"><?php echo $dugme78;?></button>';
//html +='<button class="btn btn-info btn-sm" data-bs-target="#myModal1"  data-bs-toggle="modal" data-bs-dismiss="modal"><?php echo $dugme78;?></button>';
html +='<button class="btn btn-warning btn-sm"" id="karton" name="karton"  data-bs-toggle="modal"><?php echo $dugme77;?></button>';
html +='<form action="tcpdf/examples/izvjestaj.php" method="post" id="forma_izvjestaj" target="_blank">';
html +='<input type="hidden" name="printid" id="printid" value="'+value['id']+'"/>';
html +='<input type="hidden" name="level1" id="level1" value="<?echo $level?>"/>';
html +='<input type="hidden" name="ustanova" id="ustanova" value="<?echo $podrucje?>"/>';
html +='<input type="hidden" name="jezik" id="jezik" value="<?echo $ajdijezika?>"/>';
html +='<button class="btn btn-success btn-sm""  data-bs-toggle="modal"><?php echo $dugme69;?></button>';
html +='</form>';
html +='<button class="btn btn-secondary btn-sm" id="azurirati" name="azurirati"><?php echo $dugme65;?></button>';
html +='</div>';

}else{
 html +='<li class="list-group-item btn-danger" aria-current="true">' ;
html +='<select class="form form-control" name="eko" id="eko">' ;
html +='<option value="'+ value['eko']+'"  class="alert alert-danger">'+'<?php echo $dugme29;?>'+'</option>' ;
html +='<option value="1"  class="alert alert-primary">'+'<?php echo $dugme28;?>'+'</option>' ;
html +='</select>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger" style="text-align:center">'+'<?php echo $dugme19;?>'+'</label>';
html +='<input value="'+ value['osoba']+'" name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger" style="text-align:center">'+'<?php echo $dugme68;?>'+'</label>';
html +='<select class="form form-control" name="doktor" id="doktor">' ;
html +='<option value="'+value['doktor']+'"  class="alert alert-danger"></option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM doktori where idmz=$level" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddoktor,$doktor,$idmz);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$iddoktor.'">'.$doktor;} ?>' ;
html +='</option>' ;
html +='</select>' ;
//html +='<input  name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">'+'<?php echo $dugme20;?>'+'</label>';
html +='<input value="'+ value['firma']+'" name="firma" id="firma" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">'+'<?php echo $dugme21;?>'+'</label>';
html +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" >'+value['vrsta']+'</textarea>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">'+'<?php echo $dugme22;?>'+'</label>';
html +='<input type="number" value="'+ value['cijena']+'" name="cijena" id="cijena" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">'+'<?php echo $dugme23;?>'+'</label>';
html +='<input type="date" value="'+ value['datum']+'" name="datum" id="datum" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">'+'<?php echo $dugme27;?>'+'</label>';
html +='<input type="time" value="'+ value['vrjeme']+'" name="vrjeme" id="vrjeme" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<a href="images/'+value['slika']+'"><label class="badge rounded-pill bg-danger">'+'<?php echo $dugme24;?>'+'</label></a>';
html +='<input type="text" value="'+ value['slika']+'" name="slikaa" id="slikaa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">'+'<?php echo $dugme25;?>'+'</label>';
html +='<textarea type="text"  name="opis" id="opis" class="form form-control" rows="14" cols="50">'+value['opis']+'</textarea>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<input type="hidden" value="'+ value['ured']+'" name="ured" id="ured" class="form form-control"/>' ;
html +='</li>' ;
html +='<div class="modal-footer" >';
html +='<form action="tcpdf/examples/izvjestaj.php" method="post" id="forma_izvjestaj" target="_blank">';
html +='<input type="hidden" name="printid" id="printid" value="'+value['id']+'"/>';
html +='<input type="hidden" name="level1" id="level1" value="<?echo $level?>"/>';
html +='<input type="hidden" name="ustanova" id="ustanova" value="<?echo $podrucje?>"/>';
html +='<input type="hidden" name="jezik" id="jezik" value="<?echo $ajdijezika?>"/>';
//html +='<button class="btn btn-success"  data-bs-toggle="modal"><?php echo $dugme69;?></button>';
html +='<button class="btn btn-success btn-sm"  data-bs-toggle="modal"><?php echo $dugme69;?></button>';
html +='</form>';
html +='<button class="btn btn-secondary btn-sm" id="azurirati" name="azurirati"><?php echo $dugme65;?></button>';
html +='</div>';
}


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
    var eko=$("#eko").val();
    var osoba=$("#osoba").val();
    var firma=$("#firma").val();
    var vrsta=$("#vrsta").val();
    var cijena=$("#cijena").val();
    var datum=$("#datum").val();
    var slika=$("#slikaa").val();
    var opis=$("#opis").val();
    var ured=$("#ured").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#podrucje").val();
    var doktor=$("#doktor").val();
    console.log(eko);
    console.log(osoba);
    console.log(firma);
    console.log(vrsta);
    console.log(cijena);
    console.log(datum);
    console.log(slika);
    console.log(opis);
    console.log(ured);
    console.log(idkorisnika);
    console.log(podrucje);
   
     $.ajax('test.php?izbrisati',{
          'method':'POST',
          'data':{
            'id':id,'eko':eko,'osoba':osoba,'firma':firma,'vrsta':vrsta,'cijena':cijena,'datum':datum,'slika':slika,'opis':opis,'ured':ured,'idkorisnika':idkorisnika,'podrucje':podrucje},
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
    var eko=$("#eko").val();
    var osoba=$("#osoba").val();
    var firma=$("#firma").val();
    var vrsta=$("#vrsta").val();
    var cijena=$("#cijena").val();
    var datum=$("#datum").val();
    var vrjeme=$("#vrjeme").val();
    var slika=$("#slikaa").val();
    var opis=$("#opis").val();
    var ured=$("#ured").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#podrucje").val();
    var doktor=$("#doktor").val();
    
    console.log(id);
    console.log(eko);
    console.log(osoba);
    console.log(firma);
    console.log(vrsta);
    console.log(cijena);
    console.log(datum);
    console.log(vrjeme);
    console.log(slika);
    console.log(opis);
    console.log(ured);
    console.log(idkorisnika);
    console.log(podrucje);
    console.log(doktor);
       $.ajax('test.php?financije',{
         'method':'POST',
         'data':{
           'id':id,'eko':eko,'osoba':osoba,'firma':firma,'vrsta':vrsta,'cijena':cijena,'datum':datum,'vrjeme':vrjeme,'slika':slika,'opis':opis,'ured':ured,'idkorisnika':idkorisnika,'podrucje':podrucje,'doktor':doktor},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
});
$("#tekst").remove();
          location.reload();
});

});
}else{
  $.ajax('test.php?dobaviuputnicu',{
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

if(value['status']==1)
{
html +='<li class="list-group-item active" aria-current="true">' ;
html +='<select class="form form-control" name="eko" id="eko">' ;
html +='<option value="1"  class="alert alert-primary">'+'<?php echo $dugme32.' '.$dugme40;?>'+'</option>' ;
html +='<option value="0"  class="alert alert-danger">'+'<?php echo $dugme32.' '.$dugme41;?>'+'</option>' ;
html +='</select>' ;
html +='</li>' ;
}else{
  html +='<li class="list-group-item alert alert-danger" aria-current="true">' ;
html +='<select class="form form-control" name="eko" id="eko">' ;
html +='<option value="0"  class="alert alert-danger">'+'<?php echo $dugme32.' '.$dugme41;?>'+'</option>' ;
html +='<option value="1"  class="alert alert-primary">'+'<?php echo $dugme32.' '.$dugme40;?>'+'</option>' ;

html +='</select>' ;
html +='</li>' ;
}
html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/man.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme19;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['osoba']+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+'<?php echo $dugme6;?>'+':'+ value['cijena']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/description.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme21;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['slika']+'</p>' ;
      html +='</div>' ;
      //html +='<small class="mb-0 opacity-75">'+'<?php echo $dugme6;?>'+':'+ value['cijena']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/planning.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme25.' 1';?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['opis']+'</p>' ;
      html +='</div>' ;
      //html +='<small class="mb-0 opacity-75">'+ value['doktor']+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/calendarr.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme73;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['datum_unosa']+'</p>' ;
      html +='</div>' ;
      html +='<small class="mb-0 opacity-75">'+'<?php echo $datum_datum;?>'+'</small>';
      html +='</div>' ;
      html +='</a>' ;
      //html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      //html +='<img src="images/calendarr.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      //html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
     // html +='<div>' ;
     // html +='<h6 class="mb-0">'+'<?php echo $dugme76;?>'+'<h6>' ;
      //html +='<p class="mb-0 opacity-75">'+ value['datum_termina']+'</p>' ;
     // html +='</div>' ;
     // html +='<small class="mb-0 opacity-75">'+ value['naziv']+'</small>';
      //html +='</div>' ;
      //html +='</a>' ;
      //html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      //html +='<img src="images/clock.png" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      //html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      //html +='<div>' ;
      //html +='<h6 class="mb-0">'+'<?php echo $dugme28;?>'+'<h6>' ;
      //html +='<p class="mb-0 opacity-75">'+ value['vrjeme_termina']+'</p>' ;
      //html +='</div>' ;
      //html +='<small class="mb-0 opacity-75">'+ value['naziv']+'</small>';
     // html +='</div>' ;
      //html +='</a>' ;
      

 
    
      html +='<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">' ;
      html +='<img src="images/permission.svg" width="32" height="32" class="rounded-circle flex-shrink-0">' ;
      html +='<div class="d-flex gap-2 w-100 justify-content-between">' ;
      html +='<div>' ;
      html +='<h6 class="mb-0">'+'<?php echo $dugme78;?>'+'<h6>' ;
      html +='<p class="mb-0 opacity-75">'+ value['niz']+'</p>' ;
      html +='</div>' ;
      if(value['hitno']==1){ 
      html +='<small class="mb-0 opacity-75 alert alert-danger" >crvena</small>';
    }else{
      html +='<small class="mb-0 opacity-75">bijela uputnica</small>';
    }
      html +='</div>' ;
      html +='</a>' ;
    
//html +='<li class="list-group-item" aria-current="true">' ;
//html +='<label class="badge rounded-pill bg-primary" style="text-align:center">'+'<?php echo $dugme19;?>'+'</label>';
//html +='<input value="'+ value['opis']+'" name="osoba" id="osoba" class="form form-control"/>' ;
//html +='</li>' ;

html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-secondary" style="text-align:center">'+'<?php echo $dugme68;?>'+'</label>';
html +='<select class="form form-control" name="doktor" id="doktor">' ;
html +='<option value="'+ value['id_doktor']+'"  class="alert alert-danger"></option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM doktori where idmz=$level" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddoktor,$doktor,$idmz);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$iddoktor.'">'.$doktor;} ?>' ;
html +='</option>' ;
html +='</select>' ;
//html +='<input  name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;

//html +='<li class="list-group-item" aria-current="true">' ;
//html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme20;?>'+'</label>';
//html +='<input value="'+ value['firma']+'" name="firma" id="firma" class="form form-control"/>' ;
//html +='</li>' ;
//html +='<li class="list-group-item" aria-current="true">' ;
//html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme21;?>'+'</label>';
//html +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" >'+value['vrsta']+'</textarea>' ;
//html +='</li>' ;
//html +='<li class="list-group-item" aria-current="true">' ;
//html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme22;?>'+'</label>';
//html +='<input type="number" value="'+ value['cijena']+'" name="cijena" id="cijena" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme23.' '.$dugme25;?>'+'</label>';
html +='<input type="date" value="'+'<?php echo $datum_datum;?>'+'" name="datum" id="datum" class="form form-control"/>' ;
html +='</li>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme27.' '.$dugme25;?>'+'</label>';
html +='<input type="time" value="'+value['vrjeme_termina']+'" name="vrijeme" id="vrijeme" class="form form-control"/>' ;
html +='</li>' ;
//html +='<li class="list-group-item" aria-current="true">' ;
//html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme27;?>'+'</label>';
//html +='<input type="time" value="'+ value['vrjeme']+'" name="vrjeme" id="vrjeme" class="form form-control"/>' ;
//html +='</li>' ;
//html +='<li class="list-group-item" aria-current="true" >' ;
//html +='<a href="images/'+value['slika']+'" target="_blank"><label id="link" class="badge rounded-pill bg-primary">'+'<?php echo $dugme24;?>'+'</label></a>';
//html +='<label class="badge rounded-pill bg-primary">DOKUMENT</label>';
//html +='<input type="text" value="'+ value['slika']+'" name="slikaa" id="slikaa" class="form form-control"/>' ;
//html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme25;?>'+'</label>';
html +='<textarea type="text"  name="opis" id="opis" class="form form-control" rows="14" cols="50">'+value['nalaz']+'</textarea>' ;
html +='</li>' ;
html +='<div class="modal-footer" >';
html +='<input type="hidden" value="'+ value['id']+'" name="idpacijenta" id="idpacijenta" class="form form-control"/>' ;
//html +='<input type="text" name="idpodrucja" id="idpodrucja" value="'+value['idpodrucja']+'"/>';
//html +='<input type="text" name="ured" id="ured" value="'+value['ured']+'"/>';
//html +='<button class="btn btn-primary btn-sm" id="uputnica" name="uputnica" data-bs-target="#myModal2"  data-bs-toggle="modal"><?php echo $dugme78;?></button>';
html +='<button class="btn btn-warning btn-sm"" id="karton" name="karton"  data-bs-toggle="modal"><?php echo $dugme77;?></button>';
html +='<form action="tcpdf/examples/izvjestaj.php" method="post" id="forma_izvjestaj" target="_blank">';
html +='<input type="hidden" name="printid" id="printid" value="'+value['id']+'"/>';
html +='<input type="hidden" name="level1" id="level1" value="<?echo $level?>"/>';
html +='<input type="hidden" name="ustanova" id="ustanova" value="<?echo $podrucje?>"/>';
html +='<input type="hidden" name="jezik" id="jezik" value="<?echo $ajdijezika?>"/>';
html +='<button class="btn btn-success btn-sm""  data-bs-toggle="modal"><?php echo $dugme69;?></button>';
html +='</form>';
html +='<button class="btn btn-secondary btn-sm" id="azurirati" name="azurirati"><?php echo $dugme65;?></button>';
html +='</div>';




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
    var eko=$("#eko").val();
    var osoba=$("#osoba").val();
    var firma=$("#firma").val();
    var vrsta=$("#vrsta").val();
    var cijena=$("#cijena").val();
    var datum=$("#datum").val();
    var slika=$("#slikaa").val();
    var opis=$("#opis").val();
    var ured=$("#ured").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#podrucje").val();
    var doktor=$("#doktor").val();
    console.log(eko);
    console.log(osoba);
    console.log(firma);
    console.log(vrsta);
    console.log(cijena);
    console.log(datum);
    console.log(slika);
    console.log(opis);
    console.log(ured);
    console.log(idkorisnika);
    console.log(podrucje);
   
     $.ajax('test.php?izbrisati',{
          'method':'POST',
          'data':{
            'id':id,'eko':eko,'osoba':osoba,'firma':firma,'vrsta':vrsta,'cijena':cijena,'datum':datum,'slika':slika,'opis':opis,'ured':ured,'idkorisnika':idkorisnika,'podrucje':podrucje},
          'success':function(data,textStatus,jqXHR){console.log(data);
         },
          'error':function(jqXHR,textStatus,errorThrown){
          
          
          }
  });
 $("#tekst").remove();
    location.reload();
}); 
$("#posaljiup").click(function(){
  console.log(id);
  var ambulanta=$("#ambulanta").val();
  var idpodrucja=$("#idpodrucja").val()
  var ured=$("#ured").val()
  console.log(ambulanta);
  console.log(idpodrucja);
  console.log(ured);

  $.ajax('test.php?uputnica',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured},
    'success':function(data,textStatus,jqXHR){console.log(data);
        },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
        }
  });
 });

$("#azurirati").click(function(){
    
    //var id=$("table tr").attr('id');
    var eko=$("#eko").val();
    //var osoba=$("#osoba").val();
    //var firma=$("#firma").val();
    //var vrsta=$("#vrsta").val();
    //var cijena=$("#cijena").val();
    var datum=$("#datum").val();
    var vrijeme=$("#vrijeme").val();
    //var slika=$("#slikaa").val();
    var opis=$("#opis").val();
    //var ured=$("#ured").val();
    var idpacijenta=$("#idpacijenta").val();
    //var podrucje=$("#podrucje").val();
    var doktor=$("#doktor").val();
    
    console.log(idpacijenta);
    console.log(eko);
    //console.log(osoba);
    //console.log(firma);
    //console.log(vrsta);
    //console.log(cijena);
    console.log(datum);
    console.log(vrijeme);
    //console.log(slika);
    console.log(opis);
    //console.log(ured);
    //console.log(idpacijenta);
    //console.log(podrucje);
    console.log(doktor);
       $.ajax('test.php?uputnicaupdate',{
         'method':'POST',
         'data':{
           'id':id,'idpacijenta':idpacijenta,'eko':eko,'datum':datum,'vrijeme':vrijeme,'opis':opis,'doktor':doktor},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
});
$("#tekst").remove();
          location.reload();
});

});
} 
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
    var uputnicanivo=$("#nivo").val();
    console.log(uputnicanivo);
    if(uputnicanivo==0 || uputnicanivo==7){ 
    $('#myModal').modal('show');
$('#myModal').on('shown.bs.modal', function () {
    //$("#tekst").remove();
    //location.reload();
    
htmll +='<div class="bd-example">' ;
htmll +='<ul class="list-group" style="text-align:LEFT;">' ;
htmll +='</ul>' ;
htmll +='<li class="list-group-item  bg-secondary" aria-current="true">' ;
htmll +='<select class="form form-control" name="eko" id="eko">' ;
htmll +='<option value="1"  class="alert alert-primary">'+'<?php echo $dugme28;?>'+'</option>' ;
htmll +='<option value="0"  class="alert alert-danger">'+'<?php echo $dugme29;?>'+'</option>' ;
htmll +='</select>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" style="text-align:center">'+'<?php echo $dugme19;?>'+'</label>';
htmll +='<input  name="osoba" id="osoba" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" style="text-align:center">'+'<?php echo $dugme68;?>'+'</label>';
htmll +='<select class="form form-control" name="doktor" id="doktor">' ;
<?php include('db.php');
$upit = "SELECT * FROM doktori where idmz=$level" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddoktor,$doktor,$idmz);
  ?>  
htmll +='<option value="0"  class="alert alert-primary">'+'<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$iddoktor.'">'.$doktor;}  ?>'+'</option>' ;

htmll +='</select>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" >'+'<?php echo $dugme20;?>'+'</label>';
htmll +='<input  name="firma" id="firma" class="form form-control" autocomplete="off" />' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme21;?>'+'</label>';
htmll +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" autocomplete="off"></textarea>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme22;?>'+'</label>';
htmll +='<input type="number"  name="cijena" id="cijena" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme23;?>'+'</label>';
htmll +='<input type="date"  name="datum" id="datum" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme27;?>'+'</label>';
htmll +='<input type="time"  name="vrijeme" id="vrijeme" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme24;?>'+'</label>';
htmll +='<input type="text"  name="slikaa" id="slikaa" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme25;?>'+'</label>';
htmll +='<textarea type="text"  name="opis" id="opis" class="form form-control" autocomplete="off" rows="14" cols="50"></textarea>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<input type="hidden" name="ured" id="ured" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='</div>' ;
$("#tekst2").append(htmll);

$("#ponesi").click(function(){
    //$("#tekst2").remove();
    //location.reload();
    //console.log('ponesi');
    //var password=$("#password").val();
    //var korisnik=$("#korisnik").val();
    var eko=$("#eko").val();
    var osoba=$("#osoba").val();
    var firma=$("#firma").val();
    var vrsta=$("#vrsta").val();
    var cijena=$("#cijena").val();
    var datum=$("#datum").val();
    var vrijeme=$("#vrijeme").val();
    var slika=$("#slikaa").val();
    var opis=$("#opis").val();
    var ured=$("#level").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#podrucje").val();
    var doktor=$("#doktor").val();
    
    
    console.log(eko);
    console.log(osoba);
    console.log(firma);
    console.log(vrsta);
    console.log(vrijeme);
    console.log(cijena);
    console.log(datum);
    console.log(slika);
    console.log(opis);
    console.log(ured);
    console.log(idkorisnika);
    console.log(podrucje);
    console.log(doktor);
   
    
   $.ajax('test.php?unesi',{
        'method':'POST',
         'data':{
           'eko':eko,'osoba':osoba,'firma':firma,'vrsta':vrsta,'cijena':cijena,'datum':datum,'vrijeme':vrijeme,'slika':slika,'opis':opis,'ured':ured,'idkorisnika':idkorisnika,'podrucje':podrucje,'doktor':doktor},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 }); 
 //$("#tekst2").remove();
    location.reload();
});
 $("#zatvorii").click(function(){
     //$("#tekst2").remove();
     location.reload();
 });
 $("#stornire").click(function(){
     //$("#tekst2").remove();
     location.reload();
 });


  });
}else{
$('#myModal17').modal('show');
$('#myModal17').on('shown.bs.modal', function () {
htmll +='<div class="bd-example">' ;
htmll +='<ul class="list-group" style="text-align:LEFT;">' ;
htmll +='</ul>' ;
htmll +='<li class="list-group-item  bg-secondary" aria-current="true">' ;
htmll +='<select class="form form-control" name="eko" id="eko">' ;
htmll +='<option value="1"  class="alert alert-primary">'+'<?php echo $dugme28;?>'+'</option>' ;
htmll +='<option value="0"  class="alert alert-danger">'+'<?php echo $dugme29;?>'+'</option>' ;
htmll +='</select>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" style="text-align:center">'+'<?php echo $dugme19;?>'+'</label>';
htmll +='<input  name="osoba" id="osoba" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" style="text-align:center">'+'<?php echo $dugme68;?>'+'</label>';
htmll +='<select class="form form-control" name="doktor" id="doktor">' ;
<?php include('db.php');
$upit = "SELECT * FROM doktori where idmz=$level" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddoktor,$doktor,$idmz);
  ?>  
htmll +='<option value="0"  class="alert alert-primary">'+'<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$iddoktor.'">'.$doktor;}  ?>'+'</option>' ;

htmll +='</select>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" >'+'<?php echo $dugme20;?>'+'</label>';
htmll +='<input  name="firma" id="firma" class="form form-control" autocomplete="off" />' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme21;?>'+'</label>';
htmll +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" autocomplete="off"></textarea>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme22;?>'+'</label>';
htmll +='<input type="number"  name="cijena" id="cijena" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme23;?>'+'</label>';
htmll +='<input type="date"  name="datum" id="datum" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme27;?>'+'</label>';
htmll +='<input type="time"  name="vrijeme" id="vrijeme" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme24;?>'+'</label>';
htmll +='<input type="text"  name="slikaa" id="slikaa" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">'+'<?php echo $dugme25;?>'+'</label>';
htmll +='<textarea type="text"  name="opis" id="opis" class="form form-control" autocomplete="off" rows="14" cols="50"></textarea>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<input type="hidden" name="ured" id="ured" class="form form-control" autocomplete="off" value="'+'<?php echo $level;?>'+'"/>' ;
htmll +='<input type="hidden" name="podrucje" id="podrucje" class="form form-control" autocomplete="off" value="'+'<?php echo $podrucje;?>'+'"/>' ;
htmll +='</li>' ;
htmll +='</div>' ;
$("#unesitekst").append(htmll);

   })
   $("#kui").click(function(){
    $("#tekst").remove();
    location.reload();
}); 
}
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
$("#unesilogo").click(function(){
  console.log("upload dokumentaaa");
   var naziv=$("#uploadImage").val();
   console.log(naziv);
  $("#myModal3").modal('show');
  $("#myModal3").on('shown.bs.modal',function(){
    $("#quitt").on('click',function(){
location.reload();
});
$("#quii").on('click',function(){
location.reload();
});
  });
//treba mi na klik upload pokupiti naziv dokumenta  var naziv=$("#uploadImage").val();
// $("#submit").click(function(){
//   var naziv=$("file_name").val();
//    console.log(naziv);
// })

});

$("#kartica button").click(function(){

var adminid=$(this).val();
console.log(adminid);
});
$("#table1 tr td").click(function(){

var kartica1=$(this).attr('id');
console.log(kartica1);
if(kartica1!=='0'){
$("#myModal7").modal('show');
  $("#myModal7").on('shown.bs.modal',function(){
    $.ajax('test.php?dobavimz',{
 'method':'POST',
 'data':{'id':kartica1},
 'success':function(data,textStatus,jqXHR){console.log(data);
 },
 'error':function(jqXHR,textStatus,errorThrown){
   
   
 }
 
}).done(function(odgovor){

console.log(odgovor);

var response = JSON.parse(odgovor);

console.log(response);

$.each(response, function(index, value){

html +='<input value="'+ value['id']+'" name="mz10id" id="mz10id" type="hidden"/>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary" style="text-align:center">'+'<?php echo $dugme20;?>'+'</label>';
html +='<input value="'+ value['naziv']+'" name="mz10naziv" id="mz10naziv" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme66;?>'+'</label>';
html +='<input value="'+ value['adresa']+'"  name="mz10adresa" id="mz10adresa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme14;?>'+'</label>';
html +='<input value="'+ value['telefon']+'" name="mz10telefon" id="mz10telefon" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme67;?>'+'</label>';
html +='<input value="'+ value['email']+'"  name="mz10email" id="mz10email" class="form form-control"/>' ;
html +='</li>' ;
html +='<input value="'+ value['ured']+'" name="mz10ured" id="mz10ured" type="hidden"/>' ;
html +='<input value="'+ value['podrucjeid']+'" name="mz10podrucjeid" id="mz10podrucjeid" type="hidden"/>' ;
 

html +='</ul>' ;

html +='</div>' ;

});
$("#tekst7").append(html);



});
$("#promjenimz10").on('click',function(){
console.log('promjeni'); 
var mz10id=$("#mz10id").val();
var mz10naziv=$("#mz10naziv").val();
var mz10adresa=$("#mz10adresa").val();
var mz10email=$("#mz10email").val();
var mz10ured=$("#mz10ured").val();
var mz10podrucjeid=$("#mz10podrucjeid").val();
var mz10telefon=$("#mz10telefon").val();
console.log(mz10id);
console.log(mz10naziv);
console.log(mz10adresa);
console.log(mz10email);
console.log(mz10ured);
console.log(mz10podrucjeid);
console.log(mz10telefon);
$.ajax('test.php?promjenimz1',{
           'method':'POST',
          'data':{
             'mz10id':mz10id,'mz10naziv':mz10naziv,'mz10adresa':mz10adresa,'mz10telefon':mz10telefon,'mz10email':mz10email,'mz10ured':mz10ured,'mz10podrucjeid':mz10podrucjeid},
           'success':function(data,textStatus,jqXHR){console.log(data);
          },
           'error':function(jqXHR,textStatus,errorThrown){
          
          
           }
  });
   location.reload();
});
$("#izlaz16").on('click',function(){
location.reload();
});
$("#izlaz15").on('click',function(){
location.reload();
});
  });
  
}else{ console.log('nedefinirano');};

});


$("#table3 tr td").click(function(){
//console.log("upload dokumentaaa");

var id=$(this).attr('id');
console.log(id);
if(id!=='0'){
  console.log(id);
  $("#myModal5").modal('show');
  $("#myModal5").on('shown.bs.modal',function(){
    
    $.ajax('test.php?dobavipodrucje',{
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

html +='<input value="'+ value['id']+'" name="podrucje1id" id="podrucje1id" type="hidden"/>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary" style="text-align:center">'+'<?php echo $dugme16;?>'+'</label>';
html +='<input value="'+ value['naziv']+'" name="podrucje1naziv" id="podrucje1naziv" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme66;?>'+'</label>';
html +='<input value="'+ value['adresa']+'"  name="podrucje1adresa" id="podrucje1adresa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme14;?>'+'</label>';
html +='<input value="'+ value['telefon']+'" name="podrucje1telefon" id="podrucje1telefon" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">'+'<?php echo $dugme67;?>'+'</label>';
html +='<input value="'+ value['email']+'"  name="podrucje1email" id="podrucje1email" class="form form-control"/>' ;
html +='</li>' ;


 

html +='</ul>' ;

html +='</div>' ;

});
$("#tekst5").append(html);


    $("#izlaz36").on('click',function(){
location.reload();
});
}); 

$("#promjenipodrucje").on('click',function(){
console.log('promjeni');

var podrucje1id=$("#podrucje1id").val();
var podrucje1naziv=$("#podrucje1naziv").val();
var podrucje1adresa=$("#podrucje1adresa").val();
var podrucje1telefon=$("#podrucje1telefon").val();
var podrucje1email=$("#podrucje1email").val();

console.log(podrucje1naziv);
console.log(podrucje1adresa);
console.log(podrucje1telefon);
console.log(podrucje1email);
  $.ajax('test.php?promjenipodrucje',{
           'method':'POST',
          'data':{
             'podrucje1id':podrucje1id,'podrucje1naziv':podrucje1naziv,'podrucje1adresa':podrucje1adresa,'podrucje1telefon':podrucje1telefon,'podrucje1email':podrucje1email},
           'success':function(data,textStatus,jqXHR){console.log(data);
          },
           'error':function(jqXHR,textStatus,errorThrown){
          
          
           }
  });
   location.reload();
});
$("#izbrisipodrucje").on('click',function(){
  var podrucje1id=$("#podrucje1id").val();
  console.log(podrucje1id);
  $("#myModal6").modal('show');
  $("#myModal6").on('shown.bs.modal',function(){
    $("#izbrisipodrucje1").on('click',function(){
    console.log(id);
    $.ajax('test.php?izbrisipodrucje',{
          'method':'POST',
          'data':{
            'podrucje1id':podrucje1id},
          'success':function(data,textStatus,jqXHR){console.log(data);
         },
          'error':function(jqXHR,textStatus,errorThrown){
          
          
          }
  });
  location.reload();
});
    
    $("#izlaz8").on('click',function(){
location.reload();
});
$("#izlaz7").on('click',function(){
location.reload();
});
  });
});

    $("#izlaz4").on('click',function(){
location.reload();
});
$("#izlaz5").on('click',function(){
location.reload();
});
  });
}else{
  console.log('nedefinirano!');
}


 
});
$("#izbrisitvrtku").on('click',function(){
  var podrucje1id=$("#mz10id").val();
  console.log(podrucje1id);
  $("#myModal9").modal('show');
  $("#myModal9").on('shown.bs.modal',function(){
    $("#izbrisitvrtku1").on('click',function(){
    console.log(podrucje1id);
    $.ajax('test.php?izbrisitvrtku',{
          'method':'POST',
          'data':{
           'podrucje1id':podrucje1id},
          'success':function(data,textStatus,jqXHR){console.log(data);
         },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
          }
  });
  location.reload();
});
    
    $("#izlaz88").on('click',function(){
location.reload();
});
$("#izlaz77").on('click',function(){
location.reload();
});
  });
});
$("#ubacigrad").click(function(){
//console.log("upload dokumentaaa");
var grad=$("#grad").val();
console.log(grad);
$.ajax('test.php?unesigrad',{
         'method':'POST',
         'data':{
           'grad':grad},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 }); 
 location.reload();
});
$("#noviunos").click(function(){
console.log("upload dokumentaaa");
$("#myModal4").modal('show');
  $("#myModal4").on('shown.bs.modal',function(){
    $("#izlaz2").on('click',function(){
location.reload();
});
$("#izlaz1").on('click',function(){
location.reload();
});
$("#unesipodrucje").on('click',function(){
console.log('unesipodrucje');
var podrucjenaziv=$("#podrucjenaziv").val();
var podrucjeadresa=$("#podrucjeadresa").val();
var podrucjetelefon=$("#podrucjetelefon").val();
var podrucjeemail=$("#podrucjeemail").val();
console.log(podrucjenaziv);
console.log(podrucjeadresa);
console.log(podrucjetelefon);
console.log(podrucjeemail);
$.ajax('test.php?unesipodrucje',{
         'method':'POST',
         'data':{
           'podrucjenaziv':podrucjenaziv,'podrucjeadresa':podrucjeadresa,'podrucjetelefon':podrucjetelefon,'podrucjeemail':podrucjeemail},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 });
 location.reload();
});
  });

});

$("#unesitvrtku").click(function(){
console.log("upload dokumentaaa");
$("#myModal8").modal('show');
  $("#myModal8").on('shown.bs.modal',function(){
    $("#izlaz22").on('click',function(){
location.reload();
});
$("#izlaz11").on('click',function(){
location.reload();
});
$("#unesitvrtkicu").on('click',function(){
console.log('unesipodrucje');
var podrucjenaziv=$("#tvrtkanaziv").val();
var podrucjeadresa=$("#tvrtkaadresa").val();
var podrucjetelefon=$("#tvrtkatelefon").val();
var podrucjeemail=$("#tvrtkaemail").val();
console.log(podrucjenaziv);
console.log(podrucjeadresa);
console.log(podrucjetelefon);
console.log(podrucjeemail);

$.ajax('test.php?unesitvrtkicu',{
         'method':'POST',
         'data':{
           'podrucjenaziv':podrucjenaziv,'podrucjeadresa':podrucjeadresa,'podrucjetelefon':podrucjetelefon,'podrucjeemail':podrucjeemail},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 });
 location.reload();
});
  });

});
$("#dugmeunesitekst").click(function(){
  console.log('Unesi tekst!');
var eko=$("#eko").val();
var osoba=$("#osoba").val();
var doktor=$("#doktor").val();
var firma=$("#firma").val();
var vrsta=$("#vrsta").val();
var cijena=$("#cijena").val();
var datum=$("#datum").val();
var vrijeme=$("#vrijeme").val();
var slikaa=$("#slikaa").val();
var opis=$("#opis").val();
var ured=$("#ured").val();
var podrucje=$("#podrucje").val();

console.log(eko);
console.log(osoba);
console.log(doktor);
console.log(firma);
console.log(vrsta);
console.log(cijena);
console.log(datum);
console.log(vrijeme);
console.log(slikaa);
console.log(opis);
console.log(ured);

$.ajax('test.php?unesitekst',{
         'method':'POST',
         'data':{
           'eko':eko,'osoba':osoba,'doktor':doktor,'firma':firma,'vrsta':vrsta,'cijena':cijena,'datum':datum,'vrijeme':vrijeme,'slikaa':slikaa,'opis':opis,'ured':ured,'podrucje':podrucje},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 });
 location.reload();
}); 
$("#promjeniboju").on('click',function(){
console.log('unesipodrucje');
var boja=$("#boja").val();

$.ajax('test.php?promjeniboju',{
         'method':'POST',
         'data':{
           'boja':boja},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 });
 location.reload();



});

$("#promjenitablicu1").on('click',function(){
console.log('unesipodrucje');
var tablica1=$("#tablica1").val();

$.ajax('test.php?promjenitablicu1',{
         'method':'POST',
         'data':{
           'tablica1':tablica1},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 });
 location.reload();



});
$("#promjenitablicu2").on('click',function(){
console.log('unesipodrucje');
var tablica2=$("#tablica2").val();

$.ajax('test.php?promjenitablicu2',{
         'method':'POST',
         'data':{
           'tablica2':tablica2},
         'success':function(data,textStatus,jqXHR){console.log(data);
        },
         'error':function(jqXHR,textStatus,errorThrown){
          
          
         }
 });
 location.reload();



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

 $("#form1").on('submit',(function(e) {
  var uploadImage=$('#uploadImage1')[0].files[0];
  console.log(uploadImage);
  e.preventDefault();
  $.ajax({
   url: "ajaxupload1.php",
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
     $("#err").html("Invalid File!").fadeIn();
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
 $("#vrjednoststacionar").on('change',function(){
  var vrjednostst=$(this).val();
  console.log(vrjednostst);

});
 $("#vrjednostpodrucni").on('change',function(){
  var brojac=0;
  var vrjednost=$(this).val();
  console.log(vrjednost);
  if(vrjednost!=0){ 
  $.ajax('test.php?dobavipodrucniured',{
   'method':'POST',
   'data':{'vrjednost':vrjednost},
   'success':function(data,textStatus,jqXHR){console.log(data);
   },
   'error':function(jqXHR,textStatus,errorThrown){
     
     
   }
   
  }).done(function(odgovor){
  
  console.log(odgovor);
  
  var response = JSON.parse(odgovor);
  
  console.log(response);
  html +='<div id="uputnica">'+'<table class="table table-bordered table-striped">';
  $.each(response, function(index, value){
  brojac++;
  
  html +='<tr id="'+ value['id']+'">';
  html +='<td>'+brojac+'</td>';
  html +='<td>'+ value['naziv']+'</td>';
  html +='<td>'+'<input type="submit" class="btn btn-sm btn-primary" name="'+ value['id']+'" id="'+ value['nivo']+'" value="'+'<?php echo $dugme79;?>'+'" style="float:right;"/>'+'</td>';
  //html +='</td>';
  html +='</tr>';
  
   });
   html +='</div>';
   
   
  $("#podrucjetekst").append(html);
  $("#podrucjetekst ul").hide();
 

  //$("#uputnica table tr input").click(function(){
  //  var id=$("#printid").val(); 
  //console.log(id);
  
  //})
  $("#uputnica table tr input").click(function(){
    var id=$("#printid").val(); 
  console.log(id);
  
  var osoba=$("#osoba").val();
  var uputnicanivo=$(this).attr('id');
  var ambulanta=$(this).attr('name');
  var idpodrucja=$("#idpodrucja").val();
  var ured=$("#ured").val();
  var doktor=$("#doktor").val();
  var firma=$("#firma").val();
  var vrsta=$("#vrsta").val();
  var cijena=$("#cijena").val();
  var datum=$("#datum").val();
  var vrjeme=$("#vrjeme").val();
  var slikaa=$("#slikaa").val();
  var opis=$("#opis").val();
  var eko=$("#eko").val();
  var hitno=$("#hitnauputnica").val();

  console.log(osoba);
  console.log(doktor);
  console.log(firma);
  console.log(vrsta);
  console.log(cijena);
  console.log(datum);
  console.log(vrjeme);
  console.log(slikaa);
  console.log(opis);
  console.log(uputnicanivo);
  console.log(ambulanta);
  console.log(idpodrucja);
  console.log(ured);
  console.log(eko);

if(uputnicanivo==0 || uputnicanivo==7){ 
  console.log(uputnicanivo);
  $.ajax('test.php?uputnica',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured,'uputnicanivo':uputnicanivo,'osoba':osoba,'doktor':doktor,'firma':firma,'vrsta':vrsta,'cijena':cijena,'datum':datum,'vrjeme':vrjeme,'slikaa':slikaa,'opis':opis,'eko':eko},
    'success':function(data,textStatus,jqXHR){console.log(data);
        },
       'error':function(jqXHR,textStatus,errorThrown){
          
          
        }
  });
  location.reload();
}else{
  console.log('DRUGO');
  if(uputnicanivo==1){
  $('#myModal10').modal('show');
$('#myModal10').on('shown.bs.modal', function () {
console.log('modal');

  
  $("#radiologijasubmit").click(function(){
    var niz=[];
    $('input[name="rad"]:checked').each(function(){
     niz.push($(this).val());
   });
    //var niz=$("#radiologijausluga").val();
    
    console.log(niz);
    $.ajax('test.php?uputnicanos',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured,'niz':niz,'hitno':hitno},
    'success':function(data,textStatus,jqXHR){console.log(data);
       },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
       }
  });
    
    $("#tekst").remove();
    location.reload();
  });
});

}else if(uputnicanivo==2){
  $('#myModal11').modal('show');
$('#myModal11').on('shown.bs.modal', function () {
  $("#laboratorijsubmit").click(function(){
var niz=[];
$('input[name="line"]:checked').each(function(){
     niz.push($(this).val());
   });
console.log(niz);
   $.ajax('test.php?uputnicanos1',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured,'niz':niz,'hitno':hitno},
    'success':function(data,textStatus,jqXHR){console.log(data);
       },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
       }
  });
  $("#tekst").remove();
          location.reload();
});
}); 
}else if(uputnicanivo==3){
  $('#myModal13').modal('show');
$('#myModal13').on('shown.bs.modal', function () {
  $("#nuklearnasubmit").click(function(){
var niz=[];
$('input[name="line"]:checked').each(function(){
     niz.push($(this).val());
   });
console.log(niz);
   $.ajax('test.php?uputnicanos1',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured,'niz':niz,'hitno':hitno},
    'success':function(data,textStatus,jqXHR){console.log(data);
       },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
       }
  });
  $("#tekst").remove();
          location.reload();
});
});
}else if(uputnicanivo==4){
  $('#myModal14').modal('show');
$('#myModal14').on('shown.bs.modal', function () {
  $("#patologijasubmit").click(function(){
var niz=[];
$('input[name="line"]:checked').each(function(){
     niz.push($(this).val());
   });
console.log(niz);
   $.ajax('test.php?uputnicanos1',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured,'niz':niz,'hitno':hitno},
    'success':function(data,textStatus,jqXHR){console.log(data);
       },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
       }
  });
  $("#tekst").remove();
          location.reload();
});
});
}else if(uputnicanivo==5){
  $('#myModal15').modal('show');
$('#myModal15').on('shown.bs.modal', function () {
  $("#mikrobiologijasubmit").click(function(){
var niz=[];
$('input[name="line"]:checked').each(function(){
     niz.push($(this).val());
   });
console.log(niz);
   $.ajax('test.php?uputnicanos1',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured,'niz':niz,'hitno':hitno},
    'success':function(data,textStatus,jqXHR){console.log(data);
       },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
       }
  });
  $("#tekst").remove();
          location.reload();
});
});
}else if(uputnicanivo==6){
  $('#myModal16').modal('show');
$('#myModal16').on('shown.bs.modal', function () {
  $("#transfuzijasubmit").click(function(){
var niz=[];
$('input[name="line"]:checked').each(function(){
     niz.push($(this).val());
   });
console.log(niz);
   $.ajax('test.php?uputnicanos1',{
    'method':'POST',
    'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured,'niz':niz,'hitno':hitno},
    'success':function(data,textStatus,jqXHR){console.log(data);
       },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
       }
  });
  $("#tekst").remove();
          location.reload();
});
});
}
  $("#mui").click(function(){
    $("#tekst").remove();
    location.reload();
});
$("#tui").click(function(){
    $("#tekst").remove();
    location.reload();
});
$("#aui").click(function(){
    $("#tekst").remove();
    location.reload();
});
$("#bui").click(function(){
    $("#tekst").remove();
    location.reload();
});
$("#cui").click(function(){
    $("#tekst").remove();
    location.reload();
});
$("#dui").click(function(){
    $("#tekst").remove();
    location.reload();
});




  // $.ajax('test.php?uputnicanos',{
 //   'method':'POST',
  //  'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured},
   // 'success':function(data,textStatus,jqXHR){console.log(data);
   //    },
      //  'error':function(jqXHR,textStatus,errorThrown){
          
          
      // }
  //});

//}

//})
// $.ajax('test.php?uputnicanos',{
 //   'method':'POST',
  //  'data':{'id':id,'ambulanta':ambulanta,'idpodrucja':idpodrucja,'ured':ured},
   // 'success':function(data,textStatus,jqXHR){console.log(data);
   //    },
      //  'error':function(jqXHR,textStatus,errorThrown){
          
          
      // }
  //});
}

 });
});
}else{
    
}

  });
  $("#tablicastacionar1 table tr").click(function(){

console.log('tablica1');
var id=$(this).attr('id');
var idstacionar=$(this).attr('name');
console.log(idstacionar);
$('#myModal19').modal('show');
$('#myModal19').on('shown.bs.modal', function (){
console.log(id);
$.ajax('test.php?stacionartbl1',{
  'method':'POST',
  'data':{'id':id},
  'success':function(data,textStatus,jqXHR){ console.log(data);
  },
  'error':function(jqXHR,textStatus,errorThrown) {

  }
}).done(function(odgovor){

console.log(odgovor);

var response = JSON.parse(odgovor);

console.log(response);
html +='<table class="table table-sm table-bordered table-striped">';
$.each(response, function(index, value){
  html +='<ul class="list-group"><li class="list-group-item active">'+'<?php echo $dugme98;?>'+'</li></ul>';
html +='<tr>';
html +='<td><img src="images/man.svg" style="width:15px;">'+'<?php echo $dugme19;?>'+'</td>' ;
html +='<td>'+ value['osoba']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="" style="width:15px;">'+'<?php echo $dugme22;?>'+'</td>' ;
html +='<td>'+ value['firma']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="" style="width:15px;">'+'<?php echo $dugme6;?>'+'</td>' ;
html +='<td>'+ value['cijena']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="images/calendarr.svg" style="width:15px;">'+'<?php echo $dugme88;?>'+'</td>' ;
html +='<td>'+ value['datum']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="images/clock.png" style="width:15px;">'+'<?php echo $dugme89;?>'+'</td>' ;
html +='<td>'+ value['vrjeme']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="images/nodoctor.png" style="width:15px;">'+'<?php echo $dugme68;?>'+'</td>' ;
html +='<td>'+ value['doktorr']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="images/pngwing.com.png" style="width:15px;">'+'<?php echo $dugme21;?>'+'</td>' ;
html +='<td>'+ value['vrsta']+' - '+ value['naziv_dijagnoze']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="images/PikPng.png" style="width:15px;">'+'<?php echo $dugme25;?>'+'</td>' ;
html +='<td>'+ value['opis']+'</td>' ;
html +='</tr>';
html +='<tr>';
html +='<td><img src="images/clinic.png" style="width:15px;">'+'<?php echo $dugme15;?>'+'</td>' ;
html +='<td>'+ value['naziv']+'</td>' ;
html +='</tr>';
//html +='<td><input class="btn btn-sm btn-primary" name="'+ value['id']+'" value="'+'<?php echo $dugme79;?>'+'" >'+'</td>';

});

html +='</table>';
$.ajax('test.php?stacionarpodaci',{
  'method':'POST',
  'data':{'name':idstacionar},
  'success':function(data,textStatus,jqXHR){ console.log(data);
  },
  'error':function(jqXHR,textStatus,errorThrown){

  }
}).done(function(odgovor){
  console.log(odgovor);
  var response = JSON.parse(odgovor);
  console.log(response);
  html +='<table class="table table-sm table-bordered table-striped">';
  $.each(response, function(index,value){
    html +='<ul class="list-group"><li class="list-group-item active">'+'<?php echo $dugme97;?>'+'</li></ul>';
    html +='<tr>';
    html +='<td>'+'<?php echo $dugme80;?>'+'</td>';
    html +='<td>'+ value['naziv']+'</td>' ;
    html +='</tr>';
    html +='<tr>';
    html +='<td>'+'<?php echo $dugme81;?>'+'</td>';
    html +='<td><input type="hidden" id="idmz_stacionar" value="'+ value['odjelid']+'" />'+ value['odjelid']+'</td>' ;
    html +='</tr>';
    html +='<tr>';
    html +='<td>'+'<?php echo $dugme82;?>'+'</td>';
    html +='<td>'+'<?php echo $dugme84;?>'+'</td>';
    html +='</tr>';
    html +='<tr>';
    html +='<td>'+ value['datumprijema']+'</td>' ;
    html +='<td>'+ value['satprijema']+'</td>' ;
    html +='</tr>';
    html +='<tr>';
    html +='<td>'+'<?php echo $dugme68;?>'+'</td>';
    html +='<td>'+ value['doktorid']+'</td>';
    html +='</tr>';
    html +='</table>';
    html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme87;?>'+'</li></ul>';
    html += '<textarea type="text"  name="otpusno" id="otpusno" class="form form-control" autocomplete="off" rows="10" cols="30">'+ value['otpusno']+'</textarea>' ;
    html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme86;?>'+'</li></ul>';
    html += '<textarea type="text"  name="anamneza" id="anamneza" class="form form-control" autocomplete="off" rows="10" cols="30">'+ value['anamneza']+'</textarea>' ;
    //html +='<li class="list-group-item" aria-current="true">' ;
    html += '<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme68;?>'+'</li></ul>';
    html +='<select class="form form-control" name="doktor" id="doktor">' ;
html +='<option value="'+value['doktor_otpust']+'"  class="alert alert-danger">'+value['doktorr']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM doktori where doktori.idmz=$level" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddoktor,$doktor,$idmz);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$iddoktor.'">'.$doktor;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme85;?>'+'</li></ul>';
html +='<select class="form form-control" name="primarna_dijagnoza" id="primarna_dijagnoza">' ;
html +='<option value="'+value['primarna_dg']+'"  class="alert alert-danger">'+value['primarna_dg']+'-'+value['naziv_dijagnoze']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM dijagnoze" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddijagnoze,$nazivdijagnoze,$sifradijagnoze);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$sifradijagnoze.'">'.$sifradijagnoze;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme90;?>'+'</li></ul>';
html +='<select class="form form-control" name="dijagnoza_sek1" id="dijagnoza_sek1">' ;
html +='<option value="'+value['sekdg1']+'"  class="alert alert-danger">'+value['sekdg1']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM dijagnoze" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddijagnoze,$nazivdijagnoze,$sifradijagnoze);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$sifradijagnoze.'">'.$sifradijagnoze;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme90;?>'+'</li></ul>';
html +='<select class="form form-control" name="dijagnoza_sek2" id="dijagnoza_sek2">' ;
html +='<option value="'+value['sekdg2']+'"  class="alert alert-danger">'+value['sekdg2']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM dijagnoze" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddijagnoze,$nazivdijagnoze,$sifradijagnoze);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$sifradijagnoze.'">'.$sifradijagnoze;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme90;?>'+'</li></ul>';
html +='<select class="form form-control" name="dijagnoza_sek3" id="dijagnoza_sek3">' ;
html +='<option value="'+value['sekdg3']+'"  class="alert alert-danger">'+value['sekdg3']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM dijagnoze" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddijagnoze,$nazivdijagnoze,$sifradijagnoze);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$sifradijagnoze.'">'.$sifradijagnoze;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme90;?>'+'</li></ul>';
html +='<select class="form form-control" name="dijagnoza_sek4" id="dijagnoza_sek4">' ;
html +='<option value="'+value['sekdg4']+'"  class="alert alert-danger">'+value['sekdg4']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM dijagnoze" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($iddijagnoze,$nazivdijagnoze,$sifradijagnoze);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$sifradijagnoze.'">'.$sifradijagnoze;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme91;?>'+'</li></ul>';
html +='<select class="form form-control" name="vrsta_otpusta" id="vrsta_otpusta">' ;
html +='<option value="'+value['vrstaotpusta']+'"  class="alert alert-danger">'+value['naziv_otpusta']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM vrsta_otpusta" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($idotpusta,$nazivotpusta);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$idotpusta.'">'.$nazivotpusta;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme92;?>'+'</li></ul>';
html +='<select class="form form-control" name="umro" id="umro">' ;
html +='<option value="'+value['umro']+'"  class="alert alert-danger">'+value['umro_naziv']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM umro" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($idumro,$nazivumro);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$idumro.'">'.$nazivumro;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme93;?>'+'</li></ul>';
html +='<select class="form form-control" name="razloghospitalizacije" id="razloghospitalizacije">' ;
html +='<option value="'+value['razlog_h']+'"  class="alert alert-danger">'+value['naziv_h']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM `razloghospitalizacije`" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($idrazlog,$nazivrazlog);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$idrazlog.'">'.$nazivrazlog;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme94;?>'+'</li></ul>';
html +='<select class="form form-control" name="mjestopovrede" id="mjestopovrede">' ;
html +='<option value="'+value['mjesto_povrede']+'"  class="alert alert-danger">'+value['naziv_povrede']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM `mjesto_povrede`" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($idmjesto,$nazivmjesto);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$idmjesto.'">'.$nazivmjesto;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme95;?>'+'</li></ul>';
html +='<select class="form form-control" name="operativnizahvat" id="operativnizahvat">' ;
html +='<option value="'+value['vrstaop']+'"  class="alert alert-danger">'+value['naziv_op']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM `operativnizahvat`" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($idop,$nazivop);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$idop.'">'.$nazivop;} ?>' ;
html +='</option>' ;
html +='</select>' ;
html +='<ul class="list-group"><li class="list-group-item list-group-item-dark">'+'<?php echo $dugme96;?>'+'</li></ul>';
html +='<select class="form form-control" name="ishodrehabilitacije" id="ishodrehabilitacije">' ;
html +='<option value="'+ value['ishod_reh']+'"  class="alert alert-danger">'+ value['nazivreh']+'</option>' ;
//html +='<input value="'+ value['doktor']+'"  class="form form-control"/>';
//html +='</option>';
<?php include('db.php');
$upit = "SELECT * FROM `ishodrehabilitacije`" ;
    
     $izjava = $db->prepare($upit) ;
     $izjava->execute();
     $izjava->store_result();
    $izjava->bind_result($idishod,$nazivishod);
  ?>  
html +='<?php while($izjava->fetch()){echo '<option class="form form-control" value="'.$idishod.'">'.$nazivishod;} ?>' ;
html +='</option>' ;
html +='</select>' ;
  });
  
  $("#pacijentodjel").append(html);
});





});

});

$("#azurirajotpusno").on('click', function(){
   console.log("azurirano otp.");
   
   console.log(idstacionar);
   
   var otpusno=$("#otpusno").val();
   var anamneza=$("#anamneza").val();
   var doktor=$("#doktor").val();
   var primarna_dijagnoza=$("#primarna_dijagnoza").val();
   var dijagnoza_sek1=$("#dijagnoza_sek1").val();
   var dijagnoza_sek2=$("#dijagnoza_sek2").val();
   var dijagnoza_sek3=$("#dijagnoza_sek3").val();
   var dijagnoza_sek4=$("#dijagnoza_sek4").val();
   var vrsta_otpusta=$("#vrsta_otpusta").val();
   var umro=$("#umro").val();
   var razloghospitalizacije=$("#razloghospitalizacije").val();
   var mjestopovrede=$("#mjestopovrede").val();
   var operativnizahvat=$("#operativnizahvat").val();
   var ishodrehabilitacije=$("#ishodrehabilitacije").val();


   console.log(otpusno,anamneza,doktor);
   console.log(primarna_dijagnoza,dijagnoza_sek1,dijagnoza_sek2,dijagnoza_sek3,dijagnoza_sek4,vrsta_otpusta,umro);
   console.log(razloghospitalizacije,mjestopovrede,operativnizahvat);
   console.log(ishodrehabilitacije);

   $.ajax('test.php?azuriranjeodjel',{
     'method':'POST',
     'data':{'idstacionar':idstacionar,'otpusno':otpusno,'anamneza':anamneza,'doktor':doktor,'primarna_dijagnoza':primarna_dijagnoza,
     'dijagnoza_sek1':dijagnoza_sek1,'dijagnoza_sek2':dijagnoza_sek2,'dijagnoza_sek3':dijagnoza_sek3,'dijagnoza_sek4':dijagnoza_sek4,
     'vrsta_otpusta':vrsta_otpusta,'umro':umro,'razloghospitalizacije':razloghospitalizacije,
     'mjestopovrede':mjestopovrede,'operativnizahvat':operativnizahvat,'ishodrehabilitacije':ishodrehabilitacije},
     'success':function(data,textStatus,jqXHR){
       console.log(data);
     },
     'error':function(jqXHR,textStatus,errorThrown){

     }
   })
  
});


$("#konzilijarni").on('click', function(){
  html1='';
  console.log('konzilijarni pregledi');
  
  $("#myModal19").hide();
  var podrucje=$("#podrucje").val();
  console.log(podrucje);
  $('#myModal200').modal('show');
    $('#myModal200').on('shown.bs.modal', function () {
  $.ajax('test.php?konzilijarni',{
    'method':'POST',
    'data':{'podrucje':podrucje},
    'success':function(data,textStatus,jqXHR){
      console.log(data);
    },
    'error':function(jqXHR,textStatus,errorThrown){
      
    }
  }).done(function(odgovor){
    console.log(odgovor);

    var response = JSON.parse(odgovor);
    console.log(response);
    var brojac=0;
    html1 +='<div id="uputnica_konz">'+'<table class="table table-bordered table-striped">';

    //html += '<div id="uputnica_konz">'+'<table>';
    $.each(response, function(index, value){

      brojac++;
      html1 +='<tr id="'+ value['id']+'">';
  html1 +='<td>'+brojac+'</td>';
  html1 +='<td>'+ value['naziv']+'</td>';
  html1 +='<td>'+'<input type="submit" class="btn btn-sm btn-primary" name="'+ value['id']+'" id="'+ value['nivo']+'" value="'+'<?php echo $dugme79;?>'+'" style="float:right;"/>'+'</td>';
  html1 +='</tr>';
  html1 +='</div>';

    });
  
    $("#tekst44").append(html1);
    
    
  
  //$("#konzilijarneuputnice").append(html);

  $("#uputnica_konz table tr input").click(function(){


    console.log(id);
    console.log(podrucje);
  

  var idmzstacionar = $("#idmz_stacionar").val();
  console.log(idmzstacionar);
  
  var uputnicanivo=$(this).attr('id');
  var id_ambulanta=$(this).attr('name');
 

  var hitno=$("#hitno").val();

  
   console.log(id_ambulanta);
   console.log(hitno);
   $.ajax('test.php?konzilijarniuputnica',{
     'method':'POST',
     'data':{'id':id,'podrucje':podrucje,'idmzstacionar':idmzstacionar,'id_ambulanta':id_ambulanta,'hitno':hitno},
     'success':function(data,textStatus,jqXHR){
       console.log(data);
     },
     'error':function(jqXHR,textStatus,errorThrown){

     }
   })
  
 
  });
})
  
    });
    
});

//ovdje je kod za premještaj s osjela na odjel

$("#premjestaj").click(function(){
console.log("Ovo je premještaj");
console.log(id);
var podrucje=$("#podrucje").val();
  console.log(podrucje);
  html1='';
  $("#myModal19").hide();
  $('#myModal200').modal('show');
    $('#myModal200').on('shown.bs.modal', function () {
  $.ajax('test.php?premjestaj',{
    'method':'POST',
    'data':{'podrucje':podrucje},
    'success':function(data,textStatus,jqXHR){
      console.log(data);
    },
    'error':function(jqXHR,textStatus,errorThrown){
      
    }
  }).done(function(odgovor){
    console.log(odgovor);

    var response = JSON.parse(odgovor);
    console.log(response);
    var brojac=0;
    html1 +='<div id="uputnica_premjestaj">'+'<table class="table table-bordered table-striped">';

    //html += '<div id="uputnica_konz">'+'<table>';
    $.each(response, function(index, value){

      brojac++;
      html1 +='<tr id="'+ value['id']+'">';
  html1 +='<td>'+brojac+'</td>';
  html1 +='<td>'+ value['naziv']+'</td>';
  html1 +='<td>'+'<input type="submit" class="btn btn-sm btn-primary" name="'+ value['idmz']+'" id="'+ value['klinika']+'" value="'+'<?php echo $dugme79;?>'+'" style="float:right;"/>'+'</td>';
  html1 +='</tr>';
  html1 +='</div>';

    });
  
    $("#tekst44").append(html1);
    
    
  
  //$("#konzilijarneuputnice").append(html);

  $("#uputnica_premjestaj table tr input").click(function(){


    console.log(id);
    console.log(podrucje);
  

  var idmzstacionar = $("#idmz_stacionar").val();
  console.log(idmzstacionar);
  
  var klinika=$(this).attr('id');
  var id_ambulanta=$(this).attr('name');
 

  var hitno=$("#hitno").val();

  
   console.log(id_ambulanta);
   console.log(klinika);
   console.log(hitno);
   $.ajax('test.php?',{
     'method':'POST',
     'data':{'id':id,'podrucje':podrucje,'idmzstacionar':idmzstacionar,'id_ambulanta':id_ambulanta,'hitno':hitno},
     'success':function(data,textStatus,jqXHR){
       console.log(data);
     },
     'error':function(jqXHR,textStatus,errorThrown){

     }
   })
  
 
  });
})
  
    }); 

})




// $("#otpusnopismo").on('click',function(){
//   console.log('ispis otpusnog!!');
//   console.log(idstacionar);
//   $("#forma_otpusnog").submit();
 
// })

// $("#forma_otpusnog").submit(function(){
//   console.log(idstacionar);
//    // alert(idstacionar);
//     $.ajax('otpusnoo.php',{
//  'method':'POST',
//  'data':{'idstacionar':idstacionar},
//  'success':function(data,textStatus,jqXHR){console.log(data);
//  },
//  'error':function(jqXHR,textStatus,errorThrown){
   
   
//  }
 
// })
//   });
  });


  $("#tablicastacionar table tr").click(function(){
    var idosoba=$(this).attr('name');
    $('#myModal18').modal('show');
$('#myModal18').on('shown.bs.modal', function () {
  $("#vrjednoststacionar").click(function(){ 
    var vrjednoststacionar=$(this).val();
    console.log(vrjednoststacionar);
    var mzid=$("#level").val();
  var podrucjeid=$("#podrucje").val();
  var nivoo=$("#nivo").val();
  var vrjednoststacionar=$("#vrjednoststacionar").val();

  //console.log(podrucjeid);
  //console.log(mzid);
  //console.log(nivoo);

   $.ajax('test.php?stacionar',{
 'method':'POST',
 'data':{'vrjednoststacionar':vrjednoststacionar},
 'success':function(data,textStatus,jqXHR){console.log(data);
 },
 'error':function(jqXHR,textStatus,errorThrown){
   
   
 }
 
}).done(function(odgovor){

console.log(odgovor);

var response = JSON.parse(odgovor);

console.log(response);
html +='<table class="table table-sm table-bordered table-striped">';
$.each(response, function(index, value){
  html +='<tr>';
//html +='<td>'+ value['id']+'</td>' ;
html +='<td>'+ value['naziv']+'</td>' ;
html +='<td><input class="btn btn-sm btn-primary" name="'+ value['id']+'" value="'+'<?php echo $dugme79;?>'+'" >'+'</td>';

});
html +='</tr>';
html +='</table>';

$("#unesitekststacionar").append(html);


$("#unesitekststacionar table tr input").click(function(){ 
console.log(mzid);
var idodjela=$(this).attr('name');
//var idos=$(this).attr('id');
console.log(idodjela);
console.log(idosoba);



 $.ajax('test.php?stacionarunos',{
    'method':'POST',
    'data':{'mzid':mzid,'idodjela':idodjela,'idosoba':idosoba},
    'success':function(data,textStatus,jqXHR){console.log(data);
       },
        'error':function(jqXHR,textStatus,errorThrown){
          
          
       }
  });  
  location.reload();
  
  
  });

})
  });
 

})
  //console.log('stacionar');
  $("#odustatiti").click(function(){ 
location.reload();
  });



});
}); 
    
    
</script>

<style>
  #karton{
  float:left;

}

#modal_lab{
  overflow: scroll;
}
#rad_modal{
  overflow: scroll;
}
#myModal2{
  overflow: scroll;
}
#unesitekst{
  overflow: scroll;
}
  </style>



