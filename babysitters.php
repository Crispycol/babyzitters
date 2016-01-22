<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BabyZitters</title>
</head>
<link rel="stylesheet" href="style.css"/>
<body>
<div class="container">
    <header>
        <h1><a href=index.php><img src="http://i.imgur.com/TrK9yM6.png?1" height="200" width="auto"></a></h1>
        <nav>
            <ul>
                <li><a href=index.php>Home</a></li>
                <li><a href=babysitters.php class="active">Babysitters</a></li>
                <li><a href=over_ons.php>Over ons</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="babysitter">
                <table>
                    <tr>
                        <th colspan="3" align="center"><h2>Kaithlyn Boer</h2></th>
                    </tr>
                    <tr>
                        <th rowspan="5"><img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xtp1/v/t1.0-9/11825203_509635129201486_5559950131003540671_n.jpg?oh=234d7ab4486adfdf5f11b94b5eb3bb62&oe=5720B3BE&__gda__=1457901192_d12b53cd59959bdc90391e8d23c1d571" width="200px" height="200px"/></th>
                        <th>Geslacht</th>
                        <td>Vrouw</td>
                    </tr>
                    <tr>
                        <th>Leeftijd</th>
                        <td>16</td>
                    </tr>
                    <tr>
                        <th>Woonplaats</th>
                        <td>Maassluis</td>
                    </tr>
                    <tr>
                        <th>Bio</th>
                        <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</td>
                    </tr>
                </table>
                <div class="afspraak"><a href=afspraak.php>Maak een afspraak</a></div>
            <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffcccc&amp;src=lhkd49548cmh0ft7rgu8bif90g%40group.calendar.google.com&amp;color=%2328754E&amp;ctz=Europe%2FAmsterdam" style="border:solid 1px #777" width="400" height="400" frameborder="0" scrolling="no"></iframe>
            <div class="feedback">Space for Feedback</div>
        </div>
        <div class="babysitter">
            <table>
                <tr>
                    <th colspan="3" align="center"><h2>Babysitter Naam</h2></th>
                </tr>
                <tr>
                    <th rowspan="5"><img src="http://lifefm.com.au/wp/wp-content/uploads/2012/04/unknown-person.png?266168 width="150px" height="200px"/></th>
                    <th>Geslacht</th>
                    <td>Vrouw</td>
                </tr>
                <tr>
                    <th>Leeftijd</th>
                    <td>Getal</td>
                </tr>
                <tr>
                    <th>Woonplaats</th>
                    <td>Stad</td>
                </tr>
                <tr>
                    <th>Bio</th>
                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        &copy; Colin P. Boer | CMGT 1C 2015
    </footer>
</div>
</body>
</html>
