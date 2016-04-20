<?php
$currentPage = "home";
require('info.php');
require('head.php');

?>

<div class="container main-content">
    <h1>Welcome <?php echo $_SESSION["username"]; ?></h1>
    <p>This is the preview of the main website for 
    Pagination Developers: a nation of programmers and entrepenaurs!
    Here, you can market your products and programs, and you can
    even buy and download other people's products, or even ours.
    You can become a member soon when the login system is up
    and running (no date set for release). This will be split into
    three different factions: the working members, the market
    members, and the developing members. Working members are
    those that contribute their products to the market and 
    participate in the community. The market members are those 
    that buy products and participate in the community (optional)
    and the developing members are the highest level of membership.
    They are the founders, main developers (web developers and such)
    and they are the managers and team members of the behind the 
    scenes for Pagination. If you'd like to contribute to this 
    website, the community, and help build it up, contact me at
    [<a href="mailto:alcouch65@gmail.com?Subject=Community%20Join" target="_blank">alcouch65@gmail.com</a>]
    <br><br>
    <span style="color: yellow">If the email link does not work 
    for you, just copy and paste the email and paste it into your
    recipients box and put "Community Join" as your subject!</span>
    </p>
</div>

<?php
    require('foot.php');
?>