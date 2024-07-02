<script setup>
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';

const scrolled = ref(false);

const handleScroll = () => {
  scrolled.value = window.scrollY > 70;
};

const scrollToSection = (sectionId) => {
  const section = document.getElementById(sectionId);
  if (section) {
    section.scrollIntoView({ behavior: 'smooth' });
  }
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});


</script>

<template>
  <header :class="{ 'header-scrolled': scrolled }">
    <div class="container flex justify-between">
      <div class="logo color-green">
        <Link :href="route('welcome')">&lt;/arianna &gt;</Link>

        <!-- fare qualche effetto che se ci passo sopra si colora a pezzo -->
      </div>
      <div>
        <ul class="flex gap-7 nav-links">
          <!-- fare effetti on hover  -->
          <li><a href="#about-me" @click.prevent="scrollToSection('about-me')">About me</a></li>
          <li><a href="#skills" @click.prevent="scrollToSection('skills')">Abilità</a></li>
          <li><a href="#projects" @click.prevent="scrollToSection('projects')">Progetti</a></li>
        </ul>
      </div>
    </div>
  </header>
</template>

<style lang='scss' scoped>
  header {
    position: sticky;
    left: 0;
    top: 0;
    right: 0;
    background-color: transparent;
    transition: background-color 0.3s ease;
    z-index: 1000;
    width: 100%;
    font-weight: bold;
    text-transform: uppercase;
    
  }

  .container {
    align-items: center;
    padding: 15px;
    font-size: 25px;
    margin: 0 auto;
    
  }

  .header-scrolled {
    background-color: black;
  }



  .nav-links {
    font-size: 16px;
    

    li {
      transition: .3s ease;

      &:hover {
        color: #ec4899;
        cursor: pointer;
      }
    }
  }

 
</style>