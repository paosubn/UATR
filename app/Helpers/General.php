<?php
use App\Models\BitacoraSesiones;
use Carbon\Carbon;
/*La siguiente función recibe un usuario, contraseña y grupo al que pertenece en active directory por parámetros, autentifica y devuelve el status: 0 = usuario o contraseña inválidos, 1 = datos correctos pero no pertenece al grupo, 2 = autentificación correcta, 3 = sin autorización, no tiene información en el active*/
function login($usuario,$pass,$grupo) {
    $ip = "192.108.24.107";
	$dn = "OU=FGE,DC=fiscaliaveracruz,DC=gob,DC=mx";
	$dominio = '@fiscaliaveracruz.gob.mx';
	$mensaje = '';
	$conexion = ldap_connect($ip);
	ldap_set_option($conexion,LDAP_OPT_PROTOCOL_VERSION,3);
	ldap_set_option($conexion,LDAP_OPT_REFERRALS,0);
	if($bind = @ldap_bind($conexion, $usuario.$dominio, $pass)) {
		$filtro = "(sAMAccountName=".$usuario.")";
		$attr = array("memberof","extensionattribute1","extensionattribute2");
		$result = ldap_search($conexion, $dn, $filtro, $attr);
		$entries = ldap_get_entries($conexion, $result);
		ldap_unbind($conexion);
		if(isset($entries[0]['memberof'])&&isset($entries[0]['extensionattribute1'])&&isset($entries[0]['extensionattribute2'])){
			foreach($entries[0]['memberof'] as $grps) {		
				if(strpos($grps, 'CN='.$grupo)!==FALSE) {

					$sesion = BitacoraSesiones::where('usuario', $usuario)
			        ->where('deleted_at', null)
			        ->get();
			        
			        foreach ($sesion as $row) {
			        	cerrarsesion($row->idSesion);
			        	$bitacora1 = BitacoraSesiones::find($row->id);
			        	$bitacora1->deleted_at = Carbon::now()->toDateTimeString();
			        	$bitacora1->save();
			        }

			        session(['zona' => $entries[0]['extensionattribute1'][0]]);
					session(['unidad' => $entries[0]['extensionattribute2'][0]]); 
					session(['grupo' => $grupo]); 
					session(['usuario' => $usuario]);

					$bitacora = new BitacoraSesiones;
					$bitacora->zona = $entries[0]['extensionattribute1'][0];
					$bitacora->unidad = $entries[0]['extensionattribute2'][0];
					$bitacora->grupo = $grupo;
        			$bitacora->usuario = $usuario;
        			$bitacora->idSesion = session()->getId();
        			$bitacora->save();
        			session(['bisession' => $bitacora->id]);  
					$mensaje = 2;
					break;
				}
				else{
					$mensaje = 1;
				}
			}
		}
		else{
			$mensaje = 3;
		}
	} 
	else {
		$mensaje = 0;
	}
	return $mensaje;
}

function cerrarsesion($id){
	session()->getHandler()->destroy($id);
} 