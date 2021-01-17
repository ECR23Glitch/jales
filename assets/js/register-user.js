$('document').ready(function () {
    $('#bnext3').on('click', function(){
        // XMLHttpRequest
        event.preventDefault();
        var url = "assets/php/registro-user.php";
          $.ajax({
             type: "POST",
             url: url,
             data: $("#registro").serialize(),
             success: function(data)
             {
               toastr["success"]("Bienvenido", "Se ha completado tu registro");
               toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": $(location).attr('href','login.html'),
                        "showDuration": "3000",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
             }
             },
             error: function (jqXHR, exception) {
               toastr["error"]("Ya existe ese usuario");
               toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": $(location).attr('href','register_user.html'),
                        "showDuration": "3000",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
                }
         });
    });
});
