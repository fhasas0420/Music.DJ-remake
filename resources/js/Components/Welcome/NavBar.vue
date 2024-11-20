<template>
  <nav class="bg-black fixed w-full z-20 top-0 left-0 border-b">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between px-6 py-4">
      <a :href="route('welcome')" class="flex items-center">
        <img src="/images/logo.png" class="h-10" alt="Music.DJ">
        <span class="self-center text-2xl font-semibold text-white whitespace-nowrap">Music.DJ</span>
      </a>
      <div class="hidden md:flex space-x-4">
        <button type="button" @click="$emit('open-register-modal')"
          class="text-white bg-gradient-to-br from-top to-bot rounded-full text-sm px-5 py-2.5 text-center uppercase font-Lemon">Sign up now</button>
        <button type="button" @click="$emit('open-login-modal')" class="text-white border border-white rounded-full text-sm px-5 py-2.5 text-center uppercase border-2 border-solid border-white font-Lemon">Login</button>
      </div>
      <Icon icon="ph:list" color="white" class="h-8 w-8 mt-1 cursor-pointer md:hidden" @click="toggleMenu" />
    </div>
    <div :class="{ 'block': isMenuOpen, 'hidden': !isMenuOpen }" class="items-center justify-between w-full md:flex md:w-auto md:order-1">
      <ul class="flex flex-col p-4 md:p-0 font-medium">
        <li class="md:hidden">
          <button type="button" @click="$emit('open-register-modal')" class="block w-full text-white bg-gradient-to-br from-top to-bot rounded-full text-sm px-5 py-2.5 text-center mb-2 uppercase font-Lemon">Sign up now</button>
          <button type="button" @click="$emit('open-login-modal')" class="block w-full text-white bg-black rounded-full text-sm px-5 py-2.5 text-center mb-2 uppercase font-Lemon border-2 border-solid border-white">Login</button>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script setup>
import { Icon } from '@iconify/vue';
import { ref } from "vue";

const isMenuOpen = ref(false);
const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};
</script>
