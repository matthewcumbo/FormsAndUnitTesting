<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
    ?>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <!-- Query Strings -->
            <div class="col-6">
                <h1>Query Strings</h1>
                <?php 
                    $heroes = [
                        0 => 'Iron Man',
                        1 => 'The Hulk',
                        2 => 'Captain America',
                        3 => 'Thor'
                    ];

                    // SUPER GLOBAL
                    // $_GET gets info from the URL
                    if(isset($_GET['hero'])){
                        $id = $_GET['hero'];
                        echo "<p>You chose <b>{$heroes[$id]}</b>.</p>";
                    }

                    echo "<p>Choose a hero:</p>";
                    echo "<ul>";
                        foreach($heroes as $index => $hero){
                            echo "<li><a href='index.php?hero={$index}'>{$hero}</a></li>";
                        }
                    echo "</ul>";
                ?>
            </div>
            <!-- Registration Form -->
            <div class="col-6">
                <h1>Forum Registration Form</h1>
                <form action="formResult.php" method="POST">
                    <div class="container">
                        <!-- First Name -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" id="firstName">
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mt-3">
                                <div class="col-12">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" name="lastName" id="lastName">
                                </div>

                        </div>

                        <!-- Password -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="confPass">Confirm Password</label>
                                <input type="password" name="confPass" id="confPass">
                            </div>
                        </div>

                        <!-- Interests (checkboxes) -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Interests</label>
                                <br>

                                <input type="checkbox" id="interests-tech" name="interests[]" value="tech">
                                <label for="interests-tech">Technology</label>
                                <br>
                                <input type="checkbox" id="interests-pets" name="interests[]" value="pets">
                                <label for="interests-pets">Pets</label>
                                <br>
                                <input type="checkbox" id="interests-books" name="interests[]" value="books">
                                <label for="interests-books">Books</label>
                            </div>
                        </div>

                        <!-- Have you used forums before? -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Have you used Forums before?</label>
                                <br>

                                <input type="radio" id="used-yes" name="used" value="yes">
                                <label for="used-yes">Yes</label>
                                <br>
                                <input type="radio" id="used-no" name="used" value="no">
                                <label for="used-no">No</label>
                            </div>
                        </div>

                        <!-- Region -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="region">Region</label>
                                <select name="region" id="region">
                                    <option selected disabled>Choose a region</option>
                                    <option value="af">Africa</option>
                                    <option value="am">Americas</option>
                                    <option value="as">Asia</option>
                                    <option value="eu">Europe</option>
                                    <option value="oc">Oceania</option>
                                </select>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success w-100">Save</button>
                            </div>
                            <div class="col-6">
                                <button type="reset" class="btn btn-danger w-100">Cancel</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        
    </div>
    

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>