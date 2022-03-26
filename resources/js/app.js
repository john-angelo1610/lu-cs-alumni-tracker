require('./bootstrap');
const self_employed = document.querySelector('.self_employed');
const unemployed = document.querySelector('.unemployed');
const retired = document.querySelector('.retired');
// console.log(self_employed);
// console.log(unemployed);
// console.log(retired);

function handleRadioClick() {
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

const radioButtons = document.querySelectorAll('input[name="status"]');
radioButtons.forEach(radio => radio.addEventListener('click', handleRadioClick));