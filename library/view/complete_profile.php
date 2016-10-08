<div class="col-md-6 col-md-push-3 complete-profile-box">
    <div class="title">Complete Your Profile</div>
    <p class="response-msg error"><?php postSet('submitCompletedProfile',new ProfileController(),'complete_profile') ?></p>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <div class="col-md-4 col-md-push-4 set-profile-picture">
        <label for="uploadImage1" style="cursor: pointer;">
            <img id="uploadPreview1" class="img-circle" src="../../assets/img/nophoto.png"/>
        </label>
        <span class="help-block">select your profile picture</span>
        <input id="uploadImage1" style="visibility: hidden;" class="image-upload-button" type="file"
               name="profile_photo" onchange="PreviewImage1();" required="">
        </div>
    <div class="clearfix"></div>
        <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        <label for="username" class="username">Username</label>
        <input type="text" name="_username" class="form-control user-name" placeholder="username">
    </div>
            <div class="form-group">
                <input type="submit" value="complete Profile" name="submitCompletedProfile" class="btn btn-success pull-right">
            </div>
            </div>
        </form>
</div>
<script type="text/javascript">
    function PreviewImage1() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview1").src = oFREvent.target.result;
        };
    };
</script>