<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miro Dent</title>

    @vite("resources/css/app.css")
</head>
<body>
    <header>
        <nav>
            <h1>Miro Dent - the new webwebsite</h1>
            <a href="/orders">Orders</a>
            <a href="/orders/create">Create new order</a>
        </nav>
    </header>
    
    <main class="container">
    {{ $slot }}
    </main>
</body>
</html>