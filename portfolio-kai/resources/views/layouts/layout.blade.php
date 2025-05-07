<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Portfolio - @yield('title')</title>
    <link rel="icon" href={{asset("images/taskbar-logo.png")}} type="image/x-icon">
    <link rel="stylesheet" href={{asset("styles/animation.css")}}>
    @vite('resources/js/app.js')
</head>
<body>
<header class="flex h-[10vh] z-40 top-0 sticky justify-center place-items-center">
    <nav class="min-w-full bg-white py-4 px-8 md:py-4 md:px-24">
        <div class="md:hidden flex min-w-[90%] items-center justify-between">
            <a href="/">
                Kai Da Silva
            </a>
            <button id="hamburger-btn" class="flex flex-col space-y-1">
                <span class="block w-8 h-1 bg-black transition-all ease-in-out duration-500"></span>
                <span class="block w-8 h-1 bg-black transition-all ease-in-out duration-500"></span>
                <span class="block w-8 h-1 bg-black transition-all ease-in-out duration-500"></span>
            </button>
        </div>
        <div id="mobile-menu" class="md:hidden z-50 absolute pt-12 left-0 h-screen w-full bg-white text-black translate-x-[-150%] transition-all ease-in-out duration-500">
            <div class="p-6 grid gap-y-8 bg-white">
                <div class="flex flex-col gap-4">
                    <a class="relative group text-2xl font-bold"
                       href="">About me</a>
                    <a class="relative group text-2xl font-bold"
                       href="">Portfolio</a>
                    <a class="relative group text-2xl font-bold"
                       href="">Resume</a>
                </div>

                <div class="flex w-[50%] gap-4">
                    <a href="" class="relative bg-neutral-400 text-white font-bold py-2 px-4 rounded-full overflow-hidden group shadow-lg transition-all duration-500 ease-in-out before:content-[''] before:absolute before:inset-0 before:bg-bg-neutral-600 before:translate-y-full hover:before:translate-y-0 before:transition-transform before:duration-500 before:ease-in-out hover:text-white">
                        <span class="relative z-10">💬 Contact</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full max-md:hidden">
            <div class="flex justify-between items-center">
                <p class="font-bold text-2xl">
                    Kai Da Silva
                </p>
                <div class="min-w-max pl-12  font-bold">
                    <a class="relative group hover:text-neutral-400  transition-all ease-in-out duration-500 ml-5 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-gray-400 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0"
                       href="">About me</a>
                    <a class="relative group hover:text-neutral-400  transition-all ease-in-out duration-500 ml-5 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-gray-400 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0"
                       href="">Portfolio</a>
                    <a class="relative group hover:text-neutral-400  transition-all ease-in-out duration-500 ml-5 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-gray-400 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0"
                       href="">Resume</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="transition-all ease-in-out duration-500">
    @yield('content')
</main>

<footer>

</footer>
<div class="md:flex hidden place-items-center justify-self-end gap-4">
    <a href="" class="fixed flex flex-row items-center justify-center bottom-5 right-5 shadow-2xl bg-neutral-400 text-white font-bold p-2  rounded-full overflow-hidden group transition-all duration-500 ease-in-out before:content-[''] before:absolute before:inset-0 before:bg-neutral-600 before:translate-y-full hover:before:translate-y-0 before:transition-transform before:duration-500 before:ease-in-out hover:text-white">
        <span class="relative z-10">💬 Contact</span>
    </a>
</div>
</body>
</html>

