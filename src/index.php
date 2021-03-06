<?php
    include_once 'pogoNameGenerator.php';
    $pogoName = new pogoNameGenerator();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PogoNameGenerator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--build:css css/styles.min.css-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/tether.css">
    <link rel="stylesheet" href="css/main.css">
    <!--endbuild-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3><a href="/">pogoNameGenerator</a></h3>
                <p class="lead">Bulk generate Pokémon Go nicknames to use for botting!</p>
                <form method="post">
                    <div class="form-group">
                        <textarea class="form-control" id="textarea-name" name="name" style="height: 350px;">
                            <?php
                            foreach($pogoName->names as $name)
                            {
                                echo $name."\n";
                            }
                            ?>
                        </textarea>
                    </div>
                    <button type="button" id="btn-copy" class="btn btn-default btn-sm" data-clipboard-action="copy" data-clipboard-target="#textarea-name">
                        Copy to clipboard!
                    </button>
                    <button type="button" onclick="saveTextAsFile()" id="btn-save" class="btn btn-default btn-sm pull-xs-right">
                        Save as .txt!
                    </button>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="randomnick" name="randomnick"> Generate random nicknames?
                        </label>
                    </div>
                    <div id="form-randomnick" class="form-group" style="display: none;">
                        <label for="exampleInputPassword1">How many nicknames?</label>
                        <input type="number" class="form-control" name="quantity-nick" min="1" value="10" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="randomcheck" name="randomcheck"> Generate random string behind nicknames?
                        </label>
                    </div>
                    <div id="form-randomcheck" class="form-group" style="display: none;">
                        <label for="exampleInputPassword1">What lenght should the random string be?</label>
                        <input type="number" class="form-control" name="quantity-string" min="1" max="10" value="3" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="passcheck" name="passcheck"> Should we add a password behind the username?
                        </label>
                    </div>
                    <div id="form-passcheck" class="form-group" style="display: none;">
                        <label for="exampleInputPassword1">Password?</label>
                        <input type="text" id="input-pass" class="form-control" name="password" value=":">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="comma" value=","> Add a comma to the end of every line?
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="convert"> Convert : and , to ; ?
                        </label>
                    </div>
                    <button type="submit" id="btn-submit" name="submit" class="btn btn-primary">
                        Generate nicknames!
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!--build:js js/main.min.js -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/tether.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/clipboard.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- endbuild -->
</body>
</html>





