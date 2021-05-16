<template>
  <el-row class="w-full h-full">
    <el-col :span="16">
      <img class="w-full h-full object-cover" :src="loginImg" alt="" />
    </el-col>
    <el-col :span="8" class="w-full h-full">
      <el-row type="flex" align="middle" justify="center" class="h-full w-full">
        <el-col class="max-w-sm px-6">
          <div class="mb-6 text-center">
            <span class="text-2xl">Welcome Back :)</span>
          </div>
          <el-form class="el-input-border-b" ref="formRef" :model="form" label-position="top">
            <el-form-item>
              <el-input v-model="form.username" placeholder="account"></el-input>
            </el-form-item>
            <el-form-item>
              <el-input show-password v-model="form.password" placeholder="password"></el-input>
            </el-form-item>
            <el-form-item>
              <el-button type="primary" @click="onSubmit">Sign in</el-button>
            </el-form-item>
          </el-form>
        </el-col>
      </el-row>
    </el-col>
  </el-row>
</template>

<script lang="ts" setup>
import loginImg from '@/assets/auth/login.jpg'
import { reactive, ref } from 'vue'
import router from '@/router'

const formRef = ref(null)

const form = reactive({
  username: '',
  password: ''
})

const onSubmit = () => {
  console.log('submit!')
  router.push({ path: '/' })
}
</script>
