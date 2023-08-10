<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { reactive } from "vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

const form = reactive({
    direccion: "",
    director: "",
    telefonoDirector: "",
    correoDirector: "",
    nombreEncargado: "",
    telefonoEncargado: "",
    silla_oficina_cantidad: "",
    silla_oficina_activo: "",
    silla_oficina_inactivo: "",
    mesas_cantidad: "",
    mesas_activo: "",
    mesas_inactivo: "",
    telas_cantidad: "",
    telas_activo: "",
    telas_inactivo: "",
    estandartes_cantidad: "",
    estandartes_activo: "",
    estandartes_inactivo: "",
    cuadros_cantidad: "",
    cuadros_activo: "",
    cuadros_inactivo: "",
    banderas_interior_cantidad: "",
    banderas_interior_activo: "",
    banderas_interior_inactivo: "",
    banderas_exterior_cantidad: "",
    banderas_exterior_activo: "",
    banderas_exterior_inactivo: "",
    astas_bandera_cantidad: "",
    astas_bandera_activo: "",
    astas_bandera_inactivo: "",
    decoracion_cantidad: "",
    decoracion_activo: "",
    decoracion_inactivo: "",
    termos_agua_cantidad: "",
    termos_agua_activo: "",
    termos_agua_inactivo: "",
    termos_cafe_cantidad: "",
    termos_cafe_activo: "",
    termos_cafe_inactivo: "",
    cocina_cantidad: "",
    cocina_activo: "",
    cocina_inactivo: "",
    cafeteras_cantidad: "",
    cafeteras_activo: "",
    cafeteras_inactivo: "",
    microondas_cantidad: "",
    microondas_activo: "",
    microondas_inactivo: "",
    platos_sopa_cantidad: "",
    platos_sopa_activo: "",
    platos_sopa_inactivo: "",
    ollas_sopa_cantidad: "",
    ollas_sopa_activo: "",
    ollas_sopa_inactivo: "",
    calderos_cantidad: "",
    calderos_activo: "",
    calderos_inactivo: "",
    cucharas_cantidad: "",
    cucharas_activo: "",
    cucharas_inactivo: "",
    tenedores_cantidad: "",
    tenedores_activo: "",
    tenedores_inactivo: "",
    vasos_cantidad: "",
    vasos_activo: "",
    vasos_inactivo: "",
    sonido_cantidad: "",
    sonido_activo: "",
    sonido_inactivo: "",
    cornetas_cantidad: "",
    cornetas_activo: "",
    cornetas_inactivo: "",
    microfono_cable_cantidad: "",
    microfono_cable_activo: "",
    microfono_cable_inactivo: "",
    microfono_inalambrico_cantidad: "",
    microfono_inalambrico_activo: "",
    microfono_inalambrico_inactivo: "",
    parales_microfono_cantidad: "",
    parales_microfono_activo: "",
    parales_microfono_inactivo: "",
    consola_audio_cantidad: "",
    consola_audio_activo: "",
    consola_audio_inactivo: "",
    plantas_audio_cantidad: "",
    plantas_audio_activo: "",
    plantas_audio_inactivo: "",
    tv_plasma_cantidad: "",
    tv_plasma_activo: "",
    tv_plasma_inactivo: "",
    planta_electrica_cantidad: "",
    planta_electrica_activo: "",
    planta_electrica_inactivo: "",
    extenciones_electricas_cantidad: "",
    extenciones_electricas_activo: "",
    extenciones_electricas_inactivo: "",
    cables_microfono_cantidad: "",
    cables_microfono_activo: "",
    cables_microfono_inactivo: "",
    video_beam_cantidad: "",
    video_beam_activo: "",
    video_beam_inactivo: "",
    almoadillas_cantidad: "",
    almoadillas_activo: "",
    almoadillas_inactivo: "",
    condecoraciones_cantidad: "",
    condecoraciones_activo: "",
    condecoraciones_inactivo: "",
    automoviles_cantidad: "",
    automoviles_activo: "",
    automoviles_inactivo: "",
    camara_fotografica_cantidad: "",
    camara_fotografica_activo: "",
    camara_fotografica_inactivo: "",
    camara_grabacion_cantidad: "",
    camara_grabacion_activo: "",
    camara_grabacion_inactivo: "",
    persoral_relaciones_publicas_cantidad: "",
    persoral_relaciones_publicas_activo: "",
    persoral_relaciones_publicas_inactivo: "",
    carpetas_membretadas_cantidad: "",
    carpetas_membretadas_activo: "",
    carpetas_membretadas_inactivo: "",
    personal_idioma_cantidad: "",
    personal_idioma_activo: "",
    personal_idioma_inactivo: "",
    personal_idioma_tipo: "",
    personal_sennas_cantidad: "",
    personal_sennas_activo: "",
    personal_sennas_inactivo: "",
    carruchas_cantidad: "",
    carruchas_activo: "",
    carruchas_inactivo: "",
    manteleria_cantidad: "",
    manteleria_activo: "",
    manteleria_inactivo: "",
});

const enviarEncuesta = () => {
    router.post("/formulario", form)
    form.value.direccion = "",
        form.value.director = "",
        form.value.telefonoDirector = "",
        form.value.correoDirector = "",
        form.value.nombreEncargado = "",
        form.value.telefonoEncargado = "",
        form.value.silla_oficina_cantidad = "",
        form.value.silla_oficina_activo = "",
        form.value.silla_oficina_inactivo = "",
        form.value.mesas_cantidad = "",
        form.value.mesas_activo = "",
        form.value.mesas_inactivo = "",
        form.value.telas_cantidad = "",
        form.value.telas_activo = "",
        form.value.telas_inactivo = "",
        form.value.estandartes_cantidad = "",
        form.value.estandartes_activo = "",
        form.value.estandartes_inactivo = "",
        form.value.cuadros_cantidad = "",
        form.value.cuadros_activo = "",
        form.value.cuadros_inactivo = "",
        form.value.banderas_interior_cantidad = "",
        form.value.banderas_interior_activo = "",
        form.value.banderas_interior_inactivo = "",
        form.value.banderas_exterior_cantidad = "",
        form.value.banderas_exterior_activo = "",
        form.value.banderas_exterior_inactivo = "",
        form.value.astas_bandera_cantidad = "",
        form.value.astas_bandera_activo = "",
        form.value.astas_bandera_inactivo = "",
        form.value.decoracion_cantidad = "",
        form.value.decoracion_activo = "",
        form.value.decoracion_inactivo = "",
        form.value.termos_agua_cantidad = "",
        form.value.termos_agua_activo = "",
        form.value.termos_agua_inactivo = "",
        form.value.termos_cafe_cantidad = "",
        form.value.termos_cafe_activo = "",
        form.value.termos_cafe_inactivo = "",
        form.value.cocina_cantidad = "",
        form.value.cocina_activo = "",
        form.value.cocina_inactivo = "",
        form.value.cafeteras_cantidad = "",
        form.value.cafeteras_activo = "",
        form.value.cafeteras_inactivo = "",
        form.value.microondas_cantidad = "",
        form.value.microondas_activo = "",
        form.value.microondas_inactivo = "",
        form.value.platos_sopa_cantidad = "",
        form.value.platos_sopa_activo = "",
        form.value.platos_sopa_inactivo = "",
        form.value.ollas_sopa_cantidad = "",
        form.value.ollas_sopa_activo = "",
        form.value.ollas_sopa_inactivo = "",
        form.value.calderos_cantidad = "",
        form.value.calderos_activo = "",
        form.value.calderos_inactivo = "",
        form.value.cucharas_cantidad = "",
        form.value.cucharas_activo = "",
        form.value.cucharas_inactivo = "",
        form.value.tenedores_cantidad = "",
        form.value.tenedores_activo = "",
        form.value.tenedores_inactivo = "",
        form.value.vasos_cantidad = "",
        form.value.vasos_activo = "",
        form.value.vasos_inactivo = "",
        form.value.sonido_cantidad = "",
        form.value.sonido_activo = "",
        form.value.sonido_inactivo = "",
        form.value.cornetas_cantidad = "",
        form.value.cornetas_activo = "",
        form.value.cornetas_inactivo = "",
        form.value.microfono_cable_cantidad = "",
        form.value.microfono_cable_activo = "",
        form.value.microfono_cable_inactivo = "",
        form.value.microfono_inalambrico_cantidad = "",
        form.value.microfono_inalambrico_activo = "",
        form.value.microfono_inalambrico_inactivo = "",
        form.value.parales_microfono_cantidad = "",
        form.value.parales_microfono_activo = "",
        form.value.parales_microfono_inactivo = "",
        form.value.consola_audio_cantidad = "",
        form.value.consola_audio_activo = "",
        form.value.consola_audio_inactivo = "",
        form.value.plantas_audio_cantidad = "",
        form.value.plantas_audio_activo = "",
        form.value.plantas_audio_inactivo = "",
        form.value.tv_plasma_cantidad = "",
        form.value.tv_plasma_activo = "",
        form.value.tv_plasma_inactivo = "",
        form.value.planta_electrica_cantidad = "",
        form.value.planta_electrica_activo = "",
        form.value.planta_electrica_inactivo = "",
        form.value.extenciones_electricas_cantidad = "",
        form.value.extenciones_electricas_activo = "",
        form.value.extenciones_electricas_inactivo = "",
        form.value.cables_microfono_cantidad = "",
        form.value.cables_microfono_activo = "",
        form.value.cables_microfono_inactivo = "",
        form.value.video_beam_cantidad = "",
        form.value.video_beam_activo = "",
        form.value.video_beam_inactivo = "",
        form.value.almoadillas_cantidad = "",
        form.value.almoadillas_activo = "",
        form.value.almoadillas_inactivo = "",
        form.value.condecoraciones_cantidad = "",
        form.value.condecoraciones_activo = "",
        form.value.condecoraciones_inactivo = "",
        form.value.automoviles_cantidad = "",
        form.value.automoviles_activo = "",
        form.value.automoviles_inactivo = "",
        form.value.camara_fotografica_cantidad = "",
        form.value.camara_fotografica_activo = "",
        form.value.camara_fotografica_inactivo = "",
        form.value.camara_grabacion_cantidad = "",
        form.value.camara_grabacion_activo = "",
        form.value.camara_grabacion_inactivo = "",
        form.value.persoral_relaciones_publicas_cantidad = "",
        form.value.persoral_relaciones_publicas_activo = "",
        form.value.persoral_relaciones_publicas_inactivo = "",
        form.value.carpetas_membretadas_cantidad = "",
        form.value.carpetas_membretadas_activo = "",
        form.value.carpetas_membretadas_inactivo = "",
        form.value.personal_idioma_cantidad = "",
        form.value.personal_idioma_activo = "",
        form.value.personal_idioma_inactivo = "",
        form.value.personal_idioma_tipo = "",
        form.value.personal_sennas_cantidad = "",
        form.value.personal_sennas_activo = "",
        form.value.personal_sennas_inactivo = "",
        form.value.carruchas_cantidad = "",
        form.value.carruchas_activo = "",
        form.value.carruchas_inactivo = "",
        form.value.manteleria_cantidad = "",
        form.value.manteleria_activo = "",
        form.value.manteleria_inactivo = ""
    }


</script>

<template>
    <Head title="Inventario" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg id="Logo_Unellez_Original" data-name="Logo Unellez Original" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 2048 2048" style="height: 100px; width: 100px">
                    <path class="cls-1"
                        d="m1028.07,52.64l1.16,463.65s-3.8,64.54,60.36,64.54c73.98,0,189.42-.16,189.42-.16v54.82l-301.27.48s-104.77,9.24-104.77-120.08.19-384.13.19-384.13l154.91-79.12Z" />
                    <path class="cls-1"
                        d="m823.26,158.12l.14,463.64s-3.17,68.25,67.25,68.25h590.35v50.67l-699.62.58s-105.53,7.04-105.53-122.52c0-105.18-.05-384.92-.05-384.92l147.46-75.7Z" />
                    <path class="cls-1"
                        d="m622.41,260.13l-.12,475.45s-2.35,57.37,78.44,57.37,978.27.3,978.27.3v53.25l-1098.19.16s-114.47,3.73-114.47-131.09c0-70.28.43-375.4.43-375.4l155.64-80.03Z" />
                    <path class="cls-1"
                        d="m424.11,362.2l.4,450.83s1.13,76.21,99.88,76.17c83.65-.03,1360.19-.64,1360.19-.64l.12,62.03-1505.1.12s-120.24-5.74-120.56-156.57c-.24-112.83.08-347.8.08-347.8l164.99-84.14Z" />
                    <path class="cls-1"
                        d="m208.11,467.13l-.12,469.23s-.83,54.14,83.52,54.18c92.52.04,1572.34-.64,1572.34-.64,0,0,135.15,11.47,135.15,132.91v363.02l-146.55,75.85-.1-451.3s.91-59.92-61.43-59.92c-45.31,0-1610.23.4-1610.23.4,0,0-128.69.72-128.69-94.9v-408.76l156.11-80.08Z" />
                    <path class="cls-1"
                        d="m1626.64,1686.63l-.46-475.26s4.96-51.37-60.63-51.37H164.14v-60s1515.12,0,1515.12,0c0,0,112.74,3.69,112.74,140.35v359.59l-165.36,86.69Z" />
                    <path class="cls-1"
                        d="m1029.72,1998.01l-.97-460.01s6.7-69.01-67.44-69.01h-183.13l-.32-56.6,273.81.38s132.34-1.69,132.34,126.81v377.61l-154.28,80.81Z" />
                    <path class="cls-1"
                        d="m1219.21,1899.21v-486.36s1.11-53.86-51.43-53.8c-48.95.06-596.89-.06-596.89-.06l.02-43.98h707.15s.09,0,.14,0c2.94.24,96.88,8.62,96.88,110.27v390.75l-155.88,83.19Z" />
                    <path class="cls-1"
                        d="m1428.33,1789.95v-467.77s2.22-57.05-78.58-57.05-978.4-.3-978.4-.3v-52.83l1104.74-.2s108.12,2.47,108.12,122.31c0,69.88,0,374.23,0,374.23l-155.89,81.59Z" />
                </svg>
            </div>

            <div class="mt-16">
                <div>
                    <div
                        class="py-6 px-10 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex">
                        <div>
                            <h2 class="my-6 text-4xl text-center font-semibold uppercase text-gray-900">
                                Registrar De Insumo Para Protocolo:
                            </h2>

                            <div class="my-4">
                                <div>
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="programa"
                                                class="block text-md font-medium leading-6 text-gray-900">Direccion o
                                                Programa</label>
                                            <div class="mt-2">
                                                <input required type="text" v-model="form.direccion" id="programa"
                                                    placeholder="Nombre de la direccion o programa"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="director"
                                                class="block text-md font-medium leading-6 text-gray-900">Director</label>
                                            <div class="mt-2">
                                                <input required type="text" v-model="form.director" id="director"
                                                    placeholder="Nombre del director del director"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="telefono"
                                                class="block text-md font-medium leading-6 text-gray-900">Telefono</label>
                                            <div class="mt-2">
                                                <input required type="text" v-model="form.telefonoDirector" id="telefono"
                                                    placeholder="Telefono del director del telefono"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="correo"
                                                class="block text-md font-medium leading-6 text-gray-900">Correo
                                                Electronico</label>
                                            <div class="mt-2">
                                                <input required type="text" v-model="form.correoDirector" id="correo"
                                                    placeholder="correo del director o del correo"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 mt-4">
                                            <label for="nombre_encargado"
                                                class="block text-md font-medium leading-6 text-gray-900">Nombre Del
                                                Encargado:</label>
                                            <div class="mt-2">
                                                <input required type="text" v-model="form.nombreEncargado"
                                                    id="nombre_encargado"
                                                    placeholder="Nombre del encargado de registrar el material"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 mt-4">
                                            <label for="telefono_material"
                                                class="block text-md font-medium leading-6 text-gray-900">Telefono Del
                                                Encargado Del Material</label>
                                            <div class="mt-2">
                                                <input required type="text" v-model="form.telefonoEncargado"
                                                    id="telefono_material"
                                                    placeholder="Telefono del encargado de registrar el material"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                            </div>
                                        </div>
                                        <div class="col-span-full">
                                            <fieldset>
                                                <legend class="text-xl leading-6 text-gray-900 mb-4">
                                                    Inventario
                                                </legend>

                                                <!-- Sillas -->
                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Sillas de
                                                        Oficina:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.silla_oficina_cantidad"
                                                            id="sillas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.silla_oficina_activo"
                                                            id="sillas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.silla_oficina_inactivo"
                                                            id="sillas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Mesas de oficina -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Mesas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.mesas_cantidad"
                                                            id="mesas_oficina_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.mesas_activo"
                                                            id="mesas_oficina_presta" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.mesas_inactivo"
                                                            id="mesas_oficina_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Telas para decoracion -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Telas para
                                                        Decoración:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.telas_cantidad"
                                                            id="telas_decoracion_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.telas_activo"
                                                            id="telas_decoracion_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.telas_inactivo"
                                                            id="telas_decoracion_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Afiches o Pendones de la UNELLEZ -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Estandartes:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.estandartes_cantidad"
                                                            id="afiches_pendones_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.estandartes_activo"
                                                            id="afiches_pendones_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.estandartes_inactivo"
                                                            id="afiches_pendones_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cuadros o Artes Plásticas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cuadros o
                                                        Artes Plásticas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cuadros_cantidad"
                                                            id="cuadros_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cuadros_activo"
                                                            id="cuadros_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cuadros_inactivo"
                                                            id="cuadros_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Banderas de Interiores -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Banderas
                                                        de Interiores:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.banderas_interior_cantidad"
                                                            id="bandera_interior_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.banderas_interior_activo"
                                                            id="bandera_interior_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.banderas_interior_inactivo"
                                                            id="bandera_interior_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Banderas de Exteriores -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Banderas
                                                        de Exteriores:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.banderas_exterior_cantidad"
                                                            id="bandera_exterior_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.banderas_exterior_activo"
                                                            id="bandera_exterior_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.banderas_exterior_inactivo"
                                                            id="bandera_exterior_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Astas para Banderas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Astas para
                                                        Banderas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.astas_bandera_cantidad"
                                                            id="astas_bandera_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.astas_bandera_activo"
                                                            id="astas_bandera_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.astas_bandera_inactivo"
                                                            id="astas_bandera_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Decoraciones Florales o de Ornato -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Decoraciones
                                                        Florales o de Ornato:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.decoracion_cantidad"
                                                            id="decoracion_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.decoracion_activo"
                                                            id="decoracion_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.decoracion_inactivo"
                                                            id="decoracion_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Termos de Agua -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Termos de
                                                        Agua:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.termos_agua_cantidad"
                                                            id="termos_agua_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.termos_agua_activo"
                                                            id="termos_agua_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.termos_agua_inactivo"
                                                            id="termos_agua_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Termos de Café -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Termos de
                                                        Café:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.termos_cafe_cantidad"
                                                            id="termos_cafe_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.termos_cafe_activo"
                                                            id="termos_cafe_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.termos_cafe_inactivo"
                                                            id="termos_cafe_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cafeteras -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cafeteras:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cafeteras_cantidad"
                                                            id="cafeteras_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cafeteras_activo"
                                                            id="cafeteras_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cafeteras_inactivo"
                                                            id="cafeteras_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Microondas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Microondas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.microondas_cantidad"
                                                            id="microondas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.microondas_activo"
                                                            id="microondas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.microondas_inactivo"
                                                            id="microondas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cocinas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cocinas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cocina_cantidad"
                                                            id="cocinas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cocina_activo"
                                                            id="cocinas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cocina_inactivo"
                                                            id="cocinas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Platos Para Sopa -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Platos
                                                        Para Sopa:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.platos_sopa_cantidad"
                                                            id="platos_sopa_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.platos_sopa_activo"
                                                            id="platos_sopa_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.platos_sopa_inactivo"
                                                            id="platos_sopa_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Ollas Para Sopa -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Ollas Para
                                                        Sopa:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.ollas_sopa_cantidad"
                                                            id="ollas_sopa_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.ollas_sopa_activo"
                                                            id="ollas_sopa_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.ollas_sopa_inactivo"
                                                            id="ollas_sopa_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Calderos -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Calderos:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.calderos_cantidad"
                                                            id="calderos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.calderos_activo"
                                                            id="calderos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.calderos_inactivo"
                                                            id="calderos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cucharillas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cucharillas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cucharas_cantidad"
                                                            id="cucharillas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cucharas_activo"
                                                            id="cucharillas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cucharas_inactivo"
                                                            id="cucharillas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Tenedores -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Tenedores:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.tenedores_cantidad"
                                                            id="tenedores_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.tenedores_activo"
                                                            id="tenedores_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.tenedores_inactivo"
                                                            id="tenedores_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Vasos Plásticos -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Vasos:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.vasos_cantidad"
                                                            id="vasos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.vasos_activo"
                                                            id="vasos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.vasos_inactivo"
                                                            id="vasos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Sonido -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Sonido:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.sonido_cantidad"
                                                            id="sonido_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.sonido_activo"
                                                            id="sonido_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.sonido_inactivo"
                                                            id="sonido_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cornetas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cornetas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cornetas_cantidad"
                                                            id="cornetas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cornetas_activo"
                                                            id="cornetas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cornetas_inactivo"
                                                            id="cornetas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Micrófonos con Cable -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Micrófonos
                                                        con Cable:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.microfono_cable_cantidad"
                                                            id="microfonos_cable_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.microfono_cable_activo"
                                                            id="microfonos_cable_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.microfono_cable_inactivo"
                                                            id="microfonos_cable_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Micrófonos Inalámbricos -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Micrófonos
                                                        Inalámbricos:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.microfono_inalambrico_cantidad"
                                                            id="microfonos_inalambricos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.microfono_inalambrico_activo"
                                                            id="microfonos_inalambricos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.microfono_inalambrico_inactivo"
                                                            id="microfonos_inalambricos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Parales de pie de micrófono -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Parales de
                                                        pie de micrófono:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.parales_microfono_cantidad"
                                                            id="parales_microfonos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.parales_microfono_activo"
                                                            id="parales_microfonos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.parales_microfono_inactivo"
                                                            id="parales_microfonos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Consola de Audio -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Consola de
                                                        Audio:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.consola_audio_cantidad"
                                                            id="consola_audio_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.consola_audio_activo"
                                                            id="consola_audio_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.consola_audio_inactivo"
                                                            id="consola_audio_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Plantas de Audio -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Plantas de
                                                        Audio:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.plantas_audio_cantidad"
                                                            id="plantas_audio_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.plantas_audio_activo"
                                                            id="plantas_audio_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.plantas_audio_inactivo"
                                                            id="plantas_audio_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- TV Plasmas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">TV
                                                        Plasmas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.tv_plasma_cantidad"
                                                            id="tv_plasma_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.tv_plasma_activo"
                                                            id="tv_plasma_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.tv_plasma_inactivo"
                                                            id="tv_plasma_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Planta Eléctrica -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Planta
                                                        Eléctrica:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.planta_electrica_cantidad"
                                                            id="planta_electrica_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.planta_electrica_activo"
                                                            id="planta_electrica_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.planta_electrica_inactivo"
                                                            id="planta_electrica_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Extensiones Eléctricas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Extensiones
                                                        Eléctricas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.extenciones_electricas_cantidad"
                                                            id="extenciones_electricas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.extenciones_electricas_activo"
                                                            id="extenciones_electricas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.extenciones_electricas_inactivo"
                                                            id="extenciones_electricas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cables de Micrófono -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cables de
                                                        Micrófono:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.cables_microfono_cantidad"
                                                            id="cables_microfonos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.cables_microfono_activo"
                                                            id="cables_microfonos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.cables_microfono_inactivo"
                                                            id="cables_microfonos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Video Beam -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Video
                                                        Beam:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.video_beam_cantidad"
                                                            id="video_beam_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.video_beam_activo"
                                                            id="video_beam_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.video_beam_inactivo"
                                                            id="video_beam_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Almohadillas para Condecoraciones -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Almohadillas
                                                        para Condecoraciones:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.almoadillas_cantidad"
                                                            id="almohadillas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.almoadillas_activo"
                                                            id="almohadillas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.almoadillas_inactivo"
                                                            id="almohadillas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Condecoraciones en físico; Botones, Estatuillas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Condecoraciones
                                                        en físico; Botones, Estatuillas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.condecoraciones_cantidad"
                                                            id="condecoraciones_fisicas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.condecoraciones_activo"
                                                            id="condecoraciones_fisicas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.condecoraciones_inactivo"
                                                            id="condecoraciones_fisicas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Automóviles; Carro, Camioneta, Camión -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Automóviles;
                                                        Carro, Camioneta, Camión:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.automoviles_cantidad"
                                                            id="automovil_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.automoviles_activo"
                                                            id="automovil_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.automoviles_inactivo"
                                                            id="automovil_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cámara Fotográfica -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cámara
                                                        Fotográfica:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.camara_fotografica_cantidad"
                                                            id="camara_fotografica_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.camara_fotografica_activo"
                                                            id="camara_fotografica_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.camara_fotografica_inactivo"
                                                            id="camara_fotografica_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Cámara de Grabación -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cámara de
                                                        Grabación:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.camara_grabacion_cantidad"
                                                            id="camara_grabacion_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.camara_grabacion_activo"
                                                            id="camara_grabacion_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.camara_grabacion_inactivo"
                                                            id="camara_grabacion_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Personal de Relaciones Publicas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Personal
                                                        de Relaciones Publicas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.persoral_relaciones_publicas_cantidad"
                                                            id="personal_publicas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.persoral_relaciones_publicas_activo"
                                                            id="personal_publicas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.persoral_relaciones_publicas_inactivo"
                                                            id="personal_publicas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Carpetas Impresas para Firmas de Acuerdos Logo de la UNELLEZ -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Carpetas
                                                        Membretadas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.carpetas_membretadas_cantidad"
                                                            id="carpetas_firmas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.carpetas_membretadas_activo"
                                                            id="carpetas_firmas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.carpetas_membretadas_inactivo"
                                                            id="carpetas_firmas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Personal que Hable otro Idioma -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Personal
                                                        que Hable otro Idioma:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.personal_idioma_cantidad"
                                                            id="personal_idiomas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.personal_idioma_activo"
                                                            id="personal_idiomas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.personal_idioma_inactivo"
                                                            id="personal_idiomas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="text" v-model="form.personal_idioma_tipo"
                                                            id="personal_idiomas_tipo" placeholder="Tipo De Idioma"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Personal que Maneje Lenguaje de Señas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Personal
                                                        que Maneje Lenguaje de Señas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.personal_sennas_cantidad"
                                                            id="personal_sennas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.personal_sennas_activo"
                                                            id="personal_sennas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number"
                                                            v-model="form.personal_sennas_inactivo"
                                                            id="personal_sennas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <!-- Personal que Realice Actividades culturales -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Carruchas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.carruchas_cantidad"
                                                            id="personal_carruchas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.carruchas_activo"
                                                            id="personal_carruchas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.carruchas_inactivo"
                                                            id="personal_carruchas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Manteleria:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.manteleria_cantidad"
                                                            id="personal_manteleria_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.manteleria_activo"
                                                            id="personal_manteleria_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                    <div class="ml-2">
                                                        <input required type="number" v-model="form.manteleria_inactivo"
                                                            id="personal_manteleria_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6" />
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <button @click="enviarEncuesta"
                                            class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">
                                            Enviar Registro De Inventario
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer-->
            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center gap-4">
                        <p
                            class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Desarrollado Por DTSI
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.cls-1 {
    fill: #f60;
}

.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
