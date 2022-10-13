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