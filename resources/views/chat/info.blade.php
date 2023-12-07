<div class="info-content col-span-12 xl:col-span-3 flex flex-col overflow-hidden pl-6 xl:pl-0 pr-6">
    <div class="overflow-y-auto scrollbar-hidden py-6">
        <div class="intro-y box relative px-4 py-6">
            <a href="javascript:;" title="Settings" class="text-gray-600 tooltip w-8 h-8 block flex items-center justify-center absolute top-0 right-0 mr-1 mt-1"> <i data-feather="edit-2" class="w-4 h-4"></i> </a>
            <div class="w-20 h-20 mx-auto image-fit">
                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{$user->image ?? asset('assets/images/profile-9.jpg')}}" />
                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 top-0 mt-1 mr-1 rounded-full border-2"></div>
            </div>
            <div class="text-base font-medium text-center mt-3">{{$user->name}}</div>
            <div class="text-gray-600 text-center text-xs uppercase mt-0.5"> {{$user->about}} </div>
        </div>
        <div class="intro-y box p-4 mt-3">
            <div class="text-base font-medium">Personal Information</div>
            <div class="mt-4">
                <div class="border-gray-200 dark:border-dark-5 flex items-center border-b pb-3">
                    <div class="">
                        <div class="text-gray-600">{{$user->country}}</div>
                        <div class="mt-0.5"> {{$user->city}} </div>
                    </div>
                    <i data-feather="globe" class="w-4 h-4 text-gray-600 ml-auto"></i>
                </div>
                <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                    <div class="">
                        <div class="text-gray-600">Phone</div>
                        <div class="mt-0.5"> {{$user->phone}} </div>
                    </div>
                    <i data-feather="mic" class="w-4 h-4 text-gray-600 ml-auto"></i>
                </div>
                <div class="border-gray-200 dark:border-dark-5 flex items-center py-3">
                    <div class="">
                        <div class="text-gray-600">Email</div>
                        <div class="mt-0.5"> {{$user->email}} </div>
                    </div>
                    <i data-feather="mail" class="w-4 h-4 text-gray-600 ml-auto"></i>
                </div>
            </div>
        </div>
        <div class="intro-y h-full box flex flex-col p-4 mt-3">
            <div class="text-base font-medium">Shared Files</div>
            <div class="mt-4 overflow-x-hidden overflow-y-auto scrollbar-hidden">
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-8.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">MP4</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Celine Dion - Ashes.mp4</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">20 MB Audio File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Laravel 7</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">120 MB Document File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">ZIP</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Repository</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">20 KB Zipped File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-3.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-10.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-11.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-6.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">TXT</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Resources.txt</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">2.2 MB Text File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Documentation</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">4 MB Document File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">MP4</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Celine Dion - Ashes.mp4</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">20 MB Audio File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Documentation</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">4 MB Document File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">TXT</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Resources.txt</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">2.2 MB Text File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-11.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Laravel 7</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">120 MB Document File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-13.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-8.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-5.jpg')}}</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 MB Image File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PHP</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Routes.php</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 KB Script File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                    <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PHP</div>
                    </div>
                    <div class="w-full ml-3">
                        <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Routes.php</div>
                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 KB Script File</div>
                    </div>
                    <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                        <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>