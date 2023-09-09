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
        <h2 class="text-xl font-bold italic">Saran dan Kritik dari web Kami</h2>
    </div>

    <div class="space-y-6">
        <div>
            <p class="text-sm text-gray-500">Be the first to like this.</p>
            <div class="border-b border-gray-300">
                <p class="px-5 py-2 bg-gray-300 text-gray-500 w-min whitespace-nowrap">COMMENTS (0)</p>
            </div>
            <p class="text-sm text-gray-500 pt-3">Leave a comment</p>
        </div>
        <div class="space-y-3">
            <h1 class="font-bold text-lg">Leave a Reply</h1>
            <textarea rows="6" class="w-full border border-gray-300"
                      placeholder="Enter yout comment here..."></textarea>
        </div>
    </div>
</div>
</body>
</html>
