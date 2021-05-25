import { RouteRecordRaw } from 'vue-router'
import App from '@/App.vue'
import producerRoute from './producer'
import customerRoute from './customer'

const basicDataRoute: Array<RouteRecordRaw> = [
  {
    path: 'basic-data',
    name: 'BasicData',
    component: App,
    meta: {
      icon: 'el-icon-odometer',
      title: '基础数据'
    },
    children: [...producerRoute, ...customerRoute]
  }
]

export default basicDataRoute
