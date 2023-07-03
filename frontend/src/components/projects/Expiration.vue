<script setup>
import RemainigDays from './RemainigDays.vue';

defineProps({
    remainingDays: {
        type: Number,
        required: true,
    },

    expirationDate: {
        type: String,
        required: true,
    }
})
</script>

<template>
    <RemainigDays :days="remainingDays"/>
    <div class="expiration-days">
        <h3>Expiration date:</h3>
        <p>{{ expirationDate }}</p>
    </div>
</template>

<style lang="scss" scoped>

.expiration-days {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;

    h3 {
        font-size: 16px;
    }

    p {
        font-size: 14px;
    }
}
</style>
