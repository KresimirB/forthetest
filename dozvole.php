<?php 
include('header.php');

//$sesija=($_POST['sesija']);
?>

<?php
$ajdijezika=($_POST['flexRadioDefault']);
include('db.php');
$upit = "SELECT jezici.id,jezici.dugme1,jezici.dugme2,jezici.dugme3,jezici.dugme4,jezici.dugme5,jezici.dugme6,jezici.dugme7,jezici.dugme8,jezici.dugme9,jezici.dugme10
,jezici.dugme11,jezici.dugme13,jezici.dugme14,jezici.dugme15,jezici.dugme16,jezici.dugme17 FROM jezici WHERE jezici.id=$ajdijezika" ;

 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($ajdjezika,$dugme1,$dugme2,$dugme3,$dugme4,$dugme5,$dugme6,$dugme7,$dugme8,$dugme9,$dugme10,$dugme11,$dugme13,$dugme14,$dugme15,$dugme16,$dugme17);
while($izjava->fetch()){ }
$upit = "SELECT * FROM gradovi" ;

 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
while($izjava->fetch()){  
echo '<header class="navbar navbar-dark sticky-top bg-btn '.$boja.' flex-md-nowrap p-0 shadow"><a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" style="font-family:Times New Roman;"><img src="'.$logo.'" class="img img-responsive" style="width:35px;height:20px;"/>'.' '.$naziv.'</a>';
}?>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <form action="pretraga2.php" method="POST" class="form-control form-control-dark w-100">
  <?php
  //echo '<input type="hidden" value="'.$sesija.'" id="sesija" name="sesija">';
  
  echo'
  <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
  <select type="text"  name="searchtype" autocomplete="on" placeholder="Uposlenik" class="form form-control" style="width:40%;">
  <option value="1">'.$dugme1.'</option>

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
        <h>Grad Mostar</h> <img src="images/logo22.png" style="width:35px;">
      </div>
      <div class="modal-body">
     <div id="tekst1"></div>
      </div>
      <div class="modal-footer" >
      <button class="btn btn-danger"  data-bs-target="#myModal2" data-bs-toggle="modal">Izbriši</button>
        <button class="btn btn-secondary" id="azurirati" name="azurirati">Ažuriraj</button>
        
        
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
          <form action="public.php" method="post">
      
          <li class="nav-item">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/money.svg" style="width:25px;"></span>'.' '.$dugme4.'</button>
              </a>
          </li></form>
          <form action="dozvole.php" method="post">
      
          <li class="nav-item">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/permission.svg" style="width:25px;"></span>'.' '.$dugme5.'</button>
              </a>
          </li></form>
       
       <form action="tcpdf/examples/svedozvole.php" method="post" target="_blank">
       <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <li class="nav-item">
            
          <a class="nav-link active">
              <button type="submit"  class="btn btn-sm"><span data-feather="home"><img src="images/pdf.svg" style="width:25px;"></span>'.' '.$dugme10.'</button>
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
          <form action="public.php" method="POST">
          <input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> 
          <button type="submit" class="btn btn-sm btn-outline-secondary" id="unosno" name="unosno" >'.' '.$dugme4.'</button>
            </form>
          
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
      <thead><th></th><th>'.$dugme13.'</th><th>'.$dugme14.'</th></thead>';
    }
$upit = "SELECT * FROM podrucni_ured " ;

$izjava = $db->prepare($upit) ;
$izjava->execute();
$izjava->store_result();
// $izjava->bind_result($ID,$naziv,$model,$dobavljacID,$proizvodjacID,$serviserID,$ugovorID,$odjelID,$zgradaID,$katID,$soba,$invbroj,$serijskibroj,$nabavnasifra,$datumzaduzenja,$istekgarancije,$preventivnostart,$preventivnointerval,$napomena,$status);
$izjava->bind_result($id,$naziv,$adresa,$telefon,$email);


while($izjava->fetch()){

   echo '<tr>
   <td><form action="dozvolemjesne.php" method="POST"><input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/> <input type="hidden" value="'.$id.'" name="id" id="id"><span class="small"><input type="submit" value="'.$dugme15.'" class="btn btn-sm btn-success"></form></span></td>
    <td>'.$naziv.'</td>
    <td>'.$telefon.'</td>
    </tr>';
  
}
echo  '</table></div></div>';
$upit = "SELECT * FROM gradovi" ;

 $izjava = $db->prepare($upit) ;
 $izjava->execute();
 $izjava->store_result();
$izjava->bind_result($id,$naziv,$aplikacija,$administracija,$logo,$boja,$tablica1,$tablica2,$tablica3);
    while($izjava->fetch()){
      echo '<div class="thumbnail col-lg-12 col-md-12 col-xs-12 col-sm-12 " ><div class="caption"><table class="table '.$tablica2.' ">
      <thead><th></th><th>'.$dugme13.'</th><th>'.$dugme14.'</th></thead>';
    }
$upit = "SELECT * FROM mz WHERE ured=0 " ;

$izjava = $db->prepare($upit) ;
$izjava->execute();
$izjava->store_result();
$izjava->bind_result($id,$naziv,$adresa,$telefon,$email,$ured,$podrucjeid);

while($izjava->fetch()){

   echo '<tr>
   <td><form action="dozvoleprikaz.php" method="POST"><input type="hidden" value="'.$id.'" name="idd" id="idd"><input type="hidden" value="'.$ajdijezika.'" name="flexRadioDefault"/><input type="hidden" value="2021" name="slika" id="slika"><input type="submit" value="'.$dugme5.'" class="btn btn-sm btn-warning"></form></td>
    <td>'.$naziv.'</td>
    <td>'.$telefon.'</td>
    </tr>';
  
}
echo  '</table></div></div>';     

  ?>  
    <script>
  $(document).on('ready',function(){  
  $("#unosno").click(function(){
    window.location = 'public.php';
  
}) 
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
</style>
