<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" type="text/css">
</head>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
    <div class="container"><a class="navbar-brand" href="#" style="opacity: 0.5;"><i class="fa d-inline fa-lg fa-cloud"></i><b class="p-2">Jugze</b></a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="搜尋" aria-label="搜尋">
        </form>
        <button class="btn my-2 my-sm-0 bg-primary" type="submit"> <i class="b fa d-inline fa-lg fa-search"></i></button>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-bookmark-o"></i> 辯論</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-envelope-o"></i> 糾察</a></li>
            </ul><a class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o"></i> 登入/註冊</a>
        </div>
    </div>
</nav>
<div class="container" style="margin-top: 5%">
    <div class="row">
        <div class="col-md-12">
            <h1>{{"編號".$id.$title}} </h1>
        </div>
        <div class="col-md-6">{{"開始時間".$start}}</div>
        <div class="col-md-6">{{"結束時間".$end}}</div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6"><img class="img-fluid d-block w-100 mb-3 rounded" src="https://pingendo.github.io/templates/sections/assets/gallery_4.jpg">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-md-6"><img class="img-fluid d-block w-100 mb-3 rounded" src="https://pingendo.github.io/templates/sections/assets/gallery_6.jpg">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5 text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="pb-3 text-secondary">Sometimes is just matter to write things clear. </h1>
            </div>
            <div class="col-md-12">
                <div class="bar"></div>
            </div>
        </div>
        <div class="row">
            <div class="text-right col-md-6">
                <div class="row my-5">
                    <div class="col-2 order-lg-2 col-2 text-center"><i class="d-block fa fa-columns fa-3x"></i></div>
                    <div class="col-10 text-lg-right text-left order-lg-1">
                        <h4 class="text-primary">Responsive design</h4>
                        <p>Based on fluid design principles.<br>Works with screen resolution</p>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-2 order-lg-2 col-2 text-center"><i class="d-block fa fa-circle-thin fa-4x"></i></div>
                    <div class="col-10 text-lg-right text-left order-lg-1">
                        <h4 class="text-primary">Customized settings</h4>
                        <p>Choose settings depending on the criteria you value the most</p>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-2 order-lg-2 col-2 text-center"><i class="d-block fa fa-comment-o fa-3x"></i></div>
                    <div class="col-10 text-lg-right text-left order-lg-1">
                        <h4 class="text-primary">Connect</h4>
                        <p>In-app chat panel 24/7 active.<br>The support you need, right there.</p>
                    </div>
                </div>
            </div>
            <div class="text-left col-md-6">
                <div class="row my-5">
                    <div class="col-2 text-center"><i class="d-block fa fa-battery-empty fa-3x"></i></div>
                    <div class="col-10">
                        <h4 class="text-primary">Battery-friendly</h4>
                        <p>Non consuming background operation<br>Pingendo enhance the battery duration.</p>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-2 text-center"><i class="d-block mx-auto fa fa-clone fa-3x"></i></div>
                    <div class="col-10">
                        <h4 class="text-primary">Multilayers</h4>
                        <p>Work simultaneously on different panels.<br>Share the work with teammates.</p>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-2 text-center"><i class="d-block fa fa-heart-o fa-3x"></i></div>
                    <div class="col-10">
                        <h4 class="text-primary">Share the love</h4>
                        <p>Help us spreading the word.<br>Tell your friends with just one-click</p>
                    </div>
                </div>
            </div>
        </div>
        <textarea>Next, start a free trial!</textarea>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7">
                <h2 class="text-primary">延伸議題#1</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="col-md-5 align-self-center"><img class="img-fluid d-block w-100 img-thumbnail" src="https://pingendo.github.io/templates/sections/assets/gallery_9.jpg"></div>
        </div>
        <div class="row">
            <div class="col-md-5"><img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="https://pingendo.github.io/templates/sections/assets/gallery_3.jpg"></div>
            <div class="col-md-7">
                <h2 class="text-primary pt-3">延伸議題#2</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p class="lead">Sign up to our newsletter for the latest news</p>
                <form class="form-inline">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Your e-mail here">
                    </div>
                    <button class="btn btn-primary ml-3" type="submit">Subscribe</button>
                </form>
            </div>
            <div class="col-4 col-md-1 align-self-center"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a></div>
            <div class="col-4 col-md-1 align-self-center"><a href="https://twitter.com" target="_blank"><i class="fa fa-fw fa-twitter fa-3x text-white"></i></a></div>
            <div class="col-4 col-md-1 align-self-center"><a href="https://www.instagram.com" target="_blank"><i class="fa fa-fw fa-instagram text-white fa-3x"></i></a></div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                <p>© Copyright 2017 Pingendo - All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>