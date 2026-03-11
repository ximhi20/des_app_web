import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/views/Home.vue'
import Games from '@/views/Games.vue'
import Worlds from '@/views/Worlds.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/games',
      name: 'games',
      component: Games
    },
    {
      path: '/worlds',
      name: 'worlds',
      component: Worlds
    }
  ]
})

export default router