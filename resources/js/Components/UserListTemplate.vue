<script setup>
import Dropdown from '@/Components/Dropdown.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps(['user']);
 
const editing = ref(false);
</script>
 
<template>
    <tr>
        <td class="px-4 py-2">{{ user.id }}</td>
        <td class="px-4 py-2">{{ user.name }}</td>
        <td class="px-4 py-2">{{ user.email }}</td>
        <td class="px-4 py-2 text-red-600" v-if="user.isAdmin">Admin</td>
        <td class="px-4 py-2" v-else>User</td>
        <td class="px-4 py-2">
            <Dropdown>
                <template #trigger>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                    </button>
                </template>
                <template #content>
                    <button class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 transition duration-150 ease-in-out" @click="editing = true">
                        Edit
                    </button>
                    <DropdownLink as="button" :href="route('users.destroy', user.id)" method="delete">
                        Delete
                    </DropdownLink>
                </template>
            </Dropdown>
        </td>
    </tr>
    <!-- <form v-if="editing" @submit.prevent="form.put(route('users.update', user.id), { onSuccess: () => editing = false })">
                <textarea v-model="form.message" class="mt-4 w-full text-gray-900 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                <InputError :message="form.errors.message" class="mt-2" />
                <div class="space-x-2">
                    <PrimaryButton class="mt-4">Save</PrimaryButton>
                    <button class="mt-4" @click="editing = false; form.reset(); form.clearErrors()">Cancel</button>
                </div>
            </form> -->
</template>