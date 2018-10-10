<html>
  <head>
      <meta charset="UTF-8">
    <title>9_1</title>
  </head>
  <body>
    <?php
      function calculate($a, $b){
        if($a > $b) {
          $res = $a / $b + 31;
          echo "$res <br>";
        }
        else if ($a == $b) {
          echo "-25 <br>";
        }
        else {
          $res = ($a - 5) / $b;
          echo "$res <br>";
        }
      }
      calculate(1, 3);
      calculate(1, 1);
      calculate(3, 1);
      echo "<br><br><br>";
    ?>
    <table>
      <?php for($x=0;$x<=4;$x+=0.5) { ?>
        <tr>
          <td>x = <?php echo $x; ?></td>
          <td>y = <?php echo $x; ?></td>
        </tr> 
      <?php } ?>
    </table>

    <?php 
      $array = [];
      for($x=0;$x<30;$x++) {
        $array[] = rand(0, 1);
        echo "$array[$x]<br>";
      }
      echo "<br>";
      for($x=0;$x<30;$x++) {
        if($array[$x] == 0) { 
          $array[$x] = 1;
        }
        else if ($array[$x] == 1) { 
          $array[$x] = 0;
        }
        echo "$array[$x]<br>";
      }
      /*$res = rand(0, 4);
      echo "$res";
      $res = rand(0, 4);
      echo "$res";
      $res = rand(0, 4);
      echo "$res";
      $res = rand(0, 4);
      echo "$res";*/
    ?>
  </body>
</html>
  