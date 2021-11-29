<!-- 느낌표 + 탭을 이용하면 기본 스타일 바로 지적 가능. -->
<!-- 쉬프트 + 탭을 이용하면 줄맞춤 바로 가능. -->
<!-- 컨트롤 슬래쉬로 한꺼번에 주석처리 가능. -->

<!DOCTYPE html>
<html lang="ko">
<!-- en ko 로 전환 가능.-->
<!-- Header Starts -->



<!-- Header Ends -->

<head>
<div>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>냥비티아이(Nyang-BTI)</title>
  <meta name="description" content="당신과 가장 잘 맞는 냥이는 누구일까요?">

  <meta property="og:type" content="website"> 
<meta property="og:title" content="냥비티아이(Nyang-BTI)">
<meta property="og:description" content="당신과 가장 잘 맞는 냥이는 누구일까요?">
<meta property="og:image" content="http://nyangbti.netlify.app/jy.png">
<meta property="og:url" content="http://nyangbti.netlify.app">


<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="냥비티아이(Nyang-BTI)">
<meta name="twitter:description" content="당신과 가장 잘 맞는 냥이는 누구일까요?">
<meta name="twitter:image" content="http://nyangbti.netlify.app/jy.png">
<meta name="twitter:domain" content="http://nyangbti.netlify.app">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- 이걸로 css와 html을 연결가능함. 아래있는게 나중에 덮어쓰는 개념이므로 개별 수정을 진행하는 스타일css는 더 아래 두어야 한다.  -->
</div>
</head>


<body class="text-center container">
  <!-- 컨테이너 클래스는 부트스트랩에서 그리드 만들때 쓰는건데 여기선 단순히 띄우는 용도로 사용 해 보겠음 -->
  <div class="maxred" >
  <!-- ----------------------------------시작화면----------------------------------     -->
  <article class="mt-3 cearray topimg">
    <!-- 아티클 태그로 아래 속성을 묶을 것. 클래스 박스 -->
    <!-- <div class="row">
          <div class="col-lg-12">
            <div class="tm-tag-line">
            
            </div>
          </div>
  
        </div> -->
    <img id="img2"  src="bgicov2.png">
    <h2 class="mt-3 text-center " style=font-size:110%>냥비티아이(Nyang-BTI) 집사테스트</h2>
  </article>
  <article class="start">


    <h1 class="mt-2 text-center font-weight-bolder " style=font-size:130%>당신과 어울리는 애옹이 주인님은?</h1>
    <button type="button" class="btn btn-outline-secondary mt-4 " onclick='start();'>테스트 시작하기</button>

<div>
  <div class="text-muted "><br><br>*Thanks to : 멋쟁이사자처럼, 조코딩, JKH <br>Copyright 2021. PSB all rights reserved.<br>nyangbti@gmail.com<br><br></div>
</div>

    <div class ="btm" >
      <ins class="kakao_ad_area " style="display:none;" data-ad-unit    = "DAN-4pYteoOdrh0MnQst"  data-ad-width   = "320"  data-ad-height  = "100"></ins> 
  <script type="text/javascript" src="//t1.daumcdn.net/kas/static/ba.min.js" async></script>
  </div>

  </article>
  <!-- 제목을 의미하는 h1을 작성 마진 간격숫자 1~5를 줄 수 있음.  -->
  <!-- ----------------------------------문제화면----------------------------------     -->
  <!-- 시작할 때는 안보이게 하고자 함. 퀘스천의 css를 수정. -->
  <article class="question">
    <div class="progress mt-5">
      <div class="progress-bar bg-warning" role="progressbar" style="width: calc(0%)"></div>
      <!-- style은 css문법을 따른다. css문법중 숫자 계산을 해주는 calc기능이 있음. -->
    </div>
  <div class ="minhei2">
    <h2 id="title" class="text-center mt-5 font-weight-bolder minhei" style=font-size:110%>
      <font style='color:red'>주의</font> : 무엇보다 당신의 옆에있는 냥이야말로 최고의 파트너 입니다. (´▽`ʃ<font style='color:red'>♥</font>ƪ)
    </h2>
  </div>
    <!-- 아이디를 타입으로 지정. 타입마다 밸류를 올릴것.   -->
    <input id="type" type="hidden" value="X" >
    <button id="A" type="button" class=" btn btn-secondary mt-5">네</button>
    <button id="B" type="button" class=" btn btn-secondary mt-1">알겠습니다</button>
  
  

  </article>

  <!-- ----------------------------------결과화면----------------------------------     -->
  <article class="result" >
    <div margin> </div>

    <h2 class=" text-center " style=font-size:130%><b>냥비티아이(Nyang-BTI) 결과</b></h2>
    <img id="img" src="1_per.jpg" alt="animal">
    <h2 id="mbtis" class="text-center p-2 colorgray1 text-white" style=font-size:105%>ESTJ</h2>
    <!-- <h2 id="mbtis" class="text-center mt-1 p-2 mb-1 colorgray1 text-white" style=font-size:150%>ESTJ</h2> -->
 <div class="maxred3">
    <h3 id="animal" class="text-center mt-2" style=font-size:150%>동물이름</h3>
  </div>
    <div class="maxred3">
    <h4 id="explaincat" class="text-center mt-1" style=font-size:100%><b>고양이 특징</b></h4>
  
    <h4 id="explainmbti" class="text-center mt-1" style=font-size:100%>성격설명</h4>
  </div>
  <div class="maxred3">
    <h4 id="explain" class="text-left mt-1" style=font-size:100% >설명</h4>
  </div>
    <!-- <font style='color:red'>example</font>
  
  
      <h2 class="text-muted mb-4">What do we do</h2> -->

    <h3 class="text-center p-2 colorgray2 text-white mt-2" style=font-size:110%>능력치</h2>

      <div>
        <div class="left">
          <input id="imga" src="lv1.jpg" type="image" />
        </div>
        <div class="right">
          <h6 class="text-left mt-2 font-size:90%"><b>[관심욕]</b></h6>
          <h6 id="explain1" class="text-muted text-left font-size:50% ">관심욕 설명</h6>
        </div>
      </div>

      <!-- <div class="p-3 col-lg-4 col-md-6"></div> -->
      <div >
        <div class="left">
          <input id="imgb" src="lv2.jpg" type="image" />
        </div>
        <div class="right">
          <h6 class="text-left mt-2 font-size:90%"><b>[활동력]</b></h6>
          <h6 id="explain2" class="text-muted text-left font-size:50% ">활동력 설명</h6>
        </div>
      </div>
      
      <div >
        <div class="left">
          <input id="imgc" src="lv1.jpg" type="image" />
        </div>
        <div class="right">
          <h6 class="text-left mt-2 font-size:90%"><b>[체구력]</b></h6>
          <h6 id="explain3" class="text-muted text-left font-size:50% ">전투력 설명</h6>
        </div>
      </div>




        <!-- <div class="progress mt-5">
              
          </div> -->
        <!-- style은 css문법을 따른다. css문법중 숫자 계산을 해주는 calc기능이 있음. -->

        <button id="C" type="button" class="btn btn-secondary mt-1">다른고양이 보러가기</button>
        
        
        <button class="btn btn-outline-secondary mt-1 mb-1" https://nyangbti.netlify.app/ onclick="copyToClipboard('#p1')">냥비티아이 주소 복사하기</button>
        
        <!-- <div class = "graytext">
        <font style='color:rgb(185, 185, 185)'>주의 : 링크 공사중입니다. </font>
        </div>

        
        <div class="addthis_inline_share_toolbox mt-3"></div> -->
        
        <div class="cearray">
          <ins class="kakao_ad_area" style="display:none;" data-ad-unit="DAN-xHlf5SEBbtqZPtA1" data-ad-width="320"
            data-ad-height="100"></ins>
          <script type="text/javascript" src="//t1.daumcdn.net/kas/static/ba.min.js" async></script>
        </div>


  </article>
</div>


  <!-- ----------------------------------타입별 점수 (히든,인풋)---------------------------------- -->

  <!-- J-Query 이용하면 보다 쉽게 뭔가 가능함. 함수설정같은것 등.  -->

  <input type="hidden" id="X" value="0">
  <input type="hidden" id="EI" value="0">
  <input type="hidden" id="SN" value="0">
  <input type="hidden" id="TF" value="0">
  <input type="hidden" id="JP" value="0">

  <!-- 웹서비스에서 화면엔 안보이게 하는법 타입을 히든으로지정하고 컨트롤.-->

  <!-- 스크립트에서 제이쿼리 가져오기. J-Query 이용하면 보다 쉽게 뭔가 가능함. 함수설정같은것 등.  -->


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!--$(".start")로 스타트 전체를 지정, 눌렀을때 스타트라는 함수가 시작되도록 함 -->
  <!-- start 이하에서 제이쿼리를 이용해서 보이게끔 함. show method 사용 -->
  <script>
    //  ----------------------------------자바스크립트 - 문제번호 증가, 객체q 문제정보----------------------------------
    var num = 1;
    var q = {
      1: { "title": "Q1 : 에너지를 얻을 때 주로 어디서 얻나요?", "type": "EI", "A": "사람들과 신나게 놀고 이야기한다", "B": "혼자서 내가 좋아하는 일을 한다" },
      2: { "title": "Q2 : 남들과 이야기 할 때에는 어떤내용으로 하나요?", "type": "TF", "A": "지식과 진실된 정보위주", "B": "기분 전달과 공감 위주" },
      3: { "title": "Q3 : 모르는 사람과의 대화는 누가 먼저 시작하나요?", "type": "EI", "A": "내가 나서서", "B": "상대방이 나서서" },
      4: { "title": "Q4 : 책이나 영화를 볼 때의 선택 기준은?", "type": "SN", "A": "명언과 명대사가 좋을 때", "B": "스토리가 주는 느낌이 좋을 때" },
      5: { "title": "Q5 : 나에게 중요한 것은?", "type": "SN", "A": "지금", "B": "미래" },
      6: { "title": "Q6 : 내 행동과 말이 다른 사람들에게 영향을 주는 것이 걱정될 때가 있나요?", "type": "SN", "A": "딱히 신경쓰지는 않아", "B": "자주 신경 쓰여" },
      7: { "title": "Q7 : 무언가를 잘 모르겠다면 무엇을 믿고 선택하나요?", "type": "TF", "A": "경험", "B": "직감" },
      8: { "title": "Q8 : 해야할 일이 있다면?", "type": "JP", "A": "계획이 짜여 있어야 마음이 편하다", "B": "큰 틀만 짜고 적당히 진행한다" },
      9: { "title": "Q9 : 내가 만든 결과물은 주로?", "type": "JP", "A": "디테일, 완성도가 높은편", "B": "아이디어가 좋은편" },
      10: { "title": "Q10 : 다른 사람들과 만나는 일은?", "type": "EI", "A": "제법 즐거운 일", "B": "제법 에너지를 소모하는 일" },
      11: { "title": "Q11 : 내 집의 정리정돈 상태는?", "type": "JP", "A": "깔끔하다", "B": "복잡하다" },
      12: { "title": "Q12 : 우리 애옹이 주인님은?", "type": "TF", "A": "머리가 똑똑했으면 좋겠다", "B": "마음이 착한 것이 좋겠다" },

      

    }
    //  ----------------------------------자바스크립트 - 문제답에대한 정보 제공----------------------------------
    var result = {
      "ESTJ": {
        "mbtis": "지적이고 계획적인 당신에게 최고의 냥이", "animal": "- 페르시안 -",
        "explain": "• 생활에 있어 엄격함과 체계를 중요시 여기는 성격입니다. </br> • 규칙을 중요시 여기고 제자리에 있지 않은 것을 원래대로 돌려 놓아야 직성이 풀립니다.</br> • 호불호가 확실하고 얼굴에 표정이 드러납니다. </br> • 자신이 방해받는 것을 싫어하는 당신에게 혼자서도 잘 노는 페르시안은 최고의 파트너 입니다. </br> • 자기만의 시간을 즐길 줄 아는 페르시안은 당신의 관심을 조용히 기다려 줄 것입니다.",
        "explaincat": "<b>주인 특징: </b> 성실, 느긋함, 부드러운 털, 집사 충실",
        "explainmbti": "<b>집사 특징: </b> 뛰어난 끈기, 호불호 확실, 계획 중시, 자기관리 철저, 외롭지 않음, 책임감, 의리",
        "explain1": "자기의 기분이 내키면 다가올 수 있음  ",
        "explain2": "느긋함, 매너 있음",
        "explain3": "대형묘, 몸과 다리가 짧고 굵음",
        "img": "1_per.jpg", "imga": "lv2.jpg", "imgb": "lv2.jpg", "imgc": "lv3.jpg"
      },

      "ESTP": {
        "mbtis": "자유분방한 당신에게 최고의 냥이", "animal": "- 노르웨이 숲 고양이 -",
        "explain": "• 화끈한 성격을 갖고 있는 반면 감정을 직설적으로 표현하여 대인관계에 트러블을 일으킬 수 있는 성격입니다. </br> • 자극을 추구하고 도전에 대한 성취욕이 강합니다. </br> • 시각에 예민하여 관찰력이 뛰어난 편이고 숨은 의도를 잘 파악하기도 합니다. </br> • 애교 넘치고 독특한 외모를 갖고있는 노르웨이 숲 고양이는 다정하고 유대감이 강하여 즉흥적이고 활동적인 당신에게 최고의 파트너 입니다. </br> • 어떤 환경에도 잘 적응하고 똑똑한 편이며 독립적인 특징을 보입니다. ",
        "explaincat": "<b>주인 특징: </b> 사냥꾼, 매복놀이, 자신만의 공간 필요, 촘촘하고 풍성한 털 ",
        "explainmbti": "<b>집사 특징: </b> 단순한 생각, 자극 추구, 표현력 우수함, 즉흥적 행동, 관종",
        "explain1": "애교와 장난기가 많음 ",
        "explain2": "나무 타기와 산책을 좋아함 ",
        "explain3": "대형묘, 크고 굵은 뼈대와 탄탄한 근육 ",
        "img": "2_nor.jpg", "imga": "lv3.jpg", "imgb": "lv2.jpg", "imgc": "lv3.jpg"
      },
      "ESFJ": {
        "mbtis": "현실주의적인 당신에게 최고의 냥이", "animal": "- 아메리칸 컬 고양이 -",
        "explain": "• 협력심이 뛰어나며 동료로서 가장 많이 선호 받는 성격입니다.</br> • 눈치가 빠르고 세상물정에 밝습니다. </br> • 오지랖이 넓고 즐거움을 추구하여 매사에 긍정적입니다. </br> • 사회성이 없는 성격을 싫어하며 부정적 감정에 배타적입니다. </br> • 활기차고 관심 많은 아메리칸 컬은 즐거운 관계를 추구하는 당신에게 최고의 파트너 입니다.  ",
        "explaincat": "<b>주인 특징: </b> 뒤로 말린 귀, 똑똑함, 호기심 많음, 침착함, 부드러운 털 ",
        "explainmbti": "<b>집사 특징: </b> 예의 중시, 타인의 인정 추구, 즐거움 추구, 준비성 철저, 리액션 좋음 ",
        "explain1": "사람 옆에 있는 것을 좋아함 ",
        "explain2": "운동을 좋아하고 점프와 뛰기를 좋아함 ",
        "explain3": "날씬한 체형, 근육 발달 ",
        "img": "3_ame.jpg", "imga": "lv3.jpg", "imgb": "lv3.jpg", "imgc": "lv1.jpg"
      },
      "ESFP": {
        "mbtis": "행복하고 단순한 당신에게 최고의 냥이", "animal": "- 벵갈 고양이 -",
        "explain": "• 이벤트를 좋아하고 사교적인 성격입니다. </br> • 집보다 밖에 있을 때 행복한 성격입니다. </br> • 말을 하는 것을 좋아하지만 실제 전달되는 내용은 적은 편 입니다. </br> • 틀과 계획에 얽매이는 일을 싫어하고 자유로울 때 능률이 올라갑니다. </br> • 성격이 급하고 무언가를 계속 해야하는 당신에겐 활동적인 벵갈 고양이가 최고의 파트너 입니다. ",
        "explaincat": "<b>주인 특징: </b> 탄탄한 몸, 친절함, 털관리가 쉬움, 충성심 ",
        "explainmbti": "<b>집사 특징: </b> 급함, 뛰어난 학습력, 활동가, 단순한 생각, 귀가 얇음 ",
        "explain1": "친절하고 친근함 ", 
        "explain2": "신나는 점프, 자유롭게 뛰어다님 ", 
        "explain3": "대형묘, 탄탄한 몸매 ",
        "img": "4_ben.jpg", "imga": "lv3.jpg", "imgb": "lv3.jpg", "imgc": "lv3.jpg"
      },
      "ENTJ": {
        "mbtis": "지적이고 체계적인 당신에게 최고의 냥이", "animal": "- 브리티시 숏 헤어 -",
        "explain": "• 지적 능력의 향상과 꿈에 대한 열망이 강한 성격입니다. </br> • 선행을 중요시 여기다 보니 판단을 서두르는 경향이 있습니다. </br> • 리더쉽이 있고 어려운일을 쉽게 극복해내는 편 입니다.  </br> • 활동적인 당신에게 이 지적이고 충실하며 애정 넘치는 고양이는 최고의 파트너가 되어 줄 것입니다. </br> • 당신이 혼자서 무언가 골몰하고 있을지라도 이 영특한 고양이는 스스로 잘 놀고 있을 것 입니다. ",
        "explaincat": "<b>주인 특징: </b> 강한 힘, 큰 근육과 무거운 골격, 둥글이 ",
        "explainmbti": "<b>집사 특징: </b> 자기애 강함, 활동적, 효율성 추구, 완벽 추구, 일 중시, 지적 욕구, 직설적 ",
        "explain1": "강한 충성심을 갖지만 애정을 갈구하지 않음 ", 
        "explain2": "적당히 돌봐주면 이후에는 혼자서 잘 놈 ", 
        "explain3": "대형묘, 온몸이 튼튼함 ",
        "img": "5_bri.jpg", "imga": "lv2.jpg", "imgb": "lv2.jpg", "imgc": "lv3.jpg"
      },
      "ENTP": {
        "mbtis": "팔방미인인 당신에게 최고의 냥이", "animal": "- 스코티시 폴드 -",
        "explain": "• 창의적이고 독창적이며 새로운 일에 대한 도전에 보다 적극적입니다.</br> • 다재다능 하고 일을 효율적으로 처리하며 하는 일에 대한 자신감이 있습니다.</br> • 다만 하나의 일을 꾸준히 해 내고 반복하는 일에 대해서는 부족한 모습을 보일 수 있습니다.</br> • 반려동물을 선택 할 경우 지속적 관계의 유지에 유의하여야 합니다.</br> • 당신에게는 돌보기 쉽고 생활에도 어려움 없는 스코티시 폴드가 최고의 파트너 입니다. ",
        "explaincat": "<b>주인 특징: </b> 접혀있는 귀, 애교, 동그란 눈, 둥글둥글, 낮은 코 ",
        "explainmbti": "<b>집사 특징: </b> 변덕, 자기애, 독립심, 탐욕, 자존심, 고집, 끈기 부족 ",
        "explain1": "사람을 잘 따르지만 조용하며 온화함 ", 
        "explain2": "잘 움직이지 않음 ", 
        "explain3": "중형묘, 통통함 ",
        "img": "6_sco.jpg", "imga": "lv2.jpg", "imgb": "lv1.jpg", "imgc": "lv2.jpg"
      },
      "ENFJ": {
        "mbtis": "정의롭고 정이많은 당신에게 최고의 냥이", "animal": "- 먼치킨 -",
        "explain": "• 당신은 타인과 마음이 쉽게 동화되며 많은 부분을 이해해주는 부드러운 사람으로 보여집니다.</br> • 말과 행동에서 자주 상처 받지만 작은 일로도 쉽게 회복되는 경향이 있을 수 있습니다.</br> • 활발하고 단순하지만 속으로 많은 걱정을 하곤 합니다. </br> • 활달하고 관심 많은 먼치킨은 당신의 활발함도 받아주며 자주 상처받는 당신의 마음도 모두 치유해주는 훌륭한 파트너 입니다.</br> • 먼치킨은 작은 몸집을 갖고있으며 다리가 짧아 계단을 무서워 할 수 있습니다. ",
        "explaincat": "<b>주인 특징: </b> 짧은 다리, 긴 허리, 껴안는 것을 좋아함, 호기심, 탐험 ",
        "explainmbti": "<b>집사 특징: </b> 수다쟁이, 강한 멘탈, 단순무식, 신뢰받는 사람 ",
        "explain1": "사람을 잘 따르고 애교가 많음 ", 
        "explain2": "아담한 다리로 열심히 당신을 쫓을 것 ", 
        "explain3": "작은 몸통, 짧은 다리 ",
        "img": "7_mun.jpg", "imga": "lv3.jpg", "imgb": "lv3.jpg", "imgc": "lv1.jpg"
      },
      "ENFP": {
        "mbtis": "소통능력이 뛰어난 당신에게 최고의 냥이", "animal": "- 버만 고양이 -",
        "explain": "• 정이 많고 감수성이 풍부하여 감정의 기복이 자주 일어나는 성격일 수 있습니다. </br> • 서로에게 피해를 주는 것에 큰 스트레스를 받으며 상대에게 문제를 직설적으로 말하지 못하여 이중의 스트레스를 느낄 수 있습니다.</br> • 공감을 잘 하여 주변에 많은 사람이 있지만 그 중 당신이 소중히 생각하는 사람은 극히 소수입니다. </br> • 긴밀한 관계를 중요히 여기는 당신에게는 한명의 집사에게 애착을 갖는 버먼이 최고의 파트너 입니다.</br> • 버먼은 날마다 기분이 다른 당신의 감정 기복을 큰 스트레스 없이 받아줄 수 있을 것 입니다. ",
        "explaincat":  "<b>주인 특징: </b> 양말, 조용함, 똑똑함, 평화주의자, 내적 질투, 사파이어 ",
        "explainmbti": "<b>집사 특징: </b> 정신 산만, 생각 많음, 흥미 추구, 몰두, 리액션, 감정 기복 ",
        "explain1": "기분이 내키면 다가올 것", 
        "explain2": "묵묵하고 느긋함 ", 
        "explain3": "대형묘, 건강함, 다부진 몸 ",
        "img": "8_ver.jpg", "imga": "lv2.jpg", "imgb": "lv1.jpg", "imgc": "lv3.jpg"
      },
      "ISTJ": {
        "mbtis": "논리적이고 합리적인 당신에게 최고의 냥이", "animal": "- 이집션 마우 -",
        "explain": "• 겉으로 나타내는 표현이 적고 참다가 한번에 폭발하는 성격입니다. </br> • 낯가림이 심한편이고 변화 적응에 더딥니다 </br> • 노력형 인간이며 주어진 업무나 책임을 끝까지 완수하는 편 입니다. </br> • 충직하고 스스로 영역을 만들며 잘 관리하는 이집션 마우는 시간관리를 중요시 여기는 당신에게 자잘한 스트레스를 덜어 줄 것 입니다. </br> • 이집션 마우는 보기보다 성격이 매우 온순하여 돌보기가 수월하며 집사와 좋은 친구가 될 수 있습니다. ",
        "explaincat":  "<b>주인 특징: </b> 진한 아이라인, 특이한 반점, 스스로 몸 잘 가꿈, 아몬드 형 눈, 풍뎅이 무늬 ",
        "explainmbti": "<b>집사 특징: </b> 청렴결백, 깔끔한 외모, 시간과 에너지 허투루 사용하지 않음, 조용함, 의지가 강함 ",
        "explain1": "낯을 가리지만 집사와 놀고싶어 함 ", 
        "explain2": "활동적인 편이며 지배욕이 강함 ", 
        "explain3": "약간 왜소한편, 앞발 짧음 ",
        "img": "9_egy.jpg", "imga": "lv2.jpg", "imgb": "lv2.jpg", "imgc": "lv2.jpg"
      },
      "ISTP": {
        "mbtis": "다재다능한 당신에게 최고의 냥이", "animal": "- 터키시 앙고라 -",
        "explain": "• 다른 사람들에게는 수동적이고 비판적으로 보일 수 있으나 머릿속으로는 꾸준히 논리적 판단을 내리고 있습니다.</br> • 대부분의 상황에서 편견이 없고 논리적 정합을 중요시 여깁니다.</br> • 독립적인 활동에 가치를 부여하며 혼자만의 시간을 중요히 여깁니다.</br> • 당신은 반려동물에게 개인적 공간을 제공하고 자유롭게 방치하는 경향이 있을 수 있습니다. </br> • 도도하지만 활발하고 우아하지만 영악한 터키시 앙고라는 당신에게 의존하지 않고 시간을 보낼 수 있습니다. ",
        "explaincat":  "<b>주인 특징: </b> 새하얀 털, 우아함, 가는 뼈대, 늘씬함, 조용함, 친근함, 오드아이 ",
        "explainmbti": "<b>집사 특징: </b> 재주가 많음, 도구에 강함, 점잖음, 표정 변화 적음, 간섭 반대 ",
        "explain1": "주인을 잘 따르지만 스킨쉽을 싫어함 ", 
        "explain2": "온순하고 조용함 ", 
        "explain3": "중형묘, 장모로 인하여 커 보임 ",
        "img": "10_tur.jpg", "imga": "lv2.jpg", "imgb": "lv1.jpg", "imgc": "lv2.jpg"
      },
      "ISFJ": {
        "mbtis": "솔직하지만 눈치있는 당신에게 최고의 냥이", "animal": "- 러시안 블루 -",
        "explain": "• 끈기 있고 성실하며 낭비를 싫어하는 경향이 있습니다.</br> • 당신은 주로 이야기를 듣는 쪽 이며 상대방은 당신에게 의지하고 편안해 할 수 있습니다.</br> • 밖으로는 성숙 해 보이나 내적으로 감정을 감추는 경향이 강하며 참았다가 한번에 폭발하는 성향이 있습니다.</br> • 감정표현이 서툰 당신에게도 러시안 블루는 원하는 것을 단번에 알아 채고 존중해주는 고양이입니다.</br> • 또한 개인 시간을 중요하게 여기고 조용함을 사랑하는 당신에게 러시안 블루는 최고의 파트너 입니다.</br> • 단, 냥바냥이 가장 심한 종입니다. ",
        "explaincat":  "<b>주인 특징: </b> 눈치꾼, 회색털, 초록눈, 겁이 많음, 단단한 몸, 무릎을 좋아함 ",
        "explainmbti": "<b>집사 특징: </b> 조용함, 내성적, 뛰어난 인간관계, 맡은 일에 헌신적 ",
        "explain1": "정도를 아는 고양이 ", 
        "explain2": "온순하고 조용하며 소심하고 겁이 많음 ", 
        "explain3": "중형묘, 늘씬하고 유연함 ",
        "img": "11_rus.jpg", "imga": "lv2.jpg", "imgb": "lv1.jpg", "imgc": "lv2.jpg"
      },
      "ISFP": {
        "mbtis": "포용력과 이해심많은 당신에게 최고의 냥이", "animal": "- 메인쿤 -",
        "explain": "• 포용력과 이해력이 뛰어나며 감수성이 뛰어나 남들에게 착한 사람으로 비춰집니다. </br> • 자신을 밖으로 나타내지 않으며 상대에게 나를 보여주는 것을 싫어합니다. </br> • 편안한 분위기를 선호하며 타인에 맞추어 주는 역할을 맡는 경우가 많습니다. </br> • 반면 이로 인한 스트레스 또한 많이 받는 편 입니다. </br> • 주인을 잘 따르고 어떤 환경에서도 잘 적응하는 메인쿤은 집순이인 당신을 잘 따르고 행복한 시간을 보낼 것 입니다.",
        "explaincat":  "<b>주인 특징: </b> 큰 덩치, 무거움, 조용함, 순한 양, 자유로운 앞발, 세계에서 제일 큰 고양이 ",
        "explainmbti": "<b>집사 특징: </b> 집순이, 평화주의자, 조용한 관종, 집에서 힐링, 행동 느림 ",
        "explain1": "상호작용 놀이를 좋아함", 
        "explain2": "달리기를 좋아함 ", 
        "explain3": "대형묘, 무거운 골격과 근육 ",
        "img": "12_mai.jpg", "imga": "lv2.jpg", "imgb": "lv2.jpg", "imgc": "lv3.jpg"
      },
      "INTJ": {
        "mbtis": "타고난 승부사인 당신에게 최고의 냥이", "animal": "- 래그돌 -",
        "explain": "• 큰 틀 안에서 생각하는 것을 좋아하며 예외가 많아지는 것을 불편해합니다. </br> • 어떤 대상에 대해 체계적이고 분석적으로 접근하는 성향이 있습니다. </br> • 순간적인 대응 보다는 다양한 사고를 즐기며 깊은 생각을 통해 나온 결론을 중요시 여깁니다.</br> • 래그돌은 온화하고 느긋하여 생각에 잠긴 당신을 다소곳이 지켜봐 줄 것 입니다. </br> • 래그돌은 일상의 변화에 민감하지 않으며 독립적이고 자유로운 당신의 행동에 스트레스를 받지 않을 것 입니다. ",
        "explaincat":  "<b>주인 특징: </b> 예쁨주의, 온화함, 평화주의자, 느긋함, 친절함, 순둥이 ",
        "explainmbti": "<b>집사 특징: </b> 논리적, 객관적, 이론적, 분석적, 진지한 생각 ",
        "explain1": "사람을 잘 따르고 잘 기댐 ", 
        "explain2": "분쟁을 싫어하고 장난을 잘 받아줌 ", 
        "explain3": "크고 긴 골격, 긴 꼬리와 화려한 모피 ",
        "img": "13_lag.jpg", "imga": "lv2.jpg", "imgb": "lv2.jpg", "imgc": "lv3.jpg"
      },
      "INTP": {
        "mbtis": "즉흥적인 염세주의자인 당신에게 최고의 냥이", "animal": "- 샴 고양이 -",
        "explain": "• 사회적 사교 활동의 가치를 낮게 평가하는 경향이 있습니다. </br> • 지식과 지능에 높은 가치를 두며 반복적인 일들에 대해 스트레스를 받는 편 입니다.  </br> • 자신이 관심있는 분야에 대해 깊게 분석하고 연구하는 버릇이 있습니다. </br> • 외적인 표현을 절제하고 내향적 성향이 강한 성격이므로 외부의 자극에 둔감 한 편 입니다. </br> • 집사에 대한 소유욕과 지배욕이 높은 샴 고양이는 자신의 의견을 잘 전달하여 대상의 관심을 알아차리기 어려운 당신도 쉽게 친해질 수 있습니다. ",
        "explaincat":  "<b>주인 특징: </b> 개냥이, 수다쟁이, 애교쟁이, 호기심 많음, 질투심, 삼각형 머리 ",
        "explainmbti": "<b>집사 특징: </b> 자기애가 뛰어남, 공상, 분석, 추리, 지식욕, 감정기복이 없음, 개인주의자 ",
        "explain1": "자주 들이댐, 관심 끌기 좋아함 ", 
        "explain2": "온순하고 느긋한 성격이나 매우 활동적 ", 
        "explain3": "호리호리하고 가는 몸매, 짧은 털 ",
        "img": "14_sha.jpg", "imga": "lv3.jpg", "imgb": "lv3.jpg", "imgc": "lv2.jpg"
      },
      "INFJ": {
        "mbtis": "궁금증 넘치는 당신에게 최고의 냥이", "animal": "- 아비시니안 -",
        "explain": "• 직관적이고 통찰력이 뛰어나 사실관계를 잘 파악하지만 부가적인 현상에 대해서는 관심이 적은 편 입니다. </br> • 다른 사람들을 돕고자 하는 성향을 보이지만 그만큼의 스스로 갖는 시간도 필요로 합니다. </br> • 다양한 분야에 관심이 많고 지식을 모으는 것에 흥미가 있습니다.</br> • 관리가 용이하고 자신의 시간을 방해하지 않을 수 있는 아비시니안은 당신에게 최고의 파트너 입니다. </br> • 사람에 대해 잘 반응해 주는 고양이 이므로 당신의 내적 성찰을 잘 기다려 줄 것입니다. ",
        "explaincat":  "<b>주인 특징: </b> 활발함, 온순함, 구경꾼, 아이라인, 윤기 있는 털 ",
        "explainmbti": "<b>집사 특징: </b> 생각이 많음, 새로운 것에 대한 거부감, 미리미리, 나서지 않는다, 내사람 좋아 ",
        "explain1": "사람을 좋아하고 놀이를 좋아함 ", 
        "explain2": "끊임없이 돌아다님, 점프 좋아함 ", 
        "explain3": "긴 몸통, 발달된 근육 ",
        "img": "15_abi.jpg", "imga": "lv3.jpg", "imgb": "lv3.jpg", "imgc": "lv2.jpg"
      },
      "INFP": {
        "mbtis": "완벽주의자적 당신에게 최고의 냥이", "animal": "- 시베리아 숲 고양이 -",
        "explain": "• 외적으로 보이는 것과 달리 내적으로 정열적이며 깊은 신념을 갖고 있는 성격입니다.</br> • 기 싸움을 싫어하고 되도록이면 주변을 이해하고자 노력합니다.</br> • 본인의 사적 영역이 중요하고 침범당하는 것에 큰 스트레스를 느낍니다. </br> • 당신과는 알아서 잘 노는 고양이가 어울립니다. </br> • 열정적이지만 혼자만의 시간이 필요한 당신에게는 다정하고 참을성 많은 신사고양이인 시베리아 고양이가 최고의 파트너 입니다. ",
        "explaincat":  "<b>주인 특징: </b> 개냥이, 독립적 성향, 나가서 잘 놈, 장난기 많음, 폭염에 약함 ",
        "explainmbti": "<b>집사 특징: </b> 딴생각, 내적 성장, 화날때 혼자 풀어야함, 성장 중시, 말을 잘 검 ",
        "explain1": "혼자서 잘 다님 ", 
        "explain2": "활발하고 활동적, 점프, 놀이 등을 좋아함 ", 
        "explain3": "대형묘, 타고난 사냥꾼 ",
        "img": "16_sib.jpg", "imga": "lv1.jpg", "imgb": "lv3.jpg", "imgc": "lv3.jpg"
      },
    }

    //  ----------------------------------시작하면 시작화면을 숨기고 퀘스천을 보이도록----------------------------------
    function start() {
      $(".start").hide();
      $(".question").show();

    }

    //  ----------------------------자바스크립트 - A,B 클릭이벤트 A를 누르면 1점을 추가------------------------------
    $("#A").click(function () {
      var type = $("#type").val();
      var preValue = $("#" + type).val();
      $("#" + type).val(parseInt(preValue) + 1);
      next();
    });

    $("#B").click(function () {
      next();
    });

    $("#C").click(function () {
      next2();
    });
    //  -----------------------다음문제로 이동 : 마지막 문제와 마지막이 아닌경우를 나눠줌------------------------------
    function next() {
      if (num == 13) {

        $(".question").hide();
        $(".topimg").hide();
        $(".result").show();
        var mbti = "";

        // if($("#EI").val() <2){
        //     mbti = mbti+ "I";
        // } else{
        //     mbti = mbti +"E";
        // }
        ($("#EI").val() < 2) ? mbti += "I" : mbti += "E";
        ($("#SN").val() < 2) ? mbti += "N" : mbti += "S";
        ($("#TF").val() < 2) ? mbti += "F" : mbti += "T";
        ($("#JP").val() < 2) ? mbti += "P" : mbti += "J";
        // alert(mbti); 
        // 각각의 값들을 태그 안쪽 값을 바꾸는것.
        $("#img").attr("src", result[mbti]["img"]);
        $("#imga").attr("src", result[mbti]["imga"]);
        $("#imgb").attr("src", result[mbti]["imgb"]);
        $("#imgc").attr("src", result[mbti]["imgc"]);
        $("#mbtis").html(result[mbti]["mbtis"]);
        $("#animal").html(result[mbti]["animal"]);
        $("#explain").html(result[mbti]["explain"]);
        $("#explain1").html(result[mbti]["explain1"]);
        $("#explain2").html(result[mbti]["explain2"]);
        $("#explain3").html(result[mbti]["explain3"]);
        $("#explaincat").html(result[mbti]["explaincat"]);
        $("#explainmbti").html(result[mbti]["explainmbti"]);



        //  -----------------------마지막 문제가 아닌경우. 일반문제. ------------------------------
      } else {

        $(".progress-bar").attr('style', 'width: calc(100/12*' + num + '%)');
        $("#title").html(q[num]["title"]);
        $("#type").val(q[num]["type"])
        $("#A").html(q[num]["A"]);
        $("#B").html(q[num]["B"]);
        num++;
      }

    }


    function next2() {
    location.href = "https://nyangbti.netlify.app/";
    }


    function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

  </script>

  <!-- 각 문제 점수에 따른 답안 설정 : 문제를 다 풀고 나서 나와야 하기 때문에 num13이후 작성.  -->

  <!-- 앞에있는 점은 클래스를 나타낸다. 제이쿼리문법중 attr은 태그의 속성을 바꿔주는 함수가 있음. -->
  <!-- A를 클릭했을때 무슨 일이 일어나도록 설정. ID가 타입인거에 잘 들고와서 -->
  <!-- 문제1을 클릭했을때 값 올라가는건 이제 만들었다. 이제 자바스크립트로 분류하여 각 문제를 분류시킨다.-->

  <!-- tab으로 줄맞춤, Ctrl + S 생활화 -->

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fd3b44453dcf31c"></script>

</body>

</html>

<!-- VS Extension 좌측 블럭모양 눌러보면 익스텐션. 디플로이로 공개할건데 라이브서버를 이용하면 디플로이한것처럼 pc환경에서 가상 서버 들어갈 수있음. 
여기 우클릭 + Open with live server. 20/12/30 환경설정 끝. -->