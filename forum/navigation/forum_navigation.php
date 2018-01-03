<nav class="navbar navbar-default forum_navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="#" class="dropdown-toggle collapsed hidden-lg hidden-md" data-toggle="collapse" data-target="#profile-dropdown"
               role="button" aria-haspopup="true" aria-expanded="false" style="position: absolute;right: 12%;">
                <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" style="height: 50px">
                <ul class="dropdown-menu" id="profile-dropdown">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </a>
            <div class="wrap ">
                <div class="search hidden-lg hidden-md">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <a class="navbar-brand" href="#"><img src="../design/assets/images/logos.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li ><a href="forum_answer.php">Answer</a></li>
<!--                <li><a href="#">Notification</a></li>-->

            </ul>
            <div class="wrap">
                <div class="search hidden-xs">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right ">
                <li class="dropdown profile_dropdown">
                    <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"/>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
                <li class="answer-btn"><a href="#" data-toggle="modal" data-target="#questionModal">Add Question</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<!-- Question Modal -->
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="photo">
                    <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"/>
                </div>
                <div class="content">
                    <div class="text">
                        <h4>Susant Shrestha&nbsp<span style="font-size:16px">added</span></h4>
                        <h6><input type="text" placeholder="Start with:What,Where,How,Why,etc?"></h6>
                    </div>
                    <div class="btn"><span></span></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Question</button>
            </div>
        </div>
    </div>
</div>