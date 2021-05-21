<template>
  <el-card>
    <el-table :data="bank_accounts">
      <el-table-column type="selection"> </el-table-column>
      <el-table-column type="index" label="序号" :index="+1"></el-table-column>
      <el-table-column prop="name" label="账户名称"></el-table-column>
      <el-table-column prop="currency" label="币种"></el-table-column>
      <el-table-column prop="account_name" label="开户名"></el-table-column>
      <el-table-column prop="account_number" label="银行账号"></el-table-column>
      <el-table-column prop="account_bank" label="所属银行"></el-table-column>
      <el-table-column prop="bank_address" label="银行地址"></el-table-column>
      <el-table-column prop="company_address" label="公司地址"></el-table-column>
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
  <BankAccountForm
    :detailsId="rowId"
    :dialogVisible="dialogVisible"
    :params="params.bank_account"
    @index-handle-dialog="handleDialog"
  />
</template>

<script lang="ts" setup>
import { defineProps, reactive, ref } from 'vue'
import TableActions from '@/componenets/Table/TableActions.vue'
import BankAccountForm from './BankAccountForm.vue'

interface BankAccountParams {
  id: number
  name: string
  currency: string
  account_name: string
  account_number: string
  account_bank: string
  bank_address: string
  company_address: string
}

const params = reactive({
  bank_account: <BankAccountParams>{}
})

const props = defineProps({
  bank_accounts: {
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
  params.bank_account = row
}
</script>
