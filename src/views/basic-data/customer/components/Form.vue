<template>
  <el-card class="box-card">
    <template #header>
      <div class="flex items-center justify-between">
        <span>基础信息</span>
        <el-button type="primary" @click="onSubmit">立即创建</el-button>
      </div>
    </template>
    <el-form :model="params" label-width="90px">
      <el-row :gutter="30">
        <el-col :span="6">
          <el-form-item label="客户">
            <el-input v-model="params.code"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item label="客户全称">
            <el-input v-model="params.name"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item label="客户分类">
            <el-input v-model="params.category"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item label="业务员">
            <el-input v-model="params.purchaser"></el-input>
          </el-form-item>
        </el-col>
      </el-row>
      <el-row :gutter="30">
        <el-col :span="12">
          <el-row :gutter="30">
            <el-col :span="12">
              <el-form-item label="跟单员">
                <el-input v-model="params.purchaser"></el-input>
              </el-form-item>
            </el-col>
            <el-col :span="12">
              <el-form-item label="业务员">
                <el-input v-model="params.purchaser"></el-input>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row :gutter="20">
            <el-col :span="8">
              <el-form-item label="客户等级">
                <el-input v-model="params.purchaser"></el-input>
              </el-form-item>
            </el-col>
            <el-col :span="8">
              <el-form-item label="币种">
                <el-input v-model="params.purchaser"></el-input>
              </el-form-item>
            </el-col>
            <el-col :span="8">
              <el-form-item label="付款方式">
                <el-input v-model="params.purchaser"></el-input>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <el-col>
              <el-form-item label="厂家地址">
                <el-input v-model="params.address"></el-input>
              </el-form-item>
            </el-col>
          </el-row>
        </el-col>
        <el-col :span="12">
          <el-form-item label="备注">
            <el-input
              type="textarea"
              :autosize="{ minRows: 7, maxRows: 12 }"
              v-model="params.remarks"
            ></el-input>
          </el-form-item>
        </el-col>
      </el-row>
    </el-form>
  </el-card>
</template>

<script lang="ts" setup>
import { defineProps } from 'vue'

const props = defineProps({
  params: {
    type: Object,
    require: true,
    default: {}
  }
})

const onSubmit = () => {
  console.info('create')
}
</script>
