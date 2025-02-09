<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import OurPrograms from '../Components/OurPrograms.vue';
import ContactForm from '../Components/ContactForm.vue';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';

</script>

<template>
    <Head title="Welcome" />
    <DefaultLayout>
        <el-container class="container-padding bg-yellow">
            <el-main>
                <el-row class="mb-6">
                    <el-col :span="24">
                        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-yellow-900">Discover Egypt Like Never Before!</h1>
                        <p class="mb-6 text-lg font-normal text-yellow-700 lg:text-xl">Embark on a journey through time and explore the wonders of Ancient Egypt. <br> Visit the Pyramids of Giza, sail along the Nile, admire breathtaking temples, and immerse yourself in the rich history of the Pharaohs.</p>
                    </el-col>
                </el-row>
                <el-row class="mb-6">
                    <el-col :span="24">
                        <OurPrograms />
                    </el-col>
                </el-row>
            </el-main>
        </el-container>
        <el-container class="container-padding bg-yellow-darker">
            <el-main>
                <el-row class="mb-6">
                    <el-col :xs="24" :lg="18" class="pe-6">
                        <h2 class="mb-4 text-3xl font-bold text-yellow-900">Why Choose us?</h2>
                        <p class="mb-6 text-lg font-normal text-yellow-700 lg:text-xl">We offer more than just a trip, we create unforgettable experiences. Travel with us and uncover the wonders of Ancient Egypt like never before!</p>

                        <el-row :gutter="20" class="mb-5">
                            <el-col :span="12">
                                <el-card shadow="hover" class="h-full yellow-card">
                                    <div class="text-center">
                                        <h3 class="text-xl font-semibold mb-2">Expert Guides</h3>
                                        <p>Passionate Egyptologists for an authentic experience</p>
                                    </div>
                                </el-card>
                            </el-col>
                            <el-col :span="12">
                                <el-card shadow="hover" class="h-full yellow-card">
                                    <div class="text-center">
                                        <h3 class="text-xl font-semibold mb-2">Tailor-Made Trips</h3>
                                        <p>Customizable tours to suit your preferences</p>
                                    </div>
                                </el-card>
                            </el-col>
                        </el-row>
                        <el-row :gutter="20">
                            <el-col :span="12">
                                <el-card shadow="hover" class="h-full yellow-card">
                                    <div class="text-center">
                                        <h3 class="text-xl font-semibold mb-2">Premium Accommodations</h3>
                                        <p>Stay in top-rated hotels and luxury boats</p>
                                    </div>
                                </el-card>
                            </el-col>
                            <el-col :span="12">
                                <el-card shadow="hover" class="h-full yellow-card">
                                    <div class="text-center">
                                        <h3 class="text-xl font-semibold mb-2">Unique Experiences</h3>
                                        <p>Exclusive access to historical sites</p>
                                    </div>
                                </el-card>
                            </el-col>
                        </el-row>
                    </el-col>
                    <el-col :xs="0" :sm="0" :md="0" :lg="6" class="ps-6">
                        <div class="flex justify-center items-center h-full">
                            <div id="couple-image">
                                <el-image class="w-full h-full" src="/images/illustrations/couple.png" :fit="'cover'"></el-image>
                            </div>
                        </div>
                    </el-col>
                </el-row>
            </el-main>
        </el-container>
        <el-container class="container-padding bg-yellow">
            <el-main>
                <el-row>
                    <el-col :span="8">
                        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-yellow-900">Book Now!</h1>
                        <p class="mb-6 text-lg font-normal text-yellow-700 lg:text-xl">It's time to make your dream a reality!</p>
                    </el-col>
                    <el-col :span="16">
                        <el-card>
                            <ContactForm />
                        </el-card>
                    </el-col>
                </el-row>
            </el-main>
        </el-container>
    </DefaultLayout>
</template>

<style scoped>

#couple-image {
    max-width: 300px;
}

</style>