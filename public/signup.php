<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css"/>  
    <script src="https://cdn.tailwindcss.com"></script>      
</head>
<body class="bg-sky-400">
    <div class="container">
        <img src="img/logo.png" alt="" class="w-32 mx-auto mt-5">
    </div>
    <div class="forms">
        
        <div class="px-40 py-4 max-w">
            <form>
                <div class="form-group mb-6">
                <input type="text" class="form-control border-2 border-white w-full px-3
                    py-2.5 text-base font-normal text-black bg-sky-400 rounded-xl
                    transition ease-in-out m-0 placeholder-white focus:outline-none" id="nama" placeholder="Nama">
                </div>
                <div class="form-group mb-6">
                <input type="email" class="form-control border-2 border-white w-full px-3
                    py-2.5 text-base font-normal text-black bg-sky-400 rounded-xl
                    transition ease-in-out m-0 placeholder-white focus:outline-none" id="email" placeholder="Email">
                </div>
                <div class="form-group mb-6">
                <input type="text" class="form-control border-2 border-white w-full px-3
                    py-2.5 text-base font-normal text-black bg-sky-400 rounded-xl
                    transition ease-in-out m-0 placeholder-white focus:outline-none" id="uname" placeholder="Ussername">
                </div>
                <div class="form-group mb-6">
                <input type="password" class="form-control border-2 border-white w-full px-3
                    py-2.5 text-base font-normal text-black bg-sky-400 rounded-xl 
                    transition ease-in-out m-0 placeholder-white focus:outline-none " id="password" placeholder="Password">
                </div>
                <div class="form-group mb-8">
                <input type="password" class="form-control border-2 border-white w-full px-3
                    py-2.5 text-base font-normal text-black bg-sky-400 rounded-xl 
                    transition ease-in-out m-0 placeholder-white focus:outline-none " id="confirm" placeholder="Konfirmasi Password">
                </div>
                <div class="submit">
                <label for="login" class="form-label inline-block mb-2 text-gray-700">Sudah Punya Akun? <span class="text-yellow-300 underline decoration-yellow-200"><a href="login.php">Login</a> </span></label>
                    <button type="submit" class=" py-2.5 mb-7 bg-blue-600 text-white font-medium leading-tight rounded-xl w-full
                    hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Daftar</button>
                </div>
                
            </form>
        </div>

    </div>
</body>
</html>