jQuery(document).ready(function($){
    $("#txtSearch").on('keyup', function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();

        let data = {
            title: $('#txtSearch').val(),
        };

        $.ajax({
            type: "POST",
            url: "movie/search",
            data: data,
            success: function (data) {
                $('#listMovie').html(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    })
})