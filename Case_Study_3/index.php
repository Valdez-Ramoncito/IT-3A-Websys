<style>
    #p1{
        writing-mode: vertical-lr;
        transform-origin: center;
        transform: rotate(180deg);
        margin-left: auto;
        font-size: 2em;
    }
    #p2{
        writing-mode: vertical-lr;
        margin-right: auto;
        font-size: 2em;
    }
    table{
        border: 1px solid black;
        margin: auto;
        border-spacing: 0;
    }
    .oddNum{
        border: 1px solid black;
        background-color: yellow;
    }
    tr, .even{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        background-color: #F5F5DC;
        padding: 1em;
    }
    .layout{
        text-align: center;
        background-color: #F5F5DC;
    }
    .layout2{
        display: flex;
        align-items: center;
    }
    body{
        margin: 0;
        background-color: #F9F6EE;
        font-size: 1em;
        font-family:Helvetica, sans-serif;
    }
</style>

<div class="layout">
    <br>
    <h1>Case Study 3: Using Looping</h1>
    <p>All odd numbers must be in yellow box with bold text</p>
    <p>Ask to enter max number of row and column:
        for example row:10 column:10
    </p>
    <p>Apply layout as need must be professionally done</p>
    <form action="index.php" method="post">
        <label>Enter Row:</label>
        <input type="text" name="row"><br>
        <label>Enter Column:</label>
        <input type="text" name="column"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<div class="layout2">
    <p id="p1"><b>Case Study 3</b></p>
    <table>
        <?php

            if(isset($_POST["submit"])){
                $row = $_POST["row"];
                $column = $_POST["column"];

                echo("<tr>");
                echo("<td class='even'>X</td>");
                for($i = 1; $i <= $column; $i++){
                    if($i % 2 == 0){
                        echo("<td class='even'>{$i}</td>");
                    }
                    else{
                        echo("<td class='oddNum'><b>{$i}</b></td>");
                    }
                }
                echo("</tr>");
                for($i = 1; $i <= $row; $i++){
                    echo("<tr>");
                    if($i % 2 == 0){
                        echo("<td class='even'>{$i}</td>");
                    }
                    else{
                        echo("<td class='oddNum'><b>{$i}</b></td>");
                    }
                    for($j = 1; $j <= $column; $j++){
                        if(($j * $i) % 2 == 0){
                            echo("<td class='even'>".$j * $i."</td>");
                        }
                        else{
                            echo("<td class='oddNum'><b>".$j * $i."</b></td>");
                        }
                    }
                    echo("</tr>");
                }
            }

        ?>  
    </table>
    <p id="p2"><b>Using Looping</b></p>
</div>
<br><br><br>
