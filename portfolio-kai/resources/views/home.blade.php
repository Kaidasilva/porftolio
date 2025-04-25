<?php declare(strict_types=1); ?>

@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col">
        <section class="place-items-center">
            <div class="hidden-animation transition-all  duration-500 min-w-[80%] px-4 py-24">
                <div class="flex flex-row gap-10">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-5xl font-bold">
                            Hi,
                        </h1>
                        <h2 class="text-4xl font-bold">
                            I'm Kai Da Silva
                        </h2>
                        <p class="text-xl">
                            Software Developer
                        </p>
                    </div>
                    <div class="flex justify-end">
                        <img alt="logo" class="w-30 h-auto max-w-full" src={{asset("images/placeholder.svg.png")}}>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
