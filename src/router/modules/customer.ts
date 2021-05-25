import { RouteRecordRaw } from 'vue-router'

const customerRoute: Array<RouteRecordRaw> = [
  {
    path: 'customers',
    name: 'Customer',
    component: () => import('@/views/basic-data/customer/index.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '客户资料'
    }
  },
  {
    path: 'customers/create',
    name: 'Customer.Create',
    component: () => import('@/views/basic-data/customer/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '添加客户资料',
      activeMenu: '/basic-data/customers',
      hidden: true
    }
  },
  {
    path: 'customers/:id(\\d+)/edit',
    name: 'Customer.Edit',
    component: () => import('@/views/basic-data/customer/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '编辑客户资料',
      activeMenu: '/basic-data/customers',
      hidden: true
    }
  },
  {
    path: '/customers/:id(\\d+)',
    name: 'Customer.Show',
    component: () => import('@/views/basic-data/customer/details.vue'),
    meta: {
      icon: 'el-icon-odometer',
      title: '编辑客户资料',
      activeMenu: '/basic-data/customers',
      hidden: true
    }
  }
]

export default customerRoute
