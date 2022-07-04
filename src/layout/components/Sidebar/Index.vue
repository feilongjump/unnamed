<template>
  <div class="sidebar-container">
    <Header />
    <div class="sidebar-menu-container">
      <el-scrollbar>
        <el-menu router>
          <SidebarItem
            v-for="route in backstageModuleRoutes"
            :key="route.path"
            :item="route"
            :base-path="route.path"
          />
        </el-menu>
      </el-scrollbar>
    </div>
  </div>
</template>

<script lang="ts" setup>
import backstageModuleRoutes from '@/router/backstage_modules/index'
import Header from './Header.vue'
import SidebarItem from './SidebarItem.vue'
</script>

<style scoped>
@import '@/styles/backstage/layout/sidebar.css';
</style>
