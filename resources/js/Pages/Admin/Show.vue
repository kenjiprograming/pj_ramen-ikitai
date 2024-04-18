<script setup>

defineProps({ ramen: Object })

</script>

<template>
    <form @submit.prevent="submit">

        <div class="
            flex flex-col
            bg-slate-300
            ">

            <div>
                <div>店名</div>
                <div>{{ ramen.name }}</div>
            </div>

            <div>
                <div>住所</div>
                <div>{{ ramen.address }}</div>
            </div>


            <div>
                <div>系統</div>
                <div>{{ ramen.type }}</div>
            </div>

            <div>
                <div>味</div>
                <div>{{ ramen.taste }}</div>
            </div>

            <div>
                <div>営業時間</div>
                <div>{{ ramen.time_open }} ~ {{ ramen.time_close }}</div>
            </div>

            <div>
                <div>創業日</div>
                <div>{{ ramen.date_open }}</div>
            </div>

            <div>
                <div>ラーメン画像</div>
            </div>

            <div>
                <div>定休日</div>
                <div>{{ ramen.day_close }}</div>
            </div>
        </div>
    </form>

</template>
