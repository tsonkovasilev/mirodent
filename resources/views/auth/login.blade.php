<x-layout>
    <h2>Вход</h2>
    <form method="post" action="{{ route('login') }}">
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
        Email: <input type="email" name="email" value="{{ old('email') }}" requred><br>
        Password: <input type="password" name="password" requred value=""><br>
        <input type="submit">
    </form>
</x-layout>