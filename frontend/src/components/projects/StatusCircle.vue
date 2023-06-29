<script lang="ts" setup>
defineProps({
    status: {
        type: Number,
    },
})
</script>

<template>
    <div v-if="status == 0" class="circle red"></div>
    <div v-else-if="status == 1" class="circle yellow"></div>
    <div v-else-if="status == 2" class="circle green"></div>
    <div v-else-if="status == 3" class="circle white"></div>
</template>

<style lang="scss" scoped>
.circle {
    min-width: 20px;
    min-height: 20px;
    border-radius: 20px;

    &.red {
        background: var(--status-red-c);
    }
    &.yellow {
        background: var(--status-yellow-c);
    }
    &.green {
        background: var(--status-green-c);
    }
    &.white {
        background: var(--status-white-c);
    }
}
</style>
