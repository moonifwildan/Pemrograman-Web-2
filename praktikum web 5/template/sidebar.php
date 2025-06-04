<?php
$activeUrl = $_GET['url'] ?? ''; // Get the current URL parameter or default to 'home'
?>

<style>
    /* Navbar Styling */
    .main-header.navbar {
        background-color: #2e8b57 !important; /* SeaGreen */

    }

    .main-header .nav-link {
        color: white !important;
        font-weight: 500;
    }

    .main-header .nav-link:hover {
        color: #d4f8d4 !important;
    }

    .navbar-badge {
        font-size: 0.7rem;
        top: 4px;
    }

    /* Sidebar Styling */
    .main-sidebar {
        background-color: #007bff !important; /* Biru */
    }

    .brand-link {
        background-color: #0056b3 !important;
        color: white !important;
        text-align: center;
        font-weight: bold;
        font-size: 1.1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding: 1rem 0;
    }

    .sidebar {
        padding-top: 1rem; /* Tambahkan jarak dari atas agar sejajar dengan navbar */
    }

    .nav-sidebar .nav-item > .nav-link {
        color: #eafaf1;
        font-weight: 500;
        text-align: center;
        padding-left: 0;
        padding-right: 0;
        transition: background-color 0.2s ease;
    }

    .nav-sidebar .nav-link.active {
        background-color: #0056b3 !important;
        color: white !important;
        font-weight: bold !important;
    }

    .nav-sidebar .nav-link p {
        margin: 0;
        font-size: 1rem;
        font-weight: 500;
        color: inherit;
    }

    .nav-header {
        font-size: 0.9rem;
        color: #e2f2e2;
        margin-top: 8px;
        letter-spacing: 1px;
        text-align: center;
    }

    .dropdown-menu {
        border-radius: 0.5rem;
    }

    .dropdown-item:hover {
        background-color: #d1f5db;
        color: #007bff;
    }

    .form-control-navbar {
        border-radius: 20px;
        padding-left: 10px;
    }
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                   <a href="?url=list_pasien.php" class="nav-link <?php echo ($_GET['url'] ?? '') === 'list_pasien.php' ? 'active' : ''; ?>">
    <p>Dashboard</p>
</a>
                </li>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                 <a href="?url=form_pasien.php" class="nav-link <?php echo ($_GET['url'] ?? '') === 'form_pasien.php' ? 'active' : ''; ?>">
    <p>tambah pasien</p>
</a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
