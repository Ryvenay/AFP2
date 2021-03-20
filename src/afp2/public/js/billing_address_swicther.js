    var form = $('#regform'),
        checkbox = $('#chbox'),
        chShipBlock = $('#register_billing_address');

    chShipBlock.hide();

    checkbox.on('click', function() {
        if ($(this).is(':checked')) {
            chShipBlock.show();
        } else {
            chShipBlock.hide();
        }
    });