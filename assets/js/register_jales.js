$('document').ready(function () {//Primero lee el archivo y luego pasa a la funcion
//console.log('marina');
	$('#registrojales').submit(function (e) { //Cunado se de click manda a llamar las funciones de adentro se crea la función

		e.preventDefault(); //Evita que se recarge la página

		// if(!$('#nombre').val() == '') { //Si es diferente del id del imput del nombre usuario, se realiza la funcio

			$.ajax({
				url: "assets/php/registroj.php", //Nombre del archivo
				type: "POST",
				data: new FormData(this), //Es una clase que imita a un formulario en HTML, al colocalr this, será el formulario actual				cache: false,
				cache: false,
				processData: false,
				contentType: false,
				dataType: 'json', // especifica el tipo de dato de retorno
				success: function (respuesta) {//Función de "regreso" (si la conexion fue exitosa, mostrara y ejecutará la función)
					if(respuesta['exito'] == 1)	{  //Toma el objeto de respueta con el atributo
						window.open('index.html','_self');
						//alertify.success('Ya eres miembro de Jales! Inicia sesión.');
					}else{
						console.log(respuesta['msg']);
						alertify.error('Lamentablemente no fuiste registrado, intentalo de nuevo.');

					}
				}

			}

			);
		// }
	});

});
