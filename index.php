<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>| Login |</title>
</head>
<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[380px] h-[600px] bg-black/50 rounded-[10px] text-white/100 shadow-2xl border-1 border-black shadow-black border-">
        <header class="flex gap-3 justify-center items-center pb-5 mt-16 text-">
            <h1 class="text-3xl font-bold">Login Form</h1>
        </header>
    <div>
        <form action="db/functions.php" method="post" class="w-[380px] h-[600px] rounded-[10px] text-white/100 flex flex-col items-center">

            <input type="text" name="usr" id="InputEmail" placeholder="Email or phone" class="w-[300px] h-[40px] text-black"><br>
            <input type="password" name="pss" id="InputPassword" placeholder="Password" class="w-[300px] h-[40px] text-black">
            <br>
            <a href="" class="ml-[-180px]">Forgot Password?</a><br>
            <input type="submit" name="submit" class="bg-blue-600 w-[300px] h-[50px] font-ldbo text-center" value="Login"></input><br>
            <a href="">Or login with</a><br>
            <div class="">
                <button type="submit" class="w-[150px] h-[40px] bg-blue-700"><i class="fa-brands fa-facebook text-black"></i> Facebook</button>
                <button type="submit" class="w-[150px] h-[40px] bg-pink-600"><i class="fa-brands fa-instagram text-black"></i> Instagram</button>
            </div>
            <p class="mt-5">Don't have account? <a href="" class="text-blue-600">Singup Now</a></p>
        </form>
    </div>
    </main>
    <script src="assets/js/talwind-3.2.4.js"></script>
    <script src="https://kit.fontawesome.com/c2181e6c4d.js" crossorigin="anonymous"></script>
</body>

</html>
