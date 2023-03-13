<header class="header m-1 bg-custom-blue">
    <div class="row mt-3 mt-md-1">
        <div class="p-md-1 p-2 p-md-1 p-2">
            <div class="d-flex justify-content-between">
                <h4 class="welcoming">Hi, {{auth()->user()->name}}</h4>
                <div class="icon-container">
                    <img src="{{asset('assets/images/notification.png')}}" alt="" class="icon">
                </div>
            </div>
        </div>
        <div class="p-md-1 p-2 p-md-1 p-2">
            <h2 class="header-h2">Let's find you a doctor!</h2>
        </div>
        <div class="my-3 my-md-1 p-md-1 p-2">
            <form action="/doctors" method="post">
                @csrf
                <div class="search-container d-flex">
                    <img src="{{asset('assets/images/search.png')}}" alt="" class="icon p-1 p-md-2">
                    <input type="text" name="search" placeholder="Search here..." class="form-control search-input">
                </div>
            </form>
        </div>
    </div>
</header>