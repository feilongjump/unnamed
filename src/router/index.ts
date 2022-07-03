import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import backstageRouter from './backstage'

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    redirect: 'login'
  },
  {
    path: '/login',
    name: 'Login',
    component: () => import('@/views/auth/login.vue')
  },
  ...backstageRouter
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
