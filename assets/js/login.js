$(document).ready(function(){
    $('#regform').on('submit', function(e){
        e.preventDefault();

        var email = $('#email').val();
        var passkey = $('#password').val();
        var data = $('#regform').serialize();

        $.ajax({
            type: 'POST',
            url:  'ajax-request/login.php',
            data: data,
            beforeSend: function(){
                $("#submit").html("Autenticating");
            },
            complete:function(){
                $("#submit").html("Sign In");
            },
            success:function(response){
               if(response.trim() == 'true'){
                   window.location.href = "../app/index.php"
               }else{
                   swal.fire({
                       type: 'error',
                       text: response,
                   })
               }
            }
        });
    })
})