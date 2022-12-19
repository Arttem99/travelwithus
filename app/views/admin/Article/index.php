
    <?//echo '<pre>' .print_r($allUser,1). '</pre>';
?> 
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <!-- <div class="page-header">
                <h4 class="page-title">DataTables.Net</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div> -->
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Статьи</h4>
                            <a href="add/" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Создать статью
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Активность</th>
                                        <th>Название</th>
                                        <th>Автор</th>
                                        <th>Дата создания</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                        <th>ID</th>
                                        <th>Активность</th>
                                        <th>Название</th>
                                        <th>Автор</th>
                                        <th>Дата создания</th>
                                        <th>Действия</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?if ($arArticles):?>
                                        <?foreach($arArticles as $article):?>
                                       
                                        <tr>
                                            <td><?=$article["post_id"]?></td>
                                            <td><?=($article["active"] == 1) ? "Да" : "Нет"?></td>
                                            <td><?=$article["post_name"]?></td>
                                            <td>[<a href="/admin/user/update/?id=<?=$article["user_id"]?>"><?=$article["user_id"]?></a>]<?=$article["name"]?></td>
                                            <td><?=$article["data_create"]?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="edit/?id=<?=$article["post_id"]?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="delete/?id=<?=$article["post_id"]?>"  data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <?endforeach;?>
                                    <?endif?>
                                    <!-- <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <?
    /*if ($arArticles){
        echo '<pre>' .print_r($arArticles,1). '</pre>';
        
        foreach($arArticles as $article){
           echo $article->name ."<br>";
           echo $article->preview_text ."<br>";
            
        }
    }*/
    ?>