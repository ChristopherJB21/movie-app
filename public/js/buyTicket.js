jQuery(document).ready(function($){
    $("#txtQuantity").on('keyup', function(e){
        let quantity = parseInt($('#txtQuantity').val());
        let price = parseInt($('#Price').val());

        if (isNaN(quantity))
        {
            quantity = 1;
        }

        let total = quantity * price;

        data = "<td colspan='2' class='w-50 table-light'>Total Payment</td>";
        data += "<td class='table-light'>: Rp. " + total + ",00</td>";

        $('#fieldTotalPayment').html(data);
    })
})