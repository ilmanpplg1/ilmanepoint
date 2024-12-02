<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
@extends('auth.layouts')

@section('content')


<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Login</h1>
        
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Masukkan email Anda">
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Masukkan password Anda">
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50">
                Login
            </button>
        </form>

        <!-- Forgot Password Link -->
        <div class="mt-4 text-center">
            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">Lupa password?</a>
        </div>

        <!-- Register Link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Belum punya akun?  <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800">Daftar</a></p>
        </div>
    </div>

    @endsection

</body>
</html>

