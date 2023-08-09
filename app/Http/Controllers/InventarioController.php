<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inventarios = Inventario::all();
        return view('inventario', compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventario = new Inventario;
        $inventario->programa = $request->input('programa');
        $inventario->director_programa = $request->input('director');
        $inventario->telefono_director = $request->input('telefono');
        $inventario->correo = $request->input('correo');
        $inventario->nombre_encargado = $request->input('nombre_encargado');
        $inventario->telefono_encargado = $request->input('telefono_material');
        $inventario->sillas_cantidades = $request->input('sillas_cantidades');
        $inventario->sillas_prestar = $request->input('sillas_prestar');
        $inventario->sillas_reparar = $request->input('sillas_reparar');
        $inventario->mesas_oficina_cantidades = $request->input('mesas_oficina_cantidades');
        $inventario->mesas_oficina_prestar = $request->input('mesas_oficina_presta');
        $inventario->mesas_oficina_reparar = $request->input('mesas_oficina_reparar');
        $inventario->telas_decoracion_cantidades = $request->input('telas_decoracion_cantidades');
        $inventario->telas_decoracion_prestar = $request->input('telas_decoracion_prestar');
        $inventario->telas_decoracion_reparar = $request->input('telas_decoracion_reparar');
        $inventario->afiches_pendones_cantidades = $request->input('afiches_pendones_cantidades');
        $inventario->afiches_pendones_prestar = $request->input('afiches_pendones_prestar');
        $inventario->afiches_pendones_reparar = $request->input('afiches_pendones_reparar');
        $inventario->cuadros_cantidades = $request->input('cuadros_cantidades');
        $inventario->cuadros_prestar = $request->input('cuadros_prestar');
        $inventario->cuadros_reparar = $request->input('cuadros_reparar');
        $inventario->bandera_interior_cantidades = $request->input('bandera_interior_cantidades');
        $inventario->bandera_interior_prestar = $request->input('bandera_interior_prestar');
        $inventario->bandera_interior_reparar = $request->input('bandera_interior_reparar');
        $inventario->bandera_exterior_cantidades = $request->input('bandera_exterior_cantidades');
        $inventario->bandera_exterior_prestar = $request->input('bandera_exterior_prestar');
        $inventario->bandera_exterior_reparar = $request->input('bandera_exterior_reparar');
        $inventario->astas_bandera_cantidades = $request->input('astas_bandera_cantidades');
        $inventario->astas_bandera_prestar = $request->input('astas_bandera_prestar');
        $inventario->astas_bandera_reparar = $request->input('astas_bandera_reparar');
        $inventario->decoracion_cantidades = $request->input('decoracion_cantidades');
        $inventario->decoracion_prestar = $request->input('decoracion_prestar');
        $inventario->decoracion_reparar = $request->input('decoracion_reparar');
        $inventario->termos_agua_cantidades = $request->input('termos_agua_cantidades');
        $inventario->termos_agua_prestar = $request->input('termos_agua_prestar');
        $inventario->termos_agua_reparar = $request->input('termos_agua_reparar');
        $inventario->termos_cafe_cantidades = $request->input('termos_cafe_cantidades');
        $inventario->termos_cafe_prestar = $request->input('termos_cafe_prestar');
        $inventario->termos_cafe_reparar = $request->input('termos_cafe_reparar');
        $inventario->cafeteras_cantidades = $request->input('cafeteras_cantidades');
        $inventario->cafeteras_prestar = $request->input('cafeteras_prestar');
        $inventario->cafeteras_reparar = $request->input('cafeteras_reparar');
        $inventario->microondas_cantidades = $request->input('microondas_cantidades');
        $inventario->microondas_prestar = $request->input('microondas_prestar');
        $inventario->microondas_reparar = $request->input('microondas_reparar');
        $inventario->cocinas_cantidades = $request->input('cocinas_cantidades');
        $inventario->cocinas_prestar = $request->input('cocinas_prestar');
        $inventario->cocinas_reparar = $request->input('cocinas_reparar');
        $inventario->platos_sopa_cantidades = $request->input('platos_sopa_cantidades');
        $inventario->platos_sopa_prestar = $request->input('platos_sopa_prestar');
        $inventario->platos_sopa_reparar = $request->input('platos_sopa_reparar');
        $inventario->ollas_sopa_cantidades = $request->input('ollas_sopa_cantidades');
        $inventario->ollas_sopa_prestar = $request->input('ollas_sopa_prestar');
        $inventario->ollas_sopa_reparar = $request->input('ollas_sopa_reparar');
        $inventario->calderos_cantidades = $request->input('calderos_cantidades');
        $inventario->calderos_prestar = $request->input('calderos_prestar');
        $inventario->calderos_reparar = $request->input('calderos_reparar');
        $inventario->cucharillas_cantidades = $request->input('cucharillas_cantidades');
        $inventario->cucharillas_prestar = $request->input('cucharillas_prestar');
        $inventario->cucharillas_reparar = $request->input('cucharillas_reparar');
        $inventario->tenedores_cantidades = $request->input('tenedores_cantidades');
        $inventario->tenedores_prestar = $request->input('tenedores_prestar');
        $inventario->tenedores_reparar = $request->input('tenedores_reparar');
        $inventario->vasos_cantidades = $request->input('vasos_cantidades');
        $inventario->vasos_prestar = $request->input('vasos_prestar');
        $inventario->vasos_reparar = $request->input('vasos_reparar');
        $inventario->sonido_cantidades = $request->input('sonido_cantidades');
        $inventario->sonido_prestar = $request->input('sonido_prestar');
        $inventario->sonido_reparar = $request->input('sonido_reparar');
        $inventario->cornetas_cantidades = $request->input('cornetas_cantidades');
        $inventario->cornetas_prestar = $request->input('cornetas_prestar');
        $inventario->cornetas_reparar = $request->input('cornetas_reparar');
        $inventario->microfonos_cable_cantidades = $request->input('microfonos_cable_cantidades');
        $inventario->microfonos_cable_prestar = $request->input('microfonos_cable_prestar');
        $inventario->microfonos_cable_reparar = $request->input('microfonos_cable_reparar');
        $inventario->microfonos_inalambricos_cantidades = $request->input('microfonos_inalambricos_cantidades');
        $inventario->microfonos_inalambricos_prestar = $request->input('microfonos_inalambricos_prestar');
        $inventario->microfonos_inalambricos_reparar = $request->input('microfonos_inalambricos_reparar');
        $inventario->parales_microfonos_cantidades = $request->input('parales_microfonos_cantidades');
        $inventario->parales_microfonos_prestar = $request->input('parales_microfonos_prestar');
        $inventario->parales_microfonos_reparar = $request->input('parales_microfonos_reparar');
        $inventario->consola_audio_cantidades = $request->input('consola_audio_cantidades');
        $inventario->consola_audio_prestar = $request->input('consola_audio_prestar');
        $inventario->consola_audio_reparar = $request->input('consola_audio_reparar');
        $inventario->plantas_audio_cantidades = $request->input('plantas_audio_cantidades');
        $inventario->plantas_audio_prestar = $request->input('plantas_audio_prestar');
        $inventario->plantas_audio_reparar = $request->input('plantas_audio_reparar');
        $inventario->tv_plasma_cantidades = $request->input('tv_plasma_cantidades');
        $inventario->tv_plasma_prestar = $request->input('tv_plasma_prestar');
        $inventario->tv_plasma_reparar = $request->input('tv_plasma_reparar');
        $inventario->planta_electrica_cantidades = $request->input('planta_electrica_cantidades');
        $inventario->planta_electrica_prestar = $request->input('planta_electrica_prestar');
        $inventario->planta_electrica_reparar = $request->input('planta_electrica_reparar');
        $inventario->extenciones_electricas_cantidades = $request->input('extenciones_electricas_cantidades');
        $inventario->extenciones_electricas_prestar = $request->input('extenciones_electricas_prestar');
        $inventario->extenciones_electricas_reparar = $request->input('extenciones_electricas_reparar');
        $inventario->cables_microfonos_cantidades = $request->input('cables_microfonos_cantidades');
        $inventario->cables_microfonos_prestar = $request->input('cables_microfonos_prestar');
        $inventario->cables_microfonos_reparar = $request->input('cables_microfonos_reparar');
        $inventario->video_beam_cantidades = $request->input('video_beam_cantidades');
        $inventario->video_beam_prestar = $request->input('video_beam_prestar');
        $inventario->video_beam_reparar = $request->input('video_beam_reparar');
        $inventario->almohadillas_cantidades = $request->input('almohadillas_cantidades');
        $inventario->almohadillas_prestar = $request->input('almohadillas_prestar');
        $inventario->almohadillas_reparar = $request->input('almohadillas_reparar');
        $inventario->condecoraciones_fisicas_cantidades = $request->input('condecoraciones_fisicas_cantidades');
        $inventario->condecoraciones_fisicas_prestar = $request->input('condecoraciones_fisicas_prestar');
        $inventario->condecoraciones_fisicas_reparar = $request->input('condecoraciones_fisicas_reparar');
        $inventario->automovil_cantidades = $request->input('automovil_cantidades');
        $inventario->automovil_prestar = $request->input('automovil_prestar');
        $inventario->automovil_reparar = $request->input('automovil_reparar');
        $inventario->camara_fotografica_cantidades = $request->input('camara_fotografica_cantidades');
        $inventario->camara_fotografica_prestar = $request->input('camara_fotografica_prestar');
        $inventario->camara_fotografica_reparar = $request->input('camara_fotografica_reparar');
        $inventario->camara_grabacion_cantidades = $request->input('camara_grabacion_cantidades');
        $inventario->camara_grabacion_prestar = $request->input('camara_grabacion_prestar');
        $inventario->camara_grabacion_reparar = $request->input('camara_grabacion_reparar');
        $inventario->personal_publicas_cantidades = $request->input('personal_publicas_cantidades');
        $inventario->personal_publicas_prestar = $request->input('personal_publicas_prestar');
        $inventario->personal_publicas_reparar = $request->input('personal_publicas_reparar');
        $inventario->carpetas_firmas_cantidades = $request->input('carpetas_firmas_cantidades');
        $inventario->carpetas_firmas_prestar = $request->input('carpetas_firmas_prestar');
        $inventario->carpetas_firmas_reparar = $request->input('carpetas_firmas_reparar');
        $inventario->personal_idiomas_cantidades = $request->input('personal_idiomas_cantidades');
        $inventario->personal_idiomas_prestar = $request->input('personal_idiomas_prestar');
        $inventario->personal_idiomas_reparar = $request->input('personal_idiomas_reparar');
        $inventario->personal_idiomas_tipo = $request->input('personal_idiomas_tipo');
        $inventario->personal_sennas_cantidades = $request->input('personal_sennas_cantidades');
        $inventario->personal_sennas_prestar = $request->input('personal_sennas_prestar');
        $inventario->personal_sennas_reparar = $request->input('personal_sennas_reparar');
        $inventario->personal_culturales_cantidades = $request->input('personal_culturales_cantidades');
        $inventario->personal_culturales_prestar = $request->input('personal_culturales_prestar');
        $inventario->personal_culturales_reparar = $request->input('personal_culturales_reparar');
        $inventario->personal_carruchas_cantidades = $request->input('personal_carruchas_cantidades');
        $inventario->personal_carruchas_prestar = $request->input('personal_carruchas_prestar');
        $inventario->personal_carruchas_reparar = $request->input('personal_carruchas_reparar');
        $inventario->personal_manteleria_cantidades = $request->input('personal_manteleria_cantidades');
        $inventario->personal_manteleria_prestar = $request->input('personal_manteleria_prestar');
        $inventario->personal_manteleria_reparar = $request->input('personal_manteleria_reparar');

        # Me volvi fue loco jaja XD perdon el que lea esto solo hice este sistema rapidito sin relaciones

        $inventario->save();
        return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventario $inventario)
    {
        //
    }

    public function crearPDF()
    {
        $inventario = Inventario::all();
        view()->share('productos', $inventario);
        $pdf = PDF::loadView('index', $inventario);
        return $pdf->download('archivo-pdf.pdf');
    }
}
