<template>
      <NavBarInMainPage />
      <!-- Sidebar Container -->
      <div class="sidebar w-full sm:w-[2.35rem] bg-gray-200 overflow-hidden border-b sm:border-r sm:border-b-0 sm:hover:w-56 sm:hover:bg-white sm:hover:shadow-lg sm:z-10 sm:relative">
        <!-- Sidebar Content -->
        <div class="flex flex-row sm:flex-col justify-between items-center sm:items-start pt-[110px] sm:pt-9 pb-6 sm:h-screen sm:pb-6 bg-gray-200">
          <ul class="flex flex-row sm:flex-col space-x-4 sm:space-x-0 sm:space-y-2 tracking-wide">
            <li class="min-w-max">
              <a href="#" class="group flex items-center space-x-2 sm:space-x-4 px-2 py-3">
                <HomeIcon class="h-5 w-5 text-white" />
                <span class="text-white font-semi sm:block hidden">Home</span>
              </a>
            </li>
            <li class="min-w-max">
              <a href="#" class="group flex items-center space-x-2 sm:space-x-4 px-2 py-3">
                <ListBulletIcon class="h-5 w-5 text-white" />
                <span class="text-white font-semi sm:block hidden">Rooms</span>
              </a>
            </li>
            <li class="min-w-max">
              <a href="#" class="group flex items-center space-x-2 sm:space-x-4 px-2 py-3">
                <BookOpenIcon class="h-5 w-5 text-white" />
                <span class="text-white font-semi sm:block hidden">My Library</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
  </template>

  <script setup>
  import { BookOpenIcon, HomeIcon, ListBulletIcon } from '@heroicons/vue/24/solid'
  import NavBarInMainPage from '@/Components/NavBarInMainPage.vue';
  </script>
