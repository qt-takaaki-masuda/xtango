<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <ul class="list-disc list-inside p-2">
            <li v-for="tango in tangos" v-bind:key="tango.id">
              <a :href="tango.id" target="_blank" class="text-blue-700">{{ tango.title }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
  props: {
    tangos: {
      type: Array,
    },
  },
};
</script>