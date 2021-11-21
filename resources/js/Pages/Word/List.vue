<template>
  <app-layout title="Word">
    <template #header>
      <ul class="flex text-gray-500 text-sm lg:text-base">
        <li class="inline-flex items-center">
          <inertia-link :href="route('dashboard')">Dashboard</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          <inertia-link :href="route('level.index', word0.tango_id)">{{ word0.tango_title }}</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          <inertia-link :href="route('section.index', word0.level_id)">{{ word0.level_title }}</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          {{ word0.section_title }}
        </li>
      </ul>
    </template>

    <div>
      <div class="py-1">
        <section class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-4 mb-12">
          <div v-for="word in words" v-bind:key="word.id"  class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg my-2">
              <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-6 px-4 sm:px-6 lg:py-6 lg:px-8 z-20">
                  <div class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                      <span id="word" class="block mb-3 text-2xl">
                        <span v-html="word.word"></span><button v-if="word.audio_url.length" @click="playMp3(word.audio_url)"><VolumeUpIcon class="h-7 w-7 ml-6 inline"/></button>
                      </span>
                  </div>
                  <div class="lg:mt-0 lg:w-5/12 lg:flex-shrink-0 font-extrabold text-black dark:text-white sm:text-4xl">
                      <span id="meaning" class="block text-xl text-indigo-500 mb-3">
                        <span v-html="formatMeaning(word.meaning)"></span>
                      </span>
                  </div>
              </div>
          </div>
        </section>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import { VolumeUpIcon, TagIcon, CheckCircleIcon, XCircleIcon } from '@heroicons/vue/solid'

export default defineComponent({
  props: {
    words: {
      type: Array,
    },
    word0: {
      type: Object,
    },
    mode: {
      type: String,
    }
  },

  components: {
    AppLayout,
    VolumeUpIcon,
    TagIcon,
    CheckCircleIcon,
    XCircleIcon
  },

  methods: {
    // JSON文字列を解析
    formatMeaning(jsonData) {
      let parseData = JSON.parse(jsonData);
      return parseData.join('<br>');
    },
    // MP3再生
    playMp3(url) {
      var wordVoice = new Audio(url);
      wordVoice.play();
    },
  }
});
</script>
