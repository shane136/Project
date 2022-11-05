// document.addEventListener("DOMContentLoaded", function(){

// var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
// var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");

// function showPanel(panelIndex,colorCode) {
//     tabButtons.forEach(function(node){
//         node.style.backgroundColor="";
//         node.style.color="";
//     });
//     tabButtons[panelIndex].style.backgroundColor=colorCode;
//     tabButtons[panelIndex].style.color="white";
//     tabPanels.forEach(function(node){
//         node.style.display="none";
//     });
//     tabPanels[panelIndex].style.display="block";
//     tabPanels[panelIndex].style.backgroundColor=colorCode;
// }

// showPanel(0,'#f44336');


// });



function showPanel(panelId){
  

    var allPanels = document.querySelectorAll('.panel');
    allPanels.forEach(panel => {
        if(panelId == panel.id){
            console.log(panelId);
            var panelName = document.getElementById(panel.id);
            panelName.style.display = 'inline';
        }
        else{
            var panelName = document.getElementById(panel.id);
            panelName.style.display = 'none';
        }
        
    });
    // document.getElementById(panelId).classList.remove('hide');

}


