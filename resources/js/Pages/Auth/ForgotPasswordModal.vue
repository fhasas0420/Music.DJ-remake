<template>
    <div v-if="isOpen" class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black bg-opacity-50">
       <div class="relative p-4 w-full max-w-md max-h-full">
           <div class="relative bg-white rounded-lg shadow">
               <div class="p-4 md:p-5 border-b rounded-t flex justify-between items-start">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-black text-center">Password Reset</h3>
                        <p class="text-black mt-2 text-center">Provide the email address associated with your account to recover your password.</p>
                    </div>
                   <button @click="onClose" type="button" class="end-2.5 text-black bg-transparent hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                       </svg>
                       <span class="sr-only">Close</span>
                   </button>
               </div>
               <div class="p-4 md:p-5 border-none">
                   <form class="space-y-4" @submit.prevent="submit">
                        <div>
                            <InputLabel for="email" value="Enter your email"/>
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="email"
                                class="mt-1 block w-full"
                            />
                            <InputError class="mt-2" :message="form.errors.email"/>
                        </div>
                       <div class="flex justify-center mt-4">
                            <button type="submit" class="bg-gradient-to-br from-top to-bot text-white rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Reset</button>
                        </div>
                    </form>
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
    status: String
});


const form = useForm({
    email: '',
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('forgot-password'), {
        onFinish: () => form.reset('email'),
    })

};

</script>
