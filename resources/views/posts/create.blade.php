<div class="login">

    <div class="row">

        <div class="offset-md-4 col-md-4 border text-center p-5 bg-white">
        <div><center> <a class = "btn btn-primary" href="/post">Voltar</a> </center></div>


            <h1 class="">Poste seu assunto !</h1>



            <form method="POST" enctype="multipart/form-data" action="/posts">
                {{csrf_field() }}
                <div class="form-group row">


                    <div class="col-md-12">

                        <input placeholder="Título" id="filter" type="text" class="form-control" name="filter" >


                    </div>

                </div>


<!--                <div class="form-group row">

                  <div class="col-md-12">

                      <textarea placeholder="Título" id="title" type="text" class="form-control" name="title" required=""></textarea>

                  </div>
                </div> -->
                <div class="form-group row">
                    <div class="col-md-12">

                        <textarea placeholder="description" id="description" type="text" class="form-control" name="description" required=""> </textarea>

                    </div>

                </div>

                <div class="form-group row">


                    <div class="col-md-12">

                        <input type="file" class="form-control" name="image_path">


                    </div>

                </div>


                <div class="form-group row mt-0">

                    <div class="col-md-12">

                        <button type="submit" class="btn btn-primary">

                            Postar

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
