
  function inputValidate(){
    const name=document.getElementById("name").value.trim();
    const age=document.getElementById("age").value.trim();
    
    if(name==="") {
     alert("Name can't empty");
      return false;
     
    }
     
    if(age===""){
      alert("age required.")
      return false;
    }
    if(age==NaN || age<0){
      alert("Invalid age")
      return false;
    }
  
    var pattern = /^[a-zA-Z\s]*$/;
     if(pattern.test(name)){
      return true
     }
     if(pattern.test(name) ===false){
      alert("Enter valid name.");
      return false;
     }    
     
 }  
 
      document.getElementById("birthDate").valueAsDate = new Date();

        function handleEyeColorChange() {
            const eyeColorSelect = document.getElementById('eye-color');
            const otherEyeColorInput = document.getElementById('other-eye-color');

            if (eyeColorSelect.value === 'other') {
                otherEyeColorInput.style.display = 'block';
            } else {
                otherEyeColorInput.style.display = 'none';
            }
        }
        var radios = document.getElementsByName('sex');
  var lastChecked = null;
  for (var i = 0; i < radios.length; i++) {
    radios[i].onclick = function() {
      if (lastChecked != null) {
        lastChecked.checked = false;
      }
      lastChecked = this;
    };
  }
