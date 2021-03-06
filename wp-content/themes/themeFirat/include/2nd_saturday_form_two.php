
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/sendmail2.php" id="formdata-one" name="formdata-one" >  

                     <h2 class="ss-section-title"> Please fill out the information below </h2>
                    <p>
                        Please note that not all dates and/or locations may be available at the time of your request.  We will notify you via email confirmations. <br>
                        <span class="ss-required-asterisk">*Required</span>
                    </p>

                    <div class="content_block ">
                        <div class="align_left ">
                            <p><b>First Name</b> <span class="ss-required-asterisk">*</span></p>
                            <input name="first_name" id="first_name" type="text" value="" class="imput_date">
                        </div>
                        <div class="align_right ">
                            <p><b>Last Name </b><span class="ss-required-asterisk">*</span></p>
                            <input name="last_name" id="last_name" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                     <div class="content_block ">
                        <div class="align_left ">
                            <p><b>Email</b> <span class="ss-required-asterisk">*</span></p>
                            <input name="email" id="email" type="text" value="" class="imput_date">
                        </div>
                        <div class="align_right ">
                            <p>
                                <b>Phone Number</b>  <span class="ss-required-asterisk">*</span> <br>
                                <span class="explain">(555) 555-5555</span>
                            </p>
                            <input name="phone_number" id="phone_number" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                     <div class="content_block ">
                        <div class="align_left ">
                            <p> <b>Address</b> </p>
                            <input name="__address" id="__address" type="text" value="" class="imput_date">
                        </div>
                        <div class="align_right ">
                            <p><b>City, State </b><span class="ss-required-asterisk">*</span></p>
                            <input name="__city_state" id="__city_state" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                     <div class="content_block ">
                        <div class="align_left ">
                            <p><b>ZIP code</b></p>
                            <input name="__zip_code" id="__zip_code" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                    <div class="content_block ">
                        <div class="full-block">
                        <p><b>How would you like to be contacted?</b> <span class="ss-required-asterisk">*<span> </p>
                        <input type="radio" name="you_like_contacted" checked="checked" value="Phone">Phone<br>
                        <input type="radio" name="you_like_contacted" value="Email">Email<br>
                        <input type="radio" name="you_like_contacted" value="Postal Mail">Postal Mail<br>
                        <input type="radio" name="you_like_contacted" value="No Preference">  No Preference<br>
                        </div>
                    </div>  
                    <div class="content_block ">
                        <div class="full-block">
                        <p><b>Please indicate your availability for our FREE consultation session</b> <span class="ss-required-asterisk">*</span> <br>
                              <span class="explain"> 
                                   You may choose multiple options.
                              </span>
                         </p>
                        <input type="checkbox" name="consultation_session[]" value="Weekday(s) - Morning">Weekday(s) - Morning<br>
                        <input type="checkbox" name="consultation_session[]" value="Weekday(s) - Afternoon">Weekday(s) - Afternoon<br>
                        <input type="checkbox" name="consultation_session[]" value="Weeknight(s)">Weeknight(s)<br>
                        <input type="checkbox" name="consultation_session[]" value="Weekend(s) - Morning">Weekend(s) - Morning<br>
                        <input type="checkbox" name="consultation_session[]" value="Weekend(s) - Afternoon">Weekend(s) - Afternoon<br>
                        <input type="checkbox" name="consultation_session[]" value="Weekend(s) - Night">Weekend(s) - Night<br>
                        </div>
                    </div> 
                    <div class="content_block">
                        <div class="full-block">
                            <p><b>Student Name</b> <span class="ss-required-asterisk">*<span>  </p>
                            <input name="student_name" id="student_name" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                    <div class="content_block ">
                        <div class="full-block">
                            <p><b>Student's Grade Level</b> <span class="ss-required-asterisk">*<span> </p>
                           <select name="entry_single" id="entry_single">
                                <option value="K-5">K-5</option>
                                <option value="6th grade">6th grade</option> 
                                <option value="7th grade">7th grade</option>
                                <option value="8th grade">8th grade</option>
                                <option value="Freshmen (9th)">Freshmen (9th)</option>
                                <option value="Sophomore (10th)">Sophomore (10th)</option>
                                <option value="Junior (11th)">Junior (11th)</option>
                                <option value="Senior (12th)">Senior (12th)</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Graduate">Graduate</option>
                            </select>
                        </div>
                    </div> 
                    <div class="content_block ">
                        <div class="full-block ">
                            <p><b>Student's Current School</b> <span class="ss-required-asterisk">*</span>  </p>
                            <input name="student_current_school" id="student_current_school" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                    <div class="content_block ">
                        <div class="full-block">
                        <p>
                            <b>Student's Overall GPA</b> <span class="ss-required-asterisk">*</span><br>
                            <span class="explain"> As of today</span> 
                        </p>
                        <input type="radio" name="student_overall_gpa" checked="checked" value="3.5 - 4.0">3.5 - 4.0<br>
                        <input type="radio" name="student_overall_gpa" value="3.0 - 3.5">3.0 - 3.5<br>
                        <input type="radio" name="student_overall_gpa" value="2.5 - 3.0">2.5 - 3.0<br>
                        <input type="radio" name="student_overall_gpa" value="2.0 - 2.5">2.0 - 2.5<br>
                        <input type="radio" name="student_overall_gpa" value="Below 2.0">Below 2.0<br>
                        <input type="radio" name="student_overall_gpa" value="N/A">N/A<br>
                        </div>
                    </div>    
                     <div class="content_block ">
                        <div class="full-block">
                        <p><b>Has the student taken any of the following standardized tests?</b> <span class="ss-required-asterisk">*<span> <br>
                         </p>
                        <input type="checkbox" name="standardid_tests[]" value="ISEE">ISEE<br>
                        <input type="checkbox" name="standardid_tests[]" value="PSAT">PSAT<br>
                        <input type="checkbox" name="standardid_tests[]" value="PLAN">PLAN<br>
                        <input type="checkbox" name="standardid_tests[]" value="SAT">SAT<br>
                        <input type="checkbox" name="standardid_tests[]" value="SAT II">SAT II<br>
                        <input type="checkbox" name="standardid_tests[]" value="ACT">ACT<br>
                        <input type="checkbox" name="standardid_tests[]" value="None">None<br>
                        <input type="checkbox" name="standardid_tests[]" value="Other">Other : <input name="standardid_tests_other" type="text" value="" class="small-text"><br>
                        </div>
                    </div> 
                    <div class="content_block ">
                        <div class="full-block">
                        <p><b>Please indicate the student's scores in the tests you have mentioned above</b> <br>
                              <span class="explain"> 
                                   i.e. SAT Math: 550, Reading: 600, Writing: 620, etc.
                              </span>
                         </p>
                         <textarea name="student_scores" id="student_scores" cols="40" rows="10"></textarea>
                         </div>
                    </div>   
                    <div class="content_block ">
                        <div class="full-block">
                        <p>
                            <b>Which of the following academic areas do you believe the student struggles the most?</b> <span class="ss-required-asterisk">*</span> <br>
                            <span class="explain"> 
                            You may choose multiple options
                            </span>
                         </p>
                        <input type="checkbox" name="student_struggles[]" value="Math">Math<br>
                        <input type="checkbox" name="student_struggles[]" value="Sciences">Sciences<br>
                        <input type="checkbox" name="student_struggles[]" value="Literature / English"> Literature / English<br>
                        <input type="checkbox" name="student_struggles[]" value="Foreign Languages"> Foreign Languages<br>
                        <input type="checkbox" name="student_struggles[]" value="Social Studies"> Social Studies<br>
                        <input type="checkbox" name="student_struggles[]" value="Standardized Tests">Standardized Tests<br>
                        <input type="checkbox" name="student_struggles[]" value="Test Anxiety"> Test Anxiety<br>
                        <input type="checkbox" name="student_struggles[]" value="Study Skills">  Study Skills<br>
                        <input type="checkbox" name="student_struggles[]" value="Organizational Skills">Organizational Skills<br>
                        <input type="checkbox" name="student_struggles[]" value="Other">Other : <input name="student_struggles_other" type="text" value="" class="small-text"><br>
                        </div>
                    </div> 
                    <div class="content_block ">
                        <div class="full-block">
                        <p>
                            <b>Which FES service are you interested in?</b>  <span class="ss-required-asterisk">*</span> <br>
                            <span class="explain"> 
                                     You may choose as many as you like.
                            </span>
                         </p>
                        <input type="checkbox" name="fes_service[]" value="Academic Coaching">Academic Coaching<br>
                        <input type="checkbox" name="fes_service[]" value="Standardized Test Preparation">Standardized Test Preparation<br>
                        <input type="checkbox" name="fes_service[]" value="College Counseling"> College Counseling<br>
                        <input type="checkbox" name="fes_service[]" value="FES on Skype"> FES on Skype<br>
                        <input type="checkbox" name="fes_service[]" value="Strong Minds, Strong Bodies"> Strong Minds, Strong Bodies<br>
                        </div>
                    </div> 
                   <div class="content_block ">
                   <div class="full-block">
                        <p><b>How did you hear about us?</b> </p>
                        <input type="radio" name="about_us" checked="checked" value="Referred by a friend / family member">Referred by a friend / family member<br>
                        <input type="radio" name="about_us" value="Referred by a teacher / counselor / administrator">Referred by a teacher / counselor / administrator<br>
                        <input type="radio" name="about_us" value="Milk">Newspaper advertisement <br>
                        <input type="radio" name="about_us" value="Milk">Google search <br>
                        <input type="radio" name="about_us" value="Milk">Facebook / LinkedIn / Twitter<br>
                        <input type="radio" name="about_us" value="Milk">Email<br>
                         <input type="radio" name="about_us" value="Milk">Public Event<br>
                        <input type="radio" name="about_us" value="Other"> Other : <input name="about_us_other" type="text" value="" class="small-text"><br>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="send" id="btnsend">
                    <br>
                    <label  id="msg" ></label>
                    </div>

            </form>



     
