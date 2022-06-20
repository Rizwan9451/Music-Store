<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="shortcut icon" href="https://png.pngtree.com/element_our/png/20181022/music-and-live-music-logo-with-neon-light-effect-vector-png_199406.jpg" type="image/x-icon">
    <style>
        body {
            background-color:rgb(161,207,202);
            background-size: 100%;
        }

        .head1 {
            font-family: serif;
            font-size: 60px;
            color: rgb(39, 5, 53);
            text-shadow: 2px 2px 5px rgb(90, 17, 112);
            -webkit-box-reflect: below 0px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.4));
            justify-content: center;
            margin: 2px 588px;
            animation: text;
            animation-duration: 1s;

        }
        @keyframes text{
            from{
                font-size: 10px;
            }
            to{
                font-size: 60px;
            }
        }

        .navbar {
            background-color: aquamarine;
            border-radius: 25px;
            clear: both;
            box-shadow:1px 1px 3px rgb(24, 160, 160);
        }

        .navbar ul {
            overflow: auto;
        }

        .navbar li {
            float: left;
            list-style: none;
            margin: 13px;
        }
        .navbar li #welcome{
            margin-left:370px;
            float:right;
        }

        .navbar li a {
            padding: 3px 3px;
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            color: rgb(39, 5, 53);
        }

        .navbar li a:hover {
            color: rgb(247, 23, 79);
        }

        .navbar input {
            float: right;
            padding: auto;
            margin: 20px;
            border-radius: 5px;
            border-color: blue;
            width: 250px;
        }
        img {
            width: 100px;
            margin: 1px 1px;
            float: right;
            clear: both;
        }

        a {
            text-decoration: none;
        }

        .container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;

        }
        .types h2{
            font-family: serif;
            font-size: 60px;
            color: rgb(39, 5, 53);
            display:flex;
            text-shadow: 2px 2px 5px rgb(90, 17, 112);
            -webkit-box-reflect: below 0px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.2));
            justify-content: center;
            margin: 2px 588px;
            animation: text;
            animation-duration: 1s;

        }
        @keyframes text{
            from{
                font-size: 10px;
            }
            to{
                font-size: 60px;
            }
        }

        .box {
            /* border: 2px solid aqua; */
            box-shadow: 2px 2px 5px rgb(224, 130, 204),3px 3px 5px aquamarine;
            display: inline;
            /* margin: 1px; */
            clear: both;
            width: 33%;
            margin: 1px;
            height: 250px;
        }

        .box a img {
            width: 100%;
            height: 100%;
            margin: 2px;
            cursor: pointer;
            position: relative;
            transition-property: all;
            transition-duration: 2s;
        }
        .box a img:hover{
            width: 120%;
            height: 120%;
        }
        .xbox {
            /* border: 2px solid aqua; */
            box-shadow: 2px 2px 5px rgb(224, 130, 204),3px 3px 5px aquamarine;
            display: inline;
            /* margin: 1px; */
            clear: both;
            width: 33%;
            margin: 1px;
            height: 250px;
        }

        .xbox a img {
            width: 100%;
            height: 100%;
            margin: 2px;
            cursor: pointer;
            /* position: relative; */
            transition-property: all;
            transition-duration: 2s;
        }
        .xbox a img:hover{
            width: 120%;
            height: 120%;
        }

       
    </style>
</head>

<body>
    <img src="https://clipartcraft.com/images/rolls-royce-logo-high-resolution-1.png" alt="Error">
    <h2 class="head1">Music Store</h2>
    <div>
        <header>
            <nav class="navbar">
                <ul>
                    <li><a href="http://127.0.0.1:5500/index.html">Home</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Music_store">About</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="http://127.0.0.1:5500/contact.html">Contact us</a></li>
                    <li><a href="logout.php">logout</a></li>
                    <li><a href="" id="welcome"><?php echo "Welcome ". $_SESSION['username']?></a></li>
                </ul>
            </nav>
        </header>
    </div>
    <br>
    <div class="types">
        <h2>CLASSICAL</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="box"> <a href="https://www.youtube.com/watch?v=cFOgwrXSjGk" target="_blank"> <img
                    src="https://i.ytimg.com/vi/vYaEFR2SHC4/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=AN1piGLOS7g" target="_blank"> <img
                    src="https://i.pinimg.com/originals/e3/f8/92/e3f892b81aa81d791e2be6b5e8209cb8.jpg" alt="Error"> </a>
        </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=5Ed-HsmZWgg" target="_blank"> <img
                    src="https://i.ytimg.com/vi/WhdaQItkNcA/maxresdefault.jpg"
                    alt=""> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=jAclVDrNOzc" target="_blank"> <img
                    src="https://www.godhdwallpapers.com/wallpapers/2018/10/meera-bai-with-krishna-wallpaper-paintings.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=AVa6Qjo5ebo" target="_blank"> <img
                    src="https://i.ytimg.com/vi/JWre6WjzJmY/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=CYqwNM8W0Jo" target="_blank"> <img
                    src="https://i.ytimg.com/vi/Q-I-Z6JfQjM/maxresdefault.jpg" alt="Error"> </a> </div>
    </div>
    <br><br>
    <div class="types">
        <h2>ROMANTIC</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="box"> <a href="https://www.youtube.com/watch?v=TypcVN5KJEI" target="_blank"> <img
                    src="https://th.bing.com/th/id/R.1ff84b00a0874c2c42a0ea9f2b1dbfad?rik=2WctmOHX5%2b%2bVbw&riu=http%3a%2f%2fdamixx.com%2fwp-content%2fuploads%2f2021%2f11%2f1637745921_maxresdefault-1024x576.jpg&ehk=mLP6OZ4%2bv53FLsWCokwL41k3599h0%2fXFy7pXD1G4Qxs%3d&risl=&pid=ImgRaw&r=0" alt="Error"> </a> </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=pioizAsehlk" target="_blank"> <img
                    src="https://i.pinimg.com/originals/c0/a9/9a/c0a99a97fcd3e997afa606139545feb1.jpg" alt="Error"> </a>
        </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=HaxKqphCoR8" target="_blank"> <img
                    src="https://i.ytimg.com/vi/LDDD7pTgyPc/maxresdefault.jpg"
                    alt=""> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=ZHqzojEfc6I" target="_blank"> <img
                    src="https://i.ytimg.com/vi/ZHqzojEfc6I/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=HPkydJOXXNs&t=71s" target="_blank"> <img
                    src="https://i.ytimg.com/vi/dYZqLi-5lxQ/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=2MD9t6bo3L0" target="_blank"> <img
                    src="https://i.ytimg.com/vi/5pTe6wXbf3E/maxresdefault.jpg" alt="Error"> </a> </div>
    </div>
    <br><br>
    <div class="types">
        <h2>INSTRUMENTAL</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="box"> <a href="https://www.youtube.com/watch?v=8Z5EjAmZS1o" target="_blank"> <img
                    src="https://i.ytimg.com/vi/2UP0creMXeU/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=cUv-rSjK-0A" target="_blank"> <img
                    src="https://c.saavncdn.com/117/Bollywood-Love-Instrumentals-Instrumental-2015-500x500.jpg" alt="Error"> </a>
        </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=d2Zd68W9zZg" target="_blank"> <img
                    src="https://i.ytimg.com/vi/NMxCPWjmdaw/maxresdefault.jpg"
                    alt=""> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=W0ntbbxNWWo" target="_blank"> <img
                    src="https://i.ytimg.com/vi/W0ntbbxNWWo/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=zw48SrGcTwQ" target="_blank"> <img
                    src="https://i.ytimg.com/vi/FdxLXl-PAio/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=jxgu3S4uQec" target="_blank"> <img
                    src="https://i.ytimg.com/vi/jxgu3S4uQec/maxresdefault.jpg" alt="Error"> </a> </div>
    </div>
    <br><br>
    <div class="types">
        <h2>HIP HOP</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="box"> <a href="https://www.youtube.com/watch?v=7oHokTImnFI" target="_blank"> <img
                    src="https://i.ytimg.com/vi/7oHokTImnFI/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=wCIZmYhoqwo" target="_blank"> <img
                    src="https://i.ytimg.com/vi/6SbK9-b7vsk/maxresdefault.jpg" alt="Error"> </a>
        </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=3jh4f_syVrQ" target="_blank"> <img
                    src="https://i.ytimg.com/vi/3jh4f_syVrQ/hqdefault.jpg"
                    alt=""> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=uaCYeQ9FtSI" target="_blank"> <img
                    src="https://th.bing.com/th/id/R.4c41cf7096d58bcddc084abc558b6ba5?rik=UjwBUB1hyRbsVQ&riu=http%3a%2f%2f4.bp.blogspot.com%2f-tONocT0Dw7U%2fU6bWd52dy1I%2fAAAAAAAAAYY%2f_PEVgKt7FsY%2fs1600%2fIssay%2bKehtey%2bHain%2bHip%2bHop.jpg&ehk=WsIFjEJrrKFeIgOJ3AphsvMNvpljuwjfoNaBYwkXsy8%3d&risl=&pid=ImgRaw&r=0" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=A4HtK8-zL6E" target="_blank"> <img
                    src="https://th.bing.com/th/id/OIP.0y-tEph5eh_rgw8qi9rxpgHaEK?pid=ImgDet&rs=1" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=Fqy6d4v2iwE" target="_blank"> <img
                    src="https://th.bing.com/th/id/R.bf426303c12e20338dc1b166e5bc35c4?rik=iVgaWKbecuOXzg&riu=http%3a%2f%2fsomegosoden.com%2fwp-content%2fuploads%2f2020%2f07%2fHip-Hop-Mix-2020-The-Best-of-Hip-Hop-2020-by-OSOCITY-1170x658.jpg&ehk=DOoW6WLtrd9Hbukh0kS23jknEUi6FRM7lv8ZxZ3i130%3d&risl=&pid=ImgRaw&r=0" alt="Error"> </a> </div>
    </div>
    <br><br>
    <div class="types">
        <h2>ROCK</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="box"> <a href="https://www.youtube.com/watch?v=20n_A6odw9E" target="_blank"> <img
                    src="https://i.ytimg.com/vi/Nfa50zYjjVE/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=n1oaPb_UTxs" target="_blank"> <img
                    src="https://i.ytimg.com/vi/n1oaPb_UTxs/maxresdefault.jpg" alt="Error"> </a>
        </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=UgfsbL-uHOA" target="_blank"> <img
                    src="https://dmusicbox.co/wp-content/uploads/2021/07/1626667161_maxresdefault-1024x576.jpg"
                    alt=""> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=YHxNNoVcElk" target="_blank"> <img
                    src="https://hkgtv.in/wp-content/uploads/2021/11/GR-26.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=FvmEn16EFOs" target="_blank"> <img
                    src="https://i.ytimg.com/vi/EhNyCIObEEA/maxresdefault.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=2d85BeIhOlo" target="_blank"> <img
                    src="https://damixx.com/wp-content/uploads/2021/11/1638258250_maxresdefault.jpg" alt="Error"> </a> </div>
    </div>
    <br><br>
    <div class="types">
        <h2>POP</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="box"> <a href="https://www.youtube.com/watch?v=z8y8UZMQaLo" target="_blank"> <img
                    src="https://rihanna.musicclatter.com/wp-content/uploads/2019/07/rihanna-katy-perry-maroon-5-bruno-mars-ed-sheeran-ariana-grande-camila-cabello-pop-hits-2019-1210x642.jpg" alt="Error"> </a> </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=5zSCWKKnajU" target="_blank"> <img
                    src="https://i.ytimg.com/vi/qNpPvmTy20Y/maxresdefault.jpg" alt="Error"> </a>
        </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=AJ1tLNQIaeA" target="_blank"> <img
                    src="https://i.ytimg.com/vi/ajg1ynOWe_k/maxresdefault.jpg"
                    alt=""> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=fSqicTTg1Ps" target="_blank"> <img
                    src="https://i.pinimg.com/originals/89/22/a5/8922a58dbce5e3f95e24334e74d289af.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=cV8I5vKQgQ0" target="_blank"> <img
                    src="https://th.bing.com/th/id/R.38498bc715605a977fb0fdd650ef024b?rik=imIlTOBi%2bzZLRg&riu=http%3a%2f%2fdamixx.com%2fwp-content%2fuploads%2f2021%2f08%2f1629442962_maxresdefault-1000x600.jpg&ehk=eCCcwV%2bE65UxihYps%2be1stjjKJUlzLi34CIab9vFT0Q%3d&risl=&pid=ImgRaw&r=0" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=lLW9klMASSY" target="_blank"> <img
                    src="https://th.bing.com/th/id/R.8c8dcc4af567dad45d48bd4e7f24ea83?rik=uD7ybVVNvX8ulA&riu=http%3a%2f%2fwww.wearetheguard.com%2fsites%2fdefault%2ffiles%2f11-best-happy-indie-songs.jpg&ehk=pfoe%2bFhb5JOodn1kM2EIwvjYAdyWGl80WMSckKxAfnU%3d&risl=&pid=ImgRaw&r=0" alt="Error"> </a> </div>
    </div>
    <br><br>
    <div class="types">
        <h2>JAZZ</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="box"> <a href="https://www.youtube.com/watch?v=g56ZJqNilg0" target="_blank"> <img
                    src="https://i.pinimg.com/originals/14/fd/99/14fd99f5ff786def90428b651a1f4aa6.jpg" alt="Error"> </a> </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=NKDI-60H-5s" target="_blank"> <img
                    src="https://i.ytimg.com/vi/O07LI7VaMzU/maxresdefault.jpg" alt="Error"> </a>
        </div>
        <div class="box"> <a href="https://www.youtube.com/watch?v=sxpzaYDzqxY" target="_blank"> <img
                    src="https://i.ytimg.com/vi/sxpzaYDzqxY/maxresdefault.jpg"
                    alt=""> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=rJ0HcezG-KU" target="_blank"> <img
                    src="https://i.pinimg.com/736x/14/43/82/14438232d48043c7adf165bb1269ada5.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=IGkdvnuqsIs" target="_blank"> <img
                    src="https://opmsong.com/wp-content/uploads/2021/08/Relaxing-Starbucks-Inspired-Coffee-Music-Coffee-Shop-Music-Cafe.jpg" alt="Error"> </a> </div>
        <div class="xbox"> <a href="https://www.youtube.com/watch?v=fBVtXuA-xB8" target="_blank"> <img
                    src="https://i.ytimg.com/vi/fBVtXuA-xB8/maxresdefault.jpg" alt="Error"> </a> </div>
    </div>
</body>

</html>