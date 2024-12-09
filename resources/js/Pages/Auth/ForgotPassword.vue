<template>
    <div v-if="isOpen" class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black bg-opacity-50">
       <div class="relative p-4 w-full max-w-md max-h-full">
           <div class="relative bg-white rounded-lg shadow">
               <div class="p-4 md:p-5 border-b rounded-t flex justify-between items-start">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-black text-center">Password Reset</h3>
                        <p class="text-black mt-2 text-center">Provide the email address associated with your account to recover your password.</p>
                    </div>
                    <Icon icon="akar-icons:cross" class="h-4 w-4 text-black mt-1 cursor-pointer" @click="onClose" />
               </div>
               <div class="p-4 md:p-5">
                    <form class="space-y-4" @submit.prevent="submit" novalidate>
                        <div>
                            <InputLabel for="email" value="Enter your email"/>
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="email"
                                class="mt-1 block w-full user-invalid:border-red"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.email"/>
                        </div>
                       <div class="flex justify-center mt-4">
                            <button type="submit" class="bg-gradient-to-br from-top to-bot text-white rounded-full font-medium text-sm px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Reset</button>
                        </div>
                    </form>
               </div>
           </div>
       </div>
   </div>
</template>

<script setup>
import { Icon } from '@iconify/vue';
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
    form.post(route('password.email'));
};
</script>