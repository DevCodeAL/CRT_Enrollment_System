function filterTable() {
    // Get input element and filter value
    var input = document.getElementById('searchInput');
    var filter = input.value.toUpperCase();

    // Get the table and table rows
    var table = document.getElementById('dataTable');
    var rows = table.getElementsByTagName('tr');

    // Loop through all table rows, hide those that don't match the search query
    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName('td');
        var shouldShow = false;

        for (var j = 0; j < cells.length; j++) {
            var cellText = cells[j].textContent || cells[j].innerText;

            if (cellText.toUpperCase().indexOf(filter) > -1) {
                shouldShow = true;
                break;
            }
        }

        if (shouldShow) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
}