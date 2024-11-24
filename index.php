<?php
include 'addprocut/db.php' ;
$sql = "SELECT * FROM produit";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comforty</title>
    <link rel="icon" href="assets/Logo Icon.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topbande">
    <div style="display: flex;"> <img src="assets/check 1.svg" alt=""> <p>Free Shipping On All Orders Over $50 </p></div>
    <div  class="eng-select" style="display: flex; justify-content: space-between; width: 25%;">
        <select name="" id="language">
            <option style="background-color: #272343;" value="eng">Eng</option>
            <option  style="background-color: #272343;"value="fr">Fr</option>
        </select>
       <p style="margin-left: 5px; margin-top: 1.5px;">Faqs</p>
       <div style="margin-left: 5px; display: flex; margin-top: 1.5px;"><img src="assets/alert-circle 1.svg" alt=""><p>NeedHelp</p></div>

    </div>
  </div>
  <section class="section1">
    <div class="logo">
        <img src="assets/Logo Icon.png" alt="">
        <p>Comforty</p>
    </div>
    <div class="input-wrapper">
        <input type="text" placeholder="Search here...">
        <img src="assets/search 1.svg" alt="Search Icon" class="input-icon">
    </div>
    <div class="card-top">
        <div class="topic"><img src="assets/Buy 2.svg" alt="">
        <p>Cart</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" >
            <circle cx="10" cy="10" r="10" fill="#007580"/>
          </svg>
    </div>
        <div class="topic"><img src="assets/Heart 1.svg" alt=""></div>
        <div style="cursor: pointer;" class="topic" onclick="window.location.href='dashboard.html'"><img src="assets/Profile.svg" alt=""></div>
    </div>
</section>
<section class="section2">
   <div class="navb" style="display: flex; 
   align-items: center;
   gap: 32px;">
    <button> <svg version="1.1" id="svg2" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" sodipodi:docname="lines.svg" inkscape:version="0.48.4 r9939" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 1200.00 1200.00" enable-background="new 0 0 1200 1200" xml:space="preserve" fill="#000000" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="0" y="0" width="1200.00" height="1200.00" rx="0" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="rect3039" inkscape:connector-curvature="0" d="M0,0v240h1200V0H0z M0,480v240h1200V480H0z M0,960v240h1200V960H0z"></path> </g></svg>All Categories</button>
    <a href="index.html">Home</a><a href="">Shop</a><a href="categories.html">Product</a><a href="">About</a>
</div>
   <p>Contact : (808) 555-0111</p>

</section>
<section class="section3">
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Welcome to Chairy</p>
                    <h1>Best Furniture <br>
                        Collection for your <br>
                        interior.</h1>
                        <button class="shop-now-button">Shop Now <img src="assets/Right 24px.svg" alt=""></button>

                </div>
                <div class="img-circle"></div>
                <svg class="discount" xmlns="http://www.w3.org/2000/svg" width="120" height="104" viewBox="0 0 140 124" fill="none"></svg>
                    <path d="M126.833 25.5452C139.793 42.9462 144.835 69.6385 134.363 89.7534C123.924 109.868 98.0042 123.406 71.0176 123.981C44.0635 124.555 16.0751 112.231 5.34509 91.9565C-5.38487 71.6819 1.14359 43.4571 15.1378 25.5133C29.132 7.53755 50.5919 -0.157211 71.761 0.00243103C92.9624 0.162073 113.841 8.17612 126.833 25.5452Z" fill="white"/>
                  </svg>
                <img class="carousel-img" src="assets/Product Image.png" alt="Image 1">
                
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Welcome to Chairy</p>
                    <h1>Best Furniture <br>
                        Collection for your <br>
                        interior.</h1>
                        <button class="shop-now-button">Shop Now <img src="assets/Right 24px.svg" alt=""></button>
                </div>
                <div class="img-circle"></div>
                <svg class="discount" xmlns="http://www.w3.org/2000/svg" width="120" height="104" viewBox="0 0 140 124" fill="none">
                    <path d="M126.833 25.5452C139.793 42.9462 144.835 69.6385 134.363 89.7534C123.924 109.868 98.0042 123.406 71.0176 123.981C44.0635 124.555 16.0751 112.231 5.34509 91.9565C-5.38487 71.6819 1.14359 43.4571 15.1378 25.5133C29.132 7.53755 50.5919 -0.157211 71.761 0.00243103C92.9624 0.162073 113.841 8.17612 126.833 25.5452Z" fill="white"/>
                  </svg>
                  <div class="discount-txt"><h2>54%</h2> <p>Disount</p></div>
                <img style="margin-top: -1%;" class="carousel-img"  src="assets/Image__1_-removebg-preview.png" alt="Image 2">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>Welcome to Chairy</p>
                    <h1>Best Furniture <br>
                        Collection for your <br>
                        interior.</h1>
                        <button class="shop-now-button">Shop Now <img src="assets/Right 24px.svg" alt=""></button>
                </div>
                <div class="img-circle"></div>
                <svg class="discount" xmlns="http://www.w3.org/2000/svg" width="120" height="104" viewBox="0 0 140 124" fill="none"> 
                    <path d="M126.833 25.5452C139.793 42.9462 144.835 69.6385 134.363 89.7534C123.924 109.868 98.0042 123.406 71.0176 123.981C44.0635 124.555 16.0751 112.231 5.34509 91.9565C-5.38487 71.6819 1.14359 43.4571 15.1378 25.5133C29.132 7.53755 50.5919 -0.157211 71.761 0.00243103C92.9624 0.162073 113.841 8.17612 126.833 25.5452Z" fill="white"/>
                  </svg>
                  <div class="discount-txt"><h2>65%</h2> <p>Disount</p></div>
                <img style="margin-top: -0.5%;" class="carousel-img"  src="assets/Image__4_-removebg-preview.png" alt="Image 3">
            </div>
        </div>
        <a class="carousel-control prev" href="#"><svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M8.5 7.5L4 12M4 12L8.5 16.5M4 12H20" stroke="#007580" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg></a>
        <a class="carousel-control next" href="#"><svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M15.5 7.5L20 12M20 12L15.5 16.5M20 12H4" stroke="#007580" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg></a>
    </div>
</section>
<div style="margin-top: -3%;" class="feature">
    <div class="feature-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
            <g clip-path="url(#clip0_1_545)">
              <path d="M44.1788 10.1498L23.293 0.0669785C23.1078 -0.0223262 22.8922 -0.0223262 22.7071 0.0669785L1.82122 10.1498C1.58834 10.2622 1.44037 10.498 1.44037 10.7566V35.2434C1.44037 35.502 1.58834 35.7378 1.82122 35.8502L22.707 45.933C22.7996 45.9777 22.8998 46 23 46C23.1002 46 23.2003 45.9777 23.293 45.933L44.1788 35.8502C44.4116 35.7378 44.5596 35.502 44.5596 35.2434V10.7567C44.5596 10.4979 44.4116 10.2623 44.1788 10.1498ZM23 1.42209L42.3359 10.7566L36.7308 13.4625C36.6953 13.4355 36.6579 13.4105 36.6167 13.3906L17.4122 4.11965L23 1.42209ZM15.8904 4.88153L35.1982 14.2025L31.2437 16.1115L11.9439 6.79439L15.8904 4.88153ZM35.6499 15.4808V22.5376L31.9562 24.3208V17.264L35.6499 15.4808ZM43.212 34.8206L23.6738 44.2526V21.2623L28.3343 19.0124C28.6694 18.8506 28.8099 18.4478 28.6481 18.1126C28.4863 17.7776 28.0835 17.6369 27.7483 17.7988L23 20.0912L21.1316 19.1891C20.7964 19.0272 20.3936 19.1679 20.2318 19.503C20.07 19.8381 20.2105 20.2409 20.5456 20.4028L22.3262 21.2623V44.2526L2.78803 34.8204V11.8301L17.6662 19.0127C17.7606 19.0583 17.8604 19.0799 17.9586 19.0799C18.2091 19.0799 18.4497 18.9396 18.5658 18.6989C18.7277 18.3637 18.5871 17.9609 18.252 17.7991L3.66409 10.7566L10.3579 7.52509L30.5992 17.2968C30.6021 17.3009 30.6054 17.3046 30.6085 17.3086V25.3945C30.6085 25.6264 30.7277 25.8419 30.9241 25.9652C31.0332 26.0337 31.1576 26.0683 31.2824 26.0683C31.3823 26.0683 31.4825 26.0461 31.5753 26.0013L36.6167 23.5675C36.8496 23.4551 36.9976 23.2194 36.9976 22.9607V14.8303L43.212 11.8302V34.8206Z" fill="#272343"/>
              <path d="M8.34876 32.207L5.28374 30.7274C4.94844 30.5654 4.54576 30.7061 4.38395 31.0412C4.22214 31.3764 4.36266 31.7792 4.69778 31.941L7.7628 33.4206C7.85722 33.4663 7.95704 33.4879 8.05524 33.4879C8.30572 33.4879 8.54633 33.3475 8.66249 33.1068C8.82439 32.7716 8.68388 32.3689 8.34876 32.207Z" fill="#272343"/>
              <path d="M11.1696 30.371L5.28795 27.5315C4.95275 27.3697 4.54998 27.5102 4.38817 27.8454C4.22645 28.1806 4.36697 28.5834 4.70208 28.7452L10.5837 31.5847C10.6781 31.6302 10.7779 31.6519 10.8761 31.6519C11.1266 31.6519 11.3672 31.5115 11.4834 31.2708C11.6452 30.9355 11.5047 30.5327 11.1696 30.371Z" fill="#272343"/>
            </g>
            <defs>
              <clipPath id="clip0_1_545">
                <rect width="46" height="46" fill="white"/>
              </clipPath>
            </defs>
          </svg>
        <h3 class="feature-title">Discount <br> <span style="font-weight: 200; font-size: 10px;">Every week new sales</span></h3>
    </div>
    <div class="feature-item" style="    margin-top: 2px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="39" viewBox="0 0 64 39" fill="none">
            <path d="M13.9635 30.5869C12.894 30.5869 12.024 31.4569 12.024 32.5264C12.024 33.5959 12.894 34.4659 13.9635 34.4659C15.033 34.4659 15.903 33.5959 15.903 32.5264C15.903 31.4569 15.033 30.5869 13.9635 30.5869Z" fill="#272343"/>
            <path d="M54.0446 30.5869C52.9751 30.5869 52.1051 31.4569 52.1051 32.5264C52.1051 33.5959 52.9751 34.4659 54.0446 34.4659C55.1141 34.4659 55.9841 33.5959 55.9841 32.5264C55.9841 31.4569 55.1141 30.5869 54.0446 30.5869Z" fill="#272343"/>
            <path d="M61.9886 18.1537L54.7706 15.7477L51.397 6.4705C50.9759 5.31237 49.865 4.53425 48.6326 4.53425H39.9516V2.46562C39.9516 1.39612 39.0816 0.526123 38.0121 0.526123H1.9395C0.87 0.526123 0 1.39625 0 2.46575V29.5202C0 30.5897 0.87 31.4597 1.9395 31.4597H8.11375C8.05075 31.806 8.01612 32.1621 8.01612 32.5262C8.01612 35.8057 10.6842 38.4739 13.9637 38.4739C17.2432 38.4739 19.9114 35.8057 19.9114 32.5262C19.9114 32.162 19.8767 31.806 19.8137 31.4597H48.1946C48.1316 31.806 48.097 32.1621 48.097 32.5262C48.097 35.8057 50.7651 38.4739 54.0446 38.4739C57.3241 38.4739 59.9922 35.8057 59.9922 32.5262C59.9922 32.063 59.9372 31.6125 59.8366 31.1795L61.8205 30.1876C63.1647 29.5152 64 28.1636 64 26.6602V20.9444C64 19.6764 63.1917 18.5549 61.9886 18.1537ZM1.875 2.46575C1.875 2.43012 1.90387 2.40112 1.9395 2.40112H38.0121C38.0477 2.40112 38.0766 2.43 38.0766 2.46562V22.5705H1.875V2.46575ZM13.9636 36.5989C11.718 36.5989 9.891 34.7719 9.891 32.5262C9.891 30.2806 11.718 28.4536 13.9636 28.4536C16.2092 28.4536 18.0362 30.2806 18.0362 32.5262C18.0364 34.7719 16.2094 36.5989 13.9636 36.5989ZM38.0766 29.5846H19.1297C18.1044 27.791 16.1735 26.5786 13.9636 26.5786C11.7537 26.5786 9.823 27.791 8.79762 29.5846H1.9395C1.90387 29.5846 1.875 29.5557 1.875 29.5201V24.4455H38.0766V29.5846ZM50.8372 10.4174L52.706 15.5565H50.693L48.8242 10.4174H50.8372ZM39.9516 6.40925H48.6326C49.0795 6.40925 49.4823 6.69137 49.635 7.11125L50.1554 8.54225H39.9516V6.40925ZM39.9516 10.4174H46.8291L48.6979 15.5565H39.9516V10.4174ZM54.0444 36.5989C51.7988 36.5989 49.9717 34.7719 49.9717 32.5262C49.9717 30.2806 51.7988 28.4536 54.0444 28.4536C56.29 28.4536 58.117 30.2806 58.117 32.5262C58.117 34.7719 56.29 36.5989 54.0444 36.5989ZM62.125 22.5704H61.0585C60.5407 22.5704 60.121 22.9901 60.121 23.5079C60.121 24.0256 60.5407 24.4454 61.0585 24.4454H62.125V26.6601C62.125 27.4489 61.6869 28.1577 60.9816 28.5105L59.1258 29.4384C58.0808 27.725 56.194 26.5786 54.0444 26.5786C51.8345 26.5786 49.9038 27.791 48.8784 29.5846H39.9516V24.4455H57.0505C57.5682 24.4455 57.988 24.0257 57.988 23.508C57.988 22.9902 57.5682 22.5705 57.0505 22.5705H39.9516V17.4314H53.8923L61.3957 19.9325C61.832 20.0779 62.125 20.4845 62.125 20.9442V22.5704Z" fill="#272343"/>
            <path d="M31.4632 11.6718L24.4491 7.66382C23.9997 7.40695 23.427 7.5632 23.17 8.0127C22.9131 8.46232 23.0692 9.03495 23.5188 9.29182L27.4678 11.5484H8.9537C8.43595 11.5484 8.0162 11.9682 8.0162 12.4859C8.0162 13.0037 8.43595 13.4233 8.9537 13.4233H27.4678L23.5188 15.6799C23.0693 15.9368 22.9131 16.5094 23.17 16.9591C23.343 17.2618 23.6593 17.4316 23.9848 17.4316C24.1426 17.4316 24.3025 17.3917 24.4491 17.3078L31.4632 13.2998C31.7552 13.1329 31.9356 12.8223 31.9356 12.4858C31.9356 12.1493 31.7553 11.8388 31.4632 11.6718Z" fill="#272343"/>
          </svg>
        <h3 class="feature-title">Free Delivery  <br> <span style="font-weight: 200; font-size: 10px;">100% Free for all orders</span></h3>
    </div>
    <div class="feature-item" style="    margin-top: -1%;">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 50 50" fill="none">
            <g clip-path="url(#clip0_1_576)">
              <path d="M47.5937 14.2852C47.4201 13.9197 46.9829 13.7643 46.6179 13.9379C46.2525 14.1114 46.097 14.5483 46.2705 14.9138C47.7733 18.077 48.5352 21.4705 48.5352 25.0001C48.5352 31.2866 46.0871 37.1968 41.6419 41.642C37.1968 46.0872 31.2865 48.5353 25 48.5353C21.2718 48.5353 17.7063 47.6892 14.403 46.0205C11.6506 44.6301 9.16395 42.678 7.14481 40.3323L10.0346 41.2956C10.4183 41.4235 10.8331 41.2161 10.961 40.8323C11.089 40.4485 10.8815 40.0338 10.4977 39.9059L5.29755 38.1725C5.05673 38.0923 4.79149 38.1423 4.59667 38.305C4.40184 38.4677 4.30506 38.7196 4.3409 38.9709L5.2076 45.0378C5.25985 45.4031 5.57313 45.6667 5.93182 45.6667C5.9663 45.6667 6.00116 45.6643 6.03632 45.6593C6.4368 45.602 6.71503 45.2311 6.6578 44.8307L6.17421 41.4456C8.29325 43.8655 10.8819 45.8829 13.7427 47.328C17.2526 49.1011 21.0401 50.0001 25 50.0001C31.6777 50.0001 37.9559 47.3996 42.6777 42.6778C47.3995 37.9559 50 31.6778 50 25.0001C50 21.2514 49.1904 17.6464 47.5937 14.2852Z" fill="#272343"/>
              <path d="M45.6592 11.0293L44.7925 4.9624C44.7353 4.56191 44.3634 4.28389 43.9639 4.34092C43.5634 4.39814 43.2852 4.76914 43.3424 5.16953L43.8255 8.55117C39.0691 3.10156 32.2791 0 25 0C18.3223 0 12.0442 2.60049 7.32227 7.32227C2.60049 12.0442 0 18.3223 0 25C0 28.7488 0.809668 32.3539 2.40635 35.7149C2.53174 35.9789 2.79443 36.1333 3.06846 36.1333C3.17373 36.1333 3.28076 36.1105 3.38223 36.0622C3.74756 35.8887 3.90303 35.4518 3.72949 35.0863C2.22676 31.9233 1.46484 28.5298 1.46484 25C1.46484 18.7135 3.91289 12.8033 8.35811 8.35811C12.8033 3.91289 18.7135 1.46484 25 1.46484C31.9195 1.46484 38.3694 4.44277 42.8531 9.66709L39.9655 8.70459C39.5815 8.57646 39.1669 8.78408 39.0391 9.16787C38.9112 9.55166 39.1185 9.96641 39.5022 10.0943L44.7024 11.8277C44.7782 11.8529 44.8563 11.8653 44.934 11.8653C45.1031 11.8653 45.2697 11.8067 45.4034 11.6952C45.5982 11.5325 45.695 11.2806 45.6592 11.0293Z" fill="#272343"/>
              <path d="M22.9646 32.8787H15.597C15.8913 30.3152 17.7128 28.5953 19.6318 26.7833C21.6304 24.8962 23.697 22.9449 23.697 20.0146C23.697 17.6116 21.5423 15.6565 18.8939 15.6565C16.2455 15.6565 14.0908 17.6116 14.0908 20.0146C14.0908 20.4191 14.4187 20.747 14.8232 20.747C15.2277 20.747 15.5556 20.4191 15.5556 20.0146C15.5556 18.4193 17.0531 17.1213 18.8939 17.1213C20.7347 17.1213 22.2322 18.4193 22.2322 20.0146C22.2322 22.3134 20.4805 23.9673 18.6261 25.7183C16.5003 27.7255 14.0908 30.0006 14.0908 33.6111C14.0908 34.0156 14.4187 34.3435 14.8232 34.3435H22.9646C23.3691 34.3435 23.697 34.0156 23.697 33.6111C23.697 33.2066 23.3691 32.8787 22.9646 32.8787Z" fill="#272343"/>
              <path d="M35.1767 28.1816H34.3435V16.3889C34.3435 15.9844 34.0157 15.6565 33.6111 15.6565C33.2065 15.6565 32.8787 15.9844 32.8787 16.3889V28.1817H26.6654L28.8511 16.524C28.9257 16.1264 28.6638 15.7436 28.2663 15.6691C27.8691 15.595 27.4861 15.8564 27.4115 16.254L25.063 28.7792C25.0229 28.9933 25.0801 29.2142 25.2193 29.3819C25.3584 29.5496 25.565 29.6465 25.7829 29.6465H32.8787V33.6111C32.8787 34.0155 33.2065 34.3434 33.6111 34.3434C34.0157 34.3434 34.3435 34.0155 34.3435 33.611V29.6464H35.1767C35.5813 29.6464 35.9091 29.3185 35.9091 28.914C35.9091 28.5095 35.5813 28.1816 35.1767 28.1816Z" fill="#272343"/>
              <path d="M25 3.91406C24.5955 3.91406 24.2676 4.24199 24.2676 4.64648V7.77773C24.2676 8.18223 24.5955 8.51016 25 8.51016C25.4046 8.51016 25.7324 8.18223 25.7324 7.77773V4.64648C25.7324 4.24199 25.4046 3.91406 25 3.91406Z" fill="#272343"/>
              <path d="M25 41.4897C24.5955 41.4897 24.2676 41.8177 24.2676 42.2222V45.3534C24.2676 45.7579 24.5955 46.0858 25 46.0858C25.4046 46.0858 25.7324 45.7579 25.7324 45.3534V42.2222C25.7324 41.8177 25.4046 41.4897 25 41.4897Z" fill="#272343"/>
              <path d="M45.3533 24.2676H42.2221C41.8175 24.2676 41.4896 24.5955 41.4896 25C41.4896 25.4045 41.8175 25.7324 42.2221 25.7324H45.3533C45.7579 25.7324 46.0857 25.4045 46.0857 25C46.0857 24.5955 45.7579 24.2676 45.3533 24.2676Z" fill="#272343"/>
              <path d="M7.77778 24.2676H4.64653C4.24204 24.2676 3.91411 24.5955 3.91411 25C3.91411 25.4045 4.24204 25.7324 4.64653 25.7324H7.77778C8.18228 25.7324 8.51021 25.4045 8.51021 25C8.51021 24.5955 8.18228 24.2676 7.77778 24.2676Z" fill="#272343"/>
            </g>
            <defs>
              <clipPath id="clip0_1_576">
                <rect width="50" height="50" fill="white"/>
              </clipPath>
            </defs>
          </svg>
        <h3 class="feature-title">Great Support 24/7   <br> <span style="font-weight: 200; font-size: 10px;">We care your experiences</span></h3>
    </div>
    <div class="feature-item" style="    margin-top: -4px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
            <g clip-path="url(#clip0_1_605)">
              <path d="M49.2187 6.95611C49.2016 6.63932 48.9825 6.36949 48.6759 6.28785L25.1703 0.0246826C25.0466 -0.00822752 24.9165 -0.00822752 24.7929 0.0246826L1.324 6.28795C1.01794 6.36969 0.799 6.63883 0.781422 6.95514C0.765113 7.24811 0.41443 14.2331 3.1612 23.0639C4.77556 28.2539 7.13219 32.9926 10.1658 37.1484C13.9605 42.3471 18.8277 46.6391 24.632 49.9058C24.7434 49.9685 24.8672 50 24.9911 50C25.1091 50 25.2272 49.9715 25.3347 49.9144C31.1487 46.8262 36.024 42.643 39.8249 37.481C42.8619 33.3563 45.2212 28.6037 46.8372 23.3552C49.5854 14.4291 49.235 7.25719 49.2187 6.95611ZM45.4219 22.9736C43.8516 28.0558 41.5653 32.6529 38.6267 36.6376C35.199 41.2852 30.8648 45.1106 25.7326 48.0236V44.2556C32.3859 40.0553 37.4036 34.1094 40.6473 26.5751C43.3181 20.3717 44.1884 14.4831 44.4481 10.6354C44.4718 10.2858 44.2445 9.96841 43.9059 9.87828L42.4122 9.48033C42.0215 9.37623 41.62 9.60855 41.5158 9.99957C41.4117 10.3904 41.644 10.7918 42.0351 10.896L42.942 11.1376C42.6415 14.8677 41.7552 20.2971 39.3017 25.9958C36.1946 33.2129 31.4038 38.9148 25.058 42.9508C24.421 42.5296 23.7946 42.09 23.191 41.6406C22.8666 41.399 22.4077 41.4661 22.166 41.7906C21.9244 42.115 21.9914 42.574 22.316 42.8156C22.9467 43.2853 23.6019 43.7433 24.2675 44.1828V47.9997C19.133 44.9282 14.7976 41.0013 11.3689 36.3118C8.43111 32.2938 6.14577 27.7075 4.57624 22.6806C2.31716 15.4447 2.20671 9.34488 2.23015 7.56236L24.2675 1.68112V5.02672L6.10465 9.87398C5.7652 9.96461 5.53786 10.2835 5.56286 10.6339C5.75202 13.281 6.28444 17.3995 7.74723 21.9882C10.1655 29.5743 14.227 35.9031 19.8189 40.7989C19.9579 40.9206 20.1298 40.9803 20.3012 40.9803C20.505 40.9803 20.7078 40.8957 20.8527 40.7303C21.1192 40.4259 21.0884 39.9631 20.784 39.6967C15.3958 34.9793 11.4792 28.8716 9.14303 21.5434C7.83072 17.4267 7.2903 13.7003 7.07145 11.1325L24.9828 6.35241L38.869 10.0525C39.26 10.1565 39.6613 9.92427 39.7654 9.53326C39.8695 9.14244 39.6372 8.74097 39.2462 8.63687L25.7325 5.036V1.6906L47.7697 7.56266C47.7939 9.37564 47.6883 15.6388 45.4219 22.9736Z" fill="#272343"/>
              <path d="M36.0205 17.1149C35.5866 16.6803 35.0093 16.4412 34.3951 16.4412C33.7807 16.4412 33.2035 16.6803 32.77 17.1145L23.4343 26.4497L18.3377 21.3535C17.904 20.9191 17.3266 20.6798 16.7124 20.6798C16.098 20.6798 15.5209 20.919 15.0875 21.353C14.6533 21.7871 14.4139 22.3642 14.4139 22.9783C14.4139 23.5923 14.6531 24.1694 15.0873 24.6033L21.8089 31.3249C22.2427 31.7593 22.8199 31.9986 23.4342 31.9986C24.0486 31.9986 24.6257 31.7594 25.0593 31.3252L36.0199 20.3647C36.4541 19.9308 36.6934 19.3536 36.6934 18.7395C36.6934 18.1254 36.4542 17.5483 36.0205 17.1149ZM34.9841 19.3286L24.0231 30.2896C23.8661 30.4468 23.657 30.5334 23.4342 30.5334C23.2115 30.5334 23.0024 30.4468 22.8451 30.2893L16.123 23.5671C15.9657 23.4099 15.879 23.2008 15.879 22.9782C15.879 22.7555 15.9657 22.5465 16.1235 22.3886C16.2805 22.2314 16.4897 22.1448 16.7124 22.1448C16.9349 22.1448 17.144 22.2314 17.3015 22.3889L22.9165 28.0034C23.2025 28.2895 23.6664 28.2894 23.9523 28.0034L33.8063 18.1499C33.9633 17.9926 34.1725 17.906 34.3952 17.906C34.6178 17.906 34.8268 17.9926 34.9844 18.1503C35.1417 18.3076 35.2285 18.5167 35.2285 18.7393C35.2285 18.9619 35.1417 19.1711 34.9841 19.3286Z" fill="#272343"/>
            </g>
            <defs>
              <clipPath id="clip0_1_605">
                <rect width="50" height="50" fill="white"/>
              </clipPath>
            </defs>
          </svg>
        <h3 class="feature-title">secure Payment  <br> <span style="font-weight: 200; font-size: 10px;">100% Secure Payment Method</span></h3>
    </div>
</div>

<div style="margin-top: 10%;" class="companylogo">
    <img src="assets/Logo.svg" alt=""><img src="assets/Logo (1).svg" alt=""><img src="assets/Logo (2).svg" alt=""><img src="assets/Logo (3).svg" alt=""><img src="assets/Logo (4).svg" alt=""><img src="assets/Logo (5).svg" alt=""><img src="assets/Logo (6).svg" alt="">
</div>
<section class="feature-product">
    <div class="title" style="display: flex; justify-content: space-between;"><h3>Featured Products</h3> 
        <div>
     <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M8.5 7.5L4 12M4 12L8.5 16.5M4 12H20" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></button>
     <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M15.5 7.5L20 12M20 12L15.5 16.5M20 12H4" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></button></div>
    </div>
    <div class="product-card"> 
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                ?>
        <div class="shop-card">
            <img src="/Comforty%20website/addprocut/<?php echo $row['image'] ?>" alt="Product Image" class="product-image">
            <div class="card-details">
                <div class="text-info">
                    <h2 class="product-title"><?php echo  $row["nom"] ; ?></h2>
                    <p class="product-price">$20</p>
                </div>
                <a href="product.html" class="shop-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </a>
            </div>
        </div>
        <?php
    }
} else {
  echo "0 results";
}
$conn->close();
        ?>
        <div class="shop-card">
            <img src="assets/Image (2).png" alt="Product Image" class="product-image">
            <div class="card-details">
                <div class="text-info">
                    <h2 class="product-title">Library stool chair</h2>
                    <p class="product-price">$20</p>
                </div>
                <a href="#" class="shop-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </a>
            </div>
        </div>
        <div class="shop-card">
            <img src="assets/Image (3).png" alt="Product Image" class="product-image">
            <div class="card-details">
                <div class="text-info">
                    <h2 class="product-title">Library stool chair</h2>
                    <p class="product-price">$20</p>
                </div>
                <a href="#" class="shop-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </a>
            </div>
        </div>
      
    </div>
</section>
<section class="top-categories">
    <div class="title" style="display: flex; justify-content: space-between;"><h3>Top Categories</h3> 
        <div>
     <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M8.5 7.5L4 12M4 12L8.5 16.5M4 12H20" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></button>
     <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M15.5 7.5L20 12M20 12L15.5 16.5M20 12H4" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></button></div>
    </div>
</section>
<section class="middle-slider">
    <div class="slider-container">
        <div class="slider">
            <div class="slider-inner">
                <!-- Duplicate items to create a seamless loop -->
                <div class="slider-item">
                    <img src="assets/Image (1).png" alt="Image 1">
                    <div class="caption">
                        <h2>Soft chair</h2>
                        <p>7,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (5).png" alt="Image 2">
                    <div class="caption">
                        <h2>Wing Chair</h2>
                        <p>3,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (6).png" alt="Image 3">
                    <div class="caption">
                        <h2>Wooden Chair</h2>
                        <p>176 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (7).png" alt="Image 4">
                    <div class="caption">
                        <h2>Desk Chair</h2>
                        <p>258 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (2).png" alt="Image 5">
                    <div class="caption">
                        <h2>Small chair</h2>
                        <p>740 Products</p>
                    </div>
                </div>
                
                <!-- Duplicate items to create a seamless loop -->
                <div class="slider-item">
                    <img src="assets/Image (1).png" alt="Image 1">
                    <div class="caption">
                        <h2>Soft chair</h2>
                        <p>7,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (5).png" alt="Image 2">
                    <div class="caption">
                        <h2>Wing Chair</h2>
                        <p>3,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (6).png" alt="Image 3">
                    <div class="caption">
                        <h2>Wooden Chair</h2>
                        <p>176 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (7).png" alt="Image 4">
                    <div class="caption">
                        <h2>Desk Chair</h2>
                        <p>258 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (2).png" alt="Image 5">
                    <div class="caption">
                        <h2>Small chair</h2>
                        <p>740 Products</p>
                    </div>
                </div>
                <!-- Duplicate items to create a seamless loop -->
                <div class="slider-item">
                    <img src="assets/Image (1).png" alt="Image 1">
                    <div class="caption">
                        <h2>Soft chair</h2>
                        <p>7,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (5).png" alt="Image 2">
                    <div class="caption">
                        <h2>Wing Chair</h2>
                        <p>3,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (6).png" alt="Image 3">
                    <div class="caption">
                        <h2>Wooden Chair</h2>
                        <p>176 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (7).png" alt="Image 4">
                    <div class="caption">
                        <h2>Desk Chair</h2>
                        <p>258 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (2).png" alt="Image 5">
                    <div class="caption">
                        <h2>Small chair</h2>
                        <p>740 Products</p>
                    </div>
                </div>
                
                <!-- More duplicate items for a seamless loop -->
                <div class="slider-item">
                    <img src="assets/Image (1).png" alt="Image 1">
                    <div class="caption">
                        <h2>Soft chair</h2>
                        <p>7,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (5).png" alt="Image 2">
                    <div class="caption">
                        <h2>Wing Chair</h2>
                        <p>3,584 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (6).png" alt="Image 3">
                    <div class="caption">
                        <h2>Wooden Chair</h2>
                        <p>176 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (7).png" alt="Image 4">
                    <div class="caption">
                        <h2>Desk Chair</h2>
                        <p>258 Products</p>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="assets/Image (2).png" alt="Image 5">
                    <div class="caption">
                        <h2>Small chair</h2>
                        <p>740 Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="our-prodcut">
    <h2>Our Product</h2>
    <div class="product-nav">
        <a href="#">ALL</a><a href="#">Newest</a><a style="color: black;" href="#">Trending</a><a href="#">Best Sellers</a><a href="#">Featured</a>
    </div>
    
</section>
<section style=" width: 70%;
margin-left: 15%;
margin-top: 4%;
justify-content: space-between;">
<div class="product-card">
    <div class="shop-card">
        <img src="assets/Image.png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="#" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
    <div class="shop-card">
        <img src="assets/Image (1).png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="product.html" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
    <div class="shop-card">
        <img src="assets/Image (2).png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="#" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
    <div class="shop-card">
        <img src="assets/Image (3).png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="#" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
  
</div>
<div class="product-card">
    <div class="shop-card">
        <img src="assets/Image (10).png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="#" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
    <div class="shop-card">
        <img src="assets/Image (11).png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="#" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
    <div class="shop-card" >
        <img src="assets/Image (12).png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="#" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
    <div class="shop-card" >
        <img src="assets/Image.png" alt="Product Image" class="product-image">
        <div class="card-details">
            <div class="text-info">
                <h2 class="product-title">Library stool chair</h2>
                <p class="product-price">$20</p>
            </div>
            <a href="#" class="shop-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </a>
        </div>
    </div>
  
</div>
</section>
<section class="clients-says">
    <div class="title" style="display: flex; justify-content: space-between;"><h3>What Client Says About Us</h3> 
        <div>
     <button style="background-color: white;" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M8.5 7.5L4 12M4 12L8.5 16.5M4 12H20" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></button>
     <button style="background-color: white;" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M15.5 7.5L20 12M20 12L15.5 16.5M20 12H4" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></button></div>
    </div>
    <div class="commentaires">
        <div class="box-commentaire"><p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet mi nec massa tincidunt blandit et eu sem. Maecenas laoreet ultrices diam dignissim posuere. Aenean ultrices dui at ipsum sagittis, pharetra lacinia dui faucibus. In ac bibendum ex. Aenean dolor massa, euismod sit amet suscipit et“</p>
         <div class="client-name">
        <img src="assets/Image.svg" alt="">
        <h6>Kristin Watson <br> <span>Fashion Designer</span></h6>
        <img class="quote" src="assets/double_quotes_r 1.svg" alt="">
         </div>
        </div>
        <div class="box-commentaire"><p>Nullam sapien elit, dignissim eu viverra et, scelerisque et felis. Aliquam egestas dui elit, quis tincidunt lacus aliquam et. Duis nulla velit, dignissim ut odio ac, eleifend luctus leo. Ut ac imperdiet velit. Aliquam semper ex in volutpat rutrum. </p>
        <div class="client-name">  
            <img src="assets/Image (1).svg" alt="">
        <h6>Esther Howard <br> <span>Fashion Designer</span></h6>
        <img class="quote" src="assets/double_quotes_r 1.svg" alt="">
    </div>
          
        </div>
    </div>
</section>
<section  class="recently-added">
        <div class="title" style="display: flex; justify-content: space-between;"><h3>Recently Added</h3> 
            <div>
         <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M8.5 7.5L4 12M4 12L8.5 16.5M4 12H20" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg></button>
         <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M15.5 7.5L20 12M20 12L15.5 16.5M20 12H4" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg></button></div>
        </div>
        <div class="product-card">
            <div class="shop-card">
                <img src="assets/Image.png" alt="Product Image" class="product-image">
                <div class="card-details">
                    <div class="text-info">
                        <h2 class="product-title">Library stool chair</h2>
                        <p class="product-price">$20</p>
                    </div>
                    <a href="#" class="shop-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                    </a>
                </div>
            </div>
            <div class="shop-card">
                <img src="assets/Image (1).png" alt="Product Image" class="product-image">
                <div class="card-details">
                    <div class="text-info">
                        <h2 class="product-title">Library stool chair</h2>
                        <p class="product-price">$20</p>
                    </div>
                    <a href="product.html" class="shop-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                    </a>
                </div>
            </div>
            <div class="shop-card">
                <img src="assets/Image (2).png" alt="Product Image" class="product-image">
                <div class="card-details">
                    <div class="text-info">
                        <h2 class="product-title">Library stool chair</h2>
                        <p class="product-price">$20</p>
                    </div>
                    <a href="#" class="shop-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                    </a>
                </div>
            </div>
            <div class="shop-card">
                <img src="assets/Image (3).png" alt="Product Image" class="product-image">
                <div class="card-details">
                    <div class="text-info">
                        <h2 class="product-title">Library stool chair</h2>
                        <p class="product-price">$20</p>
                    </div>
                    <a href="#" class="shop-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M2.52083 2.97919L4.4275 3.30919L5.31025 13.8261C5.34416 14.24 5.53286 14.6258 5.83869 14.9067C6.14453 15.1875 6.54502 15.3427 6.96025 15.3414H16.9611C17.3587 15.3418 17.743 15.1987 18.0435 14.9383C18.344 14.6779 18.5403 14.3178 18.5964 13.9242L19.4672 7.91269C19.4905 7.75281 19.4819 7.58993 19.4422 7.43335C19.4024 7.27677 19.3321 7.12957 19.2354 7.00017C19.1387 6.87076 19.0174 6.76169 18.8785 6.67919C18.7396 6.59669 18.5858 6.54237 18.4259 6.51935C18.3672 6.51294 4.73367 6.50835 4.73367 6.50835" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.9479 9.89545H15.4898" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55783 18.5194C6.62506 18.5166 6.69217 18.5273 6.75513 18.551C6.81809 18.5748 6.87559 18.611 6.92418 18.6576C6.97277 18.7041 7.01143 18.76 7.03785 18.8219C7.06426 18.8838 7.07788 18.9504 7.07788 19.0177C7.07788 19.0849 7.06426 19.1515 7.03785 19.2134C7.01143 19.2753 6.97277 19.3312 6.92418 19.3777C6.87559 19.4243 6.81809 19.4605 6.75513 19.4843C6.69217 19.508 6.62506 19.5187 6.55783 19.5159C6.4294 19.5104 6.30805 19.4555 6.21912 19.3626C6.13019 19.2698 6.08054 19.1462 6.08054 19.0177C6.08054 18.8891 6.13019 18.7655 6.21912 18.6727C6.30805 18.5799 6.4294 18.525 6.55783 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8987 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8987 19.5186C16.7662 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7662 18.5194 16.8987 18.5194Z" fill="#272343" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                    </a>
                </div>
            </div>
          
        </div>
  
</section>
<footer class="footer">
    <div class="footer-container">
        <!-- First Div -->
        <div class="footer-item">
            <div style="display: flex;">
                <img src="assets/Logo Icon.png" alt="Logo" class="footer-logo"> 
            <h2 style="margin-left: 8%; color: var(--Gray-Scales-Black, #272343);
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            padding-top: 10px;
            line-height: 120%; /* 31.2px */" class="footer-title">Comforty</h2>  
            </div>
          
            <p class="footer-description">Vivamus tristique odio sit amet velit semper, eu posuere turpis interdum.
                Cras egestas purus </p>
                <div style="margin-top: 5%;" class="bg-white w-full h-auto py-8 flex items-center justify-center gap-2 flex-wrap " >
                    <a href="javascript:;"
                    class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                    fill="none">
                    <path
                      d="M46.4233 38.6403L47.7279 30.3588H39.6917V24.9759C39.6917 22.7114 40.8137 20.4987 44.4013 20.4987H48.1063V13.4465C45.9486 13.1028 43.7685 12.9168 41.5834 12.8901C34.9692 12.8901 30.651 16.8626 30.651 24.0442V30.3588H23.3193V38.6403H30.651V58.671H39.6917V38.6403H46.4233Z"
                      fill="#111827" />
                    </svg>
                    </a>
                    <a href="javascript:;"
                    class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                    fill="none">
                    <path
                      d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z"
                      fill="#111827" />
                    </svg></a>
                    
                  
                    <a href="javascript:;"
                    class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 71"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M56.5615 18.2428C58.8115 18.8504 60.58 20.6234 61.1778 22.8708C62.2654 26.9495 62.2654 35.4647 62.2654 35.4647C62.2654 35.4647 62.2654 43.98 61.1778 48.0586C60.5717 50.3144 58.8032 52.0873 56.5615 52.6866C52.4932 53.7771 36.1703 53.7771 36.1703 53.7771C36.1703 53.7771 19.8557 53.7771 15.7791 52.6866C13.5291 52.079 11.7606 50.306 11.1628 48.0586C10.0752 43.98 10.0752 35.4647 10.0752 35.4647C10.0752 35.4647 10.0752 26.9495 11.1628 22.8708C11.7689 20.615 13.5374 18.8421 15.7791 18.2428C19.8557 17.1523 36.1703 17.1523 36.1703 17.1523C36.1703 17.1523 52.4932 17.1523 56.5615 18.2428ZM44.5142 35.4647L30.9561 43.314V27.6154L44.5142 35.4647Z"
                      fill="#111827" />
                    </svg></a>
                    </div>
        </div>
        <!-- Second Div -->
        <div class="footer-item">
            <h2 class="footer-title">Categories</h2>
            <ul class="footer-categories">
                <li>Armchair</li>
                <li>Wing Chair</li>
                <li>Sofa</li>
                <li>Wooder Chair</li>
            </ul>
        </div>
        <!-- Third Div -->
        <div class="footer-item">
            <h2 class="footer-title">Support</h2>
            <ul class="footer-support">
                <li><a href="#">Help & Support</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
        <!-- Fourth Div -->
        <div class="footer-item">
            <h2 class="footer-title">Newsletter</h2>
            <div class="footer-newsletter">
                <input type="email" placeholder="Your email" class="footer-email-input">
                <button class="footer-submit-button">Subscribe</button>
            </div>
        </div>
    </div>
</footer>

<div class="last-div">
    <p>@ 2021 - Blogy - Designed & Develop by <span style="color:black; font-weight: bolder;">Zakirsoft</span></p>
  
</div>



<script src="main.js"></script>
</body>
</html>