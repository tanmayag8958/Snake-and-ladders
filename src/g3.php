<?php


if(isset($_REQUEST['n1'])){
  $n1=$_REQUEST['n1'];
}
if(isset($_REQUEST['n2'])){
  $n2=$_REQUEST['n2'];
}

switch ($_SESSION["c"] % 2) {
  case 1: $_SESSION["name"]=$n1;
  break;

  case 0: $_SESSION["name"]=$n2;
  break;
}

?>

<script>

function msg(qw){
  if (qw==1) {
    document.getElementById("comment").innerHTML = '<h2><?php echo $_SESSION['name']; ?> need 6 to open</h2>';
  }
  if (qw==2) {
    document.getElementById("comment").innerHTML = '<h2><?php echo $_SESSION['name']; ?> ready to play</h2>';
  }
  if (qw==3) {
    document.getElementById("comment").innerHTML = '<h2>Oooopss!! <?php echo $_SESSION['name']; ?> got 3 sixes, lost turn</h2>';
  }
  if (qw==4) {
    document.getElementById("comment").innerHTML = '<h2><?php echo $_SESSION['name']; ?> won , you are free from assignments</h2>';
    alert('<?php  echo $_SESSION['name']; ?> won , you are free from assignments');
  }
  if (qw==5) {
    document.getElementById("comment").innerHTML = '<h2><?php echo $_SESSION['name']; ?> got a SIX !! extra turn</h2>';
  }
  if (qw==6) {
    document.getElementById("comment").innerHTML = '<h2>Oooopss!! <?php echo $_SESSION['name']; ?> bitten by snake</h2>';
  }
  if (qw==7) {
    document.getElementById("comment").innerHTML = '<h2><?php echo $_SESSION['name']; ?> , you just got HIGH</h2>';
  }

}

</script>


<?php
  $_SESSION["name"];
  $_SESSION["n"];
  $_SESSION["p1"];
  $_SESSION["p2"];
  $_SESSION["c"];
  $_SESSION["o1"];
  $_SESSION["o2"];
  $_SESSION["six"];
  /*echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "c = " . $_SESSION["c"];
  echo "<br>";*/


  function newg()
  {
    $_SESSION["n"]=0;
    $_SESSION["p1"]=0;
    $_SESSION["p2"]=0;
    $_SESSION["c"]=1;
    $_SESSION["o1"]=0;
    $_SESSION["o2"]=0;
    $_SESSION["six"]=0;

  }

  function rno()
  {
  $_SESSION["n"]=rand(1,6);
    return $_SESSION["n"];
  }

  function check($cp , &$o){
    $ran=rno();
    if($o==0){
      if($ran==6){
      ++$o;

      echo "<script>msg(2)</script>";
      }
      else {
        echo "<script>msg(1)</script>";
        ++$_SESSION["c"];
      }
    goto end;
    }


   if($ran==6){
     if ($_SESSION["six"] < 3){
       ++$_SESSION["six"];
       echo "<script>msg(5)</script>";
       /*echo "six = " . $_SESSION['six'];
       echo "cp = " . $cp;
       echo "<br>";*/
     }
     if ($_SESSION["six"]==3) {
        $_SESSION["six"]=0;
        echo "<script>msg(3)</script>";
        ++$_SESSION["c"];
        # sorry
     }
     goto end;
   }


   $ran=($_SESSION["six"] * 6) + $ran;
   $_SESSION["six"]=0;
   $left=100-$cp;
   if($ran > $left){
     $qname=$_SESSION['name'];
     #need less
     echo "<script>
       document.getElementById('comment').innerHTML = '<h2>$qname need $left to win</h2>';
     </script>";
     ++$_SESSION["c"];
     goto end;
   }

   $cp+=$ran;

   switch ($cp) {
     case 17: $cp=44;echo "<script>msg(7)</script>";
       break;
     case 41: $cp=60;echo "<script>msg(7)</script>";
       break;
     case 47: $cp=74;echo "<script>msg(7)</script>";
       break;
     case 84: $cp=97;echo "<script>msg(7)</script>";
       break;


     case 99: $cp=77;echo "<script>msg(6)</script>";
       break;
     case 88: $cp=70;echo "<script>msg(6)</script>";
       break;
     case 75: $cp=57;echo "<script>msg(6)</script>";
       break;
     case 59: $cp=23;echo "<script>msg(6)</script>";
       break;
     case 33: $cp=9;echo "<script>msg(6)</script>";
       break;
     case 26: $cp=16;echo "<script>msg(6)</script>";
       break;
   }

   if($cp==100){
     echo "<script>msg(4)</script>";
     # won
     newg();
     $cp=0;
   }
   ++$_SESSION["c"];

   end:

  return $cp;
  }





  if(isset($_REQUEST['roll'])){
  switch ($_SESSION["c"] % 2) {
    case 1:
            $_SESSION["p1"]=check($_SESSION["p1"] , $_SESSION["o1"]);

      break;

    case 0:
            $_SESSION["p2"]=check($_SESSION["p2"] , $_SESSION["o2"]);

      break;
  }

 }

 #echo "p1 = " . $_SESSION['p1'];
 #echo "<br>";
 #echo "p2 = " . $_SESSION["p2"];
 #echo "<br>";
 #echo "o1 = " . $_SESSION['o1'];
 #echo "<br>";
 #echo "o2 = " . $_SESSION["o2"];
 #echo "<br>";


 if(isset($_REQUEST['new'])){
  newg();
 }



 ?>

 <script>


   function dice(){
     var ran = "<?php echo $_SESSION["n"] ?>";
     if(ran==1)
     {
       document.getElementById('dic').innerHTML = '<img src="d1.png" style="height:150px; width:150px;"/>';
     }
     else if (ran==2) {
       document.getElementById('dic').innerHTML = '<img src="d2.png" style="height:150px; width:150px;"/>';
     }
     else if (ran==3) {
       document.getElementById('dic').innerHTML = '<img src="d3.png" style="height:150px; width:150px;"/>';
     }
     else if (ran==4) {
       document.getElementById('dic').innerHTML = '<img src="d4.png" style="height:150px; width:150px;"/>';
     }
     else if (ran==5) {
       document.getElementById('dic').innerHTML = '<img src="d5.png" style="height:150px; width:150px;"/>';
     }
     else if (ran==6) {
       document.getElementById('dic').innerHTML = '<img src="d6.png" style="height:150px; width:150px;"/>';
     }
   }


    function tu()
     {
       var s = "<?php echo $_SESSION["c"] ?>";
       s=s%2;
       if(s==1) {
         document.getElementById("player").innerHTML = '<h2><?php echo $n1." "; ?>roll dice</h2>';
       }
       if(s==0) {
         document.getElementById("player").innerHTML = '<h2><?php echo $n2." "; ?>roll dice</h2>';
       }
     }


     function player1(){
       var id1 = "<?php echo $_SESSION["p1"] ?>";
       document.getElementById(id1).innerHTML = '<img src="p1.png"/>';
     }

     function player2(){
       var id2 = "<?php echo $_SESSION["p2"] ?>";
       document.getElementById(id2).innerHTML = '<img src="p2.png"/>';
     }

     function player12(){
       var id2 = "<?php echo $_SESSION["p2"] ?>";
       document.getElementById(id2).innerHTML = '<img src="p12.png"/>';
     }


 </script>

 <script>
  dice();
   tu();
   if((<?php echo $_SESSION['o1'] ?>)==1)
   player1();
   player2();
   if((<?php echo $_SESSION['p1'] ?>)==(<?php echo $_SESSION['p2'] ?>))
   player12();
 </script>
