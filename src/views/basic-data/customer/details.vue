<template>
  <Form :params="params" />
  <div class="mt-6">
    <Liaisons :liaisons="params.liaisons" />
  </div>
  <div class="mt-6">
    <BankAccounts :bank_accounts="params.bank_accounts" />
  </div>
</template>

<script lang="ts" setup>
import { reactive } from 'vue'
import Form from './components/Form.vue'
import Liaisons from './components/Liaisons.vue'
import BankAccounts from './components/BankAccounts.vue'

const params = reactive({
  code: '',
  name: '',
  category: '',
  purchaser: '',
  address: '',
  remarks: '',
  bank_accounts: [
    {
      id: 1,
      name: '张大牛的银行卡',
      currency: 'USTD',
      account_name: '张大牛',
      account_number: '8888 8888 8888 8888',
      account_bank: '太空银行',
      bank_address: '宇宙中',
      company_address: '暂定火星'
    }
  ],
  liaisons: [
    {
      id: 1,
      liaison: '大灰牛',
      phone_number: '13838389438',
      telephone_number: '400-110-120',
      fax: '119',
      email: 'email@example.com',
      primary_contact: true
    }
  ]
})
</script>
