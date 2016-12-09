<!-- <div style="padding-top: 10px;">
    <h3>Upload your new recipe</h3>
</div>
<div class="ibox float-e-margins">
    <div class="ibox-content">
            <div>
                <div class="text-right">
                	<input type="text" class="form-control" placeholder="Title" id="txt_title" />
                    <input type="file" class="form-control" id="file_img" />
        			<textarea class="form-control" placeholder="Description" id="txt_descript" style="height:100px;max-height: 100px;max-width: 100%;width: 100%;"></textarea>

    			    <h6 style="color: red" class="pull-left">
    			        Example of Recipe:
    			        <div>2 tablespoon | Flour |</div>
    			        <div>3 tablespoon | Sugar |</div>
    			    </h6>
        			<textarea class="form-control" placeholder="Recipe" id="txt_recipe" style="height:100px;max-height: 100px;max-width: 100%;width: 100%;"></textarea>
        			<button type="button" id="btn_upload" class="btn btn-outline btn-success full-width">Upload</button>
                </div>
            </div>
    </div>
</div> -->

<div style="padding-top: 10px;">
    <h3>Upload your new recipe</h3>
</div>
<div class="ibox float-e-margins">
    <div class="ibox-content">
            <div>
                    <div class="text-right">
                        <input type="text" class="form-control" placeholder="Title" id="txt_title" required/>
                        <form>
                        <input type="file" id="file_img" class="file hide" required />
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                <span class="input-group-btn">
                                    <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                            </div>
                        </form>
                        <textarea class="form-control" placeholder="Description" id="txt_descript" style="height:100px;max-height: 100px;max-width: 100%;width: 100%;" required></textarea>

                        <h6 style="color: red" class="pull-left">
                            Example of Recipe:
                            <div>2 tablespoon | Flour |</div>
                            <div>3 tablespoon | Sugar |</div>
                        </h6>
                        <textarea class="form-control" placeholder="Recipe" id="txt_recipe" style="height:100px;max-height: 100px;max-width: 100%;width: 100%;"required></textarea>
                        <button type="button" id="btn_upload" class="btn btn-outline btn-success full-width">Upload</button>
                    </div>
            </div>
    </div>
</div>