const hoursBox = document.getElementById("hours");
const minutesBox = document.getElementById("minutes");

const dateBox = document.getElementById("date");
const dayBox = document.getElementById("day");

function GetDate()
{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "server.php?date");
    xhr.onreadystatechange = function()
    {
        if (xhr.readyState === 4 && xhr.status === 200)
        {
            let jsObj = JSON.parse(xhr.responseText);

            hoursBox.textContent = jsObj.hours.toString();
            minutesBox.textContent = jsObj.minutes.toString();
            
            date.textContent = jsObj.date.toString();
            dayBox.textContent = jsObj.day.toString();
        }
    };
    xhr.send();
}

GetDate();
setInterval(GetDate, 10000);
