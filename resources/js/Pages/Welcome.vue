<script setup>
import { Head} from '@inertiajs/vue3';
import Header from './components/Header.vue';
import AboutMe from './components/AboutMe.vue';
import Divisor from './components/Divisor.vue';
import SkillsList from './components/SkillsList.vue';
import ProjectList from './components/ProjectList.vue';


const props = defineProps({
    aboutMeImageUrl: {
        type: String,
        required: true,
        
    },
    skills: {
        type: Array,
        required: true
    },
    projects: {
        type: Array,
        required: true
    }
});

</script>

<template>
    <div id="page">


        <Head title="Arianna Costanzo" />
        <Header />
        <section id="about-me">
            <AboutMe :aboutMeImageUrl="props.aboutMeImageUrl" />
        </section>
        <section id="skills">
            <Divisor sectionName="Abilità" />
            <SkillsList :skills="skills" />
        </section>
        <section id="projects">
            <Divisor sectionName="Progetti" />
            <ProjectList :projects="projects"/>
        
        </section>
        <div>



            <div class="text-white sotto">


                
                
                <div>
                    Lista progetti con titolo, descrizione, link ed immagini
                </div>

                <div>
                    fare il componente button con la logica li
                </div>
                <div>
                    contattami
                </div>
                <div>
                    da sistemare il responsive nel testo di about me, e nelle freccie e carosello più bello
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.sotto {
    padding-top: 5rem;
}
#skills {
    padding-top: 2rem;
}
#projects {
    padding-top: 2rem;
}

#page {
    /* background-image: url('./images/background.webp'); funziona con l'altro comando */
}

</style>
