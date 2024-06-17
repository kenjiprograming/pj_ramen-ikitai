<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({ recents: Object })
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
    <Head title="ラーメンイキタイ-浜松市内のラーメン検索サイト" />

    <!-- ここにhtmlを書いていく。bodyタグの中身だけ書けば良い。tailwindcssは勝手に効く。 -->
    <div class="bg-orange-100 m-auto">
        <!-- ヘッダー -->
        <div class="bg-[url('/image/ramen-pattern.jfif')] bg-cover">
            <div class="bg-orange-500/80 pt-10">
                <div class="pb-16">
                    <div class="text-2xl text-white font-black text-center drop-shadow">ラーメンイキタイ</div>
                    <div class="w-36 mx-auto font-bold text-center">in浜松</div>
                </div>
                <div class="pb-10">
                    <div class="flex justify-evenly pb-3">
                        <!-- 画像のsrcは/public/imageの中におく -->
                        <div class="ms-auto me-1">
                            <img src="/image/glass.svg" alt="glass.svg" class="w-4 h-6">
                        </div>
                        <div class="ms-1 me-auto text-white font-bold">ラーメンを探す</div>
                    </div>
                    <div class="w-60 mx-auto ">
                        <input type="text" class="w-full border-yellow-500 rounded-md border" v-model="general">
                        <div v-if="general" class="w-1/4 mx-auto mt-2 bg-white rounded border border-white hover:bg-orange-500 text-center leading-8">
                            <Link :href="route('ramen.search', { all: general })" class="block text-orange-500 hover:text-white font-semibold">検索</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- コンテンツ -->
        <div>
            <div class="w-4/5 m-auto">
                <!-- 地区からラーメンを探す -->
                <div class="m-auto mt-6 mb-16">
                    <div class="w-full relative">
                        <img src="/image/area.png" class="w-full" alt="浜松駅周辺の画像">
                        <!-- <div class="bg-orange-500 flex rounded w-9/12 absolute top-[80%] left-[12%] hover:bg-white">
                            <a href="#" class="block text-white text-center w-full font-semibold text-white py-4 hover:text-orange-500">地区からラーメンを探す →</a>
                        </div> -->
                    </div>
                </div>
                <!-- ラーメンの系統から探す -->
                <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">ラーメンの系統から探す</h2>
                <div class="flex flex-wrap">
                    <Link :href="route('ramen.search', { type: '濃厚太麺' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">濃厚 太麺</p>
                    </Link>
                    <Link :href="route('ramen.search', { type: '濃厚細麺' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">濃厚 細麺</p>
                    </Link>
                    <Link :href="route('ramen.search', { type: 'あっさり太麺' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">あっさり 太麺</p>
                    </Link>
                    <Link :href="route('ramen.search', { type: 'あっさり細麺' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">あっさり 細麺</p>
                    </Link>
                </div>

                <!-- 営業時間から探す -->
                <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">営業時間から探す</h2>
                    <div class="flex mb-4">
                        <select v-model="time" class="form-select w-full border-yellow-500 rounded-md border" id="time-select">
                            <option v-for="time in times" :value="time">{{ time }}</option>
                        </select>
                        <div v-if="time" class="w-1/12 bg-orange-500 rounded hover:bg-white ms-2 text-center leading-10">
                            <Link :href="route('ramen.search', { time: time })" class="w-full text-gray-700 hover:text-orange-500 font-semibold">検索</Link>
                        </div>
                    </div>
                    <div class="">
                        <div class="bg-orange-500 w-full flex rounded hover:bg-white">
                            <Link @click="searchNow" class="block text-white text-center w-full py-4 font-semibold hover:text-orange-500">
                                現在営業中のお店一覧　→
                            </Link>
                        </div>
                    </div>

                <!-- 味から探す -->
                <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">味から探す</h2>
                <div class="flex flex-wrap">
                    <Link :href="route('ramen.search', { taste: '醤油' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">醤油</p>
                    </Link>
                    <Link :href="route('ramen.search', { taste: '塩' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">塩</p>
                    </Link>
                    <Link :href="route('ramen.search', { taste: '味噌' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">味噌</p>
                    </Link>
                    <Link :href="route('ramen.search', { taste: '豚骨' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">豚骨</p>
                    </Link>
                    <Link :href="route('ramen.search', { taste: '牛骨' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">牛骨</p>
                    </Link>
                    <Link :href="route('ramen.search', { taste: '煮干し' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">煮干し</p>
                    </Link>
                    <Link :href="route('ramen.search', { taste: '白湯' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">白湯</p>
                    </Link>
                    <Link :href="route('ramen.search', { taste: '魚介' })" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">魚介</p>
                    </Link>
                </div>
                <!-- 最近オープンしたラーメン店 -->
                <div v-if="Object.keys(recents).length > 0" class="bg-opacity-[60] bg-[3E2502]">
                    <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">最近オープンしたラーメン店</h2>
                    <div class="flex">
                        <div v-for="recent in recents" class="mr-4 h-64">
                            <img class="w-5/12" v-if="recent.image" :src="'/upload/'+ recent.image" :alt="recent.image">
                            <img class="w-5/12" v-else src="/image/noimg.png" alt="画像なし">
                            <p>{{ recent.name }}</p>
                        </div>
                    </div>
                </div>

                <!-- ラーメンコラム -->
                <!-- <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">ラーメンコラム</h2>
                <div class="flex pb-20">
                    <div class="mr-4">
                        <img src="/image/noimg.png" alt="画像なし">
                        <p>2024年00月00日</p>
                        <p>家系ラーメンって何？</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quo vero adipisci ratione quae! Magni blanditiis molestias enim, laudantium quos aspernatur distinctio, maiores, obcaecati adipisci et debitis odio quibusdam. Vero.</p>
                    </div>
                    <div class="mr-4">
                        <img src="/image/noimg.png" alt="画像なし">
                        <p>2024年00月00日</p>
                        <p>家系ラーメンって何？</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quo vero adipisci ratione quae! Magni blanditiis molestias enim, laudantium quos aspernatur distinctio, maiores, obcaecati adipisci et debitis odio quibusdam. Vero.</p>
                    </div>
                    <div class="mr-4">
                        <img src="/image/noimg.png" alt="画像なし">
                        <p>2024年00月00日</p>
                        <p>家系ラーメンって何？</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quo vero adipisci ratione quae! Magni blanditiis molestias enim, laudantium quos aspernatur distinctio, maiores, obcaecati adipisci et debitis odio quibusdam. Vero.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- フッター -->
    <!-- <footer class="bg-opacity-[60] bg-[3E2502]">
        <div class="text-2xl text-white font-black w-36 mx-auto text-center">ラーメンイキタイ</div>
        <p>in浜松</p>
        <small>©2024 ramen-ikitai</small>
    </footer> -->
    <footer class="bg-amber-900	">
        <div class="text-2xl text-white font-black text-center pt-10 drop-shadow">ラーメンイキタイ</div>
        <p class="pb-16 text-center text-white">in浜松</p>
        <p class="pb-6 text-center text-white"><a href="/pdf/site-policy.pdf" target="_blank">このサイトについて</a></p>
        <p class="text-center text-white"><a href="/pdf/privacy-policy.pdf" target="_blank">個人情報保護方針</a></p>
        <p class="pt-16 text-center text-white">©2024 ramen-ikitai</p>
    </footer>
</template>
