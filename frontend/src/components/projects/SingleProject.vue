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
        <div class="left">
            <div class="descr">
                <div class="title">
                    <StatusCircle :status="project.status"/>
                    <h2>{{ project.name }}</h2>
                </div>
                <p>{{ project.description }}</p>
            </div>
            <div class="workers">
                <div class="maintainers">
                    <h3>maintainers:</h3>
                    <div class="workers-list">
                        <ul>
                            <li>Alex Test</li>
                            <li>Alex Test</li>
                            <li>Alex Test</li>
                        </ul>
                    </div>
                </div>
                <div class="developers">
                    <h3>Developers:</h3>
                    <div class="workers-list">
                        <ul>
                            <li>Alex Test</li>
                            <li>Alex Test</li>
                            <li>Alex Test</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.item {
    width: 700px;
    height: 375px;
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
    min-height: 125px;

    p {
        width: 100%;
    }
}

.workers {
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    gap: 25px;


    &-list {
        height: 100%;
        width: 100%;

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
}

.developers, .maintainers {
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

.title {
    display: flex;
    gap: 14px;
    align-items: center;

    h2 {
        font-size: 36px;
        width: 100%;
    }
}

</style>
