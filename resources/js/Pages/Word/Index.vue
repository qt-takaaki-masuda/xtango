<template>
  <app-layout title="Word">
    <template #header>
      <ul class="flex text-gray-500 text-sm lg:text-base">
        <li class="inline-flex items-center">
          <inertia-link :href="route('dashboard')" replace>Dashboard</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          <inertia-link :href="route('level.index', word.tango_id)" replace>{{ word.tango_title }}</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          <inertia-link :href="route('section.index', word.level_id)" replace>{{ word.level_title }}</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          {{ word.section_title }}
        </li>
      </ul>
    </template>

    <div>
      <div class="py-1">
        <section class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-4 mb-12">
          <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg my-2">
              <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-6 px-4 sm:px-6 lg:py-6 lg:px-8 z-20">
                  <div class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                      <span v-show="mode == 1" id="word" class="block mb-3">
                          {{ word.word }}<button v-if="word.audio_url.length" @click="playMp3(word.audio_url)"><VolumeUpIcon class="h-7 w-7 ml-6 inline"/></button>
                      </span>
                      <span v-show="mode == 2" id="word-mask" class="block mb-3">
                          ？？？？？？？
                      </span>
                      <span v-show="mode == 2" id="meaning" class="block text-2xl text-indigo-500 mb-3">
                          <span v-html="formatMeaning(word.meaning)"></span>
                      </span>
                      <span v-show="mode == 1" id="meaning-mask" class="block text-2xl text-indigo-500 mb-3">
                          ？？？？？？？
                      </span>
                      <span v-if="answerTime != 0" id="meaning-mask" class="block text-sm my-4">
                          (回答時間：{{ answerTime }}秒)
                      </span>
                  </div>
                  <div class="lg:mt-0 lg:flex-shrink-0">
                      <div class=" inline-flex rounded-md shadow">
                          <button type="button" v-bind:disabled="isActive" @click="answer(mode)" class="py-4 px-6 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 disabled:opacity-50 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                              Answer
                          </button>
                      </div>
                      <div class="ml-3 inline-flex rounded-md shadow">
                          <button type="button" @click="nextWord()" class="py-4 px-6  bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                              Next
                          </button>
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
import { defineComponent } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import { VolumeUpIcon } from '@heroicons/vue/solid'

export default defineComponent({
  props: {
    word: {
      type: Array,
    },
    mode: {
      type: String,
    }
  },
  
  data() {
    return {
      answerTime: 0,
      start: 0,
      end: 0,
      isActive: false,
    }
  },

  components: {
    AppLayout,
    VolumeUpIcon,
  },

  mounted() {
    // 開始時間の取得
    this.start = performance.now();
  },

  methods: {
    // JSON文字列を解析
    formatMeaning(jsonData) {
      let parseData = JSON.parse(jsonData);
      return parseData.join('<br>');
    },
    // Answerボタンイベント
    answer(mode) {
      // 回答時間の表示
      this.calcAnswerTime();
      // 回答表示
      if (mode == 1) {
        var target = document.getElementById('meaning');
        target.style.display = 'block';
        var targetMask = document.getElementById('meaning-mask');
        targetMask.style.display = 'none';
      } else {
        var target = document.getElementById('word');
        target.style.display = 'block';
        var targetMask = document.getElementById('word-mask');
        targetMask.style.display = 'none';
      }
      // ボタンを非活性
      this.isActive = true;
    },
    // Nextボタンイベント
    nextWord() {
      location.reload();
    },
    // MP3再生
    playMp3(url) {
      var wordVoice = new Audio(url);
      wordVoice.play();
    },
    // 回答間算出
    calcAnswerTime() {
      if (this.answerTime == 0) {
        // 終了時間の取得
        this.end = performance.now();
        this.answerTime = (this.end - this.start) / 1000;
        // 少数第二位を切り捨て
        this.answerTime = Math.floor(this.answerTime * 100) / 100;
      }
      // 回答時間を保存
      try {
        var token = document.head.querySelector('meta[name="csrf-token"]');
        let answerData = {
          word_id: word.id,
          answer_time: this.answerTime,
          // _token: token.content,
        };
        // let response = fetch('/word/saveAnswerTime/'+word.id+'/'+this.answerTime);
        let response = fetch('/api/log/saveAnswerTime', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json;charset=utf-8',
            'X-CSRF-TOKEN': token.content
          },
          body: JSON.stringify(answerData)
        });
      } catch (error) {
        console.log(error.message);
      }
    }
  }
});
</script>
