<?php
//$data = getDataAsJSON($_GET['id']);
//echo $_GET['jsonp_callback'] . '(' . $data . ');';

// jargon buster dictionary

header('Access-Control-Allow-Origin: *');
header('Content-Type: ' . ($callback ? 'application/javascript' : 'application/json') . ';charset=UTF-8');

$data = (object)array(
        'sections' => array(
                "section1"=> (object)array(
                "name"=>"Start",
                "questions"=>array(
                    "Q1"=>(object)array (

                        "Q"=>"<p>Do you carry on any credit-related regulated activities? See our <a href='http://www.fca.org.uk/your-fca/documents/credit-ready-jargon-buster' target='_blank'>jargon buster</a> for the full list.</p>",
                        "Y"=>"Q2",
                        "N"=>"R1",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q2"=>(object)array (

                        "Q"=>"<p>Are you a not-for-profit organisation?</p>",
                        "Y"=>"R2",
                        "N"=>"_nextSection",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    )

                
                ),
                "results"=>(object)array(
                       "RF"=>"<p>Apply for full permission</p>",
                       "RL"=>"<p>Apply for limited permission</p>",
                       "R1"=>"<p>Check your firm's position using the information on our 'do I need to be authorised' webpage: <a href='http://fca.org.uk/firms/about-authorisation/do-i-need-to-be-authorised' target='_blank'>fca.org.uk/firms/about-authorisation/do-i-need-to-be-authorised</a></p>",
                       "R2"=>"<p>Please visit <a href='http://fca.org.uk/creditready' target='_blank'>fca.org.uk/creditready</a> to complete our not-for-profit decision tool.</p>"
                      

                )

            ),
            "section2"=> (object)array(
                "name"=>"Lending",
                "questions"=>array(
              
                    "Q1"=>(object)array (

                        "Q"=>"<p>Do you enter into regulated credit agreements as a lender, or exercise, or to have the right to exercise, the lender’s rights and duties under a regulated credit agreement?</p>",
                        "Y"=>"Q2",
                        "N"=>"_nextSection",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q2"=>(object)array (

                        "Q"=>"<p>Is your main business activity to sell goods or supply services and not to carry out a regulated activity (other than regulated consumer hire agreements)?</p>",
                        "Y"=>"Q3",
                        "N"=>"RF",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q3"=>(object)array (

                        "Q"=>"<ul><li>A).Do you charge any money to borrowers in connection with the provision of credit – including interest payments and other charges?</li><li>B). Is the obligation to repay secured by a legal mortgage on land?</li><li>C). Are your agreements ever hire purchase or conditional sale agreements?</li></ul>",
                        "Y"=>"RF",
                        "N"=>"Q4",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'(to any of these questions)',
                        "NO_EXTRA"=>''
                    ),
                    "Q4"=>(object)array (

                        "Q"=>"<p>Do you carry on any other credit related activities?</p>",
                        "Y"=>"_nextSection",
                        "N"=>"RL",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    )

                    



                ),
                "results"=>(object)array(
                       "RF"=>"<p>Apply for full permission</p>",
                       "RL"=>"<p>Apply for limited permission</p>",
                       "R1"=>"<p>Check your firm's position using the information on our 'do I need to be authorised' webpage: <a href='http://fca.org.uk/firms/about-authorisation/do-i-need-to-be-authorised'>fca.org.uk/firms/about-authorisation/do-i-need-to-be-authorised</a></p>",
                       "R2"=>"<p>Please visit fca.org.uk/creditready to complete our mini decision tree."
                      

                )

            ),
            "section3"=> (object)array(
                "name"=>"Peer-to-peer lending platform",
                "questions"=>array(
                    "Q1"=>(object)array (

                        "Q"=>"<p>Do you operate an electronic system in relation to lending (sometimes referred to as a peer-to-peer lending platform)?</p>",
                        "Y"=>"RF",
                        "N"=>"_nextSection",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    )

                ),
                "results"=>(object)array(
                       "RF"=>"<p>Apply for full permission</p>",
                       "RL"=>"<p>Apply for limited permission</p>"
                 
                      

                )

            ),
             "section4"=> (object)array(
                "name"=>"Activities relating to debt",
                "questions"=>array(
                    "Q1"=>(object)array (

                        "Q"=>"<p>Do you carry on debt collection, debt administration, debt adjusting or debt counselling?</p>",
                        "Y"=>"Q2",
                        "N"=>"_nextSection",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q2"=>(object)array (

                        "Q"=>"<p>Do you carry on debt collection?</p>",
                        "Y"=>"RF",
                        "N"=>"Q3",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q3"=>(object)array (

                        "Q"=>"<p>Do you carry on debt administration?</p>",
                        "Y"=>"RF",
                        "N"=>"Q4",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q4"=>(object)array (

                        "Q"=>"<p>Do you carry on debt counselling and/or debt adjusting?</p>",
                        "Y"=>"Q5",
                        "N"=>"_nextSection",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q5"=>(object)array (

                        "Q"=>"<p>Do you only carry this on for one or more of the following purposes (and no others):</p><ul><li>A) In relation to credit broking by you which is limited permission broking because you are a supplier (other than a domestic premises supplier), and the broking is carried on for the purposes of, or in connection with, the sale of goods or supply or services by you to the customer?</li> <li>B) In connection with entering into regulated credit agreements by you as a lender (or exercising, or to having the right to exercise, the lender’s rights and duties under a regulated credit agreement) where that is a limited permission activity?</li> <li>C) In connection with entering into consumer hire agreements by you as an owner (or exercising, or having the right to exercise the owner’s rights and duties under regulated consumer hire agreements) where that is a limited permission activity?</li></ul>",
                        "Y"=>"Q6",
                        "N"=>"RF",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>'(or you provide debt counselling or debt adjusting services under other circumstances)'
                    ),
                    "Q6"=>(object)array (

                        "Q"=>"<p>Do you carry on any other credit related activities?</p>",
                        "Y"=>"_nextSection",
                        "N"=>"RL",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    )



                ),
                "results"=>(object)array(
                       "RF"=>"<p>Apply for full permission</p>",
                       "RL"=>"<p>Apply for limited permission</p>",
                       "R1"=>"<p>If you provide debt counselling or debt adjusting services under other circumstances,please apply for full permission</p>"
                 
                      

                )

            ),
            "section5"=> (object)array(
                "name"=>"Hire",
                "questions"=>array(
                    "Q1"=>(object)array (

                        "Q"=>"<p>Do you enter into regulated consumer hire agreements as owner (or exercise, or have right to exercise, the owner’s rights and duties under regulated consumer hire agreements)? <i>Please note that a hire purchase agreement is a credit agreement, not a hire agreement.</i></p>",
                        "Y"=>"Q2",
                        "N"=>"_nextSection",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q2"=>(object)array (

                        "Q"=>"<p>Are your agreements secured by a legal mortgage on land?</p>",
                        "Y"=>"RF",
                        "N"=>"Q3",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q3"=>(object)array (

                        "Q"=>"<p>Do you carry on any other credit related activities?</p>",
                        "Y"=>"_nextSection",
                        "N"=>"RL",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    )



                ),
                "results"=>(object)array(
                       "RF"=>"Apply for full permission",
                       "RL"=>"Apply for limited permission"
                 
                      

                )

            ),
            "section6"=> (object)array(
                "name"=>"Broking",
                "questions"=>array(
                    "Q1"=>(object)array (

                        "Q"=>"<p>Do you engage in credit broking (for example, do you introduce customers to a finance or leasing company)?</p>",
                        "Y"=>"Q2",
                        "N"=>"_nextSection",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q2"=>(object)array (

                        "Q"=>"<p>Do you carry on credit broking in relation to Green Deal Plans?</p>",
                        "Y"=>"Q3",
                        "N"=>"Q6",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q3"=>(object)array (

                        "Q"=>"<p>Are any agreements to repay ever secured by a legal mortgage on land?</p>",
                        "Y"=>"RF",
                        "N"=>"Q4",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q4"=>(object)array (

                        "Q"=>"<p>Is this the only type of broking you carry on?</p>",
                        "Y"=>"Q5",
                        "N"=>"Q6",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q5"=>(object)array (

                        "Q"=>"<p>Do you carry on any other credit-related regulated activities?</p>",
                        "Y"=>"_nextSection",
                        "N"=>"RL",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q6"=>(object)array (

                        "Q"=>"<p>Do you carry on credit broking in relation to the hire of vehicles? <i>Please note that a hire purchase agreement is a credit agreement, not a hire agreement.</i></p>",
                        "Y"=>"Q7",
                        "N"=>"Q10",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q7"=>(object)array (

                        "Q"=>"<p>Are any agreements to repay ever secured by a legal mortgage on land?</p>",
                        "Y"=>"RF",
                        "N"=>"Q8",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q8"=>(object)array (

                        "Q"=>"<p>Is this (or this and green deal broking) the only type of broking carried on?</p>",
                        "Y"=>"Q9",
                        "N"=>"Q10",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ), 
                     "Q9"=>(object)array (

                        "Q"=>"<p>Do you carry on any other credit-related regulated activities?</p>",
                        "Y"=>"_nextSection",
                        "N"=>"RL",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q10"=>(object)array (

                        "Q"=>"<p>Do you carry on broking for the purposes of, or in connection with, the sale of goods or supply of services by you to a customer (who need not be the borrower under the credit agreement or hirer under a hire agreement)?</p>",
                        "Y"=>"Q11",
                        "N"=>"RF",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                      "Q11"=>(object)array (

                        "Q"=>"<ul><li>A) Is broking and other regulated activities (other than consumer hire) your main business (as opposed to an ancillary to your main business of selling goods or supplying non-regulated services other than consumer hire)?</li> <li>B) Are you selling goods or supplying services to customers who are individuals while physically present in the dwelling of the customer, or in consequence of an agreement concluded when physically present in the dwelling of the customer, other than on an occasional basis? </li><li> C) Are any agreements to repay ever secured by a legal mortgage on land?</li></ul>",
                        "Y"=>"RF",
                        "N"=>"Q12",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'(to any of these questions)',
                        "NO_EXTRA"=>''
                    ),
                       "Q12"=>(object)array (

                        "Q"=>"<p>Is this (or green deal broking and/or broking of hire agreements) the only type of broking being carried on?</p>",
                        "Y"=>"Q13",
                        "N"=>"RF",
                        "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                        "Q13"=>(object)array (

                        "Q"=>"<p>Do you carry on any other credit-related regulated activities?</p>",
                        "Y"=>"_nextSection",
                        "N"=>"RL",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    )





                ),
                "results"=>(object)array(
                       "RF"=>"Apply for full permission",
                       "RL"=>"Apply for limited permission"
                 
                      

                )

            ),
            "section7"=> (object)array(
                "name"=>"Credit references and information",
                "questions"=>array(
                    "Q1"=>(object)array (

                        "Q"=>"<p>Do you provide credit-references?</p>",
                        "Y"=>"RF",
                        "N"=>"Q2",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                     "Q2"=>(object)array (

                        "Q"=>"<p>Do you provide credit information services?</p>",
                        "Y"=>"Q3",
                        "N"=>"RL",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    ),
                    "Q3"=>(object)array (

                        "Q"=>"<p>Do you only provide credit information services in connection with another limited permission activity that you also carry on?</p>",
                        "Y"=>"RL",
                        "N"=>"RF",
                          "BYES"=>'YES',
                        "BNO"=>'NO',
                        "BYES_EXTRA"=>'',
                        "NO_EXTRA"=>''
                    )
                        
                                



                ),
                "results"=>(object)array(
                       "RF"=>"<p>Apply for full permission</p>",
                       "RL"=>"<p>Apply for limited permission</p>",
                       "R1"=>"<p>Apply for limited permission if you carry out only limited permission activities. If any of your activities require full permission, you must apply for full permission.</p>"
                 
                      

                )

            )
        )
      
    );





$json = json_encode($data);
echo $_GET['callback'] . '(' . $json . ')';