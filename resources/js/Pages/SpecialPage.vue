<template>
    <div>
        <p>Special Page component</p>
        <p>Vtuber: {{ vtuber }}</p>
    </div>
</template>

<script setup>
defineProps({
    vtuber: String
})
</script>

<style>

</style>