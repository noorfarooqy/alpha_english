<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Alpha English</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/assets/fonts/font_dancing.css">
    
    <style>
        .dancing-script {
            font-family: 'Dancing Script', cursive;
        }

    </style>
</head>

<body class="" style="background-color: rgba(251,31,86,1)">
    <header class="mx-auto border-b border-purple-500 px-2 py-3 text-white">
        <nav class="flex justify-between mr-10 ml-10">
            <ul class="flex inline-block space-x-8">
                <li>
                    <a href="/" class="active hover:text-gray-300">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                </li>
                <li>
                    <a href="/" class="active hover:text-gray-300">
                        <i class="fas fa-map-marker-alt mr-2"></i>CH
                    </a>
                </li>
                <li>
                    <a href="/" class="active hover:text-gray-300">
                        <i class="fas fa-language mr-2"></i>English
                    </a>
                </li>
            </ul>

            <ul class="flex inline-block space-x-8">
                <li>
                    <a href="/" class="active hover:text-gray-300">
                        <i class="fas fa-user mr-2"></i>Login
                    </a>
                </li>
                <li>
                    <a href="/" class="active hover:text-gray-300">
                        <i class="fas fa-user-circle mr-2"></i>Register
                    </a>
                </li>
                <li>
                    <a href="/" class="active hover:text-gray-300">
                        <i class="fas fa-search mr-2"></i>
                    </a>
                </li>
            </ul>


        </nav>
    </header>

    <div class="brand top-bar flex ml-10">
        <img src="/assets/images/header-logo.png" alt="" class="src brand h-full">

        <ul class="flex inline-block space-x-8 mx-10 my-4 text-white">
            <li> <a href="/" class="active hover:text-gray-300"> Teacher </a></li>
            <li> <a href="/" class="active hover:text-gray-300"> Parents </a></li>
            <li> <a href="/" class="active hover:text-gray-300"> PPT </a></li>
            <li> <a href="/" class="active hover:text-gray-300"> Exercise </a></li>
            <li> <a href="/" class="active hover:text-gray-300"> Mini Game </a></li>
            <li> <a href="/" class="active hover:text-gray-300"> Contact </a></li>
        </ul>

    </div>

    <main class="container my-10 mx-20 pt-20">
        <div class="grid grid-cols-2">
            <div>
                <h2 class="hero-description text-white text-5xl font-bold ">
                    Everything you need to know about English for your kids
                </h2>
                <div class="text-gray-200 my-10">
                    <a href="" class="underline font-semibold">
                        Read more
                    </a>
                </div>
            </div>
            <div class=" my-20 mx-44">
                <div class="text-left italic font-bold text-white text-5xl dancing-script">
                    Play & Study
                </div>
                <div class="text-left mt-5">
                    <a href="" class="text-black bg-white p-2 rounded rounded-2xl ">
                        See more
                    </a>
                </div>

            </div>
        </div>

        <div class="text-center hero-images">
            <img src="/assets/images/hero_image_1.png" alt="" class="h-full mx-32 -my-32">
        </div>




    </main>
    <main class="container-fluid">
        <div class="flex bg-white mt-32 px-10 transform">
            <div class="text-center flex justify-between ">
                <img src="/assets/images/happy_monster_1.png" alt="" class="-mt-20">
                <img src="/assets/images/happy_monster_2.png" alt="" class="-mt-10">
            </div>
        </div>

        <section class="bg-white text-center">
            <div class="container text-center">

                <div class="grid grid-cols-1">
                    <div class="text-bold text-4xl text-bold">
                        Why You Should Choose Us?
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="flex justify-between space-x-32 m-10">


                    <div class="ml-6 flex">
                        <img class="float-left w-40 h-40 rounded-full mr-3 mt-4"
                            src="/assets/images/service_icon_1.png">
                        <div class="mt-3">
                            <div class="mb-3 text-left" style="color: red">Easy to learn</div>
                            <div class="text-left">
                                Kids can study English by playing games in our platform. We provide mini game, ppt game,
                                exercise game etc.
                                during the preview, school class and review. Let kids study English in an easy and fun
                                way
                                in anyplace and anytime.
                            </div>
                        </div>
                    </div>

                    <div class="ml-6 flex">
                        <img class="float-left w-40 h-40 rounded-full mr-3 mt-4"
                            src="/assets/images/service_icon_2.png">
                        <div class="mt-3">
                            <div class="mb-3 text-left" style="color: red">Interact with teachers</div>
                            <div class="text-left">
                                Out Platform can help teachers to teach English in easy and fun way.
                                Teachers can use our platform flashcards and games for teaching purpose.
                                It also empowers teachers to feel confident when teaching English and
                                inspire educators to create a world-class English program.
                            </div>
                        </div>
                    </div>



                </div>


                <div class="flex justify-between space-x-32 m-10">


                    <div class="ml-6 flex">
                        <img class="float-left w-40 rounded-full mr-3 mt-4" src="/assets/images/service_icon_3.png">
                        <div class="mt-3">
                            <div class="mb-3 text-left" style="color: red">Interest motivated</div>
                            <div class="text-left">
                                Through playing games, kids can immerse in the studying english environment.
                                It will motivate kids' interest to study English by themselves in effective way.

                            </div>
                        </div>
                    </div>

                    <div class="ml-6 flex">
                        <img class="float-left w-40 rounded-full mr-3 mt-4" src="/assets/images/service_icon_4.png">
                        <div class="mt-3">
                            <div class="mb-3 text-left" style="color: red">Comprehensive English Curriculum</div>
                            <div class="text-left">
                                Our english platform curriculum is developed from longman, which is one of the world's
                                biggest English education company. We have completed a systematic English curriculum for
                                kids
                                to learn english in an engaging way.
                            </div>
                        </div>
                    </div>



                </div>

            </div>

            <div class="flex justify-center mb-10">
                <img src="/assets/images/product_1.png" alt="" class="w-auto shadow rounded-lg" />
                <img src="/assets/images/product_2.png" alt="" class="w-auto shadow rounded-lg" />
                <img src="/assets/images/product_3.png" alt="" class="w-auto shadow rounded-lg" />
            </div>

            <div class="mb-10 ml-32 mr-32 rounded-lg" style="height: 70px; background-color:red">
                <div class="float-left text-2xl text-white p-5">
                    SEE MORE
                </div>

                <div class="relative">
                    <div class="flex float-right mr-10">
                        <img src="/assets/images/product_pig.png" alt="" class="w-28 mr-10 -mt-10">
                        <button class="btn bg-white rounded-lg p-3 mt-3 mb-3">See more</button>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="">
                    <img src="/assets/images/footer_earth.png" alt="" class="w-100">
                </div>
                {{-- <div class="-my-72 text-center align-content-center">
                    <button style="background-color: red" class="p-3 rounded-lg text-white cursor-pointer">Get
                        Resources</button>
                </div> --}}

            </div>
            <div class="bg-white grid grid-cols-1" style="text-align: -webkit-center">
                <img src="/assets/images/footer_logo.png" alt="" class="w-100">
                <div class="text-center text-bold text-2xl mt-6">
                    EDUCATION COMPANY
                </div>
                <p class="text-center text-bold mt-5 mb-10" style="margin-left:20%; margin-right:20%">
                    "KOOSTEM is an education technology company which develops English games for
                    children and teenagers between 3 and 15 years to learn English in brand new
                    and engaging way. It greatly motivates the kids' interest to study English
                    and play at the same time. What is more, it empowers teachers to feel confident
                    when teaching English and inspire educators to create a world-class English program.
                    Make English EASY and FUN!"
                </p>

            </div>

            <div class="pb-10" style="background-image: url('/assets/images/footer_banner.png');background-repeat: no-repeat;background-size: cover; ">
                <h1 class="py-32 text-3xl">Get more on: </h1>
                <div class="text-center">
                    <div class="inline-flex space-x-8" style="text-align: -webkit-center">
                        <figure>
                            <a href=""><img src="/assets/images/icon_fb.png" class="w-16"></a>
                            <caption class="mt-1">
                                Facebook
                            </caption>
                        </figure>
                        <figure>
                            <a href=""><img src="/assets/images/icon_twitter.png" class="w-16"></a>
                            <caption class="mt-1">
                                Twitter
                            </caption>
                        </figure>
                        <figure>
                            <a href=""><img src="/assets/images/icon_vk.png" class="w-16 rounded-lg"></a>
                            <caption class="mt-1">
                                VK
                            </caption>
                        </figure>
                        </figure>
                        <figure>
                            <a href=""><img src="/assets/images/icon_pinterest.png" class="w-16 rounded-lg"></a>
                            <caption class="mt-1">
                                Pinterest
                            </caption>
                        </figure>
                        </figure>
                        <figure>
                            <a href=""><img src="/assets/images/icon_youtube.png" class="w-16"></a>
                            <caption class="mt-1">
                                Youtube
                            </caption>
                        </figure>
                        </figure>
                        <figure>
                            <a href=""><img src="/assets/images/icon_insta.png" class="w-16"></a>
                            <caption class="mt-1">
                                Instagram
                            </caption>
                        </figure>
                        </figure>
                        <figure>
                            <a href=""><img src="/assets/images/icon_tumblr.png" class="w-16"></a>
                            <caption class="mt-1">
                                Tumblr
                            </caption>
                        </figure>
                    </div>

                </div>
                <div class="grid grid-cols-3 justify-content-lg-between">
                    <div class="logo m-10">
                        <img src="/assets/images/footer_logo.png" alt="">
                    </div>
                    <div class="nav mt-10">
                        <div class="grid grid-cols-2">
                            <div class=" text-justify">
                                <h1 class="bold underline mb-2">Categories</h1>
                                <nav class="nav">
                                    <ul>
                                        <li><a href="">Home</a></li>
                                        <li><a href="">PPT games</a></li>
                                        <li><a href="">Teachers</a></li>
                                        <li><a href="">Dashboard</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class=" text-justify">
                                <h1 class="bold underline mb-2">My Account</h1>
                                <nav class="nav">
                                    <ul>
                                        <li><a href="">Recent games</a></li>
                                        <li><a href="">Recent PPTs</a></li>
                                        <li><a href="">Assignments</a></li>
                                        <li><a href="">Dashboard</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="location mt-10">
                        <h1 class="text-justify text-bold underline mb-2">Contact us</h1>
                        <div class="text-justify">
                            Company location, xyz,<br>
                            street name, City<br>
                            Province, China<br>

                        </div>
                    </div>
                </div>
                <div class="inline-flex text-center mt-10">
                    &copy KOOSTEM {{gmdate('Y',time())}}
                </div>
            </div>


        </section>




    </main>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ=="
        crossorigin="anonymous"></script>
</body>

</html>
