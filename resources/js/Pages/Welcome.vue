<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { reactive, ref } from "vue";
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import Modal from '@/Components/Modal.vue'

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
const modal = ref(false)


const enviarEncuesta = () => {
    router.post("/formulario", form)
    modal.value = !modal.value;
    form.direccion = "",
        form.director = "",
        form.telefonoDirector = "",
        form.correoDirector = "",
        form.nombreEncargado = "",
        form.telefonoEncargado = "",
        form.silla_oficina_cantidad = "",
        form.silla_oficina_activo = "",
        form.silla_oficina_inactivo = "",
        form.mesas_cantidad = "",
        form.mesas_activo = "",
        form.mesas_inactivo = "",
        form.telas_cantidad = "",
        form.telas_activo = "",
        form.telas_inactivo = "",
        form.estandartes_cantidad = "",
        form.estandartes_activo = "",
        form.estandartes_inactivo = "",
        form.cuadros_cantidad = "",
        form.cuadros_activo = "",
        form.cuadros_inactivo = "",
        form.banderas_interior_cantidad = "",
        form.banderas_interior_activo = "",
        form.banderas_interior_inactivo = "",
        form.banderas_exterior_cantidad = "",
        form.banderas_exterior_activo = "",
        form.banderas_exterior_inactivo = "",
        form.astas_bandera_cantidad = "",
        form.astas_bandera_activo = "",
        form.astas_bandera_inactivo = "",
        form.decoracion_cantidad = "",
        form.decoracion_activo = "",
        form.decoracion_inactivo = "",
        form.termos_agua_cantidad = "",
        form.termos_agua_activo = "",
        form.termos_agua_inactivo = "",
        form.termos_cafe_cantidad = "",
        form.termos_cafe_activo = "",
        form.termos_cafe_inactivo = "",
        form.cocina_cantidad = "",
        form.cocina_activo = "",
        form.cocina_inactivo = "",
        form.cafeteras_cantidad = "",
        form.cafeteras_activo = "",
        form.cafeteras_inactivo = "",
        form.microondas_cantidad = "",
        form.microondas_activo = "",
        form.microondas_inactivo = "",
        form.platos_sopa_cantidad = "",
        form.platos_sopa_activo = "",
        form.platos_sopa_inactivo = "",
        form.ollas_sopa_cantidad = "",
        form.ollas_sopa_activo = "",
        form.ollas_sopa_inactivo = "",
        form.calderos_cantidad = "",
        form.calderos_activo = "",
        form.calderos_inactivo = "",
        form.cucharas_cantidad = "",
        form.cucharas_activo = "",
        form.cucharas_inactivo = "",
        form.tenedores_cantidad = "",
        form.tenedores_activo = "",
        form.tenedores_inactivo = "",
        form.vasos_cantidad = "",
        form.vasos_activo = "",
        form.vasos_inactivo = "",
        form.sonido_cantidad = "",
        form.sonido_activo = "",
        form.sonido_inactivo = "",
        form.cornetas_cantidad = "",
        form.cornetas_activo = "",
        form.cornetas_inactivo = "",
        form.microfono_cable_cantidad = "",
        form.microfono_cable_activo = "",
        form.microfono_cable_inactivo = "",
        form.microfono_inalambrico_cantidad = "",
        form.microfono_inalambrico_activo = "",
        form.microfono_inalambrico_inactivo = "",
        form.parales_microfono_cantidad = "",
        form.parales_microfono_activo = "",
        form.parales_microfono_inactivo = "",
        form.consola_audio_cantidad = "",
        form.consola_audio_activo = "",
        form.consola_audio_inactivo = "",
        form.plantas_audio_cantidad = "",
        form.plantas_audio_activo = "",
        form.plantas_audio_inactivo = "",
        form.tv_plasma_cantidad = "",
        form.tv_plasma_activo = "",
        form.tv_plasma_inactivo = "",
        form.planta_electrica_cantidad = "",
        form.planta_electrica_activo = "",
        form.planta_electrica_inactivo = "",
        form.extenciones_electricas_cantidad = "",
        form.extenciones_electricas_activo = "",
        form.extenciones_electricas_inactivo = "",
        form.cables_microfono_cantidad = "",
        form.cables_microfono_activo = "",
        form.cables_microfono_inactivo = "",
        form.video_beam_cantidad = "",
        form.video_beam_activo = "",
        form.video_beam_inactivo = "",
        form.almoadillas_cantidad = "",
        form.almoadillas_activo = "",
        form.almoadillas_inactivo = "",
        form.condecoraciones_cantidad = "",
        form.condecoraciones_activo = "",
        form.condecoraciones_inactivo = "",
        form.automoviles_cantidad = "",
        form.automoviles_activo = "",
        form.automoviles_inactivo = "",
        form.camara_fotografica_cantidad = "",
        form.camara_fotografica_activo = "",
        form.camara_fotografica_inactivo = "",
        form.camara_grabacion_cantidad = "",
        form.camara_grabacion_activo = "",
        form.camara_grabacion_inactivo = "",
        form.persoral_relaciones_publicas_cantidad = "",
        form.persoral_relaciones_publicas_activo = "",
        form.persoral_relaciones_publicas_inactivo = "",
        form.carpetas_membretadas_cantidad = "",
        form.carpetas_membretadas_activo = "",
        form.carpetas_membretadas_inactivo = "",
        form.personal_idioma_cantidad = "",
        form.personal_idioma_activo = "",
        form.personal_idioma_inactivo = "",
        form.personal_idioma_tipo = "",
        form.personal_sennas_cantidad = "",
        form.personal_sennas_activo = "",
        form.personal_sennas_inactivo = "",
        form.carruchas_cantidad = "",
        form.carruchas_activo = "",
        form.carruchas_inactivo = "",
        form.manteleria_cantidad = "",
        form.manteleria_activo = "",
        form.manteleria_inactivo = ""
}


</script>

<template>
    <Head title="Inventario" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <ApplicationLogo />
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

    <Modal :show="modal">

        <div class="w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="p-4 border-b rounded-t border-gray-600 bg-green-800">
                    <h3 class="text-xl font-semibold text-white text-center">
                        Datos Enviados Correctamente
                    </h3>

                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 text-center">
                    <p class="text-xl leading-relaxed text-gray-500">
                        Los datos de tu inventario fueron enviado correctamente.
                    </p>
                </div>
                <div class="pt-6 space-y-6 text-center">
                    <a :href="route('welcome')"
                        class="w-full block rounded-lg border border-transparent bg-gray-400 px-4 py-4 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-gray-400 focus:outline-none focus:ring active:bg-gray-400">
                        Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </Modal>
</template>

<style scoped>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
