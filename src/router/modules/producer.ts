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
  },
  {
    path: 'producers/create',
    name: 'Producer.Create',
    component: () => import('@/views/basic-data/producer/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '添加厂家资料',
      activeMenu: '/basic-data/producers',
      hidden: true
    }
  },
  {
    path: 'producers/:id(\\d+)/edit',
    name: 'Producer.Edit',
    component: () => import('@/views/basic-data/producer/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '编辑厂家资料',
      activeMenu: '/basic-data/producers',
      hidden: true
    }
  },
  {
    path: '/producers/:id(\\d+)',
    name: 'Producer.Show',
    component: () => import('@/views/basic-data/producer/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '编辑厂家资料',
      activeMenu: '/basic-data/producers',
      hidden: true
    }
  }
]

export default producerRoute
