const date_picker_element = document.querySelector('.date-picker');
const selected_date_element = document.querySelector('.date-picker .selected-date');
const dates_element = document.querySelector('.date-picker .dates');
const mtn_element = document.querySelector('.date-picker .dates .month .mtn')

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

