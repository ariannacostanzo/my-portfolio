<script setup>
import { Head} from '@inertiajs/vue3';
import Header from './components/Header.vue';
import AboutMe from './components/AboutMe.vue';
import Divisor from './components/Divisor.vue';


const props = defineProps({
    aboutMeImageUrl: {
        type: String,
        required: true,
    }
});

</script>

<template>
    <div id="page">


        <Head title="Welcome" />
        <Header />
        <AboutMe :aboutMeImageUrl="props.aboutMeImageUrl" />
        <Divisor sectionName="Abilità"/>
        
        <div>


            <div class="text-white sotto">
                
                <div>
                    Lista progetti con titolo, descrizione, link ed immagini
                </div>
                <div>
                    Elenco di skill conosciute
                </div>
                <div>
                    in alto a destra nel header una serie di link che portano all'interno della pagina stessa
                </div>
                <div>
                    contattami
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.sotto {
    padding-top: 5rem;
}

#page {
    /* background-image: url('./images/background.webp'); funziona con l'altro comando */
}

</style>
