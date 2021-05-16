<template>
  <el-aside>
    <Header />
    <el-menu :default-active="activeMenu" mode="vertical" router>
      <SidebarItem v-for="item in constantRoutes" :key="item.path" :item="item" />
    </el-menu>
  </el-aside>
</template>

<script lang="ts" setup>
import router, { constantRoutes } from '@/router'
import { computed } from 'vue'
import Header from './Header.vue'
import SidebarItem from './SidebarItem.vue'

const activeMenu = computed(() => {
  const { currentRoute } = router
  const { meta, path } = currentRoute.value

  if (meta.activeMenu) {
    return meta.activeMenu
  }
  return path
})
</script>
