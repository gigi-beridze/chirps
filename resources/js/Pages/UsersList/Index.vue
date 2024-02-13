<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import UserListTemplate from '@/Components/UserListTemplate.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { 
    useForm, 
    Head 
} from '@inertiajs/vue3';

defineProps(['users']);

</script>
 
<template>
    <Head title="users" />

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                <div class="p-6 flex space-x-2">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Buttons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <UserListTemplate
                                v-for="user in users"
                                :key="user.id"
                                :user="user"
                            />
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>