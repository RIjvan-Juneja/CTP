<style>
@media only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px) {

    /* Force table to not be like tables anymore */
    table,
    thead,
    tbody,
    th,
    td,
    tr {
        display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    tr {
        border: 1px solid #ccc;
    }

    td {
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%;
    }

    td:before {
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
    }
}
</style>

<!-- code for remove -->
<form id="remove_document_form"></form>

<table class="table table-bordered">
    <tr>
        <td class="center"><b><span>Instructions For Uploading Document </span></b><br></td>
    </tr>
    <tr>
        <td><span style="color: red">Allowed file type :- pdf , jpeg , jpg , png</span><br>
            <span style="color: red">Maximum Allowed File Size :- 5 MB </span>
        </td>
    </tr>
</table>
<hr>
<!-- <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data"> -->

<table class="table table-bordered">

    <form id="form1" action="current_clg_ajax.php" method="post" enctype="multipart/form-data">
        <!-- <table class="table table-bordered"><tr>  -->

        <tr>
            <td class="center"><b>
                    <span style="color: red">*</span>
                    <b><span>Noc Upload</span></b></b></td>
            <td><input id="uploadImage1" type="file" name="image" class="up_a" required /></td>
            <td style="padding-left: 10px;"> <input class="btn up_b  " id="btn1" type="submit" value="Upload"
                    name="myButton"></td>
        </tr>
        <input type="hidden" id="hidden1" name="fileno" value="current_clg_noc" required>
    </form>
   
</table>