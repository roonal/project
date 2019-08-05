<?php echo form_open_multipart('employees/do_upload');?>

            <img id="preview" style = "width: 200px; height: 200px;">
            <input type="file" name = "userfile" id="input">

            <br /><br />

            <input type="submit" value="upload" name="upload" />

            </form>


<form action="" method="post" enctype="multipart/form-data" id="empform" role="form" name="empform">
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-field col s12">
                            <label>Firstname</label>
                            <input type="text" id="fname" name="fname" class="form-control" value="<?php if(!empty($_POST['fname'])) { echo $_POST['fname']; } elseif(!empty($emp[0]['firstname'])) { echo $emp[0]['firstname']; } ?>">
                        </div>
                        <div class="input-field col s12">
                            <label>Middle Name</label>
                            <input type="text" id="mname" name="mname" class="form-control" value="<?php if(!empty($_POST['mname'])) { echo $_POST['mname']; } elseif(!empty($emp[0]['middlename'])) { echo $emp[0]['middlename']; } ?>">
                        </div>
                        <div class="input-field col s12">
                            <label>Password</label>
                            <input type="password" id="empass" name="empass" class="form-control" value="<?php if(!empty($_POST['empass'])) { echo $_POST['empass']; } ?>">
                        </div>
                        <div class="input-field col s12">
                            <label>Employee ID</label>
                            <input type="text" id="empno" name="empno" class="form-control" value="<?php if(!empty($_POST['empno'])) { echo $_POST['empno']; } elseif(!empty($emp[0]['employeeid'])) { echo $emp[0]['employeeid']; } ?>">
                        </div>
                    </div>
                        <div class="col-lg-4" style="padding-left:0;">
                            <?php if($this->uri->segment(2) == "edit") { ?>
                            <button type="submit" name="saveinfo" class="btn btn-lg btn-primary btn-block">Save</button>
                            <?php } else { ?>
                            <button type="submit" name="addnew" class="btn btn-lg btn-primary btn-block">Save</button>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </form>