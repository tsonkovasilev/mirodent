<x-layout>
    <h2>Регистрация</h2>
    <form method="post" action="{{ route('register') }}">
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
        
        Name: <input type="text" name="name" value="{{ old('name') }}" requred ><br>
        Email: <input type="email" name="email" value="{{ old('email') }}" requred ><br>
        Password: <input type="password" name="password" requred><br>
        Confirm Password: <input type="password" name="password_confirmation" requred><br>
        <input type="submit">
    </form>
</x-layout>