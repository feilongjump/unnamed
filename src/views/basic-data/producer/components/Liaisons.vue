<template>
  <el-card>
    <el-table :data="liaisons">
      <el-table-column type="selection"> </el-table-column>
      <el-table-column type="index" label="序号" :index="+1"></el-table-column>
      <el-table-column prop="liaison" label="联系人"></el-table-column>
      <el-table-column prop="phone_number" label="手机号码"></el-table-column>
      <el-table-column prop="telephone_number" label="电话号码"></el-table-column>
      <el-table-column prop="fax" label="传真"></el-table-column>
      <el-table-column prop="email" label="邮箱"></el-table-column>
      <el-table-column prop="primary_contact" label="主要联系人" align="center">
        <template #default="scope">
          <el-switch v-model="scope.row.primary_contact" active-color="#13ce66"></el-switch>
        </template>
      </el-table-column>
      <el-table-column label="操作" width="120" align="center">
        <template #header>
          <el-button size="mini" icon="el-icon-plus" @click="handleDialog(true)">添加</el-button>
        </template>
        <template #default="scope">
          <TableActions @edit-action="handleDialog(true, scope.row)" />
        </template>
      </el-table-column>
    </el-table>
  </el-card>
  <LiaisonForm
    :detailsId="rowId"
    :dialogVisible="dialogVisible"
    :params="params.liaison"
    @index-handle-dialog="handleDialog"
  />
</template>

<script lang="ts" setup>
import { defineProps, reactive, ref } from 'vue'
import TableActions from '@/componenets/Table/TableActions.vue'
import LiaisonForm from './LiaisonForm.vue'

const params = reactive({
  liaison: {}
})

const props = defineProps({
  liaisons: {
    type: Array,
    require: true
  }
})

// Details component dialog visible status
const rowId = ref<number>(0)
const dialogVisible = ref<boolean>(false)
const handleDialog = (isDialogVisible: boolean, row: any = {}) => {
  dialogVisible.value = isDialogVisible
  rowId.value = row.id ? row.id : 0
  params.liaison = row
}
</script>
