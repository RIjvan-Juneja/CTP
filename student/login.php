<?php
if (isset($_SESSION['enrollment_number'])) {
    $enrollment_number = $_SESSION['enrollment_number'];
}else{
    // header("Location: application.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("../common/importhead.php");
    include("../common/importcss.php");
    ?>
</head>

<body>
    <div class="container for-nav">
        <?php include("../common/importheader.php") ?>
    </div>
    <?php include("../common/importheader2.php") ?>

    <div class="container" style="padding:20px">
        <div class="row">
            <div class="col-md-8 form-wid">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link text-dark active" id="reg-form-tab" data-bs-toggle="tab"
                            data-bs-target="#reg-form" type="button" role="tab" aria-controls="reg-form"
                            aria-selected="true">Regisration
                        </button>
                        <button class="nav-link text-dark" id="login-form-tab" data-bs-toggle="tab"
                            data-bs-target="#login-form" type="button" role="tab" aria-controls="login-form"
                            aria-selected="false">Login</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="reg-form" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <form id="regForm">
                            <div class="form-group py-2">
                                <label class="pb-2">Enrollment Number</label>
                                <input type="number" class="form-control" id="er_num">
                            </div>
                            <div class="form-check py-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Accept rules & regulation</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Apply</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="login-form" role="tabpanel" aria-labelledby="login-form-tab"
                        tabindex="0">
                        <form action="api/slogin.php" method="POST">
                            <div class="form-group py-2">
                                <label for="exampleInputEmail1" class="pb-2">Enrollment Number</label>
                                <input type="number" class="form-control" name="enrollment_num">
                            </div>
                            <div class="form-group py-2">
                                <label for="exampleInputPassword1" class="pb-2">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
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

    <script>
        $(document).ready(function () {
            $("#regForm").submit(function (event) {
                event.preventDefault(); // Prevent the default form submission
                // alert("Hello!");
                // Get form input values
                const enrollment = $("#er_num").val();
                // alert(enrollment)
                // const password = $("#password").val();

                // // Create a JSON object
                const jsonData = {
                    enrollment: enrollment,
                };

                // Send the JSON data to the PHP file using jQuery AJAX
                $.ajax({
                    type: "POST",
                    url: "api/registration.php",
                    data: JSON.stringify(jsonData),
                    contentType: "application/json",
                    success: function (response) {
                        // Handle the response from the PHP file
                        const parsedData = JSON.parse(response);

                        // Access the "message" property and display it
                        const message = parsedData.message;
                        alert(message)
                    }
                });
            });
        });
    </script>

    <?php
    include("../common/importfooter.php");
    include("../common/importjs.php");
    ?>

</body>

</html>