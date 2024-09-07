<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
  userUuid: {
    type: String,
    required: true
  },
medicines: Array,
maxOrder: {
    type: Number,
    required: true
}
});

</script>

<template>

    <Head title="薬設定" />

    <AuthenticatedLayout :userUuid="userUuid">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">薬設定</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <div class="space-y-4 w-full max-w-md">

                            <div v-for="medicine in medicines" class="flex items-center space-x-2">
                                <div class="flex items-center space-x-2 w-full">
                                    <label class="flex-shrink-0">順番</label>
                                    <select name="order" v-model="medicine.order" class="border rounded px-3 py-1 w-16">
                                        <option v-for="number in maxOrder" :key="number" :value="number">
                                            {{ number }}
                                        </option>
                                    </select>

                                    <input type="text" readonly :value="medicine.name"
                                        class="border rounded px-3 py-1 flex-grow bg-gray-200">
                                </div>
                                <input type="text" readonly :value="medicine.dosage_unit"
                                    class="border rounded px-3 py-1 w-16 bg-gray-200">
                                <input type="text" readonly :value="medicine.medication_abbr"
                                    class="border rounded px-3 py-1 w-16 bg-gray-200">
                                <button class="bg-green-500 text-white rounded px-4 py-2">編集</button>
                            </div>

                            <!-- 追加ボタン -->
                            <button class="bg-green-500 text-white rounded px-4 py-2 mt-4">追加</button>

                            <!-- 設定ボタン -->
                            <button class="bg-green-500 text-white rounded px-8 py-3 mt-6">設定</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
