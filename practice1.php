<?php
 function square(float $val) 
 {
     return $val*$val;
 }
  
 function squareRoot(float $val)
 {
     return sqrt($val);
 }
  
 function calcHypotenuse(float $firstSideLength, float $secondSideLength) 
 {
     /**
      * Complete the code to calculate the length of the hypotenuse from the length of the
      * first side and the second side using the square and squareRoot functions.
      */
      $hypotenuseLength = sqrt(square($firstSideLength) + square ($secondSideLength));
  
     return $hypotenuseLength;
 }
  
 $firstSideLength = null;
 do {
     $firstSideLength = "3";
 } while($firstSideLength == null);
  
 $secondSideLength = null;
 do {
     $secondSideLength = "4";
 } while($secondSideLength == null);
  
 echo calcHypotenuse($firstSideLength, $secondSideLength);




//  After completion, you can test your answer by opening a console and make php nameOfYourFile.php
 
//  You can try your result with firstLength = 3 and secondLength = 4 and you should obtain 4.


?>