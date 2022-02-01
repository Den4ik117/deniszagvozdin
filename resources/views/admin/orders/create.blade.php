<x-app-layout>
    <x-slot name="title">Добавить покупку</x-slot>
    <x-slot name="header">
        <div class="flex items-center justify-between py-2">
            <div class="font-bold">
                <span>Добавить покупку</span>
                <a class="text-indigo-400 font-bold hover:underline" href="{{ route('admin.orders.index') }}">[назад]</a>
            </div>
        </div>
    </x-slot>

    <x-form id="form" action="{{ route('admin.orders.store') }}" method="POST">
        <div class="col-span-6">
            <label class="block text-sm font-medium text-gray-700">Магазин:</label>
            <input type="text" name="shop" autocomplete="off" required value="{{ old('shop') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <div class="col-span-6">
            <label class="block text-sm font-medium text-gray-700">Дата покупки:</label>
            <input type="date" name="bought_at" autocomplete="off" required value="{{ old('bought_at') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

{{--        <div v-for="(wording, index) in wordings" class="col-span-6">--}}
{{--            <label class="block text-sm font-medium text-gray-700"> и его цена:</label>--}}
{{--            <div class="flex gap-4 mt-1">--}}
{{--                <input class="flex-initial focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="products[]" autocomplete="off" v-model="wordings[index].product">--}}
{{--                <input class="flex-initial focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="number" name="prices[]" autocomplete="off" v-model="wordings[index].price">--}}
{{--                <button class="flex-none bg-red-500 text-white font-semibold px-4 hover:bg-red-600 rounded text-xs" type="button" @click="wordings.splice(index, 1)">✕</button>--}}
{{--            </div>--}}
{{--        </div>--}}

        <template v-for="(product, index) in products" :key="index">
            <div class="col-span-6 sm:col-span-4">
                <label class="block text-sm font-medium text-gray-700">Название @{{ index + 1 }}-го товара:</label>
                <input type="text" :name="'products[' + index + '][name]'" autocomplete="off" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Цена @{{ index + 1 }}-го товара:</label>
                <input type="number" :name="'products[' + index + '][price]'" autocomplete="off" required step="0.01" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
        </template>

        <button type="button" class="col-span-6 py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" @click="products.push({product: '', price: ''})">
            Добавить товар
        </button>
    </x-form>

    <x-slot name="scripts">
        <script src="https://unpkg.com/vue@next"></script>
        <script>
            Vue.createApp({
                data() {
                    return {
                        products: [{name: '', price: ''}]
                    };
                }
            }).mount('#form');
        </script>
    </x-slot>
</x-app-layout>
