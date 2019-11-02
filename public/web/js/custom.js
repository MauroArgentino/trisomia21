$(document).ready(function () {
     $("#share").jsSocials({
            shareIn: "popup",
            showCount: true,
            shares: [ "email", 
                      "twitter",
                      "facebook",
                      "whatsapp",
                      "linkedin",
                      "telegram"]
        });

     $("#sugerirPublicacion").keyup(function(){

        var query = $(this).val();

        if(query != ''){
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "/home",
                method: "POST",
                data: {query:query, _token:_token},
                success: function(data){
                  $('#listadoPublicaciones').fadeIn();
                  $('#listadoPublicaciones').html(data);
                  console.log(data);
                }
            })
        }
     });

     
});