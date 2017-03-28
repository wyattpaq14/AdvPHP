<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<div class="container-fluid">
    
<form class="form-horizontal" action="#" method="post">
    <div class="row">
    <div  class="col-md-4 col-md-offset-4"> 
    Full Name: <input type="text" name="fullname" value="<?php echo $fullname ?>" />
    <br/>
    <br/>
    </div>
    </div>
    <div class="row">
         <div  class="col-md-4 col-md-offset-4"> 
    Email: <input type="text" name="email" value="<?php echo $email ?>" />
    <br/>
    <br/>
    </div>
     </div>
    <div class="row">
         <div  class="col-md-4 col-md-offset-4"> 
    Address: <input type="text" name="addressline1" value="<?php echo $addressline1 ?>" />
    <br/>
    <br/>
    </div>
     </div>
    <div class="row">
         <div  class="col-md-4 col-md-offset-4"> 
    City: <input type="text" name="city" value="<?php echo $city ?>" />
    <br/>
    <br/>
    </div>
     </div>
    <div class="row">
         <div  class="col-md-4 col-md-offset-4"> 
    <select name="state">
        <?php foreach ($states as $key => $value): ?> 
            <option value="<?php echo $key; ?>" <?php if ($state == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
    <br/>
    <br/>
    </div>
     </div>
    <div class="row">
         <div  class="col-md-4 col-md-offset-4"> 
    Zip: <input type="text" name="zip" value="<?php echo $zip ?>" />
    <br/>
    <br/>
    </div>
     </div>
    <div class="row">
         <div  class="col-md-4 col-md-offset-4"> 
    Birthday: <input type="date" name="birthday" value="<?php echo $birthday ?>" />
    <br/>
    <br/>
    </div>
     </div>
    <div class="row">
         <div  class="col-md-4 col-md-offset-4"> 
    <input class="btn btn-default" type = "submit" value="submit" />
    </div>
     </div>
</form>
</div>
