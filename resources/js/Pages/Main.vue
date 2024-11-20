<template>
    <Head title="Browser - Music.DJ" />
    <div class="flex flex-col h-screen bg-black">
        <main class="flex-grow overflow-hidden">
            <Sidebar />
        </main>
        <Footer />
    </div>
</template>

<script setup>
    import { Head } from '@inertiajs/vue3';
    import Sidebar from '@/Components/Sidebar.vue';
    import Footer from '@/Components/Welcome/Footer.vue';
</script>
