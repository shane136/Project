function validateForm(){

    var fname = document.getElementById("fname");
    var mname = document.getElementById("mname");
    var lname = document.getElementById("lname");
    var place = document.getElementById("place");
    var brgy = document.getElementById("brgy");
    var zone = document.getElementById("zone");

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

    if(lname.value == ""){
        var child = document.getElementById('lastName');
        child.style.display = "inline";
        lname.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('lastName');
        child.style.display = "none";
    }

    if(place.value == ""){
        var child = document.getElementById('placeOfBirth');
        child.style.display = "inline";
        place.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('placeOfBirth');
        child.style.display = "none";
    }

    if(brgy.value == ""){
        var child = document.getElementById('barangay');
        child.style.display = "inline";
        brgy.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('barangay');
        child.style.display = "none";
    }

    if(zone.value == ""){
        var child = document.getElementById('zoneName');
        child.style.display = "inline";
        zone.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('zoneName');
        child.style.display = "none";
    }
}

function checkValidation(){
    var nameInput = document.getElementById("fname")
    var mNameInput = document.getElementById("mname");
    var lNameInput = document.getElementById("lname");
    var pNameInput = document.getElementById("place");
    var bNameInput = document.getElementById("brgy");
    var zNameInput = document.getElementById("zone");
    
    var specialChar = /^[ A-Za-z-]*$/;
    var alphaNumeric = /[A-Za-z0-9][A-Za-z0-9][A-Za-z0-9 ]$/;
  

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

    lNameInput.addEventListener('input', function(){
        if(lNameInput.value.length > 0){
            if(lNameInput.value.match(specialChar)){
                var child = document.getElementById('lastName');
                child.style.display = "none";
                lname.style.border = "1px solid green";
                lNameInput.value = lNameInput.value.toUpperCase();
            }
            else{
                var child = document.getElementById('lastName');
                child.style.display = "inline";
                lname.style.border = "1px solid red";
                child.innerText = "Alphabet letters and dash (-) are only Allowed!";
            }
        }
        else{
            var child = document.getElementById('lastName');
            child.style.display = "inline";
            lname.style.border = "1px solid red";
            child.innerText = "Last Name Is Required";
        }
    });

    pNameInput.addEventListener('input', function(){
        if(pNameInput.value.length > 0){
            var child = document.getElementById('placeOfBirth');
            child.style.display = "none";
            place.style.border = "1px solid green";
            pNameInput.value = pNameInput.value.toUpperCase();
        }
        else{
            var child = document.getElementById('placeOfBirth');
            child.style.display = "inline";
            place.style.border = "1px solid red";
        }

    });

    bNameInput.addEventListener('input', function(){
        if(bNameInput.value.length > 0){
            var child = document.getElementById('barangay');
            child.style.display = "none";
            brgy.style.border = "1px solid green";
            bNameInput.value = bNameInput.value.toUpperCase();
        }
        else{
            var child = document.getElementById('barangay');
            child.style.display = "inline";
            brgy.style.border = "1px solid red";
        }
    });

    zNameInput.addEventListener ('input', function(){
        if(zNameInput.value.length > 0){
            if(zNameInput.value.match(alphaNumeric)){
                var child = document.getElementById('zoneName');
                child.style.display = "none"
                zone.style.border = "1px solid green";
                zNameInput.value = zNameInput.value.toUpperCase();
            }
            else{
                var child = document.getElementById('zoneName');
                child.style.display = "inline";
                zone.style.border = "1px solid red";
                child.innerText = "Alphabet and Numbers are only Allowed!";
            }
        }
        else{
            var child = document.getElementById('zoneName');
            child.style.display = "inline";
            zone.style.border = "1px solid red";
            child.innerText = "Required*";
        }
    });


}


