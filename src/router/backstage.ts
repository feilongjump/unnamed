import { RouteRecordRaw } from 'vue-router'
import Layout from '@/layout/index.vue'

const backstageRouter: Array<RouteRecordRaw> = [
  {
    path: '/backstage',
    name: 'Backstage',
    redirect: { name: 'Backstage.Dashboard' },
    component: Layout,
    children: [
      {
        path: 'dashboard',
        name: 'Backstage.Dashboard',
        component: () => import('@/views/backstage/dashboard/index.vue')
      }
    ]
  }
]

export default backstageRouter
