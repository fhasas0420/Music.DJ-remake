<script setup>
import { Head, usePage, router } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue';
import RegisterModal from '@/Pages/Auth/RegisterModal.vue';
import LoginModal from '@/Pages/Auth/LoginModal.vue';
import Footer from '@/Components/Footer.vue';
import Header from '@/Components/Header.vue';
import Block from '@/Components/block.vue';
import { ref, watch} from 'vue';

const isRegisterModalOpen = ref(false);
const isLoginModalOpen = ref(false);
const page = usePage();

const toggleRegisterModal = () => {
    isRegisterModalOpen.value = !isRegisterModalOpen.value;

};

const toggleLoginModal = () => {
    isLoginModalOpen.value = !isLoginModalOpen.value;
};

watch(() => page.url, (newUrl) => {
  if (newUrl === '/login') {
    isLoginModalOpen.value = true;
  }
  if (newUrl === '/register') {
    isRegisterModalOpen.value = true;
  }
},{ immediate: true });


const closeRegisterModal = () => {
    isRegisterModalOpen.value = false;
    if (page.url === '/register') {
        router.visit('/');
    }
};

const closeLoginModal = () => {
    isLoginModalOpen.value = false;
    if (page.url === '/login') {
        router.visit('/');
    }
};

</script>

<template>
    <Head title="Join the party! - Music.DJ" />
    <NavBar  @open-register-modal="toggleRegisterModal" @open-login-modal="toggleLoginModal"/>
    <RegisterModal :isOpen="isRegisterModalOpen" :onClose="closeRegisterModal" />
    <LoginModal :isOpen="isLoginModalOpen" :onClose="closeLoginModal" />
    <main>
        <div class="min-h-screen">
            <Header/>
            <Block/>
            <Footer/>
        </div>
    </main>
</template>
