import { RouteRecordRaw } from 'vue-router'
import { HomeIcon } from '@heroicons/vue/outline'

const dashboardRoute: Array<RouteRecordRaw> = [
  {
    path: 'dashboard',
    name: 'Backstage.Dashboard',
    component: () => import('@/views/backstage/dashboard/index.vue'),
    meta: {
      title: 'Dashboard',
      icon: HomeIcon,
      activeMenu: 'backstage/dashboard'
    }
  }
]

export default dashboardRoute
