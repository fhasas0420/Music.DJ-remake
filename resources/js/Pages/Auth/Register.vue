<template>
    <div v-if="isOpen" class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="p-4 md:p-5 border-b rounded-t flex justify-between items-start">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-black text-center">New user?</h3>
                        <p class="text-black mt-2 text-center">Use the form below to create your account.</p>
                    </div>
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
                                autofocus
                                autocomplete="name"
                            />
                            <InputError class="mt-2" :message="form.errors.username" />
                        </div>
                        <div>
                            <InputLabel for="email" value="Enter your email"/>
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="text"
                                class="mt-1 block w-full user-invalid:border-red"
                                required
                                autocomplete="email"
                            />
                            <InputError class="mt-2" :message="form.errors.email"/>
                        </div>
                        <div>
                            <InputLabel for="password" value="Password"/>
                            <TextInput
                                id="password"
                                v-model="form.password"
                                type="password"
                                class="mt-1 block w-full user-invalid:border-red"
                                required
                                autocomplete="new-password"
                            />
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>
                        <div>
                            <InputLabel for="password_confirmation" value="Confirm password"/>
                            <TextInput
                                id="password_confirmation"
                                v-model="form.password_confirmation"
                                type="password"
                                class="mt-1 block w-full user-invalid:border-red"
                                required
                                autocomplete="new-password"
                            />
                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="terms">
                                <div class="inline-flex items-center">
                                    <Checkbox id="terms" v-model:checked="form.terms" name="terms" required class="user-invalid:border-red"/>
                                    <div class="ms-2 inline">
                                        I agree to the <a target="_blank" :href="route('terms.show')" class="underline rounded-md ">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline rounded-md ">Privacy Policy</a>
                                    </div>
                                </div>
                                <InputError class="mt-2" :message="form.errors.terms" />
                            </InputLabel>
                        </div>
                        <div class="flex justify-center mt-4">
                            <button type="submit" class="bg-gradient-to-br from-top to-bot text-white rounded-full font-medium text-sm px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="p-4 md:p-5 flex justify-center items-center bg-gradient-to-br from-top to-bot">
                    <p class="text-white mr-4">Already have an account?</p>
                    <a :href="route('login')" type="button" class="bg-gray text-white rounded-full font-medium text-sm px-5 py-2.5 text-center cursor-pointer">Log in</a>
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
});

const form = useForm({
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>