<script setup>
import { ref } from 'vue';
import { useForm, router, Link } from '@inertiajs/vue3';

const props = defineProps({ ramen: Object })

const types = [
    '濃厚細麺（博多・熊本等）', 'あっさり細麺（旭川・函館等）', '濃厚太麺（横浜家系・札幌等）', 'あっさり太麺（喜多方・牛骨等）',
]

const tastes = [
    '醤油', '塩', '味噌', '豚骨', '牛骨','煮干し', '白湯', '魚介'
]

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

const day_closes = [
    '日', '月', '火', '水', '木', '金', '土',
]

const form = useForm({
    name:         props.ramen.name,
    address:      props.ramen.address,
    type:         props.ramen.type,
    taste:        props.ramen.taste,
    url:          props.ramen.url,
    image:        null,
    old_image:    props.ramen.image,
    time_open:    props.ramen.time_open,
    time_close:   props.ramen.time_close,
    time_open_2:  props.ramen.time_open_2,
    time_close_2: props.ramen.time_close_2,
    date_open:    props.ramen.date_open,
    day_close:    props.ramen.day_close,
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
        name:         form.name,
        address:      form.address,
        type:         form.type,
        taste:        form.taste,
        url:          form.url,
        image:        form.image,
        old_image:    form.old_image,
        time_open:    form.time_open,
        time_close:   form.time_close,
        time_open_2:  form.time_open_2,
        time_close_2: form.time_close_2,
        date_open:    form.date_open,
        day_close:    form.day_close,
    });
}
</script>

<template>
    <div class="
        bg-gray-200
        py-6
        ">
        <h1 class="
            bg-white
            w-11/12 h-32
            mx-auto
            rounded-xl
            text-center content-center
            text-black text-xl font-bold
            ">編集画面
        </h1>
    </div>

    <div class="
        bg-gray-200
        py-4
        ">

        <div class="
            w-11/12
            mx-auto
            ">

            <div class="
                bg-gray-100
                h-14 px-5
                content-center
                font-semibold
                rounded-t-xl
                ">
                <Link :href="route('admin.ramen.index')" class="
                    border-b border-black
                    ">一覧画面へ
                </Link>
            </div>

            <div class="
                bg-white
                mx-auto p-6
                rounded-b-xl
                ">

                <form @submit.prevent="submit">

                    <div class="
                        flex flex-col
                        ">

                        <div class="
                            mb-6"
                            >
                            <div class="
                                mb-2
                                font-medium
                                ">店名
                            </div>
                            <div v-if="form.errors.name" class="
                                text-red-500
                                ">{{ form.errors.name }}
                            </div>
                            <input type="text" v-model="form.name" class="
                                py-2 px-3
                                w-full
                                border-gray-300
                                rounded-lg
                                ">
                        </div>

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">住所
                            </div>
                            <div v-if="form.errors.name" class="
                                text-red-500
                                ">{{ form.errors.name }}</div>
                            <input type="text" v-model="form.address" class="
                                py-2 px-3
                                w-full
                                border-gray-300
                                rounded-lg
                                ">
                        </div>

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">URL
                            </div>
                            <div v-if="form.errors.url" class="
                                text-red-500
                                ">{{ form.errors.url }}</div>
                            <input type="text" v-model="form.url" class="
                                py-2 px-3
                                w-full
                                border-gray-300
                                rounded-lg
                                ">
                        </div>


                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">系統
                            </div>
                            <select v-model="form.type" class="
                                py-2 px-3
                                w-full
                                border-gray-300
                                rounded-lg
                                ">
                                <option v-for="type in types" :value="type">{{ type }}</option>
                            </select>
                        </div>

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">味
                            </div>
                            <select v-model="form.taste" class="
                                py-2 px-3
                                w-full
                                border-gray-300
                                rounded-lg
                                ">
                                <option v-for="taste in tastes" :value="taste">{{ taste }}</option>
                            </select>
                        </div>

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">営業時間①
                            </div>
                            <div v-if="form.errors.time_open" class="
                                text-red-500
                                ">{{ form.errors.time_open }}
                            </div>
                            <div v-if="form.errors.time_close" class="
                                text-red-500
                                ">{{ form.errors.time_close }}
                            </div>
                            <select v-model="form.time_open" class="
                                py-2 px-3
                                w-5/12
                                border-gray-300
                                rounded-lg
                                ">
                                <option v-for="time in times" :value="time">{{ time }}</option>
                            </select>
                            <span class="
                                font-medium
                                "> ~ </span>
                            <select v-model="form.time_close" class="
                                py-2 px-3
                                w-5/12
                                border-gray-300
                                rounded-lg
                                ">
                                <option v-for="time in times" :value="time">{{ time }}</option>
                            </select>
                        </div>

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">営業時間②
                            </div>
                            <div v-if="form.errors.time_open_2" class="
                                text-red-500
                                ">{{ form.errors.time_open_2 }}
                            </div>
                            <div v-if="form.errors.time_close_2" class="
                                text-red-500
                                ">{{ form.errors.time_close_2 }}
                            </div>
                            <select v-model="form.time_open_2" class="
                                py-2 px-3
                                w-5/12
                                border-gray-300
                                rounded-lg
                                ">
                                <option v-for="time in times" :value="time">{{ time }}</option>
                            </select>
                            <span class="
                                font-medium
                                "> ~ </span>
                            <select v-model="form.time_close_2" class="
                                py-2 px-3
                                w-5/12
                                border-gray-300
                                rounded-lg
                                ">
                                <option v-for="time in times" :value="time">{{ time }}</option>
                            </select>
                        </div>

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">創業日
                            </div>
                            <div v-if="form.errors.date_open" class="
                                text-red-500
                                ">{{ form.errors.date_open }}
                            </div>
                            <input type="text" v-model="form.date_open" class="
                                mb-2 py-2 px-3
                                w-full
                                border-gray-300
                                rounded-lg
                                ">
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

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">ラーメン画像
                            </div>
                            <input type="file" name="image" @input="handleFileChange" class="
                                mb-2 py-2
                                cursor-pointer
                                border-gray-300
                                rounded-lg
                                ">
                            <div>
                                <img v-if="imagePreview" :src="imagePreview" alt="">
                                <img v-else-if="form.old_image" :src="'/upload/'+ form.old_image" alt="">
                                <img v-else src="/image/default.jpg" alt="">
                            </div>
                        </div>

                        <div class="
                            mb-6
                            ">
                            <div class="
                                mb-2
                                font-medium
                                ">定休日
                            </div>
                            <div v-if="form.errors.day_close" class="
                                text-red-500
                                ">{{ form.errors.day_close }}
                            </div>
                            <div v-for="day_close in day_closes" class="
                                inline-block
                                me-6
                                ">
                                <input type="checkbox" id="{{ day_close }}" :value="day_close" v-model="form.day_close" class="
                                        rounded-md
                                        border-gray-300
                                    ">
                                <label for="{{ day_close }}" class="
                                    ps-1
                                    ">{{ day_close }}
                                </label>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="
                                curosor-pointer
                                px-3 py-1
                                border border-gray-500
                                font-medium text-gray-600
                                rounded-md
                                hover:bg-gray-500 hover:text-white transition-all
                                ">更新
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>
