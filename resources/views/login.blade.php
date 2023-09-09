<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Test</title>
</head>
<body>
<nav class="flex justify-center border-b border-black">
    <img src="{{asset('images/logo.png')}}" alt="" class="h-32 w-full object-contain">
</nav>
<div class="space-y-14 py-10 px-14">
    <div>
        <h2 class="text-xl font-bold">Login</h2>
        <p>Masukkan Email dan password mu</p>
    </div>

    <form action="" class="space-y-4">
        <div class="space-y-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="w-full py-1 px-3 bg-gray-300">
        </div>
        <div class="space-y-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="w-full py-1 px-3 bg-gray-300">
        </div>
        <a href="#" class="block py-2 w-full text-center text-white bg-cyan-600">Masuk</a>
        <a href="#" class="block text-cyan-600 text-center">Lupa Password ?</a>
    </form>
</div>
<div class="p-10 flex justify-between border-t border-black items-center">
    <p>Belum punya akun ?</p>
    <a href="/daftar" class="bg-cyan-600 text-white py-2 px-10">Buat akun</a>
</div>
</body>
</html>
