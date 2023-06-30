<script setup>
import Expiration from './Expiration.vue';
import StatusCircle from './StatusCircle.vue';
import WorkerList from './WorkerList.vue';

defineProps({
    project: {
        type: Object,
    }
})
</script>

<template>
    <div class="item">
        <div class="left">
            <div class="descr">
                <div class="title">
                    <StatusCircle :status="project.status"/>
                    <h2>{{ project.name }}</h2>
                </div>
                <p>{{ project.description }}</p>
            </div>
            <div class="workers-wrapper">
                <WorkerList title="maintainers:" :workers="project.maintainers"/>
                <WorkerList title="developers:" :workers="project.developers"/>
            </div>
        </div>
        <div class="right">
            <Expiration :remaining-days="project.remaining_days" :expiration-date="project.expiration_date"/>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.item {
    width: 710px;
    min-height: 375px;
    border-radius: 15px;
    border: 3px solid #4E4E4E;
    padding: 30px;

    display: grid;
    grid-template-columns: 450px 160px;
    gap: 50px;
}

.left {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 25px;
    flex-shrink: 0;
    align-self: stretch;
}

.descr {
    width: 100%;

    p {
        width: 100%;
        margin-top: 12px;
    }
}

.workers-wrapper {
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    gap: 25px;
}

.title {
    display: flex;
    gap: 14px;
    align-items: center;

    h2 {
        font-size: 36px;
        width: 100%;
    }
}

.right {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
}


</style>
