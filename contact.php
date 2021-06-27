<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
<?php include ("header.html") ?>

<div class="demo-wrapper">
        <div class="main-col">
            <!-- Add some sample content here -->

        </div>


        <div class="kotak">
            <form name="frmContact" id="frmContact" method="post"
                action="prosesemail.php" enctype="multipart/form-data"
                onsubmit="return validateContactForm()">

                <div class="input-row">
                    <label style="padding-top: 20px;">Name</label> <span
                        id="userName-info" class="info"></span><br /> <input
                        type="text" class="input-field" name="userName"
                        id="userName" />
                </div>
                <div class="input-row">
                    <label>Email</label> <span id="userEmail-info"
                        class="info"></span><br /> <input type="text"
                        class="input-field" name="userEmail"
                        id="userEmail" />
                </div>
                <div class="input-row">
                    <label>Subject</label> <span id="subject-info"
                        class="info"></span><br /> <input type="text"
                        class="input-field" name="subject" id="subject" />
                </div>
                <div class="input-row">
                    <label>Message</label> <span id="userMessage-info"
                        class="info"></span><br />
                    <textarea name="content" id="content"
                        class="input-field" cols="60" rows="3"></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="btn-submit"
                        value="Send" />

                    <div id="statusMessage">
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();

            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

    <footer>
    <p><h3>Gilang Pramudya S &copy; 2021, Ta'uuk</h3></p>
    </footer>

  </body>
</html>
