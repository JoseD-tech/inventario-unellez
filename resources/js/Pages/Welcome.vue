<script setup>
import { Head, Link } from '@inertiajs/vue3';

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

})

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

                            <h2 class="my-6 text-4xl text-center font-semibold uppercase text-gray-900">Registrar
                                De Insumo Para Protocolo:
                            </h2>

                            <div class="my-4">
                                <form>
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="programa"
                                                class="block text-md font-medium leading-6 text-gray-900">Direccion o
                                                Programa</label>
                                            <div class="mt-2">
                                                <input type="text" name="programa" id="programa"
                                                    placeholder="Nombre de la direccion o programa"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="director"
                                                class="block text-md font-medium leading-6 text-gray-900">Director</label>
                                            <div class="mt-2">
                                                <input type="text" name="director" id="director"
                                                    placeholder="Nombre del director del director"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="telefono"
                                                class="block text-md font-medium leading-6 text-gray-900">Telefono</label>
                                            <div class="mt-2">
                                                <input type="text" name="telefono" id="telefono"
                                                    placeholder="Telefono del director del telefono"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 mt-4">
                                            <label for="correo"
                                                class="block text-md font-medium leading-6 text-gray-900">Correo
                                                Electronico</label>
                                            <div class="mt-2">
                                                <input type="text" name="correo" id="correo"
                                                    placeholder="correo del director o del correo"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 mt-4">
                                            <label for="nombre_encargado"
                                                class="block text-md font-medium leading-6 text-gray-900">Nombre Del
                                                Encargado:</label>
                                            <div class="mt-2">
                                                <input type="text" name="nombre_encargado" id="nombre_encargado"
                                                    placeholder="Nombre del encargado de registrar el material"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 mt-4">
                                            <label for="telefono_material"
                                                class="block text-md font-medium leading-6 text-gray-900">Telefono Del
                                                Encargado Del Material</label>
                                            <div class="mt-2">
                                                <input type="text" name="telefono_material" id="telefono_material"
                                                    placeholder="Telefono del encargado de registrar el material"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>
                                        <div class="col-span-full">
                                            <fieldset>
                                                <legend class="text-xl leading-6 text-gray-900 mb-4">Inventario
                                                </legend>

                                                <!-- Sillas -->
                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Sillas
                                                        de Oficina: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="sillas_cantidades"
                                                            id="sillas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="sillas_prestar"
                                                            id="sillas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="sillas_reparar"
                                                            id="sillas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Mesas de oficina -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Mesas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="mesas_oficina_cantidades"
                                                            id="mesas_oficina_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="mesas_oficina_presta"
                                                            id="mesas_oficina_presta" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="mesas_oficina_reparar"
                                                            id="mesas_oficina_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Telas para decoracion -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Telas
                                                        para Decoración: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="telas_decoracion_cantidades"
                                                            id="telas_decoracion_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="telas_decoracion_prestar"
                                                            id="telas_decoracion_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="telas_decoracion_reparar"
                                                            id="telas_decoracion_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Afiches o Pendones de la UNELLEZ -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Estandartes:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="afiches_pendones_cantidades"
                                                            id="afiches_pendones_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="afiches_pendones_prestar"
                                                            id="afiches_pendones_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="afiches_pendones_reparar"
                                                            id="afiches_pendones_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cuadros o Artes Plásticas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cuadros
                                                        o Artes Plásticas: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="cuadros_cantidades"
                                                            id="cuadros_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cuadros_prestar"
                                                            id="cuadros_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cuadros_reparar"
                                                            id="cuadros_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Banderas de Interiores -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Banderas
                                                        de Interiores: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="bandera_interior_cantidades"
                                                            id="bandera_interior_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="bandera_interior_prestar"
                                                            id="bandera_interior_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="bandera_interior_reparar"
                                                            id="bandera_interior_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Banderas de Exteriores -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Banderas
                                                        de Exteriores: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="bandera_exterior_cantidades"
                                                            id="bandera_exterior_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="bandera_exterior_prestar"
                                                            id="bandera_exterior_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="bandera_exterior_reparar"
                                                            id="bandera_exterior_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Astas para Banderas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Astas
                                                        para Banderas: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="astas_bandera_cantidades"
                                                            id="astas_bandera_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="astas_bandera_prestar"
                                                            id="astas_bandera_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="astas_bandera_reparar"
                                                            id="astas_bandera_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Decoraciones Florales o de Ornato -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Decoraciones
                                                        Florales o
                                                        de Ornato: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="decoracion_cantidades"
                                                            id="decoracion_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="decoracion_prestar"
                                                            id="decoracion_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="decoracion_reparar"
                                                            id="decoracion_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Termos de Agua -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Termos
                                                        de Agua: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="termos_agua_cantidades"
                                                            id="termos_agua_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="termos_agua_prestar"
                                                            id="termos_agua_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="termos_agua_reparar"
                                                            id="termos_agua_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Termos de Café -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Termos
                                                        de Café: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="termos_cafe_cantidades"
                                                            id="termos_cafe_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="termos_cafe_prestar"
                                                            id="termos_cafe_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="termos_cafe_reparar"
                                                            id="termos_cafe_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cafeteras -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cafeteras:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="cafeteras_cantidades"
                                                            id="cafeteras_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cafeteras_prestar"
                                                            id="cafeteras_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cafeteras_reparar"
                                                            id="cafeteras_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Microondas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Microondas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="microondas_cantidades"
                                                            id="microondas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="microondas_prestar"
                                                            id="microondas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="microondas_reparar"
                                                            id="microondas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cocinas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cocinas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="cocinas_cantidades"
                                                            id="cocinas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cocinas_prestar"
                                                            id="cocinas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cocinas_reparar"
                                                            id="cocinas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Platos Para Sopa -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Platos
                                                        Para Sopa: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="platos_sopa_cantidades"
                                                            id="platos_sopa_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="platos_sopa_prestar"
                                                            id="platos_sopa_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="platos_sopa_reparar"
                                                            id="platos_sopa_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Ollas Para Sopa -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Ollas
                                                        Para Sopa: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="ollas_sopa_cantidades"
                                                            id="ollas_sopa_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="ollas_sopa_prestar"
                                                            id="ollas_sopa_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="ollas_sopa_reparar"
                                                            id="ollas_sopa_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Calderos -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Calderos:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="calderos_cantidades"
                                                            id="calderos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="calderos_prestar"
                                                            id="calderos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="calderos_reparar"
                                                            id="calderos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cucharillas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cucharillas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="cucharillas_cantidades"
                                                            id="cucharillas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cucharillas_prestar"
                                                            id="cucharillas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cucharillas_reparar"
                                                            id="cucharillas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Tenedores -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Tenedores:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="tenedores_cantidades"
                                                            id="tenedores_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="tenedores_prestar"
                                                            id="tenedores_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="tenedores_reparar"
                                                            id="tenedores_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Vasos Plásticos -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Vasos:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="vasos_cantidades"
                                                            id="vasos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="vasos_prestar" id="vasos_prestar"
                                                            placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="vasos_reparar" id="vasos_reparar"
                                                            placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Sonido -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Sonido:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="sonido_cantidades"
                                                            id="sonido_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="sonido_prestar"
                                                            id="sonido_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="sonido_reparar"
                                                            id="sonido_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cornetas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cornetas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="cornetas_cantidades"
                                                            id="cornetas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cornetas_prestar"
                                                            id="cornetas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cornetas_reparar"
                                                            id="cornetas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Micrófonos con Cable -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Micrófonos
                                                        con Cable: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="microfonos_cable_cantidades"
                                                            id="microfonos_cable_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="microfonos_cable_prestar"
                                                            id="microfonos_cable_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="microfonos_cable_reparar"
                                                            id="microfonos_cable_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Micrófonos Inalámbricos -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Micrófonos
                                                        Inalámbricos: </label>
                                                    <div class="ml-2">
                                                        <input type="text"
                                                            name="microfonos_inalambricos_cantidades"
                                                            id="microfonos_inalambricos_cantidades"
                                                            placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="microfonos_inalambricos_prestar"
                                                            id="microfonos_inalambricos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="microfonos_inalambricos_reparar"
                                                            id="microfonos_inalambricos_reparar"
                                                            placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Parales de pie de micrófono -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Parales
                                                        de pie de micrófono: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="parales_microfonos_cantidades"
                                                            id="parales_microfonos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="parales_microfonos_prestar"
                                                            id="parales_microfonos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="parales_microfonos_reparar"
                                                            id="parales_microfonos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Consola de Audio -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Consola
                                                        de Audio: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="consola_audio_cantidades"
                                                            id="consola_audio_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="consola_audio_prestar"
                                                            id="consola_audio_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="consola_audio_reparar"
                                                            id="consola_audio_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Plantas de Audio -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Plantas
                                                        de Audio: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="plantas_audio_cantidades"
                                                            id="plantas_audio_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="plantas_audio_prestar"
                                                            id="plantas_audio_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="plantas_audio_reparar"
                                                            id="plantas_audio_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- TV Plasmas -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">TV
                                                        Plasmas: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="tv_plasma_cantidades"
                                                            id="tv_plasma_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="tv_plasma_prestar"
                                                            id="tv_plasma_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="tv_plasma_reparar"
                                                            id="tv_plasma_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Planta Eléctrica -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Planta
                                                        Eléctrica: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="planta_electrica_cantidades"
                                                            id="planta_electrica_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="planta_electrica_prestar"
                                                            id="planta_electrica_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="planta_electrica_reparar"
                                                            id="planta_electrica_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Extensiones Eléctricas -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Extensiones
                                                        Eléctricas: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="extenciones_electricas_cantidades"
                                                            id="extenciones_electricas_cantidades"
                                                            placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="extenciones_electricas_prestar"
                                                            id="extenciones_electricas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="extenciones_electricas_reparar"
                                                            id="extenciones_electricas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cables de Micrófono -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cables
                                                        de Micrófono: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="cables_microfonos_cantidades"
                                                            id="cables_microfonos_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cables_microfonos_prestar"
                                                            id="cables_microfonos_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="cables_microfonos_reparar"
                                                            id="cables_microfonos_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Video Beam -->

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Video
                                                        Beam: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="video_beam_cantidades"
                                                            id="video_beam_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="video_beam_prestar"
                                                            id="video_beam_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="video_beam_reparar"
                                                            id="video_beam_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Almohadillas para Condecoraciones -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Almohadillas
                                                        para Condecoraciones: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="almohadillas_cantidades"
                                                            id="almohadillas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="almohadillas_prestar"
                                                            id="almohadillas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="almohadillas_reparar"
                                                            id="almohadillas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Condecoraciones en físico; Botones, Estatuillas -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Condecoraciones
                                                        en físico; Botones, Estatuillas: </label>
                                                    <div class="ml-2">
                                                        <input type="text"
                                                            name="condecoraciones_fisicas_cantidades"
                                                            id="condecoraciones_fisicas_cantidades"
                                                            placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="condecoraciones_fisicas_prestar"
                                                            id="condecoraciones_fisicas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="condecoraciones_fisicas_reparar"
                                                            id="condecoraciones_fisicas_reparar"
                                                            placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Automóviles; Carro, Camioneta, Camión -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Automóviles;
                                                        Carro, Camioneta, Camión: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="automovil_cantidades"
                                                            id="automovil_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="automovil_prestar"
                                                            id="automovil_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="automovil_reparar"
                                                            id="automovil_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cámara Fotográfica -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cámara
                                                        Fotográfica: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="camara_fotografica_cantidades"
                                                            id="camara_fotografica_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="camara_fotografica_prestar"
                                                            id="camara_fotografica_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="camara_fotografica_reparar"
                                                            id="camara_fotografica_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Cámara de Grabación -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Cámara
                                                        de Grabación: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="camara_grabacion_cantidades"
                                                            id="camara_grabacion_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="camara_grabacion_prestar"
                                                            id="camara_grabacion_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="camara_grabacion_reparar"
                                                            id="camara_grabacion_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Personal de Relaciones Publicas -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Personal
                                                        de Relaciones
                                                        Publicas: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_publicas_cantidades"
                                                            id="personal_publicas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_publicas_prestar"
                                                            id="personal_publicas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_publicas_reparar"
                                                            id="personal_publicas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Carpetas Impresas para Firmas de Acuerdos Logo de la UNELLEZ -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Carpetas
                                                        Membretadas: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="carpetas_firmas_cantidades"
                                                            id="carpetas_firmas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="carpetas_firmas_prestar"
                                                            id="carpetas_firmas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="carpetas_firmas_reparar"
                                                            id="carpetas_firmas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Personal que Hable otro Idioma -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Personal
                                                        que Hable otro Idioma: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_idiomas_cantidades"
                                                            id="personal_idiomas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_idiomas_prestar"
                                                            id="personal_idiomas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_idiomas_reparar"
                                                            id="personal_idiomas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_idiomas_tipo"
                                                            id="personal_idiomas_tipo" placeholder="Tipo De Idioma"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Personal que Maneje Lenguaje de Señas -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Personal
                                                        que Maneje Lenguaje de Señas: </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_sennas_cantidades"
                                                            id="personal_sennas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_sennas_prestar"
                                                            id="personal_sennas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_sennas_reparar"
                                                            id="personal_sennas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <!-- Personal que Realice Actividades culturales -->


                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Carruchas:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_carruchas_cantidades"
                                                            id="personal_carruchas_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_carruchas_prestar"
                                                            id="personal_carruchas_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_carruchas_reparar"
                                                            id="personal_carruchas_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="mt-4 flex items-center">
                                                    <label for="sillas_oficina"
                                                        class="block text-md font-medium leading-6 text-gray-900">Manteleria:
                                                    </label>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_manteleria_cantidades"
                                                            id="personal_manteleria_cantidades" placeholder="Cantidad"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_manteleria_prestar"
                                                            id="personal_manteleria_prestar" placeholder="Activo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                    <div class="ml-2">
                                                        <input type="text" name="personal_manteleria_reparar"
                                                            id="personal_manteleria_reparar" placeholder="Inactivo"
                                                            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600/50 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <button type="submit"
                                            class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Enviar
                                            Registro De Inventario</button>
                                    </div>
                                </form>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
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
