
<script setup>

import SingleProject from './SingleProject.vue'

</script>

<template>
    <div class="projects">
        <h1>Projects</h1>
        <div class="wrapper">
            <SingleProject v-for="project in projects" :project="project"/>
        </div>
    </div>
</template>

<script>
  import apiService from '@/services/apiService.js';

  export default {
    data() {
      return {
        projects: [],
      };
    },
    mounted() {
      this.fetchProjects();
    },
    methods: {
      fetchProjects() {
        apiService.get('/projects')
          .then(response => {
            this.projects = response.data;
          })
          .catch(error => {
            console.error(error);
          });
      },
    },
  };
</script>

<style lang="scss" scoped>
    .projects {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        h1 {
            margin-bottom: 30px;
        }
    }

    .wrapper {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-items: center;
        align-items: center;
        gap: 20px;
    }
</style>
