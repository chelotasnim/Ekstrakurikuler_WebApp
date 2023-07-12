const field = document.querySelectorAll('.this-field');
const progressBar = document.querySelector('.inner-load');
field.forEach(input => {
    function progress() {
        if(input.value.length > 0) {
            input.classList.add("filled");
        } else {
            input.classList.remove("filled");
        }
        const filledField = document.querySelectorAll('.this-field.filled');
        let percen = 100 / field.length;
        let running = percen * filledField.length;
        progressBar.style.width = running + '%';
    };
    ['keyup','click'].forEach(listener => {
        input.addEventListener(listener, progress, false)});
    window.addEventListener('load', progress, false)});

const phoneNum = document.querySelector('.phone-number');
phoneNum.addEventListener(
    'keyup', function() {
        if(phoneNum.value[0] != '0') {
            phoneNum.value = '0' + phoneNum.value;
        }
    }
);

const ekskulMenu = document.querySelectorAll('select');
ekskulMenu[0].addEventListener(
    'click', function() {
        if(ekskulMenu[0].value == ekskulMenu[1].value && ekskulMenu[1].value != '') {
            ekskulMenu[0].value = '';
            ekskulMenu[0].options[0].text = 'Pilih ekskul berbeda!';
        } else {
            ekskulMenu[0].options[0].text = 'Pilih Ekstrakurikuler';
        }
    }
)
ekskulMenu[1].addEventListener(
    'click', function() {
        if(ekskulMenu[1].value == ekskulMenu[0].value && ekskulMenu[0].value != '') {
            ekskulMenu[1].value = '';
            ekskulMenu[1].options[0].text = 'Pilih ekskul berbeda!';
        } else {
            ekskulMenu[1].options[0].text = 'Pilih Ekstrakurikuler';
        }
    }
)