import { RouteRecordRaw } from 'vue-router'
import adminRoute from './admin'
import dashboardRoute from './dashboard'

const backstageModuleRoutes: Array<RouteRecordRaw> = [...dashboardRoute, ...adminRoute]

export default backstageModuleRoutes
