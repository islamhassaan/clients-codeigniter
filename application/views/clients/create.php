<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">
        <a class="btn btn-primary  mt-2" href="http://127.0.0.1:8000/index">All Clients</a>

        <?php //echo validation_errors(); 
        ?>

        <?php echo form_open('http://127.0.0.1:8000/create'); ?>
        <label for="full_english_name">Full English Name:</label>
        <input class="form-control" type="text" name="full_english_name" id="full_english_name" value="<?php echo $full_english_name; ?>">
        <?php if (form_error('full_english_name')) { ?>
            <small class="text-danger">
                <?php echo form_error('full_english_name'); ?>
            </small>
        <?php } ?>

        <label for="full_arabic_name">Full Arabic Name:</label>
        <input class="form-control" type="text" name="full_arabic_name" id="full_arabic_name" dir="rtl" value="<?php echo $full_arabic_name; ?>">
        <?php if (form_error('full_arabic_name')) { ?>
            <small class="text-danger">
                <?php echo form_error('full_arabic_name'); ?>
            </small>
        <?php } ?>

        <label for="username">Username:</label>
        <input class="form-control" type="text" name="username" id="username" value="<?php echo $username; ?>">
        <?php if (form_error('username')) { ?>
            <small class="text-danger">
                <?php echo form_error('username'); ?>
            </small>
        <?php } ?>

        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" id="password" value="<?php echo $password; ?>">
        <input type="checkbox" id="show-password"><small class="text-primary"> Show password</small> <br>
        <?php if (form_error('password')) { ?>
            <small class="text-danger">
                <?php echo form_error('password'); ?>
            </small>
        <?php } ?>

        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" id="email" value="<?php echo $email; ?>">
        <?php if (form_error('email')) { ?>
            <small class="text-danger">
                <?php echo form_error('email'); ?>
            </small>
        <?php } ?>

        <label for="mobile">Mobile:</label>
        <input class="form-control" type="tel" name="mobile" id="mobile" value="<?php echo $mobile; ?>">
        <?php if (form_error('mobile')) { ?>
            <small class="text-danger">
                <?php echo form_error('mobile'); ?>
            </small>
        <?php } ?>

        <label for="country_code">Country Code:</label>
        <input class="form-control" type="tel" name="country_code" id="country_code" readonly>

        <label for="country">Country:</label>
        <select class="form-control ch" name="country" id="country">
            <option selected disabled hidden>choose</option>
            <option value="Egypt" data-code="+20">Egypt</option>
            <option value="USA" data-code="+1">USA</option>
            <option value="UK" data-code="+44">UK</option>
            <option value="Canada" data-code="+1">Canada</option>
            <option value="Afghanistan" data-code="+93">Afghanistan</option>
            <option value="Albania" data-code="+355">Albania</option>
            <option value="Algeria" data-code="+213">Algeria</option>
            <option value="American Samoa" data-code="+1-684">American Samoa</option>
            <option value="Andorra" data-code="+376">Andorra</option>
            <option value="Angola" data-code="+244">Angola</option>
            <option value="Anguilla" data-code="+1-264">Anguilla</option>
            <option value="Antarctica" data-code="+672">Antarctica</option>
            <option value="Antigua and Barbuda" data-code="+1-268">Antigua and Barbuda</option>
            <option value="Argentina" data-code="+54">Argentina</option>
            <option value="Armenia" data-code="+374">Armenia</option>
            <option value="Aruba" data-code="+297">Aruba</option>
            <option value="Australia" data-code="+61">Australia</option>
            <option value="Austria" data-code="+43">Austria</option>
            <option value="Azerbaijan" data-code="+994">Azerbaijan</option>
            <option value="Bahamas" data-code="+1-242">Bahamas</option>
            <option value="Bahrain" data-code="+973">Bahrain</option>
            <option value="Bangladesh" data-code="+880">Bangladesh</option>
            <option value="Barbados" data-code="+1-246">Barbados</option>
            <option value="Belarus" data-code="+375">Belarus</option>
            <option value="Belgium" data-code="+32">Belgium</option>
            <option value="Belize" data-code="+501">Belize</option>
            <option value="Benin" data-code="+229">Benin</option>
            <option value="Bermuda" data-code="+1-441">Bermuda</option>
            <option value="Bhutan" data-code="+975">Bhutan</option>
            <option value="Bolivia" data-code="+591">Bolivia</option>
            <option value="Bosnia and Herzegovina" data-code="+387">Bosnia and Herzegovina</option>
            <option value="Botswana" data-code="+267">Botswana</option>
            <option value="Brazil" data-code="+55">Brazil</option>
            <option value="British Indian Ocean Territory" data-code="+246">British Indian Ocean Territory</option>
            <option value="British Virgin Islands" data-code="+1-284">British Virgin Islands</option>
            <option value="Brunei" data-code="+673">Brunei</option>
            <option value="Bulgaria" data-code="+359">Bulgaria</option>
            <option value="Burkina Faso" data-code="+226">Burkina Faso</option>
            <option value="Burundi" data-code="+257">Burundi</option>
            <option value="Cambodia" data-code="+855">Cambodia</option>
            <option value="Cameroon" data-code="+237">Cameroon</option>
            <option value="Canada" data-code="+1">Canada</option>
            <option value="Cape Verde" data-code="+238">Cape Verde</option>
            <option value="Cayman Islands" data-code="+1-345">Cayman Islands</option>
            <option value="Central African Republic" data-code="+236">Central African Republic</option>
            <option value="Chad" data-code="+235">Chad</option>
            <option value="Chile" data-code="+56">Chile</option>
            <option value="China" data-code="+86">China</option>
            <option value="Christmas Island" data-code="+61">Christmas Island</option>
            <option value="Cocos Islands" data-code="+61">Cocos Islands</option>
            <option value="Colombia" data-code="+57">Colombia</option>
            <option value="Comoros" data-code="+269">Comoros</option>
            <option value="Cook Islands" data-code="+682">Cook Islands</option>
            <option value="Costa Rica" data-code="+506">Costa Rica</option>
            <option value="Croatia" data-code="+385">Croatia</option>
            <option value="Cuba" data-code="+53">Cuba</option>
            <option value="Curacao" data-code="+599">Curacao</option>
            <option value="Cyprus" data-code="+357">Cyprus</option>
            <option value="Czech Republic" data-code="+420">Czech Republic</option>
            <option value="Democratic Republic of the Congo" data-code="+243">Democratic Republic of the Congo</option>
            <option value="Denmark" data-code="+45">Denmark</option>
            <option value="Djibouti" data-code="+253">Djibouti</option>
            <option value="Dominica" data-code="+1-767">Dominica</option>
            <option value="Dominican Republic" data-code="+1-809, +1-829, +1-849">Dominican Republic</option>
            <option value="East Timor" data-code="+670">East Timor</option>
            <option value="Ecuador" data-code="+593">Ecuador</option>
            <option value="Egypt" data-code="+20">Egypt</option>
            <option value="El Salvador" data-code="+503">El Salvador</option>
            <option value="Equatorial Guinea" data-code="+240">Equatorial Guinea</option>
            <option value="Eritrea" data-code="+291">Eritrea</option>
            <option value="Estonia" data-code="+372">Estonia</option>
            <option value="Ethiopia" data-code="+251">Ethiopia</option>
            <option value="Falkland Islands" data-code="+500">Falkland Islands</option>
            <option value="Faroe Islands" data-code="+298">Faroe Islands</option>
            <option value="Fiji" data-code="+679">Fiji</option>
            <option value="Finland" data-code="+358">Finland</option>
            <option value="France" data-code="+33">France</option>
            <option value="French Polynesia" data-code="+689">French Polynesia</option>
            <option value="Gabon" data-code="+241">Gabon</option>
            <option value="Gambia" data-code="+220">Gambia</option>
            <option value="Georgia" data-code="+995">Georgia</option>
            <option value="Germany" data-code="+49">Germany</option>
            <option value="Ghana" data-code="+233">Ghana</option>
            <option value="Gibraltar" data-code="+350">Gibraltar</option>
            <option value="Greece" data-code="+30">Greece</option>
            <option value="Greenland" data-code="+299">Greenland</option>
            <option value="Grenada" data-code="+1-473">Grenada</option>
            <option value="Guam" data-code="+1-671">Guam</option>
            <option value="Guatemala" data-code="+502">Guatemala</option>
            <option value="Guernsey" data-code="+44-1481">Guernsey</option>
            <option value="Guinea" data-code="+224">Guinea</option>
            <option value="Guinea-Bissau" data-code="+245">Guinea-Bissau</option>
            <option value="Guyana" data-code="+592">Guyana</option>
            <option value="Haiti" data-code="+509">Haiti</option>
            <option value="Honduras" data-code="+504">Honduras</option>
            <option value="Hong Kong" data-code="+852">Hong Kong</option>
            <option value="Hungary" data-code="+36">Hungary</option>
            <option value="Iceland" data-code="+354">Iceland</option>
            <option value="India" data-code="+91">India</option>
            <option value="Indonesia" data-code="+62">Indonesia</option>
            <option value="Iran" data-code="+98">Iran</option>
            <option value="Iraq" data-code="+964">Iraq</option>
            <option value="Ireland" data-code="+353">Ireland</option>
            <option value="Isle of Man" data-code="+44-1624">Isle of Man</option>
            <option value="Israel" data-code="+972">Israel</option>
            <option value="Italy" data-code="+39">Italy</option>
            <option value="Ivory Coast" data-code="+225">Ivory Coast</option>
            <option value="Jamaica" data-code="+1-876">Jamaica</option>
            <option value="Japan" data-code="+81">Japan</option>
            <option value="Jersey" data-code="+44-1534">Jersey</option>
            <option value="Jordan" data-code="+962">Jordan</option>
            <option value="Kazakhstan" data-code="+7">Kazakhstan</option>
            <option value="Kenya" data-code="+254">Kenya</option>
            <option value="Kiribati" data-code="+686">Kiribati</option>
            <option value="Kosovo" data-code="+383">Kosovo</option>
            <option value="Kuwait" data-code="+965">Kuwait</option>
            <option value="Kyrgyzstan" data-code="+996">Kyrgyzstan</option>
            <option value="Laos" data-code="+856">Laos</option>
            <option value="Latvia" data-code="+371">Latvia</option>
            <option value="Lebanon" data-code="+961">Lebanon</option>
            <option value="Lesotho" data-code="+266">Lesotho</option>
            <option </select>
                <button class="btn btn-primary mt-4" type="submit">Create</button>
                </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>


    <script>
        $(document).ready(function() {
            $('#show-password').click(function() {
                if ($(this).is(':checked')) {
                    $('#password').attr('type', 'text');
                } else {
                    $('#password').attr('type', 'password');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#country').change(function() {
                var code = $('option:selected', this).data('code');
                $('#country_code').val(code);
            });
        });
    </script>


    <!-- using chosen plugin in jquery  -->
    <script>
        $(document).ready(function() {
            $('.ch').chosen();
        });
    </script>

</body>

</html>