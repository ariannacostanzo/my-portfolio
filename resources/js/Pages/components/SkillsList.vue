<script setup>
import { defineProps } from 'vue';
defineProps({
    skills: Array
});
</script>

<template>
    <ul class="container mx-auto flex items-center justify-center gap-5 flex-wrap text-center">
        <li v-for="skill in skills" :key="skill.id" class="skill-card">
            <h3>{{ skill.name }}</h3>
            <figure class="flex items-center justify-center">
                <img :src="`/${skill.image_path}`" :alt="skill.name" class="skill-img" />
            </figure>
        </li>
    </ul>
</template>

<style lang='scss' scoped>
.skill-card {
    background-color: #201844;
    display: inline-block;
    width: 150px;
    padding: 1rem;
    position: relative;
    transition: .2s ease-in;
    cursor: pointer;
    border-image-slice: 1;
    border-width: 1px;
    // border-image-source: linear-gradient(to top, rgba(128, 128, 128, 0.342), #ec4899);
    border-image-source: linear-gradient(to top, rgba(128, 128, 128, 0.342), rgba(128, 128, 128, 0.342) 45%, #ec4899 100%);
    
}


.skill-card:hover {
    scale: 1.08;
}

h3 {
 font-weight: bold;
 text-transform: uppercase;
 font-size: 20px;
 
}

.skill-img {
margin-top: .8rem;
width: 80px;
}
</style>