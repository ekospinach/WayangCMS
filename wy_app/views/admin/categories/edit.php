            <div class="row">
                <div class="col-lg-12">
                    <div class="wizard">
                        <a><span class="badge"></span> Category</a>
                        <a href="<?php echo WY_Registry::get('router')->generate('admin-categories');?>"><span class="badge"></span> All Categories</a>
                        <a class="current"><span class="badge badge-inverse"></span> Edit</a>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo $category->title; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- CKEDITOR and FORM HERE -->
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Categoriy Title</label>
                                            <input type="text" id="title" value="<?php echo $category->title; ?>" name="title" placeholder="Categoriy Title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Published</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="published" value="0" />
                                                    <input name="published" type="checkbox" value="1" <?php if($category->published) echo 'checked'; ?>>Publish Category
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info">Save Category</button>
                                        <button type="reset" class="btn btn-warning">Reset Form</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->