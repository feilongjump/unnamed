import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'

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
  {
    path: '/test',
    component: () => import('@/views/test.vue')
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
