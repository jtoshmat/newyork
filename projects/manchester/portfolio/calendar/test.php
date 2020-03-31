<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Calendar</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/calendar.css">
</head>
<body>
<?php
    $current_year = $_GET['year']??date('Y');
    $current_month = $_GET['month']??date('m');
    $current_day = date('d');
    $calendar_month_name = date('F', strtotime("$current_year-$current_month-$current_day"));
    $current_total_days = date('t', strtotime("$current_year-$current_month-$current_day"));
    $current_first_day_name = date('D', strtotime("$current_year-$current_month-1"));
    $current_first_day = date('w', strtotime("$current_year-$current_month-1")) + 1;


?>
    <div id="calendar">
      <div id="calendar_header">
          <div class="left_div header_divs">
              <i class="fas fa-circle circle1"></i>
              <i class="fas fa-circle circle2"></i>
              <i class="fas fa-circle circle3"></i>
              <div class="header_btns">Calendars</div>
              <div class="header_btns"> + </div>
          </div>
          <div class="middle_div header_divs">
              <div class="header_btns header_middle_btns">Day</div>
              <div class="header_btns header_middle_btns">Week</div>
              <div class="header_btns header_middle_btns">Month</div>
              <div class="header_btns header_middle_btns">Year</div>
          </div>
          <div class="right_div header_divs">
          <input class="search_input" type="text" name="keyword" placeholder="Search">
              <div class="right_btns">
                  <div class="header_btns header_middle_btns">
                      <a href="index.php?year=<?=$current_year?>&month=<?=$current_month-1?>"><i class="fas fa-arrow-left"></a></i>
                  </div>
                  <div class="header_btns header_middle_btns">
                      <a href="index.php?year=<?=date('Y');?>&month=<?=date('m');?>">Today</a>
                  </div>
                  <div class="header_btns header_middle_btns">
                      <a href="index.php?year=<?=$current_year?>&month=<?=$current_month+1?>"><i class="fas fa-arrow-right"></a></i>
                  </div>
              </div>
          </div>
      </div>
      <div id="calendar_title">
          <span class="title_month"><?=$calendar_month_name?></span>
          <span class="title_year"><?=$current_year?></span>
      </div>
      <div id="calendar_table">

          <table class="table">
              <?php
                $day_names =$days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
              ?>


              <?
              $day = 0;
              $day2 = 1;
              $total_tr = abs(31/7);

              echo "<tr>\n";
              foreach ($day_names as $day_name){
                  echo "<td>$day_name</td>\n";
              }
              echo "</tr>";

              for($tr=0; $tr<5; $tr++) {
                  echo "<tr>\n";
                      for ($td = 0; $td < 7; $td++) {
                          $day++;
                              if ($day<$current_first_day){
                                  echo "<td>&nbsp;</td>";
                              }else{
                                  echo "<td>$day2</td>";
                              }
                          $day2++;

                              $day2 = $day+2-$current_first_day;

                      }
                  echo "</tr>\n";
              }
              ?>


          </table>
      </div>
      <div id="calendar_footer">
          &copy; Shadiyarov.us <?=date('Y');?>
      </div>
    </div>
</body>
</html>