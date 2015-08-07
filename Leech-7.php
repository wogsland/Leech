<?php
/*
John Leech claims there are no sets of 7 distinct odd numbers the sum of whose reciprocals is 1.

Note
1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/13 + 1/15 ~ 1.02
so we can't immediately rule this possibility out.

So how many sets sum to >= 1?

1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/13 + 1/17 ~ 1.01
1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/13 + 1/19 ~ 1.01
1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/13 + 1/21 > 1
1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/13 + 1/23 < 1
1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/15 + 1/17 > 1
1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/15 + 1/19 < 1
1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/17 + 1/19 < 1

5 sets fulfill this relaxed criteria.

A more general calculation:
*/
$a = 3;
$b = 5;
$c = 7;
$d = 9;
$e = 11;
$f = 13;
$g = 15;
$count = 0;
while (1/$a + 1/$b + 1/$c + 1/$d + 1/$e + 1/$f + 1/$g >= 1) {
  echo "in a loop\n";
  while (1/$a + 1/$b + 1/$c + 1/$d + 1/$e + 1/$f + 1/$g >= 1) {
    echo "in b loop\n";
    while (1/$a + 1/$b + 1/$c + 1/$d + 1/$e + 1/$f + 1/$g >= 1) {
      echo "in c loop\n";
      while (1/$a + 1/$b + 1/$c + 1/$d + 1/$e + 1/$f + 1/$g >= 1) {
        echo "in d loop\n";
        while (1/$a + 1/$b + 1/$c + 1/$d + 1/$e + 1/$f + 1/$g >= 1) {
          echo "in e loop\n";
          while (1/$a + 1/$b + 1/$c + 1/$d + 1/$e + 1/$f + 1/$g >= 1) {
            echo "in f loop\n";
            while (1/$a + 1/$b + 1/$c + 1/$d + 1/$e + 1/$f + 1/$g >= 1) {
              echo "($a,$b,$c,$d,$e,$f,$g)\n";
              $count++;
              $g = $g + 2;
            }
            $f = $f + 2;
            $g = $f + 2;
          }
          $e = $e + 2;
          $f = $e + 2;
          $g = $f + 2;
        }
        $d = $d + 2;
        $e = $d + 2;
        $f = $e + 2;
        $g = $f + 2;
      }
      $c = $c + 2;
      $d = $c + 2;
      $e = $d + 2;
      $f = $e + 2;
      $g = $f + 2;
    }
    $b = $b + 2;
    $c = $b + 2;
    $d = $c + 2;
    $e = $d + 2;
    $f = $e + 2;
    $g = $f + 2;
  }
  $a = $a + 2;
  $b = $a + 2;
  $c = $b + 2;
  $d = $c + 2;
  $e = $d + 2;
  $f = $e + 2;
  $g = $f + 2;
}
echo "Found $count sets under the inequality.\n";
?>
