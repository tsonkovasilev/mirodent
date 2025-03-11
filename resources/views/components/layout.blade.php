<h1>Miro Dent</h1>


<ul>
   <li class="nav-item"><a class="nav-link" href="/">Начало</a></li>
   <li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}">Поръчки</a></li>
   
   @guest
      <li class="nav-item"><a class="nav-link" href="{{ route('show.login') }}">Вход</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('show.register') }}">Регистрация</a></li>
   @endguest
</ul>

@auth
Здравей отново, {{ Auth::user()->name }}
<form action="{{ route('logout') }}" method="post">
   @csrf
   <input type="submit" name="logout" value="Изход">
</form>
@endauth
<hr>

{{ $slot }}