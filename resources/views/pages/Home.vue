<template>
    <nav>
        <ul class="flex space-x-2 p-4 shadow">
            <li><Link href="/" class="hover:bg-gray-300 p-2 rounded">Home</Link></li>
            <li><Link href="/items" class="hover:bg-gray-300 p-2 rounded">Items</Link></li>
        </ul>
    </nav>
    <div class="p-8">
        <h1 class="text-4xl">Home Page</h1>
    </div>
</template>

<script setup>

import { Link } from '@inertiajs/inertia-vue3'

</script>
