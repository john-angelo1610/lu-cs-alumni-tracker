require('./bootstrap');
const self_employed = document.querySelector('.self_employed');
const unemployed = document.querySelector('.unemployed');
const retired = document.querySelector('.retired');
const other_reason_input = document.querySelector('#unemployed_other_reason');
const other_option_unemployed = document.querySelector('#others');
const statusButtons = document.querySelectorAll('input[name="status"]');
const UnemployedButtons = document.querySelectorAll('input[name="reason"]');
// console.log(self_employed);
// console.log(unemployed);
// console.log(retired);

function employment_status() {
    if (document.querySelector('#self_employed').checked) {
        self_employed.style.display = 'block';
        unemployed.style.display = 'none';
        retired.style.display = 'none';
    } else if (document.querySelector('#unemployed').checked) {
        unemployed.style.display = 'block';
        self_employed.style.display = 'none';
        retired.style.display = 'none';
    } else if (document.querySelector('#retired').checked) {
        retired.style.display = 'block';
        unemployed.style.display = 'none';
        self_employed.style.display = 'none';
    } else {
        self_employed.style.display = 'none';
        unemployed.style.display = 'none';
        retired.style.display = 'none';
    }
}

function unemployed_other_reason() {
    if (other_option_unemployed.checked) {
        other_reason_input.style.display = 'block';
    } else {
        other_reason_input.style.display = 'none';
    }
}

function transfer_value() {
    console.log('input box', other_reason_input.value);
    console.log(other_option_unemployed.value);
    other_option_unemployed.value = other_reason_input.value;
}

document.querySelector('.add_edit_form').addEventListener('submit', transfer_value)
statusButtons.forEach(radio => radio.addEventListener('click', employment_status));
UnemployedButtons.forEach(radio => radio.addEventListener('click', unemployed_other_reason));