
var request = new XMLHttpRequest();
request.open('GET', "http://ec2-3-18-212-45.us-east-2.compute.amazonaws.com/CscyrdFinalProject/completionDate.json");
                        request.onload = function(){
                        var data = JSON.parse(request.responseText);
            
                        var today = Date.now() / 1000
                        var diff = Math.abs(data.completionDate - today);
            
                        document.getElementById("countdown").innerHTML = "<h3>Days Until Project Completion: </h3> <br> <h1>" + Math.round(diff / (60 * 60 * 24)) + "</h1>";
            
            
                            
                            
                            
                        }
                        
                        request.send();
