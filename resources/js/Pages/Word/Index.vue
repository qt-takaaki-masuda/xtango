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
          <inertia-link :href="route('level.index', word.tango_id)">{{ word.tango_title }}</inertia-link>
          <svg class="h-5 w-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </li>
        <li class="inline-flex items-center">
          <inertia-link :href="route('section.index', word.level_id)">{{ word.level_title }}</inertia-link>
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
                      <span v-show="mode == 1" id="word" class="block mb-3 text-2xl">
                        <span v-html="word.word"></span><button v-if="word.audio_url.length" @click="playMp3(word.audio_url)"><VolumeUpIcon class="h-7 w-7 ml-6 inline"/></button>
                      </span>
                      <span v-show="mode == 2" id="word-mask" class="block mb-3 text-2xl">
                        ？？？？？？？
                      </span>
                      <span v-show="mode == 2" id="meaning" class="block text-2xl text-indigo-500 mb-3">
                        <span v-html="formatMeaning(word.meaning)"></span>
                      </span>
                      <span v-show="mode == 1" id="meaning-mask" class="block text-2xl text-indigo-500 mb-3">
                        ？？？？？？？
                      </span>
                      <span class="block text-sm my-4">
                        (正解数：{{ correctCount }}回／不正回数：{{ incorrectCount }}回)
                      </span>
                      <span v-if="answerTime != 0" id="meaning-mask" class="block text-sm my-4">
                        (回答時間：{{ answerTime }}秒)
                      </span>
                  </div>
                  <div class="lg:mt-0 lg:flex-shrink-0">
                      <div class=" inline-flex rounded-md shadow">
                          <button type="button" v-show="isAnsered == false" @click="answer(mode)" class="py-4 px-6 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 disabled:opacity-50 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                            <TagIcon class="fill-current w-6 h-6 mr-2 text-white inline"/>
                            答え
                          </button>
                      </div>
                      <div class="ml-3 inline-flex rounded-md shadow">
                          <button type="button" v-show="isAnsered == true" @click="nextWord(1)" class="py-4 px-6 bg-green-400 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                            <CheckCircleIcon class="fill-current w-6 h-6 mr-2 text-white inline"/>
                            正解だった
                          </button>
                      </div>
                      <div class="ml-3 inline-flex rounded-md shadow">
                          <button type="button" v-show="isAnsered == true" @click="nextWord(0)" class="py-4 px-6 bg-red-400 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                            <XCircleIcon class="fill-current w-6 h-6 mr-2 text-white inline"/>
                            不正解だった
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
import { VolumeUpIcon, TagIcon, CheckCircleIcon, XCircleIcon } from '@heroicons/vue/solid'

export default defineComponent({
  props: {
    word: {
      type: Array,
    },
    mode: {
      type: String,
    },
    correctCount: {
      type: String,
    },
    incorrectCount: {
      type: String,
    }
  },
  
  data() {
    return {
      answerTime: 0,
      start: 0,
      end: 0,
      isAnsered: false,
    }
  },

  components: {
    AppLayout,
    VolumeUpIcon,
    TagIcon,
    CheckCircleIcon,
    XCircleIcon
  },

  mounted() {
    // 単語→意味の場合、単語表示のタイミングで再生
    if (this.mode == 1) {
      this.playMp3(this.word.audio_url);
    }
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
      this.isAnsered = true;
    },
    // Nextボタンイベント
    nextWord(isCorrect) {
      // location.reload();
      this.$inertia.get(route('word.index', [this.mode, this.word.section_id, this.word.id, this.answerTime, isCorrect]));
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
    }
  }
});
</script>
