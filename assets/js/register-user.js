$('document').ready(function () {
    $('#bnext3').on('click', function(){
        // XMLHttpRequest
        var url = "assets/php/registro-userPT1.php";
          $.ajax({
             type: "POST",
             url: url,
             data: $("#registro").serialize(),
             success: function(data)
             {
               alert('Se ha finalizado tu registro');
             }
         });
    });
});
