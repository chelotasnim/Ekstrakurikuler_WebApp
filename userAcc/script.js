const leftSide = document.querySelector('.left.box');
const rightSide = document.querySelector('.right.box');
const switchBtn = document.querySelectorAll('.switch');

switchBtn.forEach(e => {
    e.addEventListener(
        'click', function () {
        leftSide.classList.toggle("active");
        rightSide.classList.toggle("active");
        }
    );
});

const send = document.querySelectorAll('form');
send.forEach(box => {
    const allField = box.querySelectorAll('input');
    const field = box.querySelector('input[type=password]');
    box.querySelector('.submit').addEventListener(
        'click', function() {
            if(field.value.length < 8) {
                field.style.borderBottom = '2px solid rgb(255, 0, 0)';
            }
        }
    )
    allField[0].addEventListener(
        'keyup', function() {
            allField[0].style.borderBottom = '2px solid rgb(100, 100, 100)';
            allField[0].placeholder = 'Maks 12 Karakter';
        }
    )
    allField[1].addEventListener(
        'keyup', function() {
            allField[1].style.borderBottom = '2px solid rgb(100, 100, 100)';
            allField[1].placeholder = 'Minimal 8 Karakter';
        }
    )
});