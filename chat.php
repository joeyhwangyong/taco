
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/styles.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat w/ 황용 - kakasatalk</title>
  </head>
  <body id="chat-screen">
    <div class="status-bar">
      <div class="status-bar__column">
        <span>No Service</span>
        <i class="fas fa-wifi"></i>
      </div>
      <div class="status-bar__column">
        <span>18:43</span>
      </div>
      <div class="status-bar__column">
        <span>110%</span>
        <i class="fas fa-battery-full fa-lg"></i>
        <i class="fas fa-bolt"></i>
      </div>
    </div>
    <header class="alt-header">
      <div class="alt-header__column">
        <a href="chats.html">
          <i class="fas fa-angle-left fa-3x"></i>
        </a>
      </div>
      <div class="alt-header__column">
        <h1 class="alt-header__title">전산실
        </h1>
      </div>
      <div class="alt-header__column">
        <span><i class="fas fa-search fa-lg"></i></span>
        <span><i class="fas fa-bars fa-lg"></i></span>
      </div>
    </header>

    <main class="main-screen main-chat">
      <div class="chat__timestamp">
        Tuesday, June 30, 2021
      </div>

      <div class="message-row">
        <img src="image/20131123_110306.jpg" />
        <div class="message-row__content">
          <span class="message__author">황용</span>
          <div class="message__info">
            <span class="message__bubble">왔썹?</span>
            <span class="message__time">21:27</span>
          </div>
        </div>
      </div>

      <div class="message-row message-row--own">
        <div class="message-row__content">
          <div class="message__info">
            <span class="message__bubble">글쓰기를 누르면 글이써지는군요 </span>
            <span class="message__time">21:27</span>
          </div>
        </div>
      </div>
    </main>


    <?php
    $conn = mysqli_connect("localhost", "root", "autoset", "sa");
    /*if (!$conn) {
      echo 'Could not connect. ' . mysqli_connet_error();
    } else{
    echo 'Connected successfully';
    }*/
    //msg_board 테이블에서 글조회
    // select * from 테이블명
    $sql = "select * from msg_board";
    $result = mysqli_query($conn, $sql);
    $list = '';
    // echo 값을 그대로 출력.
    // print 값을 그대로 출력.
    // print_r 배열. 객체 모양을 그대로 출력.
    // var_dump print_r 상세하게.
  
    //print_r($result);
    /*list var i = 0'
    while (i <= list.length){반복할 일 }
    */
    while($row = mysqli_fetch_array($result)){
      $list = $list."<li> <a>{$row['name']}</a></li>";
      //$list = $list."<li>{$row['number']}: <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
    }
    
    echo $list;
    ?>


          


          <!--<form action="board/insert.php" method="post" target="iframe1">
        <p>
            <label for="name">제목:</label>
            <input type="text" id="name" name="name">
        </p>
        
        <input type="submit" value="글쓰기">
    </form>

       <form class="reply">
      <div class="reply__column">
        <i class="far fa-plus-square fa-lg"></i>
      </div>
      <div class="reply__column">
        <input type="text" placeholder="Write a message..." />
        <i class="far fa-smile-wink fa-lg"></i>
        <button>
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
    </form> !-->




 

    <div id="no-mobile">
      <span>Your screen is too big ㅠㅠ</span>
    </div>

    <script
      src="https://kit.fontawesome.com/6478f529f2.js"
      crossorigin="anonymous"
    ></script>
  </body>
  <body>
 
	
  <br></br>
	<form class="reply" action="board/insert.php" method="post" target="iframe1">
        <div class="reply__column">
        <i class="far fa-plus-square fa-lg"></i>
  </div>
        <div class="reply__column">
            <label for="name"></label>
            <input type="text" placeholder="Write a message..." id="name" name="name">
            <i class="far fa-smile-wink fa-lg"></i>
            <button>
                <i class="fas fa-arrow-up"></i>
              
              </button>
        </div>     
    </form>

</body>
<iframe name="iframe1"></iframe>
</html>

<!--
<form class="reply" action="board/insert.php" method="post" target="iframe1">
            <div class="reply__column">
              <i class="far fa-plus-square fa-lg"></i>
            </div>
            <div class="reply__column">
              <i class="far fa-smile-wink fa-lg"></i>
              <button>
                <i class="fas fa-arrow-up"></i>
                
              </button>
            </div>
            <iframe name="iframe1"></iframe>