
<script setup>
import { ref, computed, watch } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { usePage } from '@inertiajs/inertia-vue3';
import ButtonWithIcon from './ButtonWithIcon.vue';
import { defineProps } from 'vue';

defineProps({
    flash: Object
});

const form = ref({
  name: '',
  email: '',
  message: '',
});


const isLoading = ref(false);

const submitForm = () => {
    isLoading.value = true;
  Inertia.post('/contact', form.value, {
    onSuccess: () => {
        isLoading.value = false;
      form.value.name = '';
      form.value.email = '';
      form.value.message = '';
    },
    onError: (error) => {
        isLoading.value = false;
      console.error('Error sending email:', error);
    }
  });
};
</script>

<template>

    <div id="loader" v-show="isLoading">
        <i class="fa-solid fa-spinner fa-spin color-purple"></i>
    </div>
    <div class="container mx-auto lg:flex gap-5">
        <div class="left-content flex justify-end mb-5">
            <form class="email-form" @submit.prevent="submitForm">
                <div class="flex items-center justify-center mb-10">
                    <p>Mi piacerebbe sentire la tua opinione! Se hai una domanda, un progetto in mente o vuoi
                        semplicemente
                        dire
                        ciao, sentiti libero di contattarmi.</p>
                </div>
                <div class="mb-3">
                    <div class="mb-3 flex justify-start">
                        <label for="name">Il tuo nome</label>
                    </div>
                    <input v-model="form.name" type="text" name="name" required>
                </div>
                <div class="mb-3">
                    <div class="mb-3 flex justify-start">
                        <label for="email">La tua email</label>
                    </div>
                    <input v-model="form.email" type="email" name="email" required>
                </div>
                <div class="mb-3">
                    <div class="mb-3 flex justify-start">
                        <label for="message">Il tuo messaggio</label>
                    </div>
                    <textarea v-model="form.message" name="message" rows="6"></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit">
                        <ButtonWithIcon label="Invia" />
                    </button>
                </div>
                
                <div v-show="flash" class="pt-7 color-purple">
                    {{ flash.success }}
                </div>
            </form>

        </div>
        <div class="right-content">


            <div class="text-center lg:text-end">
                <h4 class="color-green md-5 ">Email</h4>
                <a href="mailto:costanzo.arianna@outlook.it">costanzo.arianna@outlook.it</a>
            </div>
            <div class="text-center lg:text-end">
                <h4 class="color-green my-5">Numero di telefono</h4>
                <p>(+39) 3274436674</p>
            </div>
            <div class="text-center lg:text-end">
                <h4 class="color-green my-5">Indirizzo</h4>
                <div class="flex justify-center lg:justify-end">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101303.19542571901!2d14.995117417087291!3d37.49081874567513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313e2dd761525b5%3A0x58fe876151c83cf0!2sCatania%20CT!5e0!3m2!1sit!2sit!4v1720219451525!5m2!1sit!2sit"
                        width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="text-center lg:text-end">
                <h4 class="color-green my-5"> Social</h4>
                <div class="icons-container ">
                    <a href="https://www.linkedin.com/in/arianna-costanzo-6267a0233/">
                        <i class="fa-brands fa-linkedin color-purple"></i>
                    </a>
                    <a href="https://github.com/ariannacostanzo">
                        <i class="fa-brands fa-square-github color-purple"></i>
                    </a>
                    <a href="https://www.instagram.com/aryalp35/">
                        <i class="fa-brands fa-square-instagram color-purple"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

</template>

<style lang='scss' scoped>

#loader {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 60px;
    background-color: rgba(0, 0, 0, 0.7);
}

  h4 {
    font-weight: bold;
    font-size: 30px;

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

  .left-content, .right-content {
    flex-basis: 50%;
  }

  input, textarea {
    border: 1px solid rgba(128, 128, 128, 0.342);
    border-radius: 10px;
    background-color: #201844;
    width: 100%;

  }

  input:focus, textarea:focus {
    outline: 0;
    border: 1px solid #ec4899;
    box-shadow: 0 0 0;
  }

  .email-form {
    border: 1px solid rgba(128, 128, 128, 0.342);
    border-radius: 10px;
    padding: 1rem;
    
  }

  @media screen and (min-width: 1024px) {
    .email-form {
        height: 80%;
    }
  }
</style>

<!-- sistemare il flash message  -->