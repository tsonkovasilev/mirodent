<x-layout>
    <h2>Orders</h2>
    <a href="{{ route('orders.create') }}">Create New Order</a>
    <ul>
        @foreach ($orders as $order)
            <li>
                <x-card href="{{ route('orders.view',$order['id']) }}" :new="$order['viewed']==0">
                    <h3>{{ $order['title'] }} </h3>
                    <p>{{ $order->status->name }}
                </x-card>
            </li>
        @endforeach
    </ul>
    {{ $orders->links() }}
</x-layout>

