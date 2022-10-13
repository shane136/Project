function validateForm(){

    var fname = document.getElementById("fname");
    var mname = document.getElementById("mname");

    if(fname.value == ""){
        var child = document.getElementById('firstName');
        child.style.display = "inline";   
        fname.style.border = "1px solid red";
    }
   
    else{
        var child = document.getElementById('firstName');
        child.style.display = "none";       
    }

    if(mname.value == ""){
        var child = document.getElementById('midName');
        child.style.display = "inline";   
        mname.style.border = "1px solid red";
    }
   
    else{
        var child = document.getElementById('midName');
        child.style.display = "none";       
    }

}


function checkValidation(){
    var nameInput = document.getElementById("fname");
    var MnameInput = document.getElementById("mname");
    var specialCharacters = /^[ A-Za-z-]*$/;

    if(nameInput.value.match(specialCharacters)){
        var child = document.getElementById('firstName');
        nameInput.value = nameInput.value.toUpperCase();
        child.style.display = "none";
        fname.style.border = "1px solid green";
    }
    else{
        var child = document.getElementById('firstName');
        child.style.display = "inline"; 
        fname.style.border = "1px solid red";   
    }
    
    if(MnameInput.value.match(specialCharacters)){
        var child = document.getElementById('midName');
        MnameInput.value = MnameInput.value.toUpperCase();
        child.style.display = "none";
        mname.style.border = "1px solid green";
    }
    else{
        var child = document.getElementById('midName');
        child.style.display = "inline"; 
        mname.style.border = "1px solid red";
    }

}


