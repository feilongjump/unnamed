<template>
  <el-dialog
    :title="title"
    v-model="dialogVisible"
    width="30%"
    destroy-on-close
    center
    @close="handleDialog"
  >
    <el-form :model="form" label-width="100px">
      <div class="flex justify-center">
        <el-upload
          class="avatar-uploader mb-5"
          action="https://jsonplaceholder.typicode.com/posts/"
          :show-file-list="false"
          :on-success="handleAvatarSuccess"
          :before-upload="beforeAvatarUpload"
        >
          <img v-if="form.imageUrl" :src="form.imageUrl" class="avatar" />
          <i v-else class="el-icon-plus avatar-uploader-icon"></i>
        </el-upload>
      </div>
      <el-form-item label="用户名">
        <el-input v-model="form.username"></el-input>
      </el-form-item>
      <el-form-item label="邮箱">
        <el-input v-model="form.email"></el-input>
      </el-form-item>
      <el-form-item label="密码">
        <el-input show-password v-model="form.password"></el-input>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="onSubmit">立即创建</el-button>
      </el-form-item>
    </el-form>
  </el-dialog>
</template>

<script lang="ts" setup>
import { defineProps, defineEmit, watch, ref } from 'vue'
import { ElMessage } from 'element-plus'

const props = defineProps({
  dialogVisible: {
    type: Boolean,
    default: false
  },
  detailsId: {
    type: Number,
    default: 0
  }
})

const title = ref<string>('添加管理员')

watch(
  () => props.detailsId,
  (newDetailsId, oldDetailsId) => {
    if (newDetailsId > 0) {
      title.value = '编辑 X 管理员信息'
    } else {
      title.value = '添加管理员'
    }
  }
)

const form = {
  username: '',
  email: '',
  password: '',
  imageUrl: ''
}

// send handle dialog visible status
const emit = defineEmit(['indexHandleDialog'])
const handleDialog = () => {
  emit('indexHandleDialog', false)
}

// Upload
const handleAvatarSuccess = (res: any, file: any) => {
  form.imageUrl = URL.createObjectURL(file.raw)
}

const beforeAvatarUpload = (file: any) => {
  const isJPG = file.type === 'image/jpeg'
  const isLt2M = file.size / 1024 / 1024 < 2

  if (!isJPG) {
    ElMessage.error('上传头像图片只能是 JPG 格式!')
  }
  if (!isLt2M) {
    ElMessage.error('上传头像图片大小不能超过 2MB!')
  }
  return isJPG && isLt2M
}

// Submit
const onSubmit = () => {
  ElMessage.success('创建成功')
  handleDialog()
}
</script>
