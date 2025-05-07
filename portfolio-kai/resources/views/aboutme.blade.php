<?php declare(strict_types=1); ?>

@extends('layouts.layout')

@section('title', 'About Me')

@section('content')
    <div class=" flex items-center justify-center w-full">
        <section class="md:max-w-[90%] max-w-[90%] items-center flex flex-col md:flex-row gap-8">
            <div class="flex">
                <img alt="logo" class=" w-[300px] h-[500px]" src={{asset("images/placeholder.svg.png")}}>
            </div>
            <div class="flex flex-col gap-4 md:max-w-[50%] p-8 rounded-lg">

                <h1 class="font-bold text-4xl">
                    About Kai Da Silva
                </h1>
                <hr class="border-2 border-neutral-600">
                <p>
                    Hello, my name is Kai Da Silva. I am a 20-year-old software developer from 's-Hertogenbosch, Netherlands.
                </p>
                <p>
                    I am currently in my third year at Koning Willem I College, pursuing a software development course. I have a deep passion for technology and enjoy exploring new programming languages and frameworks.
                </p>
                <p>
                    What excites me most about software development is the constant evolution of technology, the innovative advancements, and the endless opportunities to learn something new.
                </p>
                <p>
                    My expertise lies in working with technologies such as HTML, CSS, JavaScript, TailwindCSS, Laravel, C#, and SQL. I am always eager to enhance my skills and embrace new challenges in the tech world.
                </p>
                <p>
                    Outside of work, I enjoy discovering new music and artists, playing video games, and spending quality time with my friends. I also have a passion for fitness and enjoy going to the gym.
                </p>
            </div>
        </section>
    </div>
@endsection
