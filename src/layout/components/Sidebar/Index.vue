<template>
  <div class="sidebar-container">
    <Header />
    <div class="sidebar-menu-container">
      <el-scrollbar>
        <el-menu :default-active="activeMenu" router>
          <SidebarItem v-for="route in backstageModuleRoutes" :key="route.path" :item="route" />
        </el-menu>
      </el-scrollbar>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue'
import router from '@/router'
import backstageModuleRoutes from '@/router/backstage_modules/index'
import Header from './Header.vue'
import SidebarItem from './SidebarItem.vue'

const activeMenu = ref<string>(router.currentRoute.value.path)
</script>

<style>
@import '@/styles/backstage/layout/sidebar.css';
</style>
