<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({ ramen: Object })

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
        ">詳細画面</h1>
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
                <Link :href="route('admin.ramen.index')" class="
                    border-b border-black
                    ">一覧画面へ
                </Link>
                <Link :href="route('admin.ramen.edit', ramen.id)" class="
                    ml-4
                    text-green-600 border-b border-green-600
                    ">編集
                </Link>
            </div>

            <div class="
                bg-white
                mx-auto p-6
                rounded-b-xl
                ">

                <div class="
                    flex flex-col
                    ">

                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">店名
                        </div>
                        <div class="
                            py-2
                            w-full
                            ">
                            {{ ramen.name }}
                        </div>
                    </div>

                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">住所
                        </div>
                        <div class="
                            py-2
                            w-full
                            ">
                            {{ ramen.address }}
                        </div>
                    </div>


                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">系統
                        </div>
                        <div class="
                            py-2
                            w-full
                            ">
                            {{ ramen.type }}
                        </div>
                    </div>

                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">味
                        </div>
                        <div class="
                            py-2
                            w-full
                            ">
                            {{ ramen.taste }}
                        </div>
                    </div>

                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">営業時間
                        </div>
                        <div class="
                            py-2
                            ">{{ ramen.time_open }} ~ {{ ramen.time_close }}
                        </div>
                    </div>

                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">創業日
                        </div>
                        <div class="
                            py-2
                            w-full
                            ">
                            {{ ramen.date_open }}
                        </div>
                    </div>

                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">ラーメン画像
                        </div>
                        <div>
                            <img v-if="ramen.image" :src="'/upload/'+ ramen.image" alt="">
                            <img v-else src="/image/default.jpg" alt="">
                        </div>
                    </div>

                    <div class="
                        mb-6"
                        >
                        <div class="
                            mb-2
                            font-medium
                            ">定休日
                        </div>
                        <div class="
                            py-2
                            w-full
                            ">
                            {{ ramen.day_close }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</template>
