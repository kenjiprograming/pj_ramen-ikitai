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
    <div class="
    bg-gray-200
    py-6
    ">
        <h1 class="
        bg-white
        w-11/12 h-32
        mx-auto
        rounded-xl
        text-center content-center
        text-black text-xl font-bold
        ">一覧画面</h1>
    </div>

    <div v-if="page.props.flash.message"
        class="p-4 text-sm text-green-700 bg-green-100 dark:bg-green-200 dark:text-green-800"
        role="alert">
        <span class="font-medium">
            {{ page.props.flash.message }}
        </span>
    </div>


    <div class="
    bg-gray-200
    py-4
    ">

        <div class="
        w-11/12
        mx-auto
        ">

            <div class="
            bg-gray-100
            h-14 px-5
            content-center
            font-semibold
            rounded-t-xl
            ">
                <Link :href="route('admin.ramen.create')" class="
                    border-b border-black
                    ">新規作成
                </Link>

                <span class="
                    pl-4
                    ">count: {{ ramens.length }}
                </span>
            </div>

            <div class="
            bg-white
            mx-auto px-5 pb-4
            rounded-b-xl
            ">
                <table class="
                table-auto w-full
                ">
                    <thead>
                        <tr class="
                        bg-white
                        border-b-2 border-gray-200
                        h-16
                        ">
                            <th class="table-header"></th>
                            <th class="table-header">店名</th>
                            <th class="table-header">住所</th>
                            <th class="table-header">系統</th>
                            <th class="table-header">味</th>
                            <th class="table-header">営業時間</th>
                            <th class="table-header">休業日</th>
                            <th class="table-header">操作</th>
                        </tr>
                    </thead>
                    <tbody class="
                    ">
                        <tr v-for="ramen in ramens" class="
                        bg-white
                        border-b border-gray-200
                        h-14
                        ">
                            <th class="table-cell w-1/12">{{ ramen.id }}</th>
                            <td class="table-cell w-1/12 text-center">{{ ramen.name }}</td>
                            <td class="table-cell w-2/12 text-center">{{ ramen.address }}</td>
                            <td class="table-cell w-1/12 text-center">{{ ramen.type }}</td>
                            <td class="table-cell w-1/12 text-center">{{ ramen.taste }}</td>
                            <td class="table-cell w-2/12 text-center">{{ ramen.time_open }} ~ {{ ramen.time_close }}</td>
                            <td class="table-cell w-1/12 text-center">{{ ramen.day_close }}</td>
                            <td class="table-cell w-3/12 text-center">
                                <div class="
                                flex justify-evenly
                                ">
                                    <Link :href="route('admin.ramen.show', ramen)" class="
                                    border-b border-black
                                    ">詳細</Link>
                                    <Link :href="route('admin.ramen.edit', ramen)" class="
                                    border-b border-green-600 text-green-600
                                    ">編集</Link>
                                    <Link href="#" @click="deleteRamen(ramen)" class="
                                    border-b border-red-600 text-red-600
                                    ">削除</Link> <!-- ←追加 -->
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

    </div>


</template>
