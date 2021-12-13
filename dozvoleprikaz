<?php 
include('header.php');
$id=$_POST['idd'];
$slika=$_POST['slika'];
//$sesija=($_POST['sesija']);
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
$ajdijezika=($_POST['flexRadioDefault']);

include('db.php');
$upit = "SELECT jezici.id,jezici.dugme1,jezici.dugme2,jezici.dugme3,jezici.dugme4,jezici.dugme5,jezici.dugme6,jezici.dugme7,jezici.dugme8,jezici.dugme9,jezici.dugme10
,jezici.dugme11,jezici.dugme13,jezici.dugme14,jezici.dugme15,jezici.dugme16,jezici.dugme17,jezici.dugme18,jezici.dugme19
,jezici.dugme20,jezici.dugme21,jezici.dugme22,jezici.dugme23,jezici.dugme24,jezici.dugme25,jezici.dugme31,jezici.dugme26,jezici.dugme27,jezici.dugme28,jezici.dugme29,jezici.dugme32,jezici.dugme12,jezici.dugme33,jezici.dugme34,jezici.dugme35 FROM jezici WHERE jezici.id=$ajdijezika" ;

 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($ajdjezika,$dugme1,$dugme2,$dugme3,$dugme4,$dugme5,$dugme6,$dugme7,$dugme8,$dugme9,$dugme10,$dugme11,$dugme13,$dugme14,$dugme15,$dugme16,$dugme17,$dugme18,$dugme19,$dugme20,$dugme21,$dugme22,$dugme23,$dugme24,$dugme25,$dugme31,$dugme26,$dugme27,$dugme28,$dugme29,$dugme32,$dugme12,$dugme33,$dugme34,$dugme35);
while($izjava->fetch()){ }
$upit = "SELECT * FROM gradovi" ;

 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($idd,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
while($izjava->fetch()){  
echo '<header class="navbar navbar-dark sticky-top bg-btn '.$boja.' flex-md-nowrap p-0 shadow"><a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" style="font-family:Times New Roman;"><img src="'.$logo.'" class="img img-responsive" style="width:35px;height:20px;"/>'.' '.$naziv.'</a>';
}
?>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <form action="pretraga5.php" method="POST" class="form-control form-control-dark w-100">
  <?php
  //echo '<input type="hidden" value="'.$sesija.'" id="sesija" name="sesija">';
  include('db.php');
 $upit = "SELECT * FROM mz WHERE id='$id' " ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
// $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
 $izjava->bind_result($id,$naziv,$adresa,$telefon,$email,$ured,$podrucjeid);
 //while($izjava->fetch()){
  echo '<input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
  <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
  <input type="hidden" value="'.$id.'" name="ured" id="ured"/> 
  <input type="hidden" value="'.$slika.'" name="slika" id="slika"/> 
  
<input type="hidden" value="" id="tip" name="tip">
  <select type="text"  name="searchtype" autocomplete="off" placeholder="Uposlenik" class="form form-control" style="width:40%;">
  <option value="1">'.$dugme12.'</option>
  <option value="2">'.$dugme20.'</option>
  <option value="3">'.$dugme23.'</option>
  <option value="4">'.$dugme24.'</option>
  <option value="5">'.$dugme25.'</option>
  <option value="6">'.$dugme33.'</option>
  </select>
  <input  type="text" placeholder="'.$dugme2.'" aria-label="Search" style="width:28%;" class="form form-control" name="searchterm" autocomplete="off">
  <button type="submit" class="btn btn-secondary" style="margin-bottom:3px;">'.$dugme3.'</button>
  </form>';
   //}
  ?>
  

</header>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvorii"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novi unos!</h4>
      </div>
      <div class="modal-body">
      
     <div id="tekst2"></div>
      </div>
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
        <button type="button" class="btn btn-default" data-dismiss="modal" id="stornire" >Odustani</button>
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="Unesi" id="ponesi" name="ponesi"/>
       
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvori"><span aria-hidden="true">&times;</span></button>
        
     
     <?php 
     echo '<h>'.$dugme35.'</h>
     </div>
     <div class="modal-body"><table class="table table-sm table-bordered" style="text-align:center;"><thead class="alert alert-info">
     <th><span style="font-family:Gabriola;"><img src="images/man.svg" style="width:20px;"/>'.$dugme19.'</span></th>
     </thead></table><div id="tekst1"></div>';
     echo '<table class="table table-sm table-bordered" style="text-align:center;"><thead class="alert alert-info">
     <th><span style="font-family:Gabriola;"><img src="images/office-building.svg" style="width:20px;"/>'.$dugme20.'</span></th>
     </thead></table><div id="tekst22"></div>';
     echo '<table class="table table-sm table-bordered" style="text-align:center;"><thead class="alert alert-info">
     <th><span style="font-family:Gabriola;"><img src="images/calendarr.svg" style="width:20px;"/>'.$dugme23.'</span></th>
     </thead></table><div id="tekst23"></div>';
     echo '<table class="table table-sm table-bordered" style="text-align:center;"><thead class="alert alert-info">
     <th><span style="font-family:Gabriola;"><img src="images/checklist.svg" style="width:20px;"/>'.$dugme33.'</span></th>
     </thead></table><div id="tekst24"></div>';

     echo '<table class="table table-sm table-bordered" style="text-align:center;"><thead class="alert alert-info">
     <th><span style="font-family:Gabriola;"><img src="images/dossier.svg" style="width:20px;"/>'.$dugme24.'</span></th>
     </thead></table><div id="tekst26"></div>';
     echo '<table class="table table-sm table-bordered" style="text-align:center;"><thead class="alert alert-info">
     <th><span style="font-family:Gabriola;"><img src="images/description.svg" style="width:20px;"/>'.$dugme25.'</span></th>
     </thead></table><div id="tekst27"></div>';
     ?>
     
      </div>
      <div class="modal-footer" >
      
        
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="zatvor"><span aria-hidden="true">&times;</span></button>
        <h>Brisanje zapisa</h> 
      </div>
      <div class="modal-body">
     <p style="color:red;">Sigurno želite brisati zapis?</p>
      </div>
      <div class="modal-footer" >
      <button class="btn btn-danger" id="izbrisati" name="izbrisati" >Izbriši</button>
        <button class="btn btn-secondary" id="odustati" name="odustati">Odustani</button>
        
        
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
          <form action="dozvoleprikaz.php" method="post">
      
          <li class="nav-item">
           <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
           <input type="hidden" value="'.$datum_datum.'" name="slika" id="slika"/> 
           <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/dashboard.svg" style="width:25px;"></span>'.' '.$dugme26.'</button>
              </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$prosla_prosla.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$prosla_prosla.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$predprosla_predprosla.'" name="slika" id="slika"/>
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>  
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$predprosla_predprosla.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
     
          <li class="nav-item">
            <a class="nav-link">
            <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
            <input type="hidden" value="'.$unazadtreca_unazadtreca.'" name="slika" id="slika"/> 
            <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadtreca_unazadtreca.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadcetvrta_unazadcetvrta.'" name="slika" id="slika"/>
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>  
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadcetvrta_unazadcetvrta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadpeta_unazadpeta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadpeta_unazadpeta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadsesta_unazadsesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsesta_unazadsesta.'</button>
            </a>
          </li></form>
     ';
     echo ' <li class="nav-item dropup">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       '.$dugme34.'
     </a>
     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
     <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadsedma_unazadsedma.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsedma_unazadsedma.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadosma_unazadosma.'" name="slika" id="slika"/>
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>  
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadosma_unazadosma.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazaddeveta_unazaddeveta.'" name="slika" id="slika"/>
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>  
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddeveta_unazaddeveta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazaddeseta_unazaddeseta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddeseta_unazaddeseta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadjedanaesta_unazadjedanaesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadjedanaesta_unazadjedanaesta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazaddvanesta_unazaddvanesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazaddvanesta_unazaddvanesta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadtrinesta_unazadtrinesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadtrinesta_unazadtrinesta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadcetrnesta_unazadcetrnesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadcetrnesta_unazadcetrnesta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadpetnesta_unazadpetnesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadpetnesta_unazadpetnesta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadsestnesta_unazadsestnesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsestnesta_unazadsestnesta.'</button>
            </a>
          </li></form>
          <form action="dozvoleprikaz.php" method="post">
          <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
          <input type="hidden" value="'.$unazadsedamnesta_unazadsedamnesta.'" name="slika" id="slika"/> 
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            <a class="nav-link">
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/calendarr.svg" style="width:25px;"></span> '.$unazadsedamnesta_unazadsedamnesta.'</button>
            </a>
          </li></form>
     </ul>
   </li>
   <form action="tcpdf/examples/izvjescedozvole.php" method="post" target="_blank">
   <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
   <input type="hidden" value="'.$slika.'" name="slika" id="slika"/>
              <input type="hidden" value="'.$id.'" name="printid" id="printid"/> 
              <input type="hidden" value="'.$naziv.'" name="naziv" id="naziv"/> 
              <input type="hidden" value="'.$telefon.'" name="telefon" id="telefon"/> 
              <input type="hidden" value="'.$adresa.'" name="adresa" id="adresa"/>
              <input type="hidden" value="'.$ured.'" name="ured" id="ured"/>
   <li class="nav-item">
     <a class="nav-link">
     <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span>'.' '.$dugme10.'</button>
     </a>
   </li></form>';
        echo '</ul>
        

        <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../gradovi/gradovi.php"><img src="images/izlaz1.svg" class="img img-responsive" style="width:35px;"/></a>
    </li>
  </ul>  
        
      </div>
    </nav>
  
          ';
       
 




 while($izjava->fetch()){
// echo '<div class="page-header col-lg-12 col-md-12 col-xs-12 col-sm-12" style="font-family:Gabriola">
//         <h1>'.$naziv.'<small> '.$adresa.'</small><small>'.' '.$telefon.'</small></h1>
//         <form method="POST" action="tcpdf/examples/financije.php" style="float:right;">
//         <input type="hidden" value="'.$id.'" name="printid" />
//         <input type="submit" value="Isprintaj Izvješće" class="btn btn-primary"/>
//         </form>
//         <form method="POST" action="starigrad.php" style="float:right;margin-right:1px;">
//         <input type="hidden" value="'.$ured.'" name="id" />
//         <input type="submit" value="Natrag na Mjesne" class="btn btn-success"/>
//         </form>
//         </div>';
echo '<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">'.$naziv.'</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
    <form action="dozvole.php" method="POST">
    <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
      <button type="submit" class="btn btn-sm btn-outline-secondary" id="unosno" name="unosno">'.$dugme16.'</button>
      </form>
    <form action="financije.php" method="POST">
    <input type="hidden" value="'.$id.'" name="idd" id="idd"/> 
     <input type="hidden" value="'.$slika.'" name="slika" id="slika"/> 
     <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
    <button type="submit" class="btn btn-sm btn-outline-secondary" id="unosno" name="unosno" >'.$dugme4.'</button>
    </form>
    
    
  
    </div>
   
   
  </div>
</div>

';
 }

$upit = "SELECT * FROM dozvole WHERE mz='$id' AND datum LIKE '$slika%' ORDER BY datum DESC" ;
 //$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
// $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
 $izjava->bind_result($id,$osoba,$firma,$datum,$dokument,$opis,$idkorisnika,$datumunosa,$idpodrucja,$protokol,$mz);
 
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
  ?>  
<script>
$(document).on('ready',function(){
  var htmll='';
  var html='';
  var html1='';
  var html2='';
  var html3='';
  var html4='';
  var html5='';

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

html +='<table class="table table-sm table-bordered " style="text-align:center;margin-top:-15px;">' ;
html +='<tr>' ;
html +='<td>'+ value['osoba']+'</td>' ;
html +='</tr>' ;
html +='</table>' ;
htmll +='<table class="table table-sm table-bordered " style="text-align:center;margin-top:-15px;">' ;
htmll +='<tr>' ;
htmll +='<td>'+ value['firma']+'</td>' ;
htmll +='</tr>' ;
htmll +='</table>' ;
html1 +='<table class="table table-sm table-bordered " style="text-align:center;margin-top:-15px;">' ;
html1 +='<tr>' ;
html1 +='<td>'+ value['datum']+'</td>' ;
html1 +='</tr>' ;
html1 +='</table>' ;
html2 +='<table class="table table-sm table-bordered" style="text-align:center;margin-top:-15px;">' ;
html2 +='<tr>' ;
html2 +='<td>'+ value['protokol']+'</td>' ;
html2 +='</tr>' ;
html2 +='</table>' ;

html4 +='<table class="table table-sm table-bordered" style="text-align:center;margin-top:-15px;">' ;
html4 +='<tr>' ;
html4 +='<td><a href="images/'+ value['dokument']+'">'+ value['dokument']+'</a></td>' ;
html4 +='</tr>' ;
html4 +='</table>' ;
html5 +='<table class="table table-sm table-bordered" style="text-align:center;margin-top:-15px;">' ;
html5 +='<tr>' ;
html5 +='<td>'+ value['opis']+'</td>' ;
html5 +='</tr>' ;
html5 +='</table>' ;

});
$("#tekst1").append(html);
$("#tekst22").append(htmll);
$("#tekst23").append(html1);
$("#tekst24").append(html2);

$("#tekst26").append(html4);
$("#tekst27").append(html5);  

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
//   $("#unosno").click(function(){
//     window.location = 'public.php';
  
// }) 
$("#dozvole").click(function(){
    window.location = 'dozvole.php';
  
})    
    });
</script> 
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
</style>
