<template>
    <div class="h-[600px] bg-[url('https://www.part.lt/img/a08fb432b1938be6a2df08bb72dc36756.jpg')] bg-cover object-right inset-0 w-full md:object-center">
        <div class="h-full w-full overflow-hidden">
            <div class="flex h-full items-center justify-center">
                <div class="px-6 text-center text-white md:px-12">
                    <h1 class="mb-6 text-5xl font-Lemon">Coming Soon!</h1>
                    <h3 class="mb-8 text-3xl opacity-50 font-Lemon">STAY TURNED</h3>
                    <div  v-if="distance >= 0">
                        <div class="flex flex-wrap items-center justify-center gap-4 p-2">
                            <div class="px-6 py-2">
                                <div id="days" class="font-Lemon text-5xl text-white text-gray-800">{{ days }}</div>
                                <div class="text-xs uppercase text-white text-gray-500">days</div>
                            </div>
                            <div class="px-6 py-2">
                                <div id="hours" class="font-Lemon text-5xl text-white text-gray-800">{{ hours }}</div>
                                <div class="text-xs uppercase text-white text-gray-500">hours</div>
                            </div>
                            <div class="px-6 py-2">
                                <div id="minutes" class="font-Lemon text-5xl text-white text-gray-800">{{ minutes }}</div>
                                <div class="text-xs uppercase text-white text-gray-500">minutes</div>
                            </div>
                            <div class="px-6 py-2">
                                <div class="font-Lemon text-5xl text-white">{{ seconds }}</div>
                                <div class="text-xs uppercase text-white text-gray-500">seconds</div>
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

<script>
import { ref, computed, onMounted, onUnmounted } from 'vue';

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
