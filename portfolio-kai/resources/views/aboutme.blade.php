<?php declare(strict_types=1); ?>

@extends('layouts.layout')

@section('title', 'About Me')

@section('content')
    <div class=" flex flex-col items-center justify-center w-full">
        <section class="md:max-w-[75%] max-w-[90%] px-4 py-6 flex flex-col md:flex-row justify-between gap-8">
            <div class="flex flex-col gap-8 border shadow-2xl p-8 rounded-lg">
                <h1 class="font-bold text-4xl text-center">
                    About Me
                </h1>
                <p class="text-xl mt-4">
                    I am a software developer with a passion for creating innovative solutions. I have experience in various programming languages and frameworks, and I enjoy working on challenging projects that push my skills to the limit. In my free time, I love to learn new technologies and contribute to open-source projects.
                </p>
            </div>
            <div class=" flex flex-col min-w-[35%] gap-8 border shadow-2xl p-8 rounded-lg">
                <h2 class="font-bold text-4xl text-center">
                    Languages & Frameworks
                </h2>
                <div  class="flex gap-4 p-4 border rounded-lg">
                    <img alt="logo" class="w-10 h-auto justify-self-start max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <div class="flex flex-col gap-1">
                        <h3>
                            C#
                        </h3>
                        <p>
                            Windows Forms and Unity
                        </p>
                    </div>
                </div>
                <div  class="flex gap-4 p-4 border rounded-lg">
                    <img alt="logo" class="w-10 h-auto justify-self-start max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <div class="flex flex-col gap-1">
                        <h3>
                            Laravel
                        </h3>
                        <p>
                            Backend Web-development
                        </p>
                    </div>
                </div>
                <div  class="flex gap-4 p-4 border rounded-lg">
                    <img alt="logo" class="w-10 h-auto justify-self-start max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <div class="flex flex-col gap-1">
                        <h3>
                            TailwindCSS
                        </h3>
                        <p>
                            Frontend Web-development
                        </p>
                    </div>
                </div>
                <div  class="flex gap-4 p-4 border rounded-lg">
                    <img alt="logo" class="w-10 h-auto justify-self-start max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <div class="flex flex-col gap-1">
                        <h3>
                            HTML, CSS & JS
                        </h3>
                        <p>
                            Frontend Web-development
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
