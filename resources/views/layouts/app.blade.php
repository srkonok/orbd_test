<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <!-- Include CSS or other assets here -->
<!-- Import Bootstrap 5.4.0 from a CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
    <header>
        <!-- Your header content here -->
    </header>

    <nav>
        <!-- Your navigation menu here -->
    </nav>

    <div class="container">
        @yield('content') <!-- This is where the child views' content will be inserted -->
    </div>

    <footer>
        <!-- Your footer content here -->
    </footer>
</body>
</html>
