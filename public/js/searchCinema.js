jQuery(document).ready(function($){
    $("#txtSearch").on('keyup', function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();

        let data = {
            name: $('#txtSearch').val(),
        };

        $.ajax({
            type: "POST",
            url: "cinema/search",
            data: data,
            success: function (data) {
                $('#listCinema').html(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    })
})