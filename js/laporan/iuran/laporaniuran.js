
datatable = $('#iuran-table').DataTable({
    responsive: true,
    order: [],
    dom: 'Bfrtlip',
    // "pageLength": 7,
    scrollX: true,
    scrollY: '350px', // Set the desired height here
    buttons: [
        'copy', 'csv', 'excel', 'pdf'
    ]
});