<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div>
        <img src="https://repositorio.unellez.edu.ve/terepaima/portal/portal_imagen_contenido/1688394990_89f876cdc3.png"
            alt="Logo UNELLEZ" style="height: 70px; width: 70px;">
    </div>
    <p class="font-weight-bold mb-0 mt-2">UNELLEZ - BARINAS</p>
    <p class="font-weight-bold mb-0">Inventario</p>
    <p class="font-weight-bold mb-0">Dirección: <span class="font-weight-normal">{{ $inventario->programa }}</span></p>
    <p class="font-weight-bold mb-0">Director: <span
            class="font-weight-normal">{{ $inventario->director_programa }}</span></p>
    <p class="font-weight-bold mb-0">Teléfono: <span
            class="font-weight-normal">{{ $inventario->telefono_director }}</span></p>
    <p class="font-weight-bold mb-0">Correo Electrónico: <span
            class="font-weight-normal">{{ $inventario->correo }}</span></p>
    <p class="font-weight-bold mb-0">Persona Encargada del Material del Inventario: <span
            class="font-weight-normal">{{ $inventario->nombre_encargado }}</span></p>
    <p class="font-weight-bold mb-0">Teléfono: <span
            class="font-weight-normal">{{ $inventario->telefono_encargado }}</span></p>

    <div class="mt-4 px-2">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Requerimientos</th>
                    <th scope="col">Cantidades</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Inactivo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Sillas de oficina</th>
                    <td class="text-center">{{ $inventario->sillas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->sillas_prestar }}</td>
                    <td class="text-center">{{ $inventario->sillas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Mesas</th>
                    <td class="text-center">{{ $inventario->mesas_oficina_cantidades }}</td>
                    <td class="text-center">{{ $inventario->mesas_oficina_prestar }}</td>
                    <td class="text-center">{{ $inventario->mesas_oficina_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Telas para Decoración</th>
                    <td class="text-center">{{ $inventario->telas_decoracion_cantidades }}</td>
                    <td class="text-center">{{ $inventario->telas_decoracion_prestar }}</td>
                    <td class="text-center">{{ $inventario->telas_decoracion_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Estandartes</th>
                    <td class="text-center">{{ $inventario->afiches_pendones_cantidades }}</td>
                    <td class="text-center">{{ $inventario->afiches_pendones_prestar }}</td>
                    <td class="text-center">{{ $inventario->afiches_pendones_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cuadros o Artes Plásticas</th>
                    <td class="text-center">{{ $inventario->cuadros_cantidades }}</td>
                    <td class="text-center">{{ $inventario->cuadros_prestar }}</td>
                    <td class="text-center">{{ $inventario->cuadros_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Banderas de Interiores</th>
                    <td class="text-center">{{ $inventario->bandera_interior_cantidades }}</td>
                    <td class="text-center">{{ $inventario->bandera_interior_prestar }}</td>
                    <td class="text-center">{{ $inventario->bandera_interior_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Banderas de Exteriores</th>
                    <td class="text-center">{{ $inventario->bandera_exterior_cantidades }}</td>
                    <td class="text-center">{{ $inventario->bandera_exterior_prestar }}</td>
                    <td class="text-center">{{ $inventario->bandera_exterior_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Astas para Banderas</th>
                    <td class="text-center">{{ $inventario->astas_bandera_cantidades }}</td>
                    <td class="text-center">{{ $inventario->astas_bandera_prestar }}</td>
                    <td class="text-center">{{ $inventario->astas_bandera_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Decoraciones Florales o de Ornato</th>
                    <td class="text-center">{{ $inventario->decoracion_cantidades }}</td>
                    <td class="text-center">{{ $inventario->decoracion_prestar }}</td>
                    <td class="text-center">{{ $inventario->decoracion_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Termos de Agua</th>
                    <td class="text-center">{{ $inventario->termos_agua_cantidades }}</td>
                    <td class="text-center">{{ $inventario->termos_agua_prestar }}</td>
                    <td class="text-center">{{ $inventario->termos_agua_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Termos de Café</th>
                    <td class="text-center">{{ $inventario->termos_cafe_cantidades }}</td>
                    <td class="text-center">{{ $inventario->termos_cafe_prestar }}</td>
                    <td class="text-center">{{ $inventario->termos_cafe_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cafeteras</th>
                    <td class="text-center">{{ $inventario->cafeteras_cantidades }}</td>
                    <td class="text-center">{{ $inventario->cafeteras_prestar }}</td>
                    <td class="text-center">{{ $inventario->cafeteras_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Microondas</th>
                    <td class="text-center">{{ $inventario->microondas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->microondas_prestar }}</td>
                    <td class="text-center">{{ $inventario->microondas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cocinas</th>
                    <td class="text-center">{{ $inventario->cocinas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->cocinas_prestar }}</td>
                    <td class="text-center">{{ $inventario->cocinas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Platos Para Sopa</th>
                    <td class="text-center">{{ $inventario->platos_sopa_cantidades }}</td>
                    <td class="text-center">{{ $inventario->platos_sopa_prestar }}</td>
                    <td class="text-center">{{ $inventario->platos_sopa_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Ollas Para Sopa</th>
                    <td class="text-center">{{ $inventario->ollas_sopa_cantidades }}</td>
                    <td class="text-center">{{ $inventario->ollas_sopa_prestar }}</td>
                    <td class="text-center">{{ $inventario->ollas_sopa_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Calderos</th>
                    <td class="text-center">{{ $inventario->calderos_cantidades }}</td>
                    <td class="text-center">{{ $inventario->calderos_prestar }}</td>
                    <td class="text-center">{{ $inventario->calderos_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cucharillas</th>
                    <td class="text-center">{{ $inventario->cucharillas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->cucharillas_prestar }}</td>
                    <td class="text-center">{{ $inventario->cucharillas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Tenedores</th>
                    <td class="text-center">{{ $inventario->tenedores_cantidades }}</td>
                    <td class="text-center">{{ $inventario->tenedores_prestar }}</td>
                    <td class="text-center">{{ $inventario->tenedores_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Vasos</th>
                    <td class="text-center">{{ $inventario->vasos_cantidades }}</td>
                    <td class="text-center">{{ $inventario->vasos_prestar }}</td>
                    <td class="text-center">{{ $inventario->vasos_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Sonido</th>
                    <td class="text-center">{{ $inventario->sonido_cantidades }}</td>
                    <td class="text-center">{{ $inventario->sonido_prestar }}</td>
                    <td class="text-center">{{ $inventario->sonido_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cornetas</th>
                    <td class="text-center">{{ $inventario->cornetas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->cornetas_prestar }}</td>
                    <td class="text-center">{{ $inventario->cornetas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Micrófonos con Cable</th>
                    <td class="text-center">{{ $inventario->microfonos_cable_cantidades }}</td>
                    <td class="text-center">{{ $inventario->microfonos_cable_prestar }}</td>
                    <td class="text-center">{{ $inventario->microfonos_cable_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Micrófonos Inalámbricos</th>
                    <td class="text-center">{{ $inventario->microfonos_inalambricos_cantidades }}</td>
                    <td class="text-center">{{ $inventario->microfonos_inalambricos_prestar }}</td>
                    <td class="text-center">{{ $inventario->microfonos_inalambricos_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Parales de pie de micrófono</th>
                    <td class="text-center">{{ $inventario->parales_microfonos_cantidades }}</td>
                    <td class="text-center">{{ $inventario->parales_microfonos_prestar }}</td>
                    <td class="text-center">{{ $inventario->parales_microfonos_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Consola de Audio</th>
                    <td class="text-center">{{ $inventario->consola_audio_cantidades }}</td>
                    <td class="text-center">{{ $inventario->consola_audio_prestar }}</td>
                    <td class="text-center">{{ $inventario->consola_audio_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Plantas de Audio</th>
                    <td class="text-center">{{ $inventario->plantas_audio_cantidades }}</td>
                    <td class="text-center">{{ $inventario->plantas_audio_prestar }}</td>
                    <td class="text-center">{{ $inventario->plantas_audio_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">TV Plasmas</th>
                    <td class="text-center">{{ $inventario->tv_plasma_cantidades }}</td>
                    <td class="text-center">{{ $inventario->tv_plasma_prestar }}</td>
                    <td class="text-center">{{ $inventario->tv_plasma_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Planta Eléctrica</th>
                    <td class="text-center">{{ $inventario->planta_electrica_cantidades }}</td>
                    <td class="text-center">{{ $inventario->planta_electrica_prestar }}</td>
                    <td class="text-center">{{ $inventario->planta_electrica_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Extensiones Eléctricas</th>
                    <td class="text-center">{{ $inventario->extenciones_electricas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->extenciones_electricas_prestar }}</td>
                    <td class="text-center">{{ $inventario->extenciones_electricas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cables de Micrófono</th>
                    <td class="text-center">{{ $inventario->cables_microfonos_cantidades }}</td>
                    <td class="text-center">{{ $inventario->cables_microfonos_prestar }}</td>
                    <td class="text-center">{{ $inventario->cables_microfonos_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Video Beam</th>
                    <td class="text-center">{{ $inventario->video_beam_cantidades }}</td>
                    <td class="text-center">{{ $inventario->video_beam_prestar }}</td>
                    <td class="text-center">{{ $inventario->video_beam_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Almohadillas para Condecoraciones</th>
                    <td class="text-center">{{ $inventario->almohadillas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->almohadillas_prestar }}</td>
                    <td class="text-center">{{ $inventario->almohadillas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Condecoraciones en físico; Botones, Estatuillas</th>
                    <td class="text-center">{{ $inventario->condecoraciones_fisicas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->condecoraciones_fisicas_prestar }}</td>
                    <td class="text-center">{{ $inventario->condecoraciones_fisicas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Automóviles; Carro, Camioneta, Camión</th>
                    <td class="text-center">{{ $inventario->automovil_cantidades }}</td>
                    <td class="text-center">{{ $inventario->automovil_prestar }}</td>
                    <td class="text-center">{{ $inventario->automovil_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cámara Fotográfica</th>
                    <td class="text-center">{{ $inventario->camara_fotografica_cantidades }}</td>
                    <td class="text-center">{{ $inventario->camara_fotografica_prestar }}</td>
                    <td class="text-center">{{ $inventario->camara_fotografica_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Cámara de Grabación</th>
                    <td class="text-center">{{ $inventario->camara_grabacion_cantidades }}</td>
                    <td class="text-center">{{ $inventario->camara_grabacion_prestar }}</td>
                    <td class="text-center">{{ $inventario->camara_grabacion_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Personal de Relaciones Publicas</th>
                    <td class="text-center">{{ $inventario->personal_publicas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->personal_publicas_prestar }}</td>
                    <td class="text-center">{{ $inventario->personal_publicas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Carpetas Membretadas</th>
                    <td class="text-center">{{ $inventario->carpetas_firmas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->carpetas_firmas_prestar }}</td>
                    <td class="text-center">{{ $inventario->carpetas_firmas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Personal que Hable otro Idioma: {{$inventario->personal_idiomas_tipo}}</th>
                    <td class="text-center">{{ $inventario->personal_idiomas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->personal_idiomas_prestar }}</td>
                    <td class="text-center">{{ $inventario->personal_idiomas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Personal que Maneje Lenguaje de Señas</th>
                    <td class="text-center">{{ $inventario->personal_sennas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->personal_sennas_prestar }}</td>
                    <td class="text-center">{{ $inventario->personal_sennas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Carruchas</th>
                    <td class="text-center">{{ $inventario->personal_carruchas_cantidades }}</td>
                    <td class="text-center">{{ $inventario->personal_carruchas_prestar }}</td>
                    <td class="text-center">{{ $inventario->personal_carruchas_reparar }}</td>
                </tr>
                <tr>
                    <th scope="row">Manteleria</th>
                    <td class="text-center">{{ $inventario->personal_manteleria_cantidades }}</td>
                    <td class="text-center">{{ $inventario->personal_manteleria_prestar }}</td>
                    <td class="text-center">{{ $inventario->personal_manteleria_reparar }}</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
