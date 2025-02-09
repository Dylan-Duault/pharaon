<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';

const props = defineProps<{
    success?: string;
}>();

</script>

<template>
    <Head title="Welcome" />
    <DefaultLayout>
        <el-container class="container-padding bg-yellow">
            <el-main>
                <div class="text-center">
                    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-yellow-900">{{ props.success }}</h1>
                    <el-image class="mt-6" src="/images/pharaon.gif" :fit="'cover'"></el-image>
                </div>
            </el-main>
        </el-container>
    </DefaultLayout>
</template>
