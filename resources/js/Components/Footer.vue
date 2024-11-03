<template>
    <footer class="bg-black">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-10">
                    <a :href="route('welcome')" class="flex items-center">
                        <img src="https://www.part.lt/img/14e1c5cbb1ee8c08db3403279c78ef5d933.png" class="h-10" alt="Music.DJ">
                        <span class="self-center text-2xl font-semibold text-white text-align: left whitespace-nowrap">Music.DJ</span>
                    </a>
                    <p class="text-white mt-2">&copy; 2024. All Rights Reserved.</p>
                </div>
                <div class="grid grid-cols-1 gap-8 sm:gap-6 sm:grid-cols-1">
                    <div>
                        <ul class="text-white font-medium">
                            <li>
                                <a href="#" class="hover:underline">Facebook</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Twitter / X</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
