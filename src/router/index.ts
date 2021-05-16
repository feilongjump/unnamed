import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import Layout from '../layout/index.vue'
import systemRoute from './modules/system'

export const constantRoutes: Array<RouteRecordRaw> = [
  {
    path: 'dashboard',
    name: 'Dashboard',
    component: () => import('@/views/dashboard/index.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: 'Dashboard'
    }
  },
  ...systemRoute
]

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    component: Layout,
    redirect: { name: 'Dashboard' },
    children: constantRoutes
  },
  {
    path: '/auth/login',
    name: 'Login',
    component: () => import('@/views/auth/login.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
