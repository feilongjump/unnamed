<template>
  <div class="bg-white rounded-xl border shadow-xl">
    <div class="px-6 py-6 border-b">
      <div class="w-64">
        <el-input
          v-model="keywords"
          :prefix-icon="SearchIcon"
          placeholder="Please input"
          class="rounded-full-input"
        />
      </div>
    </div>
    <el-table
      :data="tableData"
      header-cell-class-name="table-header"
      cell-class-name="table-cell"
      @selection-change="handleSelectionChange"
    >
      <el-table-column type="selection" width="65" />
      <el-table-column prop="date" label="Date" sortable width="140" />
      <el-table-column prop="name" label="Name" width="120" />
      <el-table-column prop="address" label="Address" />
    </el-table>
    <div class="px-3 py-6 flex justify-end">
      <el-pagination
        v-model:currentPage="currentPage"
        v-model:page-size="pageSize"
        :page-sizes="[10, 20, 50]"
        background
        layout="total, sizes, prev, pager, next"
        :total="500"
      />
    </div>
  </div>
</template>

<script lang="ts" setup>
import { SearchIcon } from '@heroicons/vue/outline'
import { ref } from 'vue'

const item = {
  date: '2016-05-02',
  name: 'Tom',
  address: 'No. 189, Grove St, Los Angeles'
}
const tableData = ref(Array.from({ length: 30 }).fill(item))

const keywords = ref()
const currentPage = ref(1)
const pageSize = ref(50)

const multipleSelection = ref([])
const handleSelectionChange = (val: []) => {
  multipleSelection.value = val
}
</script>
