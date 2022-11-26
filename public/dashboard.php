<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css"/>  
    <script src="https://cdn.tailwindcss.com"></script>   
</head>
<body>
    <div class="grid row-span-full pt-10 pl-10 bg-blue-600 w-full">
        <div class="box  grid-cols-6">
            <div id="currentTime" class="text-white"></div>
            <script>
            const element = document.getElementById('currentTime');
            
            setInterval(function () {
                const currentDate = new Date();
                element.innerText =  currentDate.getFullYear() + '-' + (currentDate.getMonth() + 1) + '-' + currentDate.getDate();
            });
            </script>
        </div>
        <div class="flex justify-end grid-cols-6">
gfdgfdg
        </div>
    </div>
    
</body>
</html>