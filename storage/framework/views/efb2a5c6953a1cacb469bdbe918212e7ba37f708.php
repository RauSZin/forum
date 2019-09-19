<div class="login">

    <div class="row">

        <div class="offset-md-4 col-md-4 border text-center p-5 bg-white">


            <h1 class="">Larainsta</h1>



            <form method="POST" action="<?php echo e(route('login')); ?>">


                <?php echo e(csrf_field()); ?>



                <div class="form-group row">


                    <div class="col-md-12">

                        <input placeholder="Email" id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required="" autofocus="">


                        <?php if($errors->has('email')): ?>

                            <span class="invalid-feedback" role="alert">

                                <strong><?php echo e($errors->first('email')); ?></strong>

                            </span>

                        <?php endif; ?>

                    </div>

                </div>


                <div class="form-group row">


                    <div class="col-md-12">

                        <input placeholder="senha" id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required="">


                        <?php if($errors->has('password')): ?>

                            <span class="invalid-feedback" role="alert">

                                <strong><?php echo e($errors->first('password')); ?></strong>

                            </span>

                        <?php endif; ?>

                    </div>

                </div>


                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">

                        <div class="form-check">

                            <!--  <input type="checkbox" name="remember" id="remember"  class="form-check-input" <?php #echo e(="" old('remember') ? 'checked' :=""); ?>> -->


                            <label class="form-check-label" for="remember">

                                Recordarme

                            </label>

                        </div>

                    </div>

                </div>


                <div class="form-group row mt-0">

                    <div class="col-md-12">

                        <button type="submit" class="btn btn-primary">

                            Entrar

                        </button>




                    </div>

                </div>

            </form>





        </div>

    </div>


   <div class="row mt-4">

    <div class="offset-md-4 col-md-4 bg-white border text-center">

        <p class="m-3">

            Não tem uma conta? <a href="<?php echo e(route('register')); ?>">Registre-se</a>

        </p>

    </div>

    </div>

</div>
