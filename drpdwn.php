<html>
    <head>
        
    </head>

    <body>
            <script src="drp.js"></script>
            
            <style>
                        @media (min-width: 767px) {
    .navbar-nav .dropdown-menu .caret {
	transform: rotate(-90deg);
    }
}

                    </style>
                    <script>
                    $(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }

        $('.nav li.open').not($(this).parents("li")).removeClass("open");

        return false;
    });
});

                    </script>
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Navrachana University</a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li></li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schools <b class="caret"></b></a>
            
                                        <ul class="dropdown-menu">
                                            
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp('School Of Business and Law')" data-toggle="dropdown">School Of Busness And Law <b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp1('School Of Engineering and Technology')" data-toggle="dropdown">School Of Engineering and Technology<b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg1"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp2('School Of Environmental Design and Architecture')" data-toggle="dropdown">School Of Environmental Design and Architecture<b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg2"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp3('School Of Libral Studies and Education')" data-toggle="dropdown">School Of Libral Studies and Education<b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg3"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 2 <b class="caret"></b></a>
            
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action [Menu 2.1]</a></li>
                                            <li><a href="#">Another action [Menu 2.1]</a></li>
                                            <li><a href="#">Something else here [Menu 2.1]</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link [Menu 2.1]</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">One more separated link [Menu 2.1]</a></li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown [Menu 2.1] <b class="caret"></b></a>
            
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action [Menu 2.2]</a></li>
                                                    <li><a href="#">Another action [Menu 2.2]</a></li>
                                                    <li><a href="#">Something else here [Menu 2.2]</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link [Menu 2.2]</a></li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown [Menu 2.2] <b class="caret"></b></a>
            
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown [Menu 2.3] <b class="caret"></b></a>
            
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Action [Menu 2.4]</a></li>
                                                                    <li><a href="#">Another action [Menu 2.4]</a></li>
                                                                    <li><a href="#">Something else here [Menu 2.4]</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#">Separated link [Menu 2.4]</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#">One more separated link [Menu 2.4]</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-right" action="#">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search" name="search">
                                      <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                          <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                      </div>
                                    </div>
                                  </form>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                   

    </body>
</html>