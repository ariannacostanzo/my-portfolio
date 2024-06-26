<script setup>
import { defineProps } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    project: Object
});
</script>

<template>

    <Head title="editproject" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Modifica progetto {{ project.name }}</h2>
        </template>


    </AuthenticatedLayout>
</template>