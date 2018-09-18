<!DOCTYPE html>
<html>
<head>
    <title>Monster Slayer</title>
    <script src="https://npmcdn.com/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="monster-css/foundation.min.css">
    <link rel="stylesheet" href="monster-css/app.css">
</head>
<body>
<div id="app">
    <section class="row">
        <div class="small-6 columns">
            <h1 class="text-center">YOU</h1>
            <div class="healthbar">
                <div class="healthbar text-center" style="background-color: green; margin: 0; color: white;">
                    {{ playerHealth }}
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <h1 class="text-center">MONSTER</h1>
            <div class="healthbar">
                <div class="healthbar text-center" style="background-color: green; margin: 0; color: white;">
                    {{ monsterHealth }}
                </div>
            </div>
        </div>
    </section>
    <section class="row controls">
        <div class="small-12 columns">
            <button id="start-game">START NEW GAME</button>
        </div>
    </section>
    <section class="row controls">
        <div class="small-12 columns">
            <button id="attack">ATTACK</button>
            <button id="special-attack">SPECIAL ATTACK</button>
            <button id="heal">HEAL</button>
            <button id="give-up">GIVE UP</button>
        </div>
    </section>
    <section class="row log">
        <div class="small-12 columns">
            <ul>
                <li>

                </li>
            </ul>
        </div>
    </section>
</div>
<script src="app_monster.js"></script>
</body>
</html>