<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <title>Login Admin - Satuan Polisi Pamong Praja</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-delay-2 { animation: float 6s ease-in-out infinite 2s; }
        .animate-float-delay-4 { animation: float 6s ease-in-out infinite 4s; }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-900 to-blue-700 min-h-screen font-sans">
    <!-- Floating Shapes -->
    <div class="fixed inset-0 pointer-events-none -z-10">
        <div class="absolute w-24 h-24 bg-white/10 rounded-full animate-float" style="top: 20%; left: 10%;"></div>
        <div class="absolute w-16 h-16 bg-white/10 rounded-full animate-float-delay-2" style="top: 60%; right: 10%;"></div>
        <div class="absolute w-20 h-20 bg-white/10 rounded-full animate-float-delay-4" style="bottom: 20%; left: 20%;"></div>
        <div class="absolute w-12 h-12 bg-white/5 rounded-full animate-float" style="top: 40%; right: 25%;"></div>
        <div class="absolute w-14 h-14 bg-white/5 rounded-full animate-float-delay-2" style="top: 80%; left: 60%;"></div>
        <div class="absolute w-10 h-10 bg-white/5 rounded-full animate-float-delay-4" style="top: 15%; left: 70%;"></div>
    </div>
    
    <!-- Login Container -->
    <div class="min-h-screen flex items-center justify-center p-5">
        <div class="bg-white/95 backdrop-blur-sm border border-white/20 rounded-3xl shadow-2xl overflow-hidden max-w-md w-full">
            <!-- Header -->
            <div class="bg-gradient-to-br from-blue-900 to-blue-700 text-white p-10 text-center relative">
                <div class="absolute inset-0 opacity-30" style="background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;><circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;2&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/></svg>') repeat;"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-5 shadow-xl p-2">
                        <img src="{{ asset('img/logo-Pol-PP-png.webp') }}" alt="Logo Satpol PP" class="w-full h-full object-contain">
                    </div>
                    <h1 class="text-2xl font-bold mb-1">SATPOL PP</h1>
                    <p class="text-sm opacity-90">Satuan Polisi Pamong Praja</p>
                </div>
            </div>
            
            <!-- Body -->
            <div class="p-10">
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
                    <div class="mb-5 relative">
                        <label for="email" class="block mb-2 text-gray-700 font-medium text-sm">Email Admin</label>
                        <input type="email" 
                               class="w-full border-2 border-gray-200 rounded-xl py-4 pr-12 pl-4 text-base transition-all duration-300 bg-gray-50/80 outline-none focus:border-blue-700 focus:shadow-lg focus:shadow-blue-700/25 focus:bg-white" 
                               id="email" 
                               name="email" 
                               required 
                               autofocus>
                        <i class="fas fa-envelope absolute right-4 top-1/2 transform translate-y-1 text-gray-400 pointer-events-none"></i>
                    </div>
                    
                    <div class="mb-5 relative">
                        <label for="password" class="block mb-2 text-gray-700 font-medium text-sm">Password</label>
                        <input type="password" 
                               class="w-full border-2 border-gray-200 rounded-xl py-4 pr-12 pl-4 text-base transition-all duration-300 bg-gray-50/80 outline-none focus:border-blue-700 focus:shadow-lg focus:shadow-blue-700/25 focus:bg-white" 
                               id="password" 
                               name="password" 
                               required>
                        <i class="fas fa-lock absolute right-4 top-1/2 transform translate-y-1 text-gray-400 pointer-events-none"></i>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-xl py-4 font-semibold text-base cursor-pointer transition-all duration-300 flex items-center justify-center gap-3 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-blue-700/30 active:translate-y-0">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Masuk ke Dashboard</span>
                    </button>
                </form>
                
                @if($errors->any())
                    <div class="bg-gradient-to-r from-red-600 to-red-700 text-white rounded-xl p-4 mt-5 flex items-center gap-3">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>

</head>

        </div>
    </div>
</body>
</html>
