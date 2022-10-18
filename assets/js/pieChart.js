document.addEventListener("DOMContentLoaded", function(){

    new Chart(document.getElementById("pieChart"), {
        type: 'pie',
        data: {
          labels: ["Total Population", "Total Blotter"],
          datasets: [
            {
              backgroundColor: ["blue", "orange"],
              data: [247,5267]
            }
          ]
        },
        options: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Pie Chart'
          },
        
    
        }
    });
    });
    