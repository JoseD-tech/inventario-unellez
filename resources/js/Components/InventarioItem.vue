<script setup>

const props = defineProps({
    titulo: String,
    cantidad: String,
    activos: String,
    inactivos: String
})

</script>

<template>
    <div class="flex items-center space-x-4">
        <h6 class="font-medium text-md">{{ props.titulo }}: </h6>
        <p></p>
        <span class="p-1 text-gray-500 text-sm uppercase rounded-lg outline-none">Cantidad: {{ props.cantidad }}</span>
        <span class="p-1 text-gray-500 text-sm uppercase rounded-lg outline-none">activos: {{ props.activos }}</span>
        <span class="p-1 text-gray-500 text-sm uppercase rounded-lg outline-none">Inactivos: {{ props.inactivos }}</span>
    </div>
</template>
