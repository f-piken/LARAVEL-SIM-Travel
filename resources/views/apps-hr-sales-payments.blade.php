@extends('layouts.master')
@section('title')
    {{ __('Payments') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Payments" pagetitle="Sales" />

    <div class="card" id="ordersTable">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-4 mb-5 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <div class="relative">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 fill-slate-100"></i>
                    </div>
                </div><!--end col-->
                <div class="xl:col-span-2">
                    <input type="text" id="dateRangeFilterInput"
                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400"
                        placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y"
                        data-range-date="true">
                </div><!--end col-->
                <div class="xl:col-span-2 xl:col-start-11">
                    <select class="form-input border-slate-200 focus:outline-none focus:border-custom-500" data-choices
                        data-choices-search-false name="statusFilterSelect" id="statusFilterSelect">
                        <option value="Paid">Paid</option>
                        <option value="Pending">Pending</option>
                        <option value="Failed">Failed</option>
                    </select>
                </div>
            </div><!--col grid-->
            <div class="-mx-5 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead
                        class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500">
                        <tr>
                            <th
                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                Payment ID</th>
                            <th
                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                Membership Plan</th>
                            <th
                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                Date</th>
                            <th
                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                Payment Type</th>
                            <th
                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                Username</th>
                            <th
                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                Amount</th>
                            <th
                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200">
                                Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200"><a
                                    href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021320</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Regular License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">02
                                July, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                PayPal</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Infra Teach</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $2,403</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500 inline-block"></span>
                                    Paid
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200"><a
                                    href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021321</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Extended License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">08
                                Nov, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Credit Card</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Kim Broberg</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $1,341</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-500 inline-block"></span>
                                    Pending
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200"><a
                                    href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021322</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Extended License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">11
                                Aug, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Bank Transfer</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Everett Moore</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $816.21</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500">
                                    <span class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-red-500 inline-block"></span>
                                    Failed
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200"><a
                                    href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021323</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Regular License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">20
                                Sep, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                PayPal</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Omari Welch</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $1,184</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500 inline-block"></span>
                                    Paid
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200"><a
                                    href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021324</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Regular License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">07
                                Oct, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Debit Card</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Susana Dooley</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $5,463</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500 inline-block"></span>
                                    Paid
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200"><a
                                    href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021325</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Regular License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">18
                                Dec, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                PayPal</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Paul Gerhold</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $3,463</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-500 inline-block"></span>
                                    Pending
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <a href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021326</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Extended License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                21 Jan, 2024</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Back Transfer</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Lucie Beahan</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $1,543</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-red-500 inline-block"></span>
                                    Failed
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <a href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021327</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Regular License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                02 Feb, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                PayPal</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Jose White</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $4,177</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500 inline-block"></span>
                                    Paid
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <a href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021328</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Extended License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                11 Dec, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Debit Card</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Jonas Frederiksen</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $2,307</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-500 inline-block"></span>
                                    Pending
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <a href="#!"
                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWP10021329</a>
                            </td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Extended License</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                01 Jan, 2023</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                PayPal</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                Stephen Tillman</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                $543.99</td>
                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">
                                    <span
                                        class="size-1.5 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500 inline-block"></span>
                                    Paid
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col items-center mt-5 md:flex-row">
                <div class="mb-4 grow md:mb-0">
                    <p class="text-slate-500">Showing <b>8</b> of <b>10</b> Results</p>
                </div>
                <ul class="flex flex-wrap items-center gap-2 shrink-0">
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
                            class="inline-flex items-center justify-center bg-white h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 text-slate-500 hover:text-custom-500 hover:bg-custom-50 focus:bg-custom-50 focus:text-custom-500 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-50 [&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 [&.disabled]:cursor-auto">Next
                            <i class="size-4 ml-1 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
