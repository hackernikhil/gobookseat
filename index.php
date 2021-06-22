<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Gobookseat</title>
    <meta charset="UTF-8"/>
 
   <?php include ('header.php'); ?>
      
   <div class="theme-hero-area theme-hero-area-primary">
      <div class="theme-hero-area-bg-wrap">
       
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
        <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
      </div>
      <div class="theme-hero-area-body">
		
        <div class="_pt-60 _pb-200 _pv-mob-50">
          <div class="container">
            <div class="theme-search-area-tabs">
              <div class="theme-search-area-tabs-header _c-w _ta-mob-c _pb-70">
				
               
              </div>
              <div class="tabbable">
                <ul class="nav nav-tabs nav-line nav-white nav-lg nav-mob-inline" role="tablist">
                  <li class="active" role="presentation">
                    <a aria-controls="SearchAreaTabs-1" role="tab" data-toggle="tab" href="#SearchAreaTabs-1">Hotels</a>
                  </li>
                 
                  <li role="presentation">
                    <a aria-controls="SearchAreaTabs-3" role="tab" data-toggle="tab" href="#SearchAreaTabs-3">Flights</a>
                  </li>
                  
				
				
                </ul>
                <div class="tab-content _pt-20">
                  <div class="tab-pane active" id="SearchAreaTabs-1" role="tab-panel">
                    <div class="theme-search-area theme-search-area-stacked">
                      <div class="theme-search-area-form">
                        <div class="row" data-gutter="none">
                          <div class="col-md-3 ">
                            <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                <input class="theme-search-area-section-input typeahead" type="text" placeholder="Hotel Location" data-provide="typeahead"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="row" data-gutter="none">
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                    <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                                    <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                    <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                                    <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="row" data-gutter="none">
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr quantity-selector" data-increment="Rooms">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-tag"></i>
                                    <input class="theme-search-area-section-input" value="1 Room" type="text"/>
                                    <div class="quantity-selector-box" id="HotelSearchRooms">
                                      <div class="quantity-selector-inner">
                                        <p class="quantity-selector-title">Rooms</p>
                                        <ul class="quantity-selector-controls">
                                          <li class="quantity-selector-decrement">
                                            <a href="#">&#45;</a>
                                          </li>
                                          <li class="quantity-selector-current">1</li>
                                          <li class="quantity-selector-increment">
                                            <a href="#">&#43;</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr quantity-selector" data-increment="Guests">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-people"></i>
                                    <input class="theme-search-area-section-input" value="2 Guests" type="text"/>
                                    <div class="quantity-selector-box" id="HotelSearchGuests">
                                      <div class="quantity-selector-inner">
                                        <p class="quantity-selector-title">Guests</p>
                                        <ul class="quantity-selector-controls">
                                          <li class="quantity-selector-decrement">
                                            <a href="#">&#45;</a>
                                          </li>
                                          <li class="quantity-selector-current">1</li>
                                          <li class="quantity-selector-increment">
                                            <a href="#">&#43;</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 ">
                            <button class="theme-search-area-submit _mt-0 theme-search-area-submit-no-border theme-search-area-submit-curved">Search</button>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-area-options _mob-h theme-search-area-options-white theme-search-area-options-dot-primary-inverse clearfix">
                        <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                          <label class="btn btn-primary active">
                            <input type="radio" name="hotel-options" id="hotel-option-1" checked/>Any
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="hotel-options" id="hotel-option-2"/>Business
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="hotel-options" id="hotel-option-3"/>Family
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="hotel-options" id="hotel-option-4"/>Luxury
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="hotel-options" id="hotel-option-5"/>Budget
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="hotel-options" id="hotel-option-6"/>Romantic
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="SearchAreaTabs-3" role="tab-panel">
                    <div class="theme-search-area theme-search-area-stacked">
                      <div class="theme-search-area-form">
                        <div class="row" data-gutter="none">
                          <div class="col-md-5 ">
                            <div class="row" data-gutter="none">
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" type="text" placeholder="Departure" data-provide="typeahead"/>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" type="text" placeholder="Arrival" data-provide="typeahead"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 ">
                            <div class="row" data-gutter="none">
                              <div class="col-md-4 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                    <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                                    <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                    <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                                    <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 ">
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr quantity-selector" data-increment="Passengers">
                                  <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-people"></i>
                                    <input class="theme-search-area-section-input" value="1 Passenger" type="text"/>
                                    <div class="quantity-selector-box" id="FlySearchPassengers">
                                      <div class="quantity-selector-inner">
                                        <p class="quantity-selector-title">Passengers</p>
                                        <ul class="quantity-selector-controls">
                                          <li class="quantity-selector-decrement">
                                            <a href="#">&#45;</a>
                                          </li>
                                          <li class="quantity-selector-current">1</li>
                                          <li class="quantity-selector-increment">
                                            <a href="#">&#43;</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 ">
                            <button class="theme-search-area-submit _mt-0 theme-search-area-submit-no-border theme-search-area-submit-curved">Search</button>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-area-options theme-search-area-options-white theme-search-area-options-dot-primary-inverse clearfix">
                        <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                          <label class="btn btn-primary active">
                            <input type="radio" name="flight-options" id="flight-option-1" checked/>Round Trip
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="flight-options" id="flight-option-2"/>One Way
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
	
	
	
	
	
<div class="container ">
	<div class="adds"><img src="assets/images/adds.jpg" class="img-responsive"></div>
</div>	


<div class="choose">
	<div class="container">
		
		<h2>Why People Choose us</h2>
		
		<div class="col-sm-4">
			<div class="chosse">
				<img src="assets/images/img-1.png">
				<h3>Affordable</h3>
				<p>We believe that travelling or going on a holiday should not break the bank. Get exclusive deals from our vendors to travel on any budget.</p>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="chosse">
				<img src="assets/images/img-2.png">
				<h3>Simple to Use</h3>
				<p>Plan for your getaway trip from your flights, your transport and your hotel room all in one place. No surprises mean no hidden costs.</p>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="chosse">
				<img src="assets/images/img-3.png">
				<h3>Go anywhere</h3>
				<p>We are constantly expanding our networks to enable travelers to be able to go anywhere around the world.</p>
			</div>
		</div>
			
		
	</div>
</div>	
	
	
	
<div class="travel_update">		
	<div class="container">
	
	<h2>Covid-19 Travel Updates</h2>
	
	<div class="col-sm-4 ">
		<div class="update_pic">
			<img src="assets/images/1.png" class="img-responsive">
			<h1>RT - PCR Test 72 Hours Before Arrival</h1>
		</div>
	</div>	
	
	<div class="col-sm-4 ">
		<div class="update_pic">
			<img src="assets/images/2.png" class="img-responsive">
			<h1>Check your Arrival Countries Travel Requirements</h1>
		</div>
	</div>	
	
	<div class="col-sm-4 ">
		<div class="update_pic">
			<img src="assets/images/3.png" class="img-responsive">
			<h1>Vaccination Certificate if you have been vaccinated</h1>
		</div>
	</div>
	
	<div class="clearfix"></div><br><br>
		
	<div class="col-sm-12 text-center">
		<div class="further">
			For further information please click: <a href="https://www.iatatravelcentre.com/world.php" target="_blank">https://www.iatatravelcentre.com/world.php	</a>
		</div>
	</div>
		
	</div>
</div>	
	

<?php include ('footer.php'); ?>

