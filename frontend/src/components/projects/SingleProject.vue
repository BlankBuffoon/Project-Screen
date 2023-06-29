<script setup>
defineProps({
    project: {
        type: Object,
    }
})
</script>

<template>
    <div class="item">
        <div class="left">
            <h2>{{ project.name }}</h2>
            <p class="descr">{{ project.description }}</p>
            <div class="meta">
                <div class="meta-item">
                    <p class="bullet">Status: </p>
                    <span>{{ project.status }}</span>
                </div>

                <div class="meta-item">
                    <p class="bullet">Maintainers:</p>
                    <ul>
                        <!-- <li>{{$maintainer->name}}</li> -->
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                    </ul>
                </div>

                <div class="meta-item">
                    <p class="bullet">Developers:</p>
                    <ul>
                        <!-- <li>{{$developer->name}}</li> -->
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="item-expiration">
                <p>/</p>
            </div>
            <p>Expiration date:</p>
            <p>{{ project.expiration_date }}</p>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.item {
    min-height: 100%;
    min-width: 100%;
    border-radius: 20px;
    border: 2px solid rgb(102, 102, 102);
    padding: 24px;

    display: flex;
    gap: 50px;
    align-items: center;
    justify-content: space-between;

    h2 {
        margin-bottom: 8px;
    }

    .bullet {
        color: rgb(110, 110, 110);
        padding: 4px 8px;
        border-radius: 20px;
        border: 2px solid rgb(110, 110, 110);
        margin-right: 20px;
        height: fit-content;
        width: fit-content;
    }

    .descr {
        margin-bottom: 18px;
    }
}

.meta {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 20px;

    &-item {
        display: grid;
        grid-template-columns: 150px 200px;
        align-items: center;

        &:not(:last-child) {
            padding-bottom: 20px;
            border-bottom: 2px dashed rgb(169, 169, 169);
        }
    }

    ul {
        list-style-type: none;
        display: flex;
        flex-direction: column;

        li:not(:last-child) {
            margin-bottom: 6px;
        }
    }
}


.right {
    .item-expiration {
        width: 150px;
        height: 150px;
        border-radius: 15px;
        border: 2px solid rgb(140, 140, 140);

        display: flex;
        justify-content: center;
        align-items: center;

        margin-bottom: 8px;

        p {
            font-size: 80px;
        }
    }

    p {
        text-align: center;
    }
}

</style>
