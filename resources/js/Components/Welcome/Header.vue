<template>
  <div
    class="h-[600px] bg-[url('https://www.part.lt/img/a08fb432b1938be6a2df08bb72dc36756.jpg')] bg-cover bg-center w-full"
  >
    <div class="flex h-full items-center justify-center text-white">
      <div class="text-center max-w-screen-lg px-4">
        <h1 class="mb-4 text-4xl md:text-6xl font-Lemon">Coming Soon!</h1>
        <h3 class="mb-6 text-xl md:text-3xl opacity-75 font-Lemon">STAY TURNED</h3>
        <div v-if="distance >= 0">
          <div class="flex flex-wrap justify-center gap-4">
            <div class="text-center">
              <div class="font-Lemon text-4xl md:text-5xl">{{ days }}</div>
              <div class="text-xs md:text-sm uppercase text-gray-300">days</div>
            </div>
            <div class="text-center">
              <div class="font-Lemon text-4xl md:text-5xl">{{ hours }}</div>
              <div class="text-xs md:text-sm uppercase text-gray-300">hours</div>
            </div>
            <div class="text-center">
              <div class="font-Lemon text-4xl md:text-5xl">{{ minutes }}</div>
              <div class="text-xs md:text-sm uppercase text-gray-300">minutes</div>
            </div>
            <div class="text-center">
              <div class="font-Lemon text-4xl md:text-5xl">{{ seconds }}</div>
              <div class="text-xs md:text-sm uppercase text-gray-300">seconds</div>
            </div>
          </div>
        </div>
        <div v-else>
          <p class="font-Lemon text-3xl md:text-5xl mt-6">EXPIRED</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, computed, onMounted, onUnmounted } from "vue";

export default {
  setup() {
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

    return {
      days,
      hours,
      minutes,
      seconds,
      distance,
    };
  },
};
</script>
