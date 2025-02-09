<template>
    <el-menu
      :default-active="activeIndex"
      class="navbar"
      mode="horizontal"
      :ellipsis="false"
      @select="handleSelect"
    >
      <el-menu-item index="0">
        <img
          style="width: 40px"
          src="/images/logo.png"
          alt="Element logo"
        />
      </el-menu-item>
      <el-menu-item index="/">Home</el-menu-item>
      <el-sub-menu v-if="!$page.props.auth.user" index="">
        <template #title>User</template>
        <el-menu-item index="login">Login</el-menu-item>
        <el-menu-item index="register">Register</el-menu-item>        
      </el-sub-menu>
      <el-menu-item v-else index="dashboard">Dashboard</el-menu-item>
    </el-menu>
  </template>
  
  <script lang="ts" setup>
  import { ref } from 'vue'
  import { router } from '@inertiajs/vue3'

  
  const activeIndex = ref('1')
  const handleSelect = (key: string, keyPath: string[]) => {
    router.get(key)
  }
  </script>
  
  <style scoped>

    .navbar {
        padding: 1rem
    }

    @media screen and (min-width: 992px) {
        .navbar {
            padding: 0 10rem 0 10rem
        }
    }


  .el-menu--horizontal > .el-menu-item:nth-child(1) {
    margin-right: auto;
  }
  </style>