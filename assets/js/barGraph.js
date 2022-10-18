// document.addEventListener("DOMContentLoaded", function(){

//     var bar = document.getElementById("myChart") //canvas id
    
    
//     var x = ["Zone 1", "Zone 2", "Zone 3", "Zone 4", "Zone 5"];
//     var y = [10, 20, 30, 40, 50];
//     var color = ["blue", "orange", "yellow", "pink", "red"];
    
    
//     new Chart(bar, {
//         type: "bar",
//         data: {
//             labels: x,
//             datasets: [{backgroundColor: color, data:y}]
//         },
//         options: {
//             legend: {display: true},
//             title:{
//                 display: true,
//                 text: "Barangay Purok 2022"
//             },
//             indexAxis: 'y'
//         }
//     });
    
// });


document.addEventListener("DOMContentLoaded", function(){

new Chart(document.getElementById("myChart"), {
    type: 'horizontalBar',
    data: {
      labels: ["Zone 1", "Zone 2", "Zone 3", "Zone 4", "Zone 5"],
      datasets: [
        {
          label: "Total Population (Zone)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [247,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Zone/Purok Population 2022'
      },
    

    }
});
});



