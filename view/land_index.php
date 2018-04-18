<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped table-condensed">
            <thead>
            <tr>
                <th>Country</th>
                <th>Language</th>
                <th>Population</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // Schleife über alle Kontakte, die jeweils in einer Tabellenzeile angezeigt werden.
            foreach($countries as $country) {
                echo "<tr>
				<td>".$country->country."</td>
				<td>".$country->language."</td>
				<td>".$country->population."</td>
				</tr>\n";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>