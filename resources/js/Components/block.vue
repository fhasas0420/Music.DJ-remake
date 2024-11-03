<template>
    <div class="h-[300px] bg-gray-200 md:bg-center bg-right bottom-0 w-full flex flex-col text-left py-16 pl-4 md:pl-10 lg:pl-80">
        <h1 class="text-white text-xl md:text-5xl font-bold p-0 mb-3">Stream music together!</h1>
        <h2 class="text-purple text-xl md:text-2xl font-sans p-0 mb-4">Listen, play, discover and connect with music fans around the world!</h2>
        <p class="text-white ">Customize your profile, unlock avatars and earn points!</p>
        <div class="inline-flex p-5 pl-2 justify-start">
            <a :href="route('register')" value="cancel" class="text-white bg-gradient-to-br from-top to-bot rounded-full text-sm px-5 py-2.5 text-center uppercase font-Lemon">Sign up - It's free!</a>
        </div>
    </div>
</template>
