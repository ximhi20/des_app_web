<script setup></script>

<template>
    <header>
        <nav>
            <RouterLink to="/">Inicio</RouterLink>
            <RouterLink to="/games">Juegos</RouterLink>
            <RouterLink to="/worlds">Mundos</RouterLink>
        </nav>
    </header>
</template>

<style scoped>
    header{
        height: 10vh;
    }

    nav{
        gap: 20px;
        padding: 20px;
        background: aqua;
        display: flex;
        justify-content: center;
    }

    a{
        background-color: blue;
        color: violet;
        text-decoration: none;
        padding: 5px;
        border-radius: 5px;
        transition: .5s;

        &:hover{
            color: blue;
            background-color: red;
            scale: 1.1;
        }
    }
</style>