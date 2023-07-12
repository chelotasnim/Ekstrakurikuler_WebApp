const page = document.body;
const lightTheme = document.querySelector('.light-toggle');
const darkTheme = document.querySelector('.dark-toggle');
const navToggle = document.querySelector('.navbar-toggler');

lightTheme.addEventListener(
    'click', function() {
        page.classList.remove("dark");
        navToggle.classList.add("navbar-light");
        navToggle.classList.remove("navbar-dark");
    }
)

darkTheme.addEventListener(
    'click', function() {
        page.classList.add("dark");
        navToggle.classList.remove("navbar-light");
        navToggle.classList.add("navbar-dark");
    }
)

const toTopBtn = document.querySelector('.scroll-to-top');

window.onscroll = function() {
  if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    toTopBtn.style.visibility = 'visible';
  } else {
    toTopBtn.style.visibility = 'hidden';
  }
}

toTopBtn.addEventListener(
  'click', function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
)

const seaTheme = document.querySelector('.sea-theme');
const redMoon = document.querySelector('.red-moon');
const redCandy = document.querySelector('.red-candy');
seaTheme.addEventListener(
  'click', function() {
    page.classList.remove('moon');
    page.classList.remove('candy');
    page.classList.add('sea');
  }
)
redMoon.addEventListener(
  'click', function() {
    page.classList.remove('candy');
    page.classList.remove('sea');
    page.classList.add('moon');
  }
)
redCandy.addEventListener(
  'click', function() {
    page.classList.remove('moon');
    page.classList.remove('sea');
    page.classList.add('candy');
  }
)

const nav = document.querySelector('.navbar');
function navDisplay() {
    nav.classList.add("active");
}
setTimeout(navDisplay, 4000);

const card = document.querySelectorAll('.ekskul-card');
const btn = document.querySelectorAll('.dropdown-menu a');

btn.forEach(e => {
  e.addEventListener(
    'click', function() {
      let condition = e.textContent;
      if(condition) {
        for(let i = 0; i < card.length; i++) {
          if(card[i].id != condition && condition == 'Semua') {
            card[i].style.display = 'flex';
          } else if (card[i].id != condition) {
            card[i].style.display = 'none';
          } else {
            card[i].style.display = 'flex';
          }
        }
      }
    })
});

function searchEkskul() {
  var searchCard, filter, a, i, txtValue;
  searchCard = document.querySelector('.search-card');
  filter = searchCard.value.toUpperCase();
  for (i = 0; i < card.length; i++) {
      a = card[i].querySelector('.card-title');
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          card[i].style.display = "flex";
      } else {
          card[i].style.display = "none";
      }
  }
};