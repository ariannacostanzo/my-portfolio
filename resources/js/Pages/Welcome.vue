<script setup>
import { Head} from '@inertiajs/vue3';
import Header from './components/Header.vue';
import AboutMe from './components/AboutMe.vue';
import Divisor from './components/Divisor.vue';
import SkillsList from './components/SkillsList.vue';
import ProjectList from './components/ProjectList.vue';
import ContactMe from './components/ContactMe.vue';
import { usePage } from '@inertiajs/inertia-vue3';

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
    },
    flash: {
        type: Object,
        required: false,
    },
});

const { props: inertiaProps } = usePage();
console.log(inertiaProps.flash);

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
            <ProjectList :projects="projects" />

        </section>
        <section id="contact-me" class="pb-10">
            <Divisor sectionName="Contattami" />
            <ContactMe :flash="flash"></ContactMe>
        </section>
        
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
#contact-me {
    padding-top: 2rem;
}

#page {
    /* background-image: url('./images/background.webp'); funziona con l'altro comando */
}

</style>
