<script setup>
import StatusCircle from './StatusCircle.vue';

defineProps({
    project: {
        type: Object,
    }
})
</script>

<template>
    <div class="item">
        <div class="title">
            <StatusCircle :status="project.status"/>
            <h2>{{ project.name }}</h2>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.item {
    min-height: 100%;
    min-width: 100%;
    border-radius: 15px;
    border: 3px solid #4E4E4E;
    padding: 30px;

    display: flex;
    gap: 50px;
    align-items: center;
    justify-content: space-between;
}

.title {
    display: flex;
    gap: 14px;
    align-items: center;

    h2 {
        width: 100%;
    }
}

</style>
