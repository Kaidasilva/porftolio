<?php declare(strict_types=1); ?>

@extends('layouts.layout')

@section('title', 'Projects')

@section('content')
    <div class="flex flex-col items-center justify-center w-full">
        <section class=" md:w-[90%] max-w-[95%] px-4 py-6 flex flex-col items-center justify-center gap-6">
            <div class="flex flex-row min-w-[30%] shadow-2xl border-b-2 items-center justify-center">
                <button class=" p-2 min-w-[50%] text-center ">
                        Experiences
                </button>
                <button id="toggleProjects" class=" p-2 min-w-[50%] text-center ">
                        Projects
                </button>
            </div>




            <div class="flex flex-col gap-2 border shadow-2xl p-4 rounded-lg min-w-[40%] max-w-[75%] items-center justify-center">
                <h1 class="font-bold text-4xl text-center">Koning Willem 1 College</h1>
                <h2 class="italic text-xl text-center">
                    Software development course
                </h2>

                <!-- Hidden Content -->
                <div class="hiddenContent flex flex-col gap-2 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                    <p class="mt-2">
                        I am currently working on a project for the Koning Willem 1 College, where I am developing a web application using Laravel and TailwindCSS. The application is designed to help students manage their schedules and assignments more effectively.
                    </p>
                </div>

                <!-- Toggle Button -->
                <div class="toggleButton flex flex-row items-center justify-center border cursor-pointer min-w-[10%] rounded-lg gap-2 p-2">
                    <p class="toggleText text-xl text-center">
                        More
                    </p>
                    <p class="arrow text-center transition-transform duration-500">
                        ↓
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-2 border shadow-2xl p-4 rounded-lg min-w-[40%] max-w-[75%] items-center justify-center">
                <h1 class="font-bold text-4xl text-center">Technohome</h1>
                <h2 class="italic text-xl text-center">
                    Year 2 Internship
                </h2>

                <!-- Hidden Content -->
                <div class="hiddenContent flex flex-col gap-2 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                    <p class="mt-2">
                        I am currently working on a project for the Koning Willem 1 College, where I am developing a web application using Laravel and TailwindCSS. The application is designed to help students manage their schedules and assignments more effectively.
                    </p>
                </div>

                <!-- Toggle Button -->
                <div class="toggleButton flex flex-row items-center justify-center border cursor-pointer min-w-[10%] rounded-lg gap-2 p-2">
                    <p class="toggleText text-xl text-center">
                        More
                    </p>
                    <p class="arrow text-center transition-transform duration-500">
                        ↓
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-2 border shadow-2xl p-4 rounded-lg min-w-[40%] max-w-[75%] items-center justify-center">
                <h1 class="font-bold text-4xl text-center">Divtag</h1>
                <h2 class="italic text-xl text-center">
                    Year 3 Internship
                </h2>

                <!-- Hidden Content -->
                <div class="hiddenContent flex flex-col gap-2 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                    <p class="mt-2">
                        I am currently working on a project for the Koning Willem 1 College, where I am developing a web application using Laravel and TailwindCSS. The application is designed to help students manage their schedules and assignments more effectively.
                    </p>
                </div>

                <!-- Toggle Button -->
                <div class="toggleButton flex flex-row items-center justify-center border cursor-pointer min-w-[10%] rounded-lg gap-2 p-2">
                    <p class="toggleText text-xl text-center">
                        More
                    </p>
                    <p class="arrow text-center transition-transform duration-500">
                        ↓
                    </p>
                </div>
            </div>

        </section>
    </div>
@endsection
