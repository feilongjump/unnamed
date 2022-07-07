import { RouteRecordRaw } from 'vue-router'
import App from '@/App.vue'
import { HomeIcon } from '@heroicons/vue/outline'

const adminRoute: Array<RouteRecordRaw> = [
  {
    path: 'admin',
    name: 'Backstage.Admin',
    redirect: { name: 'Backstage.Admin.User' },
    component: App,
    meta: {
      title: 'Admin',
      icon: HomeIcon
    },
    children: [
      {
        path: 'users',
        name: 'Backstage.Admin.User',
        component: () => import('@/views/backstage/admin/user/index.vue'),
        meta: {
          title: 'users'
        }
      }
    ]
  }
]

export default adminRoute
