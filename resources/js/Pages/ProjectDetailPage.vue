<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps, ref } from 'vue';
import Header from './components/Header.vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import ButtonWithIcon from './components/ButtonWithIcon.vue';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/bundle';


//data
let currentIndex = ref(0)
const getImage = (project) => {
  if (project.images && project.images.length > 0) {
    return project.images[currentIndex.value].image_path;
  }
  return '';
}

const props = defineProps({
  project: Object
});
</script>

<template>
  <div id="project-detail-page">

    <Header></Header>
    <div class="container mx-auto py-3">
      
      <h1 class="color-green mb-3">
        {{ project.name }}
      </h1>
      
      <Swiper :modules="[Navigation]" navigation class="my-swiper">
        <SwiperSlide v-for="image in project.images" :key="image.id">
          <img :src="'/' + image.image_path" alt="" />
        </SwiperSlide>
      </Swiper>
      
      
      <div class="description">
        
        <h3 class="color-green">Riepilogo</h3>
        <p v-html="project.description"></p>
      </div>
      
      <div class="flex items-end justify-end">
        <Link :href="route('welcome')">
          <ButtonWithIcon :label="'Torna indietro'" />
        </Link>
      </div>
      
      
    </div>
  </div>
</template>

<style lang='scss'>
@import 'swiper/swiper-bundle.css';

#project-detail-page {

  
  .my-swiper {
    .swiper-button-prev,
    .swiper-button-next {
      color: #ec4899 !important;
    }
  }
  
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
  
  img {
    // width: 80%;
    max-height: 700px;
    margin: 0 auto;
    object-fit: contain;
  }

  @media screen and (min-width: 758px) {
    img {
        width: 80%;
        margin: 0 auto;
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
}
</style>

<!-- prova  -->