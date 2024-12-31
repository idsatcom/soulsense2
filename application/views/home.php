<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOULSENSE - Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('<?= base_url('assets/adminlte/img/homepage.jpg'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

        /* modal welcome message */
        .modal {
        display: none; /* Hidden by default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        }

        .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close-btn {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 24px;
        cursor: pointer;
        }


        .header-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 15px;
            background-color: rgba(255, 255, 255, 0.7); /* Add a semi-transparent background to make text readable */
            border-radius: 10px;
        }
        .header-logo img {
            height: 80px;
            margin: 0 15px;
            background-color: transparent; /* Pastikan latar belakang elemen transparan */
            border: none; /* Hilangkan border jika ada */
        }
        .header-text {
            font-size: 2.5em;
            font-weight: bold;
            color: #333;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        .welcome-text {
            text-align: center;
            font-size: 1.5em;
            font-weight: normal;
            color: #333;
            background-color:transparent;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .test-container {
            padding: 30px 15px;
            background-color:transparent; /* Add a semi-transparent background */
            border-radius: 10px;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .card-body {
            padding: 20px;
        }
        .card h5 {
            font-weight: bold;
            color: #0056b3;
        }
        .footer {
            background-color: #0056b3;
            color: #fff;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
        @media (max-width: 768px) {
            .header-logo img {
                height: 60px;
            }
            .header-text {
                font-size: 2em;
            }
            .card h5 {
                font-size: 1.2em;
            }
        }
    </style>

</head>
<body>

    
    <!-- Tombol Login Admin -->
    <div class="d-flex justify-content-end p-3">
        <a href="<?= base_url('admin/login'); ?>" class="btn btn-primary">Login Admin</a>
    </div>

    <!-- Header Logo dan Tulisan -->
    <div class="header-logo">
        <img src="<?= base_url('assets/adminlte/img/fikes.png'); ?>" alt="Logo FIKES">
        <div class="header-text"><h1><center>SOULSENSE</center></h1><p><h5>"Embrace Your Mind, Empower Your Life"</h5></p></div>
        <img src="<?= base_url('assets/adminlte/img/logo_soul.png'); ?>" alt="Logo Soul">
    </div>

    <div id="welcomeModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModal">&times;</span>
            <h2>Welcome!</h2>
            <p>Selamat Datang di Website kami, kawan !</p>
            <p><i>(silahkan klik dimana saja untuk menutup pesan ini)</i></p>
        </div>
    </div>

    <script>
            document.addEventListener("DOMContentLoaded", () => {
        const modal = document.getElementById("welcomeModal");
        const closeModal = document.getElementById("closeModal");

        // Show the modal when the page loads
        setTimeout(() => {
            modal.style.display = "flex";
        }, 1000); // Delay for 1 second

        // Close the modal when the close button is clicked
        closeModal.addEventListener("click", () => {
            modal.style.display = "none";
        });

        // Close the modal when clicking outside of it
        window.addEventListener("click", (event) => {
            if (event.target === modal) {
            modal.style.display = "none";
            }
        });
        });
 
    </script>
    <!-- Welcome Text -->
    <div class="welcome-text">
        <p><i>Ini adalah website yang akan membantu untuk mengukur kesehatan mental teman-teman. <br>
        Silahkan pilih tes kesehatan mental apa yang ingin diinginkan di bawah ini.</i></p>
        <p><b>Selamat mencoba!</b></p>
    </div>

    <!-- Kotak Tes -->
    <div class="container test-container">
        <div class="row">
            <!-- Quality Of Life -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Quality Of Life</h5>
                        <p>Tes ini membantu mengukur tingkat kesehatan mental</p>
                        <a href="<?= base_url('test/1'); ?>" class="btn btn-primary">Mulai Tes</a>
                    </div>
                </div>
            </div>
            <!-- Anxiety -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Anxiety</h5>
                        <p>Tes ini membantu mengukur tingkat kecemasan diri</p>
                        <a href="<?= base_url('test/2'); ?>" class="btn btn-primary">Mulai Tes</a>
                    </div>
                </div>
            </div>
            <!-- Depression -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Depression</h5>
                        <p>Tes ini membantu mengukur tingkat depresi</p>
                        <a href="<?= base_url('test/3'); ?>" class="btn btn-primary">Mulai Tes</a>
                    </div>
                </div>
            </div>
            <!-- Self-Acceptance -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Self-Acceptance</h5>
                        <p>Tes ini membantu mengukur tingkat penerimaan diri</p>
                        <a href="<?= base_url('test/4'); ?>" class="btn btn-primary">Mulai Tes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        © 2024 FIKES - Universitas Muhammadiyah Jember. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
