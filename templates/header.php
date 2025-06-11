<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoVolt - Renewable Energy Solutions</title>
    <meta name="description" content="Transform your energy future with EcoVolt's innovative renewable energy solutions. Solar, wind, hydro, and energy storage systems for a sustainable tomorrow." />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/png">

    <!-- Preconnects and Styles Links for Google Fonts and Tailwind -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'eco-green': {
                50: '#f0fdf4',
                100: '#dcfce7',
                200: '#bbf7d0',
                300: '#86efac',
                400: '#4ade80',
                500: '#22c55e',
                600: '#16a34a',
                700: '#15803d',
                800: '#166534',
                900: '#14532d',
              },
              'eco-blue': {
                50: '#eff6ff',
                100: '#dbeafe',
                200: '#bfdbfe',
                300: '#93c5fd',
                400: '#60a5fa',
                500: '#3b82f6',
                600: '#2563eb',
                700: '#1d4ed8',
                800: '#1e40af',
                900: '#1e3a8a',
              }
            },
            keyframes: {
              'fade-in': {
                '0%': { opacity: '0', transform: 'translateY(10px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' }
              },
              'float': {
                '0%, 100%': { transform: 'translateY(0px)' },
                '50%': { transform: 'translateY(-10px)' }
              }
            },
            animation: {
              'fade-in': 'fade-in 0.6s ease-out',
              'float': 'float 3s ease-in-out infinite'
            }
          }
        }
      }
    </script>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-sm border-b border-gray-100 sticky top-0 z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex items-center">
            <a href="index.php" class="flex items-center space-x-2">
              <img src="assets/img/logo.png" alt="EcoVolt Logo" class="w-8 h-8">
              <span class="text-xl font-bold bg-gradient-to-r from-eco-green-500 to-eco-blue-500 bg-clip-text text-transparent">EcoVolt</span>
            </a>
          </div>

          <!-- Desktop Navigation -->
          <div class="hidden md:flex items-center space-x-8">
            <a href="index.php" class="nav-link active">Home</a>
            <a href="solution.php" class="nav-link">Solutions</a>
            <a href="resources.php" class="nav-link">Resources</a>
            <a href="about.php" class="nav-link">About Us</a>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-gray-700 hover:text-eco-green-600 focus:outline-none">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden">
          <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-100">
            <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-eco-green-600 bg-eco-green-50">Home</a>
            <a href="solution.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-eco-green-600 hover:bg-gray-50">Solutions</a>
            <a href="resources.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-eco-green-600 hover:bg-gray-50">Resources</a>
            <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-eco-green-600 hover:bg-gray-50">About Us</a>
          </div>
        </div>
      </div>
    </nav>