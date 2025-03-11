<x-layout>
<h2>Create new order</h2>
<form method="post" action="{{ route('orders.store') }}">
    @csrf
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    title: 
    <input type="text" name="title" id="title" required value="{{ old('title') }}">
    

    file: 
    <input type="file" name="file" id="file" required>
    
    

    Услуга:
    <select name="service_id" id="service_id">
        @foreach($services as $service)
        <option value="{{ $service->id }}" {{ old('service_id')==$service->id ? "selected" : "" }}>{{ $service->name }} </option>
        @endforeach
    </select>
    
    Статус:
    <select name="status_id" id="status_id">
        @foreach($statuses as $status)
        <option value="{{ $status->id }}">{{ $status->name }} </option>
        @endforeach
    </select>
    <input type="hidden" name="viewed" value="0">
    <input type="submit">
</form>
</x-layout>