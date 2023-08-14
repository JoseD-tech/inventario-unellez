<template>
    <Head title="Inventario" />

    <AuthenticatedLayout>
        <template #header>
            Inventario
        </template>


        <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div v-if="props.inventario.length > 0" class="-mx-4 sm:-mx-8 px-4 sm:px-8 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Direccion
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Director
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Telefono
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Correo
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Nombre Encargado
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Telefono Encargado
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="inventario in props.inventario" :key="id">
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ inventario.programa }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ inventario.director_programa }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ inventario.telefono_director }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ inventario.correo }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ inventario.nombre_encargado }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ inventario.telefono_encargado }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm space-x-2 flex">
                                    <button @click="openModalView(inventario.id)"
                                        class="bg-orange-600 px-2 py-1 rounded-md text-white font-semibold tracking-wide cursor-pointer">Ver
                                        Reporte</button>
                                    <a :href="`/export/inventario/${inventario.id}`" target="_blank"
                                        class="bg-green-600 px-2 py-1 rounded-md text-center text-white font-semibold tracking-wide cursor-pointer">Exportar
                                        Reporte</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p v-else>No Hay Inventario Registrado</p>
        </div>

        <Modal :show="openModal">
            <div class="py-4 px-6 space-y-6">
                <h3 class="text-xl font-bold capitalize text-center">Reporte De Inventario</h3>
                <p class="font-bold">Direccion: <span class="font-light">{{ openInventrio.programa }}</span></p>
                <p class="font-bold">Director: <span class="font-light">{{ openInventrio.director_programa }}</span>
                </p>
                <p class="font-bold">Telefono Director: <span class="font-light">{{ openInventrio.telefono_director
                }}</span></p>
                <p class="font-bold">Correo Director: <span class="font-light">{{ openInventrio.correo }}</span></p>
                <p class="font-bold">Nombre Del Encargado: <span class="font-light">{{ openInventrio.nombre_encargado
                }}</span></p>
                <p class="font-bold">Telefono Del Encargado: <span class="font-light">{{
                    openInventrio.telefono_encargado }}</span></p>

                <h3 class="text-xl font-bold capitalize text-center">Inventario</h3>

                <Inventario :inventario="openInventrio"></Inventario>

            </div>

            <button @click="openModalView(0)" class="group relative h-12 w-full overflow-hidden bg-gray-500 text-lg font-bold text-white">
                Cerrar
                <div
                    class="absolute inset-0 h-full w-full scale-0 transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30">
                </div>
            </button>

        </Modal>

    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue'
import Inventario from '@/Components/Inventario.vue';
import { ref } from 'vue';
import axios from 'axios';

const props = defineProps({
    inventario: Object
})

let openModal = ref(false)
let openInventrio  = ref(null)

const openModalView = (id) => {
    openInventrio.value = props.inventario.find(( inventario ) => inventario.id === id);
    openModal.value = !openModal.value
}

const exportPDF = (id) => {
    axios.get(`/export/inventario/${id}`)
}

</script>
