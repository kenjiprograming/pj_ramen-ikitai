<script setup>
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Top" />

    <!-- ここにhtmlを書いていく。bodyタグの中身だけ書けば良い。tailwindcssは勝手に効く。 -->
    <div>

        <div class="bg-[url('/image/ramen-pattern.jfif')] bg-cover">
            <div class="bg-orange-500/80 py-10">
                <div>
                    <div class="text-2xl text-white font-black w-36 mx-auto text-center">ラーメンイキタイ</div>
                    <div class="w-36 mx-auto font-bold text-center">in浜松</div>
                </div>

                <div class="py-10">
                    <div class="flex justify-evenly">
                        <!-- 画像のsrcは/public/imageの中におく -->
                        <div class="ms-auto me-1">
                            <img src="/image/glass.svg" alt="glass.svg" class="w-4 h-6">
                        </div>
                        <div class="ms-1 me-auto text-white font-bold">ラーメンを探す</div>
                    </div>
                    <div class="w-60 mx-auto">
                        <input type="text" class="w-full">
                    </div>
                </div>
            </div>
        </div>



    </div>
</template>
