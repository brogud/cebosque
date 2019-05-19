$(document).ready(function() {

    $("#submitContact").click(function(e) {

        showHideRoller(true);

        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var data = {
            name: $("#name").val(),
            email: $("#email").val(),
            subject: $("#subject").val(),
            phone: $("#phone").val(),
            message: $("#message").val()
        }  

        $.ajax({
            url: '/sendcontact',
            type: 'POST',
            data: data,
            success: function( data, textStatus, jQxhr ){
                showHideRoller(false);
                Snackbar.show({text: 'Su mensaje ha sido enviado!'});          
            },
            error: function(jqXhr, textStatus, errorThrown ){
                showHideRoller(false); 
                Snackbar.show({text: 'Su mensaje no fue enviado, intentelo nuevamente, si continua, puede utilizar los otros medios de comunicación'});
            }
        });
    });
});

function showHideRoller(flag){
    if(flag){
        $('#roller').removeClass('mfp-hide');
        $('#submitContact').addClass('mfp-hide');
    }else{
        $('#roller').addClass('mfp-hide');
        $('#submitContact').removeClass('mfp-hide');
    }
}