<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        tr>td:nth-child(2),
        tr>th:nth-child(2) {
            background: #91F562;
        }

        tr>td:nth-child(3),
        tr>th:nth-child(3) {
            background: #CFFB1F;
        }

        tr>td:nth-child(4),
        tr>th:nth-child(4) {
            background: #FCBC18;
        }

        tr>td:nth-child(5),
        tr>th:nth-child(5) {
            background: #FF5E5E;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Absen Siswa SMK Darut Taqwa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Absen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="filter d-flex bg-secondary p-2">
        <div class="input-group px-2 d-flex flex-column">
            <label for="kelas">Kelas:</label>
            <select class="form-select w-100" id="kelas">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="input-group px-2 d-flex flex-column">
            <label for="tanggal">Tanggal:</label>
            <div class="d-flex justify-content-between"> <label for="tgl_awal">Mulai:</label><input type="date" id="tgl_awal" name="tgl_awal"></div>
            <div class="d-flex justify-content-between"><label for="tgl_akhir">Sampai:</label><input type="date" id="tgl_akhir" name="tgl_akhir"></div>
        </div>
        <button class="btn btn-light" type="submit">Filter</button>

    </div>

    <table class="table p-2">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">H</th>
                <th scope="col">S</th>
                <th scope="col">I</th>
                <th scope="col">A</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Muhammad Afrizal Muzakki Firmansyah Prasetyo</td>
                <td>2</td>
                <td>3</td>
                <td>0</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Giselle Jeremy Waskito</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>5</td>
            </tr>

        </tbody>
    </table>

</body>

</html>