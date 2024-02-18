@extends('admin.main')
@section('content')
    <div class="w-full p-2.5 flex-col justify-start items-center gap-2.5 inline-flex ">
        <div class="w-full flex justify-center flex-wrap items-start gap-4 bg-white p-5 rounded-xl">


            {{-- @can('billing.form.delivery-note') --}}
            <a href="/billing/delivery-note"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M15 19L17 21L21 17M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H11.5M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V13.4M9 17H11.5M9 13H15M9 9H10"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Quotation</div>
            </a>
            {{-- @endcan --}}

            {{-- @can('billing.form.delivery-note') --}}
            <a href="/billing/delivery-note"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M15 19L17 21L21 17M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H11.5M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V13.4M9 17H11.5M9 13H15M9 9H10"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Delivery note</div>
            </a>
            {{-- @endcan --}}

            {{-- @can('billing.create-invoice') --}}
            <a href="/billing/invoice"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M19.002 21V15M21.0303 17L19.0303 15L17.0303 17M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H15M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V11M9 17H13M9 13H15M9 9H10"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Invoice</div>
            </a>
            {{-- @endcan --}}

            {{-- @can('billing.form.purchases') --}}
            <a href="/billing/purchase"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M19 15V21M19 21L17 19M19 21L21 19M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H14M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V11M9 17H13M9 13H15M9 9H10"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Purchases</div>
            </a>
            {{-- @endcan --}}

            {{-- @can('billing.form.daily-sales') --}}
            <a href="/billing/sales-closing"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.9426 1.25H12.0574C14.3658 1.24999 16.1748 1.24998 17.5863 1.43975C19.031 1.63399 20.1711 2.03933 21.0659 2.93414C21.9607 3.82895 22.366 4.96897 22.5603 6.41371C22.75 7.82519 22.75 9.63423 22.75 11.9426V12.0574C22.75 14.3658 22.75 16.1748 22.5603 17.5863C22.366 19.031 21.9607 20.1711 21.0659 21.0659C20.1711 21.9607 19.031 22.366 17.5863 22.5603C16.1748 22.75 14.3658 22.75 12.0574 22.75H11.9426C9.63423 22.75 7.82519 22.75 6.41371 22.5603C4.96897 22.366 3.82895 21.9607 2.93414 21.0659C2.03933 20.1711 1.63399 19.031 1.43975 17.5863C1.24998 16.1748 1.24999 14.3658 1.25 12.0574V11.9426C1.24999 9.63423 1.24998 7.82519 1.43975 6.41371C1.63399 4.96897 2.03933 3.82895 2.93414 2.93414C3.82895 2.03933 4.96897 1.63399 6.41371 1.43975C7.82519 1.24998 9.63423 1.24999 11.9426 1.25ZM6.61358 2.92637C5.33517 3.09825 4.56445 3.42514 3.9948 3.9948C3.42514 4.56445 3.09825 5.33517 2.92637 6.61358C2.75159 7.91356 2.75 9.62177 2.75 12C2.75 14.3782 2.75159 16.0864 2.92637 17.3864C3.09825 18.6648 3.42514 19.4355 3.9948 20.0052C4.56445 20.5749 5.33517 20.9018 6.61358 21.0736C7.91356 21.2484 9.62177 21.25 12 21.25C14.3782 21.25 16.0864 21.2484 17.3864 21.0736C18.6648 20.9018 19.4355 20.5749 20.0052 20.0052C20.5749 19.4355 20.9018 18.6648 21.0736 17.3864C21.2484 16.0864 21.25 14.3782 21.25 12C21.25 9.62177 21.2484 7.91356 21.0736 6.61358C20.9018 5.33517 20.5749 4.56445 20.0052 3.9948C19.4355 3.42514 18.6648 3.09825 17.3864 2.92637C16.0864 2.75159 14.3782 2.75 12 2.75C9.62177 2.75 7.91356 2.75159 6.61358 2.92637Z"
                            fill="#ffffff"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 5.74998C8.41421 5.74998 8.75 6.08576 8.75 6.49998L8.75 7.74999H10C10.4142 7.74999 10.75 8.08578 10.75 8.49999C10.75 8.91421 10.4142 9.24999 10 9.24999H8.75V10.5C8.75 10.9142 8.41421 11.25 8 11.25C7.58579 11.25 7.25 10.9142 7.25 10.5V9.24999H6C5.58579 9.24999 5.25 8.91421 5.25 8.49999C5.25 8.08578 5.58579 7.74999 6 7.74999H7.25L7.25 6.49998C7.25 6.08576 7.58579 5.74998 8 5.74998ZM13.25 8.49998C13.25 8.08576 13.5858 7.74998 14 7.74998H18C18.4142 7.74998 18.75 8.08576 18.75 8.49998C18.75 8.91419 18.4142 9.24998 18 9.24998H14C13.5858 9.24998 13.25 8.91419 13.25 8.49998ZM13.25 14.5C13.25 14.0858 13.5858 13.75 14 13.75H18C18.4142 13.75 18.75 14.0858 18.75 14.5C18.75 14.9142 18.4142 15.25 18 15.25H14C13.5858 15.25 13.25 14.9142 13.25 14.5ZM5.96967 13.9697C6.26256 13.6768 6.73744 13.6768 7.03033 13.9697L8.00001 14.9393L8.96967 13.9697C9.26256 13.6768 9.73744 13.6768 10.0303 13.9697C10.3232 14.2626 10.3232 14.7374 10.0303 15.0303L9.06067 16L10.0303 16.9697C10.3232 17.2626 10.3232 17.7374 10.0303 18.0303C9.73742 18.3232 9.26255 18.3232 8.96966 18.0303L8.00001 17.0607L7.03034 18.0303C6.73745 18.3232 6.26258 18.3232 5.96968 18.0303C5.67679 17.7374 5.67679 17.2626 5.96968 16.9697L6.93935 16L5.96967 15.0303C5.67678 14.7374 5.67678 14.2626 5.96967 13.9697ZM13.25 17.5C13.25 17.0858 13.5858 16.75 14 16.75H18C18.4142 16.75 18.75 17.0858 18.75 17.5C18.75 17.9142 18.4142 18.25 18 18.25H14C13.5858 18.25 13.25 17.9142 13.25 17.5Z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Sales Closing</div>
            </a>
            {{-- @endcan --}}

            {{-- @can('billing.form.daily-sales') --}}
            <a href="/billing/expenses"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" fill="#000000" viewBox="0 0 24 24" id="bill-dollar-left"
                    data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="secondary"
                            d="M5,13H7.5A1.5,1.5,0,0,0,9,11.5H9A1.5,1.5,0,0,0,7.5,10h-1A1.5,1.5,0,0,1,5,8.5H5A1.5,1.5,0,0,1,6.5,7H9"
                            style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                        </path>
                        <path id="secondary-2" data-name="secondary" d="M7,7V6m0,8V13m5,2h3m-2-4h2"
                            style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                        </path>
                        <path id="blue-600" d="M5,18v3l2.33-1,2.33,1L12,20l2.34,1,2.33-1L19,21V4a1,1,0,0,0-1-1H11"
                            style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                        </path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Expense</div>
            </a>
            {{-- @endcan --}}

            {{-- @can('billing.form.stock-closing') --}}
            <a href="/billing/stock-closing"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 488.162 488.162" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path style="fill:#ffffff;"
                                d="M440.443,91.682c0-26.385-21.468-47.853-47.853-47.853h-35.205h-109.24V24.386 c0-13.469-9.039-24.386-20.2-24.386h-86.082c-11.152,0-20.2,10.917-20.2,24.386v19.452H95.572 c-26.385,0-47.853,21.468-47.853,47.853c0,19.265,11.445,35.904,27.889,43.488v31.555c-16.444,7.584-27.889,24.223-27.889,43.488 s11.445,35.904,27.889,43.488v31.555c-16.444,7.576-27.889,24.223-27.889,43.488s11.445,35.904,27.889,43.488v24.581 c-16.444,7.584-27.889,24.223-27.889,43.488c0,26.385,21.468,47.853,47.853,47.853H392.59c26.385,0,47.853-21.468,47.853-47.853 c0-19.265-11.445-35.904-27.889-43.488V372.24c16.444-7.584,27.889-24.223,27.889-43.488s-11.445-35.904-27.889-43.488v-31.555 c16.444-7.584,27.889-24.223,27.889-43.488s-11.445-35.904-27.889-43.488V135.17C428.998,127.594,440.443,110.955,440.443,91.682z M392.59,225.552h-12.551v87.845h12.551c8.47,0,15.339,6.869,15.339,15.339s-6.869,15.339-15.339,15.339h-12.551v80.879h12.551 c8.47,0,15.339,6.869,15.339,15.339s-6.869,15.339-15.339,15.339H95.572c-8.47,0-15.339-6.869-15.339-15.339 s6.869-15.339,15.339-15.339h12.551v-80.879H95.572c-8.47,0-15.339-6.869-15.339-15.339s6.869-15.339,15.339-15.339h12.551v-87.845 H95.572c-8.47,0-15.339-6.869-15.339-15.339s6.869-15.339,15.339-15.339h12.551v-87.846H95.572c-8.47,0-15.339-6.869-15.339-15.339 s6.869-15.339,15.339-15.339h26.093h9.112h117.368h109.232h35.205c8.47,0,15.339,6.869,15.339,15.339s-6.869,15.339-15.339,15.339 h-12.551v87.846h12.551c8.47,0,15.339,6.869,15.339,15.339S401.06,225.552,392.59,225.552z">
                            </path>
                            <path style="fill:#ffffff;"
                                d="M244.081,120.815c0,0-8.665,12.339-20.598,31.88c-45.78,74.937-139.836,256.066,20.598,256.066 c185.015,0,31.588-240.882,4.064-281.98C245.576,122.953,244.081,120.815,244.081,120.815z M255.038,357.47 c21.76-10.047,25.231-30.572,19.891-52.316c-4.519-18.419,23.833-26.231,28.361-7.82c8.25,33.595,0.35,69.946-33.408,85.529 C252.786,390.749,237.838,365.412,255.038,357.47z">
                            </path>
                        </g>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Stock Closing</div>
            </a>
            {{-- @endcan --}}

            {{-- @can('data.entry') --}}
            {{-- <a href="/billing/data-entry"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" viewBox="0 0 1024 1024" class="icon"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"
                    stroke-width="26.624000000000002">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M988.598857 118.418286l7.094857 5.339428a25.307429 25.307429 0 0 1 4.681143 35.84l-374.125714 494.445715a71.094857 71.094857 0 0 1-28.233143 21.211428l-150.893714 54.125714c-14.409143 5.193143-26.916571-3.949714-26.550857-19.017142l3.876571-158.573715a61.074286 61.074286 0 0 1 11.629714-32.256L822.418286 23.332571c8.045714-10.24 24.064-12.434286 34.816-4.315428l131.364571 99.401143z m-497.883428 544.182857l90.697142-32.621714 276.187429-362.422858c6.070857-8.045714 4.900571-18.432-2.925714-24.137142l-76.288-55.808c-7.972571-5.851429-18.066286-3.437714-23.990857 4.096L479.817143 544.182857a35.986286 35.986286 0 0 0-7.241143 19.894857l-2.048 84.187429c-0.292571 11.410286 9.874286 18.066286 20.260571 14.336z m311.588571-533.796572a16.310857 16.310857 0 0 0 2.925714 23.552l75.264 54.930286a16.457143 16.457143 0 0 0 23.259429-3.657143l32.475428-42.861714c5.924571-7.899429 3.657143-18.285714-4.022857-24.137143l-71.533714-54.125714a17.334857 17.334857 0 0 0-24.356571 2.706286l-33.938286 43.593142z m148.845714 680.301715a164.132571 164.132571 0 0 1-164.352 164.278857H148.845714A131.291429 131.291429 0 0 1 18.285714 841.654857V187.977143c0-47.835429 38.473143-86.381714 86.601143-86.381714h494.006857c18.651429 0 33.792 15.286857 33.792 34.084571a33.938286 33.938286 0 0 1-33.792 34.084571H131.657143c-0.292571 0-0.292571 0-0.292572-19.309714l0.292572 19.309714c-22.674286 0-45.787429 27.501714-45.787429 51.346286v620.544c0 34.962286 28.306286 63.488 62.902857 63.488h628.077715c58.953143 0 106.715429-47.469714 106.715428-105.837714V470.747429c0-18.797714 15.067429-34.084571 33.792-34.084572s33.792 15.36 33.792 34.157714v338.285715z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Data Entry</div>
            </a> --}}
            {{-- @endcan --}}

            {{-- @can('bulk.upload') --}}
            {{-- <a href="/billing/bulk-upload"
                class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
                <svg height="40" width="40" class="mx-auto" viewBox="0 0 23 23"
                    id="meteor-icon-kit__regular-bulk-edit" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 18H8C6.34315 18 5 16.6569 5 15V13H3C1.34315 13 0 11.6569 0 10V3C0 1.34315 1.34315 0 3 0H10C11.6569 0 13 1.34315 13 3V5H15C16.6569 5 18 6.34315 18 8V10H20C21.6569 10 23 11.3431 23 13V20C23 21.6569 21.6569 23 20 23H13C11.3431 23 10 21.6569 10 20V18ZM10 16V13C10 11.3431 11.3431 10 13 10H16V8C16 7.44772 15.5523 7 15 7H8C7.44772 7 7 7.44772 7 8V15C7 15.5523 7.44772 16 8 16H10ZM5 11V8C5 6.34315 6.34315 5 8 5H11V3C11 2.44772 10.5523 2 10 2H3C2.44772 2 2 2.44772 2 3V10C2 10.5523 2.44772 11 3 11H5ZM13 12C12.4477 12 12 12.4477 12 13V20C12 20.5523 12.4477 21 13 21H20C20.5523 21 21 20.5523 21 20V13C21 12.4477 20.5523 12 20 12H13Z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
                <div class="text-center text-white text-xl font-bold">Bulk Upload</div>
            </a> --}}
            {{-- @endcan --}}

            {{-- @can('export.data') --}}
            {{-- <a href="{{ route('export.data') }}" class="w-full md:w-60 h-36 align-middle flex hover:bg-blue-600/90  gap-3 bg-blue-600 rounded-[10px] justify-center flex-col">
            <svg height="40" width="40" class="mx-auto"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#ffffff" d="M15.5336935,1.36078656 L14.3091934,0 L4.66164861,0 C3.96587259,0 3.69745022,0.516240645 3.69745022,0.918940882 L3.69745022,4.54990495 L5.05022147,4.54990495 L5.05022147,1.65231191 C5.05022147,1.49764309 5.17972642,1.36831506 5.33012577,1.36831506 L12.2326992,1.36831506 C12.3848666,1.36831506 12.4607275,1.39536077 12.4607275,1.51951183 L12.4607275,6.33974935 L17.374336,6.33974935 C17.5674293,6.33974935 17.64219,6.43910559 17.64219,6.58649791 L17.64219,18.3551379 C17.64219,18.6018372 17.5427649,18.6391348 17.3923656,18.6391348 L5.33012577,18.6391348 C5.17841421,18.6391348 5.05022147,18.5071054 5.05022147,18.3551379 L5.05022147,17.2797529 L3.70585195,17.2797529 L3.70585195,18.9746512 C3.68830357,19.5740762 4.00829472,20 4.66164861,20 L18.0607964,20 C18.7607484,20 19,19.492895 19,19.031053 L19,6.44396558 L19,5.18667048 L18.6504957,4.80720067 L15.5336935,1.36078656 Z M13.8361266,1.51951183 L14.2226173,1.95352728 L16.8187437,4.80720067 L16.9617674,4.98003873 L14.3091934,4.98003873 C14.1088763,4.98003873 13.9821388,4.94696877 13.9289809,4.88082886 C13.8758231,4.81468894 13.8448716,4.71017086 13.8361266,4.56727461 L13.8361266,1.51951183 Z M12.745155,10.6673887 L17.3228723,10.6673887 L17.3228723,12.0008027 L12.745155,12.0008027 L12.745155,10.6673887 Z M12.745155,8.00053511 L17.3228723,8.00053511 L17.3228723,9.33394906 L12.745155,9.33394906 L12.745155,8.00053511 Z M12.745155,13.3342423 L17.3228723,13.3342423 L17.3228723,14.6676563 L12.745155,14.6676563 L12.745155,13.3342423 Z M1,5.6257308 L1,16.2931195 L11.4647417,16.2931195 L11.4647417,5.6257308 L1,5.6257308 Z M6.23301435,11.8301319 L5.59210113,12.8075142 L6.23301435,12.8075142 L6.23301435,13.9996373 L3.01552801,13.9996373 L5.35148739,10.4913668 L3.28236069,7.33382814 L5.01013637,7.33382814 L6.2343518,9.16996719 L7.45725501,7.33382814 L9.18369325,7.33382814 L7.11194213,10.4900547 L9.44921372,13.9996373 L7.6560547,13.9996373 L6.23301435,11.8301319 Z"></path> </g></svg>
            <div class="text-center text-white text-xl font-bold">Export Data</div>
        </a> --}}
            {{-- @endcan --}}

        </div>
    @endsection
