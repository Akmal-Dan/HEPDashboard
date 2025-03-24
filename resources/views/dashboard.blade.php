<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> -->
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="max-w-9xl mx-auto sm:px-6 lg:px-12 py-6">

            <div class="flex items-stretch h-72">
                <div class="flex-1 bg-white p-2 m-2 shadow-sm sm:rounded-lg">
                    <p class="font-bold">Bus</p><br>

                    <div class="px-2">

                        <div class="flex items-stretch h-26">
                            <div class="w-64 bg-white p-2 m-1 shadow-sm sm:rounded-lg border-solid border-4 border-gray-500">
                                <p class="font-bold">Bus 1 (BA1234)</p>
                                <p class="text-xs">Status &nbsp: Departed </p>
                                <p class="text-xs">Route &nbsp : UBD to Lumut Campus </p>
                                <p class="text-xs">Attendance : 40 Students </p>

                            </div>

                            <div class="w-64 bg-white p-2 m-1 shadow-sm sm:rounded-lg border-solid border-4 border-gray-500">
                                <p class="font-bold">Bus 2 (BB1234)</p>
                                <p class="text-xs">Status &nbsp: Departed </p>
                                <p class="text-xs">Route &nbsp : *example* to *example* </p>
                                <p class="text-xs">Attendance : 40 Students </p>

                            </div>

                            <div class="w-64 bg-white p-2 m-1 shadow-sm sm:rounded-lg border-solid border-4 border-gray-500">
                                <p class="font-bold">Bus 3 (BC5678)</p>
                                <p class="text-xs">Status &nbsp: Arrived </p>
                                <p class="text-xs">Route &nbsp : *example* to *example* </p>
                                <p class="text-xs">Attendance : 32 Students </p>

                            </div>

                            <div class="w-64 bg-white p-2 m-1 shadow-sm sm:rounded-lg border-solid border-4 border-gray-500">
                                <p class="font-bold">Bus 4 (BD5678)</p>
                                <p class="text-xs">Status &nbsp: Arrived </p>
                                <p class="text-xs">Route &nbsp : *example* to *example* </p>
                                <p class="text-xs">Attendance : 32 Students </p>

                            </div>
                        </div>

                    </div>

                </div>


            </div>

            <div class="flex items-stretch h-72">
                <div class="flex-1 bg-white p-2 m-2 shadow-sm sm:rounded-lg">
                    <p class="font-bold">Career Guidance</p><br>

                    <div class="flex items-stretch h-48 px-2">
                        <div class="flex-1 bg-white p-2 m-1 shadow-sm sm:rounded-lg border-solid border-2 border-gray-500">
                            <p class="font-bold">Limited Time Only!</p>
                            <p class="text-xs text-blue-500">Closes on 12 April 2025</p><br>
                            <div>
                                <p class="text-xs">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia rerum velit modi impedit repellendus earum cumque ipsa dignissimos corrupti nostrum magni officiis quidem, maiores assumenda laborum, sunt sint! Libero, eligendi.
                                </p>
                            </div>

                        </div>

                        <div class="flex-1 bg-white p-2 m-1 shadow-sm sm:rounded-lg border-solid border-2 border-gray-500">
                            <p class="font-bold">We need helpers!</p>
                            <p class="text-xs text-blue-500">Posted 26 June 2025</p><br>
                            <div>
                                <p class="text-xs">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ea quas exercitationem consequuntur assumenda aspernatur ut facilis earum libero debitis, optio, repudiandae itaque, amet illum perspiciatis pariatur blanditiis ex quos.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex-1 bg-white p-2 m-2 shadow-sm sm:rounded-lg">
                    <p class="font-bold pb-4">Student's Needs</p>

                    <!-- border-solid border-2 border-gray-500 -->
                    <div class="flex px-5">

                        <div class="p-1 px-4 m-1 border-solid border-2 border-gray-500 shadow-sm sm:rounded-lg text-center">
                            <h6 class="font-bold text-sm">Number Of Students</h6>
                            <h6 class="font-bold pb-4 text-sm">In Each Campuses</h6>

                            <p class="text-xs">Ong Sum Ping</p>
                            <p>16</p>

                            <p class="text-xs pt-1">Lumut</p>
                            <p>20</p>

                            <p class="text-xs py-1">Lambak Kanan</p>
                            <p>13</p>
                        </div>

                        <div class="flex-1 p-2 px-5 m-1 border-solid border-2 border-gray-500 shadow-sm sm:rounded-lg ">
                            <h6 class="font-bold text-center pb-2">Overall Data</h6>

                            <div class="text-sm flex space-x-10">

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

                                <!-- <div>
                                <a href="" class="text-sm" style="display: inline-block; padding: 8px 18px; background-color:rgb(172, 14, 14); color: white; text-decoration: none; border-radius: 5px;">Remove</a>

                                </div> -->


                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </body>

    </html>

</x-app-layout>