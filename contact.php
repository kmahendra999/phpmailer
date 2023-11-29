<!--contactform file-->

<style>
.cxform-popup *{font-family:Arial,Helvetica,sans-serif;box-sizing:border-box}
.cxopen-button{background-color:#555;color:#fff;padding:16px 20px;border:none;cursor:pointer;opacity:.8;position:fixed;bottom:23px;right:28px;width:auto;z-index: 9;}
.cxform-popup{display:none;position:fixed;bottom:0;right:15px;border:3px solid #f1f1f1;z-index:9}
.cxform-container{max-width:300px;padding:10px;background-color:#fff}
.cxform-container input[type=text],
.cxform-container input[type=email]{width:100%;padding:15px;margin:5px 0 10px;border:none;background:#f1f1f1}
.cxform-container input[type=text]:focus,
.cxform-container input[type=email]:focus{background-color:#ddd;outline:none}
.cxform-container .btn{background-color:#04AA6D;color:#fff;padding:16px 20px;border:none;cursor:pointer;width:100%;margin-bottom:10px;opacity:.8}
.cxform-container .cxcancel{background-color:red}
.cxform-container .btn:hover,.cxopen-button:hover{opacity:1}

.cxblink-bg{color: #fff;padding: 10px;display: inline-block;border-radius: 5px;animation: cxblinkingBackground 2s infinite;	}
@keyframes cxblinkingBackground{
  0%		{ background-color: #10c018;}
  25%		{ background-color: #1056c0;}
  50%		{ background-color: #ef0a1a;}
  75%		{ background-color: #254878;}
  100%	    { background-color: #04a1d5;}
  }
</style>



<!---popup text starts ------------->
<button class="cxopen-button cxblink-bg" onclick="cxopenForm()">Have any Question ? Click here</button>

<div class="cxform-popup" id="cxmyForm">
<form action="send_email.php" method="post" class="cxform-container">
<h4 style="float:left;width:auto;">Send us message <span style="color:#25D366">or</span></h4>
<h4 style="float:right;width:auto;">
<a href="https://wa.me/17135058104?text=Hi&nbsp;I&nbsp;have&nbsp;a&nbsp;question" target="_blank">
<img src="https://amaxtours.com/public/images/whatsapp-icon.png" style="width:32px;height:32px;" />
</a>
</h4>


<div style="clear:both"></div>
    <input type="text" placeholder="Enter your name" name="cxname" required>
    <input type="email" placeholder="Enter your Email" name="cxemail" required>
    <input type="text" placeholder="Enter contact number with country code" name="cxphone" required>
    <input type="text" placeholder="Enter Your Query" name="cxmessage" required>
    <button type="submit" class="btn" name="submit">submit</button>
    <button type="button" class="btn cxcancel" onclick="cxcloseForm()">Close</button>
  </form>
</div>

<script>
function cxopenForm() {document.getElementById("cxmyForm").style.display = "block";}
function cxcloseForm() {document.getElementById("cxmyForm").style.display = "none";}
</script>


<!---- popup text end here---------->
