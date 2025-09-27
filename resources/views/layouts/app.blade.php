<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ConfessTune')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #384B70;
            --secondary: #507687;
            --cream: #FCFAEE;
            --accent: #B8001F;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--white);
            color: var(--primary);
            line-height: 1.6;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            color: var(--white);
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .card {
            background: var(--cream);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(56, 75, 112, 0.1);
            margin-bottom: 2rem;
        }

        .welcome-text {
            text-align: center;
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 2rem;
            font-weight: 600;
        }

        .btn {
            display: inline-block;
            background: var(--primary);
            color: var(--white);
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .btn:hover {
            background: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(184, 0, 31, 0.3);
        }

        .btn-center {
            display: block;
            width: fit-content;
            margin: 0 auto;
        }

        .btn-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-logout {
            background: var(--accent);
            margin-left: auto;
        }

        .btn-logout:hover {
            background: #8B0000;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar h1 {
            color: var(--white);
            font-size: 2rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary);
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--secondary);
            border-radius: 8px;
            font-size: 1rem;
            background: var(--white);
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(184, 0, 31, 0.1);
        }

        select.form-control {
            cursor: pointer;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .back-btn {
            margin-bottom: 1rem;
            background: var(--secondary);
        }

        .back-btn:hover {
            background: var(--primary);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .navbar {
                padding: 1rem;
            }

            .navbar-content {
                flex-direction: column;
                gap: 1rem;
            }

            .navbar h1 {
                font-size: 1.5rem;
            }

            .card {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-content">
            <h1><i class="fas fa-music"></i> ConfessTune</h1>
            @if(request()->is('user*') || request()->is('admin*'))
            @if(request()->is('user*') || request()->is('admin*'))
            @if(Route::has('logout'))
            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                @csrf
                <button type="submit" class="btn btn-logout" onclick="return confirm('Yakin ingin logout?')">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
            @else
            <!-- Fallback jika route logout tidak ada -->
            <a href="{{ url('/logout-manual') }}" class="btn btn-logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            @endif
            @endif
            @endif
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>
</body>

</html>