
              <form id="formData" name="formData" action="<?php echo get_template_directory_uri();  ?>/sendmail.php">    
                    <h2 class="ss-section-title"> Please fill out the information below </h2>
                    <p>
                        Please note that not all dates and/or locations may be available at the time of your request.  We will notify you via email confirmations. <br>
                        <span class="ss-required-asterisk">*Required</span>
                    </p>
                    <div class="content_block ">
                        <div class="full-block">
                            <p><b>Student Name (First & Last)</b> <span class="ss-required-asterisk">*</span></p>
                            <input name="student_Name" id="student_Name" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                     <div class="content_block ">
                        <div class="align_left">
                            <p><b>Parent Name (First & Last)</b> <span class="ss-required-asterisk">*</span></p>
                            <input name="parent_Name" id="parent_Name" type="text" value="" class="imput_date">
                        </div>                     
                        <div class="align_right">
                            <p><b>Parent Email Address </b><span class="ss-required-asterisk">*</span></p>
                            <input name="parent_email_address" id="parent_email_address" type="text" value="" class="imput_date">
                        </div>
                    </div> 
                     <div class="content_block ">
                        <div class="align_left">
                            <p><b>Address</b> <span class="ss-required-asterisk">*</span></p>
                            <input name="Address" id="Address" type="text" value="" class="imput_date">
                        </div>                     
                        <div class="align_right ">
                            <p><b>City, State Zip</b> <span class="ss-required-asterisk">*</span></p>
                            <input name="City_State" id="City_State" type="text" value="" class="imput_date">
                        </div>

                    </div> 
                     <div class="content_block ">
                        <div class="align_left ">
                            <p><b>Parent Primary Phone Number</b> <span class="ss-required-asterisk">*</span></p>
                            <input name="parent_primary" id="parent_primary" type="text" value="" class="imput_date">
                        </div>                     
                        <div class="align_right ">
                            <p><b>Parent Secondary Phone Number</b></p>
                            <input name="parent_secondary" id="parent_secondary"type="text" value="" class="imput_date">
                        </div>

                    </div> 
                    <div class="content_block ">
                        <div class="full-block">
                            <p><b>Student's High School</b> <span class="ss-required-asterisk">*</span><br>
                            <span class="explain">Junior High, if the student is preparing for the Duke TIP Program or Johns Hopkins CTY Program.</span>
                                 
                            </p>
                            <input name="student_high" id="student_high" type="text" value="" class="imput_date">                        
                        </div>
                    </div>                    
                    <div class="content_block ">
                        <div class="full-block">
                            <p><b>Student Grade Level</b> <span class="ss-required-asterisk">*</span> </p>
                            <input type="radio" name="student_grade"   value="6th"><label for="student_grade">6th</label><br>
                            <input type="radio" name="student_grade" value="7th"><label for="student_grade">7th</label><br>
                            <input type="radio" name="student_grade" value="8th"><label for="student_grade">8th</label><br>
                            <input type="radio" name="student_grade" value="9th (Freshman)"><label for="student_grade">9th (Freshman)</label><br>
                            <input type="radio" name="student_grade" value="10th (Sophomore)"><label for="student_grade">10th (Sophomore)</label><br>
                            <input type="radio" name="student_grade" value="11th (Junior)"><label for="student_grade">11th (Junior)</label><br>
                            <input type="radio" name="student_grade" value="12th (Senior)"><label for="student_grade">12th (Senior)</label><br>
                        </div>
                    </div>
                    <div class="content_block ">
                        <div class="full-block">
                            <p><b>Select your Practice Test</b> <span class="ss-required-asterisk">*</span><br>
                                <span class="explain">Please note that if you are using this day to practice for the PSAT or PLAN test, you can take the SAT to practice for the PSAT, and the ACT to practice for the PLAN.</span>
                            </p>
                            <input type="radio" name="Select_your_Practice" value="SAT" ><label for="Select_your_Practice">SAT</label><br>
                            <input type="radio" name="Select_your_Practice" value="ACT"><label for="Select_your_Practice">ACT</label><br>
                            <input type="radio" name="Select_your_Practice" value="ISEE"><label for="Select_your_Practice">ISEE</label><br>
                            <input type="radio" name="Select_your_Practice" value="SSAT"><label for="Select_your_Practice">SSAT</label><br>
                            <input type="radio" name="Select_your_Practice" value="STAAR"><label for="Select_your_Practice">STAAR</label><br>
                            <input type="radio" name="Select_your_Practice" value="HSPT"><label for="Select_your_Practice">HSPT</label><br>
                            <input type="radio" name="Select_your_Practice" value="SAT Subject Test"> <label for="Select_your_Practice">SAT Subject Test (Please select "Other" and enter the subject in the blank available.)</label><br>
                            <input type="radio" name="Select_your_Practice" value="Other"><label for="Select_your_Practice"> Other :</label> <input name="Select_your_Practice_other" type="text" value="" class="small-text"><br>                        
                        </div>                     
                    </div>  

                    <div class="content_block ">
                        <div class="full-block ">
                            <p><b>Select the date of your practice test.</b> <span class="ss-required-asterisk">*</span> <br>
                                <span class="explain">A practice test will be held on every 2nd Saturday of every month. The following dates are available for 2013 and 2014. (If you see a date missing, it is because that date is full and no longer available.)</span>
                            </p>
                            <input type="radio" name="entry.11.group" value="February 8, 2014" class="ss-q-radio" id="group_11_1">
                            <label for="entry.11.group">February 8, 2014</label><br>
                            
                            <input type="radio" name="entry.11.group" value="March 8, 2014" class="ss-q-radio" id="group_11_2">
                            <label for="entry.11.group">March 8, 2014</label><br>
                            
                            <input type="radio" name="entry.11.group" value="April 12, 2014" class="ss-q-radio" id="group_11_3">
                            <label for="entry.11.group">April 12, 2014</label><br>
                         
                            <input type="radio" name="entry.11.group" value="May 10, 2014" class="ss-q-radio" id="group_11_4">
                            <label for="entry.11.group">May 10, 2014</label><br>
                            
                            <input type="radio" name="entry.11.group" value="June 14, 2014" class="ss-q-radio" id="group_11_5">
                            <label for="entry.11.group">June 14, 2014</label><br>

                            <input type="radio" name="entry.11.group" value="July 12, 2104" class="ss-q-radio" id="group_11_6">
                            <label for="entry.11.group">July 12, 2104</label><br>

                            <input type="radio" name="entry.11.group" value="August 9, 2014" class="ss-q-radio" id="group_11_7">
                            <label for="entry.11.group"> August 9, 2014</label><br>
                         
                            <input type="radio" name="entry.11.group" value="September 13, 2014" class="ss-q-radio" id="group_11_8">
                            <label for="entry.11.group"> September 13, 2014</label><br>

                            <input type="radio" name="entry.11.group" value="October 11, 2014" class="ss-q-radio" id="group_11_9">
                            <label for="entry.11.group">October 11, 2014</label><br>
                            
                            <input type="radio" name="entry.11.group" value="November 8. 2014" class="ss-q-radio" id="group_11_10">
                            <label for="entry.11.group">November 8. 2014</label><br>

                            <input type="radio" name="entry.11.group" value="December 13, 2014" class="ss-q-radio" id="group_11_11">
                            <label for="entry.11.group">December 13, 2014</label><br>

                        </div>
                    </div>
                    <div class="content_block ">
                        <div class="full-block ">
                        <p><b>Please select the location that you are registering to take the practice test.</b> <span class="ss-required-asterisk">*</span> </p>
                            <input type="radio" name="practice_test" id="practice_test"  value="Firat Educational Solutions Office: 3701 W. Alabama St., Ste. 390, Houston, TX 77027">  Firat Educational Solutions Office: 3701 W. Alabama St., Ste. 390, Houston, TX 77027<br>
                        </div>
                    </div>     
                    <div class="content_block ">
                        <h4>Please answer the following questions to help us analyze your practice test scores. </h4>
                    </div>
                    <div class="content_block ">
                        <div class="full-block ">
                            <p><b>Please tell us the date or dates you are planning on taking the OFFICIAL SAT or ACT.</b>  <span class="ss-required-asterisk">*</span> <br>
                                <span class="explain">Even if you have not yet registered, this information can help us when we analyze your practice test. Please check all that apply </span> 
                            </p>
                            <input type="checkbox" name="date_test[]" value="February ACT (02/08/14)">
                            <label for="date_test">February ACT (02/08/14)</label><br>
                            
                            <input type="checkbox" name="date_test[]" value="March SAT (03/08/14)" >
                            <label for="date_test">March SAT (03/08/14)</label><br>

                            <input type="checkbox" name="date_test[]" value="April ACT (04/12/14)">
                            <label for="date_test">April ACT (04/12/14)</label><br>
                             
                            <input type="checkbox" name="date_test[]" value="May SAT (05/03/14)" >
                            <label for="date_test">May SAT (05/03/14)</label><br>
                            
                            <input type="checkbox" name="date_test[]" value="June SAT (06/07/14)" >
                            <label for="date_test">June SAT (06/07/14)</label><br>
                         
                            <input type="checkbox" name="date_test[]" value="June ACT (06/14/14)" >
                            <label for="date_test">June ACT (06/14/14)</label><br>

                            <input type="checkbox" name="date_test[]" value="September ACT (09/13/14)" >
                            <label for="date_test">September ACT (09/13/14)</label><br>
                         
                            <input type="checkbox" name="date_test[]" value="October ACT (10/25/14)">
                            <label for="date_test"> October ACT (10/25/14)</label><br>
                         
                         
                            <input type="checkbox" name="date_test[]" value="December ACT (12/13/14)" >
                            <label for="date_test">December ACT (12/13/14)</label><br>
                         
                            <input type="checkbox" name="date_test[]" value="February ACT (02/07/15)" >
                            <label for="date_test">February ACT (02/07/15)</label><br>

                            <input type="checkbox" name="date_test[]" value="April ACT (04/18/15)">
                            <label for="date_test">April ACT (04/18/15) </label><br>

                            <input type="checkbox" name="date_test[]" value="June ACT (06/13/15)" >
                            <label for="date_test">June ACT (06/13/15)</label><br>
                            
                            <input type="checkbox" name="date_test[]" value="Not Applicable.  I am not taking the SAT or ACT" >
                            <label for="date_test">Not Applicable.  I am not taking the SAT or ACT</label><br>
                        </div>  
                    </div>   
                    <div class="content_block ">
                        <div class="full-block ">
                        <p ><b>If you are planning to take an exam for High School Admissions, please tell us which test and when you plan on taking it.</b> <br>
                        <span class="explain">Please skip this question if you are taking the SAT or ACT.</span>
                         </p>
                         <textarea name="question_one" id="question_one" cols="40" rows="10"></textarea>
                         </div>
                    </div>   
                    <div class="content_block ">
                        <div class="full-block ">
                        <p ><b>Please tell us if you have already taken the SAT or ACT tests. If you remember the dates and scores, please include those.</b> <span class="ss-required-asterisk">*</span>
                         </p>
                         <textarea name="question_two" id="question_two" cols="40" rows="10"></textarea>
                         </div>
                    </div>
                    <div class="content_block ">
                        <div class="full-block ">
                        <p >
                            <b>Please tell us how you have prepared (or are currently preparing) to take your test.</b> <span class="ss-required-asterisk">*</span>
                         </p>
                         <textarea name="question_thrre" id="question_thrre" cols="40" rows="10"></textarea>
                         </div>
                    </div>
                    <div class="content_block ">
                    <div class="full-block ">
                        <p >
                            <b>Do you currently have a test preparation book that you use to prepare? If so, which book?</b> <span class="ss-required-asterisk">*</span> 
                         </p>
                         <textarea name="question_for" id="question_for" cols="40" rows="10"></textarea>
                         </div>
                    </div>
                    <div class="content_block ">
                    <div class="full-block ">
                        <p >
                            <b>Is there any other information you would like to tell us that can help us analyze your practice test?</b> <span class="ss-required-asterisk">*</span> 
                        </p>
                         <textarea name="question_five" id="question_five" cols="40" rows="10"></textarea>
                         </div>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="send" id="btnsend"/>
                    <br>
                    <label  id="msg" ></label>
            </form>
