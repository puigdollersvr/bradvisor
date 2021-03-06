<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css?family=Exo+2:200,300,400,500,600,600italic,700">

    <link rel="stylesheet" type="text/css" href="{{asset('/libraries/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/libraries/chosen/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/libraries/rangeSlider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/libraries/rangeSlider/css/ion.rangeSlider.skinNice.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/variants/directory-20142206.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/libraries/bootstrap-vertical-tabs/bootstrap.vertical-tabs.min.css')}}">

    <title>

        Business Directory |

        Director
    </title>
</head>

<body class="breadcrumb-white footer-top-dark">

<div id="page">
    <div id="header-wrapper">
        <div id="header">
            <div id="header-inner">
                <nav class="navbar navbar-default">
                    <div class="header-secondary">
                        <div class="container clearfix">
                            Select Language
                            <ul class="languages">
                                <li>
                                    <a href="#" class="language-active">
                                        <img class="iclflag" src="{{asset('/img/flags/en.png')}}" alt="en"
                                             title="English">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="language-flag" src="{{asset('/img/flags/fr.png')}}" alt="fr"
                                             title="Français">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="language-flag" src="{{asset('/img/flags/de.png')}}" alt="de"
                                             title="Deutsch">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <img class="language-flag" src="{{asset('/img/flags/it.png')}}" alt="it"
                                             title="Italiano">
                                    </a>
                                </li>
                            </ul><!-- /.languages -->

                            <ul class="header-submenu pull-right">
                                <li><a href="#"><i class="fa fa-users color-gray-dark"></i> <span class="hidden-xs">Register</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-sign-in color-gray-dark"></i> <span class="hidden-xs">Login</span></a>
                                </li>
                                <li>
                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-submit.html"><i
                                                class="fa fa-plus-square"></i> Submit</a></li>
                            </ul>
                        </div><!-- /.container -->
                    </div><!-- /.header-secondary -->

                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-main">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="index.html">
                                <span class="logo-styled">
                                    <span class="logo-title">
                                        <img src="{{asset('/img/logo-directory.png')}}" alt=""> Director
                                    </span><!-- /.logo-title -->
                                    <span class="logo-subtitle hidden-sm">Business <br/> Directory</span>
                                </span><!-- /.logo-styled -->
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-main">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="menuparent hidden-sm">
                                    <a href="#">Home</a>
                                    <ul>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/automotive/index.html">Automotive</a>
                                        </li>
                                        <li><a href="index.html">Directory</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/real-estate/index.html">Real
                                                Estate</a></li>
                                    </ul>
                                </li>


                                <li class="menuparent">
                                    <a href="#">Specific</a>

                                    <ul>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Item
                                                Detail</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/listing-grid.html">Grid
                                                Version</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/listing-grid-filter.html">Grid
                                                + Filter</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/listing-row.html">Row
                                                Version</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/listing-row-filter.html">Row
                                                + Filter</a></li>
                                    </ul>
                                </li>
                                <li class="menuparent megamenu columns4">
                                    <a href="#">Pages</a>

                                    <ul>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-accordions.html"><i
                                                                class="fa fa-reorder"></i> Accordions</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-grid.html"><i
                                                                class="fa fa-th"></i> Grid</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-404.html"><i
                                                                class="fa fa-question"></i> Not Found</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-invoice.html"><i
                                                                class="fa fa-file"></i> Invoice</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-faq.html"><i
                                                                class="fa fa-question"></i> FAQ</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-blockquotes.html"><i
                                                                class="fa fa-quote-right"></i> Blockquotes</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-500.html"><i
                                                                class="fa fa-exclamation"></i> Internal Error</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-pricing.html"><i
                                                                class="fa fa-euro"></i> Pricing</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-login.html"><i
                                                                class="fa fa-sign-in"></i> Login</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-renew-password.html"><i
                                                                class="fa fa-life-ring"></i> Renew Pass</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-contact.php.html"><i
                                                                class="fa fa-phone"></i> Contact Page</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-list-of-icons.html"><i
                                                                class="fa fa-list"></i> List of Icons</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-tables.html"><i
                                                                class="fa fa-table"></i> Tables</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-register.html"><i
                                                                class="fa fa-check-square"></i> Registration</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-terms.html"><i
                                                                class="fa fa-file-text"></i> Conditions</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-features.html"><i
                                                                class="fa fa-heart"></i> Features</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-notifications.html"><i
                                                                class="fa fa-warning"></i> Notifications</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-tabs.html"><i
                                                                class="fa fa-bars"></i> Tabs</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-change-password.html"><i
                                                                class="fa fa-gear"></i> Change Pass</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-members.html"><i
                                                                class="fa fa-users"></i> Members</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menuparent megamenu columns3">
                                    <a href="#">Portfolio</a>
                                    <ul>
                                        <li>
                                            <ul>
                                                <li class="header"><a href="#"><i class="fa fa-columns"></i> 4
                                                        Columns</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-standard-fullwidth.html">Standard
                                                        Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-no-spacing-fullwidth.html">No
                                                        Spacing Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-isotope-fullwidth.html">Isotope
                                                        Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-standard-left-sidebar.html">Standard
                                                        Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-no-spacing-left-sidebar.html">No
                                                        Spacing Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-isotope-left-sidebar.html">Isotope
                                                        Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-standard-right-sidebar.html">Standard
                                                        Right Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-no-spacing-right-sidebar.html">No
                                                        Spacing Right Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-4-columns-isotope-right-sidebar.html">Isotope
                                                        Right Sidebar</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li class="header"><a href="#"><i class="fa fa-columns"></i> 3
                                                        Columns</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-standard-fullwidth.html">Standard
                                                        Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-no-spacing-fullwidth.html">No
                                                        Spacing Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-isotope-fullwidth.html">Isotope
                                                        Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-standard-left-sidebar.html">Standard
                                                        Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-no-spacing-left-sidebar.html">No
                                                        Spacing Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-isotope-left-sidebar.html">Isotope
                                                        Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-standard-right-sidebar.html">Standard
                                                        Right Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-no-spacing-right-sidebar.html">No
                                                        Spacing Right Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-3-columns-isotope-right-sidebar.html">Isotope
                                                        Right Sidebar</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li class="header"><a href="#"><i class="fa fa-columns"></i> 2
                                                        Columns</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-standard-fullwidth.html">Standard
                                                        Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-no-spacing-fullwidth.html">No
                                                        Spacing Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-isotope-fullwidth.html">Isotope
                                                        Fullwidth</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-standard-left-sidebar.html">Standard
                                                        Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-no-spacing-left-sidebar.html">No
                                                        Spacing Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-isotope-left-sidebar.html">Isotope
                                                        Left Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-standard-right-sidebar.html">Standard
                                                        Right Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-no-spacing-right-sidebar.html">No
                                                        Spacing Right Sidebar</a></li>
                                                <li>
                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/portfolio-2-columns-isotope-right-sidebar.html">Isotope
                                                        Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menuparent">
                                    <a href="#">Blog</a>

                                    <ul>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-detail.html">Detail
                                                Page</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-detail-left-sidebar.html">Detail
                                                Left Sidebar</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-detail-right-sidebar.html">Detail
                                                Right Sidebar</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-rows.html">Rows
                                                Version</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-rows-left-sidebar.html">Rows
                                                Left Sidebar</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-rows-right-sidebar.html">Rows
                                                Right Sidebar</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-grid.html">Grid
                                                Version</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-grid-left-sidebar.html">Grid
                                                Left Sidebar</a></li>
                                        <li>
                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/blog-grid-right-sidebar.html">Grid
                                                Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/page-contact.html">Contact</a>
                                </li>
                            </ul><!-- /.nav -->                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div><!-- /#header-inner -->
        </div><!-- /#header -->
    </div><!-- /#header-wrapper -->

    <div id="main-wrapper">
        <div id="main">
            <div id="main-inner">
                <div class="google-map-wrapper">
                    <div id="google-map-directory"></div>

                    <div class="container">
                        <div class="google-map-filter col-xs-12 col-sm-4 col-md-3 pull-right">
                            <form method="post" action="?" class="clearfix">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <select name="" data-placeholder="Select Country" class="form-control">
                                        <option value="#">Select Country</option>
                                        <option value="#">Czech Republic</option>
                                        <option value="#">Germany</option>
                                        <option value="#">France</option>
                                        <option value="#">Hungary</option>
                                        <option value="#">Italy</option>
                                        <option value="#">Poland</option>
                                        <option value="#">Slovak Republic</option>
                                        <option value="#">Ukraine</option>
                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <select name="" data-placeholder="Select Disctrict" class="form-control">
                                        <option value="#">Select Disctrict</option>
                                        <option value="#">Brooklyn</option>
                                        <option value="#">Bronx</option>
                                        <option value="#">Manhattan</option>
                                        <option value="#">Village</option>
                                        <option value="#">Queens</option>
                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <select name="" data-placeholder="Select City" class="form-control">
                                        <option value="#">Select City</option>
                                        <option value="#">Berlin</option>
                                        <option value="#">Canberra</option>
                                        <option value="#">London</option>
                                        <option value="#">New York</option>
                                        <option value="#">Paris</option>
                                        <option value="#">Prague</option>
                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <select name="" data-placeholder="Select Business Type" class="form-control">
                                        <option value="#">Select Business Type</option>
                                        <option value="#">Autoservice</option>
                                        <option value="#">Bank</option>
                                        <option value="#">Bar</option>
                                        <option value="#">Castle</option>
                                        <option value="#">Hospital</option>
                                        <option value="#">Museum</option>
                                        <option value="#">Restaurant</option>
                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <input type="text" class="form-control" placeholder="Price From">
                                        </div>

                                        <div class="col-xs-6 col-sm-6">
                                            <input type="text" class="form-control" placeholder="Price To">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Search" class="btn btn-terciary btn-block">
                                </div><!-- /.form-group -->
                            </form>
                        </div><!-- /.google-map-filter -->
                    </div><!-- /.container --></div>

                <div class="secondary-images hidden-xs">
                    <div class="row">
                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/01-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/03-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/07-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/08-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/09-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/11-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/13-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/14-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/01-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/03-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/07-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->

                        <div class="secondary-image col-sm-1">
                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                <img src="{{asset('/img/tmp/works/08-tall.jpg')}}" alt="" class="image-max-width">
                                <span></span>
                            </a>
                        </div><!-- /.secondary-image -->
                    </div><!-- /.row -->
                </div>
                <div class="container">
                    <div class="block-content block-content-medium-padding">
                        <div class="block-content-inner">
                            <h1 class="center mb40 widgetized-title">Featured Spots</h1>

                            <ul class="portfolio-isotope-filter clearfix">
                                <li class="selected"><a href="#" data-filter="*"><span>All</span></a></li>
                                <li><a href="#" data-filter=".portfolio-restaurant"><span>Restaurants</span></a></li>
                                <li><a href="#" data-filter=".portfolio-accomodation"><span>Accomodation</span></a></li>
                                <li><a href="#" data-filter=".portfolio-bars"><span>Bars</span></a></li>
                            </ul>

                            <div class="portfolio portfolio-isotope">
                                <div class="col-sm-3 portfolio-item-isotope portfolio-accomodation">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/01-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Apartman</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#"><i class="fa fa-heart"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>

                                <div class="col-sm-3 portfolio-item-isotope portfolio-accomodation">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/02-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Hotel Resort</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#" class="inactive"><i class="fa fa-heart-o"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>

                                <div class="col-sm-3 portfolio-item-isotope portfolio-restaurant">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/11-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Restaurant</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#" class="inactive"><i class="fa fa-heart-o"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>

                                <div class="col-sm-3 portfolio-item-isotope portfolio-accomodation">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/08-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Motorest</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#"><i class="fa fa-heart"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>

                                <div class="col-sm-3 portfolio-item-isotope portfolio-restaurant">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/09-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Tasty Food</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#" class="inactive"><i class="fa fa-heart-o"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>

                                <div class="col-sm-3 portfolio-item-isotope portfolio-bars">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/14-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Cafeteria</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#"><i class="fa fa-heart"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>

                                <div class="col-sm-3 portfolio-item-isotope portfolio-accomodation">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/03-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Winter Skying</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#" class="inactive"><i class="fa fa-heart-o"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>

                                <div class="col-sm-3 portfolio-item-isotope portfolio-bars">
                                    <div class="box background-white">
                                        <div class="box-picture">
                                            <a href="#">
                                                <img src="{{asset('/img/tmp/works/13-tall.jpg')}}" alt="">
                                                <span></span>
                                            </a>
                                        </div><!-- /.box-picture -->

                                        <div class="box-body">
                                            <h2 class="box-title-plain">
                                                <a href="#">Night Club</a>
                                                <small class="clearfix">Worcester, NYC, NY</small>
                                            </h2><!-- /.box-title-plain -->

                                            <div class="box-content">
                                                <div class="box-meta clearfix">
                                                    <div class="rating pull-left">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div><!-- /.rating -->

                                                    <div class="favourite pull-right">
                                                        <a href="#"><i class="fa fa-heart"></i></a>
                                                    </div><!-- /.fovourite -->
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>
                            </div><!-- /.portfolio -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                </div><!-- /.container -->
                <div class="container">
                    <div class="block-content background-white fullwidth">
                        <div class="block-content-inner">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h3 class="widgetized-title">Most Recent Reviews</h3>

                                    <div class="vertical-tabs clearfix">
                                        <div class="vertical-tab-left col-xs-4 col-sm-3"> <!-- required for floating -->
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs tabs-left">
                                                <li class="active category-red">
                                                    <a href="#automotive" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/car.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Automotive</strong>
                                                            <span>328 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-blue">
                                                    <a href="#castles" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/castle.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Castles</strong>
                                                            <span>231 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-magenta">
                                                    <a href="#church" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/church.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Church</strong>
                                                            <span>432 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-brown">
                                                    <a href="#coffee" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/coffee.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Coffee</strong>
                                                            <span>132 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-orange">
                                                    <a href="#food" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/steak.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Food</strong>
                                                            <span>543 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-brown-dark">
                                                    <a href="#malls" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/shirt.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Cloth Shop</strong>
                                                            <span>342 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-green-light">
                                                    <a href="#restaurants" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/restaurant.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Restaurant</strong>
                                                            <span>732 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-turquiose">
                                                    <a href="#transportation" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/train.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Transport</strong>
                                                            <span>323 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="category-violet">
                                                    <a href="#wine" data-toggle="tab">
                                                        <img src="{{asset('/img/markers/wine-glass.png')}}" alt="">

                                                        <div class="title">
                                                            <strong>Wine</strong>
                                                            <span>87 reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.vertical-tab-left -->

                                        <div class="vertical-tab-right col-xs-8 col-sm-9">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="automotive">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/03.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Mauris
                                                                        fermentum rhoncus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">74 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/05.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Quisque
                                                                        orci urna, tristique eget pharetra</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">69 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vivamus
                                                                        pretium vitae libero at ultrices</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">67 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Praesent
                                                                        hendrerit faucibus nulla</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">95 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/06.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        sodales lorem eget</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">44 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/10.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">80 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="castles">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Quisque
                                                                        orci urna, tristique eget pharetra</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">64 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/02.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Nunc
                                                                        elementum augue massa</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">9 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/05.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Quisque
                                                                        orci urna, tristique eget pharetra</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">71 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Quisque
                                                                        orci urna, tristique eget pharetra</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">82 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/08.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">75 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/05.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">21 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="church">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/03.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        malesuada consectetur hendrerit</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">36 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/04.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vivamus
                                                                        pretium vitae libero at ultrices</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">11 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/10.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vestibulum
                                                                        interdum velit mauris</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">63 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/10.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        malesuada consectetur hendrerit</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">45 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/03.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Praesent
                                                                        hendrerit faucibus nulla</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">95 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/06.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vestibulum
                                                                        interdum velit mauris</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">37 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="coffee">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Nunc
                                                                        elementum augue massa</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">92 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/06.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Mauris
                                                                        fermentum rhoncus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">67 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/01.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Suspendisse
                                                                        adipiscing, tellus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">75 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/01.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Nunc
                                                                        elementum augue massa</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">27 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/09.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">40 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/10.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Praesent
                                                                        hendrerit faucibus nulla</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">90 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="food">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/08.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vestibulum
                                                                        interdum velit mauris</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">70 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">75 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/05.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Mauris
                                                                        fermentum rhoncus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">22 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/10.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">29 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/10.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        malesuada consectetur hendrerit</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">78 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/09.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">40 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="malls">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/06.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vivamus
                                                                        pretium vitae libero at ultrices</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">28 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vivamus
                                                                        pretium vitae libero at ultrices</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">88 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/05.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vestibulum
                                                                        interdum velit mauris</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">33 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/02.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vestibulum
                                                                        interdum velit mauris</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">95 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/08.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Suspendisse
                                                                        adipiscing, tellus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">78 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/05.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        sodales lorem eget</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">48 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="restaurants">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/03.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        sodales lorem eget</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">13 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/09.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        sodales lorem eget</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">3 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/05.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Suspendisse
                                                                        adipiscing, tellus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">26 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/06.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Mauris
                                                                        fermentum rhoncus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">11 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vestibulum
                                                                        interdum velit mauris</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">96 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/10.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Mauris
                                                                        fermentum rhoncus</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">61 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="transportation">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/06.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vivamus
                                                                        pretium vitae libero at ultrices</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">94 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/08.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vivamus
                                                                        pretium vitae libero at ultrices</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">83 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/01.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">22 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        malesuada consectetur hendrerit</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">94 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/07.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Vestibulum
                                                                        interdum velit mauris</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">27 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/02.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Quisque
                                                                        orci urna, tristique eget pharetra</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">51 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->

                                                <div class="tab-pane" id="wine">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/01.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Quisque
                                                                        orci urna, tristique eget pharetra</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">47 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/06.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Nunc
                                                                        elementum augue massa</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">62 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/03.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Etiam
                                                                        sodales lorem eget</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">50 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/02.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Praesent
                                                                        hendrerit faucibus nulla</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">53 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/09.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Nunc
                                                                        elementum augue massa</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">97 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                        <div class="review">
                                                            <div class="review-image">
                                                                <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">
                                                                    <img src="{{asset('/img/tmp/reviews/09.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                            </div><!-- /.review-image -->

                                                            <div class="review-title">
                                                                <h2>
                                                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html">Aenean
                                                                        consequat ut sapien</a></h2>

                                                                <div class="rating pull-left">
                                                                    <a href="#">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-empty"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </a>
                                                                </div>

                                                                <span class="review-count">41 reviews</span>
                                                            </div><!-- /.review-title -->

                                                            <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/directory/detail.html"
                                                               class="review-read-more">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a><!-- /.review-read-more -->
                                                        </div>
                                                    </div><!-- /.reviews -->
                                                </div><!-- /.tab-pane -->
                                            </div><!-- /.tab-content -->
                                        </div><!-- /.vertical-tab-right -->
                                    </div><!-- /.vertical-tabs -->                </div>

                                <div class="sidebar col-sm-3">
                                    <div class="widget">
                                        <h3>Popular</h3>

                                        <div class="content-row-small">
                                            <div class="row">
                                                <div class="content-row-small-picture-standard squared col-xs-3 col-sm-4">
                                                    <a href="#">
                                                        <img src="{{asset('/img/tmp/reviews/07.jpg')}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="content-row-small-body col-xs-9 col-sm-8">
                                                    <h4><a href="#">Pellentesque mi eros, fermentum vitae fermentum
                                                            et</a></h4>

                                                    <div class="content-row-small-meta">By John Doe / 02 May, 2014</div>
                                                    <!-- /.content-row-small-meta -->
                                                </div><!-- /.content-row-body -->
                                            </div><!-- /.row -->
                                        </div><!-- /.content-row-small -->

                                        <div class="content-row-small">
                                            <div class="row">
                                                <div class="content-row-small-picture-standard squared col-xs-3 col-sm-4">
                                                    <a href="#">
                                                        <img src="{{asset('/img/tmp/reviews/08.jpg')}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="content-row-small-body col-xs-9 col-sm-8">
                                                    <h4><a href="#">Donec augue justo, interdum ullamcorper sapien sit
                                                            amet</a></h4>

                                                    <div class="content-row-small-meta">By John Doe / 02 May, 2014</div>
                                                    <!-- /.content-row-small-meta -->
                                                </div><!-- /.content-row-body -->
                                            </div><!-- /.row -->
                                        </div><!-- /.content-row-small -->

                                        <div class="content-row-small">
                                            <div class="row">
                                                <div class="content-row-small-picture-standard squared col-xs-3 col-sm-4">
                                                    <a href="#">
                                                        <img src="{{asset('/img/tmp/reviews/10.jpg')}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="content-row-small-body col-xs-9 col-sm-8">
                                                    <h4><a href="#">Aenean ut libero posuere, tincidunt arcu eu</a></h4>

                                                    <div class="content-row-small-meta">By John Doe / 02 May, 2014</div>
                                                    <!-- /.content-row-small-meta -->
                                                </div><!-- /.content-row-body -->
                                            </div><!-- /.row -->
                                        </div><!-- /.content-row-small -->

                                        <div class="content-row-small">
                                            <div class="row">
                                                <div class="content-row-small-picture-standard squared col-xs-3 col-sm-4">
                                                    <a href="#">
                                                        <img src="{{asset('/img/tmp/reviews/11.jpg')}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="content-row-small-body col-xs-9 col-sm-8">
                                                    <h4><a href="#">In hac habitasse platea dictumst. Aliquam dui
                                                            enim</a></h4>

                                                    <div class="content-row-small-meta">By John Doe / 02 May, 2014</div>
                                                    <!-- /.content-row-small-meta -->
                                                </div><!-- /.content-row-body -->
                                            </div><!-- /.row -->
                                        </div><!-- /.content-row-small -->

                                        <div class="content-row-small">
                                            <div class="row">
                                                <div class="content-row-small-picture-standard squared col-xs-3 col-sm-4">
                                                    <a href="#">
                                                        <img src="{{asset('/img/tmp/reviews/12.jpg')}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="content-row-small-body col-xs-9 col-sm-8">
                                                    <h4><a href="#">Nam accumsan nulla sit amet elementum imperdiet</a>
                                                    </h4>

                                                    <div class="content-row-small-meta">By John Doe / 02 May, 2014</div>
                                                    <!-- /.content-row-small-meta -->
                                                </div><!-- /.content-row-body -->
                                            </div><!-- /.row -->
                                        </div><!-- /.content-row-small -->

                                        <div class="content-row-small">
                                            <div class="row">
                                                <div class="content-row-small-picture-standard squared col-xs-3 col-sm-4">
                                                    <a href="#">
                                                        <img src="{{asset('/img/tmp/reviews/07.jpg')}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="content-row-small-body col-xs-9 col-sm-8">
                                                    <h4><a href="#">Pellentesque mi eros, fermentum vitae fermentum
                                                            et</a></h4>

                                                    <div class="content-row-small-meta">By John Doe / 02 May, 2014</div>
                                                    <!-- /.content-row-small-meta -->
                                                </div><!-- /.content-row-body -->
                                            </div><!-- /.row -->
                                        </div><!-- /.content-row-small -->

                                        <a href="#" class="read-more">View More <i class="fa fa-angle-double-right"></i></a>
                                    </div><!-- /.widget -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->

                    <div class="block-content background-secondary background-technology fullwidth">
                        <div class="block-content-inner">
                            <div class="merged-boxes clearfix">
                                <div class="merged-box col-sm-4">
                                    <div class="merged-box-content clearfix">
                                        <h3><i class="fa fa-windows color-windows"></i> Win Phone</h3>

                                        <p>
                                            Nullam in sodales metus, non scelerisque tellus. Quisque a volutpat nunc.
                                            Donec laoreet diam.
                                        </p>

                                        <a href="#" class="merged-box-read-more">Get your app <i
                                                    class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div><!-- /.merged-box -->

                                <div class="merged-box col-sm-4">
                                    <div class="merged-box-content clearfix">
                                        <h3><i class="fa fa-apple color-apple"></i> iPhone</h3>

                                        <p>
                                            Nullam in sodales metus, non scelerisque tellus. Quisque a volutpat nunc.
                                            Donec laoreet diam.
                                        </p>

                                        <a href="#" class="merged-box-read-more">Get your app <i
                                                    class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div><!-- /.merged-box -->

                                <div class="merged-box col-sm-4">

                                    <div class="merged-box-content clearfix">
                                        <h3><i class="fa fa-android color-android"></i> Android</h3>

                                        <p>
                                            Nullam in sodales metus, non scelerisque tellus. Quisque a volutpat nunc.
                                            Donec laoreet diam.
                                        </p>

                                        <a href="#" class="merged-box-read-more">Get your app <i
                                                    class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div><!-- /.merged-box -->
                            </div><!-- /.merged-boxes -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                    <div class="block-content directory-carousel-wrapper fullwidth background-gray">
                        <div class="block-content-inner carousel">
                            <h3 class="center mb40 widgetized-title">Most Recent Spots</h3>

                            <div class="directory-carousel bxslider">
                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/01-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Special Apartman</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/02-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Hotel Resort</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/11-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Dinner for Two</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/08-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Romantic Room</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/09-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Tasty Food</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/14-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Cafeteria</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/03-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Winter Skying</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                                <div class="box background-white">
                                    <div class="box-picture">
                                        <a href="#">
                                            <img src="{{asset('/img/tmp/works/13-tall.jpg')}}" alt="">
                                            <span></span>
                                        </a>
                                    </div><!-- /.box-picture -->

                                    <div class="box-body">
                                        <h2 class="box-title-plain">
                                            <a href="#">Night Club</a>
                                            <small class="clearfix">Worcester, New Your City, NY</small>
                                        </h2><!-- /.box-title-plain -->

                                        <div class="box-content">
                                            <div class="box-meta">
                                                <div class="rating center">
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </a>
                                                </div><!-- /.rating -->
                                            </div>
                                        </div><!-- /.box-content -->
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!-- /.bxslider -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                    <div class="block-content background-map background-white fullwidth">
                        <div class="block-content-inner">
                            <div class="row">
                                <div class="col-sm-3 center">
                                    <i class="large-icon color-primary entypo paper-plane"></i>
                                    <h4>Unique Design</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna</p>
                                </div>

                                <div class="col-sm-3 center">
                                    <i class="large-icon color-primary entypo archive"></i>
                                    <h4>Perfect Files</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna</p>
                                </div>

                                <div class="col-sm-3 center">
                                    <i class="large-icon color-primary entypo star"></i>
                                    <h4>Creative Layout</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna</p>
                                </div>

                                <div class="col-sm-3 center">
                                    <i class="large-icon color-primary entypo lifebuoy"></i>
                                    <h4>Professional Support</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna</p>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                </div><!-- /.container -->

            </div><!-- /#main-inner -->
        </div><!-- /#main -->
    </div><!-- /#main-wrapper -->

    <div id="footer-wrapper">
        <div id="footer">
            <div id="footer-inner">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="widget">
                                    <h3>About</h3>

                                    <div class="list-group clean">
                                        <a href="#" class="list-group-item">Terms &amp; Conditions</a>
                                        <a href="#" class="list-group-item">Advertisment</a>
                                        <a href="#" class="list-group-item">Press Information</a>
                                        <a href="#" class="list-group-item">Our Team</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="widget">
                                    <h3>Help</h3>

                                    <div class="list-group clean">
                                        <a href="#" class="list-group-item">Tutorials</a>
                                        <a href="#" class="list-group-item">FAQ</a>
                                        <a href="#" class="list-group-item">Handbook</a>
                                        <a href="#" class="list-group-item">API</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="widget">
                                    <h3>Carrer</h3>

                                    <div class="list-group clean">
                                        <a href="#" class="list-group-item">PHP Guru</a>
                                        <a href="#" class="list-group-item">JavaScript Ninja</a>
                                        <a href="#" class="list-group-item">HTML Rockstar</a>
                                        <a href="#" class="list-group-item">Project Manager</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="widget">
                                    <h3>Language</h3>

                                    <div class="list-group clean">
                                        <a href="#" class="list-group-item"><img src="{{asset('/img/flags/en.png')}}"
                                                                                 alt="en" title="English"> English</a>
                                        <a href="#" class="list-group-item"><img src="{{asset('/img/flags/de.png')}}"
                                                                                 alt="en" title="German"> German</a>
                                        <a href="#" class="list-group-item"><img src="{{asset('/img/flags/it.png')}}"
                                                                                 alt="en" title="Italian"> Italian</a>
                                        <a href="#" class="list-group-item"><img src="{{asset('/img/flags/fr.png')}}"
                                                                                 alt="en" title="French"> French</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-content block-content-small-padding fullwidth background-primary-medium">
                            <div class="block-content-inner">
                                <ul class="glossary">
                                    <li><a href="#">A</a></li>
                                    <li><a href="#">B</a></li>
                                    <li><a href="#">C</a></li>
                                    <li><a href="#">D</a></li>
                                    <li><a href="#">E</a></li>
                                    <li><a href="#">F</a></li>
                                    <li><a href="#">G</a></li>
                                    <li><a href="#">H</a></li>
                                    <li><a href="#">I</a></li>
                                    <li><a href="#">J</a></li>
                                    <li><a href="#">K</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">N</a></li>
                                    <li><a href="#">O</a></li>
                                    <li><a href="#">P</a></li>
                                    <li><a href="#">Q</a></li>
                                    <li><a href="#">R</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">T</a></li>
                                    <li><a href="#">U</a></li>
                                    <li><a href="#">V</a></li>
                                    <li><a href="#">W</a></li>
                                    <li><a href="#">X</a></li>
                                    <li><a href="#">Y</a></li>
                                    <li><a href="#">Z</a></li>
                                </ul>
                            </div><!-- /.block-content-inner -->
                        </div><!-- /.block-content -->

                        <div class="block-content fullwidth block-content-small-padding background-primary-dark">
                            <div class="block-content-inner">
                                <div class="social-stripe center">
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <a href="#" class="dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>

                                    <a href="#" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                    <a href="#" class="pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>

                                    <a href="#" class="dropbox">
                                        <i class="fa fa-dropbox"></i>
                                    </a>

                                    <a href="#" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                    <a href="#" class="foursquare">
                                        <i class="fa fa-foursquare"></i>
                                    </a>

                                    <a href="#" class="instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div><!-- /.social-stripe -->
                            </div><!-- /.block-content-inner -->
                        </div><!-- /.block-content -->                                </div><!-- /.container -->
                </div><!-- /.footer-top -->

                <div class="footer-bottom">
                    <div class="container">
                        <nav class="clearfix">
                            <ul class="nav navbar-nav footer-nav">
                                <li>
                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/automotive/index.html">Automotive</a>
                                </li>
                                <li><a href="index.html">Directory</a></li>
                                <li>
                                    <a href="../../../../../../../Users/ricard/Documents/Restaurants/Templates/director/demo/real-estate/index.html">Real
                                        Estate</a></li>
                            </ul><!-- /.nav -->
                        </nav>

                        <div class="copyright">
                            Designed by <a href="http://themeforest.com/user/themefire">ThemeFire</a> / Assembled in <a
                                    href="http://pragmaticmates.com">Pragmatic Mates</a>
                        </div>
                    </div><!-- /.container -->
                </div><!-- /.footer-bottom -->
            </div><!-- /#footer-inner -->
        </div><!-- /#footer -->
    </div><!-- /#footer-wrapper -->
</div><!-- /#page -->

<script type="text/javascript" src="{{asset('/js/libraries/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{asset('/js/libraries/gmap3.clusterer.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/libraries/gmap3.infobox.js')}}"></script>

<script type="text/javascript" src="{{asset('/libraries/bxslider/jquery.bxslider.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/chosen/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/isotope/jquery.isotope.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('/libraries/rangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js')}}"></script>

<script type="text/javascript" src="{{asset('/libraries/flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/flot/jquery.flot.canvas.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/flot/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/flot/jquery.flot.time.js')}}"></script>

<script type="text/javascript" src="{{asset('/libraries/bootstrap/javascripts/bootstrap/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/bootstrap/javascripts/bootstrap/collapse.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/bootstrap/javascripts/bootstrap/dropdown.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/bootstrap/javascripts/bootstrap/tab.js')}}"></script>
<script type="text/javascript" src="{{asset('/libraries/bootstrap/javascripts/bootstrap/transition.js')}}"></script>

<script type="text/javascript" src="{{asset('/js/map.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/graph.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/director.js')}}"></script>


</body>
</html>

<!-- Localized -->