<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Contacts | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-main: #2A2A2A;
            --bg-darker: #1A1A1A;
            --bg-black: #000000;
            --accent-gray: #555555;
            --hover-gray: #777777;
            --text-white: #FFFFFF;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-white);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Header Styles */
        .navbar {
            background-color: var(--bg-black);
            border-bottom: 1px solid var(--accent-gray);
        }

        /* Card Styles */
        .stat-card {
            background-color: var(--bg-darker);
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background-color: #252525;
        }

        /* Button Styles */
        .btn-custom {
            background-color: var(--bg-black);
            color: white;
            border: 1px solid var(--accent-gray);
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: var(--hover-gray);
            color: white;
        }

        /* Table Styles */
        .table-container {
            background-color: var(--bg-darker);
            border-radius: 10px;
            padding: 20px;
            overflow-x: auto;
        }

        .table {
            color: var(--text-white);
            margin-bottom: 0;
        }

        .table thead th {
            background-color: var(--bg-black);
            border-bottom: 2px solid var(--accent-gray);
        }

        .table tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        /* Flash Messages */
        .alert-custom {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        footer {
            background-color: var(--bg-black);
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Gestion des Contacts</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="/groups">Groups</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacts">Contacts</a></li>
            </ul>
            <!-- <a href="#" class="btn btn-outline-light btn-sm"><i class="fas fa-sign-out-alt"></i> Logout</a> -->
        </div>
    </div>
</nav>

<div class="container my-4">
    <div class="alert alert-success alert-custom alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Welcome back to your contact manager.
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
    </div>

    <section class="mb-5">
        <h4 class="mb-3">Overview</h4>
        <div class="row g-3">
            <div class="col-12 col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h2 class="fw-bold">12</h2>
                    <p class="text-muted mb-0">Total Groups</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h2 class="fw-bold">148</h2>
                    <p class="text-muted mb-0">Total Contacts</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card stat-card p-4 text-center">
                    <h2 class="fw-bold">Family (42)</h2>
                    <p class="text-muted mb-0">Most Active Group</p>
                </div> 
            </div>
        </div>
    </section>

  

    

<footer class="text-center">
    <div class="container">
        <small class="text-muted">Laravel Contact Management Project &copy; 2026</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>