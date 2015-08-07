<?php
/*
There are 5 known sets of nine distinct odd numbers the sum of whose reciprocals is 1.
http://oeis.org/A201644
http://oeis.org/A201646
http://oeis.org/A201647
http://oeis.org/A201648
http://oeis.org/A201649

3, 5, 7, 9, 11, 15, 33, 45, 385
3, 5, 7, 9, 11, 15, 21, 231, 315
3, 5, 7, 9, 11, 15, 21, 165, 693
3, 5, 7, 9, 11, 15, 21, 135, 10395
3, 5, 7, 9, 11, 15, 35, 45, 231

So it seems like the problem is actually finding 3 numbers a, b and c s.t.
  1/a + 1/b + 1/c = 1 - 1/3 - 1/5 - 1/7 - 1/9 - 1/11 - 1/ 15
*/
$start = time();
$a_start = 17;
$a_range = 1000;
$b_start = 17;
$b_range = 1000;
$c_start = 17;
$c_range = 100000;
for ($a=$a_start; $a<$a_range; $a = $a+2) {
  for ($b=$a+2; $b<$b_range; $b = $b+2) {
    for ($c=$b+2; $c<$c_range; $c = $c+2) {
      //echo "checking triple ($a,$b,$c)\n";
      if ($a < $b && $b < $c) {
        // This naive check misses one of the Leech-9s under 1000
        //if (1/3 + 1/5 + 1/7 + 1/9 + 1/11 + 1/15 + 1/$a + 1/$b + 1/$c == 1) {
        //
        // Note 15*11*9*7*5*3 = 155925
        $product = $a*$b*$c*155925;
        if ($product/3 + $product/5 + $product/7 + $product/9 + $product/11 + $product/15 + $product/$a + $product/$b + $product/$c == $product) {
          echo "A Leech-9 has been discovered: 3,5,7,9,11,15,$a,$b,$c\n";
        }
      }
    }
  }
}
$checked = round((($a_range-$a_start)/2)*(($b_range-$b_start)/2)*(($c_range-$c_start)/2));
$stop = time();
$elasped = $stop - $start;
echo "Checked roughly $checked odd number triples in $elasped seconds.\n"
?>
