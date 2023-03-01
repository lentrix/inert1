<template layout="default">

    <div class="p-8">
        <h1 class="text-4xl">List of Items</h1>
        <hr>
        <table class="w-full border">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Value</th>
            </tr>
            <tr v-for="item of items">
                <td class="border border-gray-300 p-2">{{ item.name }}</td>
                <td class="border border-gray-300 p-2">{{ item.description }}</td>
                <td class="border border-gray-300 p-2">{{ item.status }}</td>
                <td class="border border-gray-300 p-2">{{ item.value }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    items: Array
})

</script>
