<footer
    x-cloak
    x-data="{}"
    class="mx-auto w-full max-w-screen-lg space-y-24 px-5 pt-24"
>
    <div class="mx-auto grid w-full gap-y-12">
        <div
            class="col-span-full flex flex-wrap justify-around gap-x-10 gap-y-12 text-dolphin"
        >
            <x-sponsors.cms-max footer />

            <x-sponsors.kettner-edelmetalle footer />

            <x-sponsors.sevalla footer />

            <x-sponsors.vormkracht10 footer />
        </div>

        <div
            class="col-span-full flex flex-wrap justify-around gap-x-10 gap-y-12 text-dolphin"
        >
            <x-sponsors.kirschbaum footer />

            <x-sponsors.whizzy footer />

            <x-sponsors.lunar footer />

            <a
                href="https://github.com/filamentphp/filament?sponsor=1"
                target="_blank"
                class="my-auto block rounded-xl bg-pink-100 px-4 py-3 text-center text-xs font-medium text-midnight transition hover:bg-pink-200"
            >
                Your logo here?
                <span class="hover:scale-105">💖</span>
            </a>
        </div>
    </div>

    <div
        x-data="{}"
        x-ref="footer"
        x-init="
            () => {
                if (reducedMotion) return
                gsap.timeline({
                    scrollTrigger: {
                        trigger: $refs.footer,
                        start: 'top bottom',
                    },
                }).fromTo(
                    $refs.footer,
                    {
                        autoAlpha: 0,
                        y: 20,
                    },
                    {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.7,
                        ease: 'circ.out',
                    },
                )
            }
        "
        class="py-10"
    >
        <div
            class="flex flex-wrap items-start justify-between gap-x-40 gap-y-10"
        >
            <a
                href="/"
                class="block p-2 transition duration-300 will-change-transform hover:scale-105 motion-reduce:transition-none"
            >
                <div class="text-black">
                    <svg
                        fill="currentColor"
                        viewBox="0 0 128 26"
                        class="h-auto w-32"
                    >
                        {{-- F --}}
                        <path
                            d="M4.97547 25.0814C5.22893 23.8838 5.47136 22.7255 5.70278 21.6063C5.89563 20.6736 6.11143 19.6399 6.3502 18.5051L6.49621 17.8122L7.67688 12.1042H12.199L12.9924 8.32689H8.2649C8.29796 8.15901 8.34755 7.90998 8.41367 7.57982C8.47979 7.24965 8.53489 6.97265 8.57897 6.74881C8.75529 5.88702 9.07486 5.24068 9.5377 4.80978C10.0005 4.37889 10.6397 4.16344 11.4552 4.16344C11.918 4.16344 12.3753 4.2194 12.8271 4.33132C13.2789 4.44325 13.7087 4.59993 14.1165 4.80139L15.3066 0.772252C14.954 0.615563 14.5435 0.47846 14.0751 0.360944C13.6068 0.243427 13.1136 0.153891 12.5957 0.0923344C12.0778 0.0307782 11.5598 0 11.0419 0C10.2264 0 9.44403 0.0979305 8.69468 0.293791C7.94532 0.489652 7.26209 0.819818 6.64498 1.28429C6.02787 1.74876 5.49065 2.37831 5.03332 3.17295C4.576 3.96758 4.22612 4.95808 3.98368 6.14444C3.8294 6.8943 3.66135 7.70853 3.47952 8.5871L3.53341 8.32689H0.793431L0 12.1042H2.7438L2.70361 12.2966C2.63044 12.6453 2.55815 12.9905 2.48674 13.3321L2.38029 13.8418C2.20397 14.6868 2.04419 15.4562 1.90093 16.1501L1.5538 17.8289C1.26728 19.2168 1.00556 20.4731 0.768636 21.5979C0.531709 22.7227 0.292026 23.8838 0.0495894 25.0814H4.97547Z"
                            fill="black"
                        />
                        {{-- I --}}
                        <path
                            d="M19.0468 8.29404L18.5751 9.50848L20.7854 11.0626C20.9046 11.1457 20.9681 11.3013 20.9506 11.4576L20.9429 11.5045L20.7943 12.1851C20.7569 12.3565 20.627 12.4804 20.4737 12.4907L18.5227 12.6217L20.1912 13.785C20.3103 13.8681 20.3739 14.0236 20.3564 14.18L20.3487 14.2269L20.2001 14.9075C20.1627 15.0789 20.0328 15.2028 19.8795 15.2131L17.9285 15.3444L19.597 16.5074C19.7161 16.5905 19.7797 16.746 19.7622 16.9024L19.7545 16.9493L19.6059 17.6299C19.5685 17.8013 19.4385 17.9252 19.2853 17.9355L17.3346 18.0667L19.0028 19.2298C19.1219 19.3129 19.1855 19.4684 19.168 19.6248L19.1602 19.6717L19.0117 20.3523C18.9743 20.5237 18.8443 20.6476 18.6911 20.6579L16.7403 20.789L18.4086 21.9522C18.5277 22.0353 18.5913 22.1908 18.5738 22.3472L18.566 22.3941L18.4175 23.0747C18.3801 23.2461 18.2501 23.37 18.0969 23.3803L15.3609 23.6216L15.0204 25.0814H12.8359L13.5114 22.3993C13.5488 22.2279 13.6787 22.104 13.832 22.0937L15.7828 21.962L14.1145 20.7994C13.9954 20.7163 13.9318 20.5607 13.9493 20.4044L13.957 20.3575L14.1056 19.6769C14.143 19.5055 14.2729 19.3816 14.4262 19.3713L16.3767 19.2397L14.7087 18.077C14.5896 17.9939 14.526 17.8384 14.5435 17.682L14.5513 17.6351L14.6998 16.9545C14.7372 16.7831 14.8672 16.6592 15.0204 16.6489L16.971 16.5174L15.3029 15.3546C15.1838 15.2715 15.1202 15.116 15.1377 14.9596L15.1455 14.9127L15.294 14.2321C15.3314 14.0607 15.4614 13.9368 15.6146 13.9265L17.5652 13.7951L15.8971 12.6322C15.778 12.5491 15.7144 12.3936 15.7319 12.2372L15.7397 12.1903L15.8882 11.5097C15.9256 11.3383 16.0556 11.2144 16.2088 11.2041L18.1595 11.0728L16.4913 9.90977C16.3722 9.82672 16.3086 9.67117 16.3262 9.51478L16.3339 9.46791L16.6376 8.38675L19.0468 8.29404ZM20.7269 0.151123C21.6226 0.151123 22.2863 0.456106 22.7179 1.06607C23.1496 1.67604 23.2791 2.40632 23.1064 3.25692C22.9122 4.23063 22.5102 4.88816 21.9005 5.22952C21.2907 5.57087 20.5326 5.74155 19.6261 5.74155C18.7412 5.74155 18.0749 5.47574 17.627 4.94412C17.1792 4.4125 17.0524 3.65424 17.2466 2.66934C17.4301 1.77397 17.832 1.13043 18.4526 0.738706C19.0731 0.346984 19.8312 0.151123 20.7269 0.151123Z"
                            fill="black"
                        />
                        {{-- L --}}
                        <path
                            d="M27.1244 21.6063C26.893 22.7255 26.656 23.8838 26.4136 25.0814H21.4712C21.7246 23.8838 21.9671 22.7227 22.1985 21.5979C22.4299 20.4731 22.6944 19.2167 22.9919 17.8289L24.9094 8.52834C25.2069 7.16291 25.4934 5.81427 25.7689 4.48241C26.0444 3.15056 26.3199 1.81311 26.5954 0.470059L31.6205 0.0335693C31.345 1.35423 31.0612 2.71127 30.7692 4.10468C30.4772 5.49809 30.1714 6.96705 29.8518 8.51155L27.9178 17.8121C27.6203 19.2223 27.3558 20.487 27.1244 21.6063Z"
                            fill="black"
                        />
                        {{-- AMENT --}}
                        <path
                            d="M40.1595 7.8736C41.7464 7.8736 43.0522 8.14221 44.0771 8.67943C45.1019 9.21665 45.8127 9.9805 46.2094 10.971C46.6061 11.9615 46.6557 13.1395 46.3582 14.5049C46.248 15.0645 46.1323 15.6325 46.011 16.2089C45.8898 16.7853 45.7631 17.3868 45.6309 18.0136L45.3333 19.4238C45.157 20.2632 44.9724 21.1474 44.7796 22.0763C44.5867 23.0053 44.3746 24.0069 44.1432 25.0814H39.8785L40.0934 22.8486H39.7132C39.3055 23.4417 38.8564 23.9314 38.366 24.3175C37.8756 24.7036 37.3439 24.9946 36.7709 25.1905C36.1979 25.3864 35.5807 25.4843 34.9195 25.4843C33.8727 25.4843 32.9966 25.2241 32.2913 24.7036C31.586 24.1832 31.0957 23.4921 30.8202 22.6303C30.5447 21.7685 30.5171 20.8284 30.7375 19.8099C30.9028 19.0265 31.17 18.3717 31.5392 17.8457C31.9084 17.3197 32.3547 16.8888 32.8781 16.553C33.4016 16.2173 33.9801 15.9515 34.6137 15.7556C35.2474 15.5597 35.9058 15.4114 36.5891 15.3107L41.7629 14.4881C41.8731 13.9845 41.8318 13.5452 41.6389 13.1702C41.4461 12.7953 41.1017 12.5043 40.6058 12.2973C40.1099 12.0902 39.4763 11.9867 38.7049 11.9867C38.3082 11.9867 37.8866 12.0175 37.4403 12.079C36.994 12.1406 36.5284 12.2301 36.0436 12.3476C35.5587 12.4651 35.06 12.6106 34.5476 12.7841C34.0352 12.9576 33.509 13.1618 32.969 13.3969L33.7459 8.9984C34.1426 8.8641 34.5945 8.73259 35.1014 8.60388C35.6083 8.47517 36.1428 8.35486 36.7048 8.24294C37.2668 8.13102 37.8426 8.04148 38.4321 7.97433C39.0217 7.90718 39.5975 7.8736 40.1595 7.8736ZM41.1513 16.7545C40.997 16.8664 40.8097 16.9755 40.5893 17.0819C40.3689 17.1882 40.0658 17.2945 39.6801 17.4008C39.2944 17.5072 38.771 17.6331 38.1098 17.7786C37.68 17.8793 37.2888 17.9968 36.9362 18.1311C36.5835 18.2654 36.2915 18.4557 36.0601 18.7019C35.8287 18.9481 35.6744 19.2671 35.5973 19.6588C35.4871 20.2744 35.5918 20.7529 35.9113 21.0942C36.2309 21.4356 36.6662 21.6062 37.2172 21.6062C37.6139 21.6062 38.0134 21.5195 38.4156 21.346C38.8178 21.1726 39.2035 20.9235 39.5727 20.599C39.9419 20.2744 40.2807 19.8883 40.5893 19.4406L41.1513 16.7545ZM65.1814 10.8634C65.0078 10.0209 64.6549 9.34892 64.1227 8.84731C63.4339 8.19817 62.4724 7.8736 61.2382 7.8736C60.4778 7.8736 59.7478 8.0079 59.048 8.27651C58.3482 8.54512 57.7036 8.91166 57.114 9.37613C56.5245 9.8406 56.0258 10.3582 55.6181 10.929H55.2048L55.5519 8.07506L51.3864 8.32688C51.0999 9.72589 50.8189 11.0773 50.5434 12.3812C50.2679 13.6851 50.009 14.9414 49.7665 16.1501L49.4194 17.8289C49.1219 19.2167 48.8574 20.4731 48.626 21.5979C48.3945 22.7227 48.1521 23.8838 47.8987 25.0814H52.8411C53.0835 23.8838 53.3204 22.731 53.5518 21.623C53.7833 20.515 54.0312 19.3343 54.2957 18.0808L55.0065 14.6056C55.3591 14.1915 55.7145 13.8222 56.0726 13.4976C56.4308 13.173 56.8055 12.9156 57.1967 12.7254C57.5879 12.5351 58.0039 12.44 58.4447 12.44C59.2161 12.44 59.7092 12.7449 59.9241 13.3549C60.139 13.9649 60.1417 14.7735 59.9324 15.7808L59.453 18.0975C59.1885 19.351 58.9461 20.5262 58.7257 21.623C58.5053 22.7199 58.2683 23.8726 58.0149 25.0814H62.9408C63.1942 23.8838 63.4394 22.7227 63.6764 21.5979C63.9133 20.4731 64.175 19.2167 64.4615 17.8289C64.5938 17.1798 64.7232 16.553 64.85 15.9487C64.9767 15.3443 65.0896 14.8071 65.1888 14.337L65.1654 14.4463L65.2003 14.4074C65.4366 14.1475 65.6754 13.905 65.9166 13.6799L66.098 13.5144C66.4616 13.1898 66.8391 12.9296 67.2303 12.7337C67.6215 12.5379 68.0375 12.44 68.4783 12.44C69.2496 12.44 69.7428 12.7449 69.9577 13.3549C70.1726 13.9649 70.1753 14.7735 69.9659 15.7808L69.4866 18.0975C69.2331 19.3622 68.9934 20.5402 68.7675 21.6314C68.5416 22.7227 68.3019 23.8726 68.0485 25.0814H72.9909C73.2333 23.8838 73.4703 22.7255 73.7017 21.6062C73.9331 20.487 74.1976 19.2279 74.4951 17.8289C74.6273 17.1798 74.7568 16.553 74.8836 15.9487C75.0103 15.3443 75.1232 14.8071 75.2224 14.337C75.6412 12.3784 75.5089 10.8115 74.8257 9.63635C74.1425 8.46118 72.9578 7.8736 71.2718 7.8736C70.5114 7.8736 69.7786 8.0107 69.0733 8.28491C68.3681 8.55911 67.7151 8.93125 67.1145 9.40132C66.514 9.87138 65.9988 10.403 65.569 10.9962H65.2065L65.1814 10.8634ZM86.5493 7.8736C88.2795 7.8736 89.69 8.19257 90.781 8.83052C91.8719 9.46847 92.6103 10.3638 92.9959 11.5166C93.3816 12.6694 93.3872 14.0124 93.0125 15.5458C92.9243 15.9151 92.8334 16.262 92.7397 16.5866C92.6695 16.83 92.5946 17.0672 92.515 17.298L92.4339 17.5267H82.3145L82.3113 17.593C82.288 18.2334 82.3811 18.7905 82.5904 19.2643C82.9045 19.975 83.4252 20.5066 84.1525 20.8592C84.8798 21.2117 85.7724 21.388 86.8303 21.388C87.2932 21.388 87.8083 21.346 88.3759 21.2621C88.9434 21.1782 89.5082 21.0494 90.0702 20.876C90.6322 20.7025 91.1501 20.4814 91.624 20.2128L90.9628 24.477C90.6652 24.6561 90.2575 24.824 89.7396 24.9807C89.2216 25.1373 88.6238 25.2661 87.9461 25.3668C87.2684 25.4675 86.5383 25.5179 85.7559 25.5179C83.7723 25.5179 82.1166 25.1289 80.7887 24.3511C79.4608 23.5733 78.5241 22.468 77.9786 21.0355C77.4331 19.6029 77.3588 17.9017 77.7555 15.9319C78.0861 14.309 78.6481 12.8932 79.4415 11.6845C80.2349 10.4758 81.2322 9.53842 82.4334 8.87249C83.6346 8.20656 85.0065 7.8736 86.5493 7.8736ZM86.6485 11.4159C86.0865 11.4159 85.5383 11.567 85.0038 11.8692C84.4693 12.1713 83.9927 12.6414 83.574 13.2794C83.3227 13.6621 83.1072 14.1114 82.9273 14.6271L82.8777 14.7744L88.8514 14.6478L88.8702 14.5036C88.9521 13.767 88.8452 13.1071 88.5494 12.5239C88.1748 11.7852 87.5411 11.4159 86.6485 11.4159ZM99.102 25.0814C99.3445 23.8838 99.5814 22.7338 99.8128 21.6314C100.044 20.529 100.292 19.3455 100.557 18.0808L101.267 14.6056C101.62 14.1915 101.981 13.8222 102.35 13.4976C102.719 13.173 103.105 12.9156 103.507 12.7254C103.909 12.5351 104.347 12.44 104.821 12.44C105.692 12.44 106.243 12.7449 106.474 13.3549C106.706 13.9649 106.711 14.7735 106.491 15.7808L106.011 18.0975C105.758 19.351 105.518 20.5262 105.292 21.623C105.067 22.7199 104.827 23.8726 104.573 25.0814H109.516C109.769 23.8838 110.014 22.7227 110.251 21.5979C110.488 20.4731 110.745 19.2167 111.02 17.8289C111.163 17.1798 111.298 16.553 111.425 15.9487C111.552 15.3443 111.665 14.8071 111.764 14.337C112.172 12.3784 112.028 10.8115 111.334 9.63635C110.64 8.46118 109.4 7.8736 107.615 7.8736C106.832 7.8736 106.08 8.0079 105.359 8.27651C104.637 8.54512 103.978 8.91166 103.383 9.37613C102.788 9.8406 102.287 10.3582 101.879 10.929H101.466L101.813 8.07506L97.6474 8.32688C97.3609 9.72589 97.0799 11.0801 96.8044 12.3896C96.5289 13.6991 96.2699 14.9526 96.0275 16.1501L95.6804 17.8289C95.3938 19.2056 95.1321 20.4591 94.8952 21.5895C94.6583 22.7199 94.4131 23.8838 94.1596 25.0814H99.102ZM120.965 25.5347C121.362 25.5347 121.791 25.4983 122.254 25.4255C122.717 25.3528 123.15 25.2577 123.552 25.1401C123.954 25.0226 124.271 24.8855 124.502 24.7288L125.031 20.6158C124.601 20.9179 124.174 21.1306 123.75 21.2537C123.326 21.3768 122.937 21.4384 122.585 21.4384C121.78 21.4384 121.232 21.1586 120.94 20.599C120.648 20.0394 120.618 19.2223 120.849 18.1479L122.097 12.1042H127.015L127.808 8.32688H122.884L122.917 8.16949C122.989 7.83058 123.057 7.50308 123.123 7.18699L123.188 6.87471C123.359 6.05209 123.527 5.25186 123.692 4.47401C123.858 3.69617 124.028 2.87075 124.205 1.99777L119.147 2.88754C118.915 3.99555 118.692 5.06999 118.477 6.11085C118.348 6.73537 118.208 7.40219 118.058 8.11132L118.012 8.32688H115.345L114.551 12.1042H117.227L117.206 12.2058L117.146 12.4987C116.97 13.3661 116.802 14.1775 116.642 14.933C116.483 15.6885 116.331 16.4159 116.188 17.1154C116.044 17.8149 115.896 18.5284 115.741 19.2559C115.444 20.6773 115.477 21.8525 115.841 22.7814C116.204 23.7104 116.83 24.4015 117.717 24.8547C118.604 25.308 119.687 25.5347 120.965 25.5347Z"
                            fill="black"
                        />
                    </svg>
                </div>
            </a>
            <div class="flex flex-1 flex-wrap justify-start gap-x-40 gap-y-3">
                <div
                    class="flex flex-col items-start gap-3 text-sm font-medium"
                >
                    <a
                        href="{{ route('home') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Home
                    </a>
                    <a
                        href="{{ route('docs') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Documentation
                    </a>
                    <a
                        href="{{ route('api-docs') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        PHP API Documentation
                    </a>
                    <a
                        href="{{ route('plugins') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Plugins
                    </a>
                    <a
                        href="{{ route('articles') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Content
                    </a>
                    <a
                        href="{{ route('consulting') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Consulting
                    </a>
                    <a
                        href="{{ route('use-cases.admin-panel') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Build an Admin Panel
                    </a>
                </div>
                <div
                    class="flex flex-col items-start gap-3 text-sm font-medium"
                >
                    <a
                        href="https://shop.filamentphp.com"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Shop
                    </a>
                    <a
                        href="{{ route('team') }}"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Meet Our Team
                    </a>
                    <a
                        target="_blank"
                        href="https://status.filamentphp.com"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Status
                    </a>
                    <a
                        target="_blank"
                        href="https://github.com/filamentphp/filament/discussions/new"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Help
                    </a>
                    <a
                        target="_blank"
                        href="https://github.com/filamentphp/filament?sponsor=1"
                        class="p-2 transition duration-300 will-change-transform hover:translate-x-1 hover:text-black motion-reduce:transition-none motion-reduce:hover:transform-none"
                    >
                        Sponsor
                    </a>
                </div>
            </div>
        </div>
        <div
            class="mt-7 flex flex-wrap items-start justify-between gap-10 border-t border-slate-200 pt-5"
        >
            <div class="text-sm font-medium text-hurricane/50">
                &copy; {{ date('Y') }} Filament. All rights reserved.
            </div>
            <div class="flex flex-wrap items-center gap-3.5 text-hurricane">
                <a
                    target="_blank"
                    href="https://twitter.com/filamentphp"
                    class="group/twitter-link relative grid h-[2.6rem] w-[2.6rem] place-items-center rounded-xl bg-merino hover:text-black motion-reduce:transition-none"
                >
                    <svg
                        width="40"
                        height="40"
                        class="scale-[.6] transition duration-300 group-hover/twitter-link:scale-0 group-hover/twitter-link:opacity-0"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M37.02 9.427c-1.272.562-2.62.932-4.002 1.096a6.991 6.991 0 0 0 3.064-3.856 13.935 13.935 0 0 1-4.425 1.691 6.97 6.97 0 0 0-11.877 6.357A19.79 19.79 0 0 1 5.412 7.432a6.947 6.947 0 0 0-.944 3.505 6.973 6.973 0 0 0 3.1 5.801 6.947 6.947 0 0 1-3.156-.871v.084a6.975 6.975 0 0 0 5.591 6.837 7.008 7.008 0 0 1-3.15.12 6.975 6.975 0 0 0 6.514 4.842 13.99 13.99 0 0 1-10.32 2.887A19.719 19.719 0 0 0 13.73 33.77c12.823 0 19.833-10.622 19.833-19.834 0-.3-.006-.603-.02-.901a14.17 14.17 0 0 0 3.477-3.608Z"
                            fill="currentColor"
                        />
                    </svg>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        class="absolute right-1/2 top-1/2 -translate-y-1/2 translate-x-1/2 scale-0 opacity-0 transition duration-300 group-hover/twitter-link:scale-100 group-hover/twitter-link:opacity-100"
                        fill="none"
                    >
                        <path
                            d="M12.6182 0.80542H15.0592L9.72628 6.90056L16 15.1947H11.0877L7.24026 10.1643L2.83789 15.1947H0.395405L6.09945 8.67524L0.0810547 0.80542H5.11803L8.5958 5.40334L12.6182 0.80542ZM11.7614 13.7336H13.114L4.38307 2.18974H2.9316L11.7614 13.7336Z"
                            fill="currentColor"
                        />
                    </svg>
                </a>
                <a
                    target="_blank"
                    href="https://filamentphp.com/discord"
                    class="grid h-[2.6rem] w-[2.6rem] place-items-center rounded-xl bg-merino transition duration-300 hover:text-black motion-reduce:transition-none"
                >
                    <svg
                        class="w-[1.3rem]"
                        fill="none"
                        viewBox="0 0 71 55"
                        aria-hidden="true"
                    >
                        <g clip-path="url(#clip0)">
                            <path
                                d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z"
                                fill="currentColor"
                            />
                        </g>
                    </svg>
                </a>
                <a
                    target="_blank"
                    href="https://github.com/filamentphp/filament"
                    class="grid h-[2.6rem] w-[2.6rem] place-items-center rounded-xl bg-merino transition duration-300 hover:text-black motion-reduce:transition-none"
                >
                    <svg
                        class="w-[1.6rem]"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
