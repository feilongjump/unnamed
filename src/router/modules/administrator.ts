import { RouteRecordRaw } from 'vue-router'

const administratorRoute: Array<RouteRecordRaw> = [
  {
    path: 'administrators',
    name: 'Administrator',
    component: () => import('@/views/system/administrator/index.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '管理员'
    }
  }
]

export default administratorRoute
