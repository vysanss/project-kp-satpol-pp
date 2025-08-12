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
</body>
</html>
            font-weight: 700;
            margin-bottom: 5px;
            position: relative;
            z-index: 2;
        }
        
        .login-subtitle {
            font-size: 14px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }
        
        .login-body {
            padding: 40px 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-control {
            width: 100%;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 15px 50px 15px 15px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: rgba(248, 249, 250, 0.8);
            outline: none;
        }
        
        .form-control:focus {
            border-color: #2a5298;
            box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.25);
            background: white;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #495057;
            font-weight: 500;
            font-size: 14px;
        }
        
        .btn-login {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-weight: 600;
            font-size: 16px;
            width: 100%;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(42, 82, 152, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .error-alert {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 15px;
            margin-top: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
        }
        
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @media (max-width: 576px) {
            .login-card {
                margin: 10px;
                border-radius: 15px;
            }
            
            .login-header {
                padding: 30px 20px 25px;
            }
            
            .login-body {
                padding: 30px 20px;
            }
            
            .logo {
                width: 70px;
                height: 70px;
            }
            
            .logo i {
                font-size: 30px;
            }
            
            .login-title {
                font-size: 20px;
            }
            
            .form-control {
                padding: 12px 45px 12px 12px;
                font-size: 14px;
            }
            
            .input-icon {
                right: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo-container">
                    <div class="logo">
                        <img src="{{ asset('img/logo-Pol-PP-png.webp') }}" alt="Logo Satpol PP">
                    </div>
                    <h1 class="login-title">SATPOL PP</h1>
                    <p class="login-subtitle">Satuan Polisi Pamong Praja</p>
                </div>
            </div>
            
            <div class="login-body">
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email Admin</label>
                        <input type="email" 
                               class="form-control" 
                               id="email" 
                               name="email" 
                               required 
                               autofocus>
                        <i class="fas fa-envelope input-icon"></i>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" 
                               class="form-control" 
                               id="password" 
                               name="password" 
                               required>
                        <i class="fas fa-lock input-icon"></i>
                    </div>
                    
                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Masuk ke Dashboard</span>
                    </button>
                </form>
                
                @if($errors->any())
                    <div class="error-alert">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
