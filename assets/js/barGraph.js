document.addEventListener("DOMContentLoaded", function(){

    var bar = document.getElementById("myChart") //canvas id
    
    
    var x = ["Zone 1", "Zone 2", "Zone 3", "Zone 4", "Zone 5"];
    var y = [10, 20, 30, 40, 50];
    var color = ["blue", "orange", "yellow", "pink", "red"];
    
    
    new Chart(bar, {
        type: "bar",
        data: {
            labels: x,
            datasets: [{backgroundColor: color, data:y}]
        },
        options: {
            legend: {display: false},
            title:{
                display: true,
                text: "Barangay Purok 2022"
            },
            indexAxis: 'y'
        }
    });
    
});
    