const box = document.querySelectorAll('.select-box');
const boxHead = document.querySelector('.box-head');
const inputField = document.querySelectorAll('.ekskul-input');
const reset = document.querySelector('button.reset');
const submit = document.querySelector('button.daftar');
box.forEach(e => {
    e.addEventListener(
        'click', function() {
            const boxPicked = document.querySelectorAll('.select-box.active p');
            let i = boxPicked.length;
            if (i < 2) {
                e.classList.add("active");
                if (i == 0) {
                    boxHead.classList.add("good");
                    boxHead.innerText = 'Pilihan cukup';
                }
            } else {
                boxHead.classList.replace("good","limit");
                boxHead.innerText = 'Batas memilih!';
                function warning() {
                    boxHead.classList.replace("limit","good");
                    boxHead.innerText = 'Piihan cukup';
                }
                setTimeout(warning, 2000);
            }
        }
    )
});

function myFunction() {
    const boxPicked = document.querySelectorAll('.select-box.active p');
    if(boxPicked.length >= 1) {
        const value1 = boxPicked[0].textContent;
        inputField[0].value = value1;
        inputField[0].previousElementSibling.style.color = 'rgb(100, 100, 100)';
        inputField[0].style.border = 'none';
        if (boxPicked.length == 2) {
            const value2 = boxPicked[1].textContent;
            inputField[1].value = value2;
        };
    };
} setInterval(myFunction, 100);

reset.addEventListener(
    'click', e => {
        e.preventDefault();
        box.forEach(e => {
            e.classList.remove("active");
        });
        inputField.forEach(e => {
            e.placeholder = 'Pilih pada box (Ekskul Wajib)';
            e.value = '';
            boxHead.classList.remove("good");
        });
    }
);

submit.addEventListener(
    'click', e => {
        if(inputField[0].value == '') {
            e.preventDefault();
            inputField[0].previousElementSibling.style.color = 'rgb(255, 0, 0)';
            inputField[0].style.borderBottom = '2px solid rgb(255, 0, 0)';
            inputField[0].placeholder = 'Pilih setidaknya 1 ekstrakurikuler!';
        };
    }
);

const phoneNum = document.querySelector('.phone-number');
phoneNum.addEventListener(
    'keyup', function() {
        if(phoneNum.value[0] != '0') {
            phoneNum.value = '0' + phoneNum.value;
        }
    }
);