<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Multiple Upload Gambar Menggunakan Codeigniter 4 - Ilmu Coding</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>

    <div class="container mt-5 mb-5 text-center">
        <h4>Tutorial Multiple Upload Gambar Menggunakan Codeigniter 4 - Ilmu Coding</h4>
    </div>
    <div class="container">

        <div class="card">
        
            <div class="card-header">Form Upload</div>

            <div class="card-body">

                <?php if(!empty(session()->getFlashdata('success'))){ ?>

                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success');?>
                    </div>     
                
                <?php } ?>

                <?= form_open_multipart(base_url('upload/process')); ?>

                <div class="form-group">
                    <label for="">Topik</label>
                    <input type="text" name="title" placeholder="Enter topik" class="form-control"> 
                </div>
                
                <div class="form-group">
                <label for="">Files</label>
                    <input type="file" name="file_upload[]" multiple> 
                </div>

                <div class="form-group">
                    <?= form_submit('Send', 'Send', ['class' => 'btn btn-primary']) ?>
                </div>

                <?= form_close() ?>

            </div>            

        </div>
        
        
    
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>