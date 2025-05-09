<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Housing Society Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; }

    nav {
      background-color: #2563eb;
      padding: 0.75rem 0;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-image: url('your-background.jpg'); /* Optional background image */
      background-size: cover;
      background-position: center;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .logo {
      color: white;
      font-size: 1.25rem;
      font-weight: bold;
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .logo i {
      margin-right: 0.5rem;
    }

    .nav-links {
      display: none;
    }

    .nav-links a {
      color: #e5e7eb;
      text-decoration: none;
      padding: 0.5rem 0.75rem;
      font-weight: 500;
      border-radius: 0.375rem;
      transition: background 0.3s ease;
    }

    .nav-links a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .menu-btn {
      display: block;
      cursor: pointer;
    }

    .bar {
      height: 3px;
      width: 24px;
      background-color: white;
      margin: 4px 0;
    }

    @media (min-width: 768px) {
      .nav-links {
        display: flex;
        gap: 0.5rem;
      }

      .menu-btn {
        display: none;
      }

      .mobile-menu {
        display: none;
      }
    }

    .mobile-menu {
      display: none;
      flex-direction: column;
      margin-top: 0.5rem;
    }

    .mobile-menu a {
      background: transparent;
      color: white;
      padding: 0.5rem 0.75rem;
      border-radius: 0.375rem;
      text-decoration: none;
    }

    .mobile-menu a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .hero {
      position: relative;
      width: 100%;
      height: 500px;
      overflow: hidden;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .hero-content {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      transform: translateY(-50%);
      text-align: center;
      color: white;
      padding: 1rem;
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
      text-transform: uppercase;
    }

    .hero p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
    }

    .search-box {
      background: white;
      padding: 1.5rem;
      border-radius: 0.75rem;
      max-width: 900px;
      margin: 0 auto;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .search-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
    }

    @media (min-width: 768px) {
      .search-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .search-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    .search-grid input,
    .search-grid select,
    .search-grid button {
      height: 40px;
      border-radius: 0.375rem;
      padding: 0 0.75rem;
      font-size: 1rem;
      border: 1px solid #ccc;
    }

    .search-grid button {
      background-color: #2563eb;
      color: white;
      border: none;
      cursor: pointer;
    }

    .search-grid button:hover {
      background-color: #1d4ed8;
    }

    .rent-section {
      background-color: #f9fafb;
      padding: 3rem 1rem;
      text-align: center;
    }

    .rent-section h2 {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .rent-section p {
      margin-bottom: 1.5rem;
      color: #6b7280;
    }

    .rent-section a {
      background-color: #2563eb;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 0.5rem;
      text-decoration: none;
      font-weight: bold;
    }

    .rent-section a:hover {
      background-color: #1d4ed8;
    }
  </style>

  <script>
    function toggleMenu() {
      var menu = document.getElementById("mobileMenu");
      menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
    }
  </script>
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>
<!-- Hero Section -->
<?php include 'hero.php'; ?>

<!-- Include Key Features Section -->
<?php include 'feature.php'; ?>
<!-- Rent service End -->
<?php include 'service.php'; ?>
<!-- Rent Section -->
<?php include 'rent-properties.php'; ?>
<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
