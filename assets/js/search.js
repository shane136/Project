function searchRow(){
    var searchInput = document.getElementById("searchData");
    var value = searchInput.value.toLowerCase();
    $("#tableBody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    
}

