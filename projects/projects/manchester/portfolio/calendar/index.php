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
    $current_first_day = date('D', strtotime("$current_year-$current_month-1"));


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
          <?php
            echo $current_total_days;
          ?>
          <table class="table">
              <?php
                $day_names =$days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
              ?>
              <tr>
                  <?foreach ($days as $day):?>
                    <th><?=$day?></th>
                  <?endforeach;?>
              </tr>
              <?php $days = 0; for($i=0; $i<5; $i++):?>
                  <tr>
                  <?php for($y=0; $y<7; $y++): $days++;?>
                      <? if ($days<=$current_total_days):?>
                          <?php
                          $first_day = null;
                          if ($days == 1){
                              $first_day = $current_first_day;
                          }
                          $current_week_num = date('w', strtotime("$current_year-$current_month-$days"));
                          $total_empty_cells = $current_week_num - $y;
                          for($e=0; $e<$total_empty_cells; $e++){
                              echo "<td>999</td>";
                          }

                          ?>

                          <? if (date('d') == $days):?>
                                <td class="calendar_today"><div><?=$days?></div></td>
                                <?else:?>
                                <td><div><?=$days.': '.$total_empty_cells?></div></td>
                          <?endif?>


                      <?endif?>
                  <?endfor;?>
                  </tr>
              <?endfor;?>


          </table>
      </div>
      <div id="calendar_footer">
          &copy; Shadiyarov.us <?=date('Y');?>
      </div>
    </div>
</body>
</html>