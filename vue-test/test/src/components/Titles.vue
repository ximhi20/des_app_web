<script setup>
    defineProps({title: String});
</script>

<template>
    <h1 class="title">{{ title }}</h1>
</template>

<style scoped>
    .title{
        width: 100%;
        height: 70px;
        background-color: red;
        color: blue;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>