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
          <el-form-item label="编号">
            <el-input v-model="params.code"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item label="名称">
            <el-input v-model="params.name"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item label="分类">
            <el-input v-model="params.category"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item label="规格型号">
            <el-input v-model="params.spec"></el-input>
          </el-form-item>
        </el-col>
      </el-row>
      <el-row :gutter="30">
        <el-col :span="12">
          <el-row :gutter="30">
            <el-col :span="12">
              <el-form-item label="单位">
                <el-input v-model="params.unit"></el-input>
              </el-form-item>
            </el-col>
            <el-col :span="12">
              <el-form-item label="单价">
                <el-input v-model="params.unit_price"></el-input>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row :gutter="30">
            <el-col :span="12">
              <el-form-item label="物料类型">
                <el-input v-model="params.type"></el-input>
              </el-form-item>
            </el-col>
            <el-col :span="12">
              <el-form-item label="厂家">
                <el-input v-model="params.producer"></el-input>
              </el-form-item>
            </el-col>
          </el-row>
        </el-col>
        <el-col :span="12">
          <el-form-item label="备注">
            <el-input
              type="textarea"
              :autosize="{ minRows: 6, maxRows: 12 }"
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
