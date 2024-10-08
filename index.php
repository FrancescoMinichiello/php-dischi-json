<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Css-->
    <link rel="stylesheet" href="style.css">
    <!--JavaScript-->
    <script defer src="script.js"></script>
</head>

<body>
    <header class="py-3">
        <div class="container">
            <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2023/05/Spotify_Primary_Logo_RGB_Green.png"
                alt="Spotify" class="logo">
        </div>
    </header>
    <div id="app">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-10 d-flex flex-wrap gap-5 justify-content-center">
                    <div class="card card-item text-white" style="width: 18rem;" v-for="(item, index) in list"
                        :key="index">
                        <img class="card-img-top px-5 py-3" :src="item.poster" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="fw-semibold">{{item.title}}</h5>
                            <p class="card-text">{{item.author}}</p>
                            <p>{{item.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js"
        integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>