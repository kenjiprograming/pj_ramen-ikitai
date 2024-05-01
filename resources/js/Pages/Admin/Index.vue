<script setup>
import { Link, usePage, useForm } from '@inertiajs/vue3'

defineProps({ ramens: Object })
const page = usePage()

const form = useForm({});
const deleteRamen = (ramen) => {
    form.delete(route('admin.ramen.destroy', ramen), {
        preserveScroll: true,
    })
}
</script>

<template>
    <h1>一覧画面</h1>

    <div v-if="page.props.flash.message"
        class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
        role="alert">
        <span class="font-medium">
            {{ page.props.flash.message }}
        </span>
    </div>


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
            <Link href="#" @click="deleteRamen(ramen)">削除</Link> <!-- ←追加 -->
        </div>
    </div>

    <Link :href="route('admin.ramen.create')">新規作成</Link>

</template>
