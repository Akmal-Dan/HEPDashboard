<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Needs') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <div class="flex px-5">

                            <div class="p-1 px-12 m-1 border-solid border-2 border-gray-500 shadow-sm sm:rounded-lg text-center">
                                <h6 class="font-bold text-sm">Number Of Students</h6>
                                <h6 class="font-bold pb-4 text-sm">In Each Campuses</h6>

                                <p class="text-xs">Ong Sum Ping</p>
                                <p>16</p>

                                <p class="text-xs pt-1">Lumut</p>
                                <p>20</p>

                                <p class="text-xs py-1">Lambak Kanan</p>
                                <p>13</p>
                            </div>

                            <div class="flex-1 p-2 px-6 m-1 border-solid border-2 border-gray-500 shadow-sm sm:rounded-lg ">
                                <h6 class="font-bold text-center pb-2">Overall Data</h6>

                                <div class="text-sm flex space-x-12">

                                    <div class="space-y-2">
                                        <div>
                                            <p class="text-gray-500">Total Students</p>
                                            <p class="">49 Students</p>
                                        </div>

                                        <div>
                                            <p class="text-gray-500">Dire Situations</p>
                                            <p class="">6 Students</p>
                                        </div>

                                        <div>
                                            <p class="text-gray-500">Mild Situations</p>
                                            <p class="">43 Students </p>
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <div>
                                            <p class="text-gray-500">Pending Request</p>
                                            <p class="">5 Students</p>
                                        </div>

                                        <div>
                                            <p class="text-gray-500"></p>
                                            <p class=""></p>
                                        </div>

                                        <div>
                                            <p class="text-gray-500"></p>
                                            <p class=""></p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="py">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <h1 class="text-center">List Of Students</h1><br>

                        <div class="border-solid border-2 border-gray-200 ">

                            <table class="min-w-full">
                                <thead>
                                    <tr class="">
                                        <th class="w-1/4 px-4 py-2 border-r border-gray-300">Name</th>
                                        <th class="w-1/4 px-4 py-2 border-r border-gray-300">Students ID</th>
                                        <th class="w-1/2 px-4 py-2">Situations</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words"> Awang Ali</td>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words">25FTT1234</td>
                                        <td class="px-4 py-2 border-t border-gray-300 break-words">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi labore, rem architecto possimus veritatis cumque sequi commodi illum doloremque quod libero amet earum saepe ipsum autem molestiae quis ut.</td>
                                    </tr>

                                    <tr>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words"> Ahmad Danial</td>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words">25FTT1245</td>
                                        <td class="px-4 py-2 border-t border-gray-300 break-words">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi labore, rem architecto possimus veritatis cumque sequi commodi illum doloremque quod libero amet earum saepe ipsum autem molestiae quis ut.</td>
                                    </tr>

                                    <tr>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words"> Faizal Adli</td>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words">25FTB1234</td>
                                        <td class="px-4 py-2 border-t border-gray-300 break-words">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi labore, rem architecto possimus veritatis cumque sequi commodi illum doloremque quod libero amet earum saepe ipsum autem molestiae quis ut.</td>
                                    </tr>

                                    <tr>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words"> Khairul Adam</td>
                                        <td class="px-4 py-2 border-t border-r border-gray-300 break-words">25FTB1245</td>
                                        <td class="px-4 py-2 border-t border-gray-300 break-words">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi labore, rem architecto possimus veritatis cumque sequi commodi illum doloremque quod libero amet earum saepe ipsum autem molestiae quis ut.</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>




    </body>

    </html>

</x-app-layout>