<!-- 途中 -->

<script setup>
import { ref } from 'vue';

const props = defineProps([
    'title',
]);

const inputData = ref('');

</script>

<template>
    <div class="
        mb-6
        ">
        <div class="
            mb-2
            font-medium
            ">{{ title }}
        </div>
        <!-- <div v-if="form.errors.name" class="
            text-red-500
            ">{{ form.errors.name }}
        </div> -->
        <input type="text" v-model="inputData" @input="$emit('updata:inputData', inputData)" :placeholder="`${title}が入ります`" class="
            py-2 px-3
            w-full
            border-gray-300
            rounded-lg
            ">
    </div>
</template>
