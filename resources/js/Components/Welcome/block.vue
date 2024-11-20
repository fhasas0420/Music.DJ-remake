<template>
    <div class="bg-gray">
        <div class="mx-auto w-full max-w-screen-xl px-6 py-20 relative">
            <div class="flex flex-wrap items-start justify-between">
                <div class="mt-4 w-full lg:w-5/14">
                    <h1 class="text-white text-xl md:text-5xl font-bold mb-3">Stream music together!</h1>
                    <h2 class="text-purple text-xl md:text-2xl font-sans mb-4">Listen, play, discover and connect with music fans around the world!</h2>
                    <p class="mb-6 text-white"> Customize your profile, unlock avatars, and earn points!</p>
                </div>
                <div class="inline-flex pl-0 justify-start">
                    <a :href="route('register')" class="text-white bg-gradient-to-br from-top to-bot rounded-full text-sm px-5 py-2.5 text-center uppercase font-Lemon">Sign up - It's free!</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
</script>
