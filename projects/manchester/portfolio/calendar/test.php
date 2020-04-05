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
    <script src="/js/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<?php
    $current_year = $_GET['year']??date('Y'); //Tested and working - JT
    $current_month = $_GET['month']??date('m'); //Tested and working - JT
    $today_day = date('d'); //Tested and working - JT
    $calendar_month_name = date('F', strtotime("$current_year-$current_month-1")); //Tested and working - JT
    $current_total_days = date('t', strtotime("$current_year-$current_month-1")); //Tested and working - JT
    $current_first_day_name = date('D', strtotime("$current_year-$current_month-1")); //Tested and working - JT
    $current_first_day = date('w', strtotime("$current_year-$current_month-1")) + 1; //Tested and working - JT
    if ($current_month>=12){
        $current_month = 0;
    }
    //@TODO Fix the previous and next buttons - JT 03/31/2020 -> header_btns header_middle_btns - CANCELLED
    //@TODO Build a calendar create form when double clicked on any active day of the month -> https://getbootstrap.com/docs/4.0/components/modal/
    //@TODO Make the calendar searchable


    require_once '../database.php';
    $db = new \Database\database();
    $sql = "SELECT * FROM calendar WHERE year = $current_year and month = $current_month order by id desc";
    $events = $db->sql($sql);

    $daily_events = [];
    foreach ($events as $event){
        $daily_events[$event['day']] = $event;
    }

?>

<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="backend/save_event.php">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarModalLabel">New event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input name="title" required="required" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea name="description" required="required" class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date-text" class="col-form-label">Event Time:</label>
                            <input required="required" type="time" id="date-text" name="event_time" class="form-control">
                        <input type="hidden" name="year" type="number" value="<?=$current_year?>">
                        <input type="hidden"  name="month" type="number" value="<?=$current_month?>">
                        <input id="form_today_day" type="hidden"  name="day" type="number" value="<?=$today_day?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>

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
                      <a href="test.php?year=<?=$current_year?>&month=<?=$current_month-1?>"><i class="fas fa-arrow-left"></a></i>
                  </div>
                  <div class="header_btns header_middle_btns">
                      <a href="test.php?year=<?=date('Y');?>&month=<?=date('m');?>">Today</a>
                  </div>
                  <div class="header_btns header_middle_btns">
                      <a href="test.php?year=<?=$current_year?>&month=<?=$current_month+1?>"><i class="fas fa-arrow-right"></a></i>
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
              $day = 0;
              $current_calendar_day = 1;
              $total_tr = abs(31/7);

              $popup_modal = "data-toggle=\"modal\" data-target=\"#calendarModal\" data-whatever=\"@mdo\"";

              echo "<tr>\n";
              foreach ($day_names as $day_name){
                  echo "<th>$day_name</th>\n";
              }
              echo "</tr>";
              for($tr=0; $tr<=5; $tr++) {
                  $calendar_today_class = null;
                  echo "<tr>\n";
                      for ($td = 0; $td < 7; $td++) {
                          $day++;

                      if ($current_calendar_day == $today_day){
                          $calendar_today_class = "class='calendar_today_class my_date_class'";
                      }else{
                          $calendar_today_class = "class='my_date_class'";
                      }
                              $myevents = $daily_events[$current_calendar_day]['title']??null;
                              $myevents = substr($myevents,0,15);
                              $priority = $daily_events[$current_calendar_day]['priority']??0;
                              $today_events = 'today_events_normal';
                              if ($priority==1){
                                  $today_events = 'today_events_medium';
                              }
                          if ($priority==2){
                              $today_events = 'today_events_high';
                          }
                              if ($day<$current_first_day){
                                  echo "<td class='blank_day'>&nbsp;</td>";
                              }else{
                                  if ($current_calendar_day <= $current_total_days) {
                                      echo "<td data-date='$current_calendar_day' $popup_modal $calendar_today_class>
                                            <div>$current_calendar_day 
                                            </div>
                                            <i class=\"fas fa-plus-circle calendar_add_icon\"></i>
                                                <span class='$today_events'> $myevents </span>
                                                
                                            </td>";

                                  }else{
                                      echo "<td class='blank_day'>&nbsp;</td>";
                                  }
                              }
                          $current_calendar_day++;
                          $current_calendar_day = $day+2-$current_first_day;
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

<script>

    $(function () {

        $(".my_date_class").click(function () {
            var selectedDate = $(this).data('date');
            $("#form_today_day").val(selectedDate);
        });

    });

    $('#sandbox-container input').datepicker({
    });
</script>


</body>
</html>