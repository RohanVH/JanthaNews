`use strict`;
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