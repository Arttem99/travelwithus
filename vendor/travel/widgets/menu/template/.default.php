<li>
    <a href="?id=<?=$id?>"><?=$item['title']?></a>
    <?if (isset($item['childs'])):?>
        <ul>
            <?$this->getMenuHtml($item['childs']);?>
        </ul>
    <?endif;?>
</li>