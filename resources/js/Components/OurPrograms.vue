<template>
    <el-carousel :interval="15000" type="card" arrow="always">
        <el-carousel-item v-for="program in programs" :key="program.id">
            <div class="relative h-full">
                <el-image class="h-full w-full" :src="program.imagePath" :alt="program.name" :fit="'cover'"></el-image>
                <div class="absolute inset-0 bg-gray-700 opacity-30 rounded-md"></div>
                <div class="absolute inset-0 flex items-end justify-start p-6">
                    <div>
                        <h2 class="text-white text-3xl font-bold">{{ program.name }}</h2>
                    <p class="text-white">{{ program.description }}</p>
                    </div>
                </div>
            </div>
        </el-carousel-item>
    </el-carousel>
</template>

<script setup lang="ts">

import { ref } from 'vue';

const programs = ref([
    {
        id: 1,
        name: 'Mysteries of the Pharaohs (7 days)',
        itinerary: 'Cairo – Giza – Saqqara – Luxor',
        description: 'Explore the pyramids, the Sphinx, and the Valley of the Kings with expert guides.',
        imagePath: '/images/programs/mysteries-pharaohs.png'
    },
    {
        id: 2,
        name: 'Nile Cruise Adventure (10 days)',
        itinerary: 'Aswan – Luxor – Edfu – Kom Ombo',
        description: 'Discover Ancient Egypt from a new perspective as you sail the legendary Nile.',
        imagePath: '/images/programs/nile-cruise.png'
    },
    {
        id: 3,
        name: 'Total Immersion (14 days)',
        itinerary: 'Cairo – Alexandria – Desert Oasis – Nile Cruise',
        description: 'A complete journey blending history, culture, and breathtaking landscapes.',
        imagePath: '/images/programs/total-immersion.png'
    },
    {
        id: 4,
        name: 'The Treasures of Alexandria (6 days)',
        itinerary: 'Cairo – Alexandria – El Alamein',
        description: 'Explore the Library of Alexandria, ancient catacombs, and the Mediterranean coast.',
        imagePath: '/images/programs/alexandria-treasures.png'
    },
    {
        id: 5,
        name: 'Oasis & Desert Expedition (8 days)',
        itinerary: 'Cairo – Bahariya Oasis – White Desert – Dakhla Oasis',
        description: 'Discover stunning desert landscapes, hot springs, and the White Desert\'s rock formations.',
        imagePath: '/images/programs/oasis-expedition.png'
    }
])

</script>
  
  <style scoped>
  .el-carousel__item h3 {
    color: #475669;
    opacity: 0.75;
    line-height: 300px;
    margin: 0;
    text-align: center;
  }
  
  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
  }
  
  .el-carousel__item:nth-child(2n + 1) {
    background-color: #d3dce6;
  }
  </style>