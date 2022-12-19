
<?foreach($users as $data):?>
    <div>
        <h4><?=$data["name"]?></h4>
        <p><?=$data["email"]?></p>
        <p><?=$data["phone"]?></p>
    </div>
    <?endforeach;?>
    <div class="text-center">
        <?if ($pagination->countPages > 0):?>
            <?=$pagination;?>
            <?endif;?>
    </div>

<button id="savebtn">Button</button>
<? new \travel\widgets\menu\Menu([
    'table' => "menu2",
]);?>
<script>
$("#savebtn").on("click", function(e){
    console.log("Adfasdfasdf");
    $.ajax({
        type: "POST",
        url: "main/test",
        data: {"id": 6},
        dataType: "JSON",
        success: function (response) {
            console.log(response);
            
        }
    });
});

</script>