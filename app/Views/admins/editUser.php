<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-3" style="max-width: 940px;">
            <h1 class="m-4" >Edit User</h1>
                        <hr>
                <div class="row g-0">

                    <div class="col-md-4">
                        
                        <img src="<?= base_url('/img/profile/' . $user->user_image); ?>"
                            class="img-fluid img-profile rounded-circle my-xl-5 mx-md-4" alt="<?= $user->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body my-md-3">
                            <div class="card-body">
                                <form action="/admin/update" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $user->id ?>">

                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" id="username" name="username"
                                        value="<?= $user->username ?>">

                                    <label for="fullname">Full Name</label>
                                    <input class="form-control" type="text" id="fullname" name="fullname"
                                        value="<?= $user->fullname ?>">

                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="<?= $user->email ?>">

                                    <label for="password">Password (leave blank to keep the same)</label>
                                    <input class="form-control" type="password" id="password" name="password">

                                    <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role">
                                        <!-- Replace 'admin', 'user' with your actual roles -->
                                        <option value="admin" <?= $user->role == 'admin' ? 'selected' : '' ?>>Admin
                                        </option>
                                        <option value="user" <?= $user->role == 'user' ? 'selected' : '' ?>>User</option>
                                    </select>

                                    <label for="user_image">Profile Image (leave blank to keep the same)</label>
                                    <input class="form-control" type="file" id="user_image" name="user_image">

                                    <input class="btn btn-success mt-2" type="submit" value="Update User"> | <a
                                        href="<?= base_url('/admin/show/' . $user->id) ?>"
                                        class="btn btn-primary mt-2">Back</a>
                                </form>


                                <?php if (session('error')): ?>
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error!!!',
                                            text: '<?= session('error') ?>'
                                        });
                                    </script>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

    <?= $this->endSection(); ?>