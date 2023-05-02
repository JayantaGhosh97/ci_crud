<?= $this->extend('layouts/assemble') ?>
<?= $this->section('title') ?>Employees<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Employee Manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('') ?>">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('skills') ?>">Skills</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container my-5">
    <?php if (session()->has('msg')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('msg') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <h3 class="mb-3">Edit User</h3>
    <a href="<?= base_url('/') ?>">
        <button class="btn btn-sm btn-warning text-light fw-bold mb-2">
            Back
        </button>
    </a>
    <?= validation_list_errors() ?>
    <form method="POST" action="<?= base_url('users/' . $user['id'] . '/edit') ?>">
        <div class="mb-3">
            <label for="f_name" class="form-label">Firstname</label>
            <input type="f_name" class="form-control" id="f_name" name="f_name" value="<?= $user['f_name'] ?>">
            <span class="invalid-feedback">
            </span>
        </div>
        <div class="mb-3">
            <label for="l_name" class="form-label">Lastname</label>
            <input type="f_name" class="form-control" id="l_name" name="l_name" value="<?= $user['l_name'] ?>">
            <span class="invalid-feedback">
            </span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="f_name" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
            <span class="invalid-feedback">
            </span>
        </div>
        <div class="mb-3">
            <label for="salery" class="form-label">Salery</label>
            <input type="salery" class="form-control" id="salery" placeholder="00" name="salery" value="<?= $user['salery'] ?>">
            <span class="invalid-feedback">
            </span>
        </div>
        <button type="submit" class="btn btn-sm btn-success w-100">Update</button>
    </form>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<?= $this->endSection(); ?>