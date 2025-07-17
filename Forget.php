<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="all,follow" />
  
  <title>JOB PORTAL BY SHABEEHA MAKAM</title>
  <meta name="description" content="..." />
  <meta name="keywords" content="..." />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/print.css" media="print" />
  <link rel="stylesheet" href="./css/aural.css" media="aural" />
  <style>
    .style1 {
      color: #000066;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <!-- Main Container -->
  <div id="main" class="box">
    <?php include "Header.php"; ?>
    <?php include "menu.php"; ?>

    <!-- Page -->
    <div id="page" class="box">
      <div id="page-in" class="box">

        <!-- Breadcrumb Strip -->
        <div id="strip" class="box noprint">
          <p id="breadcrumbs">You are here: <a href="index.php">Home</a></p>
        </div>

        <!-- Content -->
        <div id="content">
          <div class="article">
            <h2><span><a href="#">Welcome To JOB PORTAL</a></span></h2>

            <form id="form2" method="post" action="ForPass.php">
              <table width="100%" cellpadding="10">
                <tr>
                  <td>Select User:</td>
                  <td>
                    <label><input type="radio" name="rdUser" value="Employer" /> Employer</label><br />
                    <label><input type="radio" name="rdUser" value="JobSeeker" /> JobSeeker</label>
                  </td>
                </tr>
                <tr>
                  <td>User Name:</td>
                  <td>
                    <input type="text" name="txtUserName" id="txtUserName" required />
                  </td>
                </tr>
                <tr>
                  <td>Security Question:</td>
                  <td>
                    <select name="cmbQue" id="cmbQue" required>
                      <option value="">-- Select a question --</option>
                      <option>What is Your Pet Name?</option>
                      <option>Who is Your Favourite Person?</option>
                      <option>What is the Name of Your First School?</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Answer:</td>
                  <td>
                    <input type="text" name="txtAnswer" id="txtAnswer" required />
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="submit" name="button2" value="Submit" />
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div> <!-- /content -->

        <?php include "right.php"; ?>

      </div> <!-- /page-in -->
    </div> <!-- /page -->
  </div> <!-- /main -->
</body>
</html>
