<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
        }
        .login-card h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-card .btn-primary {
            width: 100%;
        }
        .center-alert {
            position: fixed;
            top: 5%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1050;
            max-width: 300px;
            text-align: center;
        }
        .centered-btn {
            display: flex;
            justify-content: center;
            margin-top: 0px;
        }
    </style>
</head>
<body>
    <!-- Login Card -->
    <div class="login-card">
        <h3>Login Administrator</h3>
        <form action="<?= base_url('admin/authenticate'); ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="centered-btn">
            <button class="btn btn-success mt-3" data-toggle="modal" data-target="#addUserModal">Tambah Admin Baru</button>
        </div>
        <div class="centered-btn">
            <a href="<?= base_url(); ?>" class="btn btn-secondary mt-3">Kembali ke Home</a>
        </div>
    </div>

    <!-- Modal Tambah Admin -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?= base_url('admin/add_user'); ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Tambah Admin Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="new_username">Username</label>
                            <input type="text" name="new_username" id="new_username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="administrator">Administrator</option>
                                <option value="operator">Operator</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Centered Alert -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success center-alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger center-alert">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <script>
        // Auto-hide alert after 3 seconds
        setTimeout(() => {
            $('.center-alert').fadeOut('slow');
        }, 3000);
    </script>
</body>
</html>
