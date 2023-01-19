<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #8 : @yield('judulku')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>

    <header>

        <h2>
            @section('headerku')
            @show
        </h2>
        <nav>
            <a href="/blog">HOME</a>
            |
            <a href="/blog/tentang">TENTANG</a>
            |
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr />
    <br />
    <br />

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>


    <!-- bagian konten blog -->
    @yield('konten')


    <br />
    <br />
    <hr />
    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
    </footer>

</body>

</html>
