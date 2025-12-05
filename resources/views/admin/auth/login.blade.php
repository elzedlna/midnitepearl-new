<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Midnite Pearl</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { 
            font-family: 'Lato', sans-serif; 
            background: #FAF7EE; 
        }
        h1, h2, h3, h4, h5 { 
            font-family: 'Inria Serif', serif; 
        }
    </style>
</head>

<body class="bg-white">
    <div class="min-h-screen flex">
        <div class="hidden lg:flex lg:w-1/2 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=800&q=80');">
            <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-12">
            <div class="max-w-md w-full space-y-8">
                <div class="text-center lg:hidden mb-8">
                    <a class="flex items-center justify-center flex-shrink-0" href="#">
                        <img 
                            src="{{ asset('images/midnitepearl-logo.png') }}"
                            alt="Midnite Pearl"
                            class="w-auto h-8"
                        >
                    </a>
                </div>

                <div class="text-center hidden lg:block">
                    <a class="flex items-center justify-center flex-shrink-0" href="{{ url('/') }}">
                        <span class="sr-only">Home</span>
                        <img 
                            src="{{ asset('images/midnitepearl-logo.png') }}"
                            alt="Home"
                            class="w-auto h-6"
                        >
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        Admin Login
                    </p>
                </div>
                
                <form class="mt-8 space-y-6" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    
                    @if ($errors->any())
                        <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-lg">
                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="space-y-5">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input id="email" name="email" type="email" required 
                                class="appearance-none rounded-lg block w-full px-4 py-3 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" 
                                placeholder="admin@example.com"
                                value="{{ old('email') }}">
                        </div>
                        
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input id="password" name="password" type="password" required 
                                class="appearance-none rounded-lg block w-full px-4 py-3 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" 
                                placeholder="Enter your password">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" 
                                class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-teal-600 hover:text-teal-500">
                                Forgot?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-colors">
                            Login
                        </button>
                    </div>

                    <div class="text-center text-sm text-gray-600">
                        Don't have an account? <a href="#" class="font-medium text-teal-600 hover:text-teal-500">Create one</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>