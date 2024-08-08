<script setup>
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';

const scrolled = ref(false);
const hamburger = ref(false);

const handleScroll = () => {
  scrolled.value = window.scrollY > 70;
};

const isHomeRoute = () => {
  if(route().current() === "welcome") {
    return true
  }
  return false
}


const scrollToSection = (sectionId, command) => {
  const section = document.getElementById(sectionId);
  if (section) {
    section.scrollIntoView({ behavior: 'smooth' });
  }

  if (command === 'close') {
    toggleHamburger();
  }
};

const toggleHamburger = () => {
  hamburger.value = !hamburger.value;
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});


</script>

<template>
  <header :class="{ 'header-scrolled': scrolled }">
    <div class="container flex justify-between">
      <div class="logo color-green">
        <Link :href="route('welcome')">&lt;/arianna &gt;</Link>

      </div>
      <!-- se non siamo in welcome non si vede -->

      
      <div v-if="isHomeRoute()">
        <!-- hamburger menu  -->
        <div id="hamburger-menu" class="md:hidden" @click="toggleHamburger">
          <div class="arrow"></div>
          <div class="arrow"></div>
          <div class="arrow"></div>
        </div>
        <!-- menu a destra  -->
        <div id="sidebar" v-show="hamburger === true">
          <div id="close-btn" @click="toggleHamburger"><i class="fa-solid fa-xmark"></i></div>
          <div class="line-divisor"></div>
          <ul class="nav-links pl-3">
            <li class="mb-3"><a href="#about-me" @click.prevent="scrollToSection('about-me', 'close')">Su di me</a></li>
            <li class="mb-3"><a href="#skills" @click.prevent="scrollToSection('skills', 'close')">Abilità</a></li>
            <li class="mb-3"><a href="#projects" @click.prevent="scrollToSection('projects', 'close')">Progetti</a></li>
            <li class="mb-3"><a href="#contact-me" @click.prevent="scrollToSection('contact-me', 'close')">Contattami</a></li>
          </ul>
        </div>
        <!-- lista normale -->
        <ul class="hidden md:flex gap-7 nav-links">
          <li><a href="#about-me" @click.prevent="scrollToSection('about-me', '')">Su di me</a></li>
          <li><a href="#skills" @click.prevent="scrollToSection('skills', '')">Abilità</a></li>
          <li><a href="#projects" @click.prevent="scrollToSection('projects', '')">Progetti</a></li>
          <li><a href="#contact-me" @click.prevent="scrollToSection('contact-me', '')">Contattami</a></li>
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

  .line-divisor {
    width: 100%;
    background-color: white;
    height: 1px;
    margin: 67.5px 0 30px 0px;
  }

  .arrow {
    height: 2px;
    background-color: white;
    width: 25px;
    margin-bottom: 7px;
    border-radius: 5px;
    transition: .3s ease;
  }

  #hamburger-menu {
    cursor: pointer;
  }

  #hamburger-menu:hover .arrow {
    background-color: #ec4899;
    
  }

  #sidebar {
    position: fixed;
    right: 0;
    top: 0;
    bottom: 0;
    width: 200px;
    background-color: black;
    // padding: 50px 0 0 20px;
  }

  #close-btn {
    position: absolute;
    top: 18px;
    right: 10px;
    cursor: pointer;
    transition: .3s ease;
  }

  #close-btn:hover {
    color: #ec4899;
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