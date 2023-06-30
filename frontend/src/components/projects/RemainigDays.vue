<script setup>
defineProps({
    days: {
        type: Number,
        required: true,
    }
})
</script>

<template>
    <div class="remaining-days">
        <span v-if="days <= 7" class="days-counter red">{{ days }}</span>
        <span v-else-if="days <= 14" class="days-counter yellow">{{ days }}</span>
        <span v-else-if="days > 14" class="days-counter green">{{ days }}</span>
    </div>
</template>

<style lang="scss" scoped>
.remaining-days {
    display: flex;
    width: 150px;
    height: 150px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    border: 2px solid var(--border-c);
}

.days-counter {
    font-size: 96px;
    color: #ffffff;

    &.red {
        color: var(--status-red-c);
    }

    &.yellow {
        color: var(--status-yellow-c);
    }

    &.green {
        color: var(--status-green-c);
    }
}
</style>
