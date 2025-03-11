<x-layout>
    @if (session('success'))
        <div style="background-color:red; color:white; padding:10px;"> {{ session('success') }}</div>
    @endif
    <h2>Поръчки</h2>
    <a href="{{ route('orders.create') }}">Create New Order</a>
    <table>
        @foreach ($orders as $order)
                <tr>
                    <td><a href="{{ route('orders.view',$order->id) }}">{{ $order->title }}</a></td>
                    <td>{{ $order->status->name }}</td>
                    <td>
                        <form action="{{ route('orders.delete',$order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="button" value="Delete">
                        </form>
                    </td>
                </tr>
        @endforeach
    </table>
    {{ $orders->links() }}
</x-layout>

