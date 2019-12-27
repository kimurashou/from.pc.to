<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width", initial-scale="1">
    <title>프롬PC투</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/frompcto.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../intro1/intro.php">프롬PC투</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../intro1/intro.php">소개<span class="sr-only"></span></a></li>
            <li><a href="../intro1/teacher.php">강사진<span class="sr-only"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
              aria-haspopup="true" aria-expanded="false">강의<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../lecture1/lecture.php">PHP</a></li>
                <li><a href="../lecture2/lecture.php">Java</a></li>
                <hr>
                <li><a href="../lecture3/lecture.php">English</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="내용을 입력하세요.">
            </div>
            <button type="submit" class="btn btn-default">검색</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
              aria-haspopup="true" aria-expanded="false">로그인<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../member1/login.php">로그인</a></li>
                <li><a href="../member1/join.php">회원가입</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
