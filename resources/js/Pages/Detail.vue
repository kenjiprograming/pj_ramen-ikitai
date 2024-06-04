<script setup>
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="詳細" />

    <!-- ここにhtmlを書いていく。bodyタグの中身だけ書けば良い。tailwindcssは勝手に効く。 -->
    <!-- ヘッダー -->
    <div class="bg-orange-500/80">
    <!-- ヘッダーコンテンツ幅 -->
      <div class="m-auto w-11/12 py-4">
        <!-- 画像のsrcは/public/imageの中におく -->
        <a class="text-white flex items-center">
          <img src="/image/icon_home.png" alt="ホームアイコン" class="w-4 h-4 mr-2">
          <p class="font-semibold">ホームへ戻る</p>
        </a>
      </div>
    </div>
    <!-- コンテンツ -->
    <!-- インナー -->
    <div class="bg-orange-100">
    <!-- 店名 -->
      <div class="flex pt-6 mb-4 w-11/12 m-auto">
        <h1 class="text-2xl font-bold text-gray-700 mr-2">浜田山</h1>
        <div class="rounded-md bg-orange-500 flex justify-items-center items-center">
          <p class="text-white font-semibold px-4">濃厚 太麺</p>
        </div>
      </div>
      <!-- 画像（店内・ラーメン） -->
      <div class="flex w-11/12 m-auto mb-2">
        <div class="mr-[1%]">
          <img src="/image/noimg.png" alt="イメージ画像">
        </div>
        <div class="mr-[1%]">
          <img src="/image/noimg.png" alt="イメージ画像">
        </div>
        <div class="">
          <img src="/image/noimg.png" alt="イメージ画像">
        </div>
      </div>
      <!-- 情報 -->
      <div class="flex w-11/12 m-auto mb-2">
        <div class="flex items-center">
          <img src="/image/icon-star.png" class="w-4 h-4 mr-1" alt="星のアイコン">
          <p class="text-base font-semibold mr-2">星4.5</p>
        </div>
        <p class="text-base font-semibold">¥800〜</p>
      </div>
      <div class="w-11/12 m-auto flex items-center">
        <img src="/image/icon-clock.png" class="w-4 h-4 mr-1" alt="時計のアイコン">
        <p class="text-base font-semibold">9:00〜20:00</p>
      </div>
      <!-- お店評価 -->
      <div class="w-11/12 m-auto mt-10 mb-16">
        <h2 class="text-lg font-bold text-gray-700 mr-2 mb-4">このお店を評価する</h2>
          <div class="flex items-center justify-items-center mb-5">
              <svg class="w-8 h-8 ms-3 text-orange-500/80" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
              </svg>
              <svg class="w-8 h-8 ms-3 text-orange-500/80" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
              </svg>
              <svg class="w-8 h-8 ms-3 text-orange-500/80" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
              </svg>
              <svg class="w-8 h-8 ms-3 text-orange-500/80" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
              </svg>
              <svg class="w-8 h-8 ms-3 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
              </svg>
          </div>
      </div>
      <!-- 基本情報 -->
      <div class="w-11/12 m-auto pb-16">
        <h2 class="text-lg font-bold text-gray-700 mb-4">基本情報</h2>
        <!-- Googleマップ埋め込み -->
        <div class="mb-2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.19688575776!2d137.7293054756619!3d34.72543128188557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade5af4e95555%3A0x188415f6adc4aeb8!2z5rWc55Sw5bGx!5e0!3m2!1sja!2sjp!4v1717306950066!5m2!1sja!2sjp" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Googleマップ埋め込みエンド -->
        <!-- 基本データ -->
        <div class="relative overflow-x-auto">
            <table class="w-full text-left">
                <tbody>
                    <tr class="font-semibold">
                        <th scope="row" class="pr-2 py-2 whitespace-nowrap">住所</th>
                        <td class="">静岡県浜松市中央区高林1-8-1 松本マンション 1F</td>
                    </tr>
                    <tr class="font-semibold">
                        <th scope="row" class="pr-2 py-2 whitespace-nowrap">TEL</th>
                        <td class="">053-523-8393</td>
                    </tr>
                    <tr class="font-semibold">
                        <th scope="row" class="pr-2 py-2 whitespace-nowrap">定休日</th>
                        <td class="">月曜日、祝日</td>
                    </tr>
                    <tr class="font-semibold">
                        <th scope="row" class="pr-2 py-2 whitespace-nowrap">駐車場</th>
                        <td class="">2台</td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    <!-- フッター -->
    <footer class="bg-amber-900	">
        <div class="text-2xl text-white font-black text-center pt-10 drop-shadow">ラーメンイキタイ</div>
        <p class="pb-16 text-center text-white">in浜松</p>
        <p class="text-center text-white"><a href="#">このサイトについて</a></p>
        <p class="pt-16 text-center text-white">©2024 ramen-ikitai</p>
    </footer>
</template>
