@extends ('master')

@section('content')

    <div id="app">
        <div class="test">
            <router-link tag="a" to="/" exact>
                <span>home</span>
            </router-link>
            <router-link tag="a" to="/about">
               <span>about</span>
            </router-link>
        </div>
        <router-view></router-view>
    </div>
@endsection('content')