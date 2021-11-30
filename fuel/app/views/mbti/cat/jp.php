
<!DOCTYPE html>
<html lang="jp">
    <link rel="shortcut icon" href="/assets/img/cat/favicon.ico?<?php echo time(); ?>" />
    <head>
        <div>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fd3b44453dcf31c"></script>
            <?php echo $view_data['meta_txt']; ?>
            <?php echo $view_data['css']; ?>
            <?php echo $view_data['js']; ?>
        </div>
    </head>

    <body class="text-center container">
        <div class="maxred" >
            <article class="mt-3 cearray topimg">
                <?php echo Asset::img('cat/bgicov2.png', array('id'=>'img2'));?>
                <h2 class="mt-3 text-center " style=font-size:110%>냥비티아이(Nyang-BTI) 집사테스트</h2>
            </article>
            <article class="start">
                <h1 class="mt-2 text-center font-weight-bolder " style=font-size:130%>당신과 어울리는 애옹이 주인님은?</h1>
                <button type="button" class="start_btn btn btn-outline-secondary mt-4">테스트 시작하기</button>
                <div>
                    <div class="text-muted "><br><br>*Thanks to : 멋쟁이사자처럼, 조코딩, JKH <br>Copyright 2021. PSB all rights reserved.<br>nyangbti@gmail.com<br><br></div>
                </div>

                <div class ="btm" >
                    <ins class="kakao_ad_area " style="display:none;" data-ad-unit    = "DAN-4pYteoOdrh0MnQst"  data-ad-width   = "320"  data-ad-height  = "100"></ins> 
                    <script type="text/javascript" src="//t1.daumcdn.net/kas/static/ba.min.js" async></script>
                </div>
            </article>
            <article class="question">
                <div class="progress mt-5">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: calc(0%)"></div>
                </div>
                <div class ="minhei2">
                    <h2 id="title" class="text-center mt-5 font-weight-bolder minhei" style=font-size:110%>
                    <font style='color:red'>주의</font> : 무엇보다 당신의 옆에있는 냥이야말로 최고의 파트너 입니다. (´▽`ʃ<font style='color:red'>♥</font>ƪ)
                    </h2>
                </div>
                <input id="type" type="hidden" value="X" >
                <button id="A" type="button" class=" btn btn-secondary mt-5">네</button>
                <button id="B" type="button" class=" btn btn-secondary mt-1">알겠습니다</button>
            </article>

            <article class="result" >
                <div margin> </div>

                <h2 class=" text-center " style=font-size:130%><b>냥비티아이(Nyang-BTI) 결과</b></h2>
                <?php echo Asset::img('cat/1_per.jpg', array('id'=>'img'));?>
                <h2 id="mbtis" class="text-center p-2 colorgray1 text-white" style=font-size:105%>ESTJ</h2>
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
                    <?php echo Asset::img('cat/lv1.jpg', array('id'=>'imga'));?>
                    </div>
                    <div class="right">
                    <h6 class="text-left mt-2 font-size:90%"><b>[관심욕]</b></h6>
                    <h6 id="explain1" class="text-muted text-left font-size:50% ">관심욕 설명</h6>
                    </div>
                </div>

                <div>
                    <div class="left">
                        <?php echo Asset::img('cat/lv2.jpg', array('id'=>'imgb'));?>
                    </div>
                    <div class="right">
                        <h6 class="text-left mt-2 font-size:90%"><b>[활동력]</b></h6>
                        <h6 id="explain2" class="text-muted text-left font-size:50% ">활동력 설명</h6>
                    </div>
                </div>
                
                <div>
                    <div class="left">
                        <?php echo Asset::img('cat/lv1.jpg', array('id'=>'imgc'));?>
                    </div>
                    <div class="right">
                        <h6 class="text-left mt-2 font-size:90%"><b>[체구력]</b></h6>
                        <h6 id="explain3" class="text-muted text-left font-size:50% ">전투력 설명</h6>
                    </div>
                </div>

                <button id="C" type="button" class="btn btn-secondary mt-1">다른고양이 보러가기</button>
                <button class="btn_urlcopy btn btn-outline-secondary mt-1 mb-1">냥비티아이 주소 복사하기</button>
                
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
    </body>
</html>