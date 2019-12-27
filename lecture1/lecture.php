<?php require('../lib/top.php'); ?>

<div class="container">
  <div class="row">
    <ul class="list-group">
      <a href="#" class="list-group-item active">1강 학습목표</a>
      <a href="#" class="list-group-item">2강 준비, 다운로드</a>
      <a href="#" class="list-group-item">3강 준비, 아톰세팅</a>
      <a href="#" class="list-group-item">4강 인덱스 로그인 회원가입화면</a>
      <a href="#" class="list-group-item">5강 인덱스, 탑, 바텀 코드</a>
    </ul>
  </div>

  <div class="row">
    <div class="embed-responsive embed-responsive-16by9"> <!-- 유투브 비디오 반응형 -->
      <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/HrXjLyn7Krs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <hr>

  <div class="row">
    <p>
      첫번째 강의는 PHP 학습을 하기 전 무엇을 어떻게 공부할지를 준비해보는 시간을 가집니다.
    </p>
    <!-- 소스코드 -->
    <pre class="pre-scrollable">
#include <studio.h>

int main(void)
{
  printf("hello world!");
}
    </pre>
  </div>
</div>

<div class="container">
<hr>
  <form class="form-horizontal">
    <div class="form-group">
      <label>댓글: </label>
      <textarea class="form-control" rows="5" id="commentContent" name="commentContent"></textarea>
      <br>
      <button type="submit" class="btn pull-right">등록</button>
    </div>
  </form>
  <hr>
</div>

<?php require('../lib/bottom.php'); ?>
