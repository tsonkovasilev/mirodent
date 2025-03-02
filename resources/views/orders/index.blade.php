<x-layout>
    <h1>Orders</h1>
    <ul>
        @foreach ($orders as $order)
            <li>
                <x-card href="orders/{{ $order['id'] }}" :new="$order['viewed']==0">
                    <h3>{{ $order['title'] }} </h3>
                </x-card>

            </li>
        @endforeach
        
        
    </ul>
</x-layout>