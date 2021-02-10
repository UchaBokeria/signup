<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Style/defaults.css">
    <link rel="stylesheet" href="Style/style.css">

    <meta charset="utf-8">
    <title>Sign up</title>
  </head>
  <body>
    <form class="SignUp" action="index.php">
      <h1>შევასეთ ფორმა</h1>
      <input type="text" name="name" value="" placeholder="სახელი" id="name" required>
      <input type="text" name="surname" value="" placeholder="გვარი" id="surname" required>

      <input type="date" name="Bdate" value="" placeholder="დაბადების თარიღი" id="Bdate" required>


      <label for="female">
        <input type="radio" name="gender" value="0" id="female" required>
        <p>მდედრობითი</p>
      </label>
      <label for="male">
        <input type="radio" name="gender" value="1" id="male" required>
        <p>მამრობითი</p>
      </label>

      <input type="text" name="address" placeholder="მისამართი" id="address">

      <label id="onemobile">
        <input type="text" name="mobile" value="+995" placeholder="მობიულური" id="mobile" required>
        <i class="material-icons" id='addMobile'>add_circle</i>
      </label>
      <label id="secmobile">
        <input type="text" name="mobile2" value="" placeholder="სხვა მობიულური" id="mobile2" required>
        <i class="material-icons" id='delMobile'>remove_circle</i>
      </label>

      <select class="" name="country" id="country" required ></select>
      <div class="sel">
        <input type="text" name="city" value="" id='cityInput'>
        <select class="" name="city" id="city" required></select>
      </div>

      <input type="email" name="email" value="" placeholder="ელ. ფოსტა" id="email" required>
      <p style='color:red' id='validemail'></p>

      <input type="password" name="name" minlength="8" placeholder="პაროლი" id="password" required>
      <p style='color:red' id='validPass'></p>

      <p id="showTerms">რეგისტრაციის პირობები და წესები</p>

      <div id="darkBg"></div>
      <div class="terms">

        <h1>Privacy Policy for test</h1>

        <p>At test.com, accessible from www.test.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by test.com and how we use it.</p>

        <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

        <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in test.com. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicyonline.com/privacy-policy-generator/">Free Privacy Policy Generator</a>.</p>

        <h2>Consent</h2>

        <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

        <h2>Information we collect</h2>

        <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
        <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
        <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

        <h2>How we use your information</h2>

        <p>We use the information we collect in various ways, including to:</p>

        <ul>
        <li>Provide, operate, and maintain our webste</li>
        <li>Improve, personalize, and expand our webste</li>
        <li>Understand and analyze how you use our webste</li>
        <li>Develop new products, services, features, and functionality</li>
        <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>
        <li>Send you emails</li>
        <li>Find and prevent fraud</li>
        </ul>

        <h2>Log Files</h2>

        <p>test.com follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

        <h2>Cookies and Web Beacons</h2>

        <p>Like any other website, test.com uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

        <p>For more general information on cookies, please read <a href="https://www.cookieconsent.com/what-are-cookies/">"What Are Cookies" from Cookie Consent</a>.</p>

        <h2>Google DoubleClick DART Cookie</h2>

        <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>

        <h2>Our Advertising Partners</h2>

        <p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>

        <ul>
            <li>
                <p>Google</p>
                <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
            </li>
        </ul>

        <h2>Advertising Partners Privacy Policies</h2>

        <P>You may consult this list to find the Privacy Policy for each of the advertising partners of test.com.</p>

        <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on test.com, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

        <p>Note that test.com has no access to or control over these cookies that are used by third-party advertisers.</p>

        <h2>Third Party Privacy Policies</h2>

        <p>test.com's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

        <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

        <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>

        <p>Under the CCPA, among other rights, California consumers have the right to:</p>
        <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
        <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
        <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

        <h2>GDPR Data Protection Rights</h2>

        <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
        <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
        <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
        <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
        <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
        <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
        <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

        <h2>Children's Information</h2>

        <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

        <p>test.com does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

        <br><br>
        <button id='agree' type="button">ვეთანხმები</button>
      </div>

      <button type="button" id="signup">რეგისტრაცია</button>
      <p id="success"></p>
      <p id="fail"></p>
    </form>

  <script>
    // toggle for terms
    var agree = false;
    $('#agree').click(function(event) {
      agree = true;
      $('#fail').text("");
      $('#showTerms').css('color', 'white');
    });

    var countryID = 81;
    $(document).ready(function() {
      // other mobile input toggle
      $('#addMobile').click(function(event) {
        $('#addMobile').css('color', '#eee');
        $('#secmobile').show();
      });
      $('#delMobile').click(function(event) {
        $('#addMobile').css('color', '#333');
        $('#secmobile').hide();
      });

      // terms popup toggle
      function popUp(){
        $('.terms').toggle();
        $('#darkBg').toggle();
      }
      $('#showTerms').click(function(){ popUp(); });
      $('#darkBg').click(function(){ popUp(); });
      $('#agree').click(function(){ popUp(); });

      // switch to input from select in city fields
      var switchCity = false;
      $("#cityInput").click(function(){
        switchCity = true;
        $("#city").prop("disabled", true);
      });

      // get countries
      $.getJSON("Include/countryHandler.php", function(result){
            $.each(result, function(i, field){
              var html =  "value='" + field.id + "' class='countrySelect' >" + field.name+"</option>";

              if(field.name == "Georgia")
                $("#country").append("<option selected " + html);
              else
                $("#country").append("<option " + html);
            });
          });

      // get cities
      $.getJSON("Include/cityHandler.php?id=" + countryID, function(result){
            $.each(result, function(i, field){
              $("#city").append("<option>"+field.name+"</option>");
            });
          });


      // check email validation
      $('#email').click(function(event) {
        $('#email').keyup(function(event) {
          var email = $('#email').val();
          var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(email))
            $('#validemail').text("Please enter your email correctly!");
          else
            $('#validemail').text("");
        });
      });

      // check password validation
      $('#password').click(function(event) {
        $('#password').keyup(function(event) {
          var password = $('#password').val();
          var regex = /([A-Z])([\+\,\_\-\/\!\@\#\$]).*$/;

          if(regex.test(password) || password.length < 8)
            $('#validPass').text("Please enter your strong password!");
          else
            $('#validPass').text("");
        });
      });



      $('#signup').click(function(event) {
        $('#success').text("");
        var ready = true;
        var msg = "წარმატებით დარეგისტრირდით";

        if(!$('#name').val()){
          msg = "სახელი ან გვარი ძალიან მოკლეა";
          ready = false;
        }
        if(!$('#surname').val()){
          msg = "სახელი ან გვარი ძალიან მოკლეა";
          ready = false;
        }
        if(!$("input[name='gender']").is(":checked")){
          msg = "აირჩიე სქესი";
          ready = false;
        }
        if($('#mobile').val().length > 20 || $('#mobile').val().length < 13){
          msg = "ნომერი არასწორია";
          ready = false;
        }
        if($('#email').val().length < 1){
          msg = "ელ ფოსტა ცარიელია";
          ready = false;
        }
        if($('#password').val().length < 8){
          msg = "პაროლი მოკლეა";
          ready = false;
        }

        if(agree == false){
          ready = false;
          $('#showTerms').css('color', 'rgba(238,86,86,1)');
          msg = "გთხოვთ გაეცნოთ პირობებს";
        }

        if(ready){
          // select switch type of data in city field
          var City = "";
          if(switchCity)
            City = $('#cityInput').val();
          else
            City = $('#city').val();


          $.post('Include/registerHandler.php', {
            firstname: $('#name').val(),
            lastname: $('#surname').val(),
            birthdate: $('#Bdate').val(),
            gender: $("input[name='gender']:checked").val(),
            address: $('#address').val(),
            mobile: $('#mobile').val(),
            mobile2: $('#mobile2').val(),
            country: $('#country').val(),
            city: City,
            email: $('#email').val(),
            password: $('#password').val()
          })
          .done(function(data) {
            $('#name').val("");
            $('#surname').val("");
            $('#Bdate').val("");
            $('#address').val("");
            $('#mobile').val("");
            $('#mobile2').val("");
            $('#country').val("");
            $('#city').val("");
            $('#email').val("");
            $('#password').val("");
            $("#city").prop("disabled", true);
            $("#cityInput").val("");
            switchCity = false;

            $('#fail').text("");
            $('#success').text(msg);
            agree = false;
          });
        }
        else
          $('#fail').text(msg);
      });

    });

    // on country changes change cities too
    $('#country').click('.countrySelect',function(){
      countryID = $('.countrySelect:selected').val();

      // set number
      var firstNums;
      $.getJSON("Include/countryHandler.php?id=" + countryID, function(result){
            $.each(result, function(i, field){
              firstNums = field.phonecode;
              $("#mobile").val("+" + firstNums);
              $("#mobile2").val("+" + firstNums);
            });
          });

      // reset cities
      $("#city").children('option').remove();
      $.getJSON("Include/cityHandler.php?id=" + countryID, function(result){
            $.each(result, function(i, field){
              console.log(field);
              $("#city").append("<option>"+field.name+"</option>");
            });
          });
    });
  </script>
  </body>
</html>
