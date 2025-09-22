<style>
    body {
        font-family: Helvetica, Arial, sans-serif;
        font-size: 2em;
        background-color: #E2F3F4;
        color: #2C3E50;
    }
    .column1{
        display: flex;
        margin-top: 0.5em;
        width: 50%;
    }
    .column2{
        display: flex;
        margin-top: .5em;
        padding-left: .3em;
        width: 50%;
    }
    .column3{
        display: flex;
        margin-top: .5em;
        padding-left: .3em;
        width: 100%;
    }
    .column4{
        display: flex;
        margin-top: 0.5em;
        padding-left: .3em;
        width: 40%;
    }
    .column5{
        display: flex;
        margin-top: .5em;
        padding-left: .3em;
        width: 30%;
    }
    .column6{
        display: flex;
        margin-top: .5em;
        padding-left: .3em;
        width: 30%;
    }
    .fields{
        flex: 1;
        height: 40px;
        font-size: 1em;
    }
    .fields2{
        width: 50%;
        height: 40px;
        font-size: 1em;
    }
    .layout1{
        display: flex;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
    .layout2{
        display: flex;
        margin-left: 0.2em;
    }
    .layout3{
        display: flex;
        margin-left: 0.5em;
    }
    #personal_category {
        background-color: #6DC7D1;
        border: 2px solid #45a1abff;
        color: #E2F3F4;
        padding-left: 2em;
        border-radius: 20px;
        font-size: 0.5em;
    }
    .personal_detail4 {
        width: 50%;
        text-align: left;
    }
    .personal_detail5 {
        margin-left: 1.5em;
        padding-top: 1em;
        width: 50%;
        text-align: center;
    }
    .top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 2em;
        padding-right: 2em;
        padding-top: 2em;
        background-color: #E2F3F4;
        color: #6DC7D1;
    }
    .top2 {
        text-align: center;
        width: 80%;
        font-size: 2em;
    }
    .top3 {
        width: 20%;
    }
    #applicant_image {
        width: 270px;
        height: 270px;
        border: 2px solid #6DC7D1;
    }
    #applicant_signature {
        margin-top: 1em;
        width: 270px;
        height: 75px;
        border: 2px solid #45a1abff;
    }
    .box{
        margin-top: 0.5em;
        background-color: #E2F3F4;
        border: 2px solid #45a1abff;
        border-radius: 10px;
        color: #45a1abff;
    }
    .box2{
        display: flex;
        margin-top: 0.5em;
        background-color: #E2F3F4;  
        color: #45a1abff;                
        border: 2px solid #45a1abff;    
    }
    #uploads2{
        display: flex;
        justify-content: center;
    }
    .uploads4{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
    }
    .uploads5{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
    }
    .uploads{
        text-align: center;
    }
    .uploads3 {
        padding: 10px 20px;
        font-size: 1em;
        border-radius: 10px;
        background: #45a1abff;
        color: white;
        border: none;
        cursor: pointer;
    }

    .uploads3:hover {
        background: #6DC7D1;
    }

    input[type="text"], input[type="number"], input[type="date"], input[type="email"]{
        background-color: #E2F3F4;  
        color: #45a1abff;                
        border: 2px solid #45a1abff;     
        padding: 8px;                   
        font-size: 0.7em;               
        border-radius: 10px;             
    }
    input[type="text"]:focus, input[type="number"], input[type="date"], input[type="email"]{
        outline: none;
        box-shadow: 0 0 5px #6DC7D1;
    }
</style>

<form action="biodata.php" method="post" enctype="multipart/form-data">
    <div class="top">
        <div class="top2">
            <h1>BIO-DATA</h1>
        </div>
        <div class="top3">
            <img id="applicant_image"></img>
        </div>
    </div><br><br><br>
    <div id="personal_category">
        <h2>PERSONAL DATA</h2>
    </div>
    <div class="box">
        <div class="layout1">
            <div class="column1">
                <label>Position Desired:</label><input class="fields" type="text" name="position_desired"><br>
            </div>
            <div class="column2">
                <label>Date:</label><input class="fields" type="date" name="date"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Name:</label><input class="fields" type="text" name="name"><br>
            </div>
            <div class="column2">
                <label>Gender:</label><input class="fields" type="radio" value="Male" name="gender">Male<input class="fields" type="radio" value="Male" name="gender">Female<br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>City Address:</label><input class="fields" type="text" name="city_address"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>Prov Address:</label><input class="fields" type="text" name="prov_address"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Telephone:</label><input class="fields" type="number" name="telephone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"><br>
            </div>
            <div class="column2">
                <label>Cellphone:</label><input class="fields" type="number" name="cellphone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>Email Address:</label><input class="fields" type="email" name="email_address"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Date of Birth:</label><input class="fields" type="date" name="dateofbirth"><br>
            </div>
            <div class="column2">
                <label>Birth Place:</label><input class="fields" type="text" name="birthplace"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Civil Status:</label><input class="fields" type="text" name="civilstatus"><br>
            </div>
            <div class="column2">
                <label>Citizenship:</label><input class="fields" type="text" name="citizenship"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Height in cm:</label><input class="fields" type="number" name="height"><br>
            </div>
            <div class="column2">
                <label>Weight in kg:</label><input class="fields" type="number" name="weight"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Religion:</label><input class="fields" type="text" name="religion"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Spouse:</label><input class="fields" type="text" name="spouse"><br>
            </div>
            <div class="column2">
                <label>Occupation:</label><input class="fields" type="text" name="spouse_occupation"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Children Name:</label><input class="fields" type="text" name="childrens1"><br>
            </div>
            <div class="column2">
                <label>Date of Birth:</label><input class="fields" type="date" name="childrenbirth1"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label></label><input class="fields" type="text" name="childrens2"><br>
            </div>
            <div class="column2">
                <label></label><input class="fields" type="date" name="childrenbirth2"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label></label><input class="fields" type="text" name="childrens3"><br>
            </div>
            <div class="column2">
                <label></label><input class="fields" type="date" name="childrenbirth3"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Father's Name:</label><input class="fields" type="text" name="fathername"><br>
            </div>
            <div class="column2">
                <label>Occupation:</label><input class="fields" type="text" name="fatheroccupation"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Mother's Name:</label><input class="fields" type="text" name="mothername"><br>
            </div>
            <div class="column2">
                <label>Occupation:</label><input class="fields" type="text" name="motheroccupation"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>Language or Dialect Spoken and Written:</label><input class="fields" type="text" name="dialect"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>Person to Contact in Case of Emergency:</label><input class="fields" type="text" name="emergencyname"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>His/Her Address:</label><input class="fields" type="text" name="hisheraddress"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>His/Her Telephone:</label><input class="fields" type="number" name="hishertelephone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"><br>
            </div>
        </div>
    </div><br><br>

    <div id="personal_category">
        <h2>EDUCATIONAL BACKGROUND</h2>
    </div>

    <div class="box">
        <div class="layout1">
            <div class="column1">
                <label>Elementary:</label><input class="fields" type="text" name="elementary"><br>
            </div>
            <div class="column2">
                <label>Year Graduated:</label><input class="fields" type="date" name="elemyear"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Highschool:</label><input class="fields" type="text" name="highschool"><br>
            </div>
            <div class="column2">
                <label>Year Graduated:</label><input class="fields" type="date" name="highschoolyear"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>College:</label><input class="fields" type="text" name="college"><br>
            </div>
            <div class="column2">
                <label>Year Graduated:</label><input class="fields" type="date" name="collegeyear"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>Degree Received:</label><input class="fields" type="text" name="degree"><br>
            </div>
        </div>
        <div class="layout2">
            <div class="column3">
                <label>Special Skills:</label><input class="fields" type="text" name="skills"><br>
            </div>
        </div>
    </div><br><br>

    <div id="personal_category">
        <h2>EMPLOYMENT RECORD</h2>
    </div>

    <div class="box">
        <div class="layout1">
            <div class="column3">
                <label>Company Name:</label><input class="fields" type="text" name="companyname1"><br>
            </div>
        </div>
        <div class="layout3">
            <div class="column4">
                <label>Position:</label><input class="fields" type="text" name="position1"><br>
            </div>
            <div class="column5">
                <label>From:</label><input class="fields2" type="date" name="from1"><br>
            </div>
            <div class="column6">
                <label>To:</label><input class="fields2" type="date" name="to1"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column3">
                <label>Company Name:</label><input class="fields" type="text" name="companyname2"><br>
            </div>
        </div>
        <div class="layout3">
            <div class="column4">
                <label>Position:</label><input class="fields" type="text" name="position2"><br>
            </div>
            <div class="column5">
                <label>From:</label><input class="fields2" type="date" name="from2"><br>
            </div>
            <div class="column6">
                <label>To:</label><input class="fields2" type="date" name="to2"><br>
            </div>
        </div>
    </div><br><br>

    <div id="personal_category">
        <h2>CHARACTER REFERENCE</h2>
    </div>

    <div class="box">
        <div class="layout1">
            <div class="column1">
                <label>Name:</label><input class="fields" type="text" name="characname1"><br>
            </div>
            <div class="column2">
                <label>Company:</label><input class="fields" type="text" name="characcompany1"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Position:</label><input class="fields" type="text" name="characpos1"><br>
            </div>
            <div class="column2">
                <label>Contact No:</label><input class="fields" type="number" name="characcontact1" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Name:</label><input class="fields" type="text" name="characname2"><br>
            </div>
            <div class="column2">
                <label>Company:</label><input class="fields" type="text" name="characcompany2"><br>
            </div>
        </div>
        <div class="layout1">
            <div class="column1">
                <label>Position:</label><input class="fields" type="text" name="characpos2"><br>
            </div>
            <div class="column2">
                <label>Contact No:</label><input class="fields" type="number" name="characcontact2" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"><br>
            </div>
        </div>
    </div><br><br>
    <div class="box2">
        <div class="personal_detail4">
            <div class="layout1">
                <div class="column3">
                    <label>Res. Cert. No:</label><input class="fields" type="number" name="rescert"><br>
                </div>
            </div>
            <div class="layout1">
                <div class="column3">
                    <label>Issued At:</label><input class="fields" type="text" name="issuedat"><br>
                </div>
            </div>
            <div class="layout1">
                <div class="column3">
                    <label>Issued On:</label><input class="fields" type="date" name="issuedon"><br>
                </div>
            </div>
            <div class="layout1">
                <div class="column3">
                    <label>SSS:</label><input class="fields" type="text" name="sss"><br>
                </div>
            </div>
            <div class="layout1">
                <div class="column3">
                    <label>TIN:</label><input class="fields" type="text" name="tin"><br>
                </div>
            </div>
            <div class="layout1">
                <div class="column3">
                    <label>NBI No:</label><input class="fields" type="number" name="nbi"><br>
                </div>
            </div>
            <div class="layout1">
                <div class="column3">
                    <label>Passport No:</label><input class="fields" type="number" name="passport"><br>
                </div>
            </div>
        </div>
        <div class="personal_detail5">
                I here certify that the above information is true and correct
                to the best of my knowledge and belief. I also understand that any
                misinterpretation will be considered reason for withdrawal of an offer
                or subsequent dismissal if employed.<br>
            <img id="applicant_signature"></img><br><br>
            <b style="text-decoration:overline">Applicant's Signature</b>
        </div>
    </div><br><br><hr><br>
    <div id="uploads2">
        <div class="uploads4">
            <label for="signature">Upload Your Signature</label><br>
            <input id="signature" type="file" name="applicant_signature">
        </div>
        <div class="uploads5">
            <label for="photo" >Upload Your Image</label><br>
            <input id="photo" type="file" name="applicant_photo">
        </div>
    </div><br>
    <div class="uploads">
        <input class="uploads3" type="submit" value="Create Biodata" name="biodata">
    </div>
</form><br><br>

<?php

?>