<script setup>

import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
    <div class="container">
        <nav v-if="!$route.meta.hideNavbar">
            <RouterLink to="/projects">Projects</RouterLink>
        </nav>
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
</style>
