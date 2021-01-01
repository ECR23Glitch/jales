$('document').ready(function () {

    $('#bnext1').on('click', function(){
        // XMLHttpRequest
        var url = "assets/php/registro-userPT1.php";
          $.ajax({
             type: "POST",
             url: url,
             data: $("#registro1").serialize(),
             success: function(data)
             {
               alert('Primera parte completada');
             }
         });
    });

    $('#bnext2').on('click', function(){
        // XMLHttpRequest
        var url = "assets/php/registro-userPT2.php";
          $.ajax({
             type: "POST",
             url: url,
             data: $("#registro2").serialize(),
             success: function(data)
             {
               alert('Segunda parte completada');
             }
         });
    });

    $('#bnext3').on('click', function(){
        // XMLHttpRequest
        var url = "assets/php/registro-userPT3.php";
          $.ajax({
             type: "POST",
             url: url,
             data: $("#registro3").serialize(),
             success: function(data)
             {
               alert('Se ha finalizado tu registro');
             }
         });
    });
});
