<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped table-condensed">
            <thead>
            <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Culture</th>
                <th>History</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $placeholer_pictures = 0;
            foreach($recipes as $recipe) {
                echo "<tr>
                <td>".$placeholer_pictures."</td> <!-- Placeholder_pictures muss durch Bilder in files aufrufen ersetzt werden-->
				<td><a href='rezept/ingredients?recipe=$recipe->recipe'>".$recipe->recipe."</a></td>
				<td>".$recipe->culture."</td>
				<td>".$recipe->history."</td>
				<td>".$recipe->description."</td>
				</tr>\n";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>