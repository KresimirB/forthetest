<?php 

include('db.php');

$vrjednosttd=$_POST['vrjednosttd'];
//$vrjednostpostojeceg=$_POST['vrjednostpostojeceg'];
$vrjednostinputanovi=$_POST['vrjednostinputanovi'];
//$vrjednostinputa=$_POST['vrjednostinputa'];
//$vrjednostid=$_POST['vrjednostid'];
$kvadratic=$_POST['kvadratic'];
//$niz=$_POST['niz'];

//$niz1=json_encode($niz);


echo $vrjednosttd.' : Ovo je vrjednost td ';
echo $vrjednostinputanovi.' : Ovo je vrjednost inputa';
echo $kvadratic.' : Ovo je vrjednost kvadratica';

if(isset($_GET['prvi'])){
 if($kvadratic=='prvakolona' && $vrjednosttd=='1' ){
     $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();

 }else if($kvadratic=='prvakolona' && $vrjednosttd=='2' ){
     $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='prvakolona' && $vrjednosttd=='3' ){
     $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='prvakolona' && $vrjednosttd=='4' ){
     $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='prvakolona' && $vrjednosttd=='5' ){
     $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona1='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
 }else if($kvadratic=='drugakolona' && $vrjednosttd=='1' ){
     $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='drugakolona' && $vrjednosttd=='2' ){
     $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
    $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='drugakolona' && $vrjednosttd=='3' ){
     $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='drugakolona' && $vrjednosttd=='4' ){
     $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='drugakolona' && $vrjednosttd=='5' ){
     $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona2='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
 }else if($kvadratic=='trecakolona' && $vrjednosttd=='1' ){
     $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='trecakolona' && $vrjednosttd=='2' ){
     $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
    $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='trecakolona' && $vrjednosttd=='3' ){
     $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='trecakolona' && $vrjednosttd=='4' ){
     $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='trecakolona' && $vrjednosttd=='5' ){
     $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona3='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
 }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='1' ){
     $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='2' ){
     $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
    $stmt->execute();
}else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='3' ){
    $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='4' ){
     $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='5' ){
     $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona4='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
 }else if($kvadratic=='petakolona' && $vrjednosttd=='1' ){
     $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='petakolona' && $vrjednosttd=='2' ){
     $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='petakolona' && $vrjednosttd=='3' ){
     $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='petakolona' && $vrjednosttd=='4' ){
     $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='petakolona' && $vrjednosttd=='5' ){
     $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
     $stmt = $db->prepare($query) ;
     $stmt->execute();
 }else if($kvadratic=='petakolona' && $vrjednosttd=='6' ){
    $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
    $stmt = $db->prepare($query) ;
    $stmt->execute();
}else if($kvadratic=='petakolona' && $vrjednosttd=='7' ){
    $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
    $stmt = $db->prepare($query) ;
    $stmt->execute();
}else if($kvadratic=='petakolona' && $vrjednosttd=='8' ){
    $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
    $stmt = $db->prepare($query) ;
    $stmt->execute();
}else if($kvadratic=='petakolona' && $vrjednosttd=='9' ){
    $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
    $stmt = $db->prepare($query) ;
    $stmt->execute();
}else if($kvadratic=='petakolona' && $vrjednosttd=='10' ){
    $query="UPDATE  `timegrid` SET kolona5='$vrjednostinputanovi' where id='$vrjednosttd' ";
    $stmt = $db->prepare($query) ;
    $stmt->execute();
}
}
if(isset($_GET['drugi'])){
    if($kvadratic=='prvakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
   
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='6' ){
            $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
            $stmt = $db->prepare($query) ;
            $stmt->execute();
        }else if($kvadratic=='prvakolona' && $vrjednosttd=='7' ){
                $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
                $stmt = $db->prepare($query) ;
                $stmt->execute();
            }else if($kvadratic=='prvakolona' && $vrjednosttd=='8' ){
                    $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
                    $stmt = $db->prepare($query) ;
                    $stmt->execute();
                }else if($kvadratic=='prvakolona' && $vrjednosttd=='9' ){
                        $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
                        $stmt = $db->prepare($query) ;
                        $stmt->execute();
                    }else if($kvadratic=='prvakolona' && $vrjednosttd=='10' ){
                            $query="UPDATE  `timegrid` SET kolona6='$vrjednostinputanovi' where id='$vrjednosttd' ";
                            $stmt = $db->prepare($query) ;
                            $stmt->execute();
                        
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
       $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona7='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
       $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona8='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
       $stmt->execute();
   }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='3' ){
       $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona9='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona10='$vrjednostinputanovi' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }
   }
   if(isset($_GET['izbrisiprvi'])){
    if($kvadratic=='prvakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
   
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona1='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
       $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona2='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
       $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona3='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
       $stmt->execute();
   }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='3' ){
       $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona4='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona5='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }
   }
   if(isset($_GET['izbrisidrugi'])){
    if($kvadratic=='prvakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
   
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='prvakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona6='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
       $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='drugakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona7='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
       $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='trecakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona8='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
       $stmt->execute();
   }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='3' ){
       $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='cetvrtakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona9='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='1' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='2' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='3' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='4' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='5' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='6' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='7' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='8' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='9' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }else if($kvadratic=='petakolona' && $vrjednosttd=='10' ){
        $query="UPDATE  `timegrid` SET kolona10='' where id='$vrjednosttd' ";
        $stmt = $db->prepare($query) ;
        $stmt->execute();
    }
   }


?>
