<script setup>
import { ref, onMounted, defineProps, onBeforeUnmount } from 'vue';
import Divisor from './Divisor.vue';

//data
const words = ref(['Web Developer', 'Gamer', 'Creator', 'Geek']);
let emptyText = ref('');
const currentIndex = ref(0);
let currentLetter = ref(0);
const showBounce1 = ref(false);
const showBounce2 = ref(false);
let typingInterval;
let switchingTimeout;
let isDeleting = ref(false);

//methods
const startTyping = () => {
  typingInterval = setInterval(() => {
    //se non sono in cancellazione scrivo
    if (!isDeleting.value) {
      if (currentLetter.value < words.value[currentIndex.value].length) {
        emptyText.value += words.value[currentIndex.value][currentLetter.value];
        currentLetter.value++;
      } else {
        clearInterval(typingInterval);
        switchingTimeout = setTimeout(() => {
          isDeleting.value = true;
          startTyping();
        }, 1000); 
      }
    } else { //altrimenti se non ho finito di cancellare cancello
      if (currentLetter.value > 0) {
        currentLetter.value--;
        emptyText.value = words.value[currentIndex.value].substring(0, currentLetter.value);
      } else {
        clearInterval(typingInterval);
        isDeleting.value = false;
        currentIndex.value = (currentIndex.value + 1) % words.value.length;
        switchingTimeout = setTimeout(() => {
          startTyping();
        }, 500); 
      }
    }
  }, 200); 
};


//props
const props = defineProps({
  aboutMeImageUrl: {
    type: String,
    required: true
  }
});

onMounted(() => {
  startTyping();
});

onBeforeUnmount(() => {
  clearInterval(typingInterval);
  clearTimeout(switchingTimeout);
});
</script>

<template>
  <section id="jumbo">
    <div class="writing-text container mx-auto my-10 flex justify-start gap-10">
      <div>
        Ciao, sono <span class="color-green">Arianna Costanzo</span> e
        <h1>sono una <span class="color-purple">{{ emptyText }}</span></h1>
      </div>

    </div>
  </section>

  <Divisor sectionName="About Me" />

  <section id="about-me">
    <div class="container mx-auto my-10 flex justify-center gap-10">
      <figure>
        <img :src="aboutMeImageUrl" alt="about me" id="aboutme-img">
      </figure>
      <div class="info-about-me">
        <!-- da sistemare il responsive del testo -->
        <h3 class="color-green">Junior Full Stack Web Developer</h3>
        <p> Nel corso della mia esperienza formativa all'estero, ho intrapreso
          lo studio della programmazione spinta dalla mia curiosità iniziale
          nel settore della programmazione dei videogiochi. Tuttavia, è stato
          durante questo percorso che ho scoperto una passione autentica
          per lo <span class="color-purple">sviluppo web</span>. La soddisfazione nel creare e dare vita a
          progetti attraverso il processo di sviluppo ha risvegliato in me una
          chiara consapevolezza della direzione che desideravo prendere nel
          mio percorso professionale. Ho conseguito il corso da full Stack Web Developer di <span
            class="color-purple">Boolean</span>
          e successivamente sono stata selezionata per il corso di <span class="color-purple">Experis su Java</span> da
          sistemare
        </p>
        <div class="flex items-center justify-between">

          <div class="icons-container ">
            <i class="fa-brands fa-linkedin color-purple"></i>
            <i class="fa-brands fa-square-github color-purple"></i>
          </div>

          <div class="buttons-container">
            <button @mouseover="showBounce1 = true" @mouseleave="showBounce1 = false">Contattami
              <i v-show="!showBounce1" class="fa-solid fa-id-card-clip"></i>
              <i v-show="showBounce1" class="fa-solid fa-id-card-clip fa-bounce"></i>
            </button>
            <button @mouseover="showBounce2 = true" @mouseleave="showBounce2 = false">Scarica CV
              <i v-show="!showBounce2" class="fa-solid fa-download"></i>
              <i v-show="showBounce2" class="fa-solid fa-download fa-bounce"></i></button>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<style lang='scss' scoped>

  
  .container {
    padding: 2rem;
  }

  figure {
    max-width: 300px;
    max-height: 250px;
    overflow: hidden;
    border-radius: 5px;
    flex-basis: 60%;
  }
  #aboutme-img {
    width: 200px;
    border-radius: 5px;
  }

  .writing-text {
    font-size: 25px;
    max-width: 800px;

    h1 {
      font-size: 60px;
        font-weight: bold;
    }

    span {
      font-weight: bold;
      position: relative;

      &.color-purple::after {
        position: absolute;
        content: '';
        top: 0;
        right: -12px;
        width: 10px;
        height: 100%;
        background-color: #ec4899;
      }
    }

  }

  .info-about-me {
    flex-basis: 40%;

  }

  h3 {
    font-weight: bold;
    margin-bottom: 1rem;
    font-size: 25px;
  }

  .icons-container {

    i {
      font-size: 40px;
      margin: 10px 10px 10px 0;
      cursor: pointer;
      transition: .2s ease-in-out;

      &:hover {
        scale: 1.1;
      }
    }
  }

  .buttons-container {

    button {
      background: rgb(236, 72, 153);
      background: linear-gradient(90deg, rgba(236, 72, 153, 1) 0%, rgba(38, 28, 82, 1) 100%);
      margin: 10px 10px 10px 0;
      padding: 15px 25px;
      border-radius: 35px;
      font-size: 18px;
      font-weight: bold;
      border: 1px solid rgb(236, 72, 153);

      
    }

    

    i {
      margin-left: 5px;
    }
  }
</style>