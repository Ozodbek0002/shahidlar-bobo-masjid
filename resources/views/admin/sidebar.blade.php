<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item {{  request()->routeIs('shownamoz') ? 'active' : '' }}">
                    <a href="{{route('shownamoz')}}">
                        <i class="fas fa-clock"></i>
                        <p>Namoz Vaqti </p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('ehsonlar') ? 'active' : '' }}">
                    <a href="{{route('ehsonlar')}}">
                        <i class="fas fa-envelope"></i>
                        <p>Ehsonlar ro'yhati</p>
                    </a>
                </li>

                {{--                <li class="nav-item {{  request()->routeIs('addehson') ? 'active' : '' }}">--}}
                {{--                    <a href="{{route('addehson')}}">--}}
                {{--                        <i class="fas fa-envelope"></i>--}}
                {{--                        <p>Ehson qo'shish</p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                <li class="nav-item {{ request()->routeIs('shownews') ? 'active' : '' }} ">
                    <a href="{{route('shownews')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Yangiliklar ro'yhati</p>
                    </a>
                </li>

                {{--                <li class="nav-item {{ request()->routeIs('addnews') ? 'active' : '' }} ">--}}
                {{--                    <a href="{{route('addnews')}}">--}}
                {{--                        <i class="fas fa-pen-square"></i>--}}
                {{--                        <p>Yangilik qo'shish</p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                <li class="nav-item {{  request()->routeIs('showbook') ? 'active' : '' }}">
                    <a href="{{url('showbook')}}">
                        <i class="fas fa-book"></i>
                        <p>Kitoblar ro'yhati</p>
                    </a>
                </li>

                {{--                <li class="nav-item {{  request()->routeIs('addbook') ? 'active' : '' }}">--}}
                {{--                    <a href="{{url('addbook')}}">--}}
                {{--                        <i class="fas fa-book"></i>--}}
                {{--                        <p>Kitob qo'shish</p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                <li class="nav-item {{  request()->routeIs('maqolalar') ? 'active' : '' }}">
                    <a href="{{url('maqolalar')}}">
                        <i class="fas fa-bookmark"></i>
                        <p>Maqolalar ro'yhati</p>
                    </a>
                </li>

                {{--                <li class="nav-item {{  request()->routeIs('addmaqola') ? 'active' : '' }}">--}}
                {{--                    <a href="{{route('addmaqola')}}">--}}
                {{--                        <i class="fas fa-bookmark"></i>--}}
                {{--                        <p>Maqola qo'shish</p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                <li class="nav-item {{  request()->routeIs('index') ? 'active' : '' }}">
                    <a href="{{url('/photoindex')}}">
                        <i class="fas flaticon-photo-camera"></i>
                        <p>Rasm</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('video.index') ? 'active' : '' }}">
                    <a href="{{url('video')}}">
                        <i class="fas fa-video"></i>
                        <p>Video</p>
                    </a>
                </li>
                <style> #btnsub{
                        background: transparent; font-size: 16px; text-align: left; width: 100%; height: 50px; color: red; font-weight: 900; border: none; margin-left: 3px;
                    }
                #btnsub:hover{
                    background: rgba(77, 76, 76, 0.29);
                }
                </style>
                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <form action="{{route('logout')}}" method="post" id="form_id">
                        @csrf
                    <button type="submit" id="btnsub"  >
                        <i class="fas fa-backspace"></i>
                        Chiqish
                    </button>

                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>


