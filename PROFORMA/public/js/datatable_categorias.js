$(document).ready(function() {

	var table = $('#tb_categorias').DataTable( {
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "/categorias",
        	"type": "GET"
		},
		"columns": [
			{ "data": "idCategoria" },
            { "data": "nombre" },
			{ "data": 'action', name: 'action', orderable: false, searchable: false}
		],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> registros',
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "<i class='fa fa-fast-backward' aria-hidden='true'></i>",
		        "sLast":     "<i class='fa fa-fast-forward' aria-hidden='true'></i>",
		        "sNext":     "<i class='fa fa-step-forward' aria-hidden='true'></i>",
		        "sPrevious": "<i class='fa fa-step-backward' aria-hidden='true'></i>"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});


    //---------------------guardar articulo---------------------------
    $("#btn_guardaArticulo").click(function(e){
    	e.preventDefault();

    	validarInput("#nuevoCodigo","Ingrese codigo por favor...");
    	validarInput("#marcas","Seleccione una marca por favor...");
    	validarInput("#nuevoNombre","Ingrese un nombre por favor...");
    	validarInput("#nuevoPrecioPromedio","Ingrese un precio promedio por favor...");

    	var formulario = $("#formNuevoArticulo");
    	var formData = new FormData($("#formNuevoArticulo")[0]);
    	var urlRoute = "/guardarArticulo";

    	$.ajax({
    		type: "POST",
    		url: urlRoute,
    		datatype: "JSON",
    		data: formData,
    		cache: false,
    		contentType: false,
    		processData: false,
    		success: function(result){
    			table.ajax.reload();
    			$("#btn_cerrarNuevoArticulo").click();
    			$("#formNuevoArticulo")[0].reset();
    		}
    	});
    });

    //--------------guardar editar articulo-------------------
    $("#btn_guardarEditArticulo").click(function(e){
    	e.preventDefault();

    	var token = $("#token").val();
    	var formulario = $("#formEditarArticulo");
    	var formData = new FormData($("#formEditarArticulo")[0]);
    	var urlRoute = "/guardarEditarArticulo?time="+ new Date (). getTime ();


    	$.ajax({
    		type: "POST",
    		url: urlRoute,
    		headers: {'X-CSRF-TOKEN':token},
    		datatype: "JSON",
    		data: formData,
    		cache: false,
    		contentType: false,
    		processData: false,
    		success: function(result){
    			table.ajax.reload();
    			$("#btn_cerrarEditarArticulo").click();
    			$("#formEditarArticulo")[0].reset();
    		}
    	});
    });

    //--------------------------------------------------------

    $("#btn_eliminarArticulo").click(function(e){
    	e.preventDefault();

	    var token = $("#token").val();
	    var idArticulo = $("#auxIdArticulo").val();
	    var urlRoute = "/eliminarArticulo";

	   $.ajax({
			type: "POST",
			url: urlRoute,
			headers: {'X-CSRF-TOKEN':token},
			data: {id:idArticulo},
			datatype: "JSON",
			success: function(result){
				table.ajax.reload();
				$("#btn_cerrarEliminarArticulo").click();	
			}
	    });
    });

	$("#modalNuevoArticulo").on('hidden.bs.modal', function (e) {
		e.preventDefault();
    	$("#formNuevoArticulo")[0].reset();
	});
	$("#modalEditarArticulo").on('hidden.bs.modal', function (e) {
		e.preventDefault();
    	$("#formEditarArticulo")[0].reset();
    	$("#editMarcas").html("");

	});

	//--------------------------------------------------------------
	$("#nuevoCodigo").change(function(){

		var codigo = $(this).val();
		var token = $("#token").val();
	    var urlRoute = "/validarCodigo";

	    $.ajax({
			type: "POST",
			url: urlRoute,
			headers: {'X-CSRF-TOKEN':token},
			data: {codigo:codigo},
			datatype: "JSON",
			success: function(result){
				if(!$.isEmptyObject(result)){
					$.notify("Codigo ya existe...", "warn");
					$("#nuevoCodigo").val("");
					$("#nuevoCodigo").focus();
				}	
			}
	    });
	});



	//----------------------------------------------------
	$("#nuevoCodigo").mask("00-000-00-000",{clearIfNotMatch: true, placeholder: "__-___-__-___"});
	$("#nuevoPrecioPromedio").mask('000.000.000.000.000.00', {reverse: true});



});

//-------------mostrar articulo----------------
function mostrarArticulo(elemento,e){
    e.preventDefault();

    var token = $("#token").val();
    var idArticulo = elemento.value;
    var urlRoute = "/mostrarArticulo";

   $.ajax({
		type: "POST",
		url: urlRoute,
		headers: {'X-CSRF-TOKEN':token},
		data: {id:idArticulo},
		datatype: "JSON",
		success: function(result){
			$("#artCodigo").val(result["articulo"][0]["codigo"]);
			$("#artMarca").val(result["articulo"][0]["nombreMarca"]);
			$("#artNombre").val(result["articulo"][0]["nombre"]);
			$("#artPrecioPromedio").val(result["articulo"][0]["precioPromedio"]);
			var imagen = (result["articulo"][0]["direccionImagen"]);
			$("#artImagen").attr("src","../imagenes/articulos/"+imagen);

		}
    });
}

function editarArticulo(elemento,e){
    e.preventDefault();

    var token = $("#token").val();
    var idArticulo = elemento.value;
    var urlRoute = "/editarArticulo";

   $.ajax({
		type: "POST",
		url: urlRoute,
		headers: {'X-CSRF-TOKEN':token},
		data: {id:idArticulo},
		cache: false,
		datatype: "JSON",
		success: function(result){
			$("#auxIdArticuloEditar").val(result["articulo"][0]["idArticulo"]);
			$("#editCodigo").val(result["articulo"][0]["codigo"]);
			$("#editNombre").val(result["articulo"][0]["nombre"]);
			$("#editPrecioPromedio").val(result["articulo"][0]["precioPromedio"]);
			var imagen = (result["articulo"][0]["direccionImagen"]);
			$("#artImagenGuardada").attr("src","../imagenes/articulos/"+imagen);

			var options = $('#editMarcas option').size(); 
			if(options < 1){
				$("#editMarcas").append('<option value="'+result["articulo"][0]["idMarca"]+'">'+result["articulo"][0]["nombreMarca"]+'</option>');
				var idMarca = result["articulo"][0]["idMarca"];

				$.each(result['marcas'], function(id,value){
	 				var idMarcaLista = value["idMarca"];
	 				if(idMarca != idMarcaLista){
	 					$("#editMarcas").append('<option value="'+value["idMarca"]+'">'+value["nombreMarca"]+'</option>');	
	 				}	
	     		});
			}
		}
    });
}

function eliminaArticulo(elemento,e){
	e.preventDefault();

	var idArticulo = elemento.value;
	$("#auxIdArticulo").val(idArticulo);
}


//------------------------------------------
$(document).on('ready', function() {
    $("#inputImagenArt").fileinput({
        browseClass: "btn btn-primary btn-block",
        showCaption: false,
        showRemove: false,
        showUpload: false,
        allowedFileExtensions: ["jpg", "png", "gif", "bmp"]
    });

    $("#editImagen").fileinput({
        browseClass: "btn btn-primary btn-block",
        showCaption: false,
        showRemove: false,
        showUpload: false,
        allowedFileExtensions: ["jpg", "png", "gif", "bmp"]
    });
});

//--------------------------------------------------------------------------
function validarInput(input,msj){
	if($(input).val().length <= 0){
    	$.notify(msj, "warn");
		$(input).focus();
		return false;
    }
}