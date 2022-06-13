<main class="form-signin container">
    <div class="d-flex justify-content-center ">
        <form class="col-6 border ps-2 pe-2 pt-2" style="height:70vh;" method="post" action="<?= base_url('login/register_data') ?>">
            <center>
                <img class="" src="https://cdn-icons-png.flaticon.com/512/3313/3313480.png" alt="" width="72" height="57">
                <h3>Register</h3>
            </center>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>