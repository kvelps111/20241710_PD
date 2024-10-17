<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Jautā man !</h1><br>
    <label for="Epasts">Vārds</label>
    <input type="name" name="" id="">
    <br>
    <label for="email">Epasts</label>
    <input type="email" name="" id="">
    <br><br>
    <label for="Zinas tips">Ievadi ziņas tipu:</label>
    <select name="opcijas" id="Opcijas">
        <option value="">Izvelies opciju</option>
        <option value="Atsauksme">Atsauksme</option>
        <option value="Ieteikums">Ieteikums</option>
        <option value="Jautājums">Jautājums</option>
    </select>
    <br>
    <fieldset>
        <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>
        <div>
            <input type="checkbox" id="yes" name="yes" checked />
            <label for="yes">Jā</label>
        </div>

        <div>
            <input type="checkbox" id="no" name="no" checked />
            <label for="no">Nē</label>
        </div>
    </fieldset>

    <br>
    <fieldset>
        <legend>Vai piekrīti mūsu mājaslapas noteikumiem ?</legend>
        <div>
            <input type="checkbox" id="yes" name="yes" checked />
            <label for="yes">Jā</label>
        </div>

        <div>
            <input type="checkbox" id="no" name="no" checked />
            <label for="no">Nē</label>
        </div>

    </fieldset>

    <button type="post">Saglabāt</button><br>
    <br>
    <a href="index.php">Spied seit, lai noklutu uz Index</a><br>
    <a href="portfolio.php">Spied seit, lai noklutu uz Portfolio</a>
</body>

</html>