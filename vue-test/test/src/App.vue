<script setup>
  import Header from './components/Header.vue';
  import Footer from './components/Footer.vue';
</script>

<template>
  <Header/>

  <main>
    <RouterView/>
  </main>

  <Footer/>
</template>

<style scoped>
  main{
    text-align: center;
    min-height: 80vh;
  }
</style>