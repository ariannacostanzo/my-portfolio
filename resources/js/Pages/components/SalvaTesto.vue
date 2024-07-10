<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps, ref } from 'vue';
import Header from './components/Header.vue';
import ButtonWithIcon from './components/ButtonWithIcon.vue';

// defineProps({
//   project: Object
// })

//nuova cosa
const props = defineProps({
    project: Object
});

//data
let currentIndex = ref(0)

const getImage = (project) => {
    if (project.images && project.images.length > 0) {
        return project.images[currentIndex.value].image_path;
    }
    return '';
}

const nextImage = (project) => {
    currentIndex.value = (currentIndex.value + 1) % project.images.length;
};

const prevImage = (project) => {
    currentIndex.value = (currentIndex.value - 1 + project.images.length) % project.images.length;
};




</script>

<template>
    <Header></Header>
    <!-- sistemare il link dell'header per questa pagina -->
    <div class="container mx-auto py-3">
        <h1 class="color-green">
            {{ project.name }}
        </h1>
        <span @click="prevImage(project)" class="arrow-left"><i class="fa-solid fa-circle-arrow-left"></i></span>
        <span @click="nextImage(project)" class="arrow-right"><i class="fa-solid fa-circle-arrow-right"></i></span>
        <figure class="project-img-container">

            <img :src="'/' + getImage(project)" :alt="project.name">
        </figure>



        <div class="description">

            <h3 class="color-green">Overview</h3>
            <p v-html="project.description"></p>
        </div>

        <div class="flex items-end justify-end">
            <Link :href="route('welcome')">
            <ButtonWithIcon :label="'Torna indietro'" />
            </Link>
        </div>

    </div>
</template>

<style lang='scss' scoped>
.container {
    position: relative;
}

.arrow-left {
    position: absolute;
    left: 0px;
    top: 40%;
    font-size: 40px;
    color: #ec4899;
    transform: translate(-50%, -50%);
    cursor: pointer;
}

.arrow-right {
    position: absolute;
    right: 0px;
    top: 40%;
    font-size: 40px;
    transform: translate(-50%, -50%);
    color: #ec4899;
    cursor: pointer;
}

h1 {
    font-size: 50px;
    font-weight: bold;
    text-align: center;
}

.project-img-container {
    margin: 2rem auto;
    width: 80%;
    overflow: hidden;
    height: 700px;
    border-radius: 10px;



    img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 10px;
    }
}

h3 {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 1rem;
}

.description {
    padding: 1rem 5rem;
    font-size: 20px;
}
</style>