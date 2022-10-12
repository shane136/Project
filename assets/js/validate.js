function validateForm(){

    var fname = document.getElementById("fname");
    console.log("here");
    // var fname_error = document.getElementById('fname_error');
    if(fname.value == ""){
       
        var container = document.getElementById('fname_error');
        container.insertAdjacentHTML(
            'beforeend',
            `<p class="text-danger">First name is required</p>`,
          );
    }
}