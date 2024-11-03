<template>
  <nav class="bg-black fixed w-full top-0 start-0 border-b">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
      <a :href="route('welcome')" class="flex items-center rtl:space-x-reverse">
        <img src="https://www.part.lt/img/14e1c5cbb1ee8c08db3403279c78ef5d933.png" class="h-10" alt="Music.DJ">
        <span class="self-center text-2xl font-semibold text-white text-align: left whitespace-nowrap">Music.DJ</span>
      </a>
      <div class="hidden md:flex flex-grow justify-center mt-4 md:mt-0">
        <div class="relative w-full max-w-lg">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3">
            <MagnifyingGlassIcon class="h-5 w-5 text-white" />
          </div>
          <input
            type="text"
            placeholder="Search by users, rooms, playlists or medias..."
            class="bg-black text-white border border-border rounded-full p-2 w-full pl-10"
          >
        </div>
      </div>
      <div class="flex items-center">
        <UserIcon class="h-5 w-5 text-white" />
        <span class="font-semibold text-white text-secondary">{{ $page.props.auth.user.username }}</span>
        <BellIcon class="h-5 w-5 ml-3 text-white cursor-pointer" />
        <button @click="toggleMobileMenu" class="text-white ml-4 inline-flex items-center md:hidden focus:outline-none">
          <MagnifyingGlassIcon class="h-5 w-5 text-white" />
        </button>
      </div>
    </div>
    <div v-if="isMobileMenuOpen" class="md:hidden p-4 bg-black border-t border-gray-700">
      <div class="relative w-full max-w-lg mb-4">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
          <MagnifyingGlassIcon class="h-5 w-5 text-white" />
        </div>
        <input
          type="text"
          placeholder="Search by users, rooms, playlists or medias..."
          class="bg-black text-white border border-border rounded-full p-2 w-full pl-10"
        >
      </div>
    </div>
  </nav>
</template>

<script setup>
import { BellIcon, MagnifyingGlassIcon, UserIcon } from '@heroicons/vue/24/solid'
import { ref } from 'vue'

const isMobileMenuOpen = ref(false)

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}
</script>

<style>
</style>
