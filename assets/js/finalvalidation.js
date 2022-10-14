function validateForm(){

    var fname = document.getElementById("fname");
    var mname = document.getElementById("mname");
    var lname = document.getElementById("lname");

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

    // if(lname.value == ""){
    //     var child = document.getElementById('lastName');
    //     child.style.display = "inline";
    //     lname.style.border = "1px solid red";
    // }
    // else{
    //     var child = document.getElementById('lastName');
    //     child.style.display = "none";
    // }

}

function checkValidation(){
    var nameInput = document.getElementById("fname")
    var mNameInput = document.getElementById("mname");
    var lNameInput = document.getElementById("lname");
    
    var specialChar = /^[ A-Za-z-]*$/;

    //addEventListener input, gina check nya if nagsulat ka or typing dra nga field or naka focus dra nga field
    nameInput.addEventListener('input', function(){
        if(nameInput.value.length > 0){
            if(nameInput.value.match(specialChar)){
                var child = document.getElementById('firstName');
                nameInput.value = nameInput.value.toUpperCase();
                child.style.display = "none";
                fname.style.border = "1px solid green";
            }
            else{
                var child = document.getElementById('firstName');
                fname.style.border = "1px solid red";
                child.style.display = "inline";
                child.innerText = "Alphabet letters and dash (-) are only Allowed!";
            }
            
        }
        else{
            var child = document.getElementById('firstName');
            child.style.display = "inline"; 
            fname.style.border = "1px solid red";
            child.innerText = "First Name Is Required";
        }
    });
    mNameInput.addEventListener('input', function(){
        if(mNameInput.value.length > 0){
            if(mNameInput.value.match(specialChar)){
                var child = document.getElementById('midName');
                child.style.display = "none";
                mname.style.border = "1px solid green";
                mNameInput.value = mNameInput.value.toUpperCase();
            }
            else{
                var child = document.getElementById('midName');
                child.style.display = "inline";
                mname.style.border = "1px solid red";
                child.innerText = "Alphabet letters and dash (-) are only Allowed!";
            }
        }
        else{
            var child = document.getElementById('midName');
            child.style.display = "inline";
            mname.style.border = "1px solid red";
            child.innerText = "Middle Name Is Required"
        }
    });

    // lNameInput.addEventListener('input', function(){
    //     if(lNameInput.value.length > 0){
    //         if(lNameInput.value.match(specialChar)){
    //             var child = document.getElementById('lastName');
    //             child.style.display = "none";
    //             lname.style.border = "1px solid green";
    //             lNameInput.value = lNameInput.value.toUpperCase();
    //         }
    //         else{
    //             var child = document.getElementById('lastName');
    //             child.style.display = "inline";
    //             lname.style.border = "1px solid red";
    //             child.innerText = "Alphabet letters and dash (-) are only Allowed!";
    //         }
    //     }
    //     else{
    //         var child = document.getElementById('lastName');
    //         child.style.display = "inline";
    //         lnmae.style.border = "1px solid red";
    //         child.innerText = "Last Name Is Required";
    //     }
    // });
}


