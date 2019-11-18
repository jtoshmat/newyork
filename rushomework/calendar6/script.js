const date_picker_element = document.querySelector('.date-picker');
const selected_date_element = document.querySelector('.date-picker .selected-date');
const dates_element = document.querySelector('.date-picker .dates');
const mth_element = document.querySelector('.date-picker .dates .month .mtn');
const next_mtn_element = document.querySelector('.date-picker .dates .month .next-mtn');
const prev_mtn_element = document.querySelector('.date-picker .dates .month .prev-mtn');
const days_element = document.querySelector('.date-picker .dates .days');

const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

let date = new Date();
let day = date.getDate();
let month = date.getMonth();
let year = date.getFullYear();

let selectedDate = date;
let selectedDate = day;
let selectedDate = month;
let selectedDate = year;

mth_element.textContent = months[month] + ' ' + year;

//EVENT LISTENERS
date_picker_element.addEventListener('click', toggleDatePicker);

//FUNCTIONS
function toggleDatePicker (e) {
    if (!checkEventPathForClass(e.path, 'dates')){
    dates_element.classList.toggle('active');
    }
}

//HELP FUNCTION
function checkEventPathForClass (path, selector) {
    for (let i = 0; i < path; i++) {
        if (path[i].classList && path[i].classList.contains(selector)) {
            return true;
        } 
    } 
    
    return false;
}












