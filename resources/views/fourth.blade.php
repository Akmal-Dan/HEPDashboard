<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Counselling') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="relative w-full max-w-lg mx-auto p-5">
            <div class="carousel overflow-hidden relative">
                <div class="carousel-inner flex transition-transform duration-500 ease-in-out">
                    <div class="carousel-item min-w-full">
                        <img src="images/pic1.jpg" alt="Slide 1" class="w-full h-auto" width="400" height="200">
                    </div>
                    <div class="carousel-item min-w-full">
                        <img src="images/pic2.jpg" alt="Slide 2" class="w-full h-auto" width="400" height="200">
                    </div>
                    <div class="carousel-item min-w-full">
                        <img src="images/pic3.jpg" alt="Slide 3" class="w-full h-auto" width="400" height="200">
                    </div>
                    <div class="carousel-item min-w-full">
                        <img src="images/pic4.jpg" alt="Slide 4" class="w-full h-auto" width="400" height="200">
                    </div>
                </div>
            </div>
            <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full focus:outline-none" onclick="prevSlide()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full focus:outline-none" onclick="nextSlide()">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <script>
            let currentIndex = 0;

            function showSlide(index) {
                const slides = document.querySelectorAll('.carousel-item');
                const totalSlides = slides.length;
                if (index >= totalSlides) {
                    currentIndex = 0;
                } else if (index < 0) {
                    currentIndex = totalSlides - 1;
                } else {
                    currentIndex = index;
                }
                const offset = -currentIndex * 100;
                document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
            }

            function nextSlide() {
                showSlide(currentIndex + 1);
            }

            function prevSlide() {
                showSlide(currentIndex - 1);
            }

            document.addEventListener('DOMContentLoaded', () => {
                showSlide(currentIndex);
            });
        </script>


    </body>

    </html>

</x-app-layout>