var showMenu = false;

        $(document).ready(
             function() {
             
             var menuAnimationSlideIn = {"left":"120px","easing":"swing"};
             var menuAnimationSlideOut = {"left":"-1500px","easing":"swing"};

             $("#menuicon").click(function(event){
                    console.log("Event: " + event.target);
                    if(!showMenu) {
                      showMenu = true;
                      $(".movingPage").animate(menuAnimationSlideIn);
                    
                    }else {
                      showMenu = false;
                      $(".movingPage").animate(menuAnimationSlideOut);
                    }
             });

             //var sign = "not init";

             function sendGET(theSign) {
             	$.ajax({
                    url: "ajax-get-list.php",
                    dataType: "json",
                    type: "GET",
                    data: { id: theSign},
                    success: function(data) {
                        // get each item
                        var listData = "";
                        for(var key in data) {
                            listData += "<tr><td>" + key + "</td><td>" + data[key] + "</td></tr>";
                        }
                        $("#itemsTable1").html(listData);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $("#p1").text(jqXHR.statusText);
                    }
                });
             } 


             

             $('#aquarius').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("aquarius");
            });

              $('#aries').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("aries");
            });


              $('#cancer').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("cancer");
            });

               $('#capricorn').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("capricorn");
            });

                $('#gemini').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("gemini");
            });

                  $('#leo').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("leo");
            });


                  $('#libra').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("libra");
            });


                  $('#pisces').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("pisces");
            });


                  $('#sagittarius').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("sagittarius");
            });

                   $('#scorpio').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("scorpio");
            });

                    $('#taurus').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("taurus");
            });

                     $('#virgo').click(function(e) {
                // don't allow the anchor to visit the link
                e.preventDefault();

                //month = ;
                sendGET("virgo");
            });


      

      $("#contactus").hover(
        function(){
          $("#contactus").css("background-color", "rgb(153, 102, 180, 0.7)");
        },
        function(){
          $("#contactus").css("background-color","");
        }
      ); 

      $("#sign").hover(
        function(){
          $("#sign").css("background-color", "rgb(153, 102, 180, 0.7)");
        },
        function(){
          $("#sign").css("background-color","");
        }
      );


      $("#download").hover(
        function(){
          $("#download").css("background-color", "rgb(153, 102, 180, 0.7)");
        },
        function(){
          $("#download").css("background-color","");
        }
      );

 
 

        }
    );


    function check2(input) {
      var submitButton = document.getElementById("submit");
      
      if(input.validity.typeMismatch) {
              input.setCustomValidity("Email has to be a valid email address.");
      
      } else if(input.validity.valueMissing) {
              input.setCustomValidity("Email cannot be empty.");

      } else {
              input.setCustomValidity("");
      }
          
          console.log("input validity typeMismatch: " + input.validity.typeMismatch);
      }
  
    
    function check(input) {
      
      if(input.validity.patternMismatch) {
        input.setCustomValidity("Name cannot be more than 30 characters");
      
      } else if(input.validity.valueMissing) {
        input.setCustomValidity("You must enter a name");
      
      } else if(input.validity.rangeOverflow) {
        input.setCustomValidity("The date should not be later than 2015-05-22"); 
      
      } else if(input.validity.rangeUnderflow) {
        input.setCustomValidity("The date should not be earlier than 2010-01-01");
      
      } else {
        input.setCustomValidity("");
        
      }
    }
    
    
    function checkNumbers(input) {
      if(input.validity.badInput) {
        input. setCustomValidity("Please enter a number!");

      } else if(input.validity.patternMismatch){
        input.setCustomValidity("Your phone number has to be over 10");

      }else {
        input.setCustomValidity("");
        
        
      }
    
      
    console.log("input validity customError: " + input.validity.customError);
    console.log("input validity patterMismatch: " + input.validity.patternMismatch);
    console.log("input validity valueMissing: " + input.validity.valueMissing);
    
    } 


    function check4(input) {
      
      var submitButton = document.getElementById("submit");

         

      if(input.validity.valueMissing) {
              input.setCustomValidity("Date cannot be empty.");
        submitButton.disabled = true;

          } else {
              input.setCustomValidity("");
        submitButton.disabled = false;
          }
        }


