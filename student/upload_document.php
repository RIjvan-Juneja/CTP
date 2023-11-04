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

   

    <form id="form1" action="ajaxupload.php" method="post" enctype="multipart/form-data">
        <!-- <table class="table table-bordered"><tr>  -->

        <tr>
            <td class="center"><b>
                    <span style="color: red">*</span>
                    <b><span>Aadhar card</span></b></b></td>
            <td><input id="uploadImage1" type="file" name="image" class="up_a" required /></td>
            <td style="padding-left: 10px;"> <input class="btn up_b  " id="btn1" type="submit" value="Upload"
                    name="myButton"><input style="display:none;" type="button" data-col_name="aadharcard"
                    class="btn up_b remove_document" id="rm1" value="Remove" /></td>
            <td class="view_aadharcard" style="display:none;"><a target="_blank" id="view_aadharcard" download><i
                        class="fa fa-download" aria-hidden="true"></a target="_blank"></td>
            <!-- </tr></table> -->
        </tr>
        <input type="hidden" id="hidden1" name="fileno" value="Aadhar_card" required>
    </form>

   


    <form id="form2" action="ajaxupload.php" method="post" enctype="multipart/form-data">
        <!-- <table class="table table-bordered"><tr>  -->
        <tr>
            <td class="center"><b>
            <span style="color: red">*</span>

                    <b><span>SSC Marksheet</span></b></b></td>
            <td><input id="uploadImage2" type="file" name="image" class="up_a" required /></td>
            <td style="padding-left: 10px;"> <input class="btn up_b " id="btn2" type="submit" value="Upload"
                    name="myButton"><input style="display:none;" type="button" data-col_name="ssc_marksheet"
                    class="btn up_b remove_document " id="rm2" value="Remove"></td>
            <td class="view_ssc_marksheet" style="display:none;"><a target="_blank" id="view_ssc_marksheet" download><i
                        class="fa fa-download" aria-hidden="true"></a></td>

            <!-- </tr></table> -->
        </tr>
        <input type="hidden" id="hidden2" name="fileno" value="SSC_Marksheet">
    </form>

    <form id="form3" action="ajaxupload.php" method="post" enctype="multipart/form-data">
        <!-- <table class="table table-bordered"><tr>  -->
        <tr>
            <td class="center"><b>
            <span style="color: red">*</span>

                    <b><span>HSC Marksheet/Diploma Certificate</span></b></b></td>
            <td><input id="uploadImage3" type="file" name="image" class="up_a" required /></td>
            <td style="padding-left: 10px;"> <input class="btn up_b " id="btn3" type="submit" value="Upload"
                    name="myButton"><input style="display:none;" type="button" data-col_name="hsc_marksheet"
                    class="btn up_b remove_document" id="rm3" value="Remove"></td>
            <td class="view_hsc_marksheet" style="display:none;"><a target="_blank" id="view_hsc_marksheet" download><i
                        class="fa fa-download" aria-hidden="true"></a></td>

            <!-- </tr></table> -->
        </tr>
        <input type="hidden" id="hidden3" name="fileno" value="HSC_Marksheet">
    </form>

   
    <!-- <form id="form4" action="ajaxupload.php" method="post" enctype="multipart/form-data"> -->
        <!-- <table class="table table-bordered"><tr>  -->
        <!-- <tr>
            <td class="center"><b>
            <span style="color: red">*</span>

                    <b><span>All Degree Marksheet</span></b></b></td>
            <td><input id="uploadImage4" type="file" name="image" class="up_a" required /></td>
            <td style="padding-left: 10px;"> <input class="btn up_b " id="btn4" type="submit" value="Upload"
                    name="myButton"><input style="display:none;" type="button" data-col_name="all_marksheet_till_sem"
                    class="btn up_b remove_document" id="rm4" value="Remove"></td>
            <td class="view_all_marksheet" style="display:none;"><a target="_blank" id="view_all_marksheet" download><i
                        class="fa fa-download" aria-hidden="true"></a></td> -->

            <!-- </tr></table> -->
        <!-- </tr>
        <input type="hidden" id="hidden4" name="fileno" value="ALL_Marksheet">
    </form> -->
    

   

    <form id="form5" action="ajaxupload.php" method="post" enctype="multipart/form-data">
        <!-- <table class="table table-bordered"><tr>  -->
        <tr>
            <td class="center"><b>
            <span style="color: red">*</span>

                    <b><span>All Marksheets</span></b></b></td>
            <td><input id="uploadImage5" type="file" name="image" class="up_a" /></td>
            <td style="padding-left: 10px;"> <input class="btn up_b " id="btn5" type="submit" value="Upload"
                    name="myButton"><input style="display:none;" type="button" data-col_name="other_documents"
                    class="btn up_b remove_document" id="rm5" value="Remove"></td>
            <td class="view_other_documents" style="display:none;"><a target="_blank" id="view_other_documents"
                    download><i class="fa fa-download" aria-hidden="true"></a target="_blank"></td>

            <!-- </tr></table> -->
        </tr>
        <input type="hidden" id="hidden5" name="fileno" value="Other_Documents">
    </form>

</table>