$(document).ready(function() {



});



function recieve(data){

         var qrcode_content =  data.qr_content;
          var qrcode_type =   data.qr_type;



            /*  $('.regular_div').hide(0, function () {
                $(this).remove();

              });
      $('.second_stage_father').show();
    var url_to_redirect = qrcode_content ;
    $("#link_generate").attr("href", "http://www.visualead.com/qr-code-generator/add_qr_details/?type="+qrcode_type+"&content="+encodeURIComponent(url_to_redirect));
        */
}

window.addEventListener("message", function(e) {
  recieve(e.data);
}, false);