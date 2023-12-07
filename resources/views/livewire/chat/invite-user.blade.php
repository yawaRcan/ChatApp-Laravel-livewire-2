<div>
    <style>
        .form-control:focus {
            outline: none;
            box-shadow: none;   
        }

    </style>
     @if(count($users)>0)
    <div class="intro-y text-lg font-medium">Send Friend Requests</div>
    <div class="form-group mt-2 mb-2">
        <input type="search" wire:model="search" class="form-control form-control-sm" placeholder="Search User">
    </div>
    <div class="modal-content__scrollable overflow-y-auto scrollbar-hidden -mx-4 px-4 mt-4">
        <div class="user-list">
            @foreach ($users as $data)
           @if($data->id!=\Auth::user()->id)
            <div class="intro-y pb-3">
                <div class="intro-y block">
                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in">
                        <div class="w-10 h-10 flex-none image-fit mr-1">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full"
                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAq1BMVEX////8sEL/sj9sbGzy8vL+sUHGxsbo6Oj39/fR0dH/sz1rcXdqb3T6+vq5ubnJycnl
                             5eXf3992dnaUlJTAwMCThHLmp075r0NxdnqxsbGjo6PfpFLAl2HZoVV8fHzPz8+giW6ojWuykWeoqKi3k2TzrEbNnFvGmV6Li4t7eniii22IgHaDhIaqjWnvq0iShHLpqEyKgHTSn1i9lWOZnaJka3H/8d/7qivt3Mc4yBFyAAAKIUlEQVR4nO1da1PqvBaWpqW0SQtNuYQiAS1XqaD4vuec///LTkIV0S1kValN9+SZ2R90tpnkycrKumX15sbAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMCgpmi5kec1JTwvcltVT+eX4XphkhFC8DvET1kSem7VU/sVdLoxI5ite48vi/Gov5Xoj8aLl8femmHC4m6n6imWisBLxPrXD8vR3Pcty3LeIX7y/flo+bAWPCReUPVUS0KUMEyniyexfMdpfAVBhe8/LaYUsySqerrXhx1yQh/GA7H+L5d/QoTlD8YPlPDQrnrSV4UrRGC3GPiq9R958AeLnRCGv0dFdmLC7vqWUgI+SoPVv2Mk/jsUpJ0Qdj8Hi8CpMMzvGUn+ghMxZN9j4MgCG1a9hB/C43i6/SYDOQvbKeZe1cv4AYKErEc/YCBnYbQmcW3tBY/iWSFFeIYFa4ZpTUUhJZu+/2MGJPz+hqRVL+cbsDN8d8YcLA7HucNZ7S6IiLLFdYQgh79gtGbmc5us+9YVKWg0rP6atKteVhGEZDe/1jl4gzPfkbDqhcExJNPGtSkQJDSmpDb20hDfXeFK/IIE6w7XhARJQQkMSNSFhCEpjQJJQh2OQ5c8XPNO/Az/gXSrXqIKHukVkAIZRpQooD2sHtHcbnbRBmocivU7/eXjbr17XPYdMA9OY4O0Di8FnAPtAseaL6Yylr5KVjLWPl3MgSw4c851diNjPAKdBMsaTxnhySTfUXeScMKmYwf2xyMcV7zOCwjxLUQfOtZ+g1n60fyPUoY3e5As+LdYW4OxQ3oQCqynHebNP8U5aHK8A3kZfo/oGmvNKEQZ+LeMnrveupRBJEmohOxXVwbGEO8Bm+g/4Ph8JMCO8QNgEGuvp73YARlHwsa5PHvhb8GG0fE0rBjgJPj3SnUWkns1Cc6crn5lVYXQxkulEDv+EifKkRK8VMeirSXWL6LCN2oK5jv8psts9/PFELhvaiLDgAiMteG/uDoQQjxWJpS369zfaXVXSCA+NXndWP5q1T2U5HTJeqscbaybkRBQgKu0YQezKBRrHU4mQ4reraQIUfkrwc1hYRHbKEezelQvkznEI9XGWfcHhy9Yoddksp2hNBd/O0WvkfNOjFZyZR65V3HqjPQSBIAYOFsm1aHN0e
                             T4V6mQiDRNxe6nxy2dIC7pSJjyNGgmCE21NrBmRJz/Fv+QJXDDmHMeh6eaIaJcKAWXzJSsjnHztxd6AZn6UrCe5YWeIHWipIOkwKye1UNuNLKYI6K0DZw5C2WIBWLiDmWQJMTK+9FaEn1STwkbqPZMaDBPXgmQpKEtLwdPrWUbA6a2uH4JAblTWrfOXhr4K5iBK/9bh+yVHPh3RBet2AZsmbOQKpHCMuipMAFtslAbniNtDOZ4DXByJAf22cDBR3SpDeKg4a81iaq11PbM61mwEWzb2kJtQM6CtLv0qHefAI5CrhNdBEsNeOJigOhEOepEPdwvIGGAyI+zFQaNi2AznggOmlhpKEpB0ORmoJDAT6Mh9KFNYRZ+KPTBkCrvWwF/SkteHQiu2kA67NhOXHgctmuJuBdWO9CoS6JD0qmN+5CkgPXIgpsEtms0uQnYI4QDp6/F7ZhC1MHhcoyEsoMYt5FQnR2yAKXeL
                             KZD0V4GSqxIpdgVPjbkPo+FT9wFqUSZbtHAbwoYwDo4kLCJYQ7DwV2IN7AMrHXPqjeXXYg9l8+WR+LWg3AwuYk4IMB+GHWhgVIE2TISzpSibAjiYJghOgVK18EfrRhdtZ//NtnQ45QCOKCUe4AAZT7sHFdfmzOEXQsN65bYN60VSA5WLeEy3QLH1eCNxz/qMFo+14PyCkByEBRQtdbmn19Y5WWsgDVYQiVKBe4COJBKLuBQDnrVJx4zmLfQsGasiJvbYsq4cg5/Wr2BwEE27cGyL/IAwYZ5IdIGrzzvCJZZZ4yLBIEjdcbilYP7yqvUwDJ7sJXhgNrKRc9YGQBzkNvKYEBt5XpxIJxn+GRbMNe5bhwUCoS3oepABw7AOlEeBvgtlkGPgg46EXw3ShcPrBW7GOiManE3gm0kOd0dadvqTQvsNgEFEw/QwUaC2soN6eM9Y6QuGWgi/Ax/FaeDrQz1mQ4kOGMKqM2j4wIPZHXwmaC+cw5IPgCYr3jjQAPfGRpDyXGILl9GBIwovw6oQwwFHEvLpzzAqlh4igdFBtQhlgaOqeZQHwZW7CjoEFMFB3xe922syBRPwBZizoEOsXVojuU46fXlu2y1LvRCVIscCzTXduTg9qJWjKCx1LfhtMi1AXOuRwz
                             YJR86Vpe4nUKTnCsw9/6+c7MLghCpy1M/DqZH7r2gTSOuxwuJVyEGhYRKkxoMWC3O6d7dnn2x7BXUBtrU4oBqsk7gDNg5XZ6tCzGgT00WqDbvdOJzdqYuKaTF7ll9avNANZofNo9x+pUmcykFh49yaFOjCarVPd28JY6+fJm34kkhB0ynWl1Izfbp5gnTro3+PA0hancKOh/61GxDavdPNu9JvkOK/6jOipCQ60z9cuMEGtXuQ95wnGxeT+bfPz3qeXvCUyCYqtkbDshbniMFy/w5mp2h4btObw1fX7ZlFJhja2j2lgfypuuNgj1+VYdBgmjS9KIo8poJRUl+sl26GUCTNnq96QI98ZQ757zg7KjGOilHCFHxj6fHV+weuPWmZm/7IG88G47l7Def2oLaHSEHnQ+FCRHH0766FbV2bzwVgiD7qftOf7YGtYcNhrIh9da3zrUk11MMzr75dmQreX/e3896FJMYGP5shZyw9cPt+Gngn6NCvzffX739l43T+4vZdMMYJoQn7SK1OJ1QfqIAs/Xu7mV/aFP/WQz0e/v/uQeEIGA028hvS7A4DSed74itHTWHSXagYrr81Kdayx4QH3uBWIOXNWar0Puj1UNx2J1mygnunTZP0rMXyGlPGMd5YWQ1uaZb64Ycb8ZHt0TTnjDvvYGspw0uoWF+k+PHV/Woa2+gY48oa8RoKdGdICW7Q7hR3x5Rr73CnCfGy4r1NvPujBr3Cst7xjnPgLrs76KLby2te8blvQMXpV5aMR3o3TvwpvXPtuQEYPTvUvMekjc3//lvuXUhQXf7rHcvUYH/ld0VXfuesjfgt+3fRYKqr71RoWQOUlBXmYpRLge1oKBcDupBQakcJPWgoEQOgtUXySktURoHLgd2lKkeZXEwofX5Jk1JHKRoVZ9vE5XCgZshHUrwoCiDgxDV61tl1+cgylDNvll3bQ7sBNXu24XX5aA1RDWxi05xTQ5aQ4rq+C3T63HgphTV85u2V+Ig8GKE6vpt42twEERCBGr8jesfc2BPEoporb91/hMOWp1mwpEgoObfvHdRu2UXhNuJJt1hfKhOiru1VIMf4KLvIktCr6ZK8BPsbrMwPC9yNak/NzAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMCiO/wPMcMPjRs+bjwAAAABJRU5ErkJggg==" />
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <a href="javascript:;" class="font-medium" style="text-transform: capitalize !important">{{ $data->name }}  </a>
                            <div class="flex items-center text-xs">
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">    </div>
                            </div>
                        </div>

                        <input wire:change="sendFriendRequest({{$data->id}}, $event.target.checked)" class="form-check-switch ml-auto" type="checkbox" id="friend-list-a-0" />
                    </div>
                </div>
            </div>
            @endif

            

            @endforeach
          
            <div class="user-list__action bg-white dark:bg-dark-6 -mx-4 px-4">
                <button class="btn btn-primary w-full">Send Invitation</button>
            </div>
        </div>
    </div>
    @else 
    <div class="intro-y text-lg font-medium"> Zero acquaintances listed </div>
    <div class="modal-content__scrollable overflow-y-auto scrollbar-hidden -mx-4 px-4 mt-4 " >
        <div class="user-list">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_zi2xpiyh.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px; margin-left:50px"  loop  autoplay></lottie-player>
        </div>
    </div>
    @endif
    <script>
        window.addEventListener('toggle-modal', event => {
            $("#staticBackdrop").modal('toggle');    
        });
    </script>

</div>
