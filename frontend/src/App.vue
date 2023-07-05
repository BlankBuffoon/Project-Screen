<script setup>

import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
    <RouterView/>

    <div class="container">
        <nav v-if="!$route.meta.hideNavbar">
            <RouterLink to="/">Home</RouterLink>
            <RouterLink to="/admin">Admin Area</RouterLink>
            <RouterLink to="/projects">Projects</RouterLink>
        </nav>
    </div>

</template>

<script>

</script>

<style lang="scss" scoped>
.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

nav {
    a {
        font-size: 24px;
        // text-decoration: none;

        &:not(:last-child) {
            margin-right: 18px;
        }
    }
}
</style>
