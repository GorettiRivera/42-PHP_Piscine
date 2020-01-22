<?php
    require "header.php"
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <form class="form-signup" action="includes/register.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
    </div>
</main>
