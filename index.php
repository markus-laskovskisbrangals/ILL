<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./stylesheets/style.css">
    <title>Outpost Forum</title>
</head>
<body>
    <div class="banner"></div>
    <div class="menu-bar">
        <ul class="menu-itams">
            <li><a href="#">Sākums</a></li>
            <li><a href="#">Forums</a></li>
            <li><a href="#">Vēl kaut kas</a></li>
            <!--<li><input type="text" placeholder="Meklēt..."><button><i class="fa-solid fa-magnifying-glass"></i></button></li>-->
        </ul>
        <ul class="user-options">
            <li><a href="login.php">Ienākt</a></li>
            <li><a href="register.php" class="accent-link">Reģistrēties</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="namedays">
            <p>Vārda dienas šodien: Markus</p>
        </div>
        <div class="main-content">
            <div class="content-container">
                <div class="chat-widget">
                    <div class="widget-header">
                        <p>Čats</p>
                    </div>
                    <div class="widget-body">
                        <div class="chat-entry">
                            <img src="./assets/images/bomzis.png" alt="chat profile picture">
                            <p class="chat-name">xXdussydestroyerXx</p>
                            <p class="chat-message">Čau!</p>
                        </div>
                        <div class="chat-entry">
                            <img src="./assets/images/bomzis.png" alt="chat profile picture">
                            <p class="chat-name">xXdussydestroyerXx</p>
                            <p class="chat-message">Kā iet?</p>
                        </div>
                        <div class="chat-entry">
                            <img src="./assets/images/bomzis.png" alt="chat profile picture">
                            <p class="chat-name">xXdussydestroyerXx</p>
                            <p class="chat-message">Te kāds ir?</p>
                        </div>
                        <div class="message-input">
                            <input type="text" name="chat-message" id="chat-message">
                            <button>Sūtīt</button>
                        </div>
                    </div>
                </div>
                <div class="chat-widget">
                    <div class="widget-header">
                        <p>Foruma ieraksti</p>
                    </div>
                    <div class="widget-body">
                        <div class="forum-post">
                            <div class="image"></div>
                            <div class="post-info">
                                <a href="">Labdien visiem!</a>
                                <p>Pievienoja <a href="" id="user-link">Lucas2k</a></p>
                            </div>
                        </div>
                        <div class="forum-post">
                            <div class="image"></div>
                            <div class="post-info">
                                <a href="">Kur nopirkt PSP bateriju?</a>
                                <p>Pievienoja <a href="" id="user-link">somerandomgamer</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-container">
                <div class="new-thread">
                    <a href="newpost.php" class="thread-button">+ Pievienot jaunu ierakstu</a>
                </div>
                <div class="side-widget">
                    <div class="widget-header">
                        <p>Jaunkākie ieraksti</p>
                    </div>
                    <div class="widget-body">
                        <div class="mini-post"><a href="">Labdien visiem!</a></div>
                        <div class="mini-post"><a href="">Kur nopirkt PSP bateriju?</a></div>
                        <div class="mini-post"><a href="">Vai ir vērts izmantot torrentu 2022 gadā?</a></div>
                    </div>
                </div>
                <div class="advertisment">
                    <h2>Vieta reklāmai</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>