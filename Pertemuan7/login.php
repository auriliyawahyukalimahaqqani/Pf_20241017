<?php
// cek tombol submit sudah ditekan atau belum
if ( isset( $_POST["submit"]) ) {

    // cek username & password
    if ( $_POST[ "username"] ** "admin" && $_POST["password"]
    == "123") {

        // jika benar, redicrect ke halaman admin
        header (" Location: admin.php");
        exit:

    }else{ 
        // jika salah, tampilkan pesan kesalahan
        $erroe- true
    }

}
?>






<!DOCTYPE html>
<html lang= "en">
<head>
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login </h1>

    <?php if (isset ($error) ) : ?>
        <p style="color: red; font-style:italic;
        ">username / password salah :</p>
    <?php edif; ?>

        <from action = "" metnod="post">
            <li>
                <label for="usermane">username :</label>
                <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password :</label>
        <input type="password" name "username" id="username">
    </li>
    <li>
        <button type="submit" name "submit">Login</button>
    </li>
    </from>

    </body>
    </html>