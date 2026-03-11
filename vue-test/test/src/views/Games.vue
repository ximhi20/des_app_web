<script setup>
    import Titles from '@/components/Titles.vue';
    import GamesCard from '@/components/GamesCard.vue';
    import games from '../data/games.json';
    const TitleGames = "Juegos de la saga";
</script>

<template>
    <Titles :title="TitleGames"/>

    <div class="menu-container">  
        <GamesCard
            v-for="game in games"
            :key="game.id"
            :product="game"
        />  
    </div>
</template>

<style scoped></style>