
        @auth
        <div class="container">
        
            <div class="row py-4">
                <div class="col-md-4">
                    <div class="list-group">
                        @if (auth()->user()->isAdmin())

                            <a  class="list-group-item list-group-item-action {{ Request::is('users/index') ? 'active' : '' }}" href="{{route('users.index')}}">Users</a>


                        @endif

                            <a class="list-group-item list-group-item-action {{ Request::is('categories*') ? 'active' : '' }}" href="{{route('categories.index')}}">Categories</a>


                            <a class="list-group-item list-group-item-action {{ Request::is('tags*') ? 'active' : '' }}" href="{{route('tags.index')}}">Tags</a>


                            <a class="list-group-item list-group-item-action {{ Request::is('posts*') ? 'active' : '' }}" href="{{route('posts.index')}}">Posts</a>



                            <a class="list-group-item list-group-item-action {{ Request::is('users/*/profile') ? 'active' : '' }}" href="{{route('user.edit',auth()->user()->id)}}">Profile</a>


                    </div>
                </div>
                <div class="col-md-8">

                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
        @else
            <main class="py-4">
                @yield('content')
            </main>
        @endauth