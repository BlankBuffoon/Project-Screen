import { createRouter, createWebHistory } from 'vue-router'
import Projects from '../views/ProjectsView.vue'
import Home from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
      path: '/projects',
      name: 'projects',
      component: Projects
    },
  ]
})

export default router
