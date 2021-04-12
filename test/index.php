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
    <style>
      <?php include 'style.css'; ?>
         </style>
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
       <div class = "form-a">
           <form method = "POST">
               <div class = "header-form">
                   <p>Fill out the following to estimate your fracture risk</p>                
               </div>
               <div class = "form">
               <label for="name">Full Name:</label>
               <input type="text" id = "name" name = "name">
               </div>      
               <div class = "form">
               <label for="gender">Gender:</label>
               <input type="radio" id="men" name="gender" value="men">
               <label for="male">Male</label>
               <input type="radio" id="wo" name="gender" value="wo">
               <label for="female">Female</label>
               </div>
               <div class = "form">
                   <label for="age">Age:</label>
                   <select name="age" id="age">
                       <option value="Select Age">Select Age</option>
                       <?php
                for ($i = 50; $i<=96; $i++ ) 
                {
                 echo "<option value='$i'> $i </option>";
                }
                ?>
                   </select>
               </div>   
               <div class = "form">
                   <div class ="label">
                   <label for='Fra-50'>Fractures since the age of 50</label>
                   <div class = "light-text">(excluding major trauma, e.g. car accidents)</div>
                   </div>
              <select name="Fra-50" id="Fra-50">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3 or more</option>
            </select>
               </div>
               <br>
               <br>
               <br>
               <div class = "form">
                   <div class = "label">
                       <label for="Fall-12">Falls over last 12 months</label>                      
                   </div>
                   <select name="Fall-12" id="Fall-12">
                   <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3 or more</option>
                   </select>
               </div> 
               <br>
               <div class="form">
                   <div class = "label">
                       <label for="D-BMD">Do you have a Bone Mineral Density (BMD) measurement?</label>
                   </div>
                   <div class = "element">
                   <input type="radio" id="bmd" name="D-BMD" value="bmd">
                    <label for="Yes">Yes</label><br>
                   <input type="radio" id="wei" name="D-BMD" value="wei">
                    <label for="No">No</label><br>
                   </div>
               </div>
               <br>
               <div class = "BMD_yes">   
                <div class = "form">
                   <div class="label">
                       <label for="T-score">T-scores</label>
                   </div>
                   <div class = "element">
                       <input type="text" name="T-score" id="T-score">
                   </div>
                </div>
                <div class="form">
                    <div class="label"></div>
                    <div class="element">
                        <span>OR</span>
                    </div>
                </div>
                <div class="form">
                    <div class="label">Densitometer</div>
                </div>
                <div class="element-long">
                <input type="radio" id="GE-Lunar" name="densi" value="by DXA GE Lunar">
                    <label for="DXA GE">by DXA GE Lunar</label><br>
                   <input type="radio" id="Hologic" name="densi" value="by DXA Hologic">
                    <label for="DXA Holo">by DXA Hologic</label><br>
                </div>
                <br>
                <br>
                <br>
                <div class="form">
                    <div class="label">
                    <label for="Actual BMD">Actual BMD</label>
                    </div>
                    <div class="element">
                        <input type="text" id = "A-BMD" name = "A-BMD">
                    </div>
                </div>
               </div>
               <div class="form">
                   <div class="label"></div>
                   <div class="element">
                       <!-- <input type="submit" value = "Submit" onclick = "Chart()"> -->
                       <button onclick = "Chart()">Submit</button>
                   </div>
               </div>         
           </form>
       </div>
       <button id='next' onclick="Chart()">Next</button>
       <?php
      //  $t1 = $_GET["t1"];
       ?>
       <div>
       <?php 
      //  echo $t1;
       ?>
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
            // var y = (b1_Hip_Women_BMD * age) + (b2_Hip_Women_BMD * y1) + (b3_Hip_Women_BMD * Pfx) + (b4_Hip_Women_BMD * Fall);
            // var risk5 = 1 - (So5_Hip_Women)**(y)*100;
            // var risk10 = 1 - (So10_Hip_Women)**(y)*100;
            // document.getElementById("ivs").style.opacity = 1;
            // document.getElementById("ivs2").style.opacity = 1;
            // var y1 = document.getElementById("T-score").value;
            // if(y1 > 4 || y1 <-5)
            // {
            //   $('.warning').removeClass('hidden');
            // }
            // else{
              <?php 
                require_once("test.php");
                ?>
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
      //}
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
