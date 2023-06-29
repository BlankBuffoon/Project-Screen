<script setup>

import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
    <div class="container">
        <!-- <button id="togglemenu" onclick="toggleMenu()">CLICK</button>
        <nav>
            <RouterLink to="/projects">Projects</RouterLink>
        </nav> -->
    </div>

    <RouterView/>
</template>

<script>

</script>

<style scoped>
.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

nav {
    display: none;
}
</style>
