<header id="main-header">
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>
                        <a class="navbar-brand" href="index-2.html"> <img class="img-fluid logo" src="images/logo.png"
                                                                          alt="streamit" /> </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    <li class=" menu-item dropdown" >
                                        <a href="{{route('movie-fontEnd.index')}}">{{__('message.Home')}}</a>
                                    </li>

                                    <li class="menu-item dropdown ">
                                        <a href="show-category.html">{{__('message.Category')}}</a>
                                        <div class="dropdown-content three-column" aria-labelledby="dropdownMenuButton2">
                                        @foreach($categories as $category)
                                                <a class="dropdown-item" href="{{route('movie.type',$category->id)}}">{{$category->name}}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="menu-item dropdown">
                                        <a href="show-category.html">{{__('message.Country')}}</a>
                                        <div class="dropdown-content three-column" aria-labelledby="dropdownMenuButton2">
                                            @foreach($countries as $country)
                                                <a class="dropdown-item" href="{{route('movie.type',$country->id)}}">{{$country->name}}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="menu-item">
                                        <a href="movie-category.html">{{__('message.Movies')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                               data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                <div class="navbar-right position-relative">
                                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                        <li>
                                            <a href="#" class="search-toggle">
                                                <i class="ri-search-line"></i>
                                            </a>
                                            <div class="search-box iq-search-bar">
                                                <form action="#" class="searchbox">
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="text search-input font-size-12"
                                                               placeholder="movie name,director,actor">
                                                        <i class="search-link ri-search-line"></i>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="iq-sub-dropdown iq-user-dropdown">
                                                <div class="iq-card shadow-none m-0">
                                                    <div class="iq-card-body p-0 pl-3 pr-3">
                                                        <a href="pricing-plan.html" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-file-user-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Pricing Plan</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-file-user-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Manage Profile</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="setting.html" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-settings-4-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Settings</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="login.html" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-logout-circle-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Logout</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <form action="{{route('lang.setLocale')}}" method="post">
                                @csrf
                                <label>
                                    <select name="language" class="form-control" onchange="this.form.submit()">
                                        <option value="vi" @if(\Illuminate\Support\Facades\App::getLocale()=='vi') selected @endif>VN</option>
                                        <option value="en"  @if(\Illuminate\Support\Facades\App::getLocale()=='en') selected @endif>EN</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0">
                                <li class="nav-item nav-icon">
                                    <a href="#" class="search-toggle device-search">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="search-box iq-search-bar d-search">
                                        <form action="{{route('director.search')}}" method="post" class="searchbox">
                                            @csrf
                                            <div class="form-group position-relative">
                                                <input type="text" name="search" class="text search-input font-size-12"
                                                       placeholder="Movie, Director, Actor">
                                                <i class="search-link ri-search-line" ></i>
                                            </div>
                                        </form>
                                    </div>
                                </li>


                                </li>
                                <li class="nav-item nav-icon">
                                    <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                       data-toggle="search-toggle">
                                        <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0 pl-3 pr-3">
                                                @can('is-Admin')
                                                <a href="{{route('admin')}}" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-file-user-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Admin</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endcan
                                                @if(!\Illuminate\Support\Facades\Auth::check())
                                                    <a href="{{route('login')}}" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-settings-4-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Login</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    @else
                                                    <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-file-user-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Manage Profile</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="setting.html" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-settings-4-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Settings</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="{{route('logout')}}" class="iq-sub-card setting-dropdown">
                                                    <div class="media align-items-center">
                                                        <div class="right-icon">
                                                            <i class="ri-logout-circle-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Logout</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>
