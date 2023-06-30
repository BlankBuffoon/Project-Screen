<script setup>
defineProps({
    title: {
        type: String,
        required: true,
    },

    workers: {
        type: Array,
    }
})
</script>

<template>
    <div class="workers">
        <h3>{{ title }}</h3>
        <div class="workers-list">
            <ul>
                <li v-for='worker in workers'>{{ worker.name }}</li>
            </ul>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.workers-list {
    height: 100%;
    width: 100%;

    display: flex;
    justify-content: center;
    align-items: center;

    ul {
        list-style-type: none;
        display: flex;
        flex-direction: column;

        gap: 12px;
        justify-content: center;
        align-items: center;

        li {
            font-size: 16px;
            text-transform: capitalize;
        }
    }
}

.workers {
    padding: 24px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
    flex: 1 0 0;
    align-self: stretch;
    border: 1px solid #808080;

    h3 {
        font-size: 18px;
        width: 100%;
        text-align: center;
    }
}
</style>
