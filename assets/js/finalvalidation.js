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
    var nameInput = document.getElementById("fname")
    var mNameInput = document.getElementById("mname");

    //addEventListener input, gina check nya if nagsulat ka or typing dra nga field or naka focus dra nga field
    nameInput.addEventListener('input', function(){
        if(nameInput.value.length > 0){
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
    });
    mNameInput.addEventListener('input', function(){
        if(mNameInput.value.length > 0){
            var child = document.getElementById('midName');
            mNameInput.value = mNameInput.value.toUpperCase();
            child.style.display = "none";
            mname.style.border = "1px solid green";
        }
        else{
            var child = document.getElementById('midName');
            child.style.display = "inline"; 
            mname.style.border = "1px solid red";
        }
    });
}


