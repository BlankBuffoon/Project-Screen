
<script setup>

import SingleProject from './SingleProject.vue'
import Loading from '@/components/Loading.vue'

</script>

<template>
    <Loading v-show="loading" />

    <div class="projects">
        <Swiper
        :slides-per-view="2"
        :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
        }"
        :short-swipes="true"
        :grid="{
            rows: 2,
        }"
        :spaceBetween="20"
        :pagination="{ clickable: true }"
        @swiper="onSwiper"
        @slideChange="onSlideChange"
        :modules="modules"
        v-if="!loading"
        >
            <swiper-slide v-for="project, index in projects">
                <SingleProject :project="project" :index="index"/>
            </swiper-slide>
        </Swiper>
    </div>
</template>

<script>
import apiService from '@/services/apiService.js';

import { Grid, Pagination, Autoplay } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';

import 'swiper/css/grid';
// import 'swiper/css/pagination'
import '@/assets/swiper-pagination.scss'

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            projects: [],
            modules: [ Grid, Pagination, Autoplay ],
            loading: true,
        };
    },
    mounted() {
        setInterval(this.fetchProjects, 10000);
    },
    methods: {
        fetchProjects() {
        apiService.get('/projects/getAllDetailed')
            .then(response => {
                this.projects = response.data;
                this.loading = false;
            })
            .catch(error => {
                console.error(error);
            });
        },
        onSlideChange() {
            console.log('slide change');
        },
        onSwiper(swiper) {
            console.log(swiper);
        },
    },
};
</script>

<style lang="scss" scoped>

    .swiper {
        height: 850px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide {
        height: 375px;
        width: 710px;

        /* Center slide text vertically */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-pagination-bullet {
        width: 20px;
        height: 20px;
    }

    .projects {
        display: flex;
        justify-content: center;
        align-items: center;

        height: 100vh;

        margin-top: auto;
        margin-bottom: auto;

        h1 {
            margin-bottom: 30px;
        }
    }
</style>
