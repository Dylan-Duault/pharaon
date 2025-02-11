<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

interface IContactForm {
    fullname: string;
    email: string;
    trip_dates: string;
    program: string;
    more_info: string;
}

const props = defineProps<{
    contactForms: IContactForm[];
}>();

</script>

<template>
    <Head title="Contact Forms" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Contact Forms
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <el-card class="mb-6">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Fullname
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Trip Dates
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Program
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        More Info
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b border-gray-200" v-for="contactForm in contactForms" :key="contactForm.id">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap" v-html="contactForm.fullname"></th>
                                    <td class="px-6 py-4" v-html="contactForm.email"></td>
                                    <td class="px-6 py-4" style="min-width: 220px" v-html="contactForm.trip_dates"></td>
                                    <td class="px-6 py-4" v-html="contactForm.program"></td>
                                    <td class="px-6 py-4" v-html="contactForm.more_info"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </el-card>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
