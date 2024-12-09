<template>
    <div v-if="isOpen" class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black bg-opacity-50">
       <div class="relative p-4 w-full max-w-md max-h-full">
           <div class="relative bg-white rounded-lg shadow">
               <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                   <h3 class="text-xl font-semibold text-black">Sign in</h3>
                   <Icon icon="akar-icons:cross" class="h-4 w-4 text-black mt-1 cursor-pointer" @click="onClose" />
               </div>
               <div class="p-4 md:p-5">
                   <form class="space-y-4" @submit.prevent="submit" novalidate>
                        <div>
                            <InputLabel for="username" value="Username"/>
                            <TextInput
                                id="username"
                                v-model="form.username"
                                type="text"
                                class="mt-1 block w-full user-invalid:border-red"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.username" />
                        </div>
                        <div>
                            <InputLabel for="password" value="Password"/>
                            <TextInput
                                id="password"
                                v-model="form.password"
                                type="password"
                                class="mt-1 block w-full user-invalid:border-red"
                                required
                                autocomplete
                            />
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>
                        <div class="block mt-4 flex justify-between items-center">
                            <label class="flex items-center">
                                <Checkbox v-model:checked="form.remember" name="remember" />
                                <span class="ms-2 text-sm text-black">Remember me</span>
                            </label>
                        <a class="inline-block align-baseline text-sm text-black" :href="route('forgot-password')">Forgot Password?</a>
                        </div>
                       <div class="flex justify-center mt-4">
                            <button type="submit" class="bg-gradient-to-br from-top to-bot text-white rounded-full font-medium text-sm px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Login</button>
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
import Checkbox from '@/Components/Checkbox.vue';

const props = defineProps({
    isOpen: Boolean,
    onClose: Function,
    canResetPassword: Boolean,
    status: String
});

const form = useForm({
    username: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

</script>