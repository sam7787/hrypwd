<html xmlns="http://www.w3.org/1999/xhtml"><head><title>

</title>

    <!-- MetisMenu CSS -->
    <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet"><link href="../../bower_components/bootstrap/dist/css/style.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="bower_components/bootstrap/dist/css/style.css" media="screen">
    <script type="text/javascript" src="../../JS/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.validate.js"></script>

    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<link   href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function () {
            $(".btn").click(function () {
                $("#myModal").modal("show");
            });
        });
    </script>
</head>
<body>
    <form method="post" action="./Camp_registrationform_Patient" language="javascript" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="WtdKWjl/pcDgSs+tplwfw0QFVBmokrGaaJ1zFlE3YZ9YWA5O/DSfKuR82ge+haq2K+XysuhX+pTWi68gh9+4t86QVN9Ta/lsEM0fM4q0akIX/+G3H5gqFDaue1LghG70Mdg/kC3NgYaPX1LuR07dh44CAxhG/ujjDNgf7JHhoRYbdDC8QXai9sq/4w7MkQMg/F8NuVP4vXkZWOAv8mhgofZJXETchNIZkWLcR94arbSfpqTuCpFwdu5dJ2lg/DdRqicefDwnpKBogVP+nIQCBYqDUr6QQF7aPaHC+DPC4bhPzOY5V1hLqIWLwBFSr3ETwOD0uQ==">
</div>

<script type="text/javascript">
<!--
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
// -->
</script>


<script src="/WebResource.axd?d=xbVNXTNZcwpTGz88xLa4IMSv6fGFPld1_wxs_1sWXTtizZG3TmiyX2OJnMpdIKyMMH0Y-gYZNEpFFzo10&amp;t=637034325201221563" type="text/javascript"></script>


<script src="/WebResource.axd?d=_FDDQmwZt5mBL15NOBlP-Y-Fs7ZvMMbGsui5bLDKu49lQTOkIbEzh4vG42eOJX9lex-ZYYP0G9nzKr2Ax5pfANlNkMo1&amp;t=637034325201221563" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=gurbV27en0XZssBlQzLU92EKuyxbBs6jhhqkLNIYX5-Jpoej6NCl-coVRp834e_lT-zoJaXuFiQw2y5c1v3RRrfKYhlrMHx4rVYicKhjSWz4K1_VOEXe1k-1Y5nE-vqDJ9KUgOrs0i8B2guqtZZ2izp873s1&amp;t=ffffffffa580202a" type="text/javascript"></script>
<script type="text/javascript">
<!--
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
// -->
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="F0BA35C6">
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
</div>


        <div class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Haryana</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="#">
                                <p style="margin-top: 5px; margin-bottom: 0;">
                                    <span id="lblUsr" style="font-weight:bold;"></span>

                                </p>

                            </a>

                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#helpModal">
                                <p style="margin: 0;">
                                    <span id="Label2" class="cus-logout">Help</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#logoutModal">
                                <p style="margin: 0;">
                                    <span id="Label1" class="cus-logout">Log out</span>
                                </p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
            <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="collapse" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 style="color: #333;">Log Out <i class="fa fa-lock"></i></h4>
                        </div>
                        <div class="modal-body">
                            <p style="color: black;">
                                <i class="fa fa-question-circle"></i>Are you sure you want to log-off?
                                <br>
                            </p>
                            <div class="actionsBtns">

                                <input type="submit" name="_ctl0:btnLogout" value="Logout" id="btnLogout" class="btn btn-default btn-primary">

                                <button class="btn btn-default" data-dismiss="modal">Cancel</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="helpModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content" style="width: 450px;">
                        <div class="modal-header">

                            <h4 style="color: #333;">In case of any query please contact : </h4>
                        </div>
                        <div class="modal-body">
                            <p style="color: black;">
                                
                                (i)  IT-CELL - 0172-2618136
                                
                            </p>
                            <div class="actionsBtns">
                                <button class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="container-fluid main">
            <div class="col-lg-12 cus-outer-div">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cus-tabs-div">
                    
     <div class="container-fluid">
      <div class="row align-items-center">
          <div class="col-md-1"></div>
         <div class="col-md-10">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <center>
                           <i class="fa fa-medkit fa-5x"></i>
                        </center>
                     </div>
                  </div>
          
            <div id="UpdatePanel1">
	
                   
                  <div class="row">
                     <div class="col">
                        <center>
                           <h4><b>New Patient Registration</b></h4>
                          
                        </center>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <hr>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <label>Name of Patient</label>
                        <div class="form-group">
                           <input name="_ctl0:ContentPlaceHolder1:txtname" type="text" id="txtname" class="form-control" placeholder="Name of patient">
                        </div>
                             <div class="">
                         <span controltovalidate="txtname" errormessage="*Please enter name of patient" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv01" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter name of patient</span>  
                                  </div>
                     </div>
                     <div class="col-md-6">
                        <label>Date of Birth</label>
                        <div class="form-group">
                           <input name="_ctl0:ContentPlaceHolder1:txtdob" type="date" id="txtdob" class="form-control" placeholder="Date of Birth">
                        </div>
                             <div class="">
                         <span controltovalidate="txtdob" errormessage="*Please enter date of birth" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv02" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter date of birth</span>  
                                  </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <label>Father/Husband Name</label>
                        <div class="form-group">
                           <input name="_ctl0:ContentPlaceHolder1:txtfathername" type="text" id="txtfathername" class="form-control" placeholder="Father/Husband Name">
                        </div>
                         
                             <div class="">
                         <span controltovalidate="txtfathername" errormessage="*Please enter Father/Husband name" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv03" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter Father/Husband name</span>  
                                  </div>
                     </div>
                     <div class="col-md-6">
                        <label>Email ID</label>
                        <div class="form-group">
                           <input name="_ctl0:ContentPlaceHolder1:txtemailid" type="email" id="txtemailid" class="form-control" placeholder="Email ID">
                        </div>
                             <div class="">
                         <span controltovalidate="txtemailid" errormessage="*Please enter email ID" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv04" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter email ID</span>  
                                  </div>
                     </div>
                  </div>
                   
                  <div class="row">
                     <div class="col-md-6">
                        <label>Gender</label>
                        <div class="form-group">
                          
                              <select name="_ctl0:ContentPlaceHolder1:ddlGender" id="ddlGender" class="form-control">
		<option value="0">Select Gender</option>
		<option value="male">Male</option>
		<option value="female">Female</option>

	</select>
                            </div>
                             <div class="">
                         <span controltovalidate="ddlGender" errormessage="*Gender is required." display="Dynamic" validationgroup="patientreg" id="RequiredFieldValidator2" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="0" style="color:Red;display:none;">*Gender is required.</span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label>Age</label>
                        <div class="form-group">
                           <input name="_ctl0:ContentPlaceHolder1:txtage" type="number" maxlength="2" id="txtage" class="form-control" placeholder="Age">
                        </div>
                             
                             <div class="">
                         <span controltovalidate="txtage" errormessage="*Please enter age" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv05" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter age</span>  
                                  </div>
                  </div>
                      </div>
                  <div class="row">
                     <div class="col-md-6">
                        <label>Mobile</label>
                        <div class="form-group">
                           <input name="_ctl0:ContentPlaceHolder1:txtmobile" type="number" maxlength="10" id="txtmobile" class="form-control" placeholder="Mobile">
                        </div>
                             
                             <div class="">
                         <span controltovalidate="txtmobile" errormessage="*Please enter mobile" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv06" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter mobile</span>  
                                  </div>
                     </div>
                     <div class="col-md-6">
                        <label>Emergency Contact Number</label>
                        <div class="form-group">
                           <input name="_ctl0:ContentPlaceHolder1:txtemergencycontact" type="number" maxlength="10" id="txtemergencycontact" class="form-control" placeholder="Emergency Contact Number">
                        </div>
                         <div class="">
                         <span controltovalidate="txtemergencycontact" errormessage="*Please enter emergency contact number" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv07" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter emergency contact number</span>  
                                  </div>
                     </div>
                  </div>

                   
                  <div class="row">
                     <div class="col-md-6">
                       <label>Select State</label>
                        <div class="form-group">
                           <select name="_ctl0:ContentPlaceHolder1:ddlState" onchange="javascript:setTimeout('__doPostBack(\'_ctl0$ContentPlaceHolder1$ddlState\',\'\')', 0)" language="javascript" id="ddlState" class="form-control">
		<option selected="selected" value="0">Select State</option>

	</select>
                       </div>
                             <div class="">
                         <span controltovalidate="ddlState" errormessage="*State is required." display="Dynamic" validationgroup="patientreg" id="rfvddlState" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="0" style="color:Red;display:none;">*State is required.</span>
                              </div>
                     </div>
                     <div class="col-md-6">
                         <label>Select District</label>
                        <div class="form-group">
                           
                            
                           <select name="_ctl0:ContentPlaceHolder1:ddlDistrict" id="ddlDistrict" class="form-control">
		<option value="0">Select District</option>

	</select>
                         </div>
                             <div class="">
                            <span controltovalidate="ddlDistrict" errormessage="*District is required." display="Dynamic" validationgroup="patientreg" id="RequiredFieldValidator1" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="0" style="color:Red;display:none;">*District is required.</span>
                        </div>
                     </div>
                  </div>
                 
                  <div class="row">
                     <div class="col">
                        <label>Full Address</label>
                        <div class="form-group">
                           <textarea name="_ctl0:ContentPlaceHolder1:txtfulladdress" rows="2" id="txtfulladdress" class="form-control" placeholder="Full Address"></textarea>
                        </div>
                          <div class="">
                         <span controltovalidate="txtfulladdress" errormessage="*Please enter full address" validationgroup="patientreg" id="" requiredfieldvalidatorid="rfv08" evaluationfunction="RequiredFieldValidatorEvaluateIsValid" initialvalue="" style="color:Red;visibility:hidden;">*Please enter full address</span>  
                                  </div>
                     </div>
                  </div>
                  
                 

               
                  <div class="row">
                     <div class="col-8 mx-auto">
                        <center>
                           <div class="form-group">
                              <input type="submit" name="_ctl0:ContentPlaceHolder1:btn_save" value="Save" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;_ctl0:ContentPlaceHolder1:btn_save&quot;, &quot;&quot;, true, &quot;patientreg&quot;, &quot;&quot;, false, false))" language="javascript" id="btn_save" class="btn btn-primary btn-block btn-lg">
                           </div>
                        </center>
                     </div>
                  </div>
                     
</div>
               </div>
            </div>
           
         </div>
          <div class="col-md-1"></div>
      </div>
   </div>

                </div>
            </div>

        </div>

    
<script type="text/javascript">
<!--
var Page_Validators =  new Array(document.getElementById(""), document.getElementById(""), document.getElementById(""), document.getElementById(""), document.getElementById("RequiredFieldValidator2"), document.getElementById(""), document.getElementById(""), document.getElementById(""), document.getElementById("rfvddlState"), document.getElementById("RequiredFieldValidator1"), document.getElementById(""));
// -->
</script>


<script type="text/javascript">
<!--

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        // -->
</script>
</form>
    <script type="text/javascript">
            //Disable the default MouseOver functionality of ASP.Net Menu control.
            //Sys.WebForms.Menu._elementObjectMapper.getMappedObject = function () {
            //    return false;
            //};
            $(function () {
                //Remove the style attributes.
                $(".navbar-nav li, .navbar-nav a, .navbar-nav ul").removeAttr('style');

                //Apply the Bootstrap class to the SubMenu.
                $(".dropdown-menu").closest("li").removeClass().addClass("dropdown-toggle");

                //Apply the Bootstrap properties to the SubMenu.
                $(".dropdown-toggle").find("a").eq(0).attr("data-toggle", "dropdown").attr("aria-haspopup", "true").attr("aria-expanded", "false").append("<span class='caret'></span>");

                //Apply the Bootstrap "active" class to the selected Menu item.
                $("a.selected").closest("li").addClass("active");
                $("a.selected").closest(".dropdown-toggle").addClass("active");
            });
        </script>


</body></html>