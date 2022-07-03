<template>
  <div class="flex flex-col xl:flex-row">
    <div class="xl:h-screen xl:max-w-3xl xl:ml-16 flex justify-start xl:justify-center flex-col">
      <div class="hidden h-1/2 pt-20 xl:flex flex-col justify-center items-center">
        <p class="mb-4">
          <span class="text-3xl font-extrabold">Welcome to back!</span>
        </p>
        <p class="text-gray-500 font-bold">
          <span> One morning, when Gregor Samsa woke from troubled dreams, </span>
          <br />
          <span>he found himself transformed in his bed in.</span>
        </p>
      </div>
      <div class="lg:h-1/2 xl:pb-5 flex justify-center xl:justify-start items-end">
        <img class="w-96 lg:w-1/2 xl:w-full" :src="LoginImg" />
      </div>
    </div>
    <div class="w-full flex justify-center items-center">
      <!-- Login Box -->
      <div class="login-form-box">
        <p class="font-bold text-2xl text-center mb-4">
          <span>Hello 👋👋</span>
        </p>
        <p class="text-gray-500 font-bold text-sm text-center">
          <span> A day's work will bring you a night's sleep,</span>
          <br />
          <span> a lifetime of hard work will bring you a long and happy sleep.</span>
        </p>
        <div class="mt-12">
          <div class="mb-8">
            <label class="text-sm font-semibold">Username</label>
            <el-input v-model="form.name" class="login-input" placeholder="用户名/邮箱/手机号码" />
          </div>
          <div class="mb-16">
            <label class="text-sm font-semibold">Password</label>
            <el-input
              v-model="form.password"
              class="login-input"
              placeholder="密码"
              show-password
            />
          </div>

          <div class="flex justify-center">
            <el-button type="primary" class="sign-btn">Sign In</el-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import LoginImg from '@/assets/auth/login.png'
import { reactive } from 'vue'

const form = reactive({
  name: '',
  password: ''
})
</script>

<style>
@import '@/styles/auth/login.css';
</style>
