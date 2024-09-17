<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact-form</title>
  </head>
  <body>
    <section id="main">

    </section>
    <section id="footer">
        <div class="container-fluid mt-5 my-5 justify-content-end">
            <div class="row bg-light">
                <div class="col-lg-4 py-5">
                    <form action="#" method="post">
                            <label  class="text-center text-muted mb-2"for="contactform">Contact Form</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Your name" aria-label="Username" name="username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="email" class="form-control" placeholder="email" aria-label="Username" name="email" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea class="form-control" name="message" aria-label="Your message"></textarea>
                        </div>
                        <button class="btn btn-secondary my-2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
