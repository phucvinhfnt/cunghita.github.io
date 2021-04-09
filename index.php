<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="templatemo-style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.css">
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="canvasjs-3.2.11/canvasjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="queries.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
            <img class="Logo" src="img/prostate-angle-man_1.png" alt="logo">
            <img class="Logo2" src="img/NHS.jpg" alt="logo" style="width: 150px;">
    </div>
  <div id="menu" style="z-index: 1000;">
    <ul>
      <li><a href="home.html">Trang chủ</a></li>
      <li><a href="#">Giới thiệu<i class="fas fa-caret-down"></i></a>
        <ul class="sub-menu">
          <li><a href="introduce.html">Phần mềm chẩn đoán</a></li>
          <li><a href="introduce.html">Loãng xương là gì?</a></li>
          <li><a href="introduce.html">Dành cho ai?</a>
          </li>
        </ul>
      </li>
      <li><a href="#">Diễn đàn</a></li>
      <li><a href="#">Hỏi đáp</a></li>
      <li><a href="#">Liên hệ</a></li>
    </ul>
  </div>
  <div style="background-color: rgb(211, 231, 253); height: 30px; width: 100%;"></div>
  <div class="form-info">
  <div class='signup-container'>
    <div class='right-container'>
        <h1>FRACTURE RISK CALCULATOR</h1>
        <h1>Fill out the following to estimate your fracture risk</h1>
        <div class="warning hidden">
          <p style="color: red; font-size: 18px;">
            Please make the amendments listed below before submitting form again.
          </p>
          <ul>
            <li style="color: red; margin-left: 40px; font-size: 18px;">Please enter a valid T-Score between 4 and -5
            </li>
          </ul>
        </div>
        <div class='set'>
          <div class='pets-name3'>
            <label for='pets-name'>Full Name
                (optional)</label>
            <input id='name' placeholder="Full Name" type='text'>
          </div>
          <div class="pets-name3">
              <label for="">Fractures since the age of 50
              </label>
                <select name="" id="Fra-50" class="SL">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3 or more</option>
              </select>
          </div>
        </div>
        <div class='set'>
          <div class='pets-breed'>
            <label for='pets-breed'>Age</label>
            <!-- <input id='pets-breed' placeholder="Pet's breed" type='text'> -->
            <select name="age" id="age" class="SL">
                <option value="Select Age">Select Age</option>
                <?php
                for ($i = 40; $i<=115; $i++ ) 
                {
                 echo "<option value='$i'> $i </option>";
                }
                ?>
            </select>
          </div>
          <div class='pets-birthday'>
            <label for='pets-birthday'>Falls over last 12 months</label>
            <select name="" id="Fall-12" class="SL">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3 or more</option>
            </select>
          </div>
        </div>
        <div class='set'>
          <div class='pets-gender'>
            <label for='pet-gender-female'>Sex</label>
            <div class='radio-container'>
              <input checked='' id='female' name='pet-gender' type='radio' value='female'>
              <label for='female'>Female</label>
              <input id='male' name='pet-gender' type='radio' value='male'>
              <label for='male'>Male</label>
            </div>
          </div>
          <div class='pets-spayed-neutered'>
            <label for='pet-spayed'>Do you have a
                Bone Mineral Density (BMD)
                measurement?</label>
            <div class='radio-container'>
              <input checked='' id='Yes' name='spayed-neutered' type='radio' value='Yes' onclick="Visi2()">
              <label for='Yes'>Yes</label>
              <input id='No' name='spayed-neutered' type='radio' value='No' onclick="Visi()">
              <label for='No'>No</label>
            </div>
          </div>
        </div>
        <div class="set">
          <div class="pets-name2 hidden">
            <label for="Weight">Weight</label>
          <input type="text" name="weight" id="weight" placeholder="kg">
          </div>
          <div class='pets-name'>
            <label for='T-score'>T-scores
              <div class="avatar" data-tooltip="T-score is the BMD value compared with young normal people of the same sex and general ethnicity. These are usually listed prominently on the BMD report. You must enter the + or - in front of the value as shown."></div>
            </label>
            <input id='T-score' type='text' placeholder="-5 to 4">
          </div>
          <div class="pets-name">
            <label for="BMD">Actual BMD</label>
          <input type="text" name="BMD" id="BMD" placeholder="g/cm²">
          </div>
        </div>
        <div>OR</div>
        <div class='pets-spayed-neutered'>
          <label for='pet-spayed'>Densitometer</label>
          <div class='radio-container2'>
            <input checked='' id='Lunar' name='DXA' type='radio' value='by DXA GE Lunar'>
            <label for='Lunar'>by DXA GE Lunar</label>
            <input id='Hologic' name='DXA' type='radio' value='by DXA Hologic'>
            <label for='Hologic'>by DXA Hologic</label>
          </div>
        </div>
        <div class="disclaimer">
          <div>
            <h2 style="margin: 10px 0;">Disclaimer</h2>
            <p>The results produced by our calculator should serve as a guide only.
               If concerned about your fracture risk, it is also important to consult your doctor or a bone specialist.</p>
               <div class="disclaimer2">
                <input type="checkbox" name="disclaimer" class="ip-disclaimer" id="disclaimer" value="Agree">I have read and understand the disclaimer
               </div>
          </div>
        </div>
      <footer>
        <div class='set'>
          <button id='back' onclick="window.location.href='form2.html'">Bảng 2</button>
          <button id='next' onclick="Chart()">Next</button>
        </div>
      </footer>  
      </div> 
     </div>   
    </div>
    <div class="tm-paging-links hidden" id = "tog">
      <nav>
        <ul>
          <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Chart1</a></li>
          <li class="tm-paging-item"><a  href="#" class="tm-paging-link">Chart2</a></li>
          <li class="tm-paging-item"><a href="#" class="tm-paging-link">Chart3</a></li>
        </ul>
      </nav>
    </div>
      <!-- gallery page 1 -->
      <div id="tm-gallery-page-chart1" class="tm-gallery-page hidden2">  
        <div id="chartContainer1"></div>
        </div>
        <div id="tm-gallery-page-chart2" class="tm-gallery-page hidden" >
        <div id="chartContainer2"></div>
        </div>
        <div id="tm-gallery-page-chart3" class="tm-gallery-page hidden" style="margin-left: 100px;">
          <div id="chartContainer3">
          </div>
          <img src="img/blue.png" alt=""> Số người sống sót
          </div>
    <script>
      function Visi(){
        $('.pets-name').addClass('hidden');
        $('.pets-name2').removeClass('hidden');
      }
      function Visi2(){
        $('.pets-name2').addClass('hidden');
        $('.pets-name').removeClass('hidden');
      }
        function Chart(){
          var age = document.getElementById("age").value;
           var y1 = document.getElementById("T-score").value;
           var Pfx = document.getElementById("Fra-50").value;
           var Fall = document.getElementById("Fall-12").value;
           ////////////////////table 1/////////////////////////
            var So5_Any_Women = 0.995750118;
            var So10_Any_Women = 0.990905138;

            var So5_Hip_Women = 0.999896685;
            var So10_Hip_Women = 0.999793070;

            var So5_Hip_men = 0.999998862;
            var So10_Hip_men = 0.999997778;

            var So5_Any_men = 0.999921076;
            var So10_Any_men = 0.999848975;
            
        ////////////////////table 2//////////////////////
            var b1_Any_Women_BMD = 0.0321;
            var b2_Any_Women_BMD = -0.4022;
            var b3_Any_Women_BMD = 0.5691;
            var b4_Any_Women_BMD = 0.2038;
            
            var b1_Hip_Women_BMD = 0.0507;
            var b2_Hip_Women_BMD = -0.8417;
            var b3_Hip_Women_BMD = 0.8127;
            var b4_Hip_Women_BMD = 0.3614;

            var b1_Hip_men_BMD = 0.107;
            var b2_Hip_men_BMD = -1.007;
            var b3_Hip_men_BMD = 0.599;
            var b4_Hip_men_BMD = 0.212;

            var b1_Any_men_BMD = 0.0883;
            var b2_Any_men_BMD = -0.2986;
            var b3_Any_men_BMD = 0.8454;
            var b4_Any_men_BMD = 0.0981;

        ////////////////table 3///////////////////////
            var b1_Any_Women_weight = 0.0511;
            var b2_Any_Women_weight = -0.0099;
            var b3_Any_Women_weight = 0.6709;
            var b4_Any_Women_weight = 0.1985;
            
            var b1_Hip_Women_weight = 0.0866;
            var b2_Hip_Women_weight = -0.0444;
            var b3_Hip_Women_weight = 1.1916;
            var b4_Hip_Women_weight = 0.2946;

            var b1_Hip_men_weight = 0.138;
            var b2_Hip_men_weight = -0.008;
            var b3_Hip_men_weight = 0.854;
            var b4_Hip_men_weight = 0.233;

            var b1_Any_men_weight = 0.09071;
            var b2_Any_men_weight = -0.00765;
            var b3_Any_men_weight = 1.00818;
            var b4_Any_men_weight = 0.12797;

            // var y = (b1_Hip_Women_BMD * age) + (b2_Hip_Women_BMD * y1) + (b3_Hip_Women_BMD * Pfx) + (b4_Hip_Women_BMD * Fall);
            // var risk5 = 1 - (So5_Hip_Women)**(y)*100;
            // var risk10 = 1 - (So10_Hip_Women)**(y)*100;
            // document.getElementById("ivs").style.opacity = 1;
            // document.getElementById("ivs2").style.opacity = 1;
            // var y1 = document.getElementById("T-score").value;
            if(y1 > 4 || y1 <-5)
            {
              $('.warning').removeClass('hidden');
            }
            else{
              
            $('.tm-paging-links').removeClass('hidden');
            $('.tm-gallery-page').removeClass('hidden2');
            document.getElementById("tog").style.visibility = 'visible';
        // var y1 = document.getElementById("T-score").value;
        // var y2 = document.getElementById("BMD").value;
        var y =  (b1_Hip_Women_BMD * age) + (b2_Hip_Women_BMD * y1) + (b3_Hip_Women_BMD * Pfx) + (b4_Hip_Women_BMD * Fall);
        var n = y.toFixed(5);
        var risk5 = (1 - (So5_Hip_Women)**(n))*10000;
        var risk10 = (1 - (So10_Hip_Women)**(n))*10000;
        var chart = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Overall Survival"
            },
            axisY: {
                title: "Growth Rate (in %)",
                suffix: "%"
            },
            axisX: {
                title: "years after diagnosis",
            },
            data: [{
                type: "column",
                yValueFormatString: "#,##0.0#\"%\"",
                dataPoints: [
                    {  label:"5",y: +risk5, indexLabel: +risk5+"% survive at least 5 years" },	
                    
                    { label: "10", y: +risk10, indexLabel: +risk10+"% survive at least 10 years" }
                    
                ]
            }]
        });
        chart.render(); 
        // ////////////////////////////////////
        
        ////////////////////////////////////////
        var t = document.getElementById("p-img");
            if(t == null){
        var y3 = document.getElementById("name").value;
    for( var i = 0; i < 10*10; i++) {
     var row = i / 10;
     var col = i % 10;
     if(col == 0 && row > 0) {
        //document.write("<div style='clear:both'></div>");
        var para3 = document.createElement("DIV");
       para3.setAttribute("style","clear:both");
       document.getElementById("chartContainer3").appendChild(para3);
     }
      if (i < y3) {
         //document.write("<div class='square'></div>");
         //document.getElementById("chartContainer3").innerHTML = "<img src='/S/Chart/img/purple.png'>";
         var para = document.createElement("IMG");
        para.setAttribute("src", "img/blue.png");
        para.setAttribute("id","p-img");
        document.getElementById("chartContainer3").appendChild(para);
      } else {
         //document.write("<div class='empty-square'></div>");
         //document.getElementById("chartContainer3").innerHTML = "<img src='/S/Chart/img/purple.png'>";
         var para2 = document.createElement("IMG");
        para2.setAttribute("src", "img/purple.png");
        para2.setAttribute("id","p-img");
        document.getElementById("chartContainer3").appendChild(para2);
      
      }
   }   
 }
      }
        }  
        // function Chart2(){
          // document.getElementById("chartContainer2").style.width = '33%';
          // document.getElementById("chartContainer2").style.height = '300px';
      var chart2 = new CanvasJS.Chart("chartContainer2", {
        width: 600,
        height: 300,
      title:{
      	text:"Chart 2"
      },
      zoomEnabled: true,
      data: [
      {
        type: "line",
        dataPoints: [
        { x: 10, y: 58 },
        { x: 20, y: 35},
        { x: 30, y: 36 },
        { x: 40, y: 75 },
        { x: 50, y: 45 },
        { x: 60, y: 28 },
        { x: 70, y: 48 },
        { x: 80, y: 14 },
        { x: 90, y: 54}
        ]
      }
      ]
    });
    chart2.render();
    $(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
    window.onscroll = function() {myFunction()};
              var header = document.getElementById("menu");
               var sticky = header.offsetTop;

               function myFunction() {
                    if (window.pageYOffset > sticky) {
                      header.classList.add("sticky");
                        } else {
                      header.classList.remove("sticky");
                     }
                  }
        </script>
</body>
</html>
