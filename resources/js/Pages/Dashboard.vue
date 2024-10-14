<!-- <script setup>
import { defineProps } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
// const { delete: deleteProject } = useForm();
const props = defineProps({
    projects: Array
});

const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
const csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute('content') : '';


</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">I tuoi progetti</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="w-full">
                    <thead>
                        <tr class="my-row bg-slate-300">
                            <th class="my-column">Nome</th>
                            <th class="my-column">Descrizione</th>
                            <th class="my-column">Link</th>
                            <th class="my-column">Visibilità</th>
                            <th class="my-column  bg-slate-500 hover:bg-slate-600 cursor-pointer hover:transition">
                                <Link :href="route('createproject')">
                                Crea nuovo
                                </Link>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="project in projects" class="my-row">
                            <td class="my-column">{{ project.name }}</td>
                            <td class="my-column">{{ project.description }}</td>
                            <td class="my-column">{{ project.link }}</td>
                            <td class="my-column">{{ project.is_visible }}</td>
                            <td class="my-column no-border-column">
                                <Link :href="route('editproject', {id : project.id})">
                                <p class="text-green-600 font-semibold hover:text-green-700 cursor-pointer">
                                    Modifica
                                </p>
                                </Link>
                                <form :action="route('deleteproject', { id: project.id })" method="post"
                                    @submit.prevent="deleteProject(route('deleteproject', { id: project.id }))">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" :value="csrfToken">
                                    <button type="submit"
                                        class="text-red-600 font-semibold hover:text-red-700 cursor-pointer">
                                        Elimina
                                    </button>
                                </form>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>

.my-column {
    border-right: 1px solid black;
    padding: 10px;
}
.my-row {
    border: 1px solid black;
    
}

.no-border-column {
    padding: 5px;
    width: 0;
}
</style> -->