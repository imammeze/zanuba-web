<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<style>
:root {
    --primary: #ff4351;
}

main {
    margin-top: 100px;
}

main {
    margin-top: 100px;
}

.logo {
    width: 100px;
}

form {
    font-family: "Poppins", sans-serif;
    padding: 20px;
    display: block;
    text-align: center;
    margin: 0 auto;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
}

.input-login {
    width: 80%;
    margin: 10px;
    border: 1px solid grey;
    border-radius: 16px;
    padding: 10px;
}

.tombol-login {
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    margin: 20px;
    border-radius: 5px;
    padding: 10px;
    background-color: var(--primary);
    border: none;
}
</style>




<body>
    <?php
    include "config/koneksi.php";
    session_start();

    if (isset($_POST['login'])) {
        $query = "select * from users where username='" . $_POST['username'] . "'
    and password='" . $_POST['password'] . "'";
        $data = mysqli_query($koneksi, $query);

        if ($r = mysqli_fetch_array($data)) {
            $_SESSION['iduser'] = $r['iduser'];
            $_SESSION['username'] = $r['username'];
            $_SESSION['password'] = $r['password'];

            header('Location: admin/index.php');
            exit();
        } else {
            echo "<script>alert('Username atau Password Salah!')</script>";
        }
    }
    ?>

    <main>
        <div class="container">
            <form action="" method="post">
                <img src="assets/img/logo.png" class="logo" alt="">
                <h2 class="fw-bold">Login</h2>
                <input type="text" class="input-login" name="username" id="username" placeholder="Username" required />
                <br />
                <input type="password" class="input-login" name="password" id="password" placeholder="Password"
                    required />
                <br />

                <button class="btn btn-success fw-bold w-full mt-3" name="login">Login</button>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>