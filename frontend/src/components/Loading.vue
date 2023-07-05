<script setup>

</script>

<template>
    <div class="l-screen">
        <h1 class="l-text">Loading</h1>
    </div>
</template>

<style lang="scss" scoped>
.l-screen {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
    height: 100%;

    z-index: 10;

    display: flex;
    justify-content: center;
    align-items: center;

    background-color: var(--background-c);

    h1 {
        font-size: 52px;
    }
}
</style>

<script>

export default {
    mounted() {
        this.loadingAnimation();
    },
    methods: {
        loadingAnimation() {
            let i = 0;
            let text = document.querySelector('.l-text');

            function addDot() {
                if (i == 3) {
                    text.innerHTML = 'Loading';
                    i = 0;
                }
                else {
                    text.append('.');
                    i++;
                }
            }

            setInterval(addDot, 800);
        }
    },
}

</script>
