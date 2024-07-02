<script setup>
import { defineProps } from 'vue';
const props = defineProps({
    label: String
});
</script>

<template>
    <button >{{ label }}</button>
</template>

<style lang='scss' scoped>
 button {
     background: rgb(236, 72, 153);
     background: linear-gradient(90deg, rgba(236, 72, 153, 1) 0%, rgba(38, 28, 82, 1) 100%);
     margin: 10px 10px 10px 0;
     padding: 15px 25px;
     border-radius: 35px;
     font-size: 18px;
     font-weight: bold;
     border: 1px solid rgb(236, 72, 153);
 }
 i {
     margin-left: 5px;
 }
</style>