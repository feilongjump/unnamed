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
        <el-button class="shadow" type="primary" plain size="medium" @click="handleDialog(true)">
          <i class="el-icon-plus mr-2"></i>New
        </el-button>
      </div>
    </div>
    <div class="spacing-table mt-6">
      <el-table :data="tableData">
        <el-table-column type="selection"> </el-table-column>
        <el-table-column type="index" label="序号" :index="+1"> </el-table-column>
        <el-table-column prop="name" label="姓名" width="180"> </el-table-column>
        <el-table-column prop="tag" label="标签" width="100">
          <template #default="scope">
            <el-tag :type="scope.row.tag === '家' ? 'primary' : 'success'" disable-transitions>
              {{ scope.row.tag }}
            </el-tag>
          </template>
        </el-table-column>
        <el-table-column prop="address" label="地址"> </el-table-column>
        <el-table-column prop="date" sortable label="日期" width="180"> </el-table-column>
        <el-table-column label="操作" width="80" align="center">
          <template #default="scope">
            <TableActions @edit-action="handleDialog(true, scope.row.id)" />
          </template>
        </el-table-column>
      </el-table>
    </div>
  </div>
  <Details :detailsId="rowId" :dialogVisible="dialogVisible" @index-handle-dialog="handleDialog" />
</template>

<script lang="ts" setup>
import { ref } from 'vue'
import TableActions from '@/componenets/Table/TableActions.vue'
import Details from './details.vue'

const keywords = ref<string>('')

const tableData = [
  {
    id: 1,
    date: '2021-04-29 15:25:11',
    name: '王小虎',
    tag: '天桥',
    address: '上海市普陀区金沙江路 1518 号'
  },
  {
    id: 2,
    date: '2021-04-29 16:36:23',
    name: '王小虎',
    tag: '家',
    address: '上海市普陀区金沙江路 1518 号'
  },
  {
    id: 3,
    date: '2021-04-29 17:47:35',
    name: '王小虎',
    tag: '公司',
    address: '上海市普陀区金沙江路 1517 号'
  },
  {
    id: 4,
    date: '2021-04-29 18:58:47',
    name: '王小虎',
    tag: '家',
    address: '上海市普陀区金沙江路 1519 号'
  },
  {
    id: 5,
    date: '2021-04-29 19:59:59',
    name: '王小虎',
    tag: '公司',
    address: '上海市普陀区金沙江路 1516 号'
  }
]

// Details component dialog visible status
const rowId = ref<number>(0)
const dialogVisible = ref<boolean>(false)
const handleDialog = (isDialogVisible: boolean, id: number = 0) => {
  dialogVisible.value = isDialogVisible
  rowId.value = id
}
</script>
