/*
 Template Name: Admiria - Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Datatable js
 */

$(document).ready(function() {
    $('#datatable').DataTable({ 
        "language": {
            search: '<i class="fa fa-eye" aria-hidden="true"></i>',
            searchPlaceholder: 'search'
        },
        "paging":   false,
        "ordering": false,
        "info":     false
    });

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
} );