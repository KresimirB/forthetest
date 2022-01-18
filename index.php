<!DOCTYPE HTML>
<html>
<head>
<style>
  table input{
  height:40px;
  margin-top:2px;
}
table tr{
  height:40px;
}
#div1, #div2 {
  float: left;
  width: 80px;
  height: 200px;
  /* margin-top: 10px; */
  margin-top: 10px;
  border: 1px solid black;
}
</style>
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>

<?php
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
echo '<div id="unesitekststacionar"></div>
<div class="col-lg-7 mt-5" style="text-align:left;margin-left:15px;" id="prviprikaz">
<table class="table table-bordered">
<thead><th></th><th>Montag</th><th>Dienstag</th><th>Mittwoch</th><th>Donnerstag</th><th>Freitag</th></thead>';
include('db.php');
$upit = "SELECT * FROM timegrid" ;
  
   $izjava = $db->prepare($upit) ;
   $izjava->execute();
   $izjava->store_result();
  $izjava->bind_result($id,$osoba,$kolona1,$kolona2,$kolona3,$kolona4,$kolona5,$kolona6,$kolona7,$kolona8,$kolona9,$kolona10);
  while($izjava->fetch()){ 
// echo '<tr style="height:100px;" id="'.$id.'">
// <td id="'.$id.'">'.$osoba.'</td>
// <td name="'.$datum_datum.'" id="prvakolona" ondrop="drop(event)" ondragover="allowDrop(event)">';
// //if($kolona1!=''){
//   echo'<input type="text" id="novi" name="prviin" class="form form-control alert-secondary" draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona1.'"/>';
// //}

// if($kolona6!=''){
//  echo '<input type="text" id="novi" name="drugi" class="form form-control alert-primary" draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona6.'" />';
// }
// echo'<input type="hidden" value="'.$id.'" id="hidden1" /></td>
// <td name="'.$prosla_prosla.'" id="drugakolona" ondrop="drop(event)" ondragover="allowDrop(event)">';
// //if($kolona2!=''){
//   echo'<input type="text" id="novi" name="prviin" class="form form-control alert-secondary" draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona2.'"/>';
// //}

// if($kolona7!=''){
//   echo '<input type="text" id="novi" name="drugi" class="form form-control alert-primary" draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona7.'"/>';
//  }
// echo'<input type="hidden" value="'.$id.'" id="hidden1" /></td>
// <td name="'.$predprosla_predprosla.'" id="trecakolona"  ondrop="drop(event)" ondragover="allowDrop(event)">
// <input type="text" id="novi" name="prviin" class="form form-control alert-secondary"  draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona3.'"/>';
// if($kolona8!=''){
//   echo '<input type="text" id="novi" name="drugi" class="form form-control alert-primary" draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona8.'"/>';
//  }
// echo'<input type="hidden" value="'.$id.'" id="hidden1" /></td>
// <td name="'.$unazadtreca_unazadtreca.'" id="cetvrtakolona"  ondrop="drop(event)" ondragover="allowDrop(event)">
// <input type="text" id="novi" name="prviin" class="form form-control alert-secondary"  draggable="true" ondragstart="drag(event)"style="margin-top:15px;" value="'.$kolona4.'"/>';
// if($kolona9!=''){
//   echo '<input type="text" id="novi" name="drugi" class="form form-control alert-primary" draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona9.'"/>';
//  }
// echo'<input type="hidden" value="'.$id.'" id="hidden1" /></td>
// <td name="'.$unazadcetvrta_unazadcetvrta.'" id="petakolona"  ondrop="drop(event)" ondragover="allowDrop(event)">
// <input type="text" id="novi" name="prviin" class="form form-control alert-secondary"  draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona5.'"/>';
// if($kolona10!=''){
//   echo '<input type="text" id="novi" name="drugi" class="form form-control alert-primary" draggable="true" ondragstart="drag(event)" style="margin-top:15px;" value="'.$kolona6.'"/>';
//  }
// echo'<input type="hidden" value="'.$id.'" id="hidden1" /></td>

// </tr>';
echo '
<tr id="'.$id.'">
<td id="'.$id.'">'.$osoba.'</td>';
if($kolona1=='' && $kolona6==''){
echo '<td id="prvakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
}else{
echo '<td id="prvakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona1.'" draggable="true" ondragstart="drag(event)"/>';if($kolona6!=''){echo '<input type="text" id="unutra1" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona6.'" draggable="true" ondragstart="drag(event)"/>';}echo'</td>';

}
if($kolona2=='' && $kolona7==''){
  echo '<td id="drugakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
  }else{
    echo '<td id="drugakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona2.'" draggable="true" ondragstart="drag(event)"/>';if($kolona7!=''){echo '<input type="text" id="unutra1" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona7.'" draggable="true" ondragstart="drag(event)"/>';}echo'</td>';
  }
  if($kolona3=='' && $kolona8==''){
    echo '<td id="trecakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
    }else{
      echo '<td id="trecakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona3.'" draggable="true" ondragstart="drag(event)"/>';if($kolona8!=''){echo '<input type="text" id="unutra1" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona8.'" draggable="true" ondragstart="drag(event)"/>';}echo'</td>';
    }
    if($kolona4=='' && $kolona9==''){
      echo '<td id="cetvrtakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
      }else{
        echo '<td id="cetvrtakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona4.'" draggable="true" ondragstart="drag(event)"/>';if($kolona9!=''){echo '<input type="text" id="unutra1" name="'.$id.'"  class="form form-control alert-primary" value="'.$kolona9.'" draggable="true" ondragstart="drag(event)"/>';}echo'</td>';
      }
      if($kolona5=='' && $kolona10==''){
        echo '<td id="petakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
        }else{
          echo '<td id="petakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona5.'" draggable="true" ondragstart="drag(event)"/>';if($kolona10!=''){echo '<input type="text" id="unutra1" name="'.$id.'" class="form form-control alert-primary" value="'.$kolona10.'" draggable="true" ondragstart="drag(event)"/>';}echo'</td>';
        }







echo '</tr>

';
}
echo '
</table>';
 echo'<div>
 <button class="btn btn-sm alert-secondary" id="addbutton">Add</button>
 <button class="btn btn-sm alert-secondary" id="debugbutton">Debug</button>
 <div id="tekstbutton" ondrop="drop(event)" ondragover="allowDrop(event)" style="float:right;"></div>
 </div>
 
 </div>
 
 ' ;

 $upit = "SELECT id FROM timegrid" ;
  
   $izjava = $db->prepare($upit) ;
   $izjava->execute();
   $izjava->store_result();
  $izjava->bind_result($id);
    
?>

<script>
$(document).on('ready',function(){
  $("#addbutton").on('click', function(event){
   
    var html='';
html +='<input type="text" id="novi" class="form form-control alert-primary" draggable="true" ondragstart="drag(event)" name="drugi"/>';
$("#tekstbutton").append(html);
      var vrjednost=$("input").val();
    console.log(vrjednost);
    var vrjednostid=$("#tekstbutton input").attr('id');
    console.log(vrjednostid);
    
if(vrjednostid=='novi'){
  <?php while($izjava->fetch()){ ?> 
  $("<?php echo '#'.$id;?>").on('drop', function(event){
    //console.log(event);
    var html1='';
    var brojinputa=event.target.childElementCount;
    var vrjednosttd = $(this).attr('id');
    console.log(vrjednosttd);
    console.log('Ovo je vrjednost td!');
//     var vrjednostpostojeceg=$("#prvi").val();
// console.log(vrjednostpostojeceg);

console.log('Ovo je vrjednost postojeceg inputa!');
var vrjednostinputanovi=$("#novi").val();

console.log(vrjednostinputanovi);
console.log('Ovo je vrjednost novog inputa!');

var vrjednostinputa=$("#drugakolona input").val();
console.log(vrjednostinputa);
console.log('Ovo je vrjednost premještenog inputa!');
//var vrjednostid=$("#hidden1").val();
//console.log(vrjednostid);
console.log('Ovo je vrjednost id korisnika koji je stavljen u hidden!');
var niz = [];
$("input[name='drugi']").each(function(){
  niz.push($(this).val());
});
console.log(niz);
console.log('Ovo je vrjednost niza!');

var kvadratic = event.target.id;
console.log(kvadratic);

console.log(brojinputa);


if(brojinputa==1){ 
  console.log('prvi');
     $.ajax('test.php?prvi',{
           'method':'POST',
       'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
           'success':function(data,textStatus,jqXHR){console.log(data);
              },
               'error':function(jqXHR,textStatus,errorThrown){
          
          
              }
       
       });
      location.reload();
     }else{
      console.log('drugi');
       $.ajax('test.php?drugi',{
          'method':'POST',
      'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
          'success':function(data,textStatus,jqXHR){console.log(data);
             },
              'error':function(jqXHR,textStatus,errorThrown){
          
          
            }
       
      });
     location.reload();
    }
//   $.ajax('test1.php',{
//         'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//         'success':function(data,textStatus,jqXHR){
//          console.log(data);
//        },
//        'error':function(jqXHR,textStatus,errorThrown){

//        }
//       }).done(function(odgovor){
//         var response = JSON.parse(odgovor);
//       console.log(response);
//       var brojac=0;
//       html1 +='<div class="col-lg-7 mt-5" style="text-align:left;margin-left:15px;" id="drugiprikaz">'+'<table class="table table-bordered">';
//       html1 +='<thead><th></th><th>Montag</th><th>Dienstag</th><th>	Mittwoch</th><th>Donnerstag</th><th>Freitag</th></thead>'
//       //html += '<div id="uputnica_konz">'+'<table>';
//      $.each(response, function(index, value){

//         brojac++;
//         html1 +='<tr id="'+ value['id']+'">';
 
//     html1 +='<td>'+ value['osoba']+'</td>';
//     if(value['kolona1']=='' && value['kolona6']==''){
//   html1 +='<td id="prvakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
//   }else{
//   html1 +='<td id="prvakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'+value['id']+'"  class="form form-control alert-primary" value="'+value['kolona1']+'" draggable="true" ondragstart="drag(event)"/>';
//   if(value['kolona6']!=''){
//    html1 +='<input type="text" id="unutra1" name="'+value['id']+'"  class="form form-control alert-primary" value="'+value['kolona6']+'" draggable="true" ondragstart="drag(event)"/>';

//   }
//   html1 +='</td>';
//   }
//   if(value['kolona2']=='' && value['kolona7']==''){
//     html1 += '<td id="drugakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
//     }else{
//      // html1 += '<td id="drugakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" class="form form-control alert-primary" value="'+value['kolona2']+'"></td>';
//      html1 +='<td id="drugakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'+value['id']+'"  class="form form-control alert-primary" value="'+value['kolona2']+'" draggable="true" ondragstart="drag(event)"/>';
//   if(value['kolona7']!=''){
//    html1 +='<input type="text" id="unutra1" name="'+value['id']+'" class="form form-control alert-primary" value="'+value['kolona7']+'" draggable="true" ondragstart="drag(event)"/>';

//   }
//   html1 +='</td>';
//     }
//     if(value['kolona3']=='' && value['kolona8']==''){
//       html1 += '<td id="trecakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
//       }else{
//         //html1 += '<td id="trecakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" class="form form-control alert-primary" value="'+value['kolona3']+'"></td>';
//         html1 +='<td id="trecakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="unutra" name="'+value['id']+'" class="form form-control alert-primary" value="'+value['kolona3']+'" draggable="true" ondragstart="drag(event)"/>';
//   if(value['kolona8']!=''){
//    html1 +='<input type="text" id="unutra1" name="'+value['id']+'" class="form form-control alert-primary" value="'+value['kolona8']+'" draggable="true" ondragstart="drag(event)"/>';

//   }
//   html1 +='</td>';
//       }
//       if(value['kolona4']=='' && value['kolona9']==''){
//         html1 += '<td id="cetvrtakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
//         }else{
//           //html1 += '<td id="cetvrtakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" class="form form-control alert-primary" value="'+value['kolona4']+'"></td>';
//           html1 +='<td id="cetvrtakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="novi" name="'+value['id']+'" class="form form-control alert-primary" value="'+value['kolona4']+'" draggable="true" ondragstart="drag(event)"/>';
//   if(value['kolona9']!=''){
//    html1 +='<input type="text" name="'+value['id']+'" id="novi1"  class="form form-control alert-primary" value="'+value['kolona9']+'" draggable="true" ondragstart="drag(event)"/>';

//   }
//   html1 +='</td>';
//         }
//         if(value['kolona5']=='' && value['kolona10']==''){
//           html1 += '<td id="petakolona" ondrop="drop(event)" ondragover="allowDrop(event)"></td>';
//           }else{
//             //html1 += '<td id="petakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" class="form form-control alert-primary" value="'+value['kolona5']+'"></td>';
//             html1 +='<td id="petakolona" ondrop="drop(event)" ondragover="allowDrop(event)"><input type="text" id="novi" name="'+value['id']+'" class="form form-control alert-primary" value="'+value['kolona5']+'" draggable="true" ondragstart="drag(event)"/>';
//   if(value['kolona10']!=''){
//    html1 +='<input type="text" id="novi1" name="'+value['id']+'" class="form form-control alert-primary" value="'+value['kolona10']+'" draggable="true" ondragstart="drag(event)"/>';

//   }
//   html1 +='</td>';
//           }





//     html1 +='</tr>';
//     html1 +='</div>';

//       });
//      $("#prviprikaz table").remove();
//       $("#unesitekststacionar").append(html1);
//      $("#1").on('drop', function(event){
//      console.log(event.target.childElementCount);
//      var brojinputa=event.target.childElementCount;
//       var vrjednosttd = $(this).attr('id');
//       var vrjednostinputanovi=$("#novi").val();
//       console.log(brojinputa);
//       console.log(vrjednosttd);
//       console.log(vrjednostinputanovi);
//       var kvadratic = event.target.id;
//  console.log(kvadratic);
//       if(brojinputa==1){ 
//       console.log(event.target.children[0].value);
//       console.log('ovo je jedan element i njegova vrjednost');
//       console.log(event);
//         $.ajax('test.php?prvi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//        });
//         location.reload();
//       }else{
//         console.log(event.target.children[0].value);
//         console.log(event.target.children[1].value);
//         console.log('ovo su dva elementa i njihove vrjednosti!');
//           $.ajax('test.php?drugi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//         });
//         location.reload();
//       }
     
//      })
//      $("#2").on('drop', function(event){
//      console.log(event.target.childElementCount);
//      var brojinputa=event.target.childElementCount;
//       var vrjednosttd = $(this).attr('id');
//       var vrjednostinputanovi=$("#novi").val();
//       console.log(brojinputa);
//       console.log(vrjednosttd);
//       console.log(vrjednostinputanovi);
//       var kvadratic = event.target.id;
//  console.log(kvadratic);
//       if(brojinputa==1){ 
//       console.log(event.target.children[0].value);
//       console.log('ovo je jedan element i njegova vrjednost');
//       console.log(event);
//         $.ajax('test.php?prvi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//        });
//         location.reload();
//       }else{
//         console.log(event.target.children[0].value);
//         console.log(event.target.children[1].value);
//         console.log('ovo su dva elementa i njihove vrjednosti!');
//           $.ajax('test.php?drugi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//         });
//         location.reload();
//       }
     
//      })
//      $("#3").on('drop', function(event){
//      console.log(event.target.childElementCount);
//      var brojinputa=event.target.childElementCount;
//       var vrjednosttd = $(this).attr('id');
//       var vrjednostinputanovi=$("#novi").val();
//       console.log(brojinputa);
//       console.log(vrjednosttd);
//       console.log(vrjednostinputanovi);
//       var kvadratic = event.target.id;
//  console.log(kvadratic);
//       if(brojinputa==1){ 
//       console.log(event.target.children[0].value);
//       console.log('ovo je jedan element i njegova vrjednost');
//       console.log(event);
//         $.ajax('test.php?prvi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//        });
//         location.reload();
//       }else{
//         console.log(event.target.children[0].value);
//         console.log(event.target.children[1].value);
//         console.log('ovo su dva elementa i njihove vrjednosti!');
//           $.ajax('test.php?drugi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//         });
//         location.reload();
//       }
     
//      })
//      $("#4").on('drop', function(event){
//      console.log(event.target.childElementCount);
//      var brojinputa=event.target.childElementCount;
//       var vrjednosttd = $(this).attr('id');
//       var vrjednostinputanovi=$("#novi").val();
//       console.log(brojinputa);
//       console.log(vrjednosttd);
//       console.log(vrjednostinputanovi);
//       var kvadratic = event.target.id;
//  console.log(kvadratic);
//       if(brojinputa==1){ 
//       console.log(event.target.children[0].value);
//       console.log('ovo je jedan element i njegova vrjednost');
//       console.log(event);
//         $.ajax('test.php?prvi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//        });
//         location.reload();
//       }else{
//         console.log(event.target.children[0].value);
//         console.log(event.target.children[1].value);
//         console.log('ovo su dva elementa i njihove vrjednosti!');
//           $.ajax('test.php?drugi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//         });
//         location.reload();
//       }
     
//      })
//      $("#5").on('drop', function(event){
//      console.log(event.target.childElementCount);
//      var brojinputa=event.target.childElementCount;
//       var vrjednosttd = $(this).attr('id');
//       var vrjednostinputanovi=$("#novi").val();
//       console.log(brojinputa);
//       console.log(vrjednosttd);
//       console.log(vrjednostinputanovi);
//       var kvadratic = event.target.id;
//  console.log(kvadratic);
//       if(brojinputa==1){ 
//       console.log(event.target.children[0].value);
//       console.log('ovo je jedan element i njegova vrjednost');
//       console.log(event);
//         $.ajax('test.php?prvi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//        });
//         location.reload();
//       }else{
//         console.log(event.target.children[0].value);
//         console.log(event.target.children[1].value);
//         console.log('ovo su dva elementa i njihove vrjednosti!');
//           $.ajax('test.php?drugi',{
//             'method':'POST',
//         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
//             'success':function(data,textStatus,jqXHR){console.log(data);
//                },
//                 'error':function(jqXHR,textStatus,errorThrown){
          
          
//                }
       
//         });
//         location.reload();
//       }
     
//      })
//      })



});
<?php }?>




//});

}else{console.log(vrjednostid);}
})
$("table tr td input").on('dragstart', function(event){

  var vrjednostinputanovi=$(this).val();
  console.log(vrjednostinputanovi);
  var ovajid=$(this).attr('id');
  var vrjednost1td=$("table tr td").attr('id');
  console.log(vrjednost1td);
  
  <?php 
   $upit = "SELECT id FROM timegrid" ;
  
   $izjava = $db->prepare($upit) ;
   $izjava->execute();
   $izjava->store_result();
  $izjava->bind_result($id);
  while($izjava->fetch()){?>
  
  $("<?php echo '#'.$id; ?>").on('drop', function(event){
    var vrjednosttd = $(this).attr('id');
    console.log('dragstart');
    var kvadratic = event.target.id;
 console.log(kvadratic);
 var brojinputa=event.target.childElementCount;
 if(brojinputa==1){
 $.ajax('test.php?prvi',{
            'method':'POST',
        'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
            'success':function(data,textStatus,jqXHR){console.log(data);
               },
                'error':function(jqXHR,textStatus,errorThrown){
          
          
               }
       
       });
       }else{
        $.ajax('test.php?drugi',{
            'method':'POST',
        'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
            'success':function(data,textStatus,jqXHR){console.log(data);
               },
                'error':function(jqXHR,textStatus,errorThrown){
          
          
               }
       
       }); 
       } 
       //location.reload();
  });
  <?php }?>

});
$("table tr td input").on('dblclick', function(event){
var kvadratic=event.target.offsetParent.id;
var vrjednostinputanovi=$(this).val();
var vrjednosttd=$(this).attr('name');
var rasclamba=event.toElement.id;
//console.log(event.toElement.id);
if(rasclamba=='unutra'){
//console.log('Ide na prvi ajax');
$.ajax('test.php?izbrisiprvi',{
             'method':'POST',
         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
             'success':function(data,textStatus,jqXHR){console.log(data);
                },
                 'error':function(jqXHR,textStatus,errorThrown){
          
          
                }
       
        });
        location.reload();  
}else{
  //console.log('Ide na DRUGI ajax');
  $.ajax('test.php?izbrisidrugi',{
             'method':'POST',
         'data':{'vrjednosttd':vrjednosttd,'vrjednostinputanovi':vrjednostinputanovi,'kvadratic':kvadratic},
             'success':function(data,textStatus,jqXHR){console.log(data);
                },
                 'error':function(jqXHR,textStatus,errorThrown){
          
          
                }
       
        });
        location.reload();  

}


       //location.reload();
// $(this).removeClass('form form-control').addClass('form form-control alert-danger');
// $(".form form-control alert-danger").on('dblclick', function(event){
// console.log('to');
// })
  })
});
</script>
