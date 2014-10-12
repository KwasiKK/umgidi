    <div class="container">
        <div class="row">
            <div class="container-fluid" style="text-align:center;">
		<!-- Home -->
		<div id="home" class="content">
			
		</div>
		<!-- /Home -->
		
		<!-- Artist -->
		<div id="artist" class="cinema">
			<div class="content">
				<div id="artist-login">
					<!--<p><button id="button1" class="btn btn-2 btn-2g"><span>Login<span></button><p><br/>-->
					<div id="button1" class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="button">Login</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-1">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Login</h2>
									<form>
										<p><label>Email</label><input type="text" /></p>
										<p><label>Password</label><input type="password" /></p>
										<p><button>Login</button></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<div  id="button2" class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Signup</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Sign Up</h2>
									<form>
										<p><label>Email</label><input type="text" /></p>
										<p><label>Password</label><input type="password" /></p>
										<p><label>Repeat Password</label><input type="password" /></p>
										<p><button>Sign Up</button></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button 
					<p><br/></p>
					<p><br/></p>
					<p><br/></p>
					<p><br/></p>
					<p><br/></p>
					<p><br/></p>
					<p><br/></p>
					<p><br/></p>
					<p><button id="button2" class="btn btn-2 btn-2h"><span>Register</button><p>-->
				</div>
			</div>
		</div>
		<!-- /Portfolio -->
		
		<!-- Services -->
		<div id="services" class="cinema">
			<div class="content">
			</div>
		</div>
		<!-- /About -->
		
		<!-- Gallery -->
		<div id="gallery" class="cinema">
			<div class="content">
				<ul id="st-stack" class="st-stack-raw">
					<li><div class="st-item"><a href=""><img src="soh/1.jpg"/></a></div><div class="st-title"><h2>Graverobber</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/2.jpg"/></a></div><div class="st-title"><h2>Hideous Snake Queen</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/3.jpg"/></a></div><div class="st-title"><h2>Queen of Hearts</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/4.jpg"/></a></div><div class="st-title"><h2>Dead Pirate vs Kraken</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/5.jpg"/></a></div><div class="st-title"><h2>Mountain Lion</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/6.jpg"/></a></div><div class="st-title"><h2>Flying Skull</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/7.jpg"/></a></div><div class="st-title"><h2>The Fly &amp; Bureaucratic Elephant</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/8.jpg"/></a></div><div class="st-title"><h2>Failsnake</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/9.jpg"/></a></div><div class="st-title"><h2>Cultist</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/10.jpg"/></a></div><div class="st-title"><h2>Crusader &amp; Viking</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/11.jpg"/></a></div><div class="st-title"><h2>Crocodile</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/12.jpg"/></a></div><div class="st-title"><h2>Captain Banana</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/13.jpg"/></a></div><div class="st-title"><h2>Werewolf</h2></div></li>
					<li><div class="st-item"><a href=""><img src="soh/14.jpg"/></a></div><div class="st-title"><h2>Vegetables</h2></div></li>
				</ul>
				<p>Tip: to see a continuous flow, keep your mouse pressed on the navigation arrows.</p>
			</div>
		</div>
		
		<!-- Travel -->
		<div id="travel" class="cinema">
			<div class="content">
				 <div style="background-color: #CCC; left: 270px; width:500px; height:300px;" id="map_canvas"></div>
				 <form action="#" onSubmit="calcRoute();return false;" id="routeForm">
					  <label>
					    From: <br />
					    <input type="text" id="routeStart" value="">
						  <!--<a href="#" class="autoLink" style="display: none;">Use current location: <span>not found</span></a>-->
					  </label>
					  <label> 
					    To: <br />
					    <input type="text" id="routeEnd" value="R392, Sterkspruit">
					  </label>
					  <label><input type="radio" name="travelMode" value="DRIVING" checked /> Driving</label>
					  <label><input type="radio" name="travelMode" value="BICYCLING" /> Bicylcing</label>
					  <label><input type="radio" name="travelMode" value="TRANSIT" /> Public transport</label>
					  <label><input type="radio" name="travelMode" value="WALKING" /> Walking</label>
					  <input type="submit" value="Calculate route">
				</form>
				<div id="directionsPanel">
				  Enter a starting point and click "Calculate route".
				</div>
			</div>
		</div>
		<!-- Sponsors -->
		<div id="sponsors" class="cinema">
			<div class="content">
			</div>
		</div>
		<!-- Contact -->
		<div id="contact" class="cinema">
			<div class="content">
				<form role="form" class="span8">
				  <div  class="row">
						<fieldset>
						<div  id="contact-us" class="span3">
							 <div class="form-group">
								<label>First Name</label>
								<input type="text" class="span3" placeholder="eg John..."><br/>
							</div>
							
							 <div class="form-group">
								<label>Last Name</label>
								<input type="text" class="span3" placeholder="eg Doe..."><br/>
							</div>
							
							 <div class="form-group">
								<label>Email Address</label>
								<input type="email" class="span3" placeholder="eg username@umgidi.com"><br/>
							</div>
							
							 <div class="form-group">
								<label>Subject
									<select id="subject" name="subject" class="span3">
										<option value="na" selected="">Choose One:</option>
										<option value="service">General Customer Service</option>
										<option value="suggestions">Suggestions</option>
										<option value="product">Product Support</option>
									</select>
								</label><br/>
							</div>
							
							<div style="line-height:5px;" class="form-group">
								<div class="span5">
									<label>Message</label>
									<textarea name="message" id="message" class="input-xlarge span5" style="margin: 0px;
																					width: 252px;
																					height: 198px;" rows="10">
									</textarea>
								</div><br/>
							</div>
						</div>
						
						 <div class="form-group">
							<button type="submit" class="btn btn-primary">Send</button>
						</div>
						</fieldset>
						
					</div>
				</form>
			</div>
		</div>
		
		<!--About us-->
		<div id="about" class="cinema">
			<div class="content">
				<div class="paragraph">
				<p id="paragraph">Sterkspruit is a small, scenic rural town consisting of many tribal villages. Situated in the Herschel district, these villages are a mixture of amaXhosa, amaHlubi,  baSotho as well as San people and offer a fascinating multi-cultural diversity. </p><br/>
				<p id="paragraph2">Whilst in Herschel lookout for the Witterbergen mission where Olive Schreiner was born and grew up. Sterkspruit is also a gateway to LESOTHO via Tele Bridge which is also a famous historic border gate. Most cadres passed through Tele Bridge during the time of struggling. </p><br/>
				<p id="paragraph3">	
				Umgidi Cultural Festival (Umgidi literally means feast)  is created to introduce Sterkspruit diversity arts, cultures and food in order to create an understanding and harmony between AmaXhosa, AmaHlubi/ Mfengu and BaSotho/ Baphuti tribes within the area. It seeks to involve creation and performance of high quality, innovative touring theatre productions, film and radio drama, and work with the development community to use performing arts and the arts to support positive social transformation on key thematic areas of health, good governance. HIV/ Aids prevention, maternal health and climate change.

				</p>
				</div>
			</div>
		</div>
	     </div>
        </div>
    </div>