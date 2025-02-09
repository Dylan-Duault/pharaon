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
    <div class="common-layout">
        <el-container>
            <el-main>
                <slot />
            </el-main>
        </el-container>
    </div>
    <Footer/>
</template>

<style>
.common-layout {
    padding: 1rem;
}

@media screen and (min-width: 992px) {
    .common-layout {
        padding: 64px 10rem 64px 10rem;
    }
}
</style>