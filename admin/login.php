<!-- 아이디 admin 비밀번호 0000 으로 만들기-->
<?php 
  include $_SERVER['DOCUMENT_ROOT']."/inc/login_head.php";
?>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <!-- portfolio notice -->
  <dialog>
  <div class="modal_box">
    <div class="modal_list">
      <h1>본 사이트는 개인 포트폴리오 사이트 입니다.</h1>
      <hr />
      <h2>※ 본 사이트는 창작 사이트로 다른 LMS 사이트들과 무관함을 안내드립니다.</h2>
      <h2>※ 원활한 화면구현을 위해 최신 Browser를 사용해주세요.</h2>
      <h2>※ 과정 말기 작품으로 프론트와 백엔드를 연동했습니다.</h2>
      <h2>※ 포트폴리오 사이트로, 이상한 게시물 작성을 삼가주세요.</h2>
      <hr />

      <div class="modal_info">
        <p><strong>제작기간 :</strong> 2023.02.13 ~ 2023.03.15</p>
        <p><strong>특징 :</strong> html, css, javascript, jquery, php, sql</p>
        
        <p><strong>구현 완료 페이지 </strong></p>
        <p><a href="http://fastcode.dothome.co.kr/admin/login.php">로그인</a> / <a href="http://fastcode.dothome.co.kr/admin/dashboard/index.php">메인페이지(대시보드)</a> / <a href="http://fastcode.dothome.co.kr/admin/category/category_list.php">과정 카테고리</a> / <a href="http://fastcode.dothome.co.kr/admin/lecture/lecture_list.php">강좌리스트</a></strong> / <a href="http://fastcode.dothome.co.kr/admin/coupon/coupon_list.php">쿠폰 관리</a> / <a href="http://fastcode.dothome.co.kr/admin/board/board_index.php">공지사항 게시판</a></p>
        <p><strong>※ 모든 페이지는 관리자 로그인 후 접속 가능합니다. (파일소유자에게 문의바랍니다.)</strong></p>
        <p><strong>팀원 :</strong> 손*진(팀장), 박*지, 오*경, 유*은, 이*희, 장*홍</p>
        <p><strong>기획서 :</strong> <a href="https://drive.google.com/file/d/1urtLKbcvAarfpaQ5nA22xAJf1VgarxCY/view?usp=share_link" target="_blank" class="popup_proposal"> fastcode(LMS) 관리자 사이트 제작 프로젝트 기획서 보기 </a> </p>
        <p><strong>디자인 :</strong> <a href="https://www.figma.com/file/pXBDa6zDUPYQJqU8mmy6wi/fastcode-%EA%B4%80%EB%A6%AC%EC%9E%90-%EC%82%AC%EC%9D%B4%ED%8A%B8-%EC%A0%9C%EC%9E%91?node-id=1%3A7135&t=tNygfhMvw6m0Uiee-1" target="_blank" class="popup_proposal"> fastcode(LMS) 관리자 사이트 제작 프로젝트 디자인 보기 </a> </p>
        <p><strong>github :</strong> <a href="https://github.com/HyeonJinSon/fastcode-lms-project.git" target="_blank" class="popup_proposal"> fastcode(LMS) 관리자 사이트 제작 프로젝트 github 방문하기 </a> </p>
      </div>
      <hr />
      <div class="modal_info_part">
        <strong>파트 업무분장</strong>
        <p>공동기획 : 전원 참여</p>
        <p>기획 : 박*지, 오*경, 이*희</p>
        <p><strong>디자인 : 손*진, 유*은, 장*홍</strong></p>
        <p>구현</p>
        <p>로그인, 메인페이지(대시보드) : 박*지(html, css, js), 장*홍(js, php) </p>
        <p><strong>과정 카테고리, 강좌 리스트 : 오*경(html, css, js), 손*진(js, php) </strong></p>
        <p>쿠폰관리, 공지사항 게시판 : 유*은(html, css), 이*희(js, php) </p>
      </div>
      <hr />
      <button>
        <i class="fa-solid fa-xmark"></i>
      </button>
      <div class="popup_check">
        <label for="oneday_close">오늘 하루 보지않기</label>
        <input type="checkbox" id="oneday_close" />
      </div>
    </div>
  </div>
</dialog>
<!-- end portfolio notice -->
  <main>
    <h1 id="main-logo"><a href="/"><img src="img/fastcode_logo_big.png" alt="Fastcode"><span>fastcode</span></a></h1>
    <form action="login_ok.php" method="post">
      <h2 class="content-title">admin</h2>
      <p class="field">
        <label for="username">username</label>
        <i class="fa-solid fa-user"></i>
        <input type="text" id="username" name="userid" placeholder="username">
      </p>
      <p class="field">
        <label for="password">password</label>
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="password" name="passwd" placeholder="password">
      </p>
      <input type="submit" value="LOGIN" class="y-btn login-btn btn-navy">
    </form>
  </main>
  <!-- <div class="login-bg"> -->
    <img src="img/login_wave_bg.png" alt="background" class="bg-bottom">
    <div><i class="fa-solid fa-sailboat"></i></div>
    <img src="img/login_wave_top.png" alt="background" class="bg-top">
  <!-- </div> -->

  <script>
    //open popup
    let popupDialog = document.querySelector("dialog"),
      dayCheck = document.querySelector("#oneday_close"),
      popupClose = popupDialog.querySelector("button");

    function setCookie(name, value, day) {
      let date = new Date();
      date.setDate(date.getDate() + day);
      document.cookie = `${name}=${value};expires=${date.toUTCString()}`;
    }

    //check cookie
    function checkCookie(name) {
    let cookieArr = document.cookie.split(";");
    let visited = false;

    for (let cookie of cookieArr) {
      if (cookie.search(name) > -1) {
        visited = true;
        break;
      }
    }

    if (!visited) {
      popupDialog.setAttribute("open", "");
    }
    }
    checkCookie("ABC");

    //close
    popupClose.addEventListener("click", () => {
      popupDialog.removeAttribute("open");
      if (dayCheck.checked) {
        setCookie("ABC", "home", 1);
      } else {
        setCookie("ABC", "home", -1);
      }
    });

  </script>
</body>
</html>
