$(document).ready(function(){
   $('#regform').on('submit', function(e){
     e.preventDefault();
     var email = $('#email').val();
     var username  = $('#username').val();
     var passkey = $('#password').val();
     var confirm_passkey = $('#confirm_password');

     var data = $('#regform').serialize();

     if(passkey.length > 8){
        if(passkey = confirm_passkey){
            if(username.length > 5){
              if(username = passkey){
                $.ajax({
                    type: "POST",
                    url: "ajax-request/register.php",
                    data: data,
                    beforeSend:function(){
                        $("#regBtn").html("Please Wait..........."); 
                    },
                    complete:function(){
                        $("#submit").html("Join Us");
                    },
                    success:function(data){
                        if(data == 'true'){
                            window.location.href = "login.php"
                        }else{
                            swal.fire({
                            type: 'error',
                            text: data
                            });
                        }
                    }
                })
              }else{
                swal.fire({
                    type: 'error',
                    text: 'Use a more safe password other than your username'
                 });
              }
            }else{
                swal.fire({
                    type: 'error',
                    text: 'Make sure your username exceeds five characters'
                 });
            }
         }else{
            swal.fire({
                type: 'error',
                text: 'Make sure your password are matching'
             });
         }
     }else{
        swal.fire({
            type: 'error',
            text: 'Please use a stronger password'
         });
     }
     
   });
});