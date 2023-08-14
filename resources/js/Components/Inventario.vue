<script setup>
import InventarioItem from '@/Components/InventarioItem.vue';


const props = defineProps({
    inventario: Object
})

</script>

<template>
    <InventarioItem titulo="Sillas" :cantidad="props.inventario.sillas_cantidades"
        :activos="props.inventario.sillas_prestar" :inactivos="props.inventario.sillas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Mesas" :cantidad="props.inventario.mesas_oficina_cantidades"
        :activos="props.inventario.mesas_oficina_prestar" :inactivos="props.inventario.mesas_oficina_reparar">
    </InventarioItem>

    <InventarioItem titulo="Telas para Decoración" :cantidad="props.inventario.telas_decoracion_cantidades"
        :activos="props.inventario.telas_decoracion_prestar" :inactivos="props.inventario.telas_decoracion_reparar">
    </InventarioItem>

    <InventarioItem titulo="Estandartes" :cantidad="props.inventario.estandartes_cantidades"
        :activos="props.inventario.sillas_prestar" :inactivos="props.inventario.sillas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cuadros o Artes Plásticas" :cantidad="props.inventario.cuadros_cantidades"
        :activos="props.inventario.cuadros_prestar" :inactivos="props.inventario.cuadros_reparar">
    </InventarioItem>

    <InventarioItem titulo="Banderas de Interiores" :cantidad="props.inventario.bandera_interior_cantidades"
        :activos="props.inventario.bandera_interior_prestar" :inactivos="props.inventario.bandera_interior_reparar">
    </InventarioItem>

    <InventarioItem titulo="Banderas de Exteriores" :cantidad="props.inventario.bandera_exterior_cantidades"
        :activos="props.inventario.bandera_exterior_prestar" :inactivos="props.inventario.bandera_exterior_reparar">
    </InventarioItem>

    <InventarioItem titulo="Astas para Banderas" :cantidad="props.inventario.astas_bandera_cantidades"
        :activos="props.inventario.astas_bandera_prestar" :inactivos="props.inventario.astas_bandera_reparar">
    </InventarioItem>

    <InventarioItem titulo="Decoraciones Florales o de Ornato" :cantidad="props.inventario.decoracion_cantidades"
        :activos="props.inventario.decoracion_prestar" :inactivos="props.inventario.decoracion_reparar">
    </InventarioItem>

    <InventarioItem titulo="Termos de Agua" :cantidad="props.inventario.termos_agua_cantidades"
        :activos="props.inventario.termos_agua_prestar" :inactivos="props.inventario.termos_agua_reparar">
    </InventarioItem>

    <InventarioItem titulo="Termos de Café" :cantidad="props.inventario.termos_cafe_cantidades"
        :activos="props.inventario.termos_cafe_prestar" :inactivos="props.inventario.termos_cafe_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cafeteras" :cantidad="props.inventario.cafeteras_cantidades"
        :activos="props.inventario.cafeteras_prestar" :inactivos="props.inventario.cafeteras_reparar">
    </InventarioItem>

    <InventarioItem titulo="Microondas" :cantidad="props.inventario.microondas_cantidades"
        :activos="props.inventario.microondas_prestar" :inactivos="props.inventario.microondas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cocinas" :cantidad="props.inventario.cocinas_cantidades"
        :activos="props.inventario.cocinas_prestar" :inactivos="props.inventario.cocinas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Platos Para Sopa" :cantidad="props.inventario.platos_sopa_cantidades"
        :activos="props.inventario.platos_sopa_prestar" :inactivos="props.inventario.platos_sopa_reparar">
    </InventarioItem>

    <InventarioItem titulo="Ollas Para Sopa" :cantidad="props.inventario.ollas_sopa_cantidades"
        :activos="props.inventario.ollas_sopa_prestar" :inactivos="props.inventario.ollas_sopa_reparar">
    </InventarioItem>

    <InventarioItem titulo="Calderos" :cantidad="props.inventario.calderos_cantidades"
        :activos="props.inventario.calderos_prestar" :inactivos="props.inventario.calderos_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cucharillas" :cantidad="props.inventario.cucharillas_cantidades"
        :activos="props.inventario.cucharillas_prestar" :inactivos="props.inventario.cucharillas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Tenedores" :cantidad="props.inventario.tenedores_cantidades"
        :activos="props.inventario.tenedores_prestar" :inactivos="props.inventario.tenedores_reparar">
    </InventarioItem>

    <InventarioItem titulo="Vasos" :cantidad="props.inventario.vasos_cantidades"
        :activos="props.inventario.vasos_prestar" :inactivos="props.inventario.vasos_reparar">
    </InventarioItem>

    <InventarioItem titulo="Sonido" :cantidad="props.inventario.sonido_cantidades"
        :activos="props.inventario.sonido_prestar" :inactivos="props.inventario.sonido_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cornetas" :cantidad="props.inventario.cornetas_cantidades"
        :activos="props.inventario.cornetas_prestar" :inactivos="props.inventario.cornetas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Micrófonos con Cable" :cantidad="props.inventario.microfonos_cable_cantidades"
        :activos="props.inventario.microfonos_cable_prestar" :inactivos="props.inventario.microfonos_cable_reparar">
    </InventarioItem>

    <InventarioItem titulo="Micrófonos Inalámbricos" :cantidad="props.inventario.microfonos_inalambricos_cantidades"
        :activos="props.inventario.microfonos_inalambricos_prestar" :inactivos="props.inventario.microfonos_inalambricos_reparar">
    </InventarioItem>

    <InventarioItem titulo="Parales de pie de micrófono" :cantidad="props.inventario.parales_microfonos_cantidades"
        :activos="props.inventario.parales_microfonos_prestar" :inactivos="props.inventario.parales_microfonos_reparar">
    </InventarioItem>

    <InventarioItem titulo="Consola de Audio" :cantidad="props.inventario.consola_audio_cantidades"
        :activos="props.inventario.consola_audio_prestar" :inactivos="props.inventario.consola_audio_reparar">
    </InventarioItem>

    <InventarioItem titulo="Plantas de Audio" :cantidad="props.inventario.plantas_audio_cantidades"
        :activos="props.inventario.sillas_prestar" :inactivos="props.inventario.plantas_audio_reparar">
    </InventarioItem>

    <InventarioItem titulo="TV Plasmas" :cantidad="props.inventario.tv_plasma_cantidades"
        :activos="props.inventario.tv_plasma_prestar" :inactivos="props.inventario.tv_plasma_reparar">
    </InventarioItem>

    <InventarioItem titulo="Planta Eléctrica" :cantidad="props.inventario.planta_electrica_cantidades"
        :activos="props.inventario.planta_electrica_prestar" :inactivos="props.inventario.planta_electrica_reparar">
    </InventarioItem>

    <InventarioItem titulo="Extensiones Eléctricas" :cantidad="props.inventario.extenciones_electricas_cantidades"
        :activos="props.inventario.extenciones_electricas_prestar" :inactivos="props.inventario.extenciones_electricas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cables de Micrófono" :cantidad="props.inventario.cables_microfonos_cantidades"
        :activos="props.inventario.cables_microfonos_prestar" :inactivos="props.inventario.cables_microfonos_reparar">
    </InventarioItem>

    <InventarioItem titulo="Video Beam" :cantidad="props.inventario.video_beam_cantidades"
        :activos="props.inventario.video_beam_prestar" :inactivos="props.inventario.video_beam_reparar">
    </InventarioItem>

    <InventarioItem titulo="Almohadillas para Condecoraciones" :cantidad="props.inventario.almohadillas_cantidades"
        :activos="props.inventario.almohadillas_prestar" :inactivos="props.inventario.almohadillas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Condecoraciones en físico; Botones, Estatuillas"
        :cantidad="props.inventario.condecoraciones_fisicas_cantidades" :activos="props.inventario.condecoraciones_fisicas_prestar"
        :inactivos="props.inventario.condecoraciones_fisicas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Automóviles; Carro, Camioneta, Camión" :cantidad="props.inventario.automovil_cantidades"
        :activos="props.inventario.automovil_prestar" :inactivos="props.inventario.automovil_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cámara Fotográfica" :cantidad="props.inventario.camara_fotografica_cantidades"
        :activos="props.inventario.camara_fotografica_prestar" :inactivos="props.inventario.camara_fotografica_reparar">
    </InventarioItem>

    <InventarioItem titulo="Cámara de Grabación" :cantidad="props.inventario.camara_grabacion_cantidades"
        :activos="props.inventario.camara_grabacion_prestar" :inactivos="props.inventario.camara_grabacion_reparar">
    </InventarioItem>

    <InventarioItem titulo="Personal de Relaciones Publicas" :cantidad="props.inventario.personal_publicas_cantidades"
        :activos="props.inventario.personal_publicas_prestar" :inactivos="props.inventario.personal_publicas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Carpetas Membretadas" :cantidad="props.inventario.carpetas_firmas_cantidades"
        :activos="props.inventario.carpetas_firmas_prestar" :inactivos="props.inventario.carpetas_firmas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Personal que Hable otro Idioma" :cantidad="props.inventario.personal_idiomas_cantidades"
        :activos="props.inventario.personal_idiomas_prestar" :inactivos="props.inventario.personal_idiomas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Personal que Maneje Lenguaje de Señas" :cantidad="props.inventario.personal_sennas_cantidades"
        :activos="props.inventario.personal_sennas_prestar" :inactivos="props.inventario.personal_sennas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Carruchas" :cantidad="props.inventario.personal_carruchas_cantidades"
        :activos="props.inventario.personal_carruchas_prestar" :inactivos="props.inventario.personal_carruchas_reparar">
    </InventarioItem>

    <InventarioItem titulo="Manteleria" :cantidad="props.inventario.personal_manteleria_cantidades"
        :activos="props.inventario.personal_manteleria_prestar" :inactivos="props.inventario.personal_manteleria_reparar">
    </InventarioItem>
</template>
