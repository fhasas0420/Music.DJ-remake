<template>
    <footer>
        <div class="container mx-auto bg-black w-full p-6 py-6 lg:py-7 md:px-24">
            <div class="flex flex-col md:flex-row md:justify-between">
                <div class="flex justify-between w-full">
                    <div class="mb-4 md:mb-7 mt-4">
                        <a :href="route('welcome')" class="flex items-center">
                            <img src="/images/logo.png" class="h-10" alt="Music.DJ">
                            <span class="self-center text-2xl font-semibold text-white whitespace-nowrap">Music.DJ</span>
                        </a>
                        <p class="text-white mt-2">&copy; 2024. All Rights Reserved.</p>
                    </div>
                    <!-- Right Section - Social Links (on mobile, positioned to the right) -->
                    <div class="flex items-center space-x-6">
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

<script>
</script>