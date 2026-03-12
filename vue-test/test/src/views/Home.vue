<script setup>
    import Titles from '@/components/Titles.vue';
    const TitleHome = "Resumen de la saga";

    import PruebaEmit from '@/components/PruebaEmit.vue';
    import { ref } from 'vue';

    const mensaje = ref('');
    function recibirDato(dato) {
        mensaje.value = dato;
    }
</script>

<template>
    <Titles :title="TitleHome"/>

    <PruebaEmit @datoEnviado="recibirDato"/>
    <h2>{{ mensaje }}</h2>
</template>

<style scoped></style>