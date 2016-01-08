            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{url('/')}}" {{$page == 'home' ? 'class=active' : ''}}>Home</a></li>
                                    <li><a href="{{url('products')}}" {{$page == 'products' ? 'class=active' : ''}}>Products</a></li>
                                    <li><a href="{{url('blog')}}" {{$page == 'blog' ? 'class=active' : ''}}>Blog</a></li>
                                    <li><a href="{{url('contact-us')}}" {{$page == 'contact_us' ? 'class=active' : ''}}>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->