<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use Carbon\Carbon;
use App\Models\Caso;
use App\Models\CatEscolaridad;
use App\Models\CatEstado;
use App\Models\CatEstadoCivil;
use App\Models\CatEtnia;
use App\Models\CatLengua;
use App\Models\CatNacionalidad;
use App\Models\CatOcupacion;
use App\Models\CatReligion;
use App\Models\Razon;

class DenuncianteController extends Controller
{
    public function crearCaso(){
        $caso = new Caso();
        $caso->numCaso = "UAT/D"."1"."/"."X"."/"."XX"."/".Carbon::now()->year;
        $caso->fechaInicio = Carbon::now();
        $caso->estadoCarpeta = "INICIO";
        $caso->horaIntervencion = Carbon::now();
        $caso->descripcionHechos = "pendiente";
        $caso->fechaDeterminacion = Carbon::now();
        $caso->save();
        $idCaso = $caso->id;
        //dd($idcaso);
        Alert::success('Caso iniciado con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('new.denunciante', $idCaso);
    }

    public function showForm($idCaso)
    {
        $casoNuevo = Caso::where('id', $idCaso)->get();
        $casoNuevo=$casoNuevo[0];
        if(count($casoNuevo)>0){ 
            //$denunciantes = CarpetaController::getDenunciantes($idCaso);
            $escolaridades = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $religiones = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('orientador.modulo-orientador')->with('idCaso', $idCaso)
                ->with('escolaridades', $escolaridades)
                ->with('estados', $estados)
                ->with('estadoscivil', $estadoscivil)
                ->with('etnias', $etnias)
                ->with('lenguas', $lenguas)
                ->with('nacionalidades', $nacionalidades)
                ->with('ocupaciones', $ocupaciones)
                ->with('religiones', $religiones);
        }else{
            return redirect()->route('home');
        }
        
        //return view('orientador.modulo-orientador')->with('estados',$estados)->with('razones',$razones);
    }

}
