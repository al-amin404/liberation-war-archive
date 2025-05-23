setInterval(showTime, 1000);
function showTime(){
        document.getElementById('time').innerHTML = new Date();
}

const copyrightYear = document.getElementById('cp-year');
const currentYear = new Date().getFullYear();
copyrightYear.innerText = currentYear;