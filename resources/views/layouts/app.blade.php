<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLGAN</title>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #333;
        }
        main {
            padding: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            margin-top: 0;
            font-weight: 600;
        }
        p {
            line-height: 1.6;
            margin-top: 0;
        }
        
        /* Navigation styles */
        .nav-container {
            background-color: #1a73e8;
            color: white;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .nav-brand {
            font-weight: normal;
            font-size: 1.1rem;
            margin-right: 0.5rem;
        }
        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 1rem;
            font-size: 0.95rem;
            flex-wrap: wrap;
        }
        .nav-link {
            text-decoration: none;
            color: rgb(200, 220, 255);
        }
        .nav-link.active {
            color: white;
        }

        /* Desktop specific styles */
        @media (min-width: 768px) {
            main {
                padding: 2rem 5rem;
            }
            .nav-container {
                padding: 1rem 5rem;
                gap: 0;
            }
            .nav-brand {
                margin-right: 1.5rem;
            }
        }
    </style>
</head>
<body>
    @include('layouts.navigation')

    <main>
        @yield('content')
    </main>
</body>
</html>
