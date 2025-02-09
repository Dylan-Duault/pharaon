<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import NavBar from './NavBar.vue';
import Footer from '@/Components/Footer.vue'

</script>

<template>
    <el-affix :offset="0">
        <NavBar/>
    </el-affix>
    <div>
        <slot />
    </div>
    <Footer/>
</template>