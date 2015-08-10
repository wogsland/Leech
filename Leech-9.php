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
$a_range = 100;
$b_range = 1000;
$c_range = 10000000;
for ($a=$a_start; $a<$a_range; $a = $a+2) {
  //echo "trying $a\n";
  for ($b=$a+2; $b<$b_range; $b = $b+2) {
    for ($c=$b+2; $c<$c_range; $c = $c+2) {
      //echo "checking triple ($a,$b,$c)\n";
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
$checked = round((($a_range-$a_start)/2)*(($b_range-$a_start-2)/2)*(($c_range-$a_start-4)/2));
$stop = time();
$elasped = $stop - $start;
echo "Checked roughly $checked odd number triples in $elasped seconds.\n"

/*
Explorations:
(1000,1000,1000)
A Leech-9 has been discovered: 3,5,7,9,11,15,21,165,693
A Leech-9 has been discovered: 3,5,7,9,11,15,21,231,315
A Leech-9 has been discovered: 3,5,7,9,11,15,33,45,385
A Leech-9 has been discovered: 3,5,7,9,11,15,35,45,231
Checked 118732760.875 odd number triples in 9 seconds.

(1000,1000,100000)
A Leech-9 has been discovered: 3,5,7,9,11,15,21,135,10395
A Leech-9 has been discovered: 3,5,7,9,11,15,21,165,693
A Leech-9 has been discovered: 3,5,7,9,11,15,21,231,315
A Leech-9 has been discovered: 3,5,7,9,11,15,33,45,385
A Leech-9 has been discovered: 3,5,7,9,11,15,35,45,231
Checked 12076559135.875 odd number triples in 2823 seconds.

(100,1000,100000)
A Leech-9 has been discovered: 3,5,7,9,11,15,21,135,10395
A Leech-9 has been discovered: 3,5,7,9,11,15,21,165,693
A Leech-9 has been discovered: 3,5,7,9,11,15,21,231,315
A Leech-9 has been discovered: 3,5,7,9,11,15,33,45,385
A Leech-9 has been discovered: 3,5,7,9,11,15,35,45,231
Checked roughly 1017573765 odd number triples in 433 seconds.

(100,1000,10000000)
A Leech-9 has been discovered: 3,5,7,9,11,15,21,135,10395
A Leech-9 has been discovered: 3,5,7,9,11,15,21,165,693
A Leech-9 has been discovered: 3,5,7,9,11,15,21,231,315
A Leech-9 has been discovered: 3,5,7,9,11,15,33,45,385
A Leech-9 has been discovered: 3,5,7,9,11,15,35,45,231
Checked roughly 101778536265 odd number triples in 266702 seconds.
*/
?>
