<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({ ramens: Object })
const general = ref('');

const times = [
    "6:00", "6:30", "7:00", "7:30", "8:00", "8:30",
    "9:00", "9:30", "10:00", "10:30", "11:00", "11:30",
    "12:00", "12:30", "13:00", "13:30", "14:00", "14:30",
    "15:00", "15:30", "16:00", "16:30", "17:00", "17:30",
    "18:00", "18:30", "19:00", "19:30", "20:00", "20:30",
    "21:00", "21:30", "22:00", "22:30", "23:00", "23:30",
    "0:00", "0:30", "1:00", "1:30", "2:00", "2:30",
    "3:00", "3:30", "4:00", "4:30", "5:00", "5:30",
]

const time = ref('');

const searchNow = () => {
    const hours = (new Date()).getHours().toString().padStart(2, '0');
    const minutes = (new Date()).getMinutes().toString().padStart(2, '0');
    time.value = `${hours}:${minutes}`;
    router.get(route('ramen.search'), { time: time.value });
    time.value = '';
}
</script>

<template>
    <Head title="Top" />

    <div class="bg-orange-100 pb-8">

        <!-- ここにhtmlを書いていく。bodyタグの中身だけ書けば良い。tailwindcssは勝手に効く。 -->
        <div class="bg-orange-100 m-auto">
            <!-- ヘッダー -->
            <div class="bg-orange-500 h-8 flex justify-center items-center">
                <div class="font-semibold text-white bg-red-500 w-11/12">ホームへ戻る</div>
            </div>
        </div>

        <!-- ボディー -->
        <div class="bg-orange-400 mt-4 mb-4">
            <div class="w-4/5 mx-auto mb-4 pb-2 text-xl font-semibold border-b border-gray-500">
                <div class="flex justify-between">
                    <div>区から探す</div>
                    <div>↓</div>
                </div>
                <div class="flex justify-evenly mt-4 mb-4">
                    <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">中央区</a>
                    <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">浜名区</a>
                    <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">天竜区</a>
                </div>
            </div>
            <div class="w-4/5 mx-auto mb-4 pb-2 text-xl font-semibold border-b border-gray-500">
                <div class="flex justify-between">
                    <div>ラーメンの系統から探す</div>
                    <div>↓</div>
                </div>
                <div class="flex justify-evenly mt-4 mb-4">
                    <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">濃厚太麺</a>
                    <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">濃厚細麺</a>
                    <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">あっさり太麺</a>
                    <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">あっさり細麺</a>
                </div>
            </div>
            <div class="w-4/5 mx-auto mb-4 pb-2 text-xl font-semibold border-b border-gray-500">
                <div class="flex justify-between">
                    <div>営業時間から探す</div>
                    <div>↓</div>
                </div>
                <div class="mt-4 mb-4">
                    <div class="flex justify-evenly mb-4">
                        <select v-model="time" class="form-select w-full border-yellow-500 rounded-md border" id="time-select">
                            <option v-for="time in times" :value="time">{{ time }}</option>
                        </select>
                        <div v-if="time" class="w-1/12 bg-orange-500 rounded hover:bg-white ms-2 text-center leading-10">
                            <Link :href="route('ramen.search', { time: time })" class="w-full text-gray-700 hover:text-orange-500">検索</Link>
                        </div>
                    </div>
                    <div class="bg-orange-500 w-full flex rounded hover:bg-white">
                        <Link @click="searchNow" class="block text-white text-center w-full py-2 hover:text-orange-500">
                            現在営業中のお店一覧　→
                        </Link>
                    </div>
                </div>
            </div>
            <div class="w-4/5 mx-auto mb-4 pb-2 text-xl font-semibold border-b border-gray-500">
                <div class="flex justify-between">
                    <div>味から探す</div>
                    <div>↓</div>
                </div>
                <div class="mt-4 mb-4">
                    <div class="flex justify-between mt-4 mb-4">
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">醤油</a>
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">塩</a>
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">味噌</a>
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">豚骨</a>
                    </div>
                    <div class="flex justify-between mt-4 mb-4">
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">牛骨</a>
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">煮干し</a>
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">白湯</a>
                        <a class="px-4 py-2 text-sm border border-gray-400 bg-gray-100">魚介</a>
                    </div>
                </div>
            </div>
        </div>

        <div v-for="ramen in ramens" class="bg-red-500 w-11/12 mx-auto border-t border-b border-gray-400 py-4 mt-4">
            <div class="w-11/12 mx-auto">
                <div class="flex mb-4">
                    <div class="text-xl font-semibold">{{ ramen.name }}</div>
                    <div class="rounded border border-gray-400 px-2">{{ ramen.type }}</div>
                </div>
                <div class="flex justify-between mb-2">
                    <div class="mx-2"><img src="/image/noimg.png" alt=""></div>
                </div>
                <div class="mb-2">
                    <div>9:00~20:00（営業時間）</div>
                </div>
                <div class="mb-2">
                    <div>木（休業日）</div>
                </div>
            </div>
        </div>
    </div>

    <!-- フッター -->
    <footer class="bg-amber-900	">
        <div class="text-2xl text-white font-black text-center sm:pt-10 drop-shadow">ラーメンイキタイ</div>
        <p class="sm:pb-16 text-center text-white">in浜松</p>
        <p class="text-center text-white"><a href="#">このサイトについて</a></p>
        <p class="pt-16 text-center text-white">©2024 ramen-ikitai</p>
    </footer>
</template>
