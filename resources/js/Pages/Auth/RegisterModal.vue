<template>
    <div v-if="isOpen" class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="p-4 md:p-5 border-b rounded-t flex justify-between items-start">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-black text-center">
                            New user?
                        </h3>
                        <p class="text-black mt-2 text-center">Use the form below to create your account.</p>
                    </div>
                    <button @click="onClose" type="button" class="end-2.5 text-black bg-transparent hover:bg-gray-200 hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" @submit.prevent="submit">
                        <div>
                            <InputLabel for="username" value="Username"/>
                            <TextInput
                                id="username"
                                v-model="form.username"
                                type="text"
                                class="mt-1 block w-full"
                            />
                            <InputError class="mt-2" :message="form.errors.username" />
                        </div>
                        <div>
                            <InputLabel for="email" value="Enter your email"/>
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="text"
                                class="mt-1 block w-full"
                            />
                            <InputError class="mt-2" :message="form.errors.email"/>
                        </div>
                        <div>
                            <InputLabel for="password" value="Password"/>
                            <TextInput
                                id="password"
                                v-model="form.password"
                                type="password"
                                class="mt-1 block w-full"
                            />
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>
                        <div>
                            <InputLabel for="password_confirmation" value="Confirm password"/>
                            <TextInput
                                id="password_confirmation"
                                v-model="form.password_confirmation"
                                type="password"
                                class="mt-1 block w-full"
                            />
                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                        </div>
                        <div class="flex justify-center mt-4">
                            <button type="submit" class="bg-gradient-to-br from-top to-bot text-white rounded-full hover:bg-blue-800 font-medium text-sm px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Sign Up</button>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="p-4 md:p-5 flex justify-center items-center bg-gradient-to-br from-top to-bot">
                    <p class="text-white mr-4">Already have an account?</p>
                    <a :href="route('loginas')" type="button" class="bg-gray text-white rounded-full hover:bg-blue-800 font-medium text-sm px-5 py-2.5 text-center">Log in</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
   isOpen: Boolean,
   onClose: Function,
});

const form = useForm({
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
