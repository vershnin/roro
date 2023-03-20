<!DOCTYPE html>
<html>

<head>
    <title>
        Cristiano Ronaldo
    </title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>

<body text="white" style="background-color: black;width: 75%;height: 200px;">
    <header>
        <img class="logo" src="	https://1000logos.net/wp-content/uploads/2019/05/CR7-Nike-concept-logo.jpg
            " alt="logo">
        <nav>
            <ul class="nav_links">
                <li><a href="https://google.com/" target="_blank">Home</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>
            Cristiano Ronaldo
        </h1>
        <ul>
            <li>
                <b>Career:</b>
                <b>Footballer</b>
            </li>
        </ul>
        <ul>
            <li>
                <b>Age:</b>
                <b>38</b>
            </li>
        </ul>
        <ul>
            <li>
                <b>Nationality:</b>
                <b>Portugal</b>
            </li>
        </ul>
    </section>
    <img src="https://e0.pxfuel.com/wallpapers/44/268/desktop-wallpaper-ronaldo-real-madrid-thumbnail.jpg" style="width: 280.788px;height: 499px;margin: 0;">
    <img src="https://i.pinimg.com/736x/0a/34/a3/0a34a38f22e93b7ddc19be709177da04.jpg" style="width: 280.788px;height: 499px;margin: 0;">
    <img src="https://i.pinimg.com/736x/fc/ee/53/fcee5383c81283c516334cde4a9ea752.jpg" style="width: 280.788px;height: 499px;margin: 0;">
    <h2>
        Who's Christiano Ronaldo?
    </h2>

    <p><i><strong>Cristiano Ronaldo dos Santos Aveiro</strong></i> is a Portuguese professional footballer who plays as
        a forward for and
        captains both Saudi Professional League club Al Nassr and the Portugal national team. He is a father of five
        children
        and a husband to Geogina Rodriguez.
    </p>
    <u>
        <h3>
            Career highlight
        </h3>
    </u>
    <p>
        Cristiano Ronaldo started his football career in the year 2002 at a young age upto date.He has played for the
        following football
        clubs:
    <table style="border: 1;text-align: center;
                width: 700px;border-color: white;
                ">
        <tr style="color: dark gray; background-color: rgb(46, 53, 53);">
            <th>Teams</th>
            <td>Sporting CP</td>
            <td>Manchester United</td>
            <td>Realmadrid</td>
            <td>Juventus</td>
            <td>Manchester United</td>
            <td>AL Nasser</td>
        </tr>
        <tr style="background-color: rgb(104, 102, 102);">
            <th>Years</th>
            <td>2002-2003</td>
            <td>2003-2009</td>
            <td>2009-2018</td>
            <td>2018-2021</td>
            <td>2021-2022</td>
            <td>2023-current</td>
        </tr>
        <tr style="background-color: rgb(104, 102, 102);">
            <th>Goals</th>
            <td>5</td>
            <td>118</td>
            <td>450</td>
            <td>101</td>
            <td>27</td>
            <td>5</td>
        </tr>
    </table>

    </p>
    <h4>
        Career achievements
    </h4>
    <p>
        Widely regarded as one of the greatest players of all time, Ronaldo has won five Ballon d'Or awards and four
        European Golden Shoes,
        the most by a European player.He has won 32 trophies in his career, including seven league titles, five UEFA
        Champions Leagues, the
        UEFA European Championship and the UEFA Nations League.
    </p>
    <form action="link.php" method="POST" ;>
        <div>
            <label>Enter comment: </label><br>
            <textarea name="comments" id="comments" placeholder="comment here!" style="background-color: #ebf0f2; width: 30%;
        height: 80px; font-style: italic; text-align: left; " required="true"></textarea>


            <input type="submit" value="submit" required="true">
        </div>


    </form>


    <h5>Fetching data from database</h5>

    <ol>
        <?php
        $conn = new mysqli("localhost", "root", '', "cr");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $select = "SELECT * FROM `comments` ORDER BY id";

        $result = $conn->query($select);

        //displaying data from MariaDB on a browser using while loop

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <li>
                <?php echo $row["message"]; ?>
            </li>
        <?php } ?>
    </ol>
    <footer class="font--condensed text--sm">
        <div class="footer__policy"><a href="/files/cr7_privacypolicy_en.pdf" target="_blank" rel="noreferrer noopener" class="link--text">Privacy Policy</a></div>
        <div class="footer__copyright text--dimmed">© Cristiano Ronaldo,
            All Rights Reserved</div>

    </footer>
</body>

</html>