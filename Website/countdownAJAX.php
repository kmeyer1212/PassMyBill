<?php 
var request = new XMLHttpRequest();
request.open('GET', "http://ec2-3-18-212-45.us-east-2.compute.amazonaws.com/CscyrdFinalProject/completionDate.json");
                        request.onload = function(){
                        var data = JSON.parse(request.responseText);
            
                        var date = new Date(1000 * data.completionDate);
            
                        document.getElementById("countdown").innerHTML = data.completionDate;
            
            
                        }
?>