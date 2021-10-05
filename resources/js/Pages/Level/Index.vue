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
        </li>
      </ul>
    </template>

    <div>
      <div class="py-1">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
          <article>
            <section class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
              <article v-for="level in levels" v-bind:key="level.id" class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out" v-bind:style="'background-image: url(\'' + tango.image_file_name + '\');'">
                <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                  <h3 class="text-center">
                    <inertia-link :href="route('section.index', level.id)" class="text-white text-2xl font-bold text-center" replace>
                      <span class="absolute inset-0"></span>
                        {{ level.title }}
                    </inertia-link>
                  </h3>
                </div>
              </article>
            </section>
          </article>
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
    levels: {
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
