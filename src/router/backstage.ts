import { RouteRecordRaw } from 'vue-router'
import Layout from '@/layout/index.vue'
import backstageModuleRoutes from './backstage_modules'

const backstageRouter: Array<RouteRecordRaw> = [
  {
    path: '/backstage',
    name: 'Backstage',
    redirect: { name: 'Backstage.Dashboard' },
    component: Layout,
    children: backstageModuleRoutes
  }
]

export default backstageRouter
