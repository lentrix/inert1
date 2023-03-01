<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    "auth": {
        "email": String,
        "name": String
    }
})

</script>

<template>
    <div class="flex justify-between p-4 bg-blue-900 text-white">
        <div class="branding text-xl">
            Inventory System
        </div>
        <nav>
            <ul class="flex space-x-2">
                <li><Link href="/" class="hover:bg-gray-300 hover:text-blue-900 p-2 rounded">Home</Link></li>
                <li><Link href="/employees" class="hover:bg-gray-300 hover:text-blue-900 p-2 rounded">Employees</Link></li>
                <li><Link href="/items" class="hover:bg-gray-300 hover:text-blue-900 p-2 rounded">Items</Link></li>
            </ul>
        </nav>
        <div class="auth-info flex space-x-2">
            <div class="p-2">User: {{ auth ? auth.name : "Guest"}}</div>
            <Link href="/login" class="hover:bg-gray-300 hover:text-blue-900 p-2 rounded">Login</Link>
        </div>
    </div>
	<slot />
</template>
