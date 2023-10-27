<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("common/importhead.php");
    include("common/importcss.php");
    ?>
</head>

<body>
    <div class="container for-nav">
        <?php include("common/importheader.php") ?>
    </div>
    <?php include("common/importheader2.php") ?>

    <div class="container" style="padding:20px">
        <div class="row">
            <div class="col-md-8 border p-5 form-wid">
                <div class="row">
                    <form>
                        <h2>Login Form</h2>
                        <hr>
                        <div class="form-group py-2">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group py-2">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-3 tab-wid" style="width: auto;">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link text-dark active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">About Us
                        </button>
                        <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Profile</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <div class="item-list">
                            <ul>
                                <li class="views-row views-row-1 views-row-odd views-row-first">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/achievement" class="local">Achievement</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-2 views-row-even">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/vision" class="local">Vision &amp; Mission </a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-3 views-row-odd">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/student-affairs" class="local">Student Affairs</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-4 views-row-even">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/budgets" class="local">Budgets</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-5 views-row-odd">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/institutes-glance" class="local">Institutes (Glance)</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-3 views-row-odd">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/student-affairs" class="local">Student Affairs</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-2 views-row-even">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/vision" class="local">Vision &amp; Mission </a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                        tabindex="0">
                        <div class="item-list">
                            <ul>

                                <li class="views-row views-row-2 views-row-even">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/vision" class="local">Vision &amp; Mission </a>
                                        </span>
                                    </div>
                                </li>

                                <li class="views-row views-row-4 views-row-even">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/budgets" class="local">Budgets</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-1 views-row-odd views-row-first">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/achievement" class="local">Achievement</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-5 views-row-odd">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/institutes-glance" class="local">Institutes (Glance)</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-3 views-row-odd">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/student-affairs" class="local">Student Affairs</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-3 views-row-odd">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/student-affairs" class="local">Student Affairs</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="views-row views-row-2 views-row-even">
                                    <div class="views-field views-field-title">
                                        <span class="field-content">
                                            <a href="/vision" class="local">Vision &amp; Mission </a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
    include("common/importfooter.php");
    include("common/importjs.php");
    ?>

</body>

</html>