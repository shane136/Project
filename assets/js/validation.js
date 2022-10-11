function validateForm(){

    var fname = document.RegForm.fname.value;
    var lname = document.RegForm.lname.value;
    var mname = document.RegForm.mname.value;
    var religion = document.RegForm.religion.value;
    var bplace = document.RegForm.bplace.value;
    var brgy = document.RegForm.brgy.value;
    var zone = document.RegForm.zone.value;
    var cstatus = document.RegForm.cstatus.value;
    var occupation = document.RegForm.occupation.value;
    var age = document.RegForm.age.value;
    var btype = document.RegForm.btype.value;
    var nationality = document.RegForm.nationality.value;
    var num_household = document.RegForm.num_household.value;
    var sex = document.RegForm.sex.value;
    var education = document.RegForm.education.value;
    var username = document.RegForm.username.value;
    var password = document.RegForm.password.value;
    var month = document.RegForm.month.value;
    var day = document.RegForm.day.value;
    var year = document.RegForm.year.value;
    var age1 = /^[1-9]?[0-9]{1}$|^100$/;
    var username1 = /^[a-zA-Z0-9]+$/;
    var password1 = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    var fname1 = /\d+$/g; 
    var mname1 = /\d+$/g; 
    var lname1 = /\d+$/g; 

    if(fname == "" || fname1.test(fname)){
        window.alert("Please enter your First Name properly.");
        return false;
    }

    if(mname == "" || mname1.test(mname)){
        window.alert("Please enter your Middle Name properly.");
        return false;
    }

    if(lname == "" || lname1.test(lname)){
        window.alert("Please enter your Last Name properly.");
        return false;
    }

    if(religion == ""){
        window.alert("Please enter your Religion!");
        return false;
    }

    if(bplace == ""){
        window.alert("Please enter your Birth Place!");
        return false;
    }

    if(brgy == ""){
        window.alert("Please enter your Barangay!");
        return false;
    }

    if(zone == ""){
        window.alert("Please enter your Zone!");
        return false;
    }

    if(cstatus.selectedIndex == -1){
        window.alert("Please select an option of your Civil Status!");
        return false;
    }

    if(occupation == ""){
        window.alert("Please enter your Occupation!");
        return false;
    }

    if(age == "" || age1.test(age)){
        window.alert("Please enter your Age properly!");
        return false;
    }

    if(btype.selectedIndex == -1){
        window.alert("Please select an option of your Blood Type!");
        return false;
    }

    if(nationality == ""){
        window.alert("Please enter your Nationality!");
        return false;
    }

    if(num_household == ""){
        window.alert("Please enter Number of your Household Members!");
        return false;
    }

    if(sex.selectedIndex == -1){
        window.alert("Please select an option of your Sex!");
        return false;
    }

    if(education.selectedIndex == -1){
        window.alert("Please select an option of your Educational Attainment!");
        return false;
    }

    if(username == "" || username1.test(username)){
        window.alert("Please enter your Username properly!");
        return false;
    }

    if(password == "" || password1.test(password)){
        window.alert("Password should contains 6 or more character long, a Digit, a Lower-Case and an Upper-Case letters!");
        return false;
    }

    if(month.selectedIndex == -1){
        window.alert("Please select an option of your birth Month!");
        return false;
    }

    if(day.selectedIndex == -1){
        window.alert("Please select an option of your birth Day!");
        return false;
    }

    if(year.selectedIndex == -1){
        window.alert("Please select an option of your birth Year!");
        return false;
    }

}