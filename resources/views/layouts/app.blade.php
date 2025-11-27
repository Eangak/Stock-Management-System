<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 h-screen text-white fixed text-center ">

        <!-- Logo -->
        <div class="bg-green-600 p-4 text-center font-bold text-xl">
            Stock Management
        </div>

        <!-- Menu -->
        <ul class="mt-4 space-y-1">

            <li class="p-3 hover:bg-gray-700">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="{{ route('category.index') }}" class="flex items-center gap-3">
                    <i class="fa-solid fa-list"></i> Category
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="{{ route('unit.index') }}" class="flex items-center gap-3">
                    <i class="fa-solid fa-users"></i> Unit
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="{{ route('product.index') }}" class="flex items-center gap-3">
                    <i class="fa-solid fa-box"></i> Product
                </a>
            </li>

            <!-- <li class="p-3 hover:bg-gray-700">
                <a href="#" class="flex items-center gap-3">
                    <i class="fa-solid fa-users"></i> Customer
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="#" class="flex items-center gap-3">
                    <i class="fa-solid fa-truck"></i> Supplier
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="#" class="flex items-center gap-3">
                    <i class="fa-solid fa-right-left"></i> Outgoing Products
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="#" class="flex items-center gap-3">
                    <i class="fa-solid fa-cart-plus"></i> Purchase Products
                </a>
            </li>-->

            <li class="p-3 hover:bg-gray-700">
                <a href="{{route('adjuststockin.index')}}" class="flex items-center gap-3">
                    <i class="fa-solid fa-cart-plus"></i> Stock In Products
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="{{ route('report.stockin') }}" class="flex items-center gap-3">
                    <i class="fa-solid fa-right-left"></i> Report Stock In
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <a href="{{route('profile.users')}}" class="flex items-center gap-3">
                    <i class="fa-solid fa-user-shield"></i> Users
                </a>
            </li> 

            <li class="p-3 hover:bg-gray-700">
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3">
                    <i class="fa-solid fa-user"></i> Profile
                </a>
            </li>

            <li class="p-3 hover:bg-gray-700">
                <form method="POST" action="{{ route('logout') }}" class="flex items-center gap-3">
                    @csrf
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <button>Logout</button>
                </form>
            </li>

        </ul>
    </aside>

    <!-- Main Section -->
    <div class="ml-64 w-full">

        <!-- Top Header -->
        <header class="bg-brown-600 text-brown px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold"></h1>

                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-user-circle text-2xl"></i>
                    <span>{{ Auth::user()->name ?? 'Admin' }}</span>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            {{ $slot }}
        </main>

    </div>

</div>

</body>
</html>
