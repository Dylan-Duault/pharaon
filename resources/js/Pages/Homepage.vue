<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '../Layouts/GuestLayout.vue';
import OurPrograms from '../Components/OurPrograms.vue';

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    laravelVersion: string;
    phpVersion: string;
}>();

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        <el-container class="container-padding bg-yellow">
            <el-main>
                <el-row class="mb-6">
                    <el-col :span="24">
                        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900">Discover Egypt Like Never Before!</h1>
                        <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl">Embark on a journey through time and explore the wonders of Ancient Egypt. <br> Visit the Pyramids of Giza, sail along the Nile, admire breathtaking temples, and immerse yourself in the rich history of the Pharaohs.</p>
                    </el-col>
                </el-row>
                <el-row class="mb-6">
                    <el-col :span="24">
                        <OurPrograms />
                    </el-col>
                </el-row>
            </el-main>
        </el-container>
        <el-container class="container-padding bg-yellow-whiter">
            <el-main>
                <el-row class="w-100 mb-6" :gutter="20">
                    <el-col :span="12">
                        <el-card>
                            FILL CONTENT
                        </el-card>
                    </el-col>
                    <el-col :span="12">
                        <el-card>
                            FILL CONTENT
                        </el-card>
                    </el-col>
                </el-row>
            </el-main>
        </el-container>
        <el-container class="container-padding bg-yellow">
            <el-main>
                <el-row class="mb-6">
                    <el-col :span="24">
                        <OurPrograms />
                    </el-col>
                </el-row>
            </el-main>
        </el-container>
    </GuestLayout>
</template>

<style scoped>

.bg-yellow {
    background-color: #ffe0af;
}

.bg-yellow-whiter {
    background-color: #ffeed4;
}

.container-padding {
    padding: 64px 10rem 64px 10rem;
}

</style>