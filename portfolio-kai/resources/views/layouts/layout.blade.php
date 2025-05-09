<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Portfolio - @yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
<header class="flex h-[10vh] z-40 top-0 sticky justify-center place-items-center bg-neutral-100">
    <nav class="min-w-full  py-4 px-8 md:py-4 md:px-24">
        <div class="md:hidden flex min-w-[90%] items-center justify-between">
            <a href="#Home" class="font-bold text-2xl">
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
                <a href="#Home" class="font-bold text-2xl">
                    Kai Da Silva
                </a>
                <div class="min-w-max pl-12  font-bold">
                    <a class=" relative group hover:text-neutral-400  transition-all ease-in-out duration-500 ml-5 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-gray-400 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0"
                       href="#aboutMe">About me</a>
                    <a class="relative group hover:text-neutral-400  transition-all ease-in-out duration-500 ml-5 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-gray-400 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0"
                       href="#Projects">Projects</a>
                    <a class=" relative group hover:text-neutral-400  transition-all ease-in-out duration-500 ml-5 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-gray-400 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0"
                       href="">Resume</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="transition-all ease-in-out duration-500 bg-neutral-100">
    @yield('content')
</main>

<footer class="flex flex-col justify-center items-center md:h-[20vh] gap-4 bg-neutral-200 ">
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
            <svg viewBox="0 -3.5 32 32" version="1.1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transition-all duration-600 ease-in-out group-hover:text-white z-10">
                <g transform="translate(-414.000000, -261.000000)">
                    <path d="M430,275.916 L426.684,273.167 L415.115,285.01 L444.591,285.01 L433.235,273.147 L430,275.916 Z M434.89,271.89 L445.892,283.329 C445.955,283.107 446,282.877 446,282.634 L446,262.862 L434.89,271.89 Z M414,262.816 L414,282.634 C414,282.877 414.045,283.107 414.108,283.329 L425.147,271.927 L414,262.816 Z M445,261 L415,261 L430,273.019 L445,261 Z" />
                </g>
            </svg>
        </a>
    </div>
    <p>
        Kai Da Silva &copy; {{ date('Y') }}. All rights reserved.
    </p>
</footer>
{{--<div class="md:flex hidden place-items-center justify-self-end gap-4">--}}
{{--    <a href="" class="fixed flex flex-row items-center justify-center bottom-5 right-5 shadow-2xl bg-neutral-400 text-white font-bold p-2  rounded-full overflow-hidden group transition-all duration-500 ease-in-out before:content-[''] before:absolute before:inset-0 before:bg-neutral-600 before:translate-y-full hover:before:translate-y-0 before:transition-transform before:duration-500 before:ease-in-out hover:text-white">--}}
{{--        <span class="relative z-10">💬 Contact</span>--}}
{{--    </a>--}}
{{--</div>--}}
</body>
<script>

</script>

</html>

