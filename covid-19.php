<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Covid-19 Odisha</title>
    <style>
        #loader{
            display:block;
        }
    </style>
    <script>
        function pageload(){
        function success(position){
            var lat=position.coords.latitude;
            var longi=(position.coords.longitude);
            document.getElementById("lat").innerHTML=lat;
            document.getElementById("longi").innerHTML=longi;
        }
        function error(position){ 
        // var t=confirm("Allow Location");
        //    if(t==true){
        //        alert("Thanks , Enjoy the site !!!");
        //        location.reload();
        //    }
        //    else{
        //        alert(" okay ?");
        //    }
        document.getElementById("lat").innerHTML="00.00000";
        document.getElementById("longi").innerHTML="00.00000";
        alert("Location Access is Denied !!!");
        }
        navigator.geolocation.watchPosition(success,error,{enableHighAccuracy:true});
        }
        $(document).ready(function(){
            $('#m1').modal('show');
                $.ajax({
                  method:"GET",
                  url:"https://api.covid19india.org/v4/min/data.min.json",
                  success:function(response){
                $.each(response.OR.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#total");
                });   
                
                $.each(response.OR.districts.Angul.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#1");
                });
                $.each(response.OR.districts.Balangir.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#2");
                });
                $.each(response.OR.districts.Balasore.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#3");
                });
                $.each(response.OR.districts.Bargarh.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#4");
                });
                $.each(response.OR.districts.Bhadrak.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#5");
                });
                $.each(response.OR.districts.Boudh.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#6");
                });
                $.each(response.OR.districts.Cuttack.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#7");
                });
                $.each(response.OR.districts.Deogarh.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#8");
                });
                $.each(response.OR.districts.Dhenkanal.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#9");
                });
                $.each(response.OR.districts.Gajapati.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#10");
                });
                $.each(response.OR.districts.Ganjam.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#11");
                });
                $.each(response.OR.districts.Jagatsinghpur.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#12");
                });
                $.each(response.OR.districts.Jajpur.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#13");
                });
                $.each(response.OR.districts.Jharsuguda.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#14");
                });
                $.each(response.OR.districts.Kalahandi.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#15");
                });
                $.each(response.OR.districts.Kandhamal.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#16");
                });
                $.each(response.OR.districts.Kendrapara.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#17");
                });
                $.each(response.OR.districts.Kendujhar.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#18");
                });
                $.each(response.OR.districts.Khordha.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#19");
                });
                $.each(response.OR.districts.Koraput.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#20");
                });
                $.each(response.OR.districts.Malkangiri.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#21");
                });
                $.each(response.OR.districts.Mayurbhanj.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#22");
                });
                $.each(response.OR.districts.Nabarangapur.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#23");
                });
                $.each(response.OR.districts.Nayagarh.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#24");
                });
                $.each(response.OR.districts.Nuapada.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#25");
                });
                $.each(response.OR.districts.Puri.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#26");
                });
                $.each(response.OR.districts.Rayagada.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#27");
                });
                $.each(response.OR.districts.Sambalpur.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#28");
                });
                $.each(response.OR.districts.Subarnapur.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#29");
                });
                $.each(response.OR.districts.Sundargarh.total,function(key,item){
                         $("<td>"+item+"</td>").appendTo("#30");
                });
                  },
                  error:function(xhr){
                      console.log(xhr.statusText);
                  }
                })
            })
            $(document).ready(function(){
    $.ajax({
        method:"GET",
        url:"https://api.ipdata.co/?api-key=811f853accdc797736f68f9af1ce4170e15cef3e665fbef540fb4f17",
        success:function(responseObj){
            //$.each(responseObj,function(key,item){
                document.getElementById("ip").innerHTML=responseObj.ip;
                document.getElementById("pin").innerHTML=responseObj.postal;
                document.getElementById("simcard").innerHTML=responseObj.asn.name;
                document.getElementById("state").innerHTML=responseObj.region;
                document.getElementById("country").innerHTML=responseObj.country_name;
                document.getElementById("img").src=(responseObj.flag)
            //})
        },
    })
})
                .ajaxStart(function(){
                    $("#loader").show();
                })
                .ajaxSuccess(function(){
                    $("#loader").show();
                })
                .ajaxComplete(function(){
                    $("#loader").show();
                })
                .ajaxStop(function(){
                    $("#loader").hide();
                })

           function email(){
               var msgshow=document.getElementById("emailerrormsg");
               var emailtxt=document.getElementById("validateemail").value;
               if(emailtxt==null || emailtxt==""){
                msgshow.innerHTML="Provide a Valid Email ID !";
                msgshow.className="text-danger";
                msgshow.className="bg-danger w-75";
               }
               else{
                   msgshow.innerHTML="Thanks buddy , Have a nice Day.";
                   msgshow.className="text-primary";
                   
               }
           }     
    </script>
</head>
<body class="container-fluid" onload="pageload()">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<div class="row">
        <div class="col-md-6 p-1" style="background-color:darkmagenta;">
            <h1 class="ms-5 mt-1 text-white"> WELCOME TO ODISHA </h1>
        </div>
        <div class="col-md-6 p-1" style="background-color:darkmagenta;">
            <button class="btn btn-primary w-25 ms-3" style="margin-top:-3%">Login</button>
            <button class="btn btn-warning w-25 ms-2 text-white" style="margin-top:-3%">Register</button>
            <span id="time" class="ms-4 fs-1 text-white"></span>
        </div>
    </div>
    <script>
        function showtime(){
        var date=new Date();
        document.getElementById("time").innerHTML=date.toLocaleTimeString();
        }
        setInterval(showtime,1000);    
    </script>
   <div class="modal fade" id="m1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success"">
                    <h3 class="ms-5 text-white">Welcome To Covid-19 API</h3>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                    <div class="modal-body">
                        <img src="Covid.gif" width="480" height=250" />
                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m1">Okay</button>&nbsp;&nbsp;
                            <button class="btn btn-danger me-3" data-bs-toggle="modal" data-bs-target="#m1">Cancel</button>
                        </div>   
            </div>
        </div>
    </div>  
    <div class="m-5">
        <!-- <p id="lat">Latitude :</p>
        <p id="longi">Longitude :</p> -->
        <!-- <p id="ip"></p> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js" integrity="sha512-eYPrm8TgYWg3aa6tvSRZjN4v0Z9Qx69q3RhfSj+Mf89QqwOMqmwSlsVqfp4N8NVAcZe/YeUhh9x/nM2CAOp6cA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <!-- <div id="name">Browser Name :</div> 
        <div id="version">Browser Version :</div>
         <div id="layout">Layout</div> 
        <div id="os">OS</div>
         <div id="description">Description</div> 
         <div id="manufacture">Manufacture</div> 
        <div id="product">Mobile Model</div> -->
        <!-- <script>
         document.getElementById("name").innerHTML=platform.name;
        document.getElementById("version").innerHTML=platform.version;
         //document.getElementById("layout").innerHTML=platform.layout;
         document.getElementById("os").innerHTML=platform.os;
         //document.getElementById("description").innerHTML=platform.description;
         //document.getElementById("manufacture").innerHTML=platform.manufacture;
         document.getElementById("product").innerHTML=platform.product;
        </script> -->
        <img src="Spinner.gif" width="70" height="70" id="loader" style="position:absolute;margin-top: 30%;margin-left: 45%;" />
           <h3 class="mt-5 mb-4" style="color:red">COVID-19 TOTAL INFORMATION IN ODISHA</h3>
           <table class="table table-hover borderless w-100 shadow" >
            <thead>
               <tr class="text-center fs-6 text-white" style="background-color:black">
               <th>Confirmed</th>
               <th>Deceased</th>
               <th>Recovered</th>
               <th>Tested</th>
               <th>Vaccinated-1</th>
               <th>Vaccinated-2</th>
            </tr>
        </thead>
           <tr id="total" class="text-center fs-1"></tr>
           </table>
       
       <h3 class="text-center mt-5 mb-3" style="color:indigo;letter-spacing:5px;word-spacing:7px;"><strong>ALL DISTRICTS INFORMATION</strong></h3>
        <table class="table table-hover w-100 table-striped table-bordered shadow">
            <thead>
                <tr class="text-center text-white">
                    <th class="bg-primary">Districts</th>
                    <th class="bg-danger">Confirmed</th>
                    <th class="bg-secondary">Deceased</th>
                    <th class="bg-success">Recovered</th>
                    <th class="bg-warning">Tested</th>
                    <th style="background-color:limegreen;">Dose - 1</th>
                    <th style="background-color: lime;">Dose - 2</th>
                </tr>
            </thead>
            <tbody>
                <tr id="1" class="text-center"><th>Angul</th></tr> 
                <tr id="2" class="text-center"><th>Balangir</th></tr>
                <tr id="3" class="text-center"><th>Balasore</th></tr>
                
                <tr id="5" class="text-center"><th>Bhadrak</th></tr>
                <tr id="6" class="text-center"><th>Boudh</th></tr>
                <tr id="7" class="text-center"><th>Cuttack</th></tr>
                <tr id="8" class="text-center"><th>Deogarh</th></tr>
                <tr id="9" class="text-center"><th>Dhenkanal</th></tr>
                <tr id="10" class="text-center"><th>Gajapati</th></tr>
                <tr id="11" class="text-center"><th>Ganjam</th></tr>
                <tr id="12" class="text-center"><th>Jagatsinghpur</th></tr>
                <tr id="13" class="text-center"><th>Jajpur</th></tr>
                <tr id="14" class="text-center"><th>Jharsuguda</th></tr>
                <tr id="15" class="text-center"><th>Kalahandi</th></tr>
                <tr id="16" class="text-center"><th>Kandhamal</th></tr>
                <tr id="17" class="text-center"><th>Kendrapara</th></tr>
                <tr id="18" class="text-center"><th>Kendujhar</th></tr>
                
                <tr id="20" class="text-center"><th>Koraput</th></tr>
                <tr id="21" class="text-center"><th>Malkangiri</th></tr>
                <tr id="22" class="text-center"><th>Mayurbhanj</th></tr>
                <tr id="23" class="text-center"><th>Nabarangapur</th></tr>
                <tr id="24" class="text-center"><th>Nayagarh</th></tr>
                <tr id="25" class="text-center"><th>Nuapada</th></tr>
                <tr id="26" class="text-center"><th>Puri</th></tr>
                <tr id="27" class="text-center"><th>Rayagada</th></tr>
                <tr id="28" class="text-center"><th>Sambalpur</th></tr>
                
            </tbody>
        </table> 
        <h3 class="mt-5 mb-3 text-center" style="color:red;letter-spacing:5px;word-spacing:7px;"><strong>DISTRICTS WITH NO COVID-19 TEST REPORTS</strong></h3>
        <table class="table table-hover w-100 table-striped table-bordered shadow">
            <thead>
                <tr class="text-center text-white">
                    <th class="bg-primary">Districts</th>
                    <th class="bg-danger">Confirmed</th>
                    <th class="bg-secondary">Deceased</th>
                    <th class="bg-success">Recovered</th>
                    <th style="background-color:limegreen;">Dose - 1</th>
                    <th style="background-color: lime;">Dose - 2</th>
                </tr>
            </thead>
            <tbody>
                <tr id="4" class="text-center"><th>Bargarh</th></tr>
                <tr id="19" class="text-center"><th>Khordha</th></tr>
                <tr id="29" class="text-center"><th>Subarnapur</th></tr>
                <tr id="30" class="text-center"><th>Sundargarh</th></tr>
            </tbody>
        </table>
    </div>
    <div class="m-5 border  p-3 rounded shadow" style="background-color:black;color:white">
    <div clas="m-5">
        <h1 class="text-danger">Symptoms of COVID-19</h1>
        <p>People with COVID-19 have had a wide range of symptoms reported – ranging from mild symptoms to severe illness. Symptoms may appear 2-14 days after exposure to the virus. Anyone can have mild to severe symptoms. People with these symptoms may have COVID-19 -</p>
        <ul>
            <li>Fever or chills</li>
            <li>Cough</li>
            <li>Diarrhea</li>
            <li>Shortness of breath or difficulty breathing</li>
            <li>Fatigue</li>
            <li>Muscle or body aches</li>
            <li>Headache</li>
            <li>New loss of taste or smell</li>
            <li>Sore throat</li>
            <li>Congestion or runny nose</li>
            <li>Nausea or vomiting</li>
        </ul>
    </div>
    <div clas="m-5">
        <h1 class="text-primary">When to Seek Emergency Medical Attention</h1>
        <ol>
            <li>Trouble breathing</li>
            <li>Persistent pain or pressure in the chest</li>
            <li>New confusion</li>
            <li>Inability to wake or stay awake</li>
            <li>Pale, gray, or blue-colored skin, lips, or nail beds, depending on skin tone</li>
        </ol>
        <p>This list is not all possible symptoms. Please call your medical provider for any other symptoms that are severe or concerning to you.
        Call 911 or call ahead to your local emergency facility: Notify the operator that you are seeking care for someone who has or may have COVID-19 .</p>
    </div>
    <div clas="m-5">
        <h1 class="text-warning">Precautions for Covid-19</h1>
        <ol>
            <li>Clean your hands often. Use soap and water, or an alcohol-based hand rub</li>
            <li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
            <li>Wear a mask when physical distancing is not possible.</li>
            <li>Don’t touch your eyes, nose or mouth.</li>
            <li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
            <li>Stay home if you feel unwell.</li>
            <li>If you have a fever, cough and difficulty breathing, seek medical attention.</li>
        </ol>
        <p class="text-center">Wear a mask. Clean your hands. Maintain safe distance. Get vaccinated .</p>
    </div>
        </div>
    <div id="pics">
        <img src="back1.png" class="shadow w-100" height="500"/>
    </div><br />
    <div id="pics">
        <img src="back2.jpg" class="shadow w-100" height="500"/>
    </div><br />
    <div id="pics">
        <img src="back3.png" class="shadow w-100" height="500"/>
    </div><br />
     <div id="pics">
        <img src="back4.png" class="shadow w-100" height="500"/>
    </div>
        <div class="row bg-dark p-3 mt-5">
            <div class="col-md-3">
                <ul style="color:white;list-style: none;">
                    <span>Your Browser Name </span>
                    <li id="name" class="text-warning">Your Browser</li>
                    <span>Your Browser Version </span>
                    <li id="version" class="text-warning">Browser Version</li>
                    <span>Your OS Version </span>
                    <li id="os" class="text-warning">OS Version</li>
                    <span>Your Mobile </span>
                    <li id="product" class="text-warning">Product</li>
                </ul>
                <script>
                    document.getElementById("name").innerHTML=platform.name;
                    document.getElementById("version").innerHTML=platform.version;
                    //document.getElementById("layout").innerHTML=platform.layout;
                    document.getElementById("os").innerHTML=platform.os;
                    //document.getElementById("description").innerHTML=platform.description;
                    //document.getElementById("manufacture").innerHTML=platform.manufacture;
                    if(platform.product==null)
                    {
                        document.getElementById("product").innerHTML="Not Found";
                    }
                    else{
                        document.getElementById("product").innerHTML=platform.product;
                    }
                   </script>
            </div>
            <div class="col-md-3">
                <ul style="color:white;list-style: none;">
                    <span>Your IP Address </span>
                    <li id="ip" class="text-warning">IP</li>
                    <span>Your Latitude </span>
                    <li id="lat" class="text-warning">Latitude</li>
                    <span>Your Longitute </span>
                    <li id="longi" class="text-warning">Longitude</li>
                    <span>Carrier PINCODE </span>
                    <li id="pin" class="text-warning">pin</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul style="color:white;list-style: none;">
                    <span>Your SIMCARD </span>
                    <li id="simcard" class="text-warning">IP</li>
                    <span>Your State </span>
                    <li id="state" class="text-warning">Latitude</li>
                    <span>Your Flag </span><br />
                    <img src="" id="img" width="50" height="20"/><br />
                    <span>Your Country </span>
                    <li id="country" class="text-warning">Longitude</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul style="color:white;list-style: none;">
                    <span class="fs-4" >NEED SUPPORT ?</span>
                    <p class="w-75" style="color:silver;">Please put your Email ID below we will get back to you soon .</p>
                    <p id="emailerrormsg"></p>
                    <input type="text" class="form-control w-75" placeholder="Email ID" id="validateemail">
                    <button class="btn btn-danger w-75 h-75 mt-3" onclick="email()">Send Us </button>
                </ul>
            </div>
        </div>
    <div class="row p-2 bg-dark">
        <div class="col-md-12 text-center">
            <hr class="bg-white">
            <p class="text-white float-left">&copy;Copyright-2021 | Website is Hosted and Maintained by Manash Kumar Behera | All rights reserved</p>
        </div>
    </div>
</body>
</html> 