<style>
    body {
        font-family: Helvetica, Arial, sans-serif;
        color: #45a1abff;
        background-color: #E2F3F4;
    }
    .top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 5em;
        padding-right: 5em;
        padding-top: 2em;
    }
    .top2 {
        text-align: center;
        width: 80%;
        font-size: 3em;
    }
    .top3 {
        width: 20%;
    }
    #applicant_image {
        width: 270px;
        height: 270px;
        border: 2px solid #45a1abff;
    }
    #applicant_signature {
        margin-top: 1em;
        width: 270px;
        height: 75px;
        border: 2px solid #45a1abff;
    }
    #personal_category {
        background-color: #6DC7D1;
        border: 2px solid #45a1abff;
        color: #E2F3F4;
        padding-left: 2em;
        border-radius: 20px;
    }
    .layout1 {
        display: flex;
        justify-content: space-between;
        padding-left: 2.5em;
        padding-right: 2.5em;
        border: 2px solid;
        border-radius: 10px;
        padding-bottom: 2.5em;
        margin-top: 1.5em;
        margin-left: 1em;
        margin-right: 1em;
    }
    .layout2 {
        display: flex;
        justify-content: space-between;
        padding-left: 2.5em;
        padding-right: 2.5em;
    }
    .personal_detail {
        width: 50%;
        text-align: left;
    }
    .personal_detail2 {
        width: 50%;
        text-align: left;
    }
    .personal_detail2_2 {
        width: 25%;
        text-align: left;
    }
    .personal_detail3_3 {
        width: 25%;
        text-align: left;
    }
    .personal_detail4 {
        width: 50%;
        text-align: left;
        border: 2px solid #45a1abff;
        border-radius: 10px;
        padding: 0 1em 1em 1em;
    }
    .personal_detail5 {
        margin-left: 1.5em;
        padding-top: 1em;
        width: 50%;
        text-align: center;
    }

    .divider {
        display: flex;
        width: 100%;
        padding-top: 1em;
    }
    b {
        flex: 0 0 30%;         
        font-size: 1.2em;
    }
    .underline {
        flex: 1;               
        border-bottom: 1px solid #45a1abff;
        padding: 2px 5px;      
    }
</style>

<?php
    if(isset($_POST["biodata"])){
        // PERSONAL DETAILS
        $applicant_position      = filter_input(INPUT_POST, "position_desired", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_posdate       = filter_input(INPUT_POST, "date", FILTER_UNSAFE_RAW);
        $applicant_name          = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_gender        = filter_input(INPUT_POST, "gender", FILTER_UNSAFE_RAW);
        $applicant_cityaddress   = filter_input(INPUT_POST, "city_address", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_provaddress   = filter_input(INPUT_POST, "prov_address", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_telephone     = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_NUMBER_INT);
        $applicant_cellphone     = filter_input(INPUT_POST, "cellphone", FILTER_SANITIZE_NUMBER_INT);
        $applicant_email         = filter_input(INPUT_POST, "email_address", FILTER_SANITIZE_EMAIL);
        $applicant_dateofbirth   = filter_input(INPUT_POST, "dateofbirth", FILTER_UNSAFE_RAW);
        $applicant_birthplace    = filter_input(INPUT_POST, "birthplace", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_civilstatus   = filter_input(INPUT_POST, "civilstatus", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_citizenship   = filter_input(INPUT_POST, "citizenship", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_height        = filter_input(INPUT_POST, "height", FILTER_SANITIZE_NUMBER_INT);
        $applicant_weight        = filter_input(INPUT_POST, "weight", FILTER_SANITIZE_NUMBER_INT);
        $applicant_religion      = filter_input(INPUT_POST, "religion", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_spouse        = filter_input(INPUT_POST, "spouse", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_spouse_occupation = filter_input(INPUT_POST, "spouse_occupation", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_childrens1    = filter_input(INPUT_POST, "childrens1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_childrenbirth1= filter_input(INPUT_POST, "childrenbirth1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_childrens2    = filter_input(INPUT_POST, "childrens2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_childrenbirth2= filter_input(INPUT_POST, "childrenbirth2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_childrens3    = filter_input(INPUT_POST, "childrens3", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_childrenbirth3= filter_input(INPUT_POST, "childrenbirth3", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_fathername    = filter_input(INPUT_POST, "fathername", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_fatheroccupation = filter_input(INPUT_POST, "fatheroccupation", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_mothername    = filter_input(INPUT_POST, "mothername", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_motheroccupation = filter_input(INPUT_POST, "motheroccupation", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_dialect       = filter_input(INPUT_POST, "dialect", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_emergencyname = filter_input(INPUT_POST, "emergencyname", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_hisheraddress = filter_input(INPUT_POST, "hisheraddress", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_hishertelephone = filter_input(INPUT_POST, "hishertelephone", FILTER_SANITIZE_NUMBER_INT);

        // EDUCATIONAL BACKGROUND
        $applicant_elementary    = filter_input(INPUT_POST, "elementary", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_elemyear      = filter_input(INPUT_POST, "elemyear", FILTER_UNSAFE_RAW);
        $applicant_highschool    = filter_input(INPUT_POST, "highschool", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_highschoolyear= filter_input(INPUT_POST, "highschoolyear", FILTER_UNSAFE_RAW);
        $applicant_college       = filter_input(INPUT_POST, "college", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_collegeyear   = filter_input(INPUT_POST, "collegeyear", FILTER_UNSAFE_RAW);
        $applicant_degree        = filter_input(INPUT_POST, "degree", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_skills        = filter_input(INPUT_POST, "skills", FILTER_SANITIZE_SPECIAL_CHARS);

        // WORK BACKGROUND
        $applicant_companyname1  = filter_input(INPUT_POST, "companyname1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_position1     = filter_input(INPUT_POST, "position1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_from1         = filter_input(INPUT_POST, "from1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_to1           = filter_input(INPUT_POST, "to1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_companyname2  = filter_input(INPUT_POST, "companyname2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_position2     = filter_input(INPUT_POST, "position2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_from2         = filter_input(INPUT_POST, "from2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_to2           = filter_input(INPUT_POST, "to2", FILTER_SANITIZE_SPECIAL_CHARS);

        // CHARACTER REFERENCE
        $applicant_characname1   = filter_input(INPUT_POST, "characname1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_characcompany1= filter_input(INPUT_POST, "characcompany1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_characpos1    = filter_input(INPUT_POST, "characpos1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_characcontact1= filter_input(INPUT_POST, "characcontact1", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_characname2   = filter_input(INPUT_POST, "characname2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_characcompany2= filter_input(INPUT_POST, "characcompany2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_characpos2    = filter_input(INPUT_POST, "characpos2", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_characcontact2= filter_input(INPUT_POST, "characcontact2", FILTER_SANITIZE_SPECIAL_CHARS);

        // IDS AND REQUIREMENTS
        $applicant_rescert       = filter_input(INPUT_POST, "rescert", FILTER_SANITIZE_NUMBER_INT);
        $applicant_issuedat      = filter_input(INPUT_POST, "issuedat", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_issuedon      = filter_input(INPUT_POST, "issuedon", FILTER_UNSAFE_RAW);
        $applicant_sss           = filter_input(INPUT_POST, "sss", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_tin           = filter_input(INPUT_POST, "tin", FILTER_SANITIZE_SPECIAL_CHARS);
        $applicant_nbi           = filter_input(INPUT_POST, "nbi", FILTER_SANITIZE_NUMBER_INT);
        $applicant_passport      = filter_input(INPUT_POST, "passport", FILTER_SANITIZE_NUMBER_INT);
    }


    //FILE UPLOADS - Photo
    if (isset($_POST['biodata'])) {
        $target_dir = "uploads/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
        
    $file_name2 = basename($_FILES["applicant_photo"]["name"]);
    $target_file2 = $target_dir . $file_name2;
    $uploadOk = 1;

    $fileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

    $newFileName2 = uniqid("file_", true) . "." . $fileType;
    $target_file2 = $target_dir . $newFileName2;

    if (file_exists($target_file2)) {
        echo "<h1>Sorry, file already exists.</h1><br>";
        $uploadOk = 0;
    }

    if ($_FILES["applicant_photo"]["size"] > 2 * 1024 * 1024) {
        echo "<h1>Sorry, your file is too large (max 2MB).</h1><br>";
        $uploadOk = 0;
    }

    $allowed_types = ["jpg", "jpeg", "png", "gif", "pdf"];
    if (!in_array($fileType, $allowed_types)) {
        echo "<h1>Sorry, only JPG, JPEG, PNG, GIF & PDF files are allowed.</h1><br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<h1>Your file was not uploaded.</h1><br>";
    } else {
        if (move_uploaded_file($_FILES["applicant_photo"]["tmp_name"], $target_file2)) {
            //echo "<h1>The file ". htmlspecialchars($file_name). " has been uploaded successfully.</h1><br>";
        } else {
            //echo "<h1>Sorry, there was an error uploading your file.</h1><br>";
        }
    }
    } else {
        echo "<h1>No file uploaded.</h1>";
    }

    //FILE UPLOADS - Signature
    if (isset($_POST['biodata'])) {
        $target_dir = "uploads/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
        
    $file_name1 = basename($_FILES["applicant_signature"]["name"]);
    $target_file1 = $target_dir . $file_name1;
    $uploadOk = 1;

    $fileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));

    $newFileName1 = uniqid("file_", true) . "." . $fileType;
    $target_file1 = $target_dir . $newFileName1;

    if (file_exists($target_file1)) {
        echo "<h1>Sorry, file already exists.</h1><br>";
        $uploadOk = 0;
    }

    if ($_FILES["applicant_signature"]["size"] > 2 * 1024 * 1024) {
        echo "<h1>Sorry, your file is too large (max 2MB).</h1><br>";
        $uploadOk = 0;
    }

    $allowed_types = ["jpg", "jpeg", "png", "gif", "pdf"];
    if (!in_array($fileType, $allowed_types)) {
        echo "<h1>Sorry, only JPG, JPEG, PNG, GIF & PDF files are allowed.</h1><br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<h1>Your file was not uploaded.</h1><br>";
    } else {
        if (move_uploaded_file($_FILES["applicant_signature"]["tmp_name"], $target_file1)) {
            //echo "<h1>The file ". htmlspecialchars($file_name). " has been uploaded successfully.</h1><br>";
        } else {
            //echo "<h1>Sorry, there was an error uploading your file.</h1><br>";
        }
    }
    } else {
        echo "<h1>No file uploaded.</h1>";
    }
?>

<div class="top">
    <div class="top2">
        <h1>BIO-DATA</h1>
    </div>
    <div class="top3">
        <img id="applicant_image" alt="biodata-image" src=<?php echo $target_dir . $newFileName2;?>></img>
    </div>
</div><br><br><br>

<div id="personal_category">
    <h2>PERSONAL DATA</h2>
</div>

<div class="layout1">
    <div class="personal_detail">
        <div class="divider">
            <b>Position Desired:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_position ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Name:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_name ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>City Address:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_cityaddress ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>Province:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_provaddress ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Telephone:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_telephone ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>E-mail Address:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_email ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Date of Birth:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_dateofbirth ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Civil Status:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_civilstatus ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Height:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_height ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Religion:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_religion ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Spouse:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_spouse ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>Name of Children:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_childrens1 ?? ""); ?>
            </span>
        </div>
        <div class="divider"><b>&nbsp;</b><span class="underline"></span></div>
        <div class="divider"><b>&nbsp;</b><span class="underline"></span></div>
        <div class="divider">
            <b>Father's Name:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_fathername ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Mother's Name:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_mothername ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Language or Dialect Spoken and Written:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_dialect ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Person to be contacted in case of emergency:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_emergencyname ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>His/Her Address and Telephone:</b>
            <span class="underline">
                <?php echo $applicant_hisheraddress . $applicant_hishertelephone; ?>
            </span>
        </div>                  
    </div>

    <div class="personal_detail2">
        <div class="divider">
            <b>Date:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_posdate ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Gender:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_gender ?? ""); ?>
            </span>
        </div>
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider">
            <b>Cellphone:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_cellphone ?? ""); ?>
            </span>
        </div> 
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider">
            <b>Place of Birth:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_birthplace ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Citizenship:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_citizenship ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Weight:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_weight ?? ""); ?>
            </span>
        </div>
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider">
            <b>Occupation:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_spouse_occupation ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Date of Birth:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_childrenbirth1 ?? ""); ?>
            </span>
        </div>
        <div class="divider"><b>&nbsp;</b><span class="underline"></span></div>
        <div class="divider"><b>&nbsp;</b><span class="underline"></span></div>
        <div class="divider">
            <b>Occupation:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_fatheroccupation ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Occupation:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_motheroccupation ?? ""); ?>
            </span>
        </div>             
    </div>
</div><br><br><br>

<div id="personal_category">
    <h2>EDUCATIONAL BACKGROUND</h2>
</div>

<div class="layout1">
    <div class="personal_detail">
        <div class="divider">
            <b>Elementary:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_elementary ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Highschool:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_highschool ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>College:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_college ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>Degree Received:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_degree ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Special Skills:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_skills ?? ""); ?>
            </span>
        </div>
    </div>

    <div class="personal_detail2">
        <div class="divider">
            <b>Year Graduated:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_elemyear ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Year Graduated:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_highschoolyear ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Year Graduated:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_collegeyear ?? ""); ?>
            </span>
        </div>            
    </div>
</div><br><br><br>

<div id="personal_category">
    <h2>EMPLOYMENT RECORD</h2>
</div>

<div class="layout1">
    <div class="personal_detail">
        <div class="divider">
            <b>Company Name:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_companyname1 ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Position:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_position1 ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>Company:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_companyname2 ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>Position:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_position2 ?? ""); ?>
            </span>
        </div>
    </div>

    <div class="personal_detail2_2">
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider">
            <b>From:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_from1 ?? ""); ?>
            </span>
        </div>
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider">
            <b>From:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_from2 ?? ""); ?>
            </span>
        </div> 
    </div>

    <div class="personal_detail3_3">
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider">
            <b>To:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_to1 ?? ""); ?>
            </span>
        </div>
        <div class="divider"><b>&nbsp;</b><span></span></div>
        <div class="divider">
            <b>To:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_to2 ?? ""); ?>
            </span>
        </div>          
    </div>
</div><br><br><br>

<div id="personal_category">
    <h2>CHARACTER REFERENCE</h2>
</div>

<div class="layout1">
    <div class="personal_detail">
        <div class="divider">
            <b>Name:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characname1 ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Position:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characpos1 ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>Name:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characname2 ?? ""); ?>
            </span>
        </div> 
        <div class="divider">
            <b>Position:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characpos2 ?? ""); ?>
            </span>
        </div>
    </div>

    <div class="personal_detail2">
        <div class="divider">
            <b>Company:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characcompany1 ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Contact No:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characcontact1 ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Company:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characcompany2 ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Contact No:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_characcontact2 ?? ""); ?>
            </span>
        </div>            
    </div>
</div><br><br><br>

<div class="layout2">
    <div class="personal_detail4">
        <div class="divider">
            <b>Res. Cert. No:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_rescert ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>Issued at:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_issuedat ?? ""); ?>
            </span>
        </div>  
        <div class="divider">
            <b>Issued on:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_issuedon ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>SSS:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_sss ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>TIN:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_tin ?? ""); ?>
            </span>
        </div>
        <div class="divider">
            <b>NBI No:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_nbi ?? ""); ?>
            </span>
        </div>  
        <div class="divider">
            <b>Passport No:</b>
            <span class="underline">
                <?php echo htmlspecialchars($applicant_passport ?? ""); ?>
            </span>
        </div>           
    </div>
    <div class="personal_detail5">
        <b>I here certify that the above information is true and correct
            to the best of my knowledge and belief. I also understand that any
            misinterpretation will be considered reason for withdrawal of an offer
            or subsequent dismissal if employed.
        </b>
        <img id="applicant_signature" alt="biodata-signature" src=<?php echo $target_dir . $newFileName1;?>></img><br><br>
        <b style="text-decoration:overline">Applicant's Signature</b>
    </div>
</div><br><br><br>