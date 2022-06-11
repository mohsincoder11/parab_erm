
<div class="tab-pane fade" id="justify-pills-profile" role="tabpanel" aria-labelledby="justify-pills-profile-tab">
   
    <div style="padding: 10px;">
        <div class="col-md-4"> 
            <?php if($basic->profile!=null){
?>
 <img src="{{asset('public/employeeprofile/'.$basic->profile)}}" class="navbar-logo" alt="logo"
                style="width: 50%;">
<?php
            } else{
                ?>
                <img src="{{asset('public/assets/img/av1.png')}}" class="navbar-logo" alt="logo"
                style="width: 30%;">
                <?php
            } ?>
           
        </div>
        <form method="POST" id="profile_form" class="form-horizontal" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="hidden_id" value="{{$basic->id}}" class="hidden_id">
        <div class="col-md-3 form-group">
            <label>Choose Files </label>
            <input type="file" name="profile" id="profile" class="form-control" placeholder=Optional>
            <span id="profile_image"></span>
        </div>
        <div class="  form-group" align="left" style="margin-top: 2%;">
            <input type="submit"  name="action_button" id="addbutton" class="btn btn-primary" value="Add" />
        </div>
    </form>
    </div>


</div>