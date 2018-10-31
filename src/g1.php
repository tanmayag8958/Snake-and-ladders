<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>div game</title>
  <link rel="stylesheet" href="gstyle.css">
</head>

<body background="main.jpg" style="background-repeat: no-repeat; background-size:1920px 974px;">
<div class="out">
  <div class="outer">


    <div class="board">
      <div class="left" id=100> </div>
      <div class="left" id=99> </div>
      <div class="left" id=98> </div>
      <div class="left" id=97> </div>
      <div class="left" id=96> </div>
      <div class="left" id=95> </div>
      <div class="left" id=94> </div>
      <div class="left" id=93> </div>
      <div class="left" id=92> </div>
      <div class="last" id=91> </div>

      <div class="left" id=81> </div>
      <div class="left" id=82> </div>
      <div class="left" id=83> </div>
      <div class="left" id=84> </div>
      <div class="left" id=85> </div>
      <div class="left" id=86> </div>
      <div class="left" id=87> </div>
      <div class="left" id=88> </div>
      <div class="left" id=89> </div>
      <div class="last" id=90> </div>

      <div class="left" id=80> </div>
      <div class="left" id=79> </div>
      <div class="left" id=78> </div>
      <div class="left" id=77> </div>
      <div class="left" id=76> </div>
      <div class="left" id=75> </div>
      <div class="left" id=74> </div>
      <div class="left" id=73> </div>
      <div class="left" id=72> </div>
      <div class="last" id=71> </div>

      <div class="left" id=61> </div>
      <div class="left" id=62> </div>
      <div class="left" id=63> </div>
      <div class="left" id=64> </div>
      <div class="left" id=65> </div>
      <div class="left" id=66> </div>
      <div class="left" id=67> </div>
      <div class="left" id=68> </div>
      <div class="left" id=69> </div>
      <div class="last" id=70> </div>

      <div class="left" id=60> </div>
      <div class="left" id=59> </div>
      <div class="left" id=58> </div>
      <div class="left" id=57> </div>
      <div class="left" id=56> </div>
      <div class="left" id=55> </div>
      <div class="left" id=54> </div>
      <div class="left" id=53> </div>
      <div class="left" id=52> </div>
      <div class="last" id=51> </div>

      <div class="left" id=41> </div>
      <div class="left" id=42> </div>
      <div class="left" id=43> </div>
      <div class="left" id=44> </div>
      <div class="left" id=45> </div>
      <div class="left" id=46> </div>
      <div class="left" id=47> </div>
      <div class="left" id=48> </div>
      <div class="left" id=49> </div>
      <div class="last" id=50> </div>

      <div class="left" id=40> </div>
      <div class="left" id=39> </div>
      <div class="left" id=38> </div>
      <div class="left" id=37> </div>
      <div class="left" id=36> </div>
      <div class="left" id=35> </div>
      <div class="left" id=34> </div>
      <div class="left" id=33> </div>
      <div class="left" id=32> </div>
      <div class="last" id=31> </div>

      <div class="left" id=21> </div>
      <div class="left" id=22> </div>
      <div class="left" id=23> </div>
      <div class="left" id=24> </div>
      <div class="left" id=25> </div>
      <div class="left" id=26> </div>
      <div class="left" id=27> </div>
      <div class="left" id=28> </div>
      <div class="left" id=29> </div>
      <div class="last" id=30> </div>

      <div class="left" id=20> </div>
      <div class="left" id=19> </div>
      <div class="left" id=18> </div>
      <div class="left" id=17> </div>
      <div class="left" id=16> </div>
      <div class="left" id=15> </div>
      <div class="left" id=14> </div>
      <div class="left" id=13> </div>
      <div class="left" id=12> </div>
      <div class="last" id=11> </div>

      <div class="left" id=1> </div>
      <div class="left" id=2> </div>
      <div class="left" id=3> </div>
      <div class="left" id=4> </div>
      <div class="left" id=5> </div>
      <div class="left" id=6> </div>
      <div class="left" id=7> </div>
      <div class="left" id=8> </div>
      <div class="left" id=9> </div>
      <div class="last" id=10></div>



    </div>
    <div class="x">
      <div class="cmnt" id="comment">

      </div>
      <div  class="dice" id="dic">

      </div>
      <div class="play" id="player">

      </div>

    <div class="buttons">
    <form action="#" method="post">

      <button class="btn" type="submit" name="roll">Roll dice</button><br><br>
      <button class="btn" type="submit" name="new">New Game</button><br><br><br>
      <input class="inp"      type="text" placeholder="Player1" name="n1" value="<?php if(isset($_POST['n1'])){if ($_POST['n1']==""){echo 'Player1';}else {echo $_POST['n1'];}}?>" /><br><br>
      <input class="inp inp2" type="text" placeholder="Player2" name="n2" value="<?php if(isset($_POST['n2'])){if ($_POST['n2']==""){echo 'Player2';}else {echo $_POST['n2'];}}?>" />

    </form>
    </div>

  </div>

  </div>
</div>
   <?php require("g3.php") ?>
</body>

</html>
