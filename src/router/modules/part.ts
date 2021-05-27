import { RouteRecordRaw } from 'vue-router'

const partRoute: Array<RouteRecordRaw> = [
  {
    path: 'parts',
    name: 'Part',
    component: () => import('@/views/basic-data/part/index.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '配件信息'
    }
  },
  {
    path: 'parts/create',
    name: 'Part.Create',
    component: () => import('@/views/basic-data/part/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '添加配件信息',
      activeMenu: '/basic-data/parts',
      hidden: true
    }
  },
  {
    path: 'parts/:id(\\d+)/edit',
    name: 'Part.Edit',
    component: () => import('@/views/basic-data/part/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '编辑配件信息',
      activeMenu: '/basic-data/parts',
      hidden: true
    }
  },
  {
    path: '/parts/:id(\\d+)',
    name: 'Part.Show',
    component: () => import('@/views/basic-data/part/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '编辑配件信息',
      activeMenu: '/basic-data/parts',
      hidden: true
    }
  }
]

export default partRoute
