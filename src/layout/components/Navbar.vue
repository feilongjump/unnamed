<template>
  <el-header>
    <div class="h-full w-full flex items-center justify-end">
      <div class="mr-6">
        <el-input class="el-input-border-b" v-model="keywords" placeholder="想找点啥"></el-input>
      </div>
      <div class="mr-6">
        <el-badge is-dot type="danger" class="cursor-pointer">
          <i class="el-icon-bell text-2xl"></i>
        </el-badge>
      </div>
      <div>
        <el-dropdown trigger="click">
          <div class="el-dropdown-link flex items-center cursor-pointer">
            <span class="mr-2 text-gray-400 hidden-sm-and-down">Administrator</span>
            <el-avatar :src="avatar"></el-avatar>
          </div>
          <template #dropdown>
            <el-dropdown-menu>
              <el-dropdown-item>黄金糕</el-dropdown-item>
              <el-dropdown-item>狮子头</el-dropdown-item>
              <el-dropdown-item>螺蛳粉</el-dropdown-item>
              <el-dropdown-item disabled>双皮奶</el-dropdown-item>
              <router-link :to="{ name: 'Login' }">
                <el-dropdown-item divided>退出 </el-dropdown-item>
              </router-link>
            </el-dropdown-menu>
          </template>
        </el-dropdown>
      </div>
    </div>
  </el-header>
</template>

<script lang="ts" setup>
import { ref } from 'vue'

const avatar = 'https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png'

const keywords = ref<string>('')
</script>
