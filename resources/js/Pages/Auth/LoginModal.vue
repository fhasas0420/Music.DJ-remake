<template>
    <div v-if="isOpen" class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black bg-opacity-50">
       <div class="relative p-4 w-full max-w-md max-h-full">
           <!-- Modal content -->
           <div class="relative bg-black rounded-lg shadow">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                   <h3 class="text-xl font-semibold text-white">
                       Login to our platform
                   </h3>
                   <button @click="onClose" type="button" class="end-2.5 text-white bg-transparent hover:bg-gray-200 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
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
                            <InputLabel for="username" value="Your username"/>
                            <TextInput
                                id="username"
                                v-model="form.username"
                                type="text"
                                class="mt-1 block w-full"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.username" />
                        </div>
                        <div>
                            <InputLabel for="password" value="Your password"/>
                            <TextInput
                                id="password"
                                v-model="form.password"
                                type="password"
                                class="mt-1 block w-full"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>
                        <div class="block mt-4">
                            <label class="flex items-center">
                                <Checkbox v-model:checked="form.remember" name="remember" />
                                <span class="ms-2 text-sm text-white">Remember me</span>
                            </label>
                        </div>
                       <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Login</button>
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
import Checkbox from '@/Components/Checkbox.vue';

const props = defineProps({
   isOpen: Boolean,
   onClose: Function,
});

const form = useForm({
    username: '',
    password: '',
    remember: false,
});


</script>
