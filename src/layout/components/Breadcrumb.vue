<template>
  <el-breadcrumb class="pb-10 flex items-center">
    <el-breadcrumb-item v-for="item in breadcrumbs" :key="item.path" :to="{ path: item.path }">
      {{ item.meta?.title }}
    </el-breadcrumb-item>
  </el-breadcrumb>
</template>

<script setup lang="ts">
import router from '@/router'
import { ref, watch } from 'vue'
import { RouteLocationMatched } from 'vue-router'

const { currentRoute } = router
const getMatched = (matched?: Array<RouteLocationMatched>) => {
  if (!matched) {
    matched = currentRoute.value.matched
  }

  return matched.filter((item) => {
    // 过滤第一层
    if (item.name === 'Backstage') return false

    return item
  })
}

const breadcrumbs = ref<Array<RouteLocationMatched>>(getMatched())

watch(
  () => currentRoute.value.matched,
  (matched) => {
    breadcrumbs.value = getMatched(matched)
  }
)
</script>

<style>
.el-breadcrumb .el-breadcrumb__item:first-child {
  @apply text-xl;
}
</style>
