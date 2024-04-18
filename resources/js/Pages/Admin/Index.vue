<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({ ramens: Object })

</script>

<template>
    <h1>一覧画面</h1>

    <div v-for="ramen in ramens">
        <div class="
            bg-slate-300
            mb-4
            ">
            <div>{{ ramen.name }}</div>
            <div>{{ ramen.address }}</div>
            <div>{{ ramen.type }}</div>
            <div>{{ ramen.taste }}</div>
            <div>{{ ramen.time_open }}</div>
            <div>{{ ramen.time_close }}</div>
            <div>{{ ramen.date_open }}</div>
            <div>{{ ramen.day_close }}</div>

            <Link :href="route('admin.ramen.show', ramen)">詳細</Link>
            <Link :href="route('admin.ramen.edit', ramen)">編集</Link>
        </div>
    </div>

    <Link :href="route('admin.ramen.create')">新規作成</Link>

</template>
