<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            
            <div class="row">
                <!-- <p class="small">Создать нового пользователя</p> -->
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Добавление статьи</div>
                        </div>
                        <div class="card-body" style="padding: 0 100px 0;">
                            <label class="mb-3"></label>
                            <form action="/admin/article/add/" method="post">
                                <div class="form-group form-group-default">
                                    <label>Название статьи</label>
                                    <input id="Name" type="text" class="form-control" name="name" placeholder="Название статьи">
                                </div>
                                    <div class="form-group form-group-default" >
                                        <label>Активность</label>
                                        <input type="checkbox"  class="form-control" name="active" id="addUserActive" value="true" сhecked>
                                        <label class="error_role"></label>
                                    </div>
                                <div class="form-group form-group-default">
                                    <label>Категория статьи</label>
                                    <select class="form-control" name="type" id="formGroupDefaultSelect">
                                        <option value="">Не выбрано</option>
                                        <?foreach($arType as $type):?>
                                        <option value="<?=$type->id?>"><?=$type->name?></option>
                                        <?endforeach;?>
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Картинка анонса</label>
                                    <div class="input-file-row">
                                        <label class="input-file">
                                            <input type="file" id="addUserPict" name="preview_img" class="form-control" accept="image/*">		
                                            <span>Выберите файл</span>
                                        </label>
                                        <div class="input-file-list"></div>  
                                    </div>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Текст анонса</label>
                                    <!-- <input id="addUserEmail" type="text" class="form-control" placeholder="Описание"> -->
                                    <textarea id="addUserDesc" name="preview_text" class="form-control" id="" cols="60" rows="5"></textarea>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Текст статьи</label>
                                    <textarea id="editor" name="text" cols="30" rows="30">    
                                    </textarea>
                                </div>

                                

                                <button type="submit" class="btn btn-primary" name="save">Сохранить</button>
                                <a href="/admin/article/" class="btn btn-secondary" name="save">Отмена</a>
                            </form>
                        </div>
                    </div>
			    </div>
                        
            </div>
            
        </div>
    </div>
</div>
