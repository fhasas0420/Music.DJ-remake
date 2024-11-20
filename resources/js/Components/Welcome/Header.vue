<template>
  <div class="bg-center bg-cover bg-[url('/images/header.png')] bg-no-repeat blur-none z-0">
    <div class="mx-auto w-full max-w-screen-xl px-6 py-40 relative">
      <div class="flex flex-wrap items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mb-6 text-4xl md:text-5xl font-Lemon">Coming Soon!</h1>
          <h3 class="mb-8 text-2xl md:text-3xl opacity-70 font-Lemon">STAY TURNED</h3>
          <div v-if="distance >= 0">
            <div class="flex flex-wrap items-center justify-center gap-4 p-2">
              <div class="px-6 py-2">
                <div id="days" class="font-Lemon text-5xl text-white">{{ days }}</div>
                <div class="text-xs uppercase text-white">days</div>
              </div>
              <div class="px-6 py-2">
                <div id="hours" class="font-Lemon text-5xl text-white">{{ hours }}</div>
                <div class="text-xs uppercase text-white">hours</div>
              </div>
              <div class="px-6 py-2">
                <div id="minutes" class="font-Lemon text-5xl text-white">{{ minutes }}</div>
                <div class="text-xs uppercase text-white">minutes</div>
              </div>
              <div class="px-6 py-2">
                <div class="font-Lemon text-5xl text-white">{{ seconds }}</div>
                <div class="text-xs uppercase text-white">seconds</div>
              </div>
            </div>
          </div>
          <div v-else>
            <p class="font-Lemon text-5xl text-white">EXPIRED</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';

const countDownDate = new Date("Mar 1, 2025 00:00:00").getTime();
const now = ref(new Date().getTime());
let timer = null;

const distance = computed(() => countDownDate - now.value);
const days = computed(() => Math.floor(distance.value / (1000 * 60 * 60 * 24)));
const hours = computed(() => Math.floor((distance.value % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
const minutes = computed(() => Math.floor((distance.value % (1000 * 60 * 60)) / (1000 * 60)));
const seconds = computed(() => Math.floor((distance.value % (1000 * 60)) / 1000));

onMounted(() => {
  timer = setInterval(() => {
    now.value = new Date().getTime();
  }, 1000);
});

onUnmounted(() => {
  clearInterval(timer);
});
</script>
