<html>

    <?php
        include 'layout/top_head_html.php';
    ?>

    <body>
        <div class="body" >

            <div class="content">
                <?php
                    include 'layout/headers.php';
                ?>

                <?php
                    require 'content/home_page.php';
                ?>

            </div>
            <?php
                require 'layout/footer.php';
            ?>
        </div>
    </body>
</html>