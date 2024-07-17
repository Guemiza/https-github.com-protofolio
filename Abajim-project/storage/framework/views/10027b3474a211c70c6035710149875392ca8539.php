<!DOCTYPE html>
<html lang="fa">

<head>

</head>
<style>
    @import  url('https://fonts.googleapis.com/css2?family=Agdasima&family=Poppins&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(to bottom right, #70c1ff, #498ffc);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .card {
        margin-top: -260px;
        width: 461px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 15px;
        padding: 40px;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    h2 {
        color: #fff;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        color: #fff;
        margin-bottom: 5px;
    }

    input {
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.8);
    }

    button {
        padding: 10px;
        background-color: #fff;
        color: #498ffc;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #70c1ff;
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
            max-width: 350px;
        }
    }
</style>



<body class="login" style="background: url(../assets/black.jpg);background-color: #020202;">

    <div class="container">
                
        <div class="card">
                <center>
                    <img width="212" height="100" src="https://www.abajim.com/store/1/abajim.png">
                </center>
            <h2>Login School</h2>
            <form >
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter your username">

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password">
                <a href="/admin/school">
                    <button type="button" >Login</button>
                </a>
            </form>
        </div>
    </div>
</body>


</html>
<?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/web/default/auth/school_login.blade.php ENDPATH**/ ?>