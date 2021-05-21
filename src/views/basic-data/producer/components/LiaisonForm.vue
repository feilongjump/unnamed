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
      <el-form-item label="联系人">
        <el-input v-model="params.liaison"></el-input>
      </el-form-item>
      <el-form-item label="手机号码">
        <el-input v-model="params.phone_number"></el-input>
      </el-form-item>
      <el-form-item label="电话号码">
        <el-input v-model="params.telephone_number"></el-input>
      </el-form-item>
      <el-form-item label="传真">
        <el-input v-model="params.fax"></el-input>
      </el-form-item>
      <el-form-item label="邮箱">
        <el-input v-model="params.email"></el-input>
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

const title = ref<string>('添加联系人')

watch(
  () => props.detailsId,
  (newDetailsId, oldDetailsId) => {
    if (newDetailsId > 0) {
      title.value = '编辑 X 联系人信息'
    } else {
      title.value = '添加联系人'
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
