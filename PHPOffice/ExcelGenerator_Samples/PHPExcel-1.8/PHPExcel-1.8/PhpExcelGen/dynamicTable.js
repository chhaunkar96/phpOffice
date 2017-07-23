$(document).ready(function() {
    //adding buttons

    $('#datatable').DataTable({
        "scrollX": true,
        dom: 'Bfrtip',

        buttons: [{
                extend: 'excel',
                title: 'sample',
                header: false
            }, {
                extend: 'csv',
                title: 'sampleCSV',
                header: false

            }, {
                //bug
                //needs some ajax implementation to print all the page
                extend: 'pdf',
                title: 'samplePDF',
                header: false
            }

        ],


    });
});

//edit function
$('#EditTable').on('click', function() {
    //disable some buttons to avoid conflict
    $(this).prop('disabled', true);
    $('#SaveTable').prop('disabled', false);
    $(".buttons-excel").css('display', 'none');
    $(".buttons-csv").css('display', 'none');
    $(".buttons-pdf").css('display', 'none');

    $('#datatable td').each(function() {
        var value = $(this).text();
        $(this).empty();
        $(this).append("<input type='text' id='tempContent' value=" + value + ">");
    });

});

$('#SaveTable').on('click', function() {
    $('#EditTable').prop('disabled', false);
    $(this).prop('disabled', true);

    $(".buttons-excel").css('display', '');
    $(".buttons-csv").css('display', '');
    $(".buttons-pdf").css('display', '');

    $('#datatable td').each(function() {

        var value;
        $('#tempContent').each(function() {
            value = $(this).val();
        });
        $(this).empty();
        $(this).append(value);
    });


});