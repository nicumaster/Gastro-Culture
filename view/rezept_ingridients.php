<div class="row">
    <div class="col-sm-4">
        <div class="col-sm-4">
        <?php
        foreach($ingredients as $ingredient) {
            echo "
             ".$ingredient->ingredient." ".$ingredient->quantity_gr."<br>
             \n ";
        }
        ?>
        </div>
    </div>
</div>