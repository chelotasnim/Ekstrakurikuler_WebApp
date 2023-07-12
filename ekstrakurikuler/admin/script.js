const sideBar = document.querySelector(".side-bar");
const toggleBtn = document.querySelector(".toggle-dashboard");
toggleBtn.addEventListener("click", function () {
  sideBar.classList.toggle("hide");
});

const nav = document.querySelectorAll(".bar-box");
for (let i = 0; i < nav.length; i++) {
  nav[i].addEventListener("click", function () {
    let j = 0;
    while (j < nav.length) {
      nav[j++].classList.remove("active");
    }
    nav[i].classList.add("active");
    const subBar = document.querySelectorAll(".sub-bar");
    subBar.forEach(e => {
      const boxCondition = e.previousElementSibling.className;
      if (boxCondition == "bar-box active") {
        e.classList.add("active");
      } else {
        e.classList.remove("active");
      }
    });
  });
}

const ekskulName = document.querySelectorAll('.desc h5');
const ekskulMember = document.querySelectorAll('.desc p');
const canvas = document.querySelector('canvas');
if ( canvas != undefined || canvas != null ) {
  const ctx = canvas.getContext("2d");
  const myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: [],
      datasets: [
      {
        label: "Jumlah Peserta",
        data: [],
        backgroundColor: [],
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  ekskulName.forEach(ekskul => {
    myChart.data.labels.push(ekskul.textContent);
  });
  ekskulMember.forEach(member => {
    myChart.data.datasets[0].data.push(member.textContent);
  });
  for(let i = 0; i < myChart.data.labels.length; i++) {
    if ( i % 2 == 0 ) {
      myChart.data.datasets[0].backgroundColor.push('rgb(100, 200, 200)');
    } else {
      myChart.data.datasets[0].backgroundColor.push('rgb(100, 225, 150)');
    }
  }

  myChart.update();
}

function searchData() {
  var searchBox, row, filter, a, i, txtValue;
  searchBox = document.querySelector('.search-box');
  row = document.querySelectorAll('.search-parameter');
  filter = searchBox.value.toUpperCase();
  for (i = 0; i < row.length; i++) {
      a = row[i];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          row[i].parentElement.style.display = 'table-row';
      } else {
          row[i].parentElement.style.display = 'none';
      }
  }
};