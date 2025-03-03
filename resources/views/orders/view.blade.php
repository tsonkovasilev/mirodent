<x-layout>
    <h1>View Order</h1>
    <p>Title: {{$order->title}}</p>
    <p>Notes: {{ $order->notes }}</p>
    <p>Status: {{ $order->status->name }}</p>
</x-layout>