function validateForm(){

    var fname = document.getElementById("fname");
    var mname = document.getElementById("mname");
    var lname = document.getElementById("lname");
    var place = document.getElementById("place");
    var brgy = document.getElementById("brgy");
    var zone = document.getElementById("zone");
    var cstatus = document.getElementById("cstatus");
    var occupation = document.getElementById("occupation");
    var age = document.getElementById("age");
    var btype = document.getElementById("btype");
    var nationality = document.getElementById("nationality");
    var member = document.getElementById("member");
    var sex = document.getElementById("sex");
    var education = document.getElementById("education");
    var bdate = document.getElementById("bdate");
    var photo = document.getElementById("photo");
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var voter = document.getElementById("voter");

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

    if(cstatus.value == ""){
        var child = document.getElementById('cStatus');
        child.style.display = "inline";
        cstatus.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('cStatus');
        child.style.border = "none";
    }

    if(occupation.value == ""){
        var child = document.getElementById('occupationName');
        child.style.display = "inline";
        occupation.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('occupationName');
        child.style.display = "none";
    }

    if(age.value == ""){
        var child = document.getElementById('ageName');
        child.style.display = "inline";
        age.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('ageName');
        child.style.display = "none";
    }

    if(btype.value == ""){
        var child = document.getElementById('btypeName');
        child.style.display = "inline";
        btype.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('btypeName');
        child.style.border = "none";
    }

    if(nationality.value == ""){
        var child = document.getElementById('nationalityName');
        child.style.display = "inline";
        nationality.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('nationalityName');
        child.style.display = "none";
    }

    if(member.value == ""){
        var child = document.getElementById('numberName');
        child.style.display = "inline";
        member.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('numberName');
        child.style.display = "none";
    }

    if(sex.value == ""){
        var child = document.getElementById('sexName');
        child.style.display = "inline";
        sex.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('sexName');
        child.style.display = "none";
    }

    if(education.value == ""){
        var child = document.getElementById('educName');
        child.style.display = "inline";
        education.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('educName');
        child.style.display = "none";
    }

    if(bdate.value == ""){
        var child = document.getElementById('bdateName');
        child.style.display = "inline";
        bdate.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('bdateName');
        child.style.display = "none";
    }

    if(photo.value == ""){
        var child = document.getElementById('photoName');
        child.style.display = "inline";
        photo.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('photoName');
        child.style.display = "none";
    }

    if(username.value == ""){
        var child = document.getElementById('userName');
        child.style.display = "inline";
        username.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('userName');
        child.style.display = "none";
    }

    if(password.value == ""){
        var child = document.getElementById('passName');
        child.style.display = "inline";
        password.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('passName');
        child.style.display = "none";
    }

    if(voter.value == ""){
        var child = document.getElementById('voterName');
        child.style.display = "inline";
        voter.style.border = "1px solid red";
    }
    else{
        var child = document.getElementById('voterName');
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
    var occptnNameInput = document.getElementById("occupation");
    var ageNameInput = document.getElementById("age");
    var bdateNameInput = document.getElementById("bdate");
    
    //regex
    var specialChar = /^[ A-Za-z-]*$/;
    var alphaNumeric = /^[A-Za-z0-9 ]*$/;
    var checkAge = /^[1-9][0-9]?$|^100$/;
    var checkUsername = /^[a-zA-Z0-9]{4,10}$/; //{min, max}
    var checkPassword = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    var checkUpper = /^(?=.*?[A-Z])/;
    var checkLower = /^(?=.*?[a-z])/;
   

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

    // zNameInput.addEventListener ('input', function(){
    //     if(zNameInput.value.length > 0){
    //         if(zNameInput.value.match(alphaNumeric)){
    //             var child = document.getElementById('zoneName');
    //             child.style.display = "none"
    //             zone.style.border = "1px solid green";
    //             zNameInput.value = zNameInput.value.toUpperCase();
    //         }
    //         else{
    //             var child = document.getElementById('zoneName');
    //             child.style.display = "inline";
    //             zone.style.border = "1px solid red";
    //             child.innerText = "Alphabet and Numbers are only Allowed!";
    //         }
    //     }
    //     else{
    //         var child = document.getElementById('zoneName');
    //         child.style.display = "inline";
    //         zone.style.border = "1px solid red";
    //         child.innerText = "Required*";
    //     }
    // });
    
        occptnNameInput.addEventListener('input', function(){
            if(occptnNameInput.value.length > 0){
                if(occptnNameInput.value.match(alphaNumeric)){
                    var child = document.getElementById('occupationName');
                    child.style.display = "none";
                    occupation.style.border = "1px solid green";
                    occptnNameInput.value = occptnNameInput.value.toUpperCase();
                }
                else{
                    var child = document.getElementById('occupationName');
                    child.style.display = "inline";
                    occupation.style.border = "1px solid red";
                    child.innerText = "Alphabet letters and numbers are only Allowed!";
                }
            }
            else{
                var child = document.getElementById('occupationName');
                child.style.display = "inline";
                occupation.style.border = "1px solid red";
                child.innerText = "Required*";
            }
        });

    ageNameInput.addEventListener('input', function(){
        if(ageNameInput.value.length > 0){
            if(ageNameInput.value.match(checkAge)){
                var child = document.getElementById('ageName');
                child.style.display = "none";
                age.style.border = "1px solid green";
                ageNameInput.value = ageNameInput.value.toUpperCase();
            }
            else{
                var child = document.getElementById('ageName');
                child.style.display = "inline";
                age.style.border = "1px solid red";
                child.innerText = "Invalid Age!";
            }
        }
        else{
            var child = document.getElementById('ageName');
            child.style.display = "inline";
            age.style.border = "1px solid red";
            child.innerText = "Required*";
        }
    });

    bdateNameInput.addEventListener('input', function(){
        if(bdateNameInput.value != ""){
            var child = document.getElementById('bdateName');
            child.style.display = "inline";
            bdate.style.border = "1px solid red";
        }
        else{  
            var child = document.getElementById('bdateName');
            child.style.display = "none";
            bdate.style.border = "1px solid green";
        }
    })
    


}

function checkZone(){

    var zNameInput = document.getElementById("zone");
   
 if(zNameInput.value.length > 0){
    var child = document.getElementById('zoneName');
    child.style.display = "none";
    zone.style.border = "1px solid green";
   
    }
else{
    var child = document.getElementById('zoneName');
    child.style.display = "inline";
    zone.style.border = "1px solid red";  
   
    } 
}

function checkStatus(){

    var csNameInput = document.getElementById("cstatus");
   
 if(csNameInput.value.length > 0){
    var child = document.getElementById('cStatus');
    child.style.display = "none";
    cstatus.style.border = "1px solid green";
   
    }
else{
    var child = document.getElementById('cStatus');
    child.style.display = "inline";
    cstatus.style.border = "1px solid red";  

    } 
}


function checkBtype(){

    var typeNameInput = document.getElementById("btype");

    if(typeNameInput.value.length > 0){
        var child = document.getElementById('btypeName');
        child.style.display = "none";
        btype.style.border = "1px solid green";
        }
    else{
        var child = document.getElementById('btypeName');
        child.style.display = "inline";
        btype.style.border = "1px solid red";   
        
    } 

}

function checkMember(){

    var memberNameInput = document.getElementById("member");

    if(memberNameInput.value.length > 0){
        var child = document.getElementById('numberName');
        child.style.display = "none";
        member.style.border = "1px solid green";
    }
    else{
        var child = document.getElementById('numberName');
        child.style.display = "inline";
        member.style.border = "1px solid red";
    }
}

function checkSex(){

    var sexNameInput = document.getElementById("sex");

    if(sexNameInput.value.length > 0){
        var child = document.getElementById('sexName');
        child.style.display = "none";
        sex.style.border = "1px solid green";
    }
    else{
        var child = document.getElementById('sexName');
        child.style.display = "inline";
        sex.style.border = "1px solid red";
    }
}

function checkEduc(){

    var educNameInput = document.getElementById("education");

    if(educNameInput.value.length > 0){
        var child = document.getElementById('educName');
        child.style.display = "none";
        education.style.border = "1px solid green";
    }
    else{
        var child = document.getElementById('educName');
        child.style.display = "inline";
        education.style.border = "1px solid red";
    }
}

function checkBdate(){
    var bdateNameInput = document.getElementById('bdate');
    bdateNameInput.addEventListener('input', function(e){

        if(e.target.value.length > 0){
            var child = document.getElementById('bdateName');
            child.style.display = "none";
            bdate.style.border = "1px solid green";
        }
        else{  
            var child = document.getElementById('bdateName');
            child.style.display = "inline";
            bdate.style.border = "1px solid red";
        }
    })
}

