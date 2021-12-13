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
$ajdijezika=($_POST['flexRadioDefault']);
$userid = $_POST['userid'];
$password = $_POST['password'];
include('db.php');
$upit = "SELECT jezici.id,jezici.dugme1,jezici.dugme2,jezici.dugme3,jezici.dugme4,jezici.dugme5,jezici.dugme6,jezici.dugme7,jezici.dugme8,jezici.dugme9,jezici.dugme10
  ,jezici.dugme11,jezici.dugme13,jezici.dugme14,jezici.dugme15,jezici.dugme16,jezici.dugme17,jezici.dugme26,jezici.dugme19,jezici.dugme20,jezici.dugme21,jezici.dugme22,jezici.dugme23,jezici.dugme24,jezici.dugme25,jezici.dugme34,jezici.dugme32,jezici.dugme36,jezici.dugme37,jezici.dugme38,jezici.dugme39,jezici.dugme40,jezici.dugme41,jezici.dugme42,jezici.dugme43,jezici.dugme44,jezici.dugme45,jezici.dugme46,jezici.dugme47,jezici.dugme48,jezici.dugme49,jezici.dugme50,jezici.dugme51,jezici.dugme52,jezici.dugme53,jezici.dugme54,jezici.dugme55,jezici.dugme56,jezici.dugme57,jezici.dugme58,jezici.dugme59,jezici.dugme60 FROM jezici WHERE jezici.id=$ajdijezika" ;
  
   $izjava = $db->prepare($upit) ;
   $izjava->execute();
   $izjava->store_result();
  $izjava->bind_result($ajdjezika,$dugme1,$dugme2,$dugme3,$dugme4,$dugme5,$dugme6,$dugme7,$dugme8,$dugme9,$dugme10,$dugme11,$dugme13,$dugme14,$dugme15,$dugme16,$dugme17,$dugme26,$dugme19,$dugme20,$dugme21,$dugme22,$dugme23,$dugme24,$dugme25,$dugme34,$dugme32,$dugme36,$dugme37,$dugme38,$dugme39,$dugme40,$dugme41,$dugme42,$dugme43,$dugme44,$dugme45,$dugme46,$dugme47,$dugme48,$dugme49,$dugme50,$dugme51,$dugme52,$dugme53,$dugme54,$dugme55,$dugme56,$dugme57,$dugme58,$dugme59,$dugme60);
  while($izjava->fetch()){ }
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


<form action="pretraga2admin.php" method="POST" class="form-control form-control-dark w-100">
<?php
//echo '<input type="hidden" value="'.$sesija.'" id="sesija" name="sesija">';

echo'
<input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
<input type="hidden" name="userid" value="'.$userid.'"/>
<input type="hidden" name="password" value="'.$password.'"/>
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
  <option value="alert-warning">'.$dugme48.'</opti


</select><input  type="submit" class="btn-xs btn-primary" value="'.$dugme58.'" id="promjeniboju" name="promjeniboju"/>';
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


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="izlaz1">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Unesi!</h4>
      </div>
      <div class="modal-body" id="test11">
      <label for="podrucjenaziv" class="label label-primary">Unesite naziv</label>
      <input type="text" class="form form-control" id="podrucjenaziv" name="podrucjenaziv"/>
      <label for="podrucjeadresa" class="label label-primary">Unesite adresu</label>
      <input type="text" class="form form-control" id="podrucjeadresa" name="podrucjeadresa"/>
      <label for="podrucjetelefon" class="label label-primary">Unesite telefon</label>
      <input type="text" class="form form-control" id="podrucjetelefon" name="podrucjetelefon"/>
      <label for="podrucjeemail" class="label label-primary">Unesite email</label>
      <input type="text" class="form form-control" id="podrucjeemail" name="podrucjeemail"/>
      
      <input type="hidden" class="form form-control" id="podrucjeured" name="podrucjeured" value="0"/>
      
      
    
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz2" name="izlaz2">Odustani</button>
      <input type="submit" class="btn btn-primary" data-dismiss="modal" value="Unesi" id="unesipodrucje" name="unesipodrucje"/>
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
        <h4 class="modal-title" id="myModalLabel">Logo</h4>
      </div>
      <form id="form1" action="ajaxupload1.php" method="post" enctype="multipart/form-data">'
      <div class="modal-body" id="test">
      
      <input id="uploadImage1" type="file"  name="image" value="'+ value['file_name'] +'" class="form form-control"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" id="quitt">Odustani</button>
        <input class="btn btn-success" type="submit" id="submitt" value="Upload">
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
      <h4 class="modal-title" id="myModalLabel">Ažuriranje podataka!</h4>
    </div>
    <div class="modal-body">
    
   <div id="tekst5"></div>
    </div>
    <div class="modal-footer">
      <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
      <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisipodrucje" name="izbrisipodrucje" style="float:left;"/>
      <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz6" name="izlaz6">Odustani</button>
      <input type="submit" class="btn btn-primary" data-dismiss="modal" value="Promjeni" id="promjenipodrucje" name="promjenipodrucje"/>
     
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="static" data-keyboard="false" data-bs-backdrop="static">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" required id="izlaz7"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Ažuriranje podataka!</h4>
    </div>
    <div class="modal-body">
    
   <p class="alert alert-danger">Jeste li sigurni da želite brisati zapis?</p>
    </div>
    <div class="modal-footer">
      <!-- <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisi" name="izbrisi" /> -->
      
      <button type="button" class="btn btn-default" data-dismiss="modal" id="izlaz8" name="izlaz8">Odustani</button>
      <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Izbriši" id="izbrisipodrucje1" name="izbrisipodrucje1"/>
     
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
        <form action="aplikacija.php" method="post">
        <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
        <input type="hidden" name="userid" value="'.$userid.'"/>
        <input type="hidden" name="password" value="'.$password.'"/>
        <li class="nav-item">
          
        <a class="nav-link active">
        
       
            <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/money.svg" style="width:25px;"></span>'.' '.$dugme4.'</button>
            </a>
        </li></form>
        <form action="dozvoleadmin.php" method="post">
        <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
        <input type="hidden" name="userid" value="'.$userid.'"/>
        <input type="hidden" name="password" value="'.$password.'"/>
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
    <a class="nav-link" href="../gradovi/gradovi.php"><img src="images/izlaz1.svg" class="img img-responsive" style="width:35px;"/></a>
  </li>
</ul>
    </div>
  </nav>

        ';
     

    echo '<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">'.$dugme5.'</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <form action="aplikacija.php" method="POST">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
          <input type="hidden" name="userid" value="'.$userid.'"/>
          <input type="hidden" name="password" value="'.$password.'"/>
          <input type="submit" class="btn btn-sm btn-outline-secondary" id="dozvole" name="dozvole" value="'.$dugme4.'"/>
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
    echo '<div class="thumbnail col-lg-12 col-md-12 col-xs-12 col-sm-12 " ><div class="caption"><table class="table '.$tablica1.' ">
    <thead><select name="tablica1" id="tablica1" >
    <option value="table-bordered table-striped table-sm">'.$dugme49.'</option>
    <option value="table-bordered table-sm">'.$dugme50.'</option>
    <option value="table-striped table-sm">'.$dugme51.'</option>
    <option value="table-bordered table-striped table-md">'.$dugme52.'</option>
    <option value="table-bordered table-md">'.$dugme53.'</option>
    <option value="table-striped table-md">'.$dugme54.'</option>
    
    
    </select><input type="submit" value="'.$dugme58.'" id="promjenitablicu1" name="promjenitablicu1" class="btn-xs btn-primary" /></thead><thead><th></th><th>'.$dugme13.'</th><th>'.$dugme14.'</th></thead>';
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
 <td id="0"><form action="starigradadmin2.php" method="POST"><input type="hidden" value="'.$id.'" name="id" id="id"> <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
 <input type="hidden" name="userid" value="'.$userid.'"/>
 <input type="hidden" name="password" value="'.$password.'"/><span class="small"><input type="submit" value="'.$dugme15.'" class="btn btn-sm btn-success"></form></span></td>
  <td id="'.$id.'">'.$naziv.'</td>
  <td id="'.$id.'">'.$telefon.'</td>
  </tr>';

}
echo  '</table></div></div>';
$upit = "SELECT * FROM gradovi" ;
  
   $izjava = $db->prepare($upit) ;
   $izjava->execute();
   $izjava->store_result();
  $izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
  while($izjava->fetch()){
    echo '<div class="thumbnail col-lg-12 col-md-12 col-xs-12 col-sm-12 " ><div class="caption"><table class="table '.$tablica2.'">
    <thead><select name="tablica2" id="tablica2">
    <option value="table-bordered table-striped table-sm">'.$dugme49.'</option>
    <option value="table-bordered table-sm">'.$dugme50.'</option>
    <option value="table-striped table-sm">'.$dugme51.'</option>
    <option value="table-bordered table-striped table-md">'.$dugme52.'</option>
    <option value="table-bordered table-md">'.$dugme53.'</option>
    <option value="table-striped table-md">'.$dugme54.'</option>
    
    </select><input type="submit" value="'.$dugme58.'" id="promjenitablicu2" name="promjenitablicu2" class="btn-xs btn-primary"/></thead><thead><th></th><th>'.$dugme13.'</th><th>'.$dugme14.'</th></thead>';
  }

$upit = "SELECT * FROM mz WHERE ured=0 " ;
//$upit = "SELECT rnalog_nalog.ID,rnalog_nalog.oznaka,odjel.naziv,rnalog_tip_problema.naziv,rnalog_nalog.status,rnalog_nalog.preuzeoID,osoba.ime,rnalog_nalog.problem,rnalog_nalog.invbr,rnalog_nalog.kosoba,rnalog_nalog.telefon FROM rnalog_nalog LEFT JOIN odjel ON rnalog_nalog.odjelID=odjel.ID LEFT JOIN rnalog_tip_problema ON rnalog_nalog.tipproblemaID=rnalog_tip_problema.ID LEFT JOIN osoba ON rnalog_nalog.preuzeoID=osoba.ID WHERE rnalog_nalog.tipproblemaID='9' AND osoba.ime LIKE '%$pretragauvjet%' ORDER BY rnalog_nalog.status,rnalog_nalog.ID DESC  " ;
$izjava = $db->prepare($upit) ;
$izjava->execute();
$izjava->store_result();
// $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
$izjava->bind_result($id,$naziv,$adresa,$telefon,$email,$ured,$podrucje);


while($izjava->fetch()){

 echo '<tr>
 <td id="0"><form action="dozvoleprikazadmin.php" method="POST"> <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/>
 <input type="hidden" name="userid" value="'.$userid.'"/>
 <input type="hidden" name="password" value="'.$password.'"/><input type="hidden" value="'.$id.'" name="idd" id="idd"><input type="hidden" value="2021" name="slika" id="slika"><input type="submit" value="'.$dugme5.'" class="btn btn-sm btn-warning"></form></td>
  <td id="'.$podrucje.'">'.$naziv.'</td>
  <td id="'.$podrucje.'">'.$telefon.'</td>
  </tr>';

}
// $query="SELECT max(id) FROM podrucni_ured";
// $stmt = $db->prepare($query);
// $stmt->execute();
// //$stmt->store_result();
// // $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
// $stmt->bind_result($zadnjiid);
// while($stmt->fetch()){
// echo '<tr><td>'.$zadnjiid.'</td></tr>';
//  }
echo  '</table></div></div>'; 
}else{echo '<div class="alert alert-danger">Nemate dozvolu za korištenje!<a  href="aplikacija.php"> Prijavi se</a></div>';}  
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

$("table tr").on('click',function(){

var id=$(this).attr('id');      
$('#myModal1').modal('show');
$('#myModal1').on('shown.bs.modal', function () {
  //$('#myInput').trigger('focus');
console.log(id);
     
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
html +='<option value="'+ value['eko']+'"  class="alert alert-primary">PRIHOD</option>' ;
html +='<option value="0"  class="alert alert-danger">RASHOD</option>' ;
html +='</select>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary" style="text-align:center">OSOBA</label>';
html +='<input value="'+ value['osoba']+'" name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">TVRTKA</label>';
html +='<input value="'+ value['firma']+'" name="firma" id="firma" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">VRSTA UPLATE</label>';
html +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" >'+value['vrsta']+'</textarea>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">IZNOS UPLATE</label>';
html +='<input type="number" value="'+ value['cijena']+'" name="cijena" id="cijena" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">DATUM UPLATE</label>';
html +='<input type="date" value="'+ value['datum']+'" name="datum" id="datum" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true" >' ;
html +='<a href="images/'+value['slika']+'" target="_blank"><label id="link" class="badge rounded-pill bg-primary">DOKUMENT</label></a>';
//html +='<label class="badge rounded-pill bg-primary">DOKUMENT</label>';
html +='<input type="text" value="'+ value['slika']+'" name="slikaa" id="slikaa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">OPIS</label>';
html +='<textarea type="text"  name="opis" id="opis" class="form form-control" >'+value['opis']+'</textarea>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<input type="hidden" value="'+ value['ured']+'" name="ured" id="ured" class="form form-control"/>' ;
html +='</li>' ;
}else{
  html +='<li class="list-group-item btn-danger" aria-current="true">' ;
html +='<select class="form form-control" name="eko" id="eko">' ;
html +='<option value="'+ value['eko']+'"  class="alert alert-danger">RASHOD</option>' ;
html +='<option value="1"  class="alert alert-primary">PRIHOD</option>' ;
html +='</select>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger" style="text-align:center">OSOBA</label>';
html +='<input value="'+ value['osoba']+'" name="osoba" id="osoba" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">TVRTKA</label>';
html +='<input value="'+ value['firma']+'" name="firma" id="firma" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">VRSTA UPLATE</label>';
html +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" >'+value['vrsta']+'</textarea>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">IZNOS UPLATE</label>';
html +='<input type="number" value="'+ value['cijena']+'" name="cijena" id="cijena" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">DATUM UPLATE</label>';
html +='<input type="date" value="'+ value['datum']+'" name="datum" id="datum" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<a href="images/'+value['slika']+'"><label class="badge rounded-pill bg-danger">DOKUMENT</label></a>';
html +='<input type="text" value="'+ value['slika']+'" name="slikaa" id="slikaa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-danger">OPIS</label>';
html +='<textarea type="text"  name="opis" id="opis" class="form form-control" >'+value['opis']+'</textarea>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<input type="hidden" value="'+ value['ured']+'" name="ured" id="ured" class="form form-control"/>' ;
html +='</li>' ;
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
    var slika=$("#slikaa").val();
    var opis=$("#opis").val();
    var ured=$("#ured").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#podrucje").val();
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
        $.ajax('test.php?financije',{
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
    
    htmll +='<div class="bd-example">' ;
htmll +='<ul class="list-group" style="text-align:LEFT;">' ;
htmll +='</ul>' ;
htmll +='<li class="list-group-item  bg-secondary" aria-current="true">' ;
htmll +='<select class="form form-control" name="eko" id="eko">' ;
htmll +='<option value="1"  class="alert alert-primary">PRIHOD</option>' ;
htmll +='<option value="0"  class="alert alert-danger">RASHOD</option>' ;
htmll +='</select>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" style="text-align:center">OSOBA</label>';
htmll +='<input  name="osoba" id="osoba" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary" >TVRTKA</label>';
htmll +='<input  name="firma" id="firma" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">VRSTA UPLATE</label>';
htmll +='<textarea type="text"  name="vrsta" id="vrsta" class="form form-control" autocomplete="off"></textarea>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">IZNOS UPLATE</label>';
htmll +='<input type="number"  name="cijena" id="cijena" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">DATUM UPLATE</label>';
htmll +='<input type="date"  name="datum" id="datum" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">DOKUMENT</label>';
htmll +='<input type="text"  name="slikaa" id="slikaa" class="form form-control" autocomplete="off"/>' ;
htmll +='</li>' ;
htmll +='<li class="list-group-item" aria-current="true">' ;
htmll +='<label class="badge rounded-pill bg-secondary">OPIS</label>';
htmll +='<textarea type="text"  name="opis" id="opis" class="form form-control" autocomplete="off"></textarea>' ;
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
    var slika=$("#slikaa").val();
    var opis=$("#opis").val();
    var ured=$("#level").val();
    var idkorisnika=$("#idkorisnika").val();
    var podrucje=$("#podrucje").val();
    console.log(eko);
    console.log(osoba);
    console.log(firma);
    console.log(vrsta);
    console.log(cijena);
    console.log(datum);
    console.log(slika);
    console.log(opis);
    console.log(ured);
    $.ajax('test.php?unesi',{
         'method':'POST',
         'data':{
           'eko':eko,'osoba':osoba,'firma':firma,'vrsta':vrsta,'cijena':cijena,'datum':datum,'slika':slika,'opis':opis,'ured':ured,'idkorisnika':idkorisnika,'podrucje':podrucje},
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
$("table tr td").click(function(){
//console.log("upload dokumentaaa");

var id=$(this).attr('id');
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
html +='<label class="badge rounded-pill bg-primary" style="text-align:center">NAZIV</label>';
html +='<input value="'+ value['naziv']+'" name="podrucje1naziv" id="podrucje1naziv" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">ADRESA</label>';
html +='<input value="'+ value['adresa']+'"  name="podrucje1adresa" id="podrucje1adresa" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">TELEFON</label>';
html +='<input value="'+ value['telefon']+'" name="podrucje1telefon" id="podrucje1telefon" class="form form-control"/>' ;
html +='</li>' ;
html +='<li class="list-group-item" aria-current="true">' ;
html +='<label class="badge rounded-pill bg-primary">EMAIL</label>';
html +='<input value="'+ value['email']+'"  name="podrucje1email" id="podrucje1email" class="form form-control"/>' ;
html +='</li>' ;


 

html +='</ul>' ;

html +='</div>' ;

});
$("#tekst5").append(html);



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
