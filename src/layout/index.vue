<template>
  <el-container class="h-full">
    <Sidebar class="sidebar-container" />
    <el-container class="main-container" direction="vertical">
      <Navbar />
      <el-main class="app-main"> <router-view /> </el-main>
    </el-container>
  </el-container>
</template>

<script lang="ts" setup>
import Sidebar from './components/Sidebar/Index.vue'
import Navbar from './components/Navbar.vue'
</script>
