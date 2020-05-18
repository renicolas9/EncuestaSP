$(document).ready(inicio);
	
function inicio() {

	//modulosCheck = [];
	var nroSistema = 0;
	var sistemasCargados = [];

	$('#form-encuesta').submit(function(ev){
		ev.preventDefault();
		var respuestas = guardarRespuestas();
		console.log(respuestas);
		//guardarDragAndDrop();
		//waitScreen(true);
		//setTimeout(() => {  waitScreen(false); }, 2000);
		//setTimeout(() => {  responseWS(true,"IF-2020-001234- -GDEBA-TESTGDEBA"); }, 2500);
		//setTimeout(() => {  responseWS(false,"Error"); }, 2500);
		/*
		var calif = guardarCalificaciones();
		var respuestas = guardarRespuestas();
		if (calif != undefined){
			registrarEncuesta(calif,respuestas);
		} else {
			alert("Debe calificar en todas las preguntas");
		}*/
	});


	$('#forms-usuario').on('click',function(ev){
		ev.preventDefault();
		$('#forms-enviados').slideToggle();
		
	});

	$('#close-screen').on('click',function(ev){
		ev.preventDefault();
		waitScreen(false);
		location.reload();
	});


	$('#paso-1').show();
	$('#paso-2').hide();
	$('#paso-3').hide();
	$('#paso-4').hide();
	$('#paso-5').hide();

	$('.encabezado-1').show();
	$('.encabezado-2').hide();
	$('.encabezado-3').hide();
	$('.encabezado-4').hide();
	$('.encabezado-5').hide();


	$('#paso-1 button.btn-sig').on('click',function(ev){
		ev.preventDefault();

		$('#paso-1').fadeOut(2);
		$('#paso-2').fadeIn("slow");

		$('.encabezado-1').fadeOut(2);
		$('.encabezado-2').fadeIn("fast");
		$("html, body").animate({
		    scrollTop: 0
		}, 350);
	});

	$('#paso-2 button.btn-sig').on('click',function(ev){
		ev.preventDefault();

		$('#paso-2').fadeOut(2);
		$('#paso-3').fadeIn("slow");

		$('.encabezado-2').fadeOut(2);
		$('.encabezado-3').fadeIn("fast");

		$("html, body").animate({
		    scrollTop: 0
		}, 350);
	});

	$('#paso-3 button.btn-sig').on('click',function(ev){
		ev.preventDefault();
		$('#paso-3').fadeOut(2);
		$('#paso-4').fadeIn("slow");

		$('.encabezado-3').fadeOut(2);
		$('.encabezado-4').fadeIn("fast");
		$("html, body").animate({
		    scrollTop: 0
		}, 350);
		
	});

	$('#paso-4 button.btn-sig').on('click',function(ev){
		ev.preventDefault();

		var ok = confirm("¿Desea enviar la encuesta?");

		if (ok){
			$('#paso-4').fadeOut(2);
			$('#paso-5').fadeIn("slow");

			$('.encabezado-4').fadeOut(2);
			$('.encabezado-5').fadeIn("fast");
			$("html, body").animate({
			    scrollTop: 0
			}, 350);
		}
		
		
	});


	$('#btn-agg').on('click',function(ev){
		ev.preventDefault();

		var nombreSistema = $('#nombreSistema').val();
		console.log(nombreSistema);
		//var idActividad = $('#actividades option:selected').val();
		//nroSistema = nroSistema + 1;
		if (nroSistema==0){
			$('#sistemas-cargados').empty();
		}
		//if (idActividad==0){alert("Seleccione una actividad");return;}

		//if (actividadesSeleccionadas.indexOf(idActividad) == -1) 
		//{
		//	if (actividadesSeleccionadas_cantidad>=MAX_ACTIVIDADES_PERMITIDAS){alert("Máximo 5 actividades"); return;}
		//nombreSistema = "Sistema "+nroSistema;
		sistemasCargados.push(nombreSistema);

		templateVisible = '<label style="display: block;" class="sistema-cargado" id="sistema'+ nroSistema +'"> \
			'+ nombreSistema +' <a style="color:red;" href="#" class="quitarSistema">x \
					</a>';
		templateHidden = '<input type="hidden" name="actividades[]" value="'+ nroSistema +'" \
		 id=sistema"'+ nroSistema +'"/>';
		$("#sistemas-cargados").append(templateVisible);
		$("#hidden-sistemas-cargados").append(templateHidden);
		$(".quitarSistema").on("click", quitarSistema);

		nroSistema = nroSistema + 1;
	    ///////////////////////////////////////
	    //actividadesSeleccionadas_cantidad = actividadesSeleccionadas_cantidad + 1;
	    // console.log("++ " + actividadesSeleccionadas_cantidad);
	    ///////////////////////////////////////
		//} else {
		//	alert("Ya has seleccionado esa actividad");
		//}
	});

	mostrarOcultarInputs();

	
	/*
	$('.ta-control').click(function(e){
		//e.stopPropagation();
		e.preventDefault();
		//$('#children').click(function(e) {e.stopPropagation()});
		var ID = $(this).attr('id');
		textareaOtra(ID);
	});
	*/
}


function quitarSistema(ev){
	ev.preventDefault();
	ev.stopPropagation();
  	ev.stopImmediatePropagation();
	var quitarVisible = $(ev.currentTarget).parent();
	$(quitarVisible).remove();

	if ($("#sistemas-cargados").children().length == 0) {
		templateNinguno = "<small><p>Ninguno.</p></small>";
		$("#sistemas-cargados").append(templateNinguno);
		nroSistema=0;
	}
	/*
	var pos = sistemasCargados.indexOf($(quitarVisible).attr("id"));
	var quitarHidden = $(".hidden-sistemas-cargados");
    for (var i = 0; i <= quitarHidden.children().length - 1; i++) 
    {
    	if ($(quitarHidden.children()[i]).attr("id") == actividadesSeleccionadas[pos]) 
    	{
    		$(quitarHidden.children()[i]).remove();
    		break;
    	}
    }
    actividadesSeleccionadas.splice(pos, 1);
    ///////////////////////////////////////
    actividadesSeleccionadas_cantidad = actividadesSeleccionadas_cantidad - 1;
    //console.log("-- " + actividadesSeleccionadas_cantidad);
    ///////////////////////////////////////
	$(quitarVisible).remove();
	*/
}

function mostrarOcultarInputs(){
	$('#organismo_informante').change(function(){
		if($('#organismo_informante option:selected').text() == "Otro"){
			$('#organismo_informante_otro').css("display","block");
		} else {
			$('#organismo_informante_otro').css("display","none");
		}
	});

	$('#control_codigo').change(function(){
		if($('#control_codigo option:selected').text() == "Sí"){
			$('#1').css("display","block");
			$('#1 + div').css("display","block");
		} else {
			$('#1').css("display","none");
			$('#1 + div').css("display","none");
		}
	});

	$('#tipo_desarrollo').change(function(){
		if($('#tipo_desarrollo option:selected').text() == "Tercero"){
			$('#tipo_desarrollo_tercero').css("display","block");
		} else {
			$('#tipo_desarrollo_tercero').css("display","none");
		}
	});

	$('#lenguaje_programacion').change(function(){
		if($('#lenguaje_programacion option:selected').text() == "Otro"){
			$('#lenguaje_programacion_otro').css("display","block");
		} else {
			$('#lenguaje_programacion_otro').css("display","none");
		}
	});

	$('#motor_bd').change(function(){
		if($('#motor_bd option:selected').text() == "Otro"){
			$('#motor_bd_otro').css("display","block");
		} else {
			$('#motor_bd_otro').css("display","none");
		}
	});

	$('#nuevo_software').change(function(){
		if($('#nuevo_software option:selected').text() == "Sí"){
			$('#3').css("display","block");
			$('#3 + div').css("display","block");
		} else {
			$('#3').css("display","none");
			$('#3 + div').css("display","none");
		}
	});
}



function waitScreen(status){
	var screen = $('div.back-loading');
	if (status){
		$(screen).slideUp( 300 ).fadeIn( 400 );
		$('html,body').animate({
        	scrollTop: $(screen).offset().top+600
    	}, 'slow');
		
	} else {
		$(screen).slideDown( 300 ).fadeOut( 400 );
	}
}

function responseWS(status, msg){
	var img_load = $('#img-load');
	var img_exito = $('#img-successWS');
	var img_error = $('#img-errorWS');
	var mensaje = $('#responseWS');
	var mensajeEncabezado = $('#encabezado');
	$(img_load).css("display","none");
	$('#close-screen').show();
	if (status){
		$(mensajeEncabezado).css("display","block");
		$(mensajeEncabezado).append("<strong>Exito!</strong>");
		$(img_exito).slideUp( 300 ).fadeIn( 350 );
		$(mensaje).text("Gracias por realizar la encuesta, puede consultar el GEDO generado en GDEBA: ");
		$(mensaje).append("<br><strong>"+msg+"</strong>");
		$('.loading').css("height","250px");
		$('.loading').css("padding-top","2em");
	} else {
		$(mensajeEncabezado).css("display","block");
		$(mensajeEncabezado).append("<strong>Algo salió mal</strong>");
		$(mensaje).text("");
		$(mensaje).append("<strong>Ha ocurrido un error, por favor intente nuevamente.</strong>");
		$(img_error).slideUp( 300 ).fadeIn( 350 );
		$('.loading').css("height","230px");
		$('.loading').css("padding-top","2em");
	}
}




function guardarRespuestas(){
	/*
	var respuesta = $('textarea.respuesta');
	var cantRespuesta = respuesta.length;
	var arrayResp = [];
	var current, currentVal;
	for (var i = 0; i < cantRespuesta; i++) {
		current = $(respuesta)[i];
		currentVal = $(current).val();
		arrayResp.push(currentVal);
	}
	var dragdrop = guardarDragAndDrop();
	arrayResp.push(dragdrop);
	var respLibre = $('.respuesta-libre').val();
	arrayResp.push(respLibre);
	return arrayResp;
	*/
}


/*
function registrarEncuesta(calif,respue){

	$.ajax({
		type: "POST",
		url: "ajax/registrar_encuesta.php",
		data: { calificaciones: calif, respuestas: respue },
		success: function(resp){
			console.log(resp);
		},
		error: function(){
			console.log("ERROR");
		}
	});
}
*/


function contarCaracteres(resp,permi){
	//console.log($('.respuesta').val(resp));
	var respInputs = $('.respuesta');
	var respuestaSelect = respInputs[resp];
	var respuestaWrite = $(respuestaSelect).val();
	//console.log(respuestaWrite);
	var permitidos = permi;
	//var ingresadosSelect = respInputs[resp];//.val().length
	var caracteresIngresados = $(respuestaSelect).val().length;
	//console.log('ingresados: '+caracteresIngresados);
	if(caracteresIngresados > permitidos){
		var newR = bio.substr(0,permitidos);
		$('.respuesta').val(newR);
		var caracteresIngresados = $('.respuesta').val().length;
	}
	var log = "<p><small>"+caracteresIngresados + " / " + permitidos+"</small></p>";
	//var caracteresRespuesta = '.caracteres-'+resp;
	//console.log($('.caracteres')[resp]);
	var p_caracteres = $('.caracteres');
	var caracteresSelect = p_caracteres[resp];
	$(caracteresSelect).empty()[resp];
	$(caracteresSelect).append(log)[resp];
}

/*
function textareaOtra(inputID){
	var nroCheck = inputID;

	var i = "#"+nroCheck+" input";
	var checkbox = $(i);

	var idTA = nroCheck.split("otra-");
	var selectTA = '#divTA-'+idTA[1];

	var TAClean = '#divTA-'+idTA[1]+" textarea";
	$(TAClean).val("");

	if ( $(selectTA).css('display') != 'none' ){
		console.log("visible");
		$(selectTA).css("display","none");
		$(checkbox).prop("checked", false);
	} else {
		$(selectTA).css("display","block");
		console.log("invisible");
		$(checkbox).prop("checked", true);
	}
}
*/








