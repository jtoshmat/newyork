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
                  <div class="header_btns header_middle_btns"><i class="fas fa-arrow-left"></i></div>
                  <div class="header_btns header_middle_btns">Today</div>
                  <div class="header_btns header_middle_btns"><i class="fas fa-arrow-right"></i></div>
              </div>
          </div>
      </div>
      <div id="calendar_title">
          <span class="title_month">March</span>
          <span class="title_year">2020</span>
      </div>
      <div id="calendar_table">
          <table class="table">
              <?php
                $days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
              ?>

              <tr>
                  <?foreach ($days as $day):?>
                    <th><?=$day?></th>
                  <?endforeach;?>
              </tr>

              <?php $days = 0; for($i=0; $i<5; $i++):?>
                  <tr>
                  <?php for($y=0; $y<7; $y++): $days++;?>
                      <? if (date('d') == $days):?>
                            <td class="calendar_today">
                                <div><?=$days?></div>
                            </td>
                      <?else:?>
                          <td><div><?=$days?></div></td>
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