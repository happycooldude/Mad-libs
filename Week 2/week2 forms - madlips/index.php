<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <h1>MAD LIPS</h1>
    <div id="container">
        <div id="menu">
            <div id="inhoud">
                <ul>
                    <a href='index.php'>Er heerst paniek...</a>
                    <a href="#"> Onkunde</a>
                </ul>
            </div>

        </div>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
            <h2>Er heerst paniek...</h2>
            Er heerst paniek in het koninkrijk <?= ($_POST["land"]); ?>. Koning <?= ($_POST["docent"]); ?> is ten einde raad en als koning <?= ($_POST["docent"]); ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= ($_POST["persoon"]); ?>.<br><br>
            "<?= ($_POST["persoon"]); ?>! Het is een ramp! Het is een schande!"<br><br>
            "Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"<br><br>
            "Mijn <?= ($_POST["huisdier"]); ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?= ($_POST["speelgoed"]); ?> voor hem gekocht!"<br><br>
            "Majesteit, uw <?= ($_POST["huisdier"]); ?> komt vast vanzelf weer terug?"<br><br>
            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= ($_POST["bezigheid"]); ?> leren?"<br><br>
            "Maar sire, daar kunt u toch uw <?= ($_POST["kopen"]); ?> voor gebruiken."<br><br>
            "<?= ($_POST["persoon"]); ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jouw niet had"<br><br>
            "Mij vervelen, Sire."
        <? } else { ?>
            
            <h2>Er heerst paniek...</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Welk dier zou jij nooit als huisdier willen hebben? <input type="text" name="huisdier" maxlength="20" /><br><br>
                Wie is de belangrijkste persoon in je leven? <input type="text" name="persoon" maxlength="20" /><br><br>
                In welk land zou jij graag willen wonen? <input type="text" name="land" maxlength="20" /><br><br>
                Wat doe je als je je verveeld? <input type="text" name="verveeld" maxlength="20" /><br><br>
                Met welk speelgoed speelde je het meest? <input type="text" name="speelgoed" maxlength="20" /><br><br>
                Bij welke docent spijbel je het liefst? <input type="text" name="docent" maxlength="20" /><br><br>
                Als je € 100.000 had wat zou je dan kopen? <input type="text" name="kopen" maxlength="20" /><br><br>
                Wat is je favoriete bezigheid? <input type="text" name="bezigheid" maxlength="20" /><br><br>
                <input id="knop" type="submit" value="Versturen" />
            </form>
        <? } ?>
        <div id="footer">
                <p id="footertxt">©Pieter Huisman 2020<p>
            </div>
    </div>
</body>