<template>
  <template v-if="!item.meta?.hidden">
    <el-menu-item
      v-if="hasOneShowingChild(item, item.children) && onlyOneChild?.noShowingChildren"
      :index="item.path"
    >
      <template #title>{{ item.meta?.title }}</template>
    </el-menu-item>

    <el-sub-menu v-else :index="item.path">
      <template #title>
        <span>{{ item.meta?.title }}</span>
      </template>

      <SidebarItem
        v-for="children in item.children"
        :key="children.path"
        :item="children"
        :base-path="item.path"
      />
    </el-sub-menu>
  </template>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { RouteRecordRaw } from 'vue-router'

interface Props {
  item: RouteRecordRaw
  basePath: string
}
withDefaults(defineProps<Props>(), {
  basePath: '/'
})

interface Child {
  noShowingChildren?: boolean
}
const onlyOneChild = ref<RouteRecordRaw & Child>()

/**
 * 至少有一个可显示的路由
 */
const hasOneShowingChild = (parent: RouteRecordRaw, children: Array<RouteRecordRaw> = []) => {
  // 过滤设置隐藏的子集路由
  const showingChildren = children.filter((childrenItem) => {
    if (childrenItem.meta?.hidden) {
      return false
    }

    onlyOneChild.value = childrenItem
    return true
  })

  // 当只有一个子路由时，直接显示
  if (showingChildren.length === 1) {
    return true
  }

  // 如果没有要显示的子路由，则直接使用父路由显示
  if (showingChildren.length === 0) {
    // onlyOneChild.value = { ...parent, path: '', noShowingChildren: true }
    onlyOneChild.value = {
      ...parent,
      path: '',
      noShowingChildren: true
    }

    return true
  }

  return false
}
</script>
