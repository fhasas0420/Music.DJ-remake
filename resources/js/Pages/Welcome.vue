<script setup>
import { Head } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue';
import RegisterModal from '@/Pages/Auth/RegisterModal.vue';
import LoginModal from '@/Pages/Auth/LoginModal.vue';
import Footer from '@/Components/Footer.vue';
import { ref, watch } from 'vue';
import { useRoute, useRouter } from 'vue-router';

const isRegisterModalOpen = ref(false);
const isLoginModalOpen = ref(false);
const route = useRoute();
const router = useRouter();

const toggleRegisterModal = () => {
    isRegisterModalOpen.value = !isRegisterModalOpen.value;

};

const toggleLoginModal = () => {
    isLoginModalOpen.value = !isLoginModalOpen.value;
};

watch(route, (newRoute) => {
    if (newRoute.path === '/login') {
        isLoginModalOpen.value = true;
    }
    if (newRoute.path === '/register') {
        isRegisterModalOpen.value = true;
    }
});


const closeRegisterModal = () => {
    isRegisterModalOpen.value = false;
    if (route.path === '/register') {
        router.push({ path: '/' });
    }
};

const closeLoginModal = () => {
    isLoginModalOpen.value = false;
    if (route.path === '/login') {
        router.push({ path: '/' });
    }
};

</script>

<template>
    <Head title="Welcome" />
    <NavBar  @open-register-modal="toggleRegisterModal" @open-login-modal="toggleLoginModal"/>
    <RegisterModal :isOpen="isRegisterModalOpen" :onClose="closeRegisterModal" />
    <LoginModal :isOpen="isLoginModalOpen" :onClose="closeLoginModal" />
    <main>
        <div class="min-h-screen">

        </div>
    </main>
    <Footer/>
</template>
