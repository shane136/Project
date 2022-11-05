$(document).ready(function() {
    $('#active').DataTable( {
      searching: true,
        dom: 'Bfrtip',
        buttons: [
              {
                extend: 'csv',
                title: 'ACTIVE VOTERS',
                text: '<i class="fas fa-file-csv"></i> CSV',
             },
             {
                extend: 'pdf',
                title: 'ACTIVE VOTERS',
                text: '<i class="fa fa-file-pdf-o"></i> PDF'
             },
             {
                extend: 'print',
                title: 'ACTIVE VOTERS',
                text: '<i class="fa fa-print"></i> PRINT'
             }
        ],
        language:{
            searchPlaceholder: "Search data"
        }
    });
});

//inactive_voters
$(document).ready(function() {
    $('#inactive').DataTable( {
      searching: true,
        dom: 'Bfrtip',
        buttons: [
              {
                extend: 'csv',
                title: 'INACTIVE VOTERS',
                text: '<i class="fas fa-file-csv"></i> CSV',
             },
             {
                extend: 'pdf',
                title: 'INACTIVE VOTERS',
                text: '<i class="fa fa-file-pdf-o"></i> PDF'
             },
             {
                extend: 'print',
                title: 'INACTIVE VOTERS',
                text: '<i class="fa fa-print"></i> PRINT'
             }
        ],
        language:{
            searchPlaceholder: "Search data"
        }
    });
});

//cancelled_voters
$(document).ready(function() {
  $('#cancelled').DataTable( {
    searching: true,
      dom: 'Bfrtip',
      buttons: [
            {
              extend: 'csv',
              title: 'CANCELLED VOTERS',
              text: '<i class="fas fa-file-csv"></i> CSV',
           },
           {
              extend: 'pdf',
              title: 'CANCELLED VOTERS',
              text: '<i class="fa fa-file-pdf-o"></i> PDF'
           },
           {
              extend: 'print',
              title: 'CANCELLED VOTERS',
              text: '<i class="fa fa-print"></i> PRINT'
           }
      ],
      language:{
          searchPlaceholder: "Search data"
      }
  });
});

//notRegistered_voters
$(document).ready(function() {
  $('#notRegistered').DataTable( {
    searching: true,
      dom: 'Bfrtip',
      buttons: [
            {
              extend: 'csv',
              title: 'NON VOTERS',
              text: '<i class="fas fa-file-csv"></i> CSV',
           },
           {
              extend: 'pdf',
              title: 'NON VOTERS',
              text: '<i class="fa fa-file-pdf-o"></i> PDF'
           },
           {
              extend: 'print',
              title: 'NON VOTERS',
              text: '<i class="fa fa-print"></i> PRINT'
           }
      ],
      language:{
          searchPlaceholder: "Search data"
      }
  });
});
