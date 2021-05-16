<template>
  <div v-if="!item.meta.hidden">
    <!-- TODO: Waiting for repair -->
    <el-menu-item
      v-if="hasOneShowingChild(item, item.children) && onlyOneChild.noShowingChildren"
      :index="resolvePath(item.path)"
    >
      <i :class="item.meta.icon" class="text-2xl"></i>
      <template #title>{{ item.meta.title }}</template>
    </el-menu-item>

    <el-submenu v-else :index="resolvePath(item.path)">
      <template #title>
        <i :class="item.meta.icon" class="text-2xl"></i>
        <span>{{ item.meta.title }}</span>
      </template>
      <SidebarItem
        v-for="children in item.children"
        :key="children.path"
        :item="children"
        :basePath="resolvePath(item.path)"
      />
    </el-submenu>
  </div>
</template>

<script lang="ts" setup>
import { defineProps, ref } from 'vue'

const props = defineProps({
  item: {
    type: Object,
    required: true
  },
  basePath: {
    type: String,
    default: '/'
  }
})

const onlyOneChild = ref<any>({})

const hasOneShowingChild = (parent: object, children: Array<any> = []) => {
  const showingChildren = children.filter((item) => {
    if (item.meta.hidden) {
      return false
    }

    onlyOneChild.value = item
    return true
  })

  // When there is only one child router, the child router is displayed by default
  if (showingChildren.length === 1) {
    return true
  }

  // Show parent if there are no child router to display
  if (showingChildren.length === 0) {
    onlyOneChild.value = { ...parent, path: '', noShowingChildren: true }
    return true
  }

  return false
}

const resolvePath = (routePath: string) => {
  if (props.basePath !== '/') {
    return `${props.basePath}/${routePath}`
  }

  return props.basePath + routePath
}
</script>
