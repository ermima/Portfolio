
const newYear = new Date('september 11, 2024 6:00:00' )
//update time
let countDown=setInterval(function updateTime(){
   let currentDate = new Date().getTime();
   let difference = newYear - currentDate;

   let day = Math.floor(difference/1000/60/60/24);
   let hour = Math.floor(difference/1000/60/60)%24;
   let minute = Math.floor(difference/1000/60)%60;
   let second = Math.floor(difference/1000)%60; 

   document.getElementById('days').innerHTML=day;
   document.getElementById('hours').innerHTML=hour;
   document.getElementById('minutes').innerHTML=minute;
   document.getElementById('seconds').innerHTML=second;

   if(difference < 0){
      clearInterval(newYear);
   document.getElementById('timeOut').innerHTML='HAPPY NEW YEAR';
   document.getElementById('days').innerHTML=0;
   document.getElementById('hours').innerHTML=0;
   document.getElementById('minutes').innerHTML=0;
   document.getElementById('seconds').innerHTML=0;
   

   }
},1000);
