<template>
  <div class="container mx-auto bg-black w-full md:px-20">
    <div class="flex items-center justify-between px-4 py-3">
      <a :href="route('welcome')" class="flex items-center">
        <img src="/images/logo.png" class="h-10" alt="Music.DJ">
        <span class="self-center text-2xl font-semibold text-white">Music.DJ</span>
      </a>
      <div class="hidden md:flex space-x-4">
        <button type="button" @click="$emit('open-register-modal')" class="rounded-full text-sm px-5 py-2.5 uppercase font-Lemon bg-gradient-to-br from-top to-bot text-white">Sign up now</button>
        <button type="button"  @click="$emit('open-login-modal')" class="rounded-full text-sm px-5 py-2.5 uppercase font-Lemon text-white border border-white">Login</button>
      </div>
      <Icon icon="ph:list" color="white" class="h-8 w-8 cursor-pointer md:hidden" @click="toggleMenu" />
    </div>
    <div :class="{ 'block': isMenuOpen, 'hidden': !isMenuOpen }" class="md:hidden bg-black">
      <ul class="flex flex-col items-center space-y-4 py-4">
        <li>
          <button type="button" @click="$emit('open-register-modal')" class="block w-full rounded-full text-sm px-5 py-2.5 uppercase font-Lemon bg-gradient-to-br from-top to-bot text-white">Sign up now</button>
        </li>
        <li>
          <button type="button" @click="$emit('open-login-modal')" class="block w-full rounded-full text-sm px-5 py-2.5 uppercase font-Lemon text-white border border-white">Login</button>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { Icon } from '@iconify/vue';
import { ref } from "vue";

const isMenuOpen = ref(false);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};
</script>
