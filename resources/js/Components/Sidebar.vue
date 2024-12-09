<template>
  <NavBarInMainPage />
  <div class="sidebar w-full sm:w-[2.35rem] bg-gray-200 overflow-hidden border-b sm:border-r sm:border-b-0 sm:hover:w-56 z-10 sm:z-20 fixed">
    <div class="flex flex-row sm:flex-col justify-between pt-[150px] sm:pt-9 pb-6 sm:h-screen sm:pb-6 pl-6 sm:pl-0">
      <ul class="flex flex-row sm:flex-col space-x-4 sm:space-x-0 sm:space-y-2 tracking-wide h-8 sm:h-10">
        <li class="min-w-max">
          <a :href="route('Home')" class="group flex items-center space-x-2 sm:space-x-4 px-2 py-3 hover:bg-gradient-to-br from-top to-bot rounded-2xl sm:rounded-none" :class="{'bg-gradient-to-br from-top to-bot' : $page.url.startsWith('/main')}">
            <Icon icon="ion:home" color="white" class="h-5 w-5"/>
            <span class="text-white font-semi">Home</span>
          </a>
        </li>
        <li class="min-w-max">
          <a :href="route('Rooms')" class="group flex items-center space-x-2 sm:space-x-4 px-2 py-3 hover:bg-gradient-to-br from-top to-bot rounded-2xl sm:rounded-none" :class="{'bg-gradient-to-br from-top to-bot' : $page.url.startsWith('/rooms')}">
            <Icon icon="fluent:conference-room-20-filled" color="white" class="h-5 w-5"/>
            <span class="text-white font-semi">Rooms</span>
          </a>
        </li>
        <li class="min-w-max">
          <a :href="route('Library')" class="group flex items-center space-x-2 sm:space-x-4 px-2 py-3 hover:bg-gradient-to-br from-top to-bot rounded-2xl sm:rounded-none" :class="{'bg-gradient-to-br from-top to-bot' : $page.url.startsWith('/my-library')}">
            <Icon icon="solar:music-library-2-linear" color="white" class="h-5 w-5"/>
            <span class="text-white font-semi">My Library</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { Icon } from '@iconify/vue';
import NavBarInMainPage from '@/Components/NavBarInMainPage.vue';
</script>

<style scoped>
</style>