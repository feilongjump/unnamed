<template>
  <el-dialog
    :title="title"
    v-model="dialogVisible"
    width="30%"
    destroy-on-close
    center
    @close="handleDialog"
  >
    <el-form :model="props.params" label-width="100px">
      <el-form-item label="账户名称">
        <el-input v-model="params.name"></el-input>
      </el-form-item>
      <el-form-item label="币种">
        <el-input v-model="params.currency"></el-input>
      </el-form-item>
      <el-form-item label="开户名">
        <el-input v-model="params.account_name"></el-input>
      </el-form-item>
      <el-form-item label="银行账号">
        <el-input v-model="params.account_number"></el-input>
      </el-form-item>
      <el-form-item label="所属银行">
        <el-input v-model="params.account_bank"></el-input>
      </el-form-item>
      <el-form-item label="银行地址">
        <el-input v-model="params.bank_address"></el-input>
      </el-form-item>
      <el-form-item label="公司地址">
        <el-input v-model="params.company_address"></el-input>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="onSubmit">立即创建</el-button>
      </el-form-item>
    </el-form>
  </el-dialog>
</template>

<script lang="ts" setup>
import { defineProps, defineEmit, watch, ref } from 'vue'
import { ElMessage } from 'element-plus'

const props = defineProps({
  dialogVisible: {
    type: Boolean,
    default: false
  },
  detailsId: {
    type: Number,
    default: 0
  },
  params: {
    type: Object,
    require: true,
    default: {}
  }
})

const title = ref<string>('添加银行信息')

watch(
  () => props.detailsId,
  (newDetailsId, oldDetailsId) => {
    if (newDetailsId > 0) {
      title.value = '编辑 X 银行信息'
    } else {
      title.value = '添加银行信息'
    }
  }
)

// send handle dialog visible status
const emit = defineEmit(['indexHandleDialog'])
const handleDialog = () => {
  emit('indexHandleDialog', false)
}

// Submit
const onSubmit = () => {
  ElMessage.success('创建成功')
  handleDialog()
}
</script>
