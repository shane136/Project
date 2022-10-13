function validateForm(){

    var fname = document.getElementById("fname");
    if(fname.value == ""){
        var child = document.getElementById('firstName');
        child.style.display = "inline";   
    }
    else{
        var child = document.getElementById('firstName');
        child.style.display = "none";
    }
}

function checkValidation(){
    var nameInput = document.getElementById("fname");
    if(nameInput.value.length > 0){
        
        child.style.display = "none";
    }
    else{
        var child = document.getElementById('firstName');
        child.style.display = "inline"; 
    }
}