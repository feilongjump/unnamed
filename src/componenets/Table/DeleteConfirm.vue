<template>
  <el-dropdown-item divided @click="open">
    <span class="text-red-400"> <i class="el-icon-delete"></i>Delete</span>
  </el-dropdown-item>
</template>

<script lang="ts" setup>
import { ElMessage, ElMessageBox } from 'element-plus'

const open = () => {
  ElMessageBox.confirm('此操作将永久删除该数据, 是否继续?', '', {
    confirmButtonText: '确定',
    cancelButtonText: '取消',
    type: 'warning',
    center: true,
    iconClass: 'el-icon-question'
  })
    .then(() => {
      ElMessage.success('删除成功')
    })
    .catch(() => {
      ElMessage('已取消删除')
    })
}
</script>
