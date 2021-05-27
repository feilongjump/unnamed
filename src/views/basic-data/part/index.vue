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
        <el-table-column prop="code" label="物料编号"></el-table-column>
        <el-table-column prop="name" label="名称"></el-table-column>
        <el-table-column prop="spec" label="规格型号"></el-table-column>
        <el-table-column prop="category" label="物料分类"></el-table-column>
        <el-table-column prop="unit" label="单位"></el-table-column>
        <el-table-column prop="unit_price" label="单价"></el-table-column>
        <el-table-column prop="producer" label="厂家"></el-table-column>
        <el-table-column prop="remarks" label="备注"></el-table-column>
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
    name: '不知道是什么物料',
    spec: '红色大件',
    category: '衣服',
    unit: '个',
    unit_price: '¥ 10',
    producer: '犀牛厂家',
    remarks: '没什么好备注的'
  }
]

const jump = (id: number = 0) => {
  const routeName = id > 0 ? 'Part.Edit' : 'Part.Create'
  router.push({ name: routeName, params: { id } })
}
</script>
