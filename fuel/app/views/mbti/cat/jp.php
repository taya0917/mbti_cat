<!-- 느낌표 + 탭을 이용하면 기본 스타일 바로 지적 가능. -->
<!-- 쉬프트 + 탭을 이용하면 줄맞춤 바로 가능. -->
<!-- 컨트롤 슬래쉬로 한꺼번에 주석처리 가능. -->

<!DOCTYPE html>
<html lang="jp">
<!-- en ko 로 전환 가능.-->
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
                <div>
                    <div class="left">
                        <input id="imgb" src="lv2.jpg" type="image" />
                    </div>
                    <div class="right">
                        <h6 class="text-left mt-2 font-size:90%"><b>[활동력]</b></h6>
                        <h6 id="explain2" class="text-muted text-left font-size:50% ">활동력 설명</h6>
                    </div>
                </div>
                
                <div>
                    <div class="left">
                        <input id="imgc" src="lv1.jpg" type="image" />
                    </div>
                    <div class="right">
                        <h6 class="text-left mt-2 font-size:90%"><b>[체구력]</b></h6>
                        <h6 id="explain3" class="text-muted text-left font-size:50% ">전투력 설명</h6>
                    </div>
                </div>

                <button id="C" type="button" class="btn btn-secondary mt-1">다른고양이 보러가기</button>
                <button class="btn btn-outline-secondary mt-1 mb-1" https://nyangbti.netlify.app/ onclick="copyToClipboard('#p1')">냥비티아이 주소 복사하기</button>
                
                <div class="cearray">
                <ins class="kakao_ad_area" style="display:none;" data-ad-unit="DAN-xHlf5SEBbtqZPtA1" data-ad-width="320"
                    data-ad-height="100"></ins>
                <script type="text/javascript" src="//t1.daumcdn.net/kas/static/ba.min.js" async></script>
                </div>
            </article>
        </div>


        <!-- ----------------------------------타입별 점수 (히든,인풋)---------------------------------- -->
        <input type="hidden" id="X" value="0">
        <input type="hidden" id="EI" value="0">
        <input type="hidden" id="SN" value="0">
        <input type="hidden" id="TF" value="0">
        <input type="hidden" id="JP" value="0">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fd3b44453dcf31c"></script>
    </body>
</html>

<!-- VS Extension 좌측 블럭모양 눌러보면 익스텐션. 디플로이로 공개할건데 라이브서버를 이용하면 디플로이한것처럼 pc환경에서 가상 서버 들어갈 수있음. 
여기 우클릭 + Open with live server. 20/12/30 환경설정 끝. -->