$(document).ready(function () {
     $("#share").jsSocials({
            shareIn: "popup",
            showCount: true,
            shares: [ "email", 
                      { share: "twitter", logo: "fab fa-twitter" },
                      { share: "facebook", logo: "fab fa-facebook", label: "Facebook" },
                      { share: "whatsapp", logo: "fab fa-whatsapp" },
                      { share: "linkedin", logo: "fab fa-linkedin-in", label: "Linkedin" },
                      "telegram"]
        });

     $("#sugerirPublicacion").keyup(function(){

        var consulta = $(this).val();

        if(consulta != ''){
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "/home",
                method: "POST",
                data: {consulta:consulta, _token:_token},
                success: function(data){
                  console.log(data);
                  $('#listadoPublicaciones').fadeIn();
                  $('#listadoPublicaciones').html(data);
                }
            })
        }
     });

     $('.card img').each(function() {

        if ($(this).hasClass("persona")) {
              console.log("Hola");
                  $(this).attr("src", 'https://i.pravatar.cc/180');
            }
      });
     
});