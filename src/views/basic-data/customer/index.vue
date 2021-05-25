<template>
  <div class="h-full w-full">
    <div class="w-full flex justify-between items-center">
      <div class="flex">
        <el-dropdown trigger="click">
          <el-button class="shadow" type="primary" plain size="medium">
            More<i class="el-icon-arrow-down el-icon--right"></i>
          </el-button>
          <template #dropdown>
            <el-dropdown-menu>
              <el-dropdown-item>黄金糕</el-dropdown-item>
              <el-dropdown-item>狮子头</el-dropdown-item>
              <el-dropdown-item>螺蛳粉</el-dropdown-item>
              <el-dropdown-item>双皮奶</el-dropdown-item>
              <el-dropdown-item>蚵仔煎</el-dropdown-item>
            </el-dropdown-menu>
          </template>
        </el-dropdown>
        <el-input
          class="el-input-rounded ml-10px el-input-shadow"
          placeholder="Search"
          prefix-icon="el-icon-search"
          size="medium"
          v-model="keywords"
        >
        </el-input>
      </div>
      <div>
        <el-button class="shadow" type="primary" plain size="medium">
          <i class="el-icon-refresh mr-2"></i>Refresh
        </el-button>
        <el-button class="shadow" type="primary" plain size="medium" @click="jump()">
          <i class="el-icon-plus mr-2"></i>New
        </el-button>
      </div>
    </div>
    <div class="spacing-table mt-6">
      <el-table :data="tableData">
        <el-table-column type="selection"> </el-table-column>
        <el-table-column type="index" label="序号" :index="+1"></el-table-column>
        <el-table-column prop="code" label="编号"></el-table-column>
        <el-table-column prop="name" label="客户"></el-table-column>
        <el-table-column prop="salesman" label="业务员"></el-table-column>
        <el-table-column prop="merchandiser" label="跟单员"></el-table-column>
        <el-table-column prop="amount" label="下单金额"></el-table-column>
        <el-table-column prop="liaison" label="联系人"></el-table-column>
        <el-table-column prop="phone_number" label="手机号码"></el-table-column>
        <el-table-column prop="telephone_number" label="电话号码"></el-table-column>
        <el-table-column prop="fax" label="传真"></el-table-column>
        <el-table-column prop="email" label="邮箱"></el-table-column>
        <el-table-column prop="country" label="国家"></el-table-column>
        <el-table-column prop="address" label="地址"></el-table-column>
        <el-table-column prop="category" label="客户分类"></el-table-column>
        <el-table-column prop="level" label="客户等级"></el-table-column>
        <el-table-column label="操作" width="80" align="center">
          <template #default="scope">
            <TableActions @edit-action="jump(scope.row.id)" />
          </template>
        </el-table-column>
      </el-table>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue'
import router from '@/router'
import TableActions from '@/componenets/Table/TableActions.vue'

const keywords = ref<string>('')

const tableData = [
  {
    id: 1,
    code: '#ABC123',
    name: '犀牛',
    salesman: '知了',
    merchandiser: '啄木鸟',
    amount: '¥ 100,000,000',
    liaison: '大灰牛',
    phone_number: '13838389438',
    telephone_number: '400-110-120',
    fax: '119',
    email: 'email@example.com',
    country: '火星国',
    address: '上海市普陀区金沙江路 1518 号',
    category: '先给你分到外太空吧',
    level: 'S 级'
  }
]

const jump = (id: number = 0) => {
  const routeName = id > 0 ? 'Customer.Edit' : 'Customer.Create'
  router.push({ name: routeName, params: { id } })
}
</script>
