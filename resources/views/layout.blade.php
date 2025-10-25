<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body class="">
    <div class="container max-w-7xl m-auto bg-slate-100 px-6 min-h-screen">
        <header class="h-24 flex items-center justify-between">
            <div class="logo">
                <a class="text-[#3E5F44] text-2xl font-bold" href="/">Toko Pakde</a>
            </div>
            <div class="nav w-100 flex justify-end">
                <nav class="w-1/2 flex justify-between text-lg font-semibold">
                    @section('breadcrumb')
                        <a href="/">Home</a>
                        <a href="/product">Kategori</a>
                    @show
                </nav>

            </div>
        </header>
        <main>
            <div class="main">
                @yield('content')
            </div>
        </main>
    </div>
    <footer class="absolute bottom-0 w-full">
        <div class="h-24 w-full flex justify-center items-center bg-slate-100">
            <p>Copyright &copy; 2023</p>
        </div>
    </footer>
</body>

</html>

