<template>
  <el-dropdown trigger="click">
    <span class="el-dropdown-link">
      <i class="el-icon-more-outline rotate-90 cursor-pointer"></i>
    </span>
    <template #dropdown>
      <el-dropdown-menu>
        <el-dropdown-item @click="editAction">
          <i class="el-icon-edit-outline"></i>Edit
        </el-dropdown-item>
        <DeleteConfirm />
      </el-dropdown-menu>
    </template>
  </el-dropdown>
</template>

<script lang="ts" setup>
import { defineEmit } from 'vue'
import DeleteConfirm from './DeleteConfirm.vue'

const emit = defineEmit(['editAction'])
// Edit action
const editAction = () => {
  emit('editAction')
}
</script>
