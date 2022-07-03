import { createApp } from 'vue'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import router from '@/router/index'
import App from './App.vue'

import './styles/index.css'

const app = createApp(App)

app.use(router).use(ElementPlus)

app.mount('#app')
