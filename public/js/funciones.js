//var URLactual = window.location;
//var municipios = URLactual.split('/');
url = window.location;
$( "#filmunicipio" ).change(function() {
  	id = this.value;
  	window.location.replace('/showbymunicipio/'+id);
});
// if(url!="http://uat.oo/"){


// 	$( document ).idleTimer( 5000 );
// 	$( document ).on( "idle.idleTimer", function(event, elem, obj){
// 		swal("¿Desea continuar con su sesión?", {
// 			timer: 3000,
// 	  		buttons: {
// 	    		catch: {
// 	      			text: "Continuar",
// 	      			value: "catch",
// 	    		},
// 	  			},
// 			})
// 			.then((value) => {
// 	  			switch (value) {
// 	    			case "catch":
// 	      				break;
// 	    			default:
// 	      			window.location.href='http://uat.oo/cerrar';
// 	  			}
// 			})
// 	});
// }
// else{
// 	$("#cerrarsesion").hide();
// }