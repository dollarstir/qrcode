<?php

$time = time();

$numday = date("d",$time);
$nummonth = date("m",$time);
$month_start = date("F",$time);
$year = date("Y",$time);
$first_day = mktime(0,0,0,$nummonth,1,$year);
$days_in_month = cal_days_in_month(0,$nummonth,$year);
$day_of_week = date("w",$first_day);
?>
<table>
   <caption><?php echo $month_start; ?></caption>
   <thead>
      <tr>
        <th abbr="Sunday" scope="col" title="sunday">S</th>
        <th abbr="Sunday" scope="col" title="monday">M</th>
        <th abbr="Sunday" scope="col" title="tuesday">T</th>
        <th abbr="Sunday" scope="col" title="wednessday">W</th>
        <th abbr="Sunday" scope="col" title="thursday">T</th>
        <th abbr="Sunday" scope="col" title="friday">F</th>
        <th abbr="Sunday" scope="col" title="saturday">S</th>

      </tr>
   </thead>
   <tbody>
      <tr>
        <?php
           if (0!=$day_of_week) {
              echo '<td colspan="'.$day_of_week.'"></td>';
           }
           for ($i=0; $i <$days_in_month ; $i++) { 
               
               if ($i == $numday) {
                  echo '<td id="today">';
               }else {
                   echo "<td>";
               }
               echo $i;
               echo '</td>';
               if (date('w',mktime(0,0,0,$nummonth,$i,$year)) == 6) {
                  echo '</tr><tr>';
               }
           }
        ?>
      </tr>
   </tbody>
</table>


