<?php declare(strict_types=1); ?>

@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div id="container" class="flex flex-col items-center justify-center w-full">
        <section id="home" class="flex h-[90vh] min-w-[80%]">
                <div class="flex md:flex-row flex-col justify-between items-center max-w-[75%]">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-5xl hover:text-6xl transition-all duration-300 font-bold">
                            Hi,
                        </h1>
                        <h2 class="text-4xl hover:text-5xl transition-all duration-300 font-bold">
                            I'm Kai Da Silva
                        </h2>
                        <p class="text-xl hover:text-2xl transition-all duration-300">
                            Software Developer
                        </p>
                        <hr class="border-2 border-neutral-600 ">
                        <a class="underline ">
                            Read more
                        </a>
                        <div class="flex space-x-4 items-end">
                            <a href="" class="relative flex items-center justify-center w-10 h-10 bg-white rounded-full text-black overflow-hidden group shadow-lg transition-all duration-600 ease-in-out before:content-[''] before:absolute before:inset-0 before:bg-neutral-400 before:scale-0 before:transition-all before:duration-600 before:ease-in-out before:rounded-full hover:text-white hover:before:scale-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 98 96" class=" transition-all duration-600 ease-in-out group-hover:text-white z-10">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" />
                                </svg>
                            </a>
                            <a href="" class="relative flex items-center justify-center w-10 h-10 bg-white rounded-full text-black overflow-hidden group shadow-lg transition-all duration-600 ease-in-out before:content-[''] before:absolute before:inset-0 before:bg-neutral-400 before:scale-0 before:transition-all before:duration-600 before:ease-in-out before:rounded-full hover:text-white hover:before:scale-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="transition-all duration-600 ease-in-out group-hover:text-white z-10" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                </svg>
                            </a>
                            <a href="mailto:kai_dasilva@hotmail.com" class="relative flex items-center justify-center w-10 h-10 bg-white rounded-full text-black overflow-hidden group shadow-lg transition-all duration-600 ease-in-out before:content-[''] before:absolute before:inset-0 before:bg-neutral-400 before:scale-0 before:transition-all before:duration-600 before:ease-in-out before:rounded-full hover:text-white hover:before:scale-200">
                                <svg viewBox="0 -3.5 32 32" version="1.1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>mail</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-414.000000, -261.000000)" fill="#000000"> <path d="M430,275.916 L426.684,273.167 L415.115,285.01 L444.591,285.01 L433.235,273.147 L430,275.916 L430,275.916 Z M434.89,271.89 L445.892,283.329 C445.955,283.107 446,282.877 446,282.634 L446,262.862 L434.89,271.89 L434.89,271.89 Z M414,262.816 L414,282.634 C414,282.877 414.045,283.107 414.108,283.329 L425.147,271.927 L414,262.816 L414,262.816 Z M445,261 L415,261 L430,273.019 L445,261 L445,261 Z" id="mail" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex ">
                        <img alt="logo" class="w-75 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    </div>
                </div>
        </section>
        <section id="aboutMe" class="flex md:flex-row flex-col h-[100vh] md:max-w-[80%]  items-center overflow-x-hidden">
            <div class="flex flex-col gap-4 max-w max-w-[50%]">
                <img alt="logo" class="w-75 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                <hr class="border-2 border-neutral-600">
                <p>
                    Hello, my name is Kai Da Silva. I am a 20-year-old software developer from 's-Hertogenbosch, Netherlands.
                </p>
                <p>
                    What excites me most about software development is the constant evolution of technology, the innovative advancements, and the endless opportunities to learn something new.
                </p>
                <p>
                    Outside of work, I enjoy discovering new music and artists, playing video games, and spending quality time with my friends. I also have a passion for fitness and enjoy going to the gym.
                </p>
            </div>
            <div class="flex flex-col min-w-[50%] justify-end items-end gap-8">
                <div class=" flex flex-col items-center justify-center w-[20%] gap-2 border-2 rounded-xl p-2">
                    <img alt="logo" class="w-10 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <p>
                        Laravel
                    </p>
                </div>
                <div class=" flex flex-col items-center justify-center w-[20%] gap-2 border-2 rounded-xl p-2">
                    <img alt="logo" class="w-10 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <p>
                        TailwindCSS
                    </p>
                </div>
                <div class=" flex flex-col items-center justify-center w-[20%] gap-2 border-2 rounded-xl p-2">
                    <img alt="logo" class="w-10 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <p>
                        C#
                    </p>
                </div>
                <div class=" flex flex-col items-center justify-center w-[20%] gap-2 border-2 rounded-xl p-2">
                    <img alt="logo" class="w-10 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <p>
                        HTML
                    </p>
                </div>
                <div class=" flex flex-col items-center justify-center w-[20%] gap-2 border-2 rounded-xl p-2">
                    <img alt="logo" class="w-10 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <p>
                        CSS
                    </p>
                </div>
                <div class=" flex flex-col items-center justify-center w-[20%] gap-2 border-2 rounded-xl p-2">
                    <img alt="logo" class="w-10 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    <p>
                        JavaScript
                    </p>
                </div>

            </div>

        </section>
        <section id="Projects" class="flex flex-col h-[100vh] md:max-w-[80%]  items-center overflow-x-hidden">
            <h2 class="text-5xl font-bold">
                Projects
            </h2>
            <div class="flex flex-col">

            </div>

        </section>
    </div>
@endsection
