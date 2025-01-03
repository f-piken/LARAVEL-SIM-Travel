@extends('layouts.master')
@section('title')
    Pagination
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Pagination" pagetitle="Navigation" />

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Basic Pagination</h6>

            <div class="grid grid-cols-1 gap-5 xl:grid-cols-2">

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto disabled"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="move-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="move-right"></i></a>
                    </li>
                </ul>

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white h-8 px-3 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 dar:[&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 mr-1 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white h-8 px-3 transition-all duration-150 ease-linear rounded-full text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 dar:[&.active]:text-custom-50 [&.active]:bg-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">Next
                            <i class="size-4 ml-1 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div><!--end card-->

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Bordered Pagination</h6>

            <div class="grid grid-cols-1 gap-5 xl:grid-cols-2">

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border border-slate-200 rounded text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i></a>
                    </li>
                </ul>

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 mr-1 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">Next
                            <i class="size-4 ml-1 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>

                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded-full border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div><!--end card-->

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Sizes</h6>

            <div class="grid grid-cols-1 gap-5 xl:grid-cols-2">

                <div>
                    <ul class="flex flex-wrap items-center gap-2 mb-3">
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">5</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-2 mb-3">
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-2">
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">3</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear rounded text-slate-500 hover:text-custom-500 [&.active]:text-custom-500 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="flex flex-wrap items-center gap-2 mb-3">
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-3" data-lucide="chevrons-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-3" data-lucide="chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-3" data-lucide="chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-6 text-xs transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-3" data-lucide="chevrons-right"></i></a>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-2 mb-3">
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">2</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">5</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-8 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i></a>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-2">
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">1</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto active">2</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">3</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">4</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">5</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">6</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                        </li>
                        <li>
                            <a href="#!"
                                class="inline-flex items-center justify-center bg-white size-10 text-lg transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-50 [&.active]:bg-custom-500 [&.active]:border-custom-500 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto"><i
                                    class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
