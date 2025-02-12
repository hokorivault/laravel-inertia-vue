<template>
        <div>
            <p>About component</p>
            <p>User: {{ user }}</p>
        </div>
</template>
    
<script setup>
    defineProps({
        user: String
    })
</script>
    
<style>
    
</style>