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

const open = ref({
    dist: false,
    type: false,
    time: false,
    taste: false
});
const toggle = (condition) => {
    open.value[condition] = !open.value[condition]
}
</script>

<template>
    <Head title="Top" />

    <div class="bg-orange-100 pb-8">

        <!-- ここにhtmlを書いていく。bodyタグの中身だけ書けば良い。tailwindcssは勝手に効く。 -->
        <div class="bg-orange-100 m-auto">
            <!-- ヘッダー -->
            <div class="bg-orange-400 h-8 flex justify-center items-center">
                <div class="font-semibold text-white w-11/12">トップへ戻る</div>
            </div>
        </div>

        <!-- ボディー -->
        <div class="mt-4 mb-4">
            <div class="w-4/5 mx-auto mb-4 pb-2 text-xl font-semibold border-b border-gray-500">
                <div @click="toggle('dist')" class="flex justify-between hover:cursor-pointer">
                    <div>区から探す</div>
                    <div>↓</div>
                </div>
                <div v-show="open.dist" class="flex justify-evenly mt-4 mb-4">
                    <Link :href="route('ramen.search', { all: '中央区' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">中央区</Link>
                    <Link :href="route('ramen.search', { all: '浜名区' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">浜名区</Link>
                    <Link :href="route('ramen.search', { all: '天竜区' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">天竜区</Link>
                </div>
            </div>
            <div class="w-4/5 mx-auto mb-4 pb-2 text-xl font-semibold border-b border-gray-500">
                <div @click="toggle('type')" class="flex justify-between hover:cursor-pointer">
                    <div>ラーメンの系統から探す</div>
                    <div>↓</div>
                </div>
                <div v-show="open.type" class="flex justify-evenly mt-4 mb-4">
                    <Link :href="route('ramen.search', { type: '濃厚太麺' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">濃厚太麺</Link>
                    <Link :href="route('ramen.search', { type: '濃厚細麺' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">濃厚細麺</Link>
                    <Link :href="route('ramen.search', { type: 'あっさり太麺' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">あっさり太麺</Link>
                    <Link :href="route('ramen.search', { type: 'あっさり細麺' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">あっさり細麺</Link>
                </div>
            </div>
            <div class="w-4/5 mx-auto mb-4 pb-2 text-xl font-semibold border-b border-gray-500">
                <div @click="toggle('time')" class="flex justify-between hover:cursor-pointer">
                    <div>営業時間から探す</div>
                    <div>↓</div>
                </div>
                <div v-show="open.time" class="mt-4 mb-4">
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
                <div @click="toggle('taste')" class="flex justify-between hover:cursor-pointer">
                    <div>味から探す</div>
                    <div class="">↓</div>
                </div>
                <div v-show="open.taste" class="mt-4 mb-4">
                    <div class="flex justify-evenly mt-4 mb-4">
                        <Link :href="route('ramen.search', { taste: '醤油' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">醤油</Link>
                        <Link :href="route('ramen.search', { taste: '塩' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">塩</Link>
                        <Link :href="route('ramen.search', { taste: '味噌' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">味噌</Link>
                        <Link :href="route('ramen.search', { taste: '豚骨' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">豚骨</Link>
                    </div>
                    <div class="flex justify-evenly mt-4 mb-4">
                        <Link :href="route('ramen.search', { taste: '牛骨' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">牛骨</Link>
                        <Link :href="route('ramen.search', { taste: '煮干し' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">煮干し</Link>
                        <Link :href="route('ramen.search', { taste: '白湯' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">白湯</Link>
                        <Link :href="route('ramen.search', { taste: '魚介' })" class="px-4 py-2 text-sm border border-gray-400 bg-gray-100 hover:bg-orange-500 hover:text-white">魚介</Link>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="Object.keys(ramens).length > 0">
            <div v-for="ramen in ramens" class="w-11/12 mx-auto border-t border-b border-gray-400 py-4 mt-4">
                <div class="w-11/12 mx-auto">
                    <div class="flex mb-4 justify-center">
                        <div class="text-xl font-semibold me-4">{{ ramen.name }}</div>
                        <div class="px-2 text-sm border border-gray-400 bg-gray-100 flex text-center items-center">
                            <p>{{ ramen.type }}</p>
                        </div>
                    </div>
                    <div class="flex justify-center mb-2">
                        <div class="mx-2 w-[380px]">
                            <img v-if="ramen.image" :src="'/upload/'+ ramen.image" :alt="ramen.image" class="object-cover">
                            <img v-else src="/image/noimg.png" alt="画像なし" class="">
                        </div>
                    </div>
                    <div class="flex justify-center mb-2">
                        <div>{{ ramen.address }}（住所）</div>
                    </div>
                    <div class="flex justify-center mb-2">
                        <div>{{ ramen.time_open }}~{{ ramen.time_close }} <span v-if="ramen.time_open_2">, {{ ramen.time_open_2 }} ~ {{ ramen.time_close_2 }}</span> （営業時間）</div>
                    </div>
                    <div class="flex justify-center mb-2">
                        <div>木（休業日）</div>
                    </div>
                    <div class="flex justify-center mb-2">
                        <div class="bg-orange-500 w-1/12 rounded hover:bg-white">
                            <Link :href="route('ramen.show', { id: ramen.id })" class="block text-white text-center w-full py-2 hover:text-orange-500">詳細</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="w-11/12 mx-auto text-center py-4 mt-4">申し訳ありません。検索条件を変えて再度検索してください。</div>
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
