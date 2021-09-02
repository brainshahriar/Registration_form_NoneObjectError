<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card shadow w-50" >
                 <div class="card-header">
                     <h5>Add Trainer</h5>

                     <?php if (!empty($errors)):?>
                        <div class="alert alert-danger">
                            <?php foreach ($errors as $field => $error): ?>
                                <p><?= $error ?></p>
                                <?php endforeach;?>
                        </div>
                        <?php endif; ?>


                        <?php if(session()->getTempdata('success')):?>
                            <div class="alert alert-success">
                                <?= session()->getTempdata('success'); ?>
                            </div>
                            <?php endif ; ?>
                     
<?= form_open (); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Number" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input type="text" class="form-control" name="course" placeholder="Enter Course Name" >
  </div>
  <div class="mb-3">
  <label>CV</label>
  <input name="cv" class="form-control"  type="file" >
</div>
 <br>
  <button type="submit" class="btn btn-primary">SignUp</button>
  
</div>
      
<?= form_close() ; ?>

                                    

                                   

                 
   
               
                 </div>
             </div>
         </div>
     </div>
 </div>
 <?= $this->endSection() ?>