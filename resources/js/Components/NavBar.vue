<template>
    <nav class="bg-black fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"  @click="$emit('open-register-modal')" class="text-white bg-gradient-to-br from-top to-bot rounded-full text-sm px-5 py-2.5 text-center me-2 uppercase font-Lemon">Sign up now</button>
                <button type="button"  @click="$emit('open-login-modal')" class="text-white bg-black rounded-full text-sm px-5 py-2.5 text-center me-2 uppercase font-Lemon border-2 border-solid border-white">Login</button>
            </div>
        </div>
    </nav>
</template>

<script setup>

</script>
