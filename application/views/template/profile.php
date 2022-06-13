<main class="form-signin container">
    <div class="d-flex justify-content-center ">
        <?php foreach ($data as $i) {
            print_r($i);
        } ?>
        <form action="">
            <center>
                <img class="" src="https://cdn-icons-png.flaticon.com/512/3313/3313480.png" alt="" width="72" height="57">
                <h3>Profile</h3>
            </center>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
            </div>
            <div class="mb-3">
                <label for="image" class="form-labe">Foto</label>
                <img src="" alt="">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br>
            <br>
        </form>
    </div>
</main>