<template>
    <Head title="Join the party! - Music.DJ"/>
    <NavBar @open-register-modal="toggleRegisterModal" @open-login-modal="toggleLoginModal"/>
    <RegisterModal :isOpen="isRegisterModalOpen" :onClose="closeRegisterModal"/>
    <LoginModal :isOpen="isLoginModalOpen" :onClose="closeLoginModal"/>
    <ForgotPasswordModal :is-open="isForgotPasswordModal" :on-close="closeForgotPasswordModal"/>
    <main class="flex flex-col min-h-screen bg-black">
        <div>
            <Header/>
            <Block />
            <Footer/>
        </div>
    </main>
</template>
<script setup>
  import { Head, usePage, router } from "@inertiajs/vue3";
  import NavBar from "@/Components/Welcome/NavBar.vue";
  import RegisterModal from "@/Pages/Auth/RegisterModal.vue";
  import LoginModal from "@/Pages/Auth/LoginModal.vue";
  import ForgotPasswordModal from "@/Pages/Auth/ForgotPasswordModal.vue";
  import Footer from "@/Components/Welcome/Footer.vue";
  import Header from "@/Components/Welcome/Header.vue";
  import Block from "@/Components/Welcome/Main.vue";
  import { ref, watch } from "vue";
  
  const isRegisterModalOpen = ref(false);
  const isLoginModalOpen = ref(false);
  const isForgotPasswordModal = ref(false);
  const page = usePage();
  
  const toggleRegisterModal = () => {
    isRegisterModalOpen.value = !isRegisterModalOpen.value;
  };
  
  const toggleLoginModal = () => {
    isLoginModalOpen.value = !isLoginModalOpen.value;
  };
  
  watch(
    () => page.url,
    (newUrl) => {
      if (newUrl === "/login") isLoginModalOpen.value = true;
      if (newUrl === "/register") isRegisterModalOpen.value = true;
      if (newUrl === "/forgot-password") isForgotPasswordModal.value = true;
    },
    { immediate: true }
  );
  
  const closeRegisterModal = () => {
    isRegisterModalOpen.value = false;
    if (page.url === "/register") router.visit("/");
  };
  
  const closeForgotPasswordModal = () => {
    isForgotPasswordModal.value = false;
    if (page.url === "/forgot-password") router.visit("/");
  };
  
  const closeLoginModal = () => {
    isLoginModalOpen.value = false;
    if (page.url === "/login") router.visit("/");
  };
  </script>
