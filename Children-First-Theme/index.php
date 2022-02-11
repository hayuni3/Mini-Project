 <?php get_header(); ?>
 
 <!--hero section-->
 <div class="container">
    <div class="row">
      <div class="col-lg-7 offset-lg-1">
        <div class="col-md-12"><h1 class="home-main-title">high opportunity area home finder tool</h1></div>
        <div class="col-md-12"><img src="assets/arrow_down.png" class=" arrow-down"></div>
        <div class="col-md-12 welcome-title">Welcome!</div>
        <p class="home-content">We appreciate your participation in the Children First North Texas program. This tool is provided to help you identify high opportunity areas that are eligible for the program.</p>
      </div>

      <div class="col-lg-4" >
        <img src="./assets/Main-Image_1.png" width="100%">
      </div>
    </div>
  </div>
  
 
 <!--Card-section-->
  <main>
    <section class="section-1 container-fluid ">
        <div class="section-title text-center p-4">
          <h1>There are four pieces of important information this tool will provide:</h1>
        </div>
        <div class="container px-4 text-center">
          <div class="row g-4 .col-sm-2 .col-md-2"> 
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="title">
                    <h1 class="card-title">1</h1>
                    <div class="heading-underline"></div>
                  </div>
                  <p class="card-text">Map of the areas across North Texas that are eligible for this program</p>
                </div>
              </div>
            </div>
    
          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h1 class="card-title">2</h1>
                  <div class="heading-underline"></div>
                </div>
                <p class="card-text">Confirmation of whether or not a particular property is eligible for this program</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h1 class="card-title">3</h1>
                  <div class="heading-underline"></div>
                </div>
                <p class="card-text">What the housing assistance payment standards are in that zip code</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h1 class="card-title">4</h1>
                  <div class="heading-underline"></div>
                </div>
                <p class="card-text">A property map so you can see where a property is located</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </secction>
<!--Section Program eligible area-->
    <section class="section-2 container-fluid p-5">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center" text-center>
            <img src="assets/arrow_down.png" class="arrow_down"><br>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="section-2-title">
                <span>Program eligible areas across north tx</span>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 p-5">
              <img src="assets/map-image.png" class="static-map" ><br>
            </div>
           
            <div class="col-md-10 col-sm-12 offset-md-2">
              <form>
                <label for="address" class="form-label">Enter a property address here:</label>
                <input type="text" class="form-control" id="address" placeholder="Please enter, street address, city, state and zip code here">
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Section -3 Eligible Property Results -->
      <section class="section-3 container-fluid p-5">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center section-3-title">
                <span>Your results for this address:</span>
          </div>
          <div class="d-none d-sm-block  d-md-none col-md-12 col-sm-12 text-center">
            <span class="result-text">Eligible for program support?</span>
          </div>
          <div class="col-md-6 offset-md-3 col-sm-12 justify-content-center text-center p-2">
            <span class="result-text">2020 housing assistance payment standards (the amount DHA will pay) for this zip code:</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1 col-sm-12 justify-content-center text-center p-2">
            <table width="100%">
                <tbody>
                  <tr class="table-header-title">    
                    <td ># OF BEDROOMS</td>
                    <td rowspan="11"><img src="assets/yellow_vertical_bar.svg" height="500"></td>
                    <td >NON-CFNTX VOUCHER</td>
                    <td rowspan="11"><img src="assets/yellow_vertical_bar.svg" height="500"></td>
                    <td >CFNTX VOUCHER</td>
                  </tr>
                  <tr>
                    <td  colspan="8"><img src="assets/yellow_horizontal_bar.svg" width="100%"></td>
                  </tr>
                  <tr class="td-text">
                    <td>Studio</td>
                    <td>$1,260</td>
                    <td class="td-text-amount">$1,500</td>
                  </tr>
                  <tr>
                    <th  colspan="8"><img src="assets/yellow_horizontal_bar.svg" width="100%"></th>
                  </tr>
                  <tr class="td-text">
                    <td>1 Bedroom</td>
                    <td>$1,440</td>
                    <td class="td-text-amount">$1,800</td>
                  </tr>
                  <tr>
                    <th  colspan="8"><img src="assets/yellow_horizontal_bar.svg" width="100%"></th>
                  </tr>
                  <tr class="td-text">
                    <td>2 Bedroom</td>
                    <td>$1,730</td>
                    <td class="td-text-amount">$2,200</td>
                  </tr>
                  <tr>
                    <th  colspan="8"><img src="assets/yellow_horizontal_bar.svg" width="100%"></th>
                  </tr>
                  <tr class="td-text">
                    <td>3 Bedroom</td>
                    <td>$2,270</td>
                    <td class="td-text-amount">$3,200</td>
                  </tr>
                  <tr>
                    <th  colspan="8"><img src="assets/yellow_horizontal_bar.svg" width="100%"></th>
                  </tr>
                  <tr class="td-text">
                    <td>4 Bedroom</td>
                    <td>$2,980</td>
                    <td class="td-text-amount">$3,500</td>
                  </tr>
                </tbody>
            </table><!-- -->
          </div>
        </div>
      </section>
      <!--Accordion-section-4-->
      <section class="section-4 container-fluid p-5 text-center">
        <div class="section-4-title p-4">
          <h4>Mobility assistance available:</h4>
        </div>

        <div class=" vstack gap-3 col-md-8 col-sm-12 offset-md-2 accordion" id="accordionPanels">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Moving Expenses
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                DHA offers a reimbursement of up to $200 to help with moving expenses as part of this program for all bedroom sizes. The $200 is paid after the unit passes inspection and you are moved into your new home.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Application Fees
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur..
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Security & Utility Deposits
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Landlord Bonus Incentive
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </div>
            </div>
          </div>
        </div>
        <div>
          <img src="assets/arrow_down.png" class="arrow_down-2"><br>
        </div>

      </section>
<!--Section-4 near property area-->
      <section class="section-4 container-fluid text-center">

        <div class="top-title">
          <span>See what is near this property:</span>
        </div>
        <div class="dynamic-location">
          <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1JjT4sTqaCMMewr2eGB-ZDqth9IoEGm9g&ehbc=2E312F" width="100%" height="580"></iframe>
      </div>
        <div class="row justify-content-center p-5">
          <div class="col-md-4 col-sm-5 section-4-title">Print this information or screenshot on mobile device</div>
          <div class="col-md-2  col-sm-3 printer-image"><a href="javascript:map_print();"><img src="./assets/print.svg"></a></div>
        </div>
        <div class="col-md-6 offset-md-3 section-4-content">
          <span>If you have any questions, or would like additional information, please reach out to your Housing Navigator. Thank you!</span>

        </div>
        <div clss="col">
          <hr class="hr-footer-style" />
        </div>

      </section>
  </main>
<?php get_footer(); ?>