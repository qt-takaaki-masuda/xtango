<template>
  <app-layout title="Dashboard">
    <template #header>
      <ul class="flex text-gray-500 text-sm lg:text-base">
        <li class="inline-flex items-center">
          <a href="/dashboard">Dashboard</a>
        </li>
      </ul>
    </template>

    <div class="bg-indigo-900 text-center py-4 lg:px-4">
      <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">Vocabulary GRIT 2500(単語編)／Stage4／1401〜1420 をリリース！</span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
      </div>
    </div>

    <div>
      <div class="py-1">
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-5 mx-auto">
            <div class="flex flex-wrap -m-4">
              <div class="p-4 md:w-1/4" v-for="tango in tangos" v-bind:key="tango.id">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <inertia-link :href="route('level.index', tango.id)" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                    <img class="w-full object-cover object-center" v-bind:src="tango.image_file_name" alt="blog">
                  </inertia-link>
                  <div class="p-6">
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ tango.title }}</h1>
                    <p class="leading-relaxed mb-3">{{ tango.description }}</p>
                    <div class="flex items-center flex-wrap">
                      <inertia-link method="get" as="button" type="button" :href="route('level.index', tango.id)" class="py-2 px-4 bg-pink-600 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                        Start
                        <svg class="w-4 h-4 ml-2 inline-block" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                          <path d="M12 5l7 7-7 7"></path>
                        </svg>
                      </inertia-link>
                    </div>
                  </div>
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
    tangos: {
      type: Array,
    },
  },

  components: {
    AppLayout,
  },
});
</script>
