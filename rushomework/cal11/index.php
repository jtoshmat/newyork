<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date Picker</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>

</head>
<body>
<h1>CUSTOM<span>DATE</span>PICKER</h1>

<div class="date-picker">
    <div class="selected-date">19 / 11 / 2019</div>

    <div class="dates">
        <div class="month">
            <div class="arrows prev-mtn">&lt;</div>
            <div class="mtn">November 2019</div>
            <div class="arrows next-mth">&gt;</div>
        </div>

        <div class="days"></div>
    </div>
</div>

<script>
    const date_picker_element = document.querySelector('.date-picker');
    const selected_date_element = document.querySelector('.date-picker .selected-date');
    const dates_element = document.querySelector('.date-picker .dates');
    const mtn_element = document.querySelector('.date-picker .dates .month .mtn');
    const next_mtn_element = document.querySelector('date-picker .dates .month .next-mtn');
    const prev_mtn_element = document.querySelector('date-picker .dates .month .prev-mtn');
    const days_element = document.querySelector('date-picker .dates .days');

    const month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    let date = new Date();
    let day = date.getDate();
    let month = date.getMonth();
    let year = date.getFullYear();

    let selectedDate = date;
    let selectedDay = day;
    let selectedMonth = month;
    let selectedYear = year;

    mtn_element.textContent = months[month] + ' ' + year;


    //EVENT LISTENERS
    date_picker_element.addEventListener('click', toggleDatePicker);

    //FUNCTIONS
    function toggleDatePicker (e) {
        if (!checkEventPathForClass(e.path, 'dates')) {
            dates_element.classList.toggle('active');
        }
    }

    //HELP FUNCTIONS
    function checkEventPathForClass (path, selector) {
        for (let i = 0; i < path.length; i++) {
            if (path[i].classList && path[i].classList.contains(selector)) {
                return true;
            }
        }

        return false;
    }


</script>

<style>
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body
    {
        background-color: #FFCE00;
        font-family: 'Saira', Arial, Helvetica, sans-serif;
    }
    h1
    {
        margin: 30px 0px;
        color: #313131;
        font-size: 42px;
        font-weight: 900;
        text-align: center;
    }

    h1 span
    {
        font-weight: 300;
    }
    .date-picker
    {
        position: relative;
        width: 100%;
        max-width: 320px;
        height: 60px;
        background-color: #FFF;
        margin: 30px auto;
        box-shadow: 0px 3px 10px rgba(0,0,0,0.2);

        cursor: pointer;
        user-select: none;
    }

    .date-picker:hover
    {
        background-color:  #F3F3F3;
    }
    .date-picker .selected-date
    {
        width: 100%;
        height: 100%;

        display: flex;
        justify-content: center;
        align-items: center;

        color: #313131;
        font-size: 28px;

    }

    .date-picker .dates
    {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;

        background-color: #FFF;
    }

    .date-picker .dates.active
    {
        display: block;
    }

    .date-picker .dates .month
    {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #EEE;
    }

    .date-picker .dates .month .arrows
    {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #313131;
        font-size: 20px;
    }

    .date-picker .dates .month .arrows:hover
    {
        background: #F3F3F3;
    }

    .date-picker .dates .month .arrows:active
    {
        background-color: #00CA85;
    }

    .date-picker .dates .days
    {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        height: 200px;
    }

    .date-picker .dates .days .day
    {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #313131;
    }
    .date-picker .dates .days .day.selected
    {
        background-color: #00CA85;
    }





















</style>
</body>
</html>