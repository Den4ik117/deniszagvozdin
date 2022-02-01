<x-app-layout>
    <x-slot name="title">Покупки</x-slot>
    <x-slot name="header">
        <div class="flex items-center justify-between py-2">
            <div class="font-bold">
                <span>Покупки</span>
            </div>
            <a class="create-btn bg-green-500 text-white font-semibold py-1 px-2 hover:bg-green-600 rounded text-sm" href="{{ route('admin.orders.create') }}">
                <span class="block sm:hidden">＋</span>
                <span class="hidden sm:block">Создать</span>
            </a>
        </div>
    </x-slot>

    @if($orders->isEmpty())
        <x-info>Покупки не найдены</x-info>
    @else
        <x-table>
            <x-slot name="head">
                <tr>
                    <x-th class="text-left">Магазин</x-th>
                    <x-th class="text-left">Дата</x-th>
                    <x-th class="text-left">Покупка</x-th>
                    <x-th class="text-left">Цена</x-th>
                    <x-th class="text-left">Сумма</x-th>
                </tr>
            </x-slot>

            <x-slot name="body">
                @foreach($orders as $order)
                    <tr>
                        <x-td class="text-left">{{ $order->shop }}</x-td>
                        <x-td class="text-left">{{ $order->bought_at->format('d.m.Y') }}</x-td>
                        <x-td class="text-left">
                            <ul>
                                @foreach($order->products as $product)
                                    <li class="mb-1">{{ $product['name'] }}</li>
                                @endforeach
                            </ul>
                        </x-td>
                        <x-td class="text-left">
                            <ul>
                                @foreach($order->products as $product)
                                    <li class="mb-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                            {{ $product['price'] }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </x-td>
                        <x-td>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                {{ $order->products->sum('price') }} руб.
                            </span>
                        </x-td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
    @endif
</x-app-layout>
