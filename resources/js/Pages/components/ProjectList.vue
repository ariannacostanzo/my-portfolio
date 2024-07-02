<script setup>
import {defineProps} from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    projects: Array
});

const getShortDescription = (text) => {
    const maxLength = 100;
    if (text.length >= maxLength) {
        return text.substring(0, maxLength) + '...'
    }
    return text;
} 

const getFirstImage = (project) => {
    if (project.images.length > 0) {
        return project.images[0].image_path;
    }
    return '';
}
  
</script>

<template>
    <div class="container mx-auto">
        <ul class="flex items-center justify-center gap-8 flex-wrap">

            <li v-for="project in projects" :key="project.id" class="project-card">
                <figure class="project-image">
                    <!-- <img v-for="image in project.images" :key="image.id" :src="`${image.image_path}`" :alt="`${project.name}`"> -->
                    <img :src="getFirstImage(project)" :alt="`${project.name}`">
                </figure>
                <Link :href="route('projectDetail', { id: project.id })">
                <div class="project-info">
                    <h3 class="color-green">
                        {{ project.name }}
                    </h3>
                    <p v-html="getShortDescription(project.description)"></p>

                </div>
                </Link>
            </li>

        </ul>
    </div>
</template>

<style lang='scss' scoped>
  .project-card {
    background-color: #201844;
    border-image-slice: 1;
    border-width: 1px;
    height: 340px;
    width: 400px;
    border-image-source: linear-gradient(to top, rgba(128, 128, 128, 0.342), rgba(128, 128, 128, 0.342) 45%, #ec4899 100%);
  }

  .project-image {
    height: 200px;
    width: 100%;
    background-color: grey;
    overflow: hidden;

    img {
        transition: .3s ease;
    }

    img:hover {
        scale: 1.3;
    }
  }

  .project-info {
    padding: 1rem;

    h3 {
        font-size: 25px;
        font-weight: bold;
        text-align: center;
    }

  }
</style>