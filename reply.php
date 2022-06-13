<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=”description” content=”ここに内容”>
  <title>Photographer Fumika</title>
  <link rel =”stylesheet” href=”https://unpkg.com/destyle.css@1.0.5/destyle.css”>
  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.3.2/luminous-basic.min.css">
  <script src="https://kit.fontawesome.com/d0896c8887.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Delius&family=Gaegu:wght@300&family=M+PLUS+1p&family=Nanum+Gothic&display=swap" rel="stylesheet">
  <link rel ="stylesheet" href="css/contact.css">
</head>

<body>
  <header id="header">
    <div class="site-title">
      <a class="home" href="index.html">
        <img class="site-title-img" src="images/photographer.fumika.svg" alt="">
      </a>
    </div>


    <nav class="hamburger-menu">
      <button class="btn-menu"><i class="fa-solid fa-bars"></i></button>
        <ul class="mobile-main-nav main-nav">
          <li class="nav-title">
            <a class="nav-text" href="index.html">Home</a>
          </li>

          <li class="nav-title">
            <a class="nav-text"href="about.html">About</a>
          </li>
          
          <div class="mobile-category-menu nav-title nav-text">Category<i class="fa-solid fa-caret-down"></i>
            <ul class="mobile-category-nav">
              <li><a class="nav-text" href="animal.html">Animal</a></li>
              <li><a class="nav-text" href="city.html">City</a></li>
              <li><a class="nav-text" href="nature.html">Nature</a></li>
              <li><a class="nav-text" href="people.html">People</a></li>
              <li><a class="nav-text" href="sky.html">Sky</a></li>
            </ul>
          </div>

          <li class="nav-title">
            <a class="nav-text"href="photo-gallery.html">Photo gallery</a>
          </li>


          <li class="nav-title">
            <a class="nav-text" href="https://www.instagram.com/kofu1121/">Instagram</a>
          </li>
        </ul>
    </nav>
  </header>

  <main>
    <div class="container">
      
      <aside class="page-nav">
        <nav>
          <ul class="main-nav">
            <li class="nav-title">
              <a class="nav-text" href="index.html">Home</a>
            </li>

            <li class="nav-title">
              <a class="nav-text"href="about.html">About</a>
            </li>

            <div class="category-menu nav-title nav-text">Category<i class="fa-solid fa-caret-down"></i>
              <ul class="category-nav">
                <li><a class="nav-text" href="animal.html">Animal</a></li>
                <li><a class="nav-text" href="city.html">City</a></li>
                <li><a class="nav-text" href="nature.html">Nature</a></li>
                <li><a class="nav-text" href="people.html">People</a></li>
                <li><a class="nav-text" href="sky.html">Sky</a></li>
              </ul>
            </div>

            <li class="nav-title">
              <a class="nav-text"href="photo-gallery.html">Photo gallery</a>
            </li>

            <li class="nav-title">
              <a class="nav-text" href="https://www.instagram.com/kofu1121/">Instagram</a>
            </li>
          </ul>
        </nav>
      </aside>

      <img class="form-img contents-width" src="images/20220525flower-moon/20220516flower-moon.jpg" alt="">

      <div class="contact-check main-container">
        <?php
            $dsn= 'mysql:host=localhost;dbname=photographer-fumika;charset8';
            $user= 'fumika-photo';
            $pass= 'fumika0613';
            $dbh= new PDO($dsn,$user,$pass);
            // var_dump($dbh);
            
            $name=$_POST['name'];
            $email=$_POST['email'];
            $number=$_POST['number'];
            $message=$_POST['message'];
            
            $name= htmlspecialchars($name);
            $email= htmlspecialchars($email);
            $number= htmlspecialchars($number);
            $message= htmlspecialchars($message);
          ?>
          <p class="check-text contents-width">
            <?php
            print $name;
            print '様<br/>';
            print 'メッセージありがとうございました。<br/>';
            print $email;
            print 'に確認メールを送りましたので、ご確認お願い致しします。';
            
            $mail_sub='ご連絡ありがとうございます。';
            $mail_body= $name."様。\nこの度はご連絡頂きましてありがとうございます。\nメッセージの確認をし、再度ご連絡させて頂きますので宜しくお願い致します。";
            $mail_body=html_entity_decode($mail_body, ENT_QUOTES, "UTF-8");
            $mail_head='From: fu6ru3ze12@gmail.com';
            mb_language('Japanese');
            mb_internal_encoding("UTF-8");
            mb_send_mail($email, $mail_sub, $mail_body, $mail_head);

            $sql = 'INSERT INTO contact_form (name, email, number, message) VALUES ("'.$name.'","'.$email.'","'.$number.'","'.$message.'")';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $dbh = null;
            ?>
          </p>
          <div class="contact-home-box contact-check main-container">
            <a class="contact-home" href="index.html">Homeへ戻る <span class="contact-home-arrow">→</span>
            <i class="home-icon fa-solid fa-house-chimney"></i>
            </a>
          </div>
      </div>


    </div>
  </main>
  
  <footer id="footer">
    <p class="footer-text">&copy; copyright by Photographer Fumika</p>
  </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.3.2/luminous.min.js"></script>
  <script src="js/main.js"></script>
  
</body>
</html>