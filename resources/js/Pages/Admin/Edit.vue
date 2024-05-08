<script setup>
import { ref } from 'vue';
import { useForm, router } from '@inertiajs/vue3';

const props = defineProps({ ramen: Object })

const types = [
    '家系', '次郎系', 'がんこ系', '青葉系',
]

const tastes = [
    '醤油', '塩', '味噌', '豚骨',
]

const time_opens = [
    "5:00", "6:00", "7:00", "8:00",
    "9:00", "10:00", "11:00", "12:00",
]

const time_closes = [
    "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00",
    "21:00", "22:00", "23:00", "24:00", "25:00", "26:00", "27:00",
]

const day_closes = [
    '日', '月', '火', '水', '木', '金', '土',
]

const form = useForm({
    name:       props.ramen.name,
    address:    props.ramen.address,
    type:       props.ramen.type,
    taste:      props.ramen.taste,
    image:      null,
    old_image:  props.ramen.image,
    time_open:  props.ramen.time_open,
    time_close: props.ramen.time_close,
    date_open:  props.ramen.date_open,
    day_close:  props.ramen.day_close,
})

const imagePreview = ref('');
const handleFileChange = (event) => {
    const file = event.target.files[0];
    form.image = file;
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.value = e.target.result;
        }
        reader.readAsDataURL(file);
    }
}

const submit = () => {
    router.post(route('admin.ramen.update', props.ramen.id), {
        _method: 'put',
        name:       form.name,
        address:    form.address,
        type:       form.type,
        taste:      form.taste,
        image:      form.image,
        old_image:  form.old_image,
        time_open:  form.time_open,
        time_close: form.time_close,
        date_open:  form.date_open,
        day_close:  form.day_close,
    });
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
                    <option v-for="time_open in time_opens" :value="time_open">{{ time_open }}</option>
                </select> ~
                <select v-model="form.time_close">
                    <option v-for="time_close in time_closes" :value="time_close">{{ time_close }}</option>
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
                <input type="file" name="image" @input="handleFileChange">
                <div>
                    <img v-if="imagePreview" :src="imagePreview" alt="">
                    <img v-else-if="form.old_image" :src="'/upload/'+ form.old_image" alt="">
                    <img v-else src="/image/default.jpg" alt="">
                </div>
            </div>

            <div>
                <div>定休日</div>
                <div v-if="form.errors.day_close" class="text-red-500">{{ form.errors.day_close }}</div>
                <div v-for="day_close in day_closes">
                    <input type="checkbox" id="{{ day_close }}" :value="day_close" v-model="form.day_close">
                    <label for="{{ day_close }}">{{ day_close }}</label>
                </div>
            </div>

            <div>
                <button type="submit">更新</button>
            </div>
        </div>
    </form>

</template>
