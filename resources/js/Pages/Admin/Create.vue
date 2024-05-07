<script setup>
import { useForm } from '@inertiajs/vue3';

const types = [
    '家系',
    '次郎系',
    'がんこ系',
    '青葉系',
]

const tastes = [
    '醤油',
    '塩',
    '味噌',
    '豚骨',
]

const form = useForm({
    'name': null,
    'address': null,
    'type': null,
    'taste': null,
    'image': null,
    'time_open': null,
    'time_close': null,
    'date_open': null,
    'day_close': [],
})


const submit = () => {
    form.post(route('admin.ramen.store'));
}

</script>

<template>
    <form @submit.prevent="submit">

        <div class="
            flex flex-col
            bg-slate-300
            ">

            <div>
                <div>店名</div>
                <div v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</div>
                <input type="text" v-model="form.name">
            </div>

            <div>
                <div>住所</div>
                <div v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</div>
                <input type="text" v-model="form.address">
            </div>

            <div>
                <div>系統</div>
                <select id="" v-model="form.type">
                    <option v-for="type in types" :value="type">{{ type }}</option>
                </select>
            </div>

            <div>
                <div>味</div>
                <select v-model="form.taste" id="">
                    <option v-for="taste in tastes" :value="taste">{{ taste }}</option>
                </select>
            </div>

            <div>
                <div>営業時間</div>
                <div v-if="form.errors.time_open" class="text-red-500">{{ form.errors.time_open }}</div>
                <div v-if="form.errors.time_close" class="text-red-500">{{ form.errors.time_close }}</div>
                <select v-model="form.time_open">
                    <option>6:00</option>
                    <option>7:00</option>
                    <option>8:00</option>
                    <option>9:00</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>12:00</option>
                </select> ~
                <select v-model="form.time_close">
                    <option>14:00</option>
                    <option>15:00</option>
                    <option>16:00</option>
                    <option>17:00</option>
                    <option>18:00</option>
                    <option>19:00</option>
                    <option>20:00</option>
                    <option>21:00</option>
                    <option>22:00</option>
                    <option>23:00</option>
                    <option>24:00</option>
                    <option>25:00</option>
                    <option>26:00</option>
                    <option>27:00</option>
                </select>
            </div>

            <div>
                <div>創業日</div>
                <div v-if="form.errors.date_open" class="text-red-500">{{ form.errors.date_open }}</div>
                <input type="text" v-model="form.date_open">
                <VueDatePicker
                    v-model="form.date_open"
                    format="yyyy-MM-dd"
                    model-type="yyyy-MM-dd"
                    locale="ja"
                    week-start="0"
                    :enable-time-picker="false"
                    no-today
                    inline
                    auto-apply
                />
            </div>

            <div>
                <div>ラーメン画像</div>
                <input type="file" name="image" @input="form.image = $event.target.files[0]">
                <div>
                    <img src="/image/default.jpg" alt="">
                </div>
            </div>

            <div>
                <div>定休日</div>
                <div v-if="form.errors.day_close" class="text-red-500">{{ form.errors.day_close }}</div>
                <input type="checkbox" id="日" value="日" v-model="form.day_close">
                <label for="日">日</label>
                <input type="checkbox" id="月" value="月" v-model="form.day_close">
                <label for="月">月</label>
                <input type="checkbox" id="火" value="火" v-model="form.day_close">
                <label for="火">火</label>
                <input type="checkbox" id="水" value="水" v-model="form.day_close">
                <label for="水">水</label>
                <input type="checkbox" id="木" value="木" v-model="form.day_close">
                <label for="木">木</label>
                <input type="checkbox" id="金" value="金" v-model="form.day_close">
                <label for="金">金</label>
                <input type="checkbox" id="土" value="土" v-model="form.day_close">
                <label for="土">土</label>
            </div>

            <div>
                <button type="submit">登録</button>
            </div>
        </div>
    </form>

</template>
