<template>
    <nav class="bg-black fixed w-full z-20 top-0 start-0 border-b">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
        <a :href="route('welcome')" class="flex items-center rtl:space-x-reverse">
          <img src="https://www.part.lt/img/14e1c5cbb1ee8c08db3403279c78ef5d933.png" class="h-10" alt="Music.DJ">
          <span class="self-center text-2xl font-semibold text-white text-align: left whitespace-nowrap">Music.DJ</span>
        </a>
        <div class="flex md:order-2 space-x-3 rtl:space-x-reverse">
          <div class="hidden md:flex space-x-4">
            <button type="button" @click="$emit('open-register-modal')" class="text-white bg-gradient-to-br from-top to-bot rounded-full text-sm px-5 py-2.5 text-center uppercase font-Lemon">Sign up now</button>
            <button type="button" @click="$emit('open-login-modal')" class="text-white hover:text-white border border-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-sm px-5 py-2.5 text-center uppercase border-2 border-solid border-white font-Lemon">Login</button>
          </div>
          <button data-collapse-toggle="navbar-sticky" type="button" @click="toggleMenu" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
          </button>
        </div>
        <div :class="{'block': isMenuOpen, 'hidden': !isMenuOpen}" class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
            <li class="md:hidden">
              <button type="button" @click="$emit('open-register-modal')" class="block w-full text-white bg-gradient-to-br from-top to-bot rounded-full text-sm px-5 py-2.5 text-center mb-2 uppercase font-Lemon">Sign up now</button>
              <button type="button" @click="$emit('open-login-modal')" class="block w-full text-white bg-black rounded-full text-sm px-5 py-2.5 text-center mb-2 uppercase font-Lemon border-2 border-solid border-white">Login</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </template>

  <script setup>
  import { ref } from 'vue';

  const isMenuOpen = ref(false);

  function toggleMenu() {
    isMenuOpen.value = !isMenuOpen.value;
  }
  </script>

  <style scoped>

  </style>
