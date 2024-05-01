<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({ ramen: Object })

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
    'name':       props.ramen.name,
    'address':    props.ramen.address,
    'type':       props.ramen.type,
    'taste':      props.ramen.taste,
    'time_open':  props.ramen.time_open,
    'time_close': props.ramen.time_close,
    'date_open':  props.ramen.date_open,
    'day_close':  props.ramen.day_close,
})

const submit = () => {
    form.put(route('admin.ramen.update', props.ramen.id));
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
                <input type="text" v-model="form.time_open"> ~ <input type="text" v-model="form.time_close">
            </div>

            <div>
                <div>創業日</div>
                <div v-if="form.errors.date_open" class="text-red-500">{{ form.errors.date_open }}</div>
                <input type="text" v-model="form.date_open">
            </div>

            <div>
                <div>ラーメン画像</div>
                <input type="file" name="image_file">
            </div>

            <div>
                <div>定休日</div>
                <div v-if="form.errors.day_close" class="text-red-500">{{ form.errors.day_close }}</div>
                <input type="text" v-model="form.day_close">
            </div>

            <div>
                <button type="submit">更新</button>
            </div>
        </div>
    </form>

</template>
