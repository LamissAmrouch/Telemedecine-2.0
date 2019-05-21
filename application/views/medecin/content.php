<h1><?= $title ?></h1>
<div class = "row">
    <div class="col-sm-8">
        <ul>
            <?php foreach($list as $row) :  ?>
                <li>

                    <h2>
                        <?= $row->nom ; ?>
                    </h2>
                    <p>
                    <p> <em>  <?= $row->prenom ;?>    </em>   </p>
                    <a href="<?= "med/".$row->id; ?>"> detaille </a>
                    <p>
                </li>

            <?php endforeach;?>
        </ul>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach ($sps as $sp) : ?>
                <li>
                    <h3> <button class="btn-link" onclick="load()"> <?= $sp->label; ?> </button></h3>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<script>
    function load() {
        window.alert("laz");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET",link, true);
        xhttp.send()
    }
</script>