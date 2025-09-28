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

        /* Profile Page Styling */
        .profile-section {
            background: var(--cream);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--primary);
        }

        .profile-section.danger {
            border-left-color: var(--accent);
        }

        .btn-danger {
            background: var(--accent);
            color: var(--white);
        }

        .btn-danger:hover {
            background: #8B0000;
        }

        .btn-secondary {
            background: var(--secondary);
            color: var(--white);
        }

        .btn-secondary:hover {
            background: var(--primary);
        }

        /* Grid responsive untuk info profile */
        @media (max-width: 768px) {
            div[style*="grid-template-columns"] {
                grid-template-columns: 1fr !important;
            }
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 4rem 2rem;
            text-align: center;
            margin: -2rem -2rem 2rem -2rem;
            border-radius: 0 0 20px 20px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--cream);
        }

        .hero-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary-hero {
            background: var(--accent);
            color: var(--white);
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(184, 0, 31, 0.3);
        }

        .btn-primary-hero:hover {
            background: #8B0000;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(139, 0, 0, 0.4);
        }

        .btn-secondary-hero {
            background: transparent;
            color: var(--white);
            padding: 15px 30px;
            border: 2px solid var(--white);
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-secondary-hero:hover {
            background: var(--white);
            color: var(--primary);
        }

        /* Section Titles */
        .section-title {
            text-align: center;
            color: var(--primary);
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .about-item {
            text-align: center;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .about-item:hover {
            transform: translateY(-5px);
        }

        .about-icon {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1rem;
        }

        .about-item h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .about-item p {
            color: var(--secondary);
            line-height: 1.6;
        }

        /* Steps Section */
        .steps-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .step {
            text-align: center;
            padding: 1.5rem;
            position: relative;
        }

        .step-number {
            background: var(--accent);
            color: var(--white);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1rem;
        }

        .step h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .step p {
            color: var(--secondary);
            line-height: 1.5;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .contact-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            border: 1px solid rgba(56, 75, 112, 0.1);
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .contact-avatar {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: var(--white);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1rem;
        }

        .contact-card h3 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .contact-role {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .contact-info a {
            display: block;
            color: var(--secondary);
            text-decoration: none;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .contact-info a:hover {
            color: var(--accent);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            text-align: center;
            padding: 2rem;
            margin: 2rem -2rem -2rem -2rem;
            border-radius: 20px 20px 0 0;
        }

        .footer-links {
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: var(--cream);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--white);
        }

        /* Auth Pages */
        .auth-container {
            max-width: 400px;
            margin: 2rem auto;
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-header h1 {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: var(--secondary);
        }

        .auth-links {
            text-align: center;
            margin-top: 1rem;
        }

        .auth-links a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-links a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .hero-section {
                padding: 3rem 1rem;
                margin: -2rem -1rem 2rem -1rem;
            }

            .footer {
                margin: 2rem -1rem -2rem -1rem;
            }

            .footer-links {
                flex-direction: column;
                gap: 1rem;
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