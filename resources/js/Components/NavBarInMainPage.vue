<template>
  <nav class="bg-black fixed w-full top-0 start-0 border-b z-20">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
      <a :href="route('welcome')" class="flex items-center rtl:space-x-reverse">
        <img src="/images/logo.png" class="h-10" alt="Music.DJ">
        <span class="self-center text-2xl font-Nunito font-bold text-white text-align: left whitespace-nowrap">Music.DJ</span>
      </a>
      <div class="hidden md:flex flex-grow justify-center mt-4 md:mt-0" v-if="!$page.url.startsWith('/settings')">
        <div class="relative w-full max-w-lg">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3">
            <Icon icon="tabler:search" color="white" class="h-5 w-5"/>
          </div>
          <input type="text" placeholder="Search by users, rooms, playlists or medias..." class="bg-black text-white border border-border rounded-full p-2 w-full pl-10">
        </div>
      </div>
      <div class="flex items-center">
        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full transition p-1">
            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.username  ">
        </button>
        <span class="font-semibold text-white text-secondary flex flex-col items-center items-baseline mt-[20px] relative capitalize"> {{ $page.props.auth.user.username }}
            <Icon icon="fluent:chevron-down-12-filled" color="white" class="h-4 w-4 mt-1 cursor-pointer" @click="OpenDropdown()"/>
            <div class="absolute top-full right-9 w-[150px] bg-light-gray p-3 px-4 text-black border-[#0f1118] rounded-md shadow-lg" v-if="listOne">
                <a class="cursor-pointer flex items-center" :href="route('Settings')"><Icon icon="iconamoon:settings-thin" class="w-6 h-6 mr-1"/>Settings</a>
                <a class="cursor-pointer flex items-center text-red" @click="Logout"><Icon icon="ic:round-logout" class="w-6 h-6 mr-1"/>Log out</a>
            </div>
        </span>
        <Icon icon="bi:bell-fill" color="white" class="h-5 w-5 ml-2 cursor-pointer"/>
        <button @click="toggleMobileMenu" class="text-white ml-4 inline-flex items-center md:hidden" v-if="!$page.url.startsWith('/settings')">
          <Icon icon="tabler:search" color="white" class="h-5 w-5"/>
        </button>
      </div>
    </div>
    <div v-if="isMobileMenuOpen && !$page.url.startsWith('/settings')" class="md:hidden p-4 bg-black border-t">
      <div class="relative w-full max-w-lg mb-4">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
          <Icon icon="tabler:search" color="white" class="h-5 w-5"/>
        </div>
        <input type="text" placeholder="Search by users, rooms, playlists or medias..." class="bg-black text-white border border-border rounded-full p-2 w-full pl-10">
      </div>
    </div>
  </nav>
</template>

<script setup>
import { Icon } from '@iconify/vue';
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3';

const isMobileMenuOpen = ref(false)
const listOne = ref(false)
const form = useForm({});

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

function OpenDropdown() {
    listOne.value = !listOne.value;
}

const Logout = () => {
  form.post(route('atsijungimas'));
}
</script>

<style></style>