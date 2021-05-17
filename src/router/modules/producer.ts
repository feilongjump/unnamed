import { RouteRecordRaw } from 'vue-router'

const producerRoute: Array<RouteRecordRaw> = [
  {
    path: 'producers',
    name: 'Producer',
    component: () => import('@/views/basic-data/producer/index.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '厂家资料'
    }
  }
]

export default producerRoute
