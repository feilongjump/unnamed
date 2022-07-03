<template>
  <div class="navbar-container">
    <div>
      <ChevronDoubleLeftIcon class="w-5 h-5 cursor-pointer stroke-gray-500" />
    </div>
    <div class="nav-right">
      <div class="keywords-input mr-6">
        <el-input v-model="keywords" placeholder="Search..." :prefix-icon="SearchIcon" />
      </div>
      <BellIcon class="h-6 w-6 stroke-blue-400 mr-6 cursor-pointer" />
      <ChatIcon class="h-6 w-6 stroke-indigo-400 mr-6 cursor-pointer" />
      <img class="h-10 w-10 rounded-full" :src="avatar" />
    </div>
  </div>
</template>

<script lang="ts" setup>
import { BellIcon, ChatIcon, ChevronDoubleLeftIcon, SearchIcon } from '@heroicons/vue/outline'
import avatar from '@/assets/avatar.png'
import { ref } from 'vue'

const keywords = ref('')
</script>

<style>
@import '@/styles/backstage/layout/navbar.css';
</style>
