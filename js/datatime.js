`use strict`;
const dateclr = document.getElementById('date');
const timeclr = document.getElementById('time');

// 👇️ Change text color on mouseover
dateclr.addEventListener('mouseover', function handleMouseOver() {
    dateclr.style.color = 'red';
});

timeclr.addEventListener('mouseover', function handleMouseOver() {
    timeclr.style.color = 'red';
});

// 👇️ Change text color back on mouseout
dateclr.addEventListener('mouseout', function handleMouseOut() {
    dateclr.style.color = 'black';
    dateclr.style.background = 'none';
});

timeclr.addEventListener('mouseout', function handleMouseOut() {
    timeclr.style.color = 'black';
    timeclr.style.background = 'none';
});

function refreshTime() {
    var date = new Date().toDateString();
    var time = new Date().toLocaleTimeString();
    const timeDisplay = document.getElementById("time").textContent=time;
    const dateDisplay = document.getElementById("date").textContent=date;
    const formattedString = dateString.replace(", ", " - ");
    timeDisplay.textContent = formattedString;
    dateDisplay.textContent = formattedString;
}
setInterval(refreshTime, 1000);

