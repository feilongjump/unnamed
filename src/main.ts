import { createApp } from 'vue'
import {
  ElAside,
  ElAvatar,
  ElBadge,
  ElButton,
  ElCard,
  ElCol,
  ElContainer,
  ElDatePicker,
  ElDialog,
  ElDropdown,
  ElDropdownItem,
  ElDropdownMenu,
  ElForm,
  ElFormItem,
  ElHeader,
  ElIcon,
  ElInput,
  ElMain,
  ElMenu,
  ElMenuItem,
  ElPopover,
  ElPopper,
  ElRow,
  ElSubmenu,
  ElTable,
  ElTableColumn,
  ElTag,
  ElUpload
} from 'element-plus'
import router from './router'
import App from './App.vue'

// styles
import './styles/index.scss'
// element-plus styles
import 'element-plus/lib/theme-chalk/display.css'

const app = createApp(App)

// Element Plus
const components = [
  ElAside,
  ElAvatar,
  ElBadge,
  ElButton,
  ElCard,
  ElCol,
  ElContainer,
  ElDatePicker,
  ElDialog,
  ElDropdown,
  ElDropdownItem,
  ElDropdownMenu,
  ElForm,
  ElFormItem,
  ElHeader,
  ElIcon,
  ElInput,
  ElMain,
  ElMenu,
  ElMenuItem,
  ElPopover,
  ElPopper,
  ElRow,
  ElSubmenu,
  ElTable,
  ElTableColumn,
  ElTag,
  ElUpload
]
components.forEach((component) => {
  app.component(component.name, component)
})

app.use(router).mount('#app')
