<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {ref} from 'vue';
import axios from 'axios';

const search =ref("");

const getData = () => {
    axios
    .get(route("/dashboard", {search: search.value} ))
    .then((response) => {
        console.log(response);
    })
    .catch((error) => {
        console.log(error);
    });
   
    
   
};


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                       <input type="search" 
                        class="w-full sm:rounded-lg dark:bg-gray-800"
                        name="search"
                        id="search"
                        v-model="search"
                        @input="getData"
                        >

                    </div>
                    
                </div>
                <div class="overflow-hidden mt-4 p-4 shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <p>Search : {{ search }}</p>
                    </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
