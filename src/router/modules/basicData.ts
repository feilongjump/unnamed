import { RouteRecordRaw } from 'vue-router'
import App from '@/App.vue'
import producerRoute from './producer'

const basicDataRoute: Array<RouteRecordRaw> = [
  {
    path: 'basic-data',
    name: 'BasicData',
    component: App,
    meta: {
      icon: 'el-icon-odometer',
      title: '基础数据'
    },
    children: [...producerRoute]
  }
]

export default basicDataRoute
