//login logic



//register logic



//navbar logic
const lists = document.querySelectorAll(".nav-item .nav-link");
const navPointer = document.querySelector(".nav-higlighter");
const logo = document.querySelector(".navbar-brand");
const logoutButton = document.querySelector(".logout-button"); 

const DEFAULT_NAV_INDEX = 0; 

const setHighlightPosition = (element) => {
  const parent = element.parentElement;
  const rect = parent.getBoundingClientRect();
  navPointer.style.width = `${rect.width}px`;
  navPointer.style.left = `${parent.offsetLeft}px`;
};

// Event listener untuk logo
logo.addEventListener("click", () => {
    localStorage.removeItem("activeNav");
    localStorage.setItem('activeTab', 'info'); 
    setHighlightPosition(lists[DEFAULT_NAV_INDEX]);
});

lists.forEach((link, index) => {
  link.addEventListener("click", () => {
    setHighlightPosition(link);
    localStorage.setItem("activeNav", index);
  });
});

window.addEventListener("DOMContentLoaded", () => {
  const activeIndex = localStorage.getItem("activeNav");
  if (activeIndex !== null) {
    const activeElement = lists[activeIndex];
    setHighlightPosition(activeElement); 
  } else {
    setHighlightPosition(lists[DEFAULT_NAV_INDEX]);
  }
});

const handleLogout = () => {
  localStorage.removeItem("activeNav");
  setHighlightPosition(lists[DEFAULT_NAV_INDEX]);
};

// Event listener untuk tombol logout
logoutButton.addEventListener("click", () => {
  handleLogout();
  localStorage.setItem('activeTab', 'info'); 
});

//Jam
function updateClock() {
  const jam = document.getElementById('clock');
  if (jam) {
    const now = new Date();
    jam.textContent = now.toLocaleTimeString();
    requestAnimationFrame(updateClock);
  }
}
updateClock();

//tanggal
function displayhari() {
  const display = document.getElementById('date');
  
  if (display) {
    const date = new Date();
    const hariIni = date.toLocaleDateString('id-ID', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric',
    });

    display.textContent = hariIni;
  }
}
document.addEventListener('DOMContentLoaded', displayhari);

//profile logic
const btnInfo = document.getElementById('btn-info');
const btnKontak = document.getElementById('btn-kontak');
const tabInfo = document.getElementById('tab-info');
const tabKontak = document.getElementById('tab-kontak');
let activeTab = localStorage.getItem('activeTab') || 'info';

function switchTab(tab) {
    activeTab = tab;
    localStorage.setItem('activeTab', tab);

    if (tab === 'info') {
        tabInfo.style.display = 'block';
        tabKontak.style.display = 'none';
    } else {
        tabInfo.style.display = 'none';
        tabKontak.style.display = 'block';
    }

    btnInfo.classList.toggle('active', tab === 'info');
    btnKontak.classList.toggle('active', tab === 'kontak');
}
btnInfo.addEventListener('click', () => switchTab('info'));
btnKontak.addEventListener('click', () => switchTab('kontak'));

switchTab(activeTab);

//notif logic
function markAsRead(notifId) {
  const notifElement = document.getElementById(notifId);
  if (notifElement) {
      notifElement.style.opacity = '0.5';
  }
}