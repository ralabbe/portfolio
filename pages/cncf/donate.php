<?php include "includes/header.php" ?>

<div class="container-fluid">
  <div class="row donateheader"> 
      <div class="col-xs-0 col-sm-0 col-md-3"></div>
      <div class="col-xs-12 col-sm-12 col-md-7">
      <h1>Make a Donation to Children's Neuroblastoma Cancer Foundation</h1>
      </div>
      <div class="col-2"></div>
  </div> <!-- This is the row donate header closing div !-->

  <div class="row billingsection">
      <div class="col-sm-0 col-md-1 col-lg-2 col-xl-3"></div>
      <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="billingwrapper">
          <h6>Donation Amount</h6>
          <div id="amount">
                <button type="button" class="btn btn-primary btn-lg amt-btn">$25</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$50</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$100</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$500</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$1000</button>
                <button type="button" id="amount-donation-other" class="btn btn-primary btn-lg amt-btn">Other</button>
          </div>

          <div id="amountOtherWrapper" class="hide">
            <span id="dollarSign">$</span>
            <input type="text" name="donationAmountOther" id="donationAmountOther" class="otherDonationForm otherBoxXs">
            <button type="button" id="other-back-to-amounts" class="btn btn-primary btn-lg margin-when-small">Other</button>
          </div> 
        </div> <!-- This is the billingwrapper closing div !-->
    </div> <!-- This is the row billing section col conetent closing div !-->
    <div class="col-sm-0 col-md-1 col-lg-2 col-xl-3"></div>
    
  </div> <!-- This is the row billing section closing div !-->


<div class="row checkboxsection">
    <div class="col-lg-2 col-xl-3"></div>
    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="checkboxdiv">
          <input id="box1" type="checkbox">
          <label for="box1" class="stackchecks">Make this my monthly donation</label>
          <input id="box2" type="checkbox" class="stackchecks">
          <label for="box2" class="stackchecks">Dedicate my donation</label>
        </div>
      </div>
    <div class="col-lg-2 col-xl-3"></div> 
</div> <!-- This is the row checkboxsection closing div !-->  



 <div class="row"> 
 
  <div class="col-lg-2 col-xl-3"></div>    <!-- empty div for centering--> 

 
    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">    <!-- div with content in it -->

      
      <!-- Below donation amount buttons -->

      <hr>
        <h6>Payment Method</h6>
        <button id="credit" type="button" class="btn btn-secondary pay-meth-btn">Credit</button>
        <button id="paypal" type="button" class="btn btn-secondary pay-meth-btn">PayPal</button>
        <button id="check" type="button" class="btn btn-secondary pay-meth-btn">Check</button>
      
        <div id="credit_option" class="">

         <form class="form-inline form-spacing card-info">
            <div class="form-group">
                <label class="control-label" for="card-holder-name">Name on Card:</label>
                <input type="text" class="form-control " name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
            </div>
          </form>

        <form class="form-inline form-spacing">
          <div class="form-group">
              <label class="control-label" for="card-holder-name">Card Number:</label>
              <input type="text" class="form-control " name="card-number" id="card-holder-name" placeholder="Card Number">
          </div>
        </form>



     <form class="form-inline form-spacing">
      <div class="form-group">
        <label class="control-label" for="expiry-month">Expiration Date:</label>
                <select class="form-control" name="expiry-month" id="card-holder-name">
                  <option value="" disabled selected>Month</option>
                  <option value="01">Jan (01)</option>
                  <option value="02">Feb (02)</option>
                  <option value="03">Mar (03)</option>
                  <option value="04">Apr (04)</option>
                  <option value="05">May (05)</option>
                  <option value="06">June (06)</option>
                  <option value="07">July (07)</option>
                  <option value="08">Aug (08)</option>
                  <option value="09">Sep (09)</option>
                  <option value="10">Oct (10)</option>
                  <option value="11">Nov (11)</option>
                  <option value="12">Dec (12)</option>
                </select>
                <select class="form-control" id="yearselect" name="expiry-year">
                  <option value="13">2013</option>
                  <option value="14">2014</option>
                  <option value="15">2015</option>
                  <option value="16">2016</option>
                  <option value="17">2017</option>
                  <option value="18">2018</option>
                  <option value="19">2019</option>
                  <option value="20">2020</option>
                  <option value="21">2021</option>
                  <option value="22">2022</option>
                  <option value="23">2023</option>
                </select>
      </div>
    </form>

    <form class="form-inline form-spacing">
      <div class="form-group">
        <label class="control-label" for="cvv">Card CVV:</label>
        <input type="text" class="form-control" name="cvv" id="card-holder-name" placeholder="Security Code" maxlength="3">  
      </div>
    </form>

    </div> <!-- end of credit_option -->

       
    <!-- Paypal option -->

    <div id="paypal-div" class="hidden-pay-method">
      <h4 class="text-center">After providing your information, you will be asked to log into PayPal.</h4>
    </div>

    <!-- end of paypal option -->


    <!-- check option -->


    <div id="check-option" class="hidden-pay-method">
    <form class="form-inline form-spacing">
      <div class="form-group">
        <label class="control-label" id="checktype" for="expiry-month">Check Type:</label>
                <select class="form-control check-fields" name="expiry-month" id="check-type">
                  <option value="01">Personal Check</option>
                  <option value="02">Business Check</option>
                </select>
        <label class="control-label" id="banklabel" for="expiry-month">Bank Account Type:</label>
                <select class="form-control check-fields" id="yearselect" name="expiry-year">
                  <option value="checking">Checking</option>
                  <option value="savings">Savings</option>
                </select>
      </div>
    </form>


    <form class="form-inline form-spacing card-info">
            <div class="form-group">
                <label class="control-label check-label" for="card-holder-name">Routing Number:</label>
                <input type="text" class="form-control" class="check-input" name="card-holder-name" id="card-holder-name" >
            </div>
    </form>
    <form class="form-inline form-spacing card-info">
             <div class="form-group">
                <label class="control-label check-label" for="card-holder-name">Account Number:</label>
                <input type="text" class="form-control" class="check-input" name="card-holder-name" id="card-holder-name" >
            </div>
    </form>
    <form class="form-inline form-spacing card-info">
             <div class="form-group">
                <label class="control-label check-label" for="card-holder-name">License or state ID #:</label>
                <input type="text" class="form-control" class="check-input" name="card-holder-name" id="card-holder-name">
            </div>
    </form>




    </form>

</div>



    <!-- end of check option -->



    <div class="user-info sect-seperators">
    <h6>Your Information</h6>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name:">
      </div>
  
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name:">
      </div>
  
 
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number:">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email:">
      </div>
  </form>

</div>


   <div class="billing sect-seperators">
    <h6>Billing Address</h6>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address:">
      </div>
 

  
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address two:">
      </div>


 
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ZIP:">
      </div>
 

 
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City:">
      </div>

      </form>
    <form class="form-inline">
    <!-- <label class="col-sm-3 control-label" for="expiry-month">State:</label> -->
    <div class="col-xs-3">
                <select class="form-control" name="expiry-year">
                  <option value="">State</option>
                <option value="AK">Alaska</option>
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="AZ">Arizona</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DC">District of Columbia</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="IA">Iowa</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MA">Massachusetts</option>
                <option value="MD">Maryland</option>
                <option value="ME">Maine</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MO">Missouri</option>
                <option value="MS">Mississippi</option>
                <option value="MT">Montana</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="NE">Nebraska</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NV">Nevada</option>
                <option value="NY">New York</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="PR">Puerto Rico</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VA">Virginia</option>
                <option value="VT">Vermont</option>
                <option value="WA">Washington</option>
                <option value="WI">Wisconsin</option>
                <option value="WV">West Virginia</option>
                <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
    </div> <!-- closes user-info !-->

  </div>  <!-- closes content col !-->    
</div>  <!-- closes row !-->   

<div class="row checkboxsection">
    <div class="col-lg-2 col-xl-3"></div>
    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="checkboxdiv">
          <input id="box3" type="checkbox">
          <label for="box3" class="stackchecks">Remember My Billing Information</label>
          <input id="box4" type="checkbox" class="stackchecks">
          <label for="box4" class="stackchecks">I would like to recieve or continue to recieve emails from CNCF</label>
        </div>
      </div>
    <div class="col-lg-2 col-xl-3"></div> 
</div>

<div class="row bottom-spacing">
          <div class="col-lg-2 col-xl-3"></div>
          <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 text-center">
            <a href="#"><button type="button" class="btn btn-success btn-lg donate-btn">Donate</button></a>
          </div>
          
</div>


</div>   <!-- This is the container fluid closing div !-->   
     
    
<?php include "includes/footer.php" ?>