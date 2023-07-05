<script setup>

</script>

<template>
    <main>
        <div class="container">
            <h1>Добро пожаловать в <br> Project Screen!</h1>
            <p>Куда отправимся сегодня?</p>
        </div>
    </main>
</template>

<style lang="scss" scoped>
    main {
        width: 100%;

        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: start;
    }

    h1 {
        font-size: 48px;
        text-align: center;
        margin-bottom: 8px;
    }

    p {
        text-align: center;
        margin-bottom: 10px;
        font-size: 28px;
    }
</style>
