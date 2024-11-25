<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOEI Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            position: relative;
            height: 100vh; /* Full height */
            background-image: url('https://adventuremotorcycle.com/images/ARTICLES/Gear/Shoei/Hornet-X2-2021/Shoei-HornetX2-FBTW.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .hero .content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            text-transform: uppercase;
        }

        .navbar-brand img {
            width: 120px;
            height: auto;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://seeklogo.com/images/S/shoei-logo-CDA8A5C43A-seeklogo.com.png" alt="SHOEI Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('Helmet')}}">Helmet</a>
                    </li>
                    <a class="nav-link" href="{{url('World link')}}">Distributor</a>
                    </li>
                    </li>
                    <a class="nav-link" href="{{url('Contact')}}">Contact</a>
                    </li>
                    </li>
                    <a class="nav-link" href="{{url('Support')}}">Support</a>
                    <a class="nav-link" href="{{url('Linktree')}}">Pertemuan 1</a>
                    <a class="nav-link" href="{{url('hello')}}">Pertemuan 2-1</a>
                    <a class="nav-link" href="{{url('Style')}}">Pertemuan 2-2</a>
                    <a class="nav-link" href="{{url('Style2')}}">Pertemuan 2-3</a>
                    <a class="nav-link" href="{{url('responsive1')}}">Pertemuan 3</a>
                    <a class="nav-link" href="{{url('Testimony')}}">Pertemuan 5</a>
                    <a class="nav-link" href="{{url('Form')}}">Pertemuan 7</a>
                    </li>
                    </li>
                    </li>
                    </li>
                    </li>
                    </li>
                    </li>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="content">
            <h1>Premium Helmets<br>For Every Ride</h1>
            <p>Discover the ultimate safety and performance</p>
        </div>
    </section>
    <H

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
