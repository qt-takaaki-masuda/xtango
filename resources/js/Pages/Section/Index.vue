<template>
  <app-layout title="LEVEL">
    <template #header>
      <ul class="flex text-gray-500 text-sm lg:text-base">
        <li class="inline-flex items-center">
          <inertia-link :href="route('dashboard')" replace>Dashboard</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          <inertia-link :href="route('level.index', tango.id)" replace>{{ tango.title }}</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          <inertia-link :href="route('level.index', tango.id)" replace>{{ level.title }}</inertia-link>
        </li>
      </ul>
    </template>

    <div>
      <div class="py-1">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
          <div v-for="section in sections" v-bind:key="section.id" class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg my-2">
            <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                    <span class="block">
                        {{ section.title }}
                    </span>
                </h2>
                <div class="lg:mt-0 lg:flex-shrink-0">
                    <div v-for="mode in modes" v-bind:key="mode.id" class="mt-12 mx-1 inline-flex rounded-md shadow">
                        <inertia-link :href="route('word.index', [mode.mode, section.id])" method="get" as="button" type="button" class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            {{ mode.title }}
                        </inertia-link>
                    </div>
                </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
  props: {
    modes: {
      type: Array,
    },
    sections: {
      type: Array,
    },
    level: {
      type: Array,
    },
    tango: {
      type: Array,
    },
  },

  components: {
    AppLayout,
  },
});
</script>
