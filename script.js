
const clock = document.querySelector('.clock .numbers');
const radius = 110; 
const numberOffset = 20; 

for (let i = 1; i <= 12; i++) {
  const number = document.createElement('div');
  number.classList.add('number');
  number.innerText = i;

  
  const angle = (i * 30 - 90) * (Math.PI / 180); 
  const x = radius + (radius - numberOffset) * Math.cos(angle); 
  const y = radius + (radius - numberOffset) * Math.sin(angle); 

  number.style.left = `${x}px`;
  number.style.top = `${y}px`;

  clock.appendChild(number);
}


function updateClock() {
  const now = new Date();
  const seconds = now.getSeconds();
  const minutes = now.getMinutes();
  const hours = now.getHours();

  const secondHand = document.getElementById('second-hand');
  const minuteHand = document.getElementById('minute-hand');
  const hourHand = document.getElementById('hour-hand');

  const secondDegree = seconds * 6; 
  const minuteDegree = minutes * 6 + seconds * 0.1; 
  const hourDegree = (hours % 12) * 30 + minutes * 0.5; 

  secondHand.style.transform = `translate(-50%, 0) rotate(${90 + secondDegree}deg)`;
  minuteHand.style.transform = `translate(-50%, 0) rotate(${90 + minuteDegree}deg)`;
  hourHand.style.transform = `translate(-50%, 0) rotate(${90 + hourDegree}deg)`;
}

setInterval(updateClock, 1000);
updateClock(); 
