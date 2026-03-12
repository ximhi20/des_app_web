<script setup>
    import Titles from '@/components/Titles.vue';
    import GamesCard from '@/components/GamesCard.vue';
    import games from '../data/games.json';
    const TitleGames = "Juegos de la saga";
</script>

<template>
    <Titles :title="TitleGames"/>

    <div class="game-container">  
        <GamesCard
            v-for="game in games"
            :key="game.id"
            :game="game"
        />  
    </div>
</template>

<style scoped>
    .game-container{
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1rem;
        margin: 0 10px;
    }
</style>