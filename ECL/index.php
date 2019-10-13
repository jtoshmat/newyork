
<?php

/*
Plugin Name: Payment Form
Author: Max
Description: Accept payments simply with Authorize.net.
Version: 1
License: GPLv2 or later
*/

function fn_paymant_form() {

    $valid   = true;
    $msg     = '';
    $payment  = false;
    $html    = '';

    if( isset( $_POST['paymant_form'])){

        if( $_POST['account_number'] != ''){
            $account_number = intval($_POST['account_number']);

            if(strlen($account_number) != 10){
                $msg.= 'Please enter 10 digits account number </br>';
            }
        }else{
            $valid = false;
            $msg.= 'Account Number is required </br>';
        }

        if( $_POST['amount_dollars'] != ''){
            $amount_dollars = intval($_POST['amount_dollars']);
            if( (is_numeric($amount_dollars)) && ( (strlen($amount_dollars) > '1') || (strlen($amount_dollars) == '1')) ){}
            else{
                $valid = false;
                $msg.= 'Amount cannot be less then $1 </br>';
            }
        }else{
            $valid = false;
            $msg.= 'Amount is required </br>';
        }

        if( $_POST['amount_cents'] != ''){
            $amount_cents = $_POST['amount_cents'];
        }else {
            $amount_cents = "00";
        }

        $payment_amount = $amount_dollars.".".$amount_cents;

        if( $_POST['firstname'] != ''){
            $firstname = $_POST['firstname'];
        }else{
            $valid = false;
            $msg.= 'First Name is required </br>';
        }

        if( $_POST['lastname'] != ''){
            $lastname = $_POST['lastname'];
        }else{
            $valid = false;
            $msg.= 'Last Name is required </br>';
        }

        if( $_POST['phone'] != ''){
            $phone = $_POST['phone'];
        }else{
            $valid = false;
            $msg.= 'Phone is required </br>';
        }

        if( $_POST['email'] != ''){
            $email = $_POST['email'];
            if( preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/" , $email)){}
            else{
                $valid = false;
                $msg.= 'Invalid email format </br>';
            }
        }else{
            $valid = false;
            $msg.= 'E-mail is required </br>';
        }

        if( $_POST['address'] != ''){
            $address = $_POST['address'];
        }else{
            $valid = false;
            $msg.= 'Address is required </br>';
        }

        if( $_POST['city'] != ''){
            $city = $_POST['city'];
        }else{
            $valid = false;
            $msg.= 'City is required </br>';
        }

        if( $_POST['state'] != ''){
            $state = $_POST['state'];
        }else{
            $valid = false;
            $msg.= 'State is required </br>';
        }

        if( $_POST['zip'] != ''){
            $zip = $_POST['zip'];
        }else{
            $valid = false;
            $msg.= 'Zip Code is required </br>';
        }

        if( $_POST['card_number'] != ''){
            $card_number = $_POST['card_number'];
        }else{
            $valid = false;
            $msg.= 'Card Number is required </br>';
        }

        if( $_POST['card_cvv'] != ''){
            $card_cvv = $_POST['card_cvv'];
        }else{
            $valid = false;
            $msg.= 'Security Code is required </br>';
        }

        $card_expiry = $_POST['expiration_month']."/".$_POST['expiration_year'];

        if( $valid ){

            $account_number;
            $payment_amount;
            $firstname;
            $lastname;
            $phone;
            $email;
            $address;
            $city;
            $state;
            $zip;
            $card_number;
            $card_cvv;
            $card_expiry;
            $auth_login_id         = "8k5aP9CZ3";
            $auth_transaction_key  = "29mFC54nSy8P46m7";
            $auth_mode             = "live"; // test
            $processor_description  = "".PHP_EOL;

            if($auth_mode == "live"){
                $post_url = "https://secure.authorize.net/gateway/transact.dll";
            }
            else{
                $post_url = "https://test.authorize.net/gateway/transact.dll";
            }

            $post_values = array(

                "x_login"   => $auth_login_id,
                "x_tran_key"  => $auth_transaction_key,

                "x_version"   => "3.1",
                "x_delim_data"  => "TRUE",
                "x_delim_char"  => "|",
                "x_relay_response" => "FALSE",
                "x_market_type"  => "2",

                "x_type"   => "AUTH_CAPTURE",
                "x_method"   => "CC",
                "x_card_num"  => $card_number,
                "x_card_code"  => $card_cvv,
                "x_exp_date"  => $card_expiry,

                "x_amount"   => $payment_amount,

                "x_invoice_num"  => $account_number,
                "x_description"  => $processor_description,

                "x_phone"   => $phone,
                "x_email"   => $email,
                "x_merchant_email" => "billing@empirecitylabs.com",

                "x_first_name"  => $firstname,
                "x_last_name"  => $lastname,
                "x_address"   => $address,
                "x_city"   => $city,
                "x_state"   => $state,
                "x_zip"    => $zip,
                "x_country"   => "USA"
            );

            $post_string = "";
            foreach( $post_values as $key => $value ){
                $post_string .= "$key=" . urlencode( $value ) . "&";
            }
            $post_string = rtrim( $post_string, "& " );

            $request = curl_init($post_url);
            curl_setopt($request, CURLOPT_HEADER, 0);
            curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
            curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);
            $post_response = curl_exec($request);
            curl_close ($request);

            $response_array = explode($post_values["x_delim_char"], $post_response);

            if(intval($response_array[1]) == 1){
                $payment = true;
            }else{
                $msg .= $response_array[3];
            }
        }
    }

    if(!empty($msg)){
        $html .= '<div style="color:red; padding: 10px;">'.$msg.'</div>';
    }

    if($payment){
        $html .= '<div style="padding: 10px;"><h3>You payment has been received!</h3><p>Please check your email for payment confirmation.</p></div>';
    }else{
        $html .= '
  <style type="text/css">
   #billform {
       border-radius: 3px;
       padding: 10px;
   }
   #billform fieldset {

   }
   #billform fieldset legend {
       color: #56adc0;
       font-size: 26px;
       font-weight: 300;
       line-height: 2em;
   }
   #billform fieldset p {
    padding: 1px;
   }
   #billform fieldset p label {
    padding: 5px;
    width: 100%;
    display: block;
    font-weight: bold;
   }
   #billform fieldset p label .help {
    font-size: 80%;
   }
   #billform fieldset input {
       box-shadow: 0 0 0px #808080;
                                    border: 1px solid #808080;
   }
   #billform fieldset select {
       background-color: #fff;
       border: 1px solid #808080;
       border-radius: 3px;
       box-shadow: 0 0 0px #808080;
       color: #808080;
       font: 13px/16px "Open Sans",Arial,Helvetica,sans-serif;
       padding: 8px;
   }
  </style>

  <form method="post" id="billform">
   <fieldset>
    <legend><i>Payment Information</i></legend>
    <p>
     <label>Account Number * <span class="help">(Found on the upper right hand corner of your statement)</span></label>
     <input type="text" name="account_number" id="account_number" value="'. (isset($account_number) ? $account_number : "") . '">
    </p>
    <p>
     <label>Amount * <span class="help"></span></label>
     <input type="text" name="amount_dollars" id="amount_dollars" value="'. (isset($amount_dollars) ? $amount_dollars : "") .'">
     <span id="amount1text"> dollar(s)</span>
     <span class="decimal">.</span>
     <input type="text" name="amount_cents" id="amount_cents" value="'. (isset($amount_cents) ? $amount_cents : "") .'" maxlength="2">
     <span id="amount2text"> cent(s)</span>
    </p>
    <p>
     <label>Phone Number * <span class="help">(xxx-xxx-xxxx)</span></label>
     <input type="text" name="phone" id="phone" value="'. (isset($phone) ? $phone : "") .'">
    </p>
   </fieldset>
   
   <fieldset>
    <legend><i>Receipt</i></legend>
    <p>
     <label>E-mail * <span class="help">(For payment receipt only)</span></label>
     <input type="text" name="email" id="email" value="'. (isset($email) ? $email : "") .'">
    </p>
   </fieldset>
 
   <fieldset style="overflow:hidden;">
    <legend><i>Cardholder Information</i></legend>
    <p style="float:left; margin-right: 20px;">
     <label>First Name * </label>
     <input type="text" name="firstname" id="firstname" value="'. (isset($firstname) ? $firstname : "") .'">
    </p>
    <p style="float:left; margin-right: 20px;">
     <label>Last Name * </label>
     <input type="text" name="lastname" id="lastname" value="'. (isset($lastname) ? $lastname : "") .'">
    </p>
   </fieldset>
 
   <fieldset style="overflow:hidden;">
    <legend><i>Billing Address</i></legend>
    <p>
     <label>Address * </label>
     <input type="text" name="address" id="address" value="'. (isset($address) ? $address : "") .'">
    </p>

    <p style="float:left; margin-right: 20px;">
     <label>City * </label>
     <input type="text" name="city" id="city" value="'. (isset($city) ? $city : "") .'">
    </p>
    <p style="float:left; margin-right: 20px;">
     <label>State * </label>
     <select name="state" id="state">
      <option value="">---Choose State---</option>
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <!--<option value="AS">American Samoa</option>-->
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <!--<option value="AE">Armed Forces</option>-->
      <!--<option value="AA">Armed Forces Americas</option>-->
      <!--<option value="AP">Armed Forces Pacific</option>-->
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DE">Delaware</option>
      <option value="DC">District of Columbia</option>
      <!--<option value="FM">Federated States of Micronesia</option>-->
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="GU">Guam</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <!--<option value="MH">Marshall Islands</option>-->
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <!--<option value="MP">Northern Mariana Islands</option>-->
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <!--<option value="PW">Palau</option>-->
      <option value="PA">Pennsylvania</option>
      <option value="PR">Puerto Rico</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <!--<option value="VI">Virgin Islands</option>-->
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
     </select>
    </p>
    <p style="float:left; margin-right: 20px;">
     <label>Zip Code *</label>
     <input type="text" name="zip" id="zip" value="'. (isset($zip) ? $zip : "") .'" maxlength="5">
    </p>
   </fieldset>

   <fieldset>
    <legend><i>Credit/Debit Card Information</i></legend>
    <p>
     <label>Card Number *</label>
     <input type="text" name="card_number" id="card_number" value="'. (isset($card_number) ? $card_number : "") .'">
    </p>
    <p>
     <label>Expiration Date * <span class="help">(MM / YYYY)</span></label>
                 <select name="expiration_month" id="month">
                     <option value="01">01</option>
                     <option value="02">02</option>
                     <option value="03">03</option>
                     <option value="04">04</option>
                     <option value="05">05</option>
                     <option value="06">06</option>
                     <option value="07">07</option>
                     <option value="08">08</option>
                     <option value="09">09</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                 </select>
                 <span id="date_slash">/</span>
                 <select name="expiration_year" id="year">
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                 </select>
    </p>
    <p>
     <label>Security Code * <span class="help">(three- or four-digit code on card)</span></label>
     <input type="text" name="card_cvv" id="card_cvv" value="'. (isset($card_cvv) ? $card_cvv : "") .'" maxlength="4">
    </p>
   </fieldset>

   <input type="submit" name="paymant_form" class="readmore" value="Make a payment">
  </form>
 ';
    }
    return $html;
}


