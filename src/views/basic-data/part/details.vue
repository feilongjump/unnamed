<template>
  <Form :params="params" />
</template>

<script lang="ts" setup>
import { reactive } from 'vue'
import Form from './components/Form.vue'

const params = reactive({
  code: '#ABC123',
  name: '不知道是什么物料',
  spec: '红色大件',
  category: '衣服',
  unit: '个',
  unit_price: '¥ 10',
  producer: '犀牛厂家',
  remarks: '没什么好备注的'
})
</script>
