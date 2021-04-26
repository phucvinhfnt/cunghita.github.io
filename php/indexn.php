<?php 
session_start();
if(!isset($_SESSION['tendn'])) header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="templatemo-style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.css">
    <script type="text/javascript" src="/S/Chart/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/S/Chart/canvasjs-3.2.11/canvasjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/S/Chart/queries.css">
    <title>Tiên lượng nguy cơ gãy xương do loãng xương</title>
</head>
<body>
<?php 
//require_once('login_sc.php');
$conn = mysqli_connect('localhost','root','','pmnckh');
if($conn->connect_errno)
{
    die( "Kết nối thất bại");
}
$dn = $_SESSION['tendn'];
$sql = "SELECT * FROM users WHERE tendn = '$dn'";
$kq = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($kq);
?>
     <?php 
    // mysqli_close($conn);
    ?>
    <div class="header">
            <img class="Logo" src="img/logo3.png" alt="logo">
            <!-- <img class="Logo2" src="img/NHS.jpg" alt="logo" style="width: 150px;"> -->
    </div>
    <div id="menu">
      <ul>
        <li><a href="home.html">Trang chủ</a></li>
        <li><a href="introduce.html">Giới thiệu<i class="fas fa-caret-down"></i></a>
          <ul class="sub-menu">
            <li><a href="introduce.html">Phần mềm chẩn đoán</a></li>
            <li><a href="introduce.html">Loãng xương là gì?</a></li>
            <li><a href="introduce.html">Dành cho ai?</a>
            </li>
          </ul>
        </li>
        <li><a href="index.html">Chẩn đoán</a></li>
        <!-- <li><a href="#">Hỏi đáp</a></li> -->
        <li><a href="contact.html">Liên hệ</a></li>
      </ul>
    </div>
  <div style="background-color: rgb(211, 231, 253); height: 30px; width: 100%;"></div>
  <div class="form-info">
  <div class='signup-container'>
    <div class='right-container'>   
        <h1>Tiên lượng nguy cơ gãy xương do loãng xương </h1>
        <h3 class="sc-title">Điền thông tin sau để ước tính nguy cơ gãy xương của bạn</h3>    
        <!-- <form id="myForm"> -->
        <div class='set'>
          <div class='pets-name3'>
            <label for='pets-name3'>Họ và tên (Không bắt buộc).</label>
            <input id='name' name="name" placeholder="Full Name" value = "<?php echo $row['tentv']; ?>" type='text' autocomplete="off" disabled>
          </div>
          <div class="pets-name3">
              <label for="">Đã từng gãy xương sau 50 tuổi?
              </label>
              <select name="Fra-50" id="Fra-50" class="SL">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3 hoặc hơn</option>
              </select>
          </div>
        </div>
        <div class='set'>
          <div class='pets-breed'>
            <label for='pets-breed'>Tuổi</label>
            <select name="age" id="age" class="SL">
                <option value="select">Chọn tuổi</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
                <option value="60">60</option>
                <option value="61">61</option>
                <option value="62">62</option>
                <option value="63">63</option>
                <option value="64">64</option>
                <option value="65">65</option>
                <option value="66">66</option>
                <option value="67">67</option>
                <option value="68">68</option>
                <option value="69">69</option>
                <option value="70">70</option>
                <option value="71">70</option>
                <option value="72">72</option>
                <option value="73">73</option>
                <option value="74">74</option>
                <option value="75">75</option>
                <option value="76">76</option>
                <option value="77">77</option>
                <option value="78">78</option>
                <option value="79">79</option>
                <option value="80">80</option>
                <option value="81">81</option>
                <option value="82">82</option>
                <option value="83">83</option>
                <option value="84">84</option>
                <option value="85">85</option>
                <option value="86">86</option>
                <option value="87">87</option>
                <option value="88">88</option>
                <option value="89">89</option>
                <option value="90">90</option>
                <option value="91">91</option>
                <option value="92">92</option>
                <option value="93">93</option>
                <option value="94">94</option>
                <option value="95">95</option>
                <option value="96">96</option>
            </select>
          </div>
          <div class='pets-birthday'>
            <label for='pets-birthday'>Có té ngã trong 12 tháng qua?</label>
            <select name="Fall-12" id="Fall-12" class="SL">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3 hoặc hơn</option>
            </select>
          </div>
        </div>
        <div class='set'>
          <div class='pets-gender'>
            <label for='pet-gender-female'>Giới tính</label>
            <div class='radio-container'>
              <input checked='' id='wo' name='gender' type='radio' value='wo'>
              <label for='wo'>Nữ</label>
              <input id='men' name='gender' type='radio' value='men'>
              <label for='men'>Nam</label>
            </div>
          </div>
          <div class='pets-spayed-neutered'>
            <label for='pet-spayed'>Bạn có thông tin về mật độ xương (BMD) hiện tại của bạn không?
              <div class="avatar" data-tooltip="Mật độ xương (BMD) (tính bằn g/cm2) ở cổ xương đùi. Hoặc người dùng có thể nhập giá trị T-score (ghi rõ + hoặc - ở trước). 
            Nếu không có thông tin về BMD, người dùng có thể bỏ trống và điền thông tin về cân nặng."></div>
            </label>
            <div class='radio-container'>
              <input checked='' id='bmd' name='YN-BMD' type='radio' value='bmd' onclick="Visi2()">
              <label for='bmd'>Có</label>
              <input id='wei' name='YN-BMD' type='radio' value='wei' onclick="Visi()">
              <label for='wei'>Không</label>
            </div>
          </div>
        </div>
        <div class="set">
          <div class="pets-name2 hidden">
            <label for="Weight">Cân nặng</label>
          <input type="number" name="weight" id="weight" placeholder="kg" autocomplete="off">
          </div>
          <div class='pets-name'>
            <label for='T-score'>T-scores
              <div class="avatar" data-tooltip="T-score là giá trị BMD được chuẩn hóa với giá trị tham chiếu là BMD đỉnh, 
              được xác định bởi BMD của những người trẻ có BMD bình thường có cùng giới tính và sắc tộc.
              Bạn phải nhập dấu + hoặc - ở phía trước giá trị như được hiển thị."></div>
            </label>
            <input id='T-score' name="T-score" type='number' autocomplete="off">
          </div>
          <div class="pets-name">
            <label for="BMD">Chỉ số BMD
              <!-- <div class="avatar" data-tooltip="Được đo bằng máy nào dưới đây"></div> -->
            </label>
          <input type="number" name="BMD" id="BMD" placeholder="g/cm²" autocomplete="off">
          </div>          
        </div>
        <!-- <div class="or">Hoặc</div> -->
        <div class="set">
          <div></div>
        <div class='pets-spayed-neutered2'>
          <label for='pet-spayed'>Máy đo mật độ xương
            <!-- <div class="avatar" data-tooltip="Dùng để đo chỉ số BMD"></div> -->
          </label>
          <div class='radio-container2'>
            <input checked='' id='Lunar' name='DXA' type='radio' value='Lunar'>
            <label for='Lunar'>Bởi DXA GE Lunar</label>
            <input id='Hologic' name='DXA' type='radio' value='Hologic'>
            <label for='Hologic'>Bởi DXA Hologic</label>
          </div>
        </div>
      </div>
        <!-- <div class="pets-name">
          <label for="BMD">Actual BMD 
            <div class="avatar" data-tooltip="Mật độ xương (BMD) (tính bằn g/cm2) ở cổ xương đùi. Hoặc người dùng có thể nhập giá trị T-score (ghi rõ + hoặc - ở trước). 
            Nếu không có thông tin về BMD, người dùng có thể bỏ trống và điền thông tin về cân nặng."></div>
          </label>
        <input type="number" name="BMD" id="BMD" placeholder="g/cm²" autocomplete="off">
        </div> -->
        <div class="disclaimer">
          <div>
            <h2 style="margin: 10px 0;">Tuyên bố từ chối trách nhiệm</h2>
            <p>Các kết quả được tạo ra bởi ứng dụng của chúng tôi sẽ chỉ đóng vai trò tham khảo.
               Nếu lo lắng về nguy cơ gãy xương của bạn, bạn nên hỏi ý kiến bác sĩ hoặc chuyên gia xương khớp.</p>
               <div class="disclaimer2">
                <input type="checkbox" name="disclaimer" class="ip-disclaimer" id="disclaimer" value="Agree">Tôi đã đọc và hiểu sự từ chối trách nhiệm
               </div>
          </div>
        </div>
        <div class="warning hidden">
          <div id="text-err">
            Vui lòng thực hiện các sửa đổi được liệt kê bên dưới trước khi gửi lại biểu mẫu
            <ul>
              <li id="age-err">
                Vui lòng chọn độ tuổi của bạn 
              </li>
              <li id="T-scr-err">
                Vui lòng nhập T-score hợp lệ từ 4 đến -5
              </li>
              <li id="check-err">
                Vui lòng đọc và đồng ý với tuyên bố từ chối trách nhiệm nếu bạn muốn tiếp tục
              </li>
              <li id="bmd-err">
                Vui lòng nhập giá trị actual BMD hợp lệ từ 0.1 đến 2
              </li>
              <li id="wei-err">
                Vui lòng nhập trọng lượng hợp lệ từ 10 đến 150 kg
              </li>
              <li id="T-scr-or-bmd">
                Vui lòng nhập T-score HOẶC actual BMD
              </li>
            </ul>
          </div>
        </div>
      <div class="footer">
        <div class='set'>
          <!-- <button id='back' onclick="window.location.href='form2.html'">Bảng 2</button> -->
          <button id='back' onclick="Reset()">Đặt lại</button>
          <button id='next' onclick="Chart()">Thực hiện</button>
        </div>
      </div> 
    <!-- </form> -->
      </div> 
     </div>   
    </div>
    
    <!-- <button id='next' onclick="Chart()">Next</button> -->
    <div class="row">
      <div class="col-sm-12">
    <div class="row">
    <div class="col-md-10 col-md offset-1">
      <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6 col-md offset-1">
    <div class="tm-paging-links hidden" id = "tog">
      <nav>
        <ul>
          <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Chart</a></li>
          <li class="tm-paging-item"><a  href="#" class="tm-paging-link">Bar</a></li>
          <li class="tm-paging-item"><a href="#" class="tm-paging-link">Icons</a></li>
        </ul>
      </nav>
    </div>
      <!-- gallery page 1 -->
      <!-- <div class="col-md-6 col-md offset-1"> -->
        <!-- <div class=""> -->
      <!-- <div id="tm-gallery-page-chart1" class="tm-gallery-page hidden2"> -->
        <div id="tm-gallery-page-chart" class="tm-gallery-page hidden2">
        <p>Biểu đồ biểu diễn nguy cơ ước tính gãy xương hông và nguy cơ gãy bất kì loại xương nào do loãng xương trong vòng 5 và 10 năm nếu lựa chọn không điều trị loãng xương.
           Các kết quả này được ước tính dựa trên tình trạng các yếu tố nguy cơ mà bạn đã cung cấp. </p>
        <div id="chartContainer1"></div>
        </div>
        <div id="tm-gallery-page-bar" class="tm-gallery-page hidden" >
        <!-- <div id="chartContainer2"></div> -->
        <div class="chart4">
          <p>Nguy cơ gãy xương do loãng xương trong vòng 5 và 10 năm tới.</p>
          <div class="first-chart">
          <span>Nếu không điều trị loãng xương,
            <span id="about-b1">có khoảng </span>
            <div id="childDiv" class="hidden"></div>
            <b class="b1">gãy bất kỳ loại xương nào</b> trong 5 năm tới.
          </span>
          <div class="row">
            <div class="col-1 percent">
              <span id="num-percent"></span>
            </div>
            <div class="col-11 per-chart" id="chartContainer4">
            </div>
          </div>
        </div>
        <div class="second-chart">
          <span>
            Nếu không điều trị loãng xương,
            <span id="about-b2">có khoảng </span>
            <div id="childDiv2" class="hidden"></div>
            <b class="b2">gãy bất kỳ loại xương nào</b> trong 10 năm tới.
          </span>
          <div class="row">
            <div class="col-1 percent">
              <span id="num-percent2"></span>
            </div>
            <div class="col-11 per-chart" id="chartContainer4_2"></div>
          </div>
        </div>
        <div class="third-chart">
          <span>
            Nếu không điều trị loãng xương,
            <span id="about-b3">có khoảng </span>
            <div id="childDiv3" class="hidden"></div>
            <b class="b3">gãy xương hông</b> trong 5 năm tới.
          </span>
          <div class="row">
            <div class="col-1 percent">
              <span id="num-percent3"></span>
            </div>
            <div class="col-11 per-chart" id="chartContainer4_3"></div>
          </div>
        </div>
        <div class="fourth-chart">
          <span>
            Nếu không điều trị loãng xương,
            <span id="about-b4">có khoảng </span>
            <div id="childDiv4" class="hidden"></div>
            <b class="b4">gãy xương hông</b> trong 10 năm tới.
          </span>
          <div class="row">
            <div class="col-1 percent">
              <span id="num-percent4"></span>
            </div>
            <div class="col-11 per-chart" id="chartContainer4_4"></div>
          </div>
        </div>
        <div class="first-note">
          <svg width="14" height="14">
            <circle cx="7" cy="7" r="7" fill="#2222AA" opacity="1" stroke="none" stroke-width="1"></circle>
          </svg>
          Gãy bất kỳ loại xương nào (any osteoporotic fracture)
        </div>
        <div class="second-note">
          <svg width="14" height="14">
            <circle cx="7" cy="7" r="7" fill="#660044" opacity="1" stroke="none" stroke-width="1"></circle>
          </svg>
          Gãy xương hông (hip fracture)
        </div>
        </div>
        </div>
        <!-- <div id="tm-gallery-page-chart3" class="tm-gallery-page row1 hidden" style="margin-left: 100px; position: relative;"> -->
          <div id="tm-gallery-page-icons" class="tm-gallery-page row1 hidden">
          <!-- <div class="col-xs-12"> -->
            <!-- <div> -->
            <!-- <div class="row1" style="clear:both;"> -->
              <!-- <div> -->
          <!-- <div id="chartContainer3" class="col-sm-7"> -->
            <div class="form-horizontal">
              <div class="btn-hip-any">
                <div class="btn-hp">
                  <div role="group" class="btn-group">
                    <button class="btn btn-default btn-sm custom active" type="button" id="hip" onclick="hip()">Gãy xương hông</button>
                    <button class="btn btn-default btn-sm custom" type="button" id="any" onclick="any()">Gãy xương khác</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12" style="margin-bottom: 50px;font-size: 18px;">
              Nguy cơ 100 người có tình trạng các yếu tố nguy cơ giống bạn sẽ bị gãy xương hông/bất kỳ loại xương trong vòng<span>
                <div role="group" class="btn-group btn-5">
                  <button class="btn btn-default btn-sm custom active" type="button" id="five" onclick="fiveyears_hip()">5</button>
                  <button class="btn btn-default btn-sm custom" type="button" id="ten" onclick="tenyears_hip()">10</button>
                  <button class="btn btn-default btn-sm custom active hidden" type="button" id="five2" onclick="fiveyears_any()">5</button>
                  <button class="btn btn-default btn-sm custom hidden" type="button" id="ten2" onclick="tenyears_any()">10</button>
                </div>
                năm tới.
              </span>
            </div>
            <div id="chartContainer3">
          </div>
          <div id="chartContainer3-1" class="hidden"></div>
          <div id="chartContainer3-2" class="hidden"></div> 
          <div id="chartContainer3-3" class="hidden"></div>         
          <div class="col-md-6 offset-7 info-icon" id="info1" style="padding-top:35px; position: absolute; margin-top: -400px;">          
            <img src="/S/Chart/img/new_b.png" alt="" style="width: 30px;"> Số người không gãy xương
            <br>
            <img src="/S/Chart/img/new_p.png" alt="" style="width: 30px;"> Số người gãy xương hông
          </div>
          <div class="col-md-6 offset-7 info-icon2 hidden" id="info2" style="padding-top:35px; position: absolute; margin-top: -400px;">          
            <img src="/S/Chart/img/new_b.png" alt="" style="width: 30px;"> Số người không gãy xương
            <br>
            <img src="/S/Chart/img/new_p.png" alt="" style="width: 30px;"> Số người gãy bất kì xương nào
          </div>
          <!-- </div> -->
          <!-- </div> -->
         </div>
        <!-- </div> -->
      </div>  
    <!-- </div> -->
  <!-- </div>
  </div> -->
        <div class="col-md-4 hidden" id = "noti">
          <div class="well">
            <section>
              <h3>Quan trọng</h3>
              <p>Những kết quả này là ước tính dựa trên dữ liệu từ những người có đặc điểm tương tự. 
                Có những yếu tố quan trọng khác ảnh hưởng đến kết quả.
                 Chuyên gia của bạn sẽ giúp bạn đặt những kết quả này vào ngữ cảnh. </p>
                 <!-- <p id="demo">aa</p>
                 <p id="demo2"></p> -->
            </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-10 col-md offset-1 hidden" >
              <div class="space">
                <div class="long-chart">
                  <div class="col-12" id="back-header">
                    <div class="row long-header">
                      <h5>Potentially permanent harms of</h5>
                      <div class="col-sm-6">
                        <div class="first-note">
                          <svg width="14" height="14">
                            <circle cx="7" cy="7" r="7" fill="#2222AA" opacity="1" stroke="none" stroke-width="1"></circle>
                          </svg>
                          Conservative management
                        </div>
                        <div class="second-note">
                          <svg width="14" height="14">
                            <circle cx="7" cy="7" r="7" fill="#660044" opacity="1" stroke="none" stroke-width="1"></circle>
                          </svg>
                          Radical prostatectomy
                        </div>
                        <div class="third-note">
                          <svg width="14" height="14">
                            <circle cx="7" cy="7" r="7" fill="#CC5CA4" opacity="1" stroke="none" stroke-width="1"></circle>
                          </svg>
                          Radical Radiotherapy
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <p style="font-size: 14px;">The following estimates assume that the function is normal before treatment and have been taken from large published studies. 
                          The estimates are not individualised to you or your local treatment centre or are they derived from the predict calculator. 
                          Your local team may have data specific to your centre which you can ask about.</p>
                      </div>
                    </div>
                  </div>
                  <div class="chart4">
                    <h5>Erectile dysfunction</h5>
                    <h6>Defined as: 'Erections insufficient for intercourse'</h6>
                    <div class="first-chart">
                    <span>With
                      <span id="about-b1"><b class="b1">conservative management</b>, about </span>
                      <div id="childDiv" class="hidden"></div>
                    </span>
                    <div class="row">
                      <div class="col-1 percent">
                        <span id="num-percent"></span>
                      </div>
                      <div class="col-11 per-chart" id="chartContainer4">
                      </div>
                    </div>
                  </div>
                  <div class="second-chart">
                    <span>
                      With
                      <span id="about-b2"><b class="b2">nerve-sparing radical prostatectomy</b>, about</span>
                      <div id="childDiv2" class="hidden"></div>
                    </span>
                    <div class="row">
                      <div class="col-1 percent">
                        <span id="num-percent2"></span>
                      </div>
                      <div class="col-11 per-chart" id="chartContainer4_2"></div>
                    </div>
                  </div>
                  <div class="third-chart">
                    <span>
                      With
                      <span id="about-b3"><b class="b3">non-nerve-sparing radical prostatectomy</b>, about</span>
                      <div id="childDiv3" class="hidden"></div>
                    </span>
                    <div class="row">
                      <div class="col-1 percent">
                        <span id="num-percent3"></span>
                      </div>
                      <div class="col-11 per-chart" id="chartContainer4_3"></div>
                    </div>
                  </div>
                  <div class="fourth-chart">
                    <span>
                      With
                      <span id="about-b4"><b class="b4">radiotherapy</b>, about</span>
                      <div id="childDiv4" class="hidden"></div>
                    </span>
                    <div class="row">
                      <div class="col-1 percent">
                        <span id="num-percent4"></span>
                      </div>
                      <div class="col-11 per-chart" id="chartContainer4_4"></div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
      </div>
  </div>
 </div>
</div>
<footer class="footer-distributed">
  <div class="footer-left">
    <h3>Trường đại học
      <span>Hà Tĩnh</span>
    </h3>
    <p class="footer-links">
      <a href="home.html">Trang chủ</a>
      .
      <a href="introduce.html">Giới thiệu</a>
      .
      <a href="index.html">Chẩn đoán</a>
      .
      <a href="ask.html">Hỏi đáp</a>
      .
      <a href="contact.html">Liên hệ</a>
    </p>
  </div>
  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker-alt"></i>
      <p>
        <span>Xã Cẩm Vịnh, huyện Cẩm Xuyên, tỉnh</span>
        Hà Tĩnh
      </p>
    </div>
    <div>
      <i class="fa fa-phone-alt"></i>
      <p>+84 965 548 678</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="">contact@htu.edu.vn</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>Về chúng tôi</span>
      Dự án gồm 3 thành viên là sinh viên đến từ khoa Kỹ thuật - Công nghệ Trường Đại học Hà Tĩnh
    </p>
    <div class="footer-icons">
      <a href=""><i class="fab fa-facebook-f"></i></a>
      <a href=""><i class="fab fa-twitter"></i></a>
      <a href=""><i class="fab fa-github"></i></a>
    </div>
  </div>
</footer>
    <script>
      function Visi(){
        $('.pets-name').addClass('hidden');
        $('.pets-name2').removeClass('hidden');
        $('.pets-spayed-neutered2').addClass('hidden');
        $('.or').addClass('hidden');
        document.getElementById("T-score").value = "";
        document.getElementById("BMD").value = "";
      }
      function Visi2(){
        $('.pets-name2').addClass('hidden');
        $('.pets-name').removeClass('hidden');
        $('.pets-spayed-neutered2').removeClass('hidden');
        $('.or').removeClass('hidden');
        document.getElementById("weight").value = "";
      }
      function tenyears_hip()
      {
        var element = document.getElementById("five");
        element.classList.remove("active");
        var element2 = document.getElementById("ten");
        element2.classList.add("active");
        var chart3_1 = document.getElementById("chartContainer3");
        chart3_1.classList.add("hidden");
        var chart3_2 = document.getElementById("chartContainer3-1");
        chart3_2.classList.remove("hidden");
      }
      function fiveyears_hip(){
        var element = document.getElementById("ten");
        element.classList.remove("active");
        var element2 = document.getElementById("five");
        element2.classList.add("active");
        var chart3_1 = document.getElementById("chartContainer3");
        chart3_1.classList.remove("hidden");
        var chart3_2 = document.getElementById("chartContainer3-1");
        chart3_2.classList.add("hidden");
      }
      function hip(){
        document.getElementById("info1").classList.remove("hidden");
        document.getElementById("info2").classList.add("hidden");

        var element = document.getElementById("any");
        element.classList.remove("active");
        var element2 = document.getElementById("hip");
        element2.classList.add("active");
        var chart3_3 = document.getElementById("chartContainer3-2");
        chart3_3.classList.add("hidden");
        var chart3_4 = document.getElementById("chartContainer3-3");
        chart3_4.classList.add("hidden");

        document.getElementById("five").classList.remove("hidden");
        document.getElementById("ten").classList.remove("hidden");

        document.getElementById("five2").classList.add("hidden");
        document.getElementById("ten2").classList.add("hidden");
        var chart3_1 = document.getElementById("chartContainer3");
        chart3_1.classList.remove("hidden");
        var chart3_2 = document.getElementById("chartContainer3-1");
        chart3_2.classList.add("hidden");
      }
      function any(){
        document.getElementById("info1").classList.add("hidden");
        document.getElementById("info2").classList.remove("hidden");

        var element = document.getElementById("hip");
        element.classList.remove("active");
        var element2 = document.getElementById("any");
        element2.classList.add("active");
        document.getElementById("five").classList.add("hidden");
        document.getElementById("ten").classList.add("hidden");
        document.getElementById("five2").classList.remove("hidden");
        document.getElementById("ten2").classList.remove("hidden");
        var chart3_1 = document.getElementById("chartContainer3");
        chart3_1.classList.add("hidden");
        var chart3_2 = document.getElementById("chartContainer3-1");
        chart3_2.classList.add("hidden");
        
        var chart3_3 = document.getElementById("chartContainer3-2");
        chart3_3.classList.remove("hidden");
        var chart3_4 = document.getElementById("chartContainer3-3");
        chart3_4.classList.add("hidden");
      }

      function tenyears_any()
      {
        var element = document.getElementById("five2");
        element.classList.remove("active");
        var element2 = document.getElementById("ten2");
        element2.classList.add("active");
        var chart3_3 = document.getElementById("chartContainer3-2");
        chart3_3.classList.add("hidden");
        var chart3_4 = document.getElementById("chartContainer3-3");
        chart3_4.classList.remove("hidden");
      }
      function fiveyears_any(){
        var element = document.getElementById("ten2");
        element.classList.remove("active");
        var element2 = document.getElementById("five2");
        element2.classList.add("active");
        var chart3_3 = document.getElementById("chartContainer3-2");
        chart3_3.classList.remove("hidden");
        var chart3_4 = document.getElementById("chartContainer3-3");
        chart3_4.classList.add("hidden");
      }

      function Reset()
      {
        location.reload();
        return false;
      }

        function Chart(){

          ////////////////////////////////////Calculate////////////////////////////

             

          var age = document.getElementById("age").value;
          var tscore = document.getElementById("T-score").value;
          var wei = document.getElementById("weight").value;
          var pfx = document.getElementById("Fra-50").value;
          var fall = document.getElementById("Fall-12").value;
          var checkbox = document.getElementById("disclaimer");
          var actual = document.getElementById("BMD").value;

          var ele = document.getElementsByName('gender');     
            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked)
                var gender = ele[i].value;
            }
          var ele2 = document.getElementsByName('YN-BMD');      
            for(i = 0; i < ele2.length; i++) {
                if(ele2[i].checked)
                var yn = ele2[i].value;
            }

            var ele3 = document.getElementsByName('DXA');
              
            for(i = 0; i < ele3.length; i++) {
                if(ele3[i].checked)
                var bmd = ele3[i].value;
            }

            if(gender == "wo" && actual != '' && bmd == "Lunar" && tscore == ''){
              // tscore = Math.round(((actual - 1)/0.12));
            var tscore2 = ((actual-1)/0.12).toFixed(2);    
            }
            else if(gender == "men"  && actual != '' && bmd == "Lunar" && tscore == '')
            {
             var tscore2 = ((actual-1.04)/0.12).toFixed(2);
            }
            else if (gender == "wo" && actual != '' && bmd == "Hologic" && tscore == '')
            {
              var tscore2 = ((actual-0.849)/0.115).toFixed(2);
            }
            else if(gender == "men" && actual != '' && bmd == "Hologic" && tscore == '')
            {
              var tscore2 = ((actual-0.92)/0.133).toFixed(2);
            }

            if(age === "select" && tscore == '' && actual == '' && yn == "bmd")
            {
              $('.warning').removeClass('hidden');
              document.getElementById("age-err").classList.remove("hidden");
              document.getElementById("T-scr-or-bmd").classList.remove("hidden");

              document.getElementById("check-err").classList.add("hidden");           
              document.getElementById("wei-err").classList.add("hidden");
              document.getElementById("bmd-err").classList.add("hidden");
              document.getElementById("T-scr-err").classList.add("hidden");
            }
            else if(age === "select" && yn == "wei" && wei == '')
            {
              $('.warning').removeClass('hidden');
              document.getElementById("age-err").classList.remove("hidden");
              document.getElementById("wei-err").classList.remove("hidden");

              document.getElementById("bmd-err").classList.add("hidden");
              document.getElementById("T-scr-err").classList.add("hidden");
              document.getElementById("check-err").classList.add("hidden");
              document.getElementById("T-scr-or-bmd").classList.add("hidden");
            }
           else if(age === "select")
            {    
              $('.warning').removeClass('hidden');
              document.getElementById("age-err").classList.remove("hidden");

              document.getElementById("T-scr-err").classList.add("hidden");
              document.getElementById("check-err").classList.add("hidden");     
              document.getElementById("wei-err").classList.add("hidden");
              document.getElementById("bmd-err").classList.add("hidden");
              document.getElementById("T-scr-or-bmd").classList.add("hidden");
            }
            else if((tscore > 4 || tscore < -5) && actual == '' && yn == "bmd")
            {
              $('.warning').removeClass('hidden');
              document.getElementById("T-scr-err").classList.remove("hidden");

              document.getElementById("check-err").classList.add("hidden");
              document.getElementById("age-err").classList.add("hidden");
              document.getElementById("T-scr-or-bmd").classList.add("hidden");
              document.getElementById("bmd-err").classList.add("hidden");
              document.getElementById("wei-err").classList.add("hidden");
              
            }
            else if (tscore == '' && actual == '' && yn == "bmd")
            {
              $('.warning').removeClass('hidden');
              document.getElementById("T-scr-or-bmd").classList.remove("hidden");

              document.getElementById("check-err").classList.add("hidden");
              document.getElementById("age-err").classList.add("hidden");
              document.getElementById("T-scr-err").classList.add("hidden");
              document.getElementById("wei-err").classList.add("hidden");
              document.getElementById("bmd-err").classList.add("hidden");
            }
            else if(tscore != '' && actual != '' && yn == "bmd")
            {
              $('.warning').removeClass('hidden');
              document.getElementById("T-scr-or-bmd").classList.remove("hidden");
              
              document.getElementById("check-err").classList.add("hidden");
              document.getElementById("age-err").classList.add("hidden");
              document.getElementById("T-scr-err").classList.add("hidden");
              document.getElementById("wei-err").classList.add("hidden");
              document.getElementById("bmd-err").classList.add("hidden");
            }
            else if ((actual > 2 || actual < 0.1) && tscore == '' && yn == "bmd")
            {
              $('.warning').removeClass('hidden');
              document.getElementById("bmd-err").classList.remove("hidden");

              document.getElementById("check-err").classList.add("hidden");
              document.getElementById("age-err").classList.add("hidden");
              document.getElementById("wei-err").classList.add("hidden");
              document.getElementById("T-scr-err").classList.add("hidden");
              document.getElementById("T-scr-or-bmd").classList.add("hidden");
            }
            else if((wei < 10 || wei > 150) && yn == "wei")
            {
              $('.warning').removeClass('hidden');
              document.getElementById("wei-err").classList.remove("hidden");

              document.getElementById("bmd-err").classList.add("hidden");
              document.getElementById("check-err").classList.add("hidden");
              document.getElementById("age-err").classList.add("hidden");
              document.getElementById("T-scr-err").classList.add("hidden");
              document.getElementById("T-scr-or-bmd").classList.add("hidden");
            }
            else if(checkbox.checked == false)
            {
              $('.warning').removeClass('hidden');
              document.getElementById("check-err").classList.remove("hidden");

              document.getElementById("T-scr-err").classList.add("hidden");
              document.getElementById("age-err").classList.add("hidden");           
              document.getElementById("wei-err").classList.add("hidden");
              document.getElementById("T-scr-or-bmd").classList.add("hidden");
              document.getElementById("bmd-err").classList.add("hidden");
            }
             else{
              $('.warning').addClass('hidden');
          var b = []; //{"any" :123, "aom":45 };
          b["wo-hip-bmd"] ={"b1":0.0507,"b2":-0.8417,"b3":0.8127,"b4":0.3614,"So5":0.999896685,"So10":0.999793070};
          b["wo-any-bmd"] = {"b1":0.0321,"b2":-0.4022,"b3":0.5691,"b4":0.2038,"So5":0.995750118,"So10":0.990905138};
          b["wo-hip-wei"] ={"b1":0.0866,"b2":-0.0444,"b3":1.1916,"b4":0.2946,"So5":0.999896685,"So10":0.999793070};
          b["wo-any-wei"] ={"b1":0.0511,"b2":-0.0099,"b3":0.6709,"b4":0.1985,"So5":0.995750118,"So10":0.990905138};
          b["men-hip-bmd"] ={"b1":0.107,"b2":-1.007,"b3":0.599,"b4":0.212,"So5":0.999998862,"So10":0.999997778};
          b["men-any-bmd"]={"b1":0.0883,"b2":-0.2986,"b3":0.8454,"b4":0.0981,"So5":0.999921076,"So10":0.999848975};
          b["men-hip-wei"] ={"b1":0.138,"b2":-0.008,"b3":0.854,"b4":0.233,"So5":0.999998862,"So10":0.999997778};
          b["men-any-wei"]={"b1":0.09071,"b2":-0.00765,"b3":1.00818,"b4":0.12797,"So5":0.999921076,"So10":0.999848975};       
          var hip = b[gender+'-hip-'+yn];
          var any = b[gender+'-any-'+yn];
          if(actual != '' && yn == 'bmd'){
            var n = tscore2;
            var m = 0;
          }
          else if(wei != '' && tscore != '' && yn == 'bmd')
           {
            var n = tscore;
            var m = 0;
           }
           else if (tscore == '' && wei != '' && yn == 'wei'){
            var n = wei;
            var m = 0;
           }
           else if (tscore != '' && yn == 'bmd')
           {
            var n = tscore;
            var m = 0;
           }
           var y_hip=  hip['b1']*age + hip['b2']*n + hip['b3']*pfx + hip['b4']*fall;
           var y_any =  any['b1']*age + any['b2']*n + any['b3']*pfx + any['b4']*fall;
          //  var risk5_hip =Math.round ((1 - Math.pow(hip['So5'],Math.exp(y_hip)))*100, 1);
          //  var risk10_hip =Math.round ((1 - Math.pow(hip['So10'],Math.exp(y_hip)))*100, 1);
          //  var risk5_any =Math.round ((1 - Math.pow(any['So5'],Math.exp(y_any)))*100, 1);
          //  var risk10_any =Math.round ((1 - Math.pow(any['So10'],Math.exp(y_any)))*100, 1);
          // document.getElementById("demo").innerHTML = bmd;

          // document.getElementById("demo2").innerHTML = n;

          var risk5_hip =((1 - Math.pow(hip['So5'],Math.exp(y_hip)))*100).toFixed(m);
           var risk10_hip =((1 - Math.pow(hip['So10'],Math.exp(y_hip)))*100).toFixed(m);
           var risk5_any =((1 - Math.pow(any['So5'],Math.exp(y_any)))*100).toFixed(m);
          var risk10_any = ((1 - Math.pow(any['So10'],Math.exp(y_any)))*100).toFixed(m);
            
           //////////////////////////////////////////////////////////////////////////
            $('.offset-1').removeClass('hidden');
            //$('.offset-8').removeClass('hidden');
            $('.col-md-4').removeClass('hidden');
            $('.tm-paging-links').removeClass('hidden');
            $('.tm-gallery-page').removeClass('hidden2');
            document.getElementById("tog").style.visibility = 'visible';

            document.querySelector('#next').scrollIntoView({ 
                   behavior: 'smooth'
                  });       

      ///////////////////Chart 1 /////////////////////////////

        var chart = new CanvasJS.Chart("chartContainer1", { 
        //width: 500,
        //height: 400,           
      title:{
        text: "5 và 10 năm nguy cơ gãy xương",
        fontFamily: "tahoma",
      },
      dataPointWidth: 60,
      axisY: {           		
                suffix: "%",
                minimum: 0,
                maximum: 100
            },
      data: [  //array of dataSeries     
      { //dataSeries - first quarter
   /*** Change type "column" to "bar", "area", "line" or "pie"***/          
       legendText: "Any Fracture",
       showInLegend: true,
       type: "column",
        yValueFormatString: "#,##0.0#\"%\"",
       name: "First Quarter",
       dataPoints: [
       { label: "5 years", y: +risk5_any , indexLabel: +risk5_any +"% risk"},

       { label: "10 years", y: +risk10_any , indexLabel: +risk10_any +"% risk"}
      
       ]
     },
     { //dataSeries - second quarter

      type: "column",
      legendText: "Hip Fracture",
      showInLegend: true,
       yValueFormatString: "#,##0.0#\"%\"",
      name: "Second Quarter",                
      dataPoints: [
      { label: "5 years", y: +risk5_hip , indexLabel: +risk5_hip +"% risk"},

      { label: "10 years", y: +risk10_hip , indexLabel: +risk10_hip +"% risk"}
      ]
    }
    ]
  });
        chart.render(); 
        // ////////////////////////////////////
        
        /////////////////chart3///////////////////////
        var tb5_hip = Math.round(risk5_hip,1);
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
      if (i < (100-tb5_hip)) {
         //document.write("<div class='square'></div>");
         //document.getElementById("chartContainer3").innerHTML = "<img src='/S/Chart/img/purple.png'>";
         var para = document.createElement("IMG");
        para.setAttribute("src", "/S/Chart/img/new_b.png");
        para.setAttribute("id","p-img");
        document.getElementById("chartContainer3").appendChild(para);
      } else {
         //document.write("<div class='empty-square'></div>");
         //document.getElementById("chartContainer3").innerHTML = "<img src='/S/Chart/img/purple.png'>";
         var para2 = document.createElement("IMG");
        para2.setAttribute("src", "/S/Chart/img/new_p.png");
        para2.setAttribute("id","p-img");
        document.getElementById("chartContainer3").appendChild(para2);      
      }
   }   
 }
 
      /////////////////////////////////
      ///////////////chart3.1//////////
      var tb10_hip = Math.round(risk10_hip,1);
      var t1 = document.getElementById("p1-img");
            if(t1 == null){
        var y3 = document.getElementById("name").value;
    for( var i = 0; i < 10*10; i++) {
     var row1 = i / 10;
     var col1 = i % 10;
     if(col1 == 0 && row1 > 0) {
        var para3_1 = document.createElement("DIV");
       para3_1.setAttribute("style","clear:both");
       document.getElementById("chartContainer3-1").appendChild(para3_1);
     }
      if (i < (100-tb10_hip)) {
         var para3_2 = document.createElement("IMG");
        para3_2.setAttribute("src", "/S/Chart/img/new_b.png");
        para3_2.setAttribute("id","p1-img");
        document.getElementById("chartContainer3-1").appendChild(para3_2);
      } else {
         var para3_3 = document.createElement("IMG");
         para3_3.setAttribute("src", "/S/Chart/img/new_p.png");
         para3_3.setAttribute("id","p1-img");
        document.getElementById("chartContainer3-1").appendChild(para3_3);
      }
    }
  }

  //var tb10 = Math.round((risk10_hip + risk10_any)/2);
  ////////////chart3.2/////////////////////////////
  var tb5_any = Math.round(risk5_any,1);
      var t2 = document.getElementById("p2-img");
            if(t2 == null){
        var y3 = document.getElementById("name").value;
    for( var i = 0; i < 10*10; i++) {
     var row2 = i / 10;
     var col2 = i % 10;
     if(col2 == 0 && row2 > 0) {
        var para3_1_1 = document.createElement("DIV");
       para3_1_1.setAttribute("style","clear:both");
       document.getElementById("chartContainer3-2").appendChild(para3_1_1);
     }
      if (i < (100-tb5_any)) {
         var para3_2_2 = document.createElement("IMG");
        para3_2_2.setAttribute("src", "/S/Chart/img/new_b.png");
        para3_2_2.setAttribute("id","p2-img");
        document.getElementById("chartContainer3-2").appendChild(para3_2_2);
      } else {
         var para3_3_3 = document.createElement("IMG");
         para3_3_3.setAttribute("src", "/S/Chart/img/new_p.png");
         para3_3_3.setAttribute("id","p2-img");
        document.getElementById("chartContainer3-2").appendChild(para3_3_3);
      }
    }
  }

  ///////////////////////chart3.3/////////////////////////////
  var tb10_any = Math.round(risk10_any,1);
      var t3 = document.getElementById("p3-img");
            if(t3 == null){
    for( var i = 0; i < 10*10; i++) {
     var row3 = i / 10;
     var col3 = i % 10;
     if(col3 == 0 && row3 > 0) {
        var para3_1_1_1 = document.createElement("DIV");
       para3_1_1_1.setAttribute("style","clear:both");
       document.getElementById("chartContainer3-3").appendChild(para3_1_1_1);
     }
      if (i < (100-tb10_any)) {
         var para3_2_2_2 = document.createElement("IMG");
        para3_2_2_2.setAttribute("src", "/S/Chart/img/new_b.png");
        para3_2_2_2.setAttribute("id","p3-img");
        document.getElementById("chartContainer3-3").appendChild(para3_2_2_2);
      } else {
         var para3_3_3_3 = document.createElement("IMG");
         para3_3_3_3.setAttribute("src", "/S/Chart/img/new_p.png");
         para3_3_3_3.setAttribute("id","p3-img");
        document.getElementById("chartContainer3-3").appendChild(para3_3_3_3);
      }
    }
  }

  
    var number2 = 100;
    var text = document.createTextNode(risk5_any+' trong '+number2+' người giống bạn sẽ ');
        var child = document.getElementById('childDiv');
        var pa = document.getElementById('about-b1');
          child.parentNode.insertBefore(text, child);
          document.getElementById('num-percent').innerHTML = risk5_any+'%';

          var text2 = document.createTextNode(risk10_any+' trong '+number2+' người giống bạn sẽ ');
          var child2 = document.getElementById('childDiv2');
        var pa2 = document.getElementById('about-b2');
          child2.parentNode.insertBefore(text2, child2);
          document.getElementById('num-percent2').innerHTML = risk10_any+'%';

          var text3 = document.createTextNode(risk5_hip+' trong '+number2+' người giống bạn sẽ ');
          var child3 = document.getElementById('childDiv3');
        var pa3 = document.getElementById('about-b3');
          child3.parentNode.insertBefore(text3, child3);
          document.getElementById('num-percent3').innerHTML = risk5_hip+'%';

          var text4 = document.createTextNode(risk10_hip+' trong '+number2+' người giống bạn sẽ ');
          var child4 = document.getElementById('childDiv4');
        var pa4 = document.getElementById('about-b4');
          child4.parentNode.insertBefore(text4, child4);
          document.getElementById('num-percent4').innerHTML = risk10_hip+'%';

          ////////////blue////////////////
  for(var i = 1; i <= 100; i++){
        var cach= i%5;
        if(i<=risk5_any){
          var verti1 = document.createElement("IMG");
      verti1.setAttribute("src", "/S/Chart/SVG/rect2.svg");
      verti1.setAttribute("id","v-img");
      document.getElementById("chartContainer4").appendChild(verti1);
          }
          else{
          var verti2 = document.createElement("IMG");
      verti2.setAttribute("src", "/S/Chart/SVG/rect.svg");
      verti2.setAttribute("id","v-img");
      document.getElementById("chartContainer4").appendChild(verti2);
          };
          
        if(cach==0)
          {
        var sp = document.createTextNode(" ");
          document.getElementById("chartContainer4").appendChild(sp);
          }
    }
         ////////////purple////////////
  for(var i = 1; i <= 100; i++){
        var cach= i%5;
        if(i<=risk10_any){
          var verti1 = document.createElement("IMG");
      verti1.setAttribute("src", "/S/Chart/SVG/rect2.svg");
      verti1.setAttribute("id","v-img");
      document.getElementById("chartContainer4_2").appendChild(verti1);
          }
          else{
          var verti2 = document.createElement("IMG");
      verti2.setAttribute("src", "/S/Chart/SVG/rect.svg");
      verti2.setAttribute("id","v-img");
      document.getElementById("chartContainer4_2").appendChild(verti2);
          };
          
        if(cach==0)
          {
        var sp = document.createTextNode(" ");
          document.getElementById("chartContainer4_2").appendChild(sp);
          }
    }
    /////////////////
    for(var i = 1; i <= 100; i++){
        var cach= i%5;
        if(i<=risk5_hip){
          var verti1 = document.createElement("IMG");
      verti1.setAttribute("src", "/S/Chart/SVG/rect3.svg");
      verti1.setAttribute("id","v-img");
      document.getElementById("chartContainer4_3").appendChild(verti1);
          }
          else{
          var verti2 = document.createElement("IMG");
      verti2.setAttribute("src", "/S/Chart/SVG/rect.svg");
      verti2.setAttribute("id","v-img");
      document.getElementById("chartContainer4_3").appendChild(verti2);
          };
          
        if(cach==0)
          {
        var sp = document.createTextNode(" ");
          document.getElementById("chartContainer4_3").appendChild(sp);
          }
    }
    /////////////pink///////////////
    for(var i = 1; i <= 100; i++){
        var cach= i%5;
        if(i<=risk10_hip){
          var verti1 = document.createElement("IMG");
      verti1.setAttribute("src", "/S/Chart/SVG/rect3.svg");
      verti1.setAttribute("id","v-img");
      document.getElementById("chartContainer4_4").appendChild(verti1);
          }
          else{
          var verti2 = document.createElement("IMG");
      verti2.setAttribute("src", "/S/Chart/SVG/rect.svg");
      verti2.setAttribute("id","v-img");
      document.getElementById("chartContainer4_4").appendChild(verti2);
          };
          
        if(cach==0)
          {
        var sp = document.createTextNode(" ");
          document.getElementById("chartContainer4_4").appendChild(sp);
          }
    }
}
        }  
        
        /////////////////chart2////////////////
       //////////////////////////////////////////
       ///////////////////chart 2///////////////////////

    //   var chart2 = new CanvasJS.Chart("chartContainer2", {
    //     width: 600,
    //     height: 300,
    //   title:{
    //   	text:"Chart 2"
    //   },
    //   zoomEnabled: true,
    //   data: [
    //   {
    //     type: "line",
    //     dataPoints: [
    //     { x: 10, y: 58 },
    //     { x: 20, y: 35},
    //     { x: 30, y: 36 },
    //     { x: 40, y: 75 },
    //     { x: 50, y: 45 },
    //     { x: 60, y: 28 },
    //     { x: 70, y: 48 },
    //     { x: 80, y: 14 },
    //     { x: 90, y: 54}
    //     ]
    //   }
    //   ]
    // });
    // chart2.render();

    ////////////////////////////////////////////////
    //////////////////chart4///////////////////////
    
         ///////////////////////////////////////////
         //////////////////////////////////////////

         
    /////////////////////////////////////////////////////////////////

    
    // Chart.scroll({
    //           top: 1500, 
    //           left: 0, 
    //           behavior: 'smooth'
    //           });

  
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