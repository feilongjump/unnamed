import { RouteRecordRaw } from 'vue-router'
import App from '@/App.vue'
import administratorRoute from './administrator'

const systemRoute: Array<RouteRecordRaw> = [
  {
    path: 'system',
    name: 'System',
    component: App,
    meta: {
      icon: 'el-icon-odometer',
      title: '系统设置'
    },
    children: [...administratorRoute]
  }
]

export default systemRoute
