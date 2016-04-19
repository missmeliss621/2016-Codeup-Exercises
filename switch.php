 <?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         echo "$dayOfWeek is Monday\n";
         break;
     case 2:
         echo "$dayOfWeek is Tuesday\n";
         break;
     case 3:
         echo "$dayOfWeek is Wednesday\n";
         break;
     case 4:
         echo "$dayOfWeek is Thursday\n";
         break;
     case 5:
         echo "$dayOfWeek is Friday\n";
         break;
 }