<script setup>
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Top" />

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
                        <input type="text" class="w-full border-yellow-500 rounded-md border">
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
                        <div class="bg-orange-500 flex rounded w-9/12 absolute top-[80%] left-[12%] hover:bg-white">
                            <a href="#" class="block text-white text-center w-full font-semibold text-white py-4 hover:text-orange-500">地区からラーメンを探す →</a>
                        </div>
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

                <!-- 業時間から探す -->
                <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">営業時間から探す</h2>
                    <div class="flex mb-4">
                        <select class="form-select w-full border-yellow-500 rounded-md border" id="time-select">
                            <option value="00:00">00:00</option>
                            <option value="00:30">00:30</option>
                            <option value="01:00">01:00</option>
                            <option value="01:30">01:30</option>
                            <option value="01:30">02:00</option>
                            <option value="01:30">02:30</option>
                            <option value="01:30">03:00</option>
                            <option value="01:30">03:30</option>
                            <option value="01:30">04:00</option>
                            <option value="01:30">04:30</option>
                            <option value="01:30">05:00</option>
                            <option value="01:30">05:30</option>
                            <option value="01:30">06:00</option>
                            <option value="01:30">06:30</option>
                            <option value="01:30">07:00</option>
                            <option value="01:30">07:30</option>
                            <option value="01:30">08:00</option>
                            <option value="01:30">08:30</option>
                            <option value="01:30">09:00</option>
                            <option value="01:30">09:30</option>
                            <option value="01:30">10:00</option>
                            <option value="01:30">10:30</option>
                            <option value="01:30">11:00</option>
                            <option value="01:30">11:30</option>
                            <option value="01:30">12:00</option>
                            <option value="01:30">12:30</option>
                            <option value="01:30">13:00</option>
                            <option value="01:30">13:30</option>
                            <option value="01:30">14:00</option>
                            <option value="01:30">14:30</option>
                            <option value="01:30">15:00</option>
                            <option value="01:30">15:30</option>
                            <option value="01:30">16:00</option>
                            <option value="01:30">16:30</option>
                            <option value="01:30">17:00</option>
                            <option value="01:30">17:30</option>
                            <option value="01:30">18:00</option>
                            <option value="01:30">18:30</option>
                            <option value="01:30">19:00</option>
                            <option value="01:30">19:30</option>
                            <option value="01:30">20:00</option>
                            <option value="01:30">20:30</option>
                            <option value="01:30">21:00</option>
                            <option value="01:30">21:30</option>
                            <option value="01:30">22:00</option>
                            <option value="01:30">22:30</option>
                            <option value="01:30">23:00</option>
                            <option value="01:30">23:30</option>
                        </select>
                        <p class="flex items-center ml-2 mr-2">〜</p>
                        <select class="form-select w-full border-yellow-500 rounded-md border" id="time-select">
                        <option value="00:00">00:00</option>
                        <option value="00:30">00:30</option>
                        <option value="01:00">01:00</option>
                        <option value="01:30">01:30</option>
                        <option value="01:30">02:00</option>
                        <option value="01:30">02:30</option>
                        <option value="01:30">03:00</option>
                        <option value="01:30">03:30</option>
                        <option value="01:30">04:00</option>
                        <option value="01:30">04:30</option>
                        <option value="01:30">05:00</option>
                        <option value="01:30">05:30</option>
                        <option value="01:30">06:00</option>
                        <option value="01:30">06:30</option>
                        <option value="01:30">07:00</option>
                        <option value="01:30">07:30</option>
                        <option value="01:30">08:00</option>
                        <option value="01:30">08:30</option>
                        <option value="01:30">09:00</option>
                        <option value="01:30">09:30</option>
                        <option value="01:30">10:00</option>
                        <option value="01:30">10:30</option>
                        <option value="01:30">11:00</option>
                        <option value="01:30">11:30</option>
                        <option value="01:30">12:00</option>
                        <option value="01:30">12:30</option>
                        <option value="01:30">13:00</option>
                        <option value="01:30">13:30</option>
                        <option value="01:30">14:00</option>
                        <option value="01:30">14:30</option>
                        <option value="01:30">15:00</option>
                        <option value="01:30">15:30</option>
                        <option value="01:30">16:00</option>
                        <option value="01:30">16:30</option>
                        <option value="01:30">17:00</option>
                        <option value="01:30">17:30</option>
                        <option value="01:30">18:00</option>
                        <option value="01:30">18:30</option>
                        <option value="01:30">19:00</option>
                        <option value="01:30">19:30</option>
                        <option value="01:30">20:00</option>
                        <option value="01:30">20:30</option>
                        <option value="01:30">21:00</option>
                        <option value="01:30">21:30</option>
                        <option value="01:30">22:00</option>
                        <option value="01:30">22:30</option>
                        <option value="01:30">23:00</option>
                        <option value="01:30">23:30</option>
                        </select>
                    </div>
                    <div class="">
                        <div class="bg-orange-500 w-full flex rounded hover:bg-white">
                            <a href="#" class="block text-white text-center w-full py-4 font-semibold hover:text-orange-500">
                                現在営業中のお店一覧　→
                            </a>
                        </div>
                    </div>

                <!-- 味から探す -->
                <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">味から探す</h2>
                <div class="flex flex-wrap">
                    <a href="#" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">醤油</p>
                    </a>
                    <a href="#" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">塩</p>
                    </a>
                    <a href="#" class="border-yellow-500 rounded-md border bg-white block w-[49%] mr-[1%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">味噌</p>
                    </a>
                    <a href="#" class="border-yellow-500 rounded-md border bg-white block w-[49%] mb-[1%] hover:bg-orange-500">
                        <p class="text-gray-700 text-center my-5 font-semibold hover:text-white">豚骨</p>
                    </a>
                </div>
                <!-- 最近オープンしたラーメン店 -->
                <div class="bg-opacity-[60] bg-[3E2502]">
                    <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">最近オープンしたラーメン店</h2>
                    <div class="flex">
                        <div class="mr-4">
                            <img src="/image/noimg.png" alt="画像なし">
                            <p>〇〇商店</p>
                        </div>
                        <div class="mr-4">
                            <img src="/image/noimg.png" alt="画像なし">
                            <p>〇〇屋</p>
                        </div>
                        <div class="mr-4">
                            <img src="/image/noimg.png" alt="画像なし">
                            <p>〇〇商店</p>
                        </div>
                        <div class="mr-4">
                            <img src="/image/noimg.png" alt="画像なし">
                            <p>〇〇商店</p>
                        </div>
                        <div class="mr-4">
                            <img src="/image/noimg.png" alt="画像なし">
                            <p>〇〇商店</p>
                        </div>
                    </div>
                </div>

                <!-- ラーメンコラム -->
                <h2 class="mt-10 mb-6 text-xl font-bold text-gray-700">ラーメンコラム</h2>
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
                </div>
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
        <div class="text-2xl text-white font-black text-center sm:pt-10 drop-shadow">ラーメンイキタイ</div>
        <p class="sm:pb-16 text-center text-white">in浜松</p>
        <p class="text-center text-white"><a href="#">このサイトについて</a></p>
        <p class="pt-16 text-center text-white">©2024 ramen-ikitai</p>
    </footer>
</template>
