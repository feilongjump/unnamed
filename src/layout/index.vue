<template>
  <div class="layout-container">
    <Sidebar />

    <div class="right-container">
      <el-scrollbar>
        <Navbar />

        <div class="main-container">
          <router-view />
        </div>
      </el-scrollbar>
    </div>
  </div>
</template>

<script setup lang="ts">
import Sidebar from './components/Sidebar.vue'
import Navbar from './components/Navbar.vue'
</script>

<style scoped>
@import '@/styles/backstage/layout/index.css';
</style>
