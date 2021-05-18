<template>
  <el-row :gutter="40">
    <el-col :span="16">
      <el-card class="box-card">
        <template #header>
          <div>
            <span>基础信息</span>
          </div>
        </template>
        <el-form :model="form" label-width="90px">
          <el-row :gutter="80">
            <el-col :span="12">
              <el-form-item label="厂家编号">
                <el-input v-model="form.code"></el-input>
              </el-form-item>
              <el-form-item label="厂家名称">
                <el-input v-model="form.name"></el-input>
              </el-form-item>
              <el-form-item label="厂家分类">
                <el-input v-model="form.category"></el-input>
              </el-form-item>
              <el-form-item label="采购负责人">
                <el-input v-model="form.purchaser"></el-input>
              </el-form-item>
              <el-form-item label="厂家地址">
                <el-input v-model="form.address"></el-input>
              </el-form-item>
            </el-col>
            <el-col :span="12">
              <el-form-item label="备注">
                <el-input
                  type="textarea"
                  :autosize="{ minRows: 6, maxRows: 12 }"
                  v-model="form.remarks"
                ></el-input>
              </el-form-item>
            </el-col>
          </el-row>
          <el-form-item>
            <el-button type="primary" @click="onSubmit">立即创建</el-button>
            <el-button>取消</el-button>
          </el-form-item>
        </el-form>
      </el-card>
      <div class="mt-6">
        <el-table :data="tableData">
          <el-table-column type="selection"> </el-table-column>
          <el-table-column type="index" label="序号" :index="+1"></el-table-column>
          <el-table-column prop="code" label="编号"></el-table-column>
          <el-table-column prop="name" label="厂家"></el-table-column>
          <el-table-column prop="purchaser" label="采购负责人"></el-table-column>
          <el-table-column prop="staple_products" label="主要商品"></el-table-column>
          <el-table-column prop="liaison" label="联系人"></el-table-column>
          <el-table-column prop="phone_number" label="手机号码"></el-table-column>
          <el-table-column prop="telephone_number" label="电话号码"></el-table-column>
          <el-table-column prop="fax" label="传真"></el-table-column>
          <el-table-column prop="email" label="邮箱"></el-table-column>
          <el-table-column prop="address" label="地址"></el-table-column>
          <el-table-column label="操作" width="80" align="center">
            <template #default="scope">
              <TableActions @edit-action="jump(scope.row.id)" />
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-col>
    <el-col :span="8">
      <el-card class="box-card">
        <template #header>
          <div>
            <span>银行卡信息</span>
          </div>
        </template>
        <el-form :model="form.bank_account_info" label-width="90px">
          <el-form-item label="开户名">
            <el-input v-model="form.bank_account_info.name"></el-input>
          </el-form-item>
          <el-form-item label="银行账号">
            <el-input v-model="form.bank_account_info.account"></el-input>
          </el-form-item>
          <el-form-item label="开户银行">
            <el-input v-model="form.bank_account_info.account_bank"></el-input>
          </el-form-item>
          <el-form-item label="开户行全称">
            <el-input v-model="form.bank_account_info.bank_name"></el-input>
          </el-form-item>
          <el-form-item label="币种">
            <el-input v-model="form.bank_account_info.currency"></el-input>
          </el-form-item>
          <el-form-item label="公司地址">
            <el-input v-model="form.bank_account_info.company_address"></el-input>
          </el-form-item>
        </el-form>
      </el-card>
      <el-card class="mt-6">
        <template #header>
          <div>
            <span>时间</span>
          </div>
        </template>
        <el-form label-width="80px">
          <el-form-item label="创建时间">
            <el-date-picker
              v-model="form.created_at"
              type="datetime"
              placeholder="创建时间"
              readonly
            >
            </el-date-picker>
          </el-form-item>
          <el-form-item label="更新时间">
            <el-date-picker
              v-model="form.updated_at"
              type="datetime"
              placeholder="更新时间"
              readonly
            >
            </el-date-picker>
          </el-form-item>
        </el-form>
      </el-card>
    </el-col>
  </el-row>
</template>

<script lang="ts" setup>
import { reactive } from 'vue'

const tableData = [
  {
    id: 1,
    code: '#ABC123',
    name: '犀牛',
    purchaser: '啄木鸟',
    staple_products: '衣服',
    liaison: '大灰牛',
    phone_number: '13838389438',
    telephone_number: '400-110-120',
    fax: '119',
    email: 'email@example.com',
    address: '上海市普陀区金沙江路 1518 号'
  }
]

const form = reactive({
  code: '',
  name: '',
  category: '',
  purchaser: '',
  address: '',
  remarks: '',
  bank_account_info: {
    name: '',
    account: '',
    account_bank: '',
    bank_name: '',
    currency: '',
    company_address: ''
  },
  created_at: new Date(),
  updated_at: new Date()
})
</script>
